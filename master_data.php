<?php session_start();

if(!isset($_SESSION['username']))
{
 # code...

 echo '<script> window.location.href="index.php";</script>';
}
else
{ 
 include "db.php";
 include "navbar.php";

}
 ?>


 
<?php include 'footer.php'; ?>