<?php 
include"functions.php";

// 入力チェック
if(
    !isset($_POST["id"]) || $_POST["id"]=="" ||
    !isset($_POST["name"]) || $_POST["name"]=="" ||
    !isset($_POST["lid"]) || $_POST["lid"]=="" 
){
    exit("ParamError");
}

$id = $_POST["id"];
$name = $_POST["name"];
$lid = $_POST["lid"];
$kanri_flg = $_POST["kanri_flg"];
$life_flg = $_POST["life_flg"];

echo $id;
echo $name;
echo $lid;
echo $kanri_flg;
echo $life_flg;



// DB接続
$pdo = db_con();


$sql = "
    UPDATE gs_user_table SET 
        name = :name,
        lid = :lid,
        kanri_flg = :kanri_flg,
        life_flg = :life_flg 
    WHERE id=:id
    ";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(":id",$id, PDO::PARAM_INT);
$stmt->bindValue(":name",$name, PDO::PARAM_STR);
$stmt->bindValue(":lid",$lid, PDO::PARAM_STR);
$stmt->bindValue(":kanri_flg", $kanri_flg, PDO::PARAM_INT);
$stmt->bindValue(":life_flg", $life_flg, PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
    error_db_info($stmt);
}else{
    header("Location: setting_user.php");
    exit();
}


?>