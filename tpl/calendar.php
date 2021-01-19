top_category.php
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <title>まさる堂</title>

  <link rel="stylesheet" href="./src/css/style.css" />
  <link rel="stylesheet" href="./src/css/pages/top.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Damion&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./src/css/pages/calendar.css" />
  <link rel="stylesheet" href="./src/css/pages/help.css">
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
        <!-- Default dropright button -->
        <div class="main-right">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="reservation.php">出品者指定</a></li>
              <li class="breadcrumb-item active" aria-current="page">時間指定</li>
            </ol>
          </nav>
          <div class="time">
            <p>日時を指定する</p>
          </div>
          <div id="info">
            <!-- 画像 -->
            <img src="./src/img/user/<?php echo $id ?>.png" alt="" width="20%">
            <!-- プロフィール情報 -->
            <ul>
              <li><?php echo $fulname[0] ?></li>
              <li><?php echo $user[0]['height'] ?>cm</li>
              <li><?php echo $user[0]['weight'] ?>kg</li>
              <li>得意なファッション</li>
              <li><?php echo $category[0]['category_name'] ?></li>
            </ul>
          </div>

          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
          <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js">
          </script>
          <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">
          <b>予約フォーム</b><br>
          <form method="POST" action="productbuy.php">
            1.カレンダーから日付を選択してください<br>
            <label class="date-edit"><input type="date" value="2020-12-01" id="date_val" /></label><br>
            <div id="date"></div><br>
            2.時間を選択してください<br>
            <select name="time">
              <option value=""> 選択してください</option>
              <?php for ($i = 0; $i < $salesId_cou; $i++) { ?>
              <option value=""><?php echo $time[0] ?> ~ <?php echo $time[1] ?></option>
              <?php } ?>
            </select><br><br>
            <br><br>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="hidden" name="sales_code" value="<?php echo $sales_code ?>">
            <input type="submit" value="予約する" class="submit">
          </form>

          <?php
                    // $y = '2012-06';
                    // $d = new DateTime('last day of' . $y);
                    // echo $d->format('Y-m-d');
                    $d = new DateTime();
                    $year = 2020;
                    foreach (range(1, 12) as $month) {
                        $d->setDate($year, $month, 1);
                        $date[] = $d->format('t') . "\n";
                    }
                    ?>
          <script>
            $(function() {
              /* 
               * 祝日・非営業日の定義
               * "yyyy/mm/dd"
               */
              var dateFormat = 'yy/mm/dd';
              var disableDates = [
                <?php for ($i = 0; $i < $salesId_cou; $i++) { ?>
                <?php $str = str_pad($set[$i], 2, 0, STR_PAD_LEFT); //一桁の数値の先頭に0を付け足す
                                    ?> "2020/12/<?php echo $str ?>",
                <?php } ?>

              ];

              var opt = {
                // timeOnlyTitle: '時間を選択',
                // timeText: '時間',
                // hourText: '時',
                // minuteText: '分',
                // secondText: '秒',
                // millisecText: 'ミリ秒',
                // timezoneText: 'タイムゾーン',
                // currentText: '現在時刻',
                // closeText: '閉じる',
                // timeFormat: 'HH:mm',
                // amNames: ['午前', 'AM', 'A'],
                // pmNames: ['午後', 'PM', 'P'],
                // isRTL: false,
                // prevText: '&#x3C;前',
                // nextText: '次&#x3E;',
                // monthNames: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
                // monthNamesShort: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
                // dayNames: ['日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日'],
                // dayNamesShort: ['日', '月', '火', '水', '木', '金', '土'],
                // dayNamesMin: ['日', '月', '火', '水', '木', '金', '土'],
                // weekHeader: '週',
                // firstDay: 0,
                // showMonthAfterYear: true,
                // yearSuffix: '年',
                // changeMonth: true,
                // changeYear: true,
                // yearRange: 'c-10:c+10',
                dateFormat: 'yy年mm月dd日',
                minDate: 0,
                beforeShowDay: function(date) {
                  var disableDate = $.datepicker.formatDate(dateFormat, date);
                  return [(disableDates.indexOf(disableDate) != -1), "", "非営業日"];
                }
              };
              var dates = $('#date').datepicker(opt);
              $('#date').datepicker('option', {
                onSelect: function(selectedDate) {
                  var option = $(this).hasClass('dateFrom') ? 'minDate' : 'maxDate',
                    instance = $(this).data('datepicker'),
                    date = $.datepicker.parseDate(
                      instance.settings.dateFormat ||
                      $.datepicker._defaults.dateFormat,
                      selectedDate, instance.settings);
                  dates.not(this).datepicker('option', option, date);
                }
              });
              $('#date').datepicker('option', {

                onSelect: function(dateText, inst) {
                  $("#date_val").val(dateText);
                }
              });


            });

          </script>
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
