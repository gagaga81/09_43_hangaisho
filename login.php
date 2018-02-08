<?php
session_start();
//0.外部ファイル読み込み
include("functions.php");

$errorMessage="";

if(isset($_POST["lid"])){

    $lid = $_POST["lid"];
    $lpw = $_POST["lpw"];
    $errorMessage="";

    // echo $lid.$lpw;

    //1.  DB接続します
    $pdo = db_con();

    //2. データ登録SQL作成
    $sql = "SELECT * FROM gs_user_table WHERE lid=:lid AND lpw=:lpw ";


    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
    $stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
    $res = $stmt->execute();

    //3. SQL実行時にエラーがある場合
    if($res==false){
       error_db_info($stmt);
    }
    //4. 抽出データ数を取得
    $val = $stmt->fetch(); //1レコードだけ取得する方法

    //5. 該当レコードがあればSESSIONに値を代入
  if( $val["id"] != "" ){
    if($val["life_flg"]==1){
      // 無効となっている場合は無効であるメッセージを出す
      $errorMessage = "このアカウントは無効です";
  
    }else{
    $_SESSION["chk_ssid"]  = session_id();
    $_SESSION["kanri_flg"] = $val['kanri_flg'];
    $_SESSION["name"]      = $val['name'];
    header("Location: index.php");
    }

    }else{
    //　IDかパスワードに誤りがある場合はそう表示する
    $errorMessage = "ユーザーIDかパスワードに誤りがあります";
    
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/main.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
<title>ログイン</title>
</head>
<body>

<header>
  <nav class="navbar navbar-default">LOGIN</nav>
</header>

<?php
if($errorMessage){
  echo h($errorMessage);}
?>

<form name="form1" action="" method="post">
ID:<input type="text" name="lid" required />
<br>
PW:<input type="password" name="lpw" required/>
<input type="submit" value="LOGIN" />
</form>


</body>
</html>