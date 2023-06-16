<!-- صفحةإضافة مشترك -->

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


    $pname ="";
    $activity ="";
    $confirmation ="";
    $paymentMethod ="";
    $mobilenum ="";
   
    
    
    $errorMessage ="";
    $successMessage="";


    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $pname =$_POST["pname"];
        $activity =$_POST["activity"];
        $confirmation =$_POST["confirmation"];
        $paymentMethod =$_POST["paymentMethod"];
        $mobilenum =$_POST["mobilenum"];
        
        

        do{
            if(empty($pname) || empty($confirmation) || empty($paymentMethod) || empty($mobilenum)){
                $errorMessage =" All the fields are required";
                break;
            }

            //add new user to db

            $sql = "INSERT INTO participants (pname,activity, confirmation,paymentMethod, mobilenum )".
                    "VALUES ('$pname','$activity' , '$confirmation','$paymentMethod', '$mobilenum' )";
             
            $result =$conn->query($sql);
            
            if(!$result){
                $errorMessage = "Invalid query:" . $conn->error;
                break;
            }


            $pname ="";
            $activity ="";
            $confirmation ="";
            $paymentMethod ="";
            $mobilenum ="";
            
            

            $successMessage="تم إضافة المشترك بنجاح" ;
            
            header("location: Edit&Delete.php");
            exit;

            

        }while(false);
    
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

        <title>Add</title>


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

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
        <div class="container my-5">
          <h2>إضافة مشترك</h2>
          <?php
          if(!empty($errorMessage)){
            echo"
            <div class='alert alert-warning alert-dismissble fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-lable='Close'></button>
            </div>
            ";
          }
          ?>
          <form  method="post">
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label">الاسم الثلاثي</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="pname" value="<?php echo $pname;?>">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label">اسم الفعالية</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="activity" value="<?php echo $activity;?>">
              </div>
            </div>
            <div class="row mb-3" style="margin-right: 310px;">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="con" id="flexCheckChecked" name="confirmation" value="<?php echo $confirmation;?>">
                <label class="form-check-label" for="flexCheckChecked">
                  تأكيد الحجز
                </label>
              </div>
            </div>
            <div class="row mb-3" style="margin-right: 310px;">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="2" id="flexCheckChecked1" name="paymentMethod" value="<?php echo $paymentMethod;?>">
                <label class="form-check-label" for="flexCheckChecked1">
                الدفع كاش
                </label>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label">رقم الهاتف</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="mobilenum" value="<?php echo $mobilenum;?>">
              </div>
            </div>
           

            <?php
                if(!empty($successMessage)){
                    echo"
                    <div class='alert alert-success alert-dismissble fade show' role='alert'>
                        <strong>$successMessage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-lable='Close'></button>
                    </div>
                    ";}
            ?>

            <div class="row mb-3">
              <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-dark">إضافة</button>
              </div>
              <div class="col-sm-3 d-grid">
                <a class="btn btn-outline-dark" href="Subscriber management.php" role="button">إلغاء</a>
              </div>
            </div>

          </form>
        </div>
      </main>
    </div>

  </body>
</html>