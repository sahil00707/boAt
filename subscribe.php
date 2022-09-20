<?php 
$iii=$_POST['iii'];
require_once("db_connect.php");
$s=mysqli_query($conn, "SELECT * FROM emails");
$c=0;
while($r=mysqli_fetch_assoc($s)){
    if($r['email']==$iii){
        $c=1;
    }
}
if($c==0){
$e="INSERT INTO emails(email) VALUES('$iii')";

if(mysqli_query($conn,$e)){
    echo "ok";
}
}
else echo "oops";

?>