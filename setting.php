<?php
session_start();
include("functions.php");
chkSsid();
?>

<!DOCTYPE html>
<html lang="ja">

<?php 
include("head.html");
?>

<body>
    <?php include"header.php" ?>

    <div class="setting_block">
        <h3><ユーザー管理></h3>

        <ul>
            <a href="setting_user_register.php"><li>
                ユーザー登録
            </li></a>
            </li></a>
            <a href="setting_user.php"><li>
                ユーザー参照
            </li></a>
        </ul>
    </div>

</body>
</html>