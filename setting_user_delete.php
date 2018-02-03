<?php
include"functions.php";

$id = $_GET["id"];


// DB接続
$pdo = db_con();


$sql = "DELETE FROM gs_user_table WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(":id",$id, PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
    error_db_info($stmt);
}else{
    header("Location: setting_user.php");
    exit();
}

?>