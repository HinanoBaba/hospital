          <footer>
            <div class="d-md-flex justify-content-around">
              <div class="flex-item">
                <p class="text-center"><b>所在地</b><br>〒174-0076<br>上板橋0-0-0</p>
                <p class="text-center"><b>診療時間</b><br>9:00～12:00/13:00～18:00(月〜金)<br>9:00～13:00(土)</p>
                <p class="text-center"><b>休診日</b><br>日曜日・祝日</p>
                <p class="text-center"><b>TEL</b><br>03-0000-0000</p>
                <p class="text-center"><i class="fas fa-exclamation-triangle text-warning"></i>ご予約は、お電話か<a href="" data-toggle="modal" data-target="#exampleModal">こちら</a>で承っております。</p>
                <p class="text-center">その他、ご不明な点がございましたらお気軽にお電話ください</p>
                <!--モーダルフォーム-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ご予約</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="row">
                          <div class="col">
                            <label for="exampleFormControlTextarea1">姓</label>
                            <input type="text" class="form-control" placeholder="山田" name="familyname">
                          </div>
                          <div class="col">
                            <label for="exampleFormControlTextarea1">名</label>
                            <input type="text" class="form-control" placeholder="太郎" name="givename">
                          </div>
                        </div>
                          <label for="exampleFormControlTextarea1">診察番号（不明な場合や新規の方は不要です。）</label>
                          <input type="text" class="form-control" placeholder="診察券に書かれている番号を書いてください" name="numbar">
                          <label for="exampleFormControlTextarea1">ご予約日時</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="date">第三候補までお書きください。</textarea>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary">送信</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <ul class="nav flex-column align-self-center">
                <li class="nav-item">
                  <a class="nav-link" href="/hospital/#news">お知らせ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/hospital/#about">クリニック紹介</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    診察案内
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item text-center" href="/hospital/menu-naika.php">内科</a>
                    <a class="dropdown-item text-center" href="/hospital/menu-syonika.php">小児科</a>
                    <a class="dropdown-item text-center" href="/hospital/menu-yobou.php">予防接種</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/hospital/#access">診療時間・アクセス</a>
                </li>
              </ul>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <div class="text-right">
      <i class="fas fa-arrow-up fa-3x" id="pagetop"></i>
    </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="./js/main.js"></script>
  </body>
</html>
