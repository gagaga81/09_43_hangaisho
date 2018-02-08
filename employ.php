<?php
session_start();
include("functions.php");
chkSsid();

?>

<!DOCTYPE html>
<html lang="ja">

<?php 
include("head.html");// DB接続
$pdo = db_con();


// データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_an_table");
$status = $stmt->execute();

//　データ表示
$view="";
if($status==false){
    $error = $stmt->errorInfo();
    exit("ErrorQuery".$error[2]);

}else{
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $view .= "<tr><td>";
        $view .= "<a href='employ_detail.php?id=".$result["id"]."'>";
        $view .= $result["id"];
        $view .= "</a>";
        $view .= "</td><td>";
        $view .= "<a href='employ_detail.php?id=".$result["id"]."'>";
        $view .= $result["employ_id"];
        $view .= "</a>";
        $view .= "</td><td>";
        $view .= "<a href='employ_detail.php?id=".$result["id"]."'>";
        $view .= $result["employ_name"];
        $view .= "</a>";
        $view .= "</td><td>";
        $view .= $result["employ_yomi"];
        $view .= "</td><td>";
        $view .= $result["employ_birthday"];
        $view .= "</td><td>";
        $view .= $result["employ_hiredate"];
        $view .= "</td><td>";
        $view .= $result["employ_Hwage"];
        $view .= "</td><td>";
        $view .= $result["employ_memo"];
        $view .= "</td><td>";
        $view .= $result["employ_regidate"];
        $view .= "</td><td>";
        $view .= $result["employ_updatetime"];
        $view .= "</td><td>";
        $view .= "<input type='button' value='削除' onClick='location.href=\"employ_delete.php?id=".$result["id"]."\"'>";
        $view .= "</td></tr>";
        
    }
}

 ?>

<body>
    <?php include"header.php" ?>
<a href="javascript:imageup('employ_input.php');"><button>新規登録</button></a>
<button>CSV出力</button>


<table>
    <tr>
        <th>id</th>
        <th>社員番号</th>
        <th>氏名</th>
        <th>ふりがな</th>
        <th>生年月日</th>
        <th>入社日</th>
        <th>時給</th>
        <th>メモ</th>
        <th>登録日時</th>
        <th>更新日時</th>
        <th></th>
    </tr>

    <?=$view?>
</table>


</body>
</html>