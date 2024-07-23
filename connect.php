<?php
$dbhost='localhost';
$dbuser= 'root';
$dbpass= '';
$dbName= 'cms';
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbName);
if(!$conn){
    die('Hey something went wrong please recheck');
}
// else{
//     echo "<h2>Php Connected Sucessfully</h2>";
// }
?>