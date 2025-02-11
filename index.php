  
<?php get_header(); ?>
<body>
  <header id="header">
    <nav>
      <ul>
        <li><a href="#monk">Monk</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skill">Skill</a></li>
      </ul>
    </nav>
  </header>
  <div class="wrapper">
    <section class="kairi">
      <div class="flex">
        <div class="name">
          <p>辻村 海吏</p>
          <h1>Kairi Tsujimura</h1>
          <p>1997/08/23</p>
        </div>
        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/me.JPG' ); ?>" class="mainvisual">
      </div>
    </section>
  </div>
  <main id="main">
    <div class="wrapper">
      <section class="me">
        <div class="flex">
            <dl class="itsme">
              <dt>生年月日:</dt>
              <dd>1997/08/23 乙女座 丑年</dd>
              <dt>出身地:</dt>
              <dd>大阪府堺市</dd>
              <dt>出身校:</dt>
              <dd>私立東大谷高校・私立大谷大学</dd>
              <dt>職務経験:</dt>
              <dd>宗教関係（僧侶）</dd>
              <dt>趣味:</dt>
              <dd>筋トレ、絵作成、キャンプ</dd>
            </dl>
            <div class="me-text">
              <p>当サイトをご覧いただきありがとうございます。辻村海吏と申します。<br>私自身を知っていただきたく思い、自己紹介サイト
                として設立いたしました。下記より私のお仕事や趣味について記載しておりますので是非ご覧ください。</p>
              </div>
            </div>
          </section>
          <section class="monk" id="monk">
            <h2 class="sec-title">Monk</h2>
            <div class="flex">
              <div class="monk-photo">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/IMG_4835.jpg' ); ?>">
              </div>
              <div class="monk-text">
                <p>
                  私は大阪府堺市にある浄土真宗の寺院に生まれました。<br>生まれた当時、私の曽祖父が住職を務め、祖父が高校教員をしながら副住職をしておりました。
                </p>
                <p>
                  幼い頃から地域の方々から慕われる二人を見て、憧れを抱いていました。小学6年生の卒業文集に「じいちゃんみたいなお坊さんになる。」と夢を語っていました。中学に上がり、3年間バスケ部に所属しながら自坊の法務を手伝っていました。その後校長先生の推薦をいただき、府内の真宗関連の高校に入学。卒業後、京都にある大学で真宗学を専攻しました。4年間の学習と研修を経て、僧侶の資格をいただき現在に至ります。
                </p>
                <p>
                  現在は大阪市にあるお寺に奉職し、2024/12月より、僧侶兼Webデザイナーとして活動しています。
                </p>
              </div>
            </div>
            <div class="monk-work">
              <p>僧侶としての日々のお勤め内容は、下記の通りです。</p>
              <p>各種法要のお勤め / 本堂の荘厳・清掃 / 納骨・仏事相談 / 法事 / 葬儀及び通夜の儀式執行 / 立華 /<br>ご自宅に伺い、お仏壇でのお参り / IllustratorやPhotoshopを使用した商品のデザイン及びポスター作成</p>
            </div>
          </section>
      <section class="about" id="about">
        <h2 class="sec-title">About</h2>
        <section class="art">
          <h3 class="sec-title-sub">Art</h3>
          <div class="art-text">
            <p>下記より私の趣味をご紹介させていただきます。1つ目は絵の作成です。<br>コラージュアートという絵が好きで作成しています。特に何か意味を込めているわけではありません。パッっと頭の中に思い浮かんだものを忘れないうちに、見える形へと変化させています。
            </p>
            <p>
              私個人のお気に入りは<b>「みかんをばら撒くみかんに紛れ込んでしまった少年」</b>です。
            </p>
            <p>
              過去に作成した絵を掲載させていただきますので、よろしければご覧ください。
            </p>
          </div>
          <ul class="slide-items">
            <li><img src="<?php echo esc_url( get_template_directory_uri() . '/img/飛び込みの人.JPG' ); ?>"></li>
            <li><img src="<?php echo esc_url( get_template_directory_uri() . '/img/banana.JPG' ); ?>"></li>
            <li><img src="<?php echo esc_url( get_template_directory_uri() . '/img/lemon duck 2.JPG' ); ?>"></li>
            <li><img src="<?php echo esc_url( get_template_directory_uri() . '/img/manzo.JPG' ); ?>"></li>
            <li><img src="<?php echo esc_url( get_template_directory_uri() . '/img/orange boy.JPG' ); ?>"></li>
            <li><img src="<?php echo esc_url( get_template_directory_uri() . '/img/cherry.JPG' ); ?>"></li>
            <li><img src="<?php echo esc_url( get_template_directory_uri() . '/img/浮遊するリンゴ.JPG' ); ?>"></li>
            <li><img src="<?php echo esc_url( get_template_directory_uri() . '/img/moon.JPG' ); ?>"></li>
          </ul>
          
        </section>
        <section class="workout">
          <h3 class="sec-title-sub">Work out</h3>
          <div class="flex">
            <div class="workout-text">
              <p>2つ目の趣味は筋トレです。2021年頃より趣味でトレーニングをしています。運動習慣を日常に取り入れたかったことが始まりで、当時は週2回ジムに通っていました。<br>コツコツ積み重ねて感じる自分の体調や内面の変化がすごく嬉しくて、今でも楽しく続けています。<br>食事管理の知識やなるべく身体に取り入れたい食材などにも興味を持つようになり、今では一日3食自炊をしながら週4,5回ジムに通っています。</p>
            </div>
            <div class="workout-photo">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/gym.JPG' ); ?>">
            </div>
          </div>
        </section>
        <section class="camp">
          <h3 class="sec-title-sub">Camp</h3>
          <div class="camp-galary">
            <div class="camp-photo src1"></div>
            <div class="camp-photo src2"></div>
            <div class="camp-photo src3"></div>
            <div class="camp-photo src4"></div>
            <div class="camp-photo src5"></div>
            <div class="camp-photo src6"></div>
            <div class="camp-photo src7"></div>
            <div class="camp-photo src8"></div>
          </div>
          <div class="camp-text">
            <p>そして私の3つ目の趣味はキャンプです。関西を中心に山、森、湖どこでも行きます。食事の準備など大変なこともありますが、自然の中でいただく食事は格別です。</p>
            <p>焚き火を見てのんびり過ごしている時間が日々の疲れを癒してくれています。定期的に自然に触れることは私にとって必要不可欠です。<br>2025年は冬キャンプにも挑戦します。</p>
          </div>
        </section>
      </section>
      <section class="skill" id="skill">
        <h2 class="sec-title">Skill</h2>
        <div class="flex">

          <ul>
            <li>HP作成（HTML.CSS.JavaScript）</li>
            <li>HP作成（WordPress）</li>
            <li>LP制作（HTML.CSS.JavaScript）</li>
            <li>LP制作（WordPress）</li>
            <li>ブログ作成(WordPress)</li>
            <li>ECサイト(WordPress)</li>
          </ul>
          <div class="skill-text">
            <p>正直Web制作の業界にはまだ経験が浅い部分もあります。しかし、その分どんな小さなことでも真摯に取り組む姿勢を大切にしています。
            </p>
            <p>
            「経験が少ないからこそ、一つ一つ丁寧に向き合い、しっかりと学びながら進める」という気持ちで、お客様の期待に応えます。特に、私が得意とするのは、僧侶としての経験から培った「相手の立場に立って考えること」です。
            </p>
            <p>
              お客様が求めているものが何かを考え、これまでの経験から得た"人と向き合う力"を最大限に活かして最適な提案をさせていただきます。
            </p>
            
          </div>
        </div>
      </section>
    </div>
  </main>
  <?php get_footer(); ?>
  
  