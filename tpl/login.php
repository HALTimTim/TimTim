<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <title>まさる堂</title>
  <link rel="stylesheet" href="./src/css/style.css" />
  <link rel="stylesheet" href="./src/css/pages/login.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>

<body>
  <div class="login-warp">
    <div class="login-form">
      <div class="login-form-top">Login</div>
      <div class="login-form-main">
        <?php if (isset($err)) { ?>
        <p><?php echo $err; ?></p>
        <?php } ?>
        <form method="post">
          <!-- ユーザー名  -->
          <div class="form-group">
            <label for="username">mailadress</label>
            <input type="username" class="form-control" id="username" name="mail" placeholder="masaru.yahoo.co.jp" />
          </div>

          <!-- パスワード  -->
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="test" />
          </div>

          <button type="submit" id="loginbtn" class="btn btn-info">
            ログイン
          </button>
        </form>
        <a href="signup.php">新規登録する</a>
      </div>
    </div>
  </div>

</body>

</html>
