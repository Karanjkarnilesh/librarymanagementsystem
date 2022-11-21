<?php
$conn=mysqli_connect('localhost','root','','library_db');

if($conn)
{
    echo "connection Successfully";

}
else{
    echo "failed Connection";
}
?>