<?php
session_start();

include "config.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $stat = $db->prepare("select * from addfiles where id=?");
    $stat->bindParam(1, $id);
    $stat->execute();
    $data = $stat->fetch();

    $file = 'uploads/'.$data['filename'];

    if(file_exists($file)){
          header('Content-Disposition: attachment; filename="'.basename($file).'"');  
          header('Content-Type: '.$data['type']);
          header('Content-Length: '.filesize($file));
          readfile($file);
          exit;
    }
}