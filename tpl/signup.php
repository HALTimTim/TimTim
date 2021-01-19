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
  <div class="signup">
    <div class="login-form">
      <div class="login-form-top">SignUp</div>
      <div class="login-form-main">
        <form action="" method="post">
          <?php if (isset($err)) { ?>
          <p><?php echo $err; ?></p>
          <?php } ?>
          <!-- ユーザー名  -->
          <div class="form-group">
            <label for="username">FirstName</label>
            <input type="username" class="form-control" id="username" name="firstname" placeholder="Yamamoto" />
            <label for="username">LastName</label>
            <input type="username" class="form-control" id="username" name="lastname" placeholder="takumi" />
            <label for="username">フリガナ</label>
            <input type="username" class="form-control" id="username" name="firstf" placeholder="Yamamoto" />
            <label for="username">フリガナ</label>
            <input type="username" class="form-control" id="username" name="lastf" placeholder="takumi" />
          </div>
          <!-- メールアドレス -->
          <div class="form-group">
            <label for="e-mail">Email</label>
            <input type="e-mail" class="form-control" id="e-mail" name="e-mail" aria-describedby="emailHelp" placeholder="test@gmail.com" />
          </div>
          <!-- パスワード  -->
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="test" />
          </div>
          <!-- 再パスワード  -->
          <div class="form-group">
            <label for="passwordretype"> Re-password</label>
            <input type="password" class="form-control" id="passwordretype" name="passwordretype" placeholder="test" />
          </div>
          <button type="submit" id="signup" class="btn btn-info">登録</button>
        </form>
        <a href="login.php">ログインする</a>
      </div>
    </div>
  </div>
</body>

</html>
