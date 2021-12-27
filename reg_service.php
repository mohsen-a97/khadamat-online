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
if (isset($_POST['list_services'])) {
  $username = $_SESSION['username'];
  require("jdf.php");
  $db = mysqli_connect('localhost', 'root', '', 'db');
  $query = "SELECT * FROM services WHERE username='$username'";
  $result = mysqli_query($db, $query);
  echo "<div class='modal fade d-block show' id='modal_services'>
  <div class='modal-dialog modal-dialog-scrollable'>
    <div class='modal-content'>

      <!-- Modal Header -->
      <div class='modal-header'>
        <h4 class='modal-title'>درخواست ها</h4>
        <button type='button' class='btn-close close' data-bs-dismiss='modal'></button>
      </div>";
  echo "<div class='modal-body'>";
  echo "<table border='1' class='table table-striped'>
        <tr>
        <th>نام کاربری</th>
        <th>درخواست ها</th>
        <th>تاریخ</th>
        </tr>";

  while ($row = mysqli_fetch_array($result)) {

    echo "<tr>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['services'] . "</td>";
    $date = $row['date'];
    $date = explode('-', $date);
    $year = $date[0];
    $month   = $date[1];
    $day  = $date[2];
    $jalali = gregorian_to_jalali($year, $month, $day, '/');
    echo "<td>" . $jalali . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  echo "</div>";
  echo "<div class='modal-footer justify-content-start'>
  <button type='button' class='btn btn-danger close' data-bs-dismiss='modal'>بستن</button>
</div>
</div>
</div>
</div>";
}
