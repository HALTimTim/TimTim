<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <title>まさる堂</title>

  <link rel="stylesheet" href="./src/css/style.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Damion&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./src/css/pages/help.css">
  <link rel="stylesheet" href="./src/css/pages/userdetailinformation.css">
</head>

<body>
  <div class="warp">
    <!-- headerエリア -->
    <header>
      <div class="header-content flex j-b">
        <div class="header-logo">
          <a href="./top.php">
            <img class="header-logo-img" src="./src/img/header/logo.png" alt="" />
          </a>
        </div>
        <ul class="header-list flex j-a">
          <li class="header-list-form-area">
            <form action="" class="flex">
              <input type="text" class="form-control flex" placeholder="人の名前を入力してください" />
              <input type="button" value="検索" class="btn btn-secondary" />
            </form>
          </li>
          <div class="flex j-a header-list-icons">
            <li>
              <a href=""><i class="fas fa-comment text-white" alt="通知部分"></i></a>
            </li>
            <li>
              <a href="./login.php">
                <i class="fas fa-id-badge text-white" alt="ユーザー部分"></i>
              </a>
            </li>
            <li>
              <a href="./service.php"><i class="fas fa-question-circle text-white"></i></a>
            </li>
            <li>
              <form action='' method='post'>
                <button type="submit" value='logout' name='logout' class="btn btn-danger">ログアウト</button>
              </form>
            </li>
          </div>
        </ul>
      </div>
      <nav>
        <ul class="gnav flex j-a">
          <div class="nav-left flex">
            <li>
              <a href="./reservation.php">出品者を捜す</a>
            </li>
            <li><a href="./giveaway.php">景品一覧</a></li>
          </div>
          <div class="nav-right flex">
            <li class="nav-downicon">
              <a href="">相談をする</a>
              <ul>
                <li><a href="./contact.php">お問い合わせ</a></li>
                <li><a href="./service.php">使い方ガイド</a></li>
              </ul>
            </li>
            <li class="nav-downicon">
              <a href="">販売＆投稿</a>
              <ul>
                <li><a href="./salesconfirmation.php">売上確認</a></li>
                <li><a href="./productreg.php">時間を売る</a></li>
                <li><a href="./post.php">投稿</a></li>
              </ul>
            </li>
            <li><a href="./userdetailinformation.php">マイページ</a></li>
          </div>
        </ul>
      </nav>
    </header>
    <!-- mainエリア -->
    <main>
      <div class="main-content flex j-a">
        <div class="main-left">
          <p class="main-left-title">カテゴリ別</p>
          <ul class="main-left-list">
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C1" value="C1">
                  カジュアル系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C10" value="C10">
                  モード系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C11" value="C11">
                  ストリート系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C12" value="C12">
                  渋谷系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C14" value="C14">
                  ドラッド系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C15" value="C15">
                  キジカレ系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C18" value="C18">
                  スポーティ系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C20" value="C20">
                  きれいめ系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C21" value="C21">
                  アメカジ系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C23" value="C23">
                  サーフ系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C24" value="C24">
                  サロン系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C3" value="C3">
                  コンサバ系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C5" value="C5">
                  ベーシック系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C6" value="C6">
                  フェミニン系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C7" value="C7">
                  ガーリッシュ系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C8" value="C8">
                  ボーイッシュ系
                </button>
              </form>
            </li>
            <li>
              <form action='top_category.php' method='post'>
                <button type="submit" class="btn btn-link" name="C9" value="C9">
                  セクシー系
                </button>
              </form>
            </li>
          </ul>
        </div>
        <!-- ---------------ここのdivタグの中に書いて行って--------------- -->
        <div class="main-right">
          <article>
            <h2>各ユーザー詳細画面</h2>
            <section>
              <div class="userinfo">

                <div class="userinfoicon">
                  <img src="./src/img/user/<?php echo $user_lists[0]['profile_img']; ?>.png" alt="ユーザーアイコン">
                  <!-- <p>最終ログイン:<br>
3時間前<br>
稼働状況:<br>
対応可能です
</p> -->
                </div>
                <div class="userinfo-row">
                  <div class=userinfomain>
                    <div class="userinfomain-name">
                      <h3><?php echo $user_lists[0]['LastName'].$user_lists[0]['FirstName']; ?>
                      </h3>
                      <?php if ($badge_folower >= 1) { ?>
                      <span><img src="./src/img/main/<?php echo $badge; ?>.png" alt="称号"></span>
                      <?php } ?>
                    </div>
                    <div class="userinfomain-detail">
                      <ul>
                        <!-- <li>クリエイティブディレクター・デザイナー|</li> -->
                        <li><?php echo $user_lists[0]['height']; ?>cm/</li>
                        <li><?php echo $user_lists[0]['age']; ?>歳/</li>
                        <li><?php echo $user_lists[0]['gender']; ?></li>
                      </ul>
                    </div>
                  </div>
                  <div class="userachievement">
                    <h4 class="title">実績</h4>
                    <dl class="userachievement-list">
                      <!-- <dt>販売実績</dt>
