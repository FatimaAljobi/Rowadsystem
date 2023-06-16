<!-- صفحة قائمة المشتركين -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rowaddb";

// // Create connection
$conn =new mysqli($servername, $username, $password, $dbname);
// // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  $id='';
  $pname='';
  $activity='';
  $confirmation='';
  $mobilenum='';
  $paymentMethod='';


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

        <title>Edit & Delete</title>


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
    
    <div class="container my-5">
    <div class="row">
        <div class="container py-4" dir="ltr">

                    
        
          
          <div  dir="rtl" style=" float: right;"> 
            <h2 style=color:black;>قائمة المشتركين</h2>
          </div>

          
        </div>
        <br>
        <div class="btn-group" role="group" aria-label="back"  >
          <a class="nav-link" href="Subscriber management.php">
          <button type="button" class="btn btn-outline-dark" >الرجوع</button>
        </div>

        
     
        </div>
      </div>
        
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>الاسم الثلاثي</th>
                    <th>اسم الفعالية</th>
                    <th>التأكيد </th>
                    <th>رقم الهاتف</th>
                    <th>وقت الانشاء</th>
                    <th>عمل</th>
                </tr>
            </thead>
            <tbody>
                <?php

                //read all row from db table
                $sql="SELECT * FROM participants";
                $result= $conn->query($sql);
                

                if (!$result) {
                    die("Invalid query: " . $conn->error);
                  }
                  

                // read data of each row
                while($row = $result->fetch_assoc()){
                    echo"<tr>
                    <td>$row[id]</td>
                    <td>$row[pname]</td>
                    <td>$row[activity]</td>
                    <td>$row[confirmation]</td>
                    <td>$row[mobilenum]</td>
                    <td>$row[created_at]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='Edit1.php?id=$row[id]'>تعديل</a>
                        <a class='btn btn-danger btn-sm' href='Delete1.php?id=$row[id]'>حذف</a>
                    </td>
                </tr>"
                ;
                }  
                ?>
                
            </tbody>
        </table>
    </div>
    </main>
    
    
</body>
</html>