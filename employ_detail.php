<?php
session_start();
include("functions.php");
chkSsid();
// idを取得
$id = $_GET["id"];

// DB接続
$pdo = db_con();

// データを取得してくる
$stmt = $pdo->prepare("SELECT * FROM gs_an_table WHERE id=:id");
$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

// データ表示
$view="";
if($status==false){
    error_db_info($stmt);
}else{
    $row = $stmt->fetch();
};


?>

<!DOCTYPE html>
<html lang="ja">
<?php include"head.html" ?>

<body>

<header>
    <h1>修正更新</h1>


</header>

<form action="employ_update.php" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
<table>
    <tr>
        <td>社員番号</td>
        <td><input type="number" name="employ_id" id="" min=100000 required value="<?=$row["employ_id"]?>"></td>
    </tr>
    <tr>
        <td>氏名</td>
        <td><input type="text" name="employ_name" id="" required value="<?=$row["employ_name"]?>"></td>
    </tr>
    <tr>
        <td>ふりがな</td>
        <td><input type="text" name="employ_yomi" id="" required value="<?=$row["employ_yomi"]?>"></td>
    </tr>
    <tr>
        <td>生年月日</td>
        <td><input type="date" name="employ_birthday" id="" required value="<?=$row["employ_birthday"]?>"></td>
    </tr>
    <tr>
        <td>入社日</td>
        <td><input type="date" name="employ_hiredate" id="" required value="<?=$row["employ_hiredate"]?>"></td>
    </tr>
    <tr>
        <td>時給</td>
        <td><input type="number" name="employ_Hwage" id="" required value="<?=$row["employ_Hwage"]?>"></td>
    </tr>
    <tr>
        <td>メモ</td>
        <td><input type="textarea" name="employ_memo" id="" value="<?=$row["employ_memo"]?>"></td>
    </tr>

</table>

<input type="submit" value="登録">
</form>

</body>
</html>