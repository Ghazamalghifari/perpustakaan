<?php session_start();
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

 $query = $db->query("SELECT * FROM user WHERE username='$username'");
 
 $cek  = mysqli_num_rows($query);
 $data  = mysqli_fetch_array($query);

if(empty($username) && empty($password))
{
 header("location: index.php");
}
elseif(empty($username) && !empty($password))
{
 header("location: index.php");
}
elseif(!empty($username) && empty($password))
{
 header("location: index.php");
}
else
{
 if ($cek == 1) 
 {
  # code...
  if($username == $data['username'] && $password == $data['password'])
  {
   $_SESSION['username'] = $username;
   header("location:master_data.php");
  }
  else
  {
   header("location:index.php");
  }
 }
 else
 {
   header("location:index.php");
 }
}

 ?>