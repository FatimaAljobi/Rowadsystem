<!-- صفحة ربط بقاعدة البيانات -->

<?php      
            $host = 'localhost';
            $username = 'root';
            $pass = '';
            $dbname = 'rowaddb';

            $db =mysqli_connect($host, $username, $pass, $dbname);

            if($db->connect_error)
{
    die("Connection Failed" .$db->connect_error);
}
?>