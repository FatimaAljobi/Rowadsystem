<!-- صفحة كود التأكيد -->

<?php
include_once 'db.php';


            if(isset($_POST['confirmation'])){
              $id=$_POST['id'];
              $confirmation=$_POST['confirmation'];
              $sql="update  `participants` set confirmation ='con' where id = ".$id." ";
              $result=mysqli_query($db,$sql);
              if($result)

              {
              header("location:reservation_confirmation.php");
               }
            }

?>