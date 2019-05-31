<?php
session_start();
include 'meekro.php';
DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'lightwave';
if(isset($_GET)){
    $teacher_id = $_GET['id'];
    $teacher_password = $_GET['password'];
    
    $count = DB::query("SELECT teacher_id,password FROM teacher_table WHERE teacher_id = %i AND password = %s",$teacher_id,$teacher_password);
    if(count($count) > 0){
        $_SESSION['teacher_id'] = $teacher_id;
        echo '2';
    }else{
        echo '1';
    }
}


