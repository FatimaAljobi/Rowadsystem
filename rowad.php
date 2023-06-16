<?php
include_once 'db.php';


            if(isset($_POST['submit'])){
              $pname=$_POST['pname'];
              $activity=$_POST['activity'];
              $mobilenum=$_POST['mobilenum'];
              $payment = $_POST['paymentMethod'];
              $pay = ($payment=="credit")? 1 : 2;       // كاش =2    كريمي = 1
              $sql="insert into `participants` (pname,activity,`mobilenum` , paymentMethod)values ('$pname','$activity',$mobilenum , $pay)";
              $result=mysqli_query($db,$sql);
              if($result)
              {
             header("location:rowad.php");
              }
              else{
                die(mysqli_error($db));
              } 
            
          }
        
      ?>


   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/bootstrap.rtl.min.css">
    <script src="static/js/bootstrap.bundele.min.js"></script>
    <script src="static/js/bootstrap.bundle.js"></script>
    <link rel="icon" href="static/images/65bcdf35dae76dab1cacb1622cb61725.svg" sizes="32x32" type="image/png" class="bg-dark" style="border-radius:10 ; border-color:black; border: 20px;">

    <title>Document</title>
</head>
<body>
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="Admin.php">BLOCK ONE - ROWAD</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>

<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="mb-4" src="static/images/rowad_white_logo.svg" style="background:dark;" alt="" width="90" height="70">
            

      <h2>اهلاوسهلا بكم </h2>
      <p class="lead">هنا يجب عليك التسجيل لحجز مقعدك</p>
    </div>


    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">عدد المقاعد</span>

          <!-- // $sql ="Select * from participants ";
          // // $result = mysqli_query($db,$sql)
          // $result=mysqli_query($db,"SELECT * FROM  participants WHERE pname='$pname'");     
          // if ($pname)= mysqli_num_rows -->
          <span class="badge bg-primary rounded-pill">30</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
      
            <div>
              <h6 class="my-0">سعر المقعد</h6>
              <small class="text-muted"></small>
            </div>
            <span class="text-muted">3RY</span>
          </li>
        </ul>

      
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">التسجيل</h4>
        <form class="needs-validation" novalidate action="rowad.php" method="post"> 
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">الاسم الثلاثي</label>
              <input type="text" class="form-control" name="pname" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-md-12">
              <label for="number" class="form-label">اضافةرقم</label>
              <input type="text" class="form-control" name="mobilenum" placeholder="" required>
              <div class="invalid-feedback">
               Valid number is required
              </div>
            </div> 

            
            
            <div class="row g-3">
            <div class="col-sm-6">
              <label for="Event name" class="form-label">اسم الفعالية </label>
              <input type="text" class="form-control" name="activity" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid Event name is required.
              </div>
         
            <hr class="my-4">


          <h4 class="mb-3">طريقة الدفع</h4>

<div class="my-3">
  <div class="form-check">
    <input id="credit" value="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
    <label class="form-check-label" for="credit">الكريمي</label>
  </div>
  <div class="form-check">
    <input id="debit" value="debit"   name="paymentMethod" type="radio" class="form-check-input" required>
    <label class="form-check-label" for="debit">كاش </label>
  </div>
        
         
    

        
          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit" name="submit" >تسجيل</button>
        </form>
      </div>
    </div>
  </main>


</body>
</html>

