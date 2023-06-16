<!-- صفحة تسجل الدخول -->

<?php
        session_start();
        if(isset($_POST['login']))
        {
            $server = "localhost";
            $user = "root";
            $pass = "";
            $db = "rowaddb";
            
            $conn =mysqli_connect($server, $user, $pass, $db);
            $result=mysqli_query($conn,"select * from adminpass");
            
            if($conn -> connect_errno)
            {
              echo "Database connection failed!<BR>";
              echo "Reason: ", $conn -> connect_error;
              exit();
            }
            else
            {
              $uname ='';
              $passw ='';

              if(isset($_POST['usern'])){
                  $uname=$_POST['usern'];
              }

              if(isset($_POST['passw'])){
                $passw=$_POST['passw'];
              }
              
              $sqls='';
              if(isset($_POST['login'])){
                $sql = "SELECT * FROM adminpass WHERE username='$uname' AND passcode='$passw'";   
                $result = $conn->query($sql);
                
              
                  if(mysqli_num_rows($result)>0){
                    $data =$result ->fetch_assoc();
                    if($data['passcode']===$passw)
                      {
                        $_SESSION['username'] = $uname;
                        header("location: Admin.php");
                        $_SESSION['success'] = "You are logged in";
                      }
                    else{ 
                      echo '<script type="text/javascript">
                      alert("Login is incorrect, please try again.");
                      </script>';
                     $_SESSION['Error'];
                    }

              }
              else{ 
                    echo '<script type="text/javascript">
                      alert("Login is incorrect, please try again.");
                    </script>';
                    }
              }
            }
         }
?>


<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="icon" href="static/images/65bcdf35dae76dab1cacb1622cb61725.svg" sizes="32x32" type="image/png" class="bg-dark" style="border-radius:10 ; border-color:black; border: 20px;">
    <title>Signin</title>


    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

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

    <link href="assets/dist/css/signin.css" rel="stylesheet">


  </head>

  <body class="text-center bg-dark">

    <main class="form-signin">
  
      <form method="POST" >
       
          <img class="mb-6" src="static/images/65bcdf35dae76dab1cacb1622cb61725.svg" style="background:dark;" alt="Block One" width="90" height="70">
            

            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="usern" required>
              <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="passw" required>
              <label for="floatingPassword">Password</label>
            </div>


            <button class="w-100 btn btn-lg btn-light" type="submit" name="login">تسجيل الدخول</button>
             


            <p class="mt-5 mb-3 text-muted">&copy; 2022</p>

          

            
      </form>
   </main>

        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>

   </body>

</html>
