<?php
session_start();
include("functions.php");
chkSsid();
?>

<!DOCTYPE html>
<html lang="ja">
<?php include"head.php" ?>

<body>

<header>
    <h1>ユーザー登録</h1>


</header>

<form action="setting_user_insert.php" method="post">
<table>
       <tr>
        <td>User Name</td>
        <td><input type="text" name="name" required></td>
    </tr>
    <tr>
        <td>User ID</td>
        <td><input type="text" name="lid" required></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="lpw" required></td>
    </tr>
    <tr>
        <td>SuperUser</td>
        <td><input type="checkbox" name="kanri_flg" value="1"></td>
    </tr>

</table>

<input type="submit" value="登録">
</form>

</body>
</html>