<dd>1,251</dd> -->
                      <dt>評価</dt>
                      <dd>★<?php echo sprintf('%.1f', $user_star[0]['star']) ?>
                      </dd>
                      <dt>フォロワー</dt>
                      <dd><?php echo $user_folower[0]['COUNT(user_id)']; ?></dd>
                    </dl>
                  </div>
                  <div class="userspecialty">
                    <h4>得意分野</h4>
                    <ul class="userspecialty-list">
                      <li><?php echo $user_lists[0]['category_name'] ?></li>
                    </ul>
                  </div>
                </div>
                <div class="doublebutton">
                  <button onclick="location.href='userdetailinformationentry.php'" type="button" name="" value="" class="btn btn-primary btn-sm">詳細変更ボタン</button>
                  <a href="./giveaway.php"><button type="button" name="" value="" class="btn btn-primary btn-sm">景品選択ボタン</button></a>
                </div>
              </div>
            </section>
            <session>
              <div class="posted-main-bottom-right-img-list">
                <?php foreach ($post_result as $value) : ?>
                <!-- 削除 -->
                <img src="./src/img/POST_img/<?php echo $value['post_img']; ?>.png" alt="プロフ画像" />
                <?php endforeach; ?>
              </div>
            </session>
          </article>
        </div>
      </div>
    </main>
    <!-- footerエリア -->
    <footer>
      <div class="footer-content flex j-c">
        <div class="footer-left">
          <nav class="footer-list flex j-c">
            <ul>
              <div class="footer-list-box flex j-a">
                <li>
                  <h3>ヘルプ</h3>
                  <ul class="footer-list-box-list">
                    <li><a href="./contact.php">よくある質問</a></li>
                    <li><a href="./help1.php">注文変更<br>キャンセルについて</a></li>
                    <li><a href="./help2.php">ログインについて</a></li>
                    <li><a href="./help3.php">初めての方へ</a></li>
                  </ul>
                </li>

                <li>
                  <h3>メンズ人気</h3>
                  <ul class="footer-list-box-list">
                    <li>
                      <form action='top_category.php' method='post'>
                        <button type="submit" class="btn btn-link" name="C1" value="C1">
                          カジュアル系
                        </button>
                      </form>
                    </li>
                    <li>
                      <form action='top_category.php' method='post'>
                        <button type="submit" class="btn btn-link" name="C11" value="C11">
                          ストリート系
                        </button>
                      </form>
                    </li>
                    <li>
                      <form action='top_category.php' method='post'>
                        <button type="submit" class="btn btn-link" name="C20" value="C20">
                          きれいめ系
                        </button>
                      </form>
                    </li>
                  </ul>
                </li>
                <li>
                  <h3>レディース人気</h3>
                  <ul class="footer-list-box-list">
                    <li>
                      <form action='top_category.php' method='post'>
                        <button type="submit" class="btn btn-link" name="C1" value="C1">
                          カジュアル系
                        </button>
                      </form>
                    </li>
                    <li>
                      <form action='top_category.php' method='post'>
                        <button type="submit" class="btn btn-link" name="C5" value="C5">
                          ベーシック系
                        </button>
                      </form>
                    </li>
                    <li>
                      <form action='top_category.php' method='post'>
                        <button type="submit" class="btn btn-link" name="C9" value="C9">
                          セクシー系
                        </button>
                      </form>
                    </li>
                  </ul>
                </li>

                <li>
                  <h3>概要</h3>
                  <ul class="footer-list-box-list">
                    <li><a href="./overview1.php">会社概要</a></li>
                    <li><a href="./overview2.php">特定商取引法に<br>基づく表記</a></li>
                    <li><a href="./overview3.php">個人情報保護方針</a></li>
                  </ul>
                </li>
              </div>
            </ul>
          </nav>
          <div class="footer-icons">
            <ul class="footer-icons-list flex j-a">
              <li>
                <a href="">
                  <img src="./src/img/footer/line.png" alt="LINE" />
                </a>
              </li>
              <li>
                <a href="">
                  <img src="./src/img/footer/instagram.png" alt="instagram" />
                </a>
              </li>
              <li>
                <a href="">
                  <img src="./src/img/footer/facebook.png" alt="facebook" />
                </a>
              </li>
              <li>
                <a href="">
                  <img src="./src/img/footer/1495494667-jd13_84467.png" alt="Twitter" />
                </a>
              </li>
              <li>
                <a href="">
                  <img src="./src/img/footer/youtube.png" alt="youtube" />
                </a>
              </li>
              <li>
                <a href="">
                  <img src="./src/img/footer/tiktok.png" alt="tiktok" />
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-right">
          <div>
            <ul class="footer-right-lists flex j-a">
              <li>
                <a href="">
                  <img class="footer-right-icons" src="./src/img/footer/apple.png" alt="apple" />
                </a>
              </li>
              <li>
                <a href="">
                  <img class="footer-right-icons" src="./src/img/footer/google.png" alt="google" />
                </a>
              </li>
            </ul>
          </div>
          <div class="footer-right-form">
            <form action="https://goole.com" class="footer-right-forms">
              意見ご要望などあればご記入ください。
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
              <input type="button" value="お問い合わせ" class="btn btn-secondary footer-right-btns" />
            </form>
          </div>
        </div>
      </div>
      <div class="footer-end">© Team Timothy "Tim" John Berners-Lee</div>
    </footer>
  </div>
</body>

</html>
