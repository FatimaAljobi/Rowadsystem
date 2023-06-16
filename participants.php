<!-- صفحة أدارة المشاركين -->

<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="static/css/bootstrap.rtl.min.css">
        <script src="static/js/bootstrap.bundele.min.js"></script>
        <script src="static/js/bootstrap.bundle.js"></script>
        <link rel="icon" href="static/images/65bcdf35dae76dab1cacb1622cb61725.svg" sizes="32x32" type="image/png" class="bg-dark" style="border-radius:10 ; border-color:black; border: 20px;">

        <title>participants</title>

        <link href="../assets/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <link href="assets/dist/css/dashboard.rtl.css" rel="stylesheet">
        
  </head>
  <body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="Admin.php">BLOCK ONE - ROWAD</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3" href="signin.php">تسجيل الخروج</a>
        </div>
      </div>
    </header>


    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="Admin.php">
                  <span data-feather="home"></span>
                  التقارير 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="participants.php">
                  <span data-feather="users"></span>
                  أدارة المشاركين
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="events.php">
                  <span data-feather="layers"></span>
                  Activities
                </a>
              </li>
            </ul>
          </div>     
        </nav>
      </div>

      <div class="container py-4" dir="ltr">

        <div class="row align-items-md-stretch mb-3">
          <div class="col-md-5">
            <div class="h-100 p-5 bg-light border rounded-3">
              <h2>أدارة المشتركين</h2>
              <p>لأضافة , تعديل معلومات أو حذف المشتركين</p>
              <a class="btn btn-outline-secondary" href="Subscriber management.php" role="button">أضغط هنا</a>
            </div>
          </div>
          <div class="col-md-5">
            <div class="h-100 p-5 text-white bg-dark rounded-3">
              <h2>تأكيد الحجز</h2>
              <p>لتبيت مقاعد المشتركين الذي تم تسجيلهم</p>
              <a class="btn btn-outline-light" href="reservation_confirmation.php" role="button">أضغط هنا</a>
            </div>
          </div>
        </div>
        <div class="row align-items-md-stretch">
          <div class="col-md-5">
            <div class="h-100 p-5 text-white bg-dark rounded-3">
              <h2>قائمة الأنتظار</h2>
              <p>معلومات المسجلين الأضافيين</p>
              <a class="btn btn-outline-light" href="waitinglist.php" role="button">أضغط هنا</a>
            </div>
          </div>
          <div class="col-md-5">
            <div class="h-100 p-5 bg-light border rounded-3">
              <h2>قائمة المؤكدين</h2>
              <p>تقارير عن المشتركين المؤكدين</p>
              <a class="btn  btn-outline-secondary" href="Reports.php" role="button">أضغط هنا</a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>


  </body>
</html>