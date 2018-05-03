<?php 
if(!isset($_SESSION)) {
    session_start();
}

require_once 'init.php';

if( isset($_GET['page']) ){
    $page = $_GET['page'];
    if(strpos($page, "_")!=0){
        $vetor = explode("_", $page);
        $folder = $vetor[0];
        $act = $vetor[1];
    }else{
        $folder = "";
        $act = "";
    }
    $fullpath = "module/$folder/$act.php";
    if(file_exists($fullpath) == false){
        $fullpath = "begin.php";
    }
}else{
    $fullpath = "begin.php";
}

include '1.php';
?>