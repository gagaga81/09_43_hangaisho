<?php
session_start();
include("functions.php");
chkSsid();

?>
<!DOCTYPE html>
<html lang="ja">

<?php 
include("head.php");
// DB接続
$pdo = db_con();


// データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table");
$status = $stmt->execute();

//　データ表示
$view="";
if($status==false){
    $error = $stmt->errorInfo();
    exit("ErrorQuery".$error[2]);

}else{
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $view .= "<tr><td>";
        $view .= "<a href='setting_user_detail.php?id=".$result["id"]."'>";
        $view .= $result["id"];
        $view .= "</a>";
        $view .= "</td><td>";
        $view .= "<a href='setting_user_detail.php?id=".$result["id"]."'>";
        $view .= $result["name"];
        $view .= "</a>";
        $view .= "</td></tr>";
        
    }
}

 ?>

<body>
    <?php include"header.html" ?>

<table>
    <tr>
        <th>id</th>
        <th>User Name</th>
    </tr>

    <?=$view?>
</table>


</body>
</html>