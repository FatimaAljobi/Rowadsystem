<!-- صفحة قائمة المؤكدين  -->

<?php
        session_start();
        
            $server = "localhost";
            $user = "root";
            $pass = "";
            $db = "rowaddb";

            $c = "con";

            $conn =mysqli_connect($server, $user, $pass, $db);
            $result=mysqli_query($conn,"select * from participants where confirmation ='$c'");
            
            if($conn -> connect_errno)
            {
              echo "Database connection failed!<BR>";
              echo "Reason: ", $conn -> connect_error;
              exit();
            }
            else
            {
              $id='';
              $pname='';
              $activity='';
              $confirmation='';
              $mobilenum='';
              $paymentMethod='';

              if(isset($_POST['id'])){
                $id=$_POST['id'];
            }
            if(isset($_POST['pname'])){
                $pname=$_POST['pname'];
            }
            if(isset($_POST['activity'])){
                $activity=$_POST['activity'];
            }
            if(isset($_POST['confirmation'])){
                $confirmation=$_POST['confirmation'];
            }
            if(isset($_POST['mobilenum'])){
                $mobilenum=$_POST['mobilenum'];
            }
            if(isset($_POST['paymentMethod'])){
              $paymentMethod=$_POST['paymentMethod'];
            }
         
            if (isset($_POST['submit'])) {
              $activity = $_POST['search'];
              $pname=$_POST['search'];
              $connect=mysqli_connect($server, $user, $pass, $db);
              if ($connect->connect_error) {
                  echo "connection Failed: " . $connect->connect_error;
              } else {
                  $result=mysqli_query($connect,"SELECT * FROM  participants WHERE activity='$activity'OR pname='$pname'");         
              }  
           }

           if (isset($_POST['reset'])){
            header("location: Reports.php");
         }
          

      }
      
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="static/css/bootstrap.rtl.min.css">
        <script src="static/js/bootstrap.bundele.min.js"></script>
        <script src="static/js/bootstrap.bundle.js"></script>
        <link rel="icon" href="static/images/65bcdf35dae76dab1cacb1622cb61725.svg" sizes="32x32" type="image/png" class="bg-dark" style="border-radius:10 ; border-color:black; border: 20px;">

        <title>Reports</title>

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
      
      @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");

            
      .height{
      height: 100vh;
      }


      .search{
      position: relative;
      box-shadow: 0 0 40px rgba(51, 51, 51, .1);
        
      }

      .search input{

      height: 60px;
      text-indent: 25px;
      border: 2px solid #d6d4d4;


      }


      .search input:focus{

      box-shadow: none;
      border: 2px solid blue;


      }

      .search .fa-search{

      position: absolute;
      top: 20px;
      left: 16px;

      }

      .search button{

      position: absolute;
      top: 5px;
      right: 5px;
      height: 50px;
      width: 110px;
      background: gray;

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


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">

    <form method='POST'>
    
      <div class="row">
        <div class="container py-4" dir="ltr">

                        
          <div class="col-md-12">

            <div class="search col-md-6 " style=" float: left;">
              <i class="fa fa-search"></i>
              <input type="text" class="form-control" name="search" placeholder="اسم المشترك/اسم الفعالية">
              <button class="btn btn-lg btn-dark " name="submit">Search</button>
            </div>
            
            <div  dir="rtl" style=" float: right;"> 
              <h2>قائمة المؤكدين</h2>
              <p> (No More Than 25) المشاركين الذي أكدوا أنضمامهم الى الفعالية</p>
            </div>
          
          </div>

          <div class="px-2 py-2" dir="rtl"  style=" float:left;">
            <button  class="btn btn-lg btn-dark" name="reset"  >Reset</button >
          </div>
        
        </div>
      </div>  

      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">.NO</th>
              <th scope="col">اسم المشترك</th>
              <th scope="col">الفعالية</th>
              <th scope="col">الموبايل</th>
            </tr>
          </thead>
          <tbody>
          <?php
                    while($row=mysqli_fetch_array($result)){
                        echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['pname']."</td>";
                    echo "<td>".$row['activity']."</td>";
                    echo "<td>".$row['mobilenum']."</td>";
                        echo "</tr>";
                     }
                 
                ?>
          </tbody>
        </table>

      </div>

      <div class="btn-group" role="group" aria-label="back"  >
      <a class="nav-link" href="participants.php">
      <button type="button" class="btn btn-outline-dark" >الرجوع</button>
      </div>

    </form>

    </main>
  </div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>


  </body>
</html>