<header>
    <a href="logout.php">logout</a>
    <ul class="header_ul">
        <?php if($_SESSION["kanri_flg"]=="1"){ ?>
            <a href="employ.php">
                <li class="header_li">
                    マスタ登録
                </li>
            </a>
            <a href="worktime.php">
                <li class="header_li">
                    勤怠登録
                </li>
            </a>
        <?php    } 
        ?>
        <a href="payslip.php">
            <li class="header_li">
                給与参照
            </li>
        </a>
        <a href="setting.php">
            <li class="header_li">
                各種設定
            </li>
        </a>
    </ul>
</header>