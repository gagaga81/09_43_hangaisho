<?php
session_start();
include("functions.php");
chkSsid();

$id = $_GET["id"];

// DB接続
$pdo = db_con();

// データを取得してくる
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=:id");
$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

// データ表示
$view="";
if($status==false){
    error_db_info($stmt);
}else{
    $row = $stmt->fetch();
};

// 削除ボタンの生成
$deleteBTN = "<input type='button' value='削除' onClick='location.href=\"setting_user_delete.php?id=".$id."\"'>";

// リセットボタンの生成
$resetBTN = "<input type='button' value='reset' onClick='location.href=\"setting_user_reset.php?id=".$id."\"'>";



?>

<!DOCTYPE html>
<html lang="ja">
<?php include"head.php" ?>

<body>

<header>
    <h1>修正更新</h1>


</header>

<form action="setting_user_update.php" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <table>
    <tr>
     <td>User Name</td>
     <td><input type="text" name="name" value="<?=$row["name"]?>" required></td>
 </tr>
 <tr>
     <td>User ID</td>
     <td><input type="text" name="lid" value="<?=$row["lid"]?>" required></td>
 </tr>
 <tr>
     <td>Password</td>
     <td>********</td>
 </tr>
 <tr>
     <td>SuperUser</td>
     <td><input type="checkbox" name="kanri_flg" value="1" <?php
        if($row["kanri_flg"]){
            echo "checked";
        };
     ?>></td>
 </tr>
 <tr>
     <td>invalid</td>
     <td><input type="checkbox" name="life_flg" value="1" <?php
        if($row["life_flg"]){
            echo "checked";
        };
     ?>></td>
 </tr>

</table>

<input type="submit" value="更新">
</form>
<?=$deleteBTN?>
<?=$resetBTN?>

</body>
</html>