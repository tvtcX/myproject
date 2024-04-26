<?php
$conn=mysqli_connect('localhost','root','','win');

if(!$conn){
    echo 'bad ' . mysqli_connect_error();
}
