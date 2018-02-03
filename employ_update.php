<?php 
include"functions.php";

// 入力チェック
if(
    !isset($_POST["id"]) || $_POST["id"]=="" ||
    !isset($_POST["employ_id"]) || $_POST["employ_id"]=="" ||
    !isset($_POST["employ_name"]) || $_POST["employ_name"]=="" ||
    !isset($_POST["employ_yomi"]) || $_POST["employ_yomi"]=="" ||
    !isset($_POST["employ_birthday"]) || $_POST["employ_birthday"]=="" ||
    !isset($_POST["employ_hiredate"]) || $_POST["employ_hiredate"]=="" ||
    !isset($_POST["employ_Hwage"]) || $_POST["employ_Hwage"]=="" ||
    !isset($_POST["employ_memo"]) || $_POST["employ_memo"]==""
){
    exit("ParamError");
}

$id = $_POST["id"];
$employ_id = $_POST["employ_id"];
$employ_name = $_POST["employ_name"];
$employ_yomi = $_POST["employ_yomi"];
$employ_birthday = $_POST["employ_birthday"];
$employ_hiredate = $_POST["employ_hiredate"];
$employ_Hwage = $_POST["employ_Hwage"];
$employ_memo = $_POST["employ_memo"];

// DB接続
$pdo = db_con();


$sql = "
    UPDATE gs_an_table SET 
        employ_id = :employ_id,
        employ_name = :employ_name,
        employ_yomi = :employ_yomi,
        employ_birthday = :employ_birthday,
        employ_hiredate = :employ_hiredate,
        employ_Hwage = :employ_Hwage,
        employ_memo = :employ_memo,
        employ_updatetime = sysdate() 
    WHERE id=:id
    ";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(":id",$id, PDO::PARAM_INT);
$stmt->bindValue(":employ_id",$employ_id, PDO::PARAM_INT);
$stmt->bindValue(":employ_name", $employ_name, PDO::PARAM_STR);
$stmt->bindValue(":employ_yomi", $employ_yomi, PDO::PARAM_STR);
$stmt->bindValue(":employ_birthday", $employ_birthday, PDO::PARAM_INT);
$stmt->bindValue(":employ_hiredate", $employ_hiredate, PDO::PARAM_INT);
$stmt->bindValue(":employ_Hwage", $employ_Hwage, PDO::PARAM_INT);
$stmt->bindValue(":employ_memo", $employ_memo, PDO::PARAM_STR);
$status = $stmt->execute();

if($status==false){
    error_db_info($stmt);
}else{
    header("Location: employ.php");
    exit();
}

?>