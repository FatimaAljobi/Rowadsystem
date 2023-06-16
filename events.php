<!-- Activities صفحة  -->

<?php
        session_start();

        require_once ('vendor/vendor/autoload.php'); // if you use Composer
//require_once('ultramsg.class.php'); // if you download ultramsg.class.php
    
$token="132fpv9lz97w23zw"; // Ultramsg.com token
$instance_id="instance14847"; // Ultramsg.com instance id
$client = new UltraMsg\WhatsAppApi($token,$instance_id);
    
$to="+967775226808"; 
$body=":رسالة رقم"; 
$api=$client->sendChatMessage($to,$body);   
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


        <link href="../assets/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
        <title>events</title>


        <link href="../assets/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

        <script src="../jquery/jquery-3.6.0.min.js"></script>

       
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
                <a class="nav-link " href="participants.php">
                  <span data-feather="users"></span>
                  أدارة المشاركين
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="events.php">
                  <span data-feather="layers"></span>
                  Activities
                  </a>
              </li>
            </ul>
          </div>     
        </nav>
      </div>
    
    <div class="container py-4" dir="ltr">

    <div class="row align-items-md-stretch mb-6">
    <div class="col-md-9">
    <div class="modal-header">
    <center><h4 class="modal-title">:أضافة رسالة جديدة </h4></center>  
      </div>
      <div class="modal-body">
       <form method="POST" id="addPostForm" enctype="multipart/form-data">
          
          <div class="form-group">
            <label for="post-body" class="col-form-label">:محتوى الرسالة</label>
            <textarea class="form-control" id="post-body" name="body" required></textarea>
          </div>
          <br>
          <div class="form-group">
          	 	:أختار صورة <input type="file"  class="form-control" name="filed" id="image" onchange="readURL(this, 'post-image-prev');" />
          	  <img id="post-image-prev"  src="#" alt=": صورة الحدث" style="margin-top: 5px; width: 100%; height: 200px;" />
          </div>
          <br>
           <div class="form-group">
           <input type="submit" name="submit" value="  ارسال عبر الوتساب" class="btn btn-dark form-control "/>
           </div>
           <br>
          <div class="form-group">
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0" nonce="dilSYGI6"></script>
            <div class="fb-share-button" data-href="https://www.mocacleveland.org/exhibitions/lee-mingwei-you-are-not-stranger" data-layout="button" data-size="small">
            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.mocacleveland.org%2Fexhibitions%2Flee-mingwei-you-are-not-stranger&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a>
            </div>
          </div>
        </form>

      </div>

    </div>
    </div>

    

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>


  </body>
</html>