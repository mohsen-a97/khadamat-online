<?php
session_start();

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- font -->
  <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/font-face.css" rel="stylesheet" type="text/css" />
  <!-- datepicker css-->
  <link rel="stylesheet" href="https://unpkg.com/persian-datepicker@latest/dist/css/persian-datepicker.min.css" />
  <!-- Bootstrap css-->
  <link rel="stylesheet" href="css/bootstrap.rtl.min.css" />
  <!-- styles -->
  <link rel="stylesheet" href="css/styles.css" />
  <!-- Bootstrap js -->
  <script src="js/bootstrap.bundle.min.js" defer></script>
  <!-- datepicker js -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://unpkg.com/persian-date@latest/dist/persian-date.min.js"></script>
  <script src="https://unpkg.com/persian-datepicker@latest/dist/js/persian-datepicker.min.js"></script>
  <!-- scripts js -->
  <script src="js/scripts.js" defer></script>
  <title>khadamat online</title>
</head>

<body id="page-top">
  <!-- notification message -->
  <?php if (isset($_SESSION['success'])) : ?>
    <div class="success alert alert-success alert-dismissible alert-message ">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <p><?php echo $_SESSION['success'];
          unset($_SESSION['success']) ?>
      </p>
    </div>
  <?php endif ?>
  <!-- navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="#page-top">لوگو</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#page-top">خانه</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">درباره ما</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">خدمات</a>
          </li>
        </ul>
      </div>
      <a href="login.php" class="btn text-white-75" id="btn_login">ورود/ثبت نام</a>
      <div class="dropdown" id="btn_profile">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          پروفایل
        </button>
        <ul class="dropdown-menu bg-black" aria-labelledby="dropdownMenuButton1">
          <li>
            <form action="">
              <input type="submit" value="خدمات درخواست شده" name="list_services" />
            </form>
          </li>
          <li>
            <a class="dropdown-item" href="index.php?logout='1'">خروج</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- header -->
  <header>
    <div class="container px-4 px-lg-5 h-100">
      <div class="
            row
            gx-4 gx-lg-5
            h-100
            align-items-center
            justify-content-center
            text-center
          ">
        <div class="col-lg-8 align-self-end">
          <h1 class="text-white font-weight-bold">شرکت خدمات آنلاین</h1>
          <hr class="divider" />
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white mb-5">
            استفاده از خدمات روزانه در محل یکی از راه‌های صرفه‌جویی در وقت و
            هزینه است که با توجه به سبک زندگی امروزی بسیار ضروری و کاربردی
            است. شرکت ما؛ سرویس ارائه خدمات در محل، امکان دسترسی به خدمات
            ضروری و کاربردی را در کمترین زمان و با مناسب‌ترین قیمت فراهم کرده
            است.
          </p>
          <a class="btn btn-primary btn-lg" href="#services">خدمات</a>
        </div>
      </div>
    </div>
  </header>
  <!-- about us -->
  <section id="about" class="container">
    <div class="row featurette align-items-center">
      <div class="col-md-7">
        <h2 class="featurette-heading my-4">شرکت خدمات آنلاین</h2>
        <h3 class="my-5">
          شامل مجموعه ای از خدمات است که به شما کمک می کند که زندگی بهتر و
          راحت تری داشته باشید
        </h3>
        <p class="lead">
          با استفاده از سایت ما، می‌توانید از خدمات متنوع ارئه شده، مانند
          نظافت منزل، لوله کشی، کارواش و خدمات خودرو، نقاشی ساختمان، تعویض
          روغن، خدمات زیبایی و ... را با حضور متخصصین حرفه‌ای در محل دریافت
          کنید و نگران کمبود وقت و یافتن متخصص ماهر و معتمد نباشید.
        </p>
      </div>
      <div class="col-md-5">
        <img src="images/a.jpg" alt="about us" id="about_img" />
      </div>
    </div>
  </section>
  <section id="services" class="container">
    <h5 id="services_warning" class="text-center">
      برای ارسال درخواست وارد سایت شوید
    </h5>
    <div class="album py-5">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm">
              <img src="images/1.jpg" alt="" class="img-fluid" />

              <div class="card-body">
                <h5 class="card-title">تاسیسات و لوله کشی</h5>
                <form action="">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="لوله کشی آب و گاز و فاضلاب" id="s11" name="services[]" />
                    <label class="form-check-label" for="s11">
                      لوله کشی آب و گاز و فاضلاب
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="پکیج و موتورخانه" id="s12" name="services[]" />
                    <label class="form-check-label" for="s12">
                      پکیج و موتورخانه
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="توالت و روشویی" id="s13" name="services[]" />
                    <label class="form-check-label" for="s13">
                      توالت و روشویی
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="شیرآلات و سینک" id="s14" name="services[]" />
                    <label class="form-check-label" for="s14">
                      شیرآلات و سینک
                    </label>
                  </div>
                  <label for="date">تاریخ</label>
                  <input type="text" name="date" id="date" class="datepicker" required />
                  <button class="w-100 btn btn-primary btn-lg my-4 btn_services" type="submit" name="reg_service">
                    ارسال درخواست
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="images/2.jpg" alt="" class="img-fluid" />

              <div class="card-body">
                <h5 class="card-title">سرمایش و گرمایش</h5>
                <form action="">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="نصب و سرویس کولر آبی" id="s21" name="services[]" />
                    <label class="form-check-label" for="s21">
                      نصب و سرویس کولر آبی
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="نصب و سرویس اسپیلت" id="s22" name="services[]" />
                    <label class="form-check-label" for="s22">
                      نصب و سرویس اسپیلت
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="نصب و سرویس آبگرمکن" id="s23" name="services[]" />
                    <label class="form-check-label" for="s23">
                      نصب و سرویس آبگرمکن
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="نصب و سرویس پکیج" id="s24" name="services[]" />
                    <label class="form-check-label" for="s24">
                      نصب و سرویس پکیج
                    </label>
                  </div>
                  <label for="date">تاریخ</label>
                  <input type="text" name="date" id="date" class="datepicker" />
                  <button class="w-100 btn btn-primary btn-lg my-4 btn_services" type="submit" name="reg_service">
                    ارسال درخواست
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="images/3.jpg" alt="" class="img-fluid" />

              <div class="card-body">
                <h5 class="card-title">شستشو</h5>
                <form action="">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="نظافت منزل و محل کار" id="s31" name="services[]" />
                    <label class="form-check-label" for="s31">
                      نظافت منزل و محل کار
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="ضدعفونی محیط" id="s32" name="services[]" />
                    <label class="form-check-label" for="s32">
                      ضدعفونی محیط
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="شسستشوی مبل" id="s33" name="services[]" />
                    <label class="form-check-label" for="s33">
                      شسستشوی مبل
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="شستشوی فرش" id="s34" name="services[]" />
                    <label class="form-check-label" for="s34">
                      شستشوی فرش
                    </label>
                  </div>
                  <label for="date">تاریخ</label>
                  <input type="text" name="date" id="date" class="datepicker" />
                  <button class="w-100 btn btn-primary btn-lg my-4 btn_services" type="submit" name="reg_service">
                    ارسال درخواست
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="images/4.jpg" alt="" class="img-fluid" />

              <div class="card-body">
                <h5 class="card-title">خدمات برقی</h5>
                <form action="">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="سیم کشی و برق کاری" id="s41" name="services[]" />
                    <label class="form-check-label" for="s41">
                      سیم کشی و برق کاری
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="آیفون" id="s42" name="services[]" />
                    <label class="form-check-label" for="s42"> آیفون </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="آسانسور و بالابر" id="s43" name="services[]" />
                    <label class="form-check-label" for="s43">
                      آسانسور و بالابر
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="نور پردازی" id="s44" name="services[]" />
                    <label class="form-check-label" for="s44">
                      نور پردازی
                    </label>
                  </div>
                  <label for="date">تاریخ</label>
                  <input type="text" name="date" id="date" class="datepicker" />
                  <button class="w-100 btn btn-primary btn-lg my-4 btn_services" type="submit" name="reg_service">
                    ارسال درخواست
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="images/5.jpg" alt="" class="img-fluid" />

              <div class="card-body">
                <h5 class="card-title">لوازم خانگی و اداری</h5>
                <form action="">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="نصب و تعمیر یخچال" id="s51" name="services[]" />
                    <label class="form-check-label" for="s51">
                      نصب و تعمیر یخچال
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="اجاق گاز، فر و هود" id="s52" name="services[]" />
                    <label class="form-check-label" for="s52">
                      اجاق گاز، فر و هود
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="نصب و تعمیر جاروبرقی" id="s53" name="services[]" />
                    <label class="form-check-label" for="s53">
                      نصب و تعمیر جاروبرقی
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="نصب و تعمیر ماشین ظرف شویی" id="s54" name="services[]" />
                    <label class="form-check-label" for="s54">
                      نصب و تعمیر ماشین ظرف شویی
                    </label>
                  </div>
                  <label for="date">تاریخ</label>
                  <input type="text" name="date" id="date" class="datepicker" />
                  <button class="w-100 btn btn-primary btn-lg my-4 btn_services" type="submit" name="reg_service">
                    ارسال درخواست
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="images/6.jpg" alt="" class="img-fluid" />

              <div class="card-body">
                <h5 class="card-title">خدمات ساختمانی</h5>
                <form action="">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="بنایی" id="s61" name="services[]" />
                    <label class="form-check-label" for="s61"> بنایی </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="دکوراسیون داخلی" id="s62" name="services[]" />
                    <label class="form-check-label" for="s62">
                      دکوراسیون داخلی
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="گچ کاری" id="s63" name="services[]" />
                    <label class="form-check-label" for="s63">
                      گچ کاری
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="درب و پنجره" id="s64" name="services[]" />
                    <label class="form-check-label" for="s64">
                      درب و پنجره
                    </label>
                  </div>
                  <label for="date">تاریخ</label>
                  <input type="text" name="date" id="date" class="datepicker" />
                  <button class="w-100 btn btn-primary btn-lg my-4 btn_services" type="submit" name="reg_service">
                    ارسال درخواست
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="images/7.jpg" alt="" class="img-fluid" />

              <div class="card-body">
                <h5 class="card-title">خدمات خودرو</h5>
                <form action="">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="کارواش" id="s71" name="services[]" />
                    <label class="form-check-label" for="s71"> کارواش </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="مکانیکی" id="s72" name="services[]" />
                    <label class="form-check-label" for="s72">
                      مکانیکی
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="نور و سیم کشی خودرو" id="s73" name="services[]" />
                    <label class="form-check-label" for="s73">
                      نور و سیم کشی خودرو
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="باتری" id="s74" name="services[]" />
                    <label class="form-check-label" for="s74"> باتری </label>
                  </div>
                  <label for="date">تاریخ</label>
                  <input type="text" name="date" id="date" class="datepicker" />
                  <button class="w-100 btn btn-primary btn-lg my-4 btn_services" type="submit" name="reg_service">
                    ارسال درخواست
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="images/8.jpg" alt="" class="img-fluid" />

              <div class="card-body">
                <h5 class="card-title">خدمات خانگی</h5>
                <form action="">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="قفل و کلیدسازی" id="s81" name="services[]" />
                    <label class="form-check-label" for="s81">
                      قفل و کلیدسازی
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="سم پاشی" id="s82" name="services[]" />
                    <label class="form-check-label" for="s82">
                      سم پاشی
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="باغبان" id="s83" name="services[]" />
                    <label class="form-check-label" for="s83"> باغبان </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="خشک شویی" id="s84" name="services[]" />
                    <label class="form-check-label" for="s84">
                      خشک شویی
                    </label>
                  </div>
                  <label for="date">تاریخ</label>
                  <input type="text" name="date" id="date" class="datepicker" />
                  <button class="w-100 btn btn-primary btn-lg my-4 btn_services" type="submit" name="reg_service">
                    ارسال درخواست
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="images/9.jpg" alt="" class="img-fluid" />

              <div class="card-body">
                <h5 class="card-title">خدمات حمل و نقل</h5>
                <form action="">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="اسباب کشی" id="s91" name="services[]" />
                    <label class="form-check-label" for="s91">
                      اسباب کشی
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="حمل بار" id="s92" name="services[]" />
                    <label class="form-check-label" for="s92">
                      حمل بار
                    </label>
                  </div>
                  <label for="date">تاریخ</label>
                  <input type="text" name="date" id="date" class="datepicker" />
                  <button class="w-100 btn btn-primary btn-lg my-4 btn_services" type="submit" name="reg_service">
                    ارسال درخواست
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- footer -->
  <footer class="text-center text-lg-start container border-top">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <p>
            خدمات آنلاین این امکان را به کاربران خود می دهد تا خدمات مورد
            نیازشان، اعم از نظافت منزل، قالیشویی و خشکشویی، تعمیرات لوله کشی ،
            کارواش و غیره را از طریق سایت به سهولت و در هر ساعتی از شبانه روز
            سفارش دهند. کلیه متخصصین دارای هویت مشخص، گواهی نامه های مهارتی،
            گواهی عدم سوء پیشینه و عدم اعتیاد بوده و از دیگر فیلترهای تأیید
            صلاحیت عبور کرده اند تا به راحتی بتوانید به آنها اعتماد کنید.
          </p>
        </div>
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0 text-center">
          <h6>فهرست</h6>
          <ul class="nav flex-column">
            <li class="nav-item mb-2">
              <a href="#page-top" class="nav-link p-0 text-muted">خانه</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#about" class="nav-link p-0 text-muted">درباره ما</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#services" class="nav-link p-0 text-muted">خدمات</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      کپی رایت 2021
    </div>
  </footer>
  <script type="text/javascript">
    $(".datepicker").persianDatepicker({
      initialValue: false,
      observer: true,
      format: "YYYY/MM/DD",
    });
  </script>
</body>

</html>