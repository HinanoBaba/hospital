<?php 
$title = "佐藤病院|ホーム";
?>

<?php
include "./parts/header.php";
?>
<article>
  <section id="mainvisual">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/mainvisual01.jpg" class="d-block w-100" alt="メインビジュアル01">
          <div class="carousel-caption d-none d-md-block bg-light">
            <h5 class="text-body">専門医による適切な診断</h5>
            <p class="text-body">総合内科専門医・小児科専門医の資格を活かした適切な診療をいたします。</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/mainvisual02.jpg" class="d-block w-100" alt="メインビジュアル02">
          <div class="carousel-caption d-none d-md-block bg-light">
            <h5 class="carousel-text text-body">子ども一人ひとりに合わせた処置</h5>
            <p class="text-body">お子様の特性に沿って、的確な診断と処方をいたします。</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/mainvisual03.jpg" class="d-block w-100" alt="メインビジュアル03">
          <div class="carousel-caption d-none d-md-block bg-light">
            <h5 class="text-body">地域に寄り添った病院に</h5>
            <p class="text-body">少しでも気になる点あれば、相談してください。大学病院の紹介や適切な検査をいたします。</p>
          </div>
        </div>
      </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </section>
  <section id="news">
    <h2 class="text-center">お知らせ</h2>
    <div class="p-3 mb-2 bg-light border border-dark">
      <h5 class="text-center">タイトル</h5>
      <p class="text-center">本文本文本文本文本文本文本文本文本文</p>
      <h5 class="text-center">タイトル</h5>
      <p class="text-center">本文本文本文本文本文本文本文本文本文</p>
      <h5 class="text-center">タイトル</h5>
      <p class="text-center">本文本文本文本文本文本文本文本文本文</p>
    </div>
  </section>
  <section id="about">
    <h2 class="text-center">クリニック紹介</h2>
    <h3 class="text-center">院長ご挨拶</h3>
    <div class="d-md-flex justify-content-between">
      <div class="flex-item">
        <img src="./img/doctor.jpg" alt="佐藤病院院長の写真" class="doctor-img">
        <p class="text-center">院長:佐藤太郎</p>
      </div>
      <div class="flex-item">
        <p class="text-center align-self-center">東京都立広尾病院、沖縄県立中部病院、東京都老人医療センター（現健康長寿医院センター）で一貫して臨床医として勤務し、1999年に地元であるこちらで開業いたしました。総合内科専門医、小児科専門医の資格を取得しております。幅広い症例に対応できますので、どうぞお気軽にご来院ください。「総合内科専門医」は、医院・クリニック、一般病院、基幹病院・大学病院を連携する内科系診療のネットワークの共通基盤としての一般・総合内科の知識・技術・判断力・人間性・経験（キャリアー）、指導能力を有する医師に与えられる資格です。最新の医療知識を積極的に活用し、不必要な薬や検査を極力避け、患者さま一人ひとりにとって最適な医療を目指します。</p>
        <p class="text-center align-self-center">所有資格：総合内科専門医・小児科専門医</p>
      </div>
    </div>
    <h3 class="text-center">施設について</h3>
    <div class="card-deck">
      <div class="card">
        <img src="./img/wr.jpg" class="card-img-top" alt="診察室">
        <div class="card-body">
          <h5 class="card-title">受付・待合室</h5>
          <p class="card-text">受付と待合室は、明るい雰囲気になるように考えてコーディネートしています。お子様が退屈しないようにおもちゃや絵本が置いてありますのでご自由にお使いください。</p>
        </div>
      </div>
      <div class="card">
        <img src="./img/er.jpg" class="card-img-top" alt="受付・待合室">
        <div class="card-body">
          <h5 class="card-title">診察室</h5>
          <p class="card-text">診察室は解放感で溢れるように、広い作りになっています。最新の医療機器をそろえ、常に的確な診察ができるように備えております。</p></p>
        </div>
      </div>
    </div>
  </section>
  <section id="menu">
    <h2 class="text-center">診察案内</h2>
    <p class="text-center"><small>クリックで詳細ページに飛びます</small></p>
    <div class="card-deck">
      <div class="card">
        <a href="./menu-naika.php">
          <img src="./img/naika.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">内科</h5>
            <p class="card-text">風邪、頭痛、息苦しさ、胸焼け、腹痛、インフルエンザ、花粉症、などの診療をしています。また、糖尿病や生活習慣病の治療にも力を入れています</p>
          </div>
        </a>
      </div>
      <div class="card">
        <a href="./menu-syonika.php">
          <img src="./img/syonika.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">小児科</h5>
            <p class="card-text">一人ひとりの病歴や体質を細かく把握出来るので、集団接種に比べて接種のタイミングやアフターケアを適切に判断できます。 小児科専門医の資格があるので、その場で適切な対応が行えます。</p>
          </div>
        </a>
      </div>
      <div class="card">
        <a href="./menu-yobou.php">
          <img src="./img/yobou.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">予防接種</h5>
            <p class="card-text">インフルエンザや風疹など18種の予防接種が接種可能です。お気軽にご相談ください。</p>
          </div>
        </a>
      </div>
    </div>
  </section>
  <section id="access">
    <h2 class="text-center">診療時間・アクセス</h2>
    <h3 class="text-center">診察時間</h3>
    <p class="text-center text-danger">休診日<br>日曜日・祝日</p>
    <table class="table table-bordered bg-light">
      <thead class="text-center">
        <tr class="text-center">
          <th scope="col">診療時間</th>
          <th scope="col">月</th>
          <th scope="col">火</th>
          <th scope="col">水</th>
          <th scope="col">木</th>
          <th scope="col">金</th>
          <th scope="col">土</th>
        </tr>
      </thead>
      <tbody>
        <tr class="text-center">
          <th scope="row">9:00～12:00</th>
          <td><i class="far fa-circle"></i></td>
          <td><i class="far fa-circle"></i></td>
          <td><i class="far fa-circle"></i></td>
          <td><i class="far fa-circle"></i></td>
          <td><i class="far fa-circle"></i></td>
          <td><i class="far fa-circle"></i></td>
        </tr>
        <tr class="text-center">
         <th scope="row">12:00～13:00</th>
          <td><i class="fas fa-slash"></i></td>
          <td><i class="fas fa-slash"></i></td>
          <td><i class="fas fa-slash"></i></td>
          <td><i class="fas fa-slash"></i></td>
          <td><i class="fas fa-slash"></i></td>
          <td><i class="far fa-circle"></i></td>
        </tr>
        <tr class="text-center">
          <th scope="row">13:00～18:00</th>
            <td><i class="far fa-circle"></i></td>
            <td><i class="far fa-circle"></i></td>
            <td><i class="far fa-circle"></i></td>
            <td><i class="far fa-circle"></i></td>
            <td><i class="far fa-circle"></i></td>
            <td><i class="fas fa-slash"></i></td>
          </th>
        </tr>
      </tbody>
    </table>
    <h3 class="text-center">アクセス</h3>
    <div class="d-md-flex justify-content-around">
      <div class="flex-item align-self-center">
        <p class="text-center"><b>所在地</b><br>〒174-0076<br>上板橋0-0-0<br>(東武東上線上板橋駅より徒歩5分)</p>
        <p class="text-center"><b>TEL</b><br>03-0000-0000</p>
      </div>
      <div class="flex-item">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6474.970523732969!2d139.66996857556762!3d35.763454520700826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ecde990054e1%3A0x43d1855f6d6a71cf!2z44CSMTc0LTAwNzYg5p2x5Lqs6YO95p2_5qmL5Yy65LiK5p2_5qmL!5e0!3m2!1sja!2sjp!4v1593526348209!5m2!1sja!2sjp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </section>
</article>
<?php
include "./parts/footer.php";
?>
