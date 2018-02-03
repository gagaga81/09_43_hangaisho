<?php
include"functions.php";

// 入力チェック
if(
    !isset($_POST["name"]) || $_POST["name"]=="" ||
    !isset($_POST["lid"]) || $_POST["lid"]=="" ||
    !isset($_POST["lpw"]) || $_POST["lpw"]=="" ||
    !isset($_POST["kanri_flg"]) || $_POST["kanri_flg"]=="" 
){
    exit("ParamError");
}


$name = $_POST["name"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];
$kanri_flg = $_POST["kanri_flg"];

// DB接続
$pdo = db_con();


$sql = "INSERT INTO gs_user_table(id, name, lid, lpw, kanri_flg, life_flg) 
VALUES(NULL, :name, :lid, :lpw, :kanri_flg, 0)";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(":name",$name, PDO::PARAM_STR);
$stmt->bindValue(":lid", $lid, PDO::PARAM_STR);
$stmt->bindValue(":lpw", $lpw, PDO::PARAM_STR);
$stmt->bindValue(":kanri_flg", $kanri_flg, PDO::PARAM_STR);
$status = $stmt->execute();

if($status==false){
    error_db_info($stmt);
}else{
    header("Location: setting_user.php");
    exit();
}

?>