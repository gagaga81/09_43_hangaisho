<?php
session_start();
include("functions.php");
chkSsid();

?>
<!DOCTYPE html>
<html lang="ja">
<?php include"head.html" ?>

<body>

<header>
    <h1>新規登録</h1>


</header>

<form action="employ_insert.php" method="post">
<table>
    <tr>
        <td>社員番号</td>
        <td><input type="number" name="employ_id" id="" min=100000 required></td>
    </tr>
    <tr>
        <td>氏名</td>
        <td><input type="text" name="employ_name" id="" required></td>
    </tr>
    <tr>
        <td>ふりがな</td>
        <td><input type="text" name="employ_yomi" id="" required></td>
    </tr>
    <tr>
        <td>生年月日</td>
        <td><input type="date" name="employ_birthday" id="" required></td>
    </tr>
    <tr>
        <td>入社日</td>
        <td><input type="date" name="employ_hiredate" id="" required></td>
    </tr>
    <tr>
        <td>時給</td>
        <td><input type="number" name="employ_Hwage" id="" required></td>
    </tr>
    <tr>
        <td>メモ</td>
        <td><input type="textarea" name="employ_memo" id=""></td>
    </tr>

</table>

<input type="submit" value="登録して次へ">
</form>
<button>終了</button>

</body>
</html>