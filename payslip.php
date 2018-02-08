<?php
session_start();
include("functions.php");
chkSsid();
?>


<!DOCTYPE html>
<html lang="ja">

<?php include"head.html" ?>

<body>
    <?php include"header.php" ?>

<!-- <form action=""> -->
<form action="" method="post">
  <select name="year" id="year_select"></select>
  <select name="year" id="month_select"></select>

</form>
<button>参照</button>

<table>
    <tr>
        <th>社員番号</th>
        <th>氏名</th>
        <th>出勤日数</th>
        <th>勤務時間</th>
        <th>メモ</th>
    </tr>

    <?=$view?>
</table>


<script>
    const this_year = new Date().getFullYear();
    const this_month = new Date().getMonth() + 1;
    // console.log(this_month);


    // 年月のプルダウンの自動生成＆デフォルト設定
    for (i = 2010; i <= 2020; i++) {
      if (i == this_year) {
        $("#year_select").append('<option value="' + i + '" selected>' + i + '</option>');
      } else {
        $("#year_select").append('<option value="' + i + '">' + i + "</option>");
      }
    }


    for (i = 1; i <= 12; i++) {
      if (i == this_month) {
        $("#month_select").append('<option value="' + i + '" selected>' + i + '</option>');
      } else {
        $("#month_select").append('<option value="' + i + '">' + i + "</option>");
      }
    }
</script>

</body>
</html>