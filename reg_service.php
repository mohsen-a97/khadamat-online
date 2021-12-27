<?php
$errors = array();
if (isset($_POST['reg_service'])) {
  $username = $_SESSION['username'];
  require("jdf.php");
  $db = mysqli_connect('localhost', 'root', '', 'db');
  $date =  $_POST['date'];

  $date = explode('/', $date);
  $year = $date[0];
  $month   = $date[1];
  $day  = $date[2];
  $miladi = jalali_to_gregorian($year, $month, $day, '/');
  $services = (isset($_POST['services'])) ? $_POST['services'] : array();
  if (count($services) > 0) {

    $service = implode(',', $services);

    $query = "INSERT INTO services (username, services, date) 
      		  VALUES('$username', '$service', '$miladi')";
    mysqli_query($db, $query);
    $_SESSION['success'] = "درخواست شما با موفقیت ثبت شد";
  } else {
    array_push($errors, "یکی از گزینه ها را انتخاب کنید");
  }
}

