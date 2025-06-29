<?php get_header();?>

<!--PC用（901px以上端末）メニュー-->
<div class="nav-fix-pos">
<nav id="menubar">
<ul>
<li class="current">
	<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">ホーム<span>Home</span></a></li>
<li><a href="<?php echo home_url(); ?>/category/info">クリニック紹介<span>Information</span></a>
	<ul class="ddmenu">
	<li><a href="<?php echo home_url(); ?>/category/info">クリニック紹介</a></li>
	<li><a href="<?php echo home_url(); ?>/category/info1">院長挨拶</a></li>
	<li><a href="<?php echo home_url(); ?>/category/info2">スタッフ紹介</a></li>
	</ul>
</li>
<li><a href="<?php echo home_url(); ?>/medical.html">診療内容<span>Medical</span></a>
	<ul class="ddmenu">
	<li><a href="<?php echo home_url(); ?>/medical.html">一般歯科</a></li>
	<li><a href="<?php echo home_url(); ?>/medical1.html">小児歯科</a></li>
	<li><a href="<?php echo home_url(); ?>/medical2.html">口腔外科</a></li>
	<li><a href="<?php echo home_url(); ?>/medical3.html">予防歯科</a></li>
	</ul>
</li>
<li><a href="<?php echo home_url(); ?>/blog.html">ブログ<span>Blog</span></a></li>
<li><a href="<?php echo home_url(); ?>/contact.html">ご予約・お問い合わせ<span>Contact</span></a>
	<ul class="ddmenu">
	<li><a href="<?php echo home_url(); ?>/contact.html">ご予約</a></li>
	<li><a href="<?php echo home_url(); ?>/contact1.html">お問い合わせ</a></li>
	</ul>
</li>
<li><a href="<?php echo home_url(); ?>/access.html">アクセス<span>Access</span></a></li>
</ul>
</nav>
</div>

<!--小さな端末用（900px以下端末）メニュー-->
<nav id="menubar-s">
<ul>
<li><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">ホーム<span>Home</span></a></li>
<li><a href="<?php echo home_url(); ?>/category/info">クリニック紹介<span>Information</span></a></li>
<li><a href="<?php echo home_url(); ?>/medical.html">診療内容<span>Medical</span></a></li>
<li><a href="<?php echo home_url(); ?>/blog.html">ブログ<span>Blog</span></a></li>
<li><a href="<?php echo home_url(); ?>/contact.html">ご予約・お問い合わせ<span>Contact</span></a></li>
<li><a href="<?php echo home_url(); ?>/access.html">アクセス<span>Access</span></a></li>
</ul>
</nav>



<!--スライドショー-->
<aside id="mainimg">
<img src="<?php echo get_template_directory_uri(); ?>/images/img4.jpg" alt="" class="slide0">
<img src="<?php echo get_template_directory_uri(); ?>/images/img4.jpg" alt="" class="slide1">
<img src="<?php echo get_template_directory_uri(); ?>/images/img5.jpg" alt="" class="slide2">
<img src="<?php echo get_template_directory_uri(); ?>/images/img8.jpg" alt="" class="slide3">
</aside>

<div id="contents">

<div id="main">

<section>

<h2>診療内容</h2>

<div class="list">
<a href="<?php echo home_url(); ?>/medical.html">
<figure><img src="<?php echo get_template_directory_uri(); ?>/images/medical1.jpg" alt=""></figure>
<h4>一般歯科</h4>
<p>むし歯や歯周病の治療を行い、患者さんの健康な歯を守るための基本的なケア を提供します。</p>
</a>
</div>

<div class="list">
<a href="<?php echo home_url(); ?>/medical1.html">
<figure><img src="<?php echo get_template_directory_uri(); ?>/images/medical2.jpg" alt=""></figure>
<h4>小児歯科</h4>
<p>お子さまの歯の健康を守るために、むし歯の予防と治療を中心に、楽しく通える歯医者 を目指しています。</p>
</a>
</div>

<div class="list">
<a href="<?php echo home_url(); ?>/medical2.html">
<figure><img src="<?php echo get_template_directory_uri(); ?>/images/medical3.jpg" alt=""></figure>
<h4>口腔外科</h4>
<p> 親知らずの抜歯や顎関節症など、お口の中の外科的な治療を専門的に行います。</p>
</a>
</div>

<div class="list">
<a href="<?php echo home_url(); ?>/medical3.html">
<figure><img src="<?php echo get_template_directory_uri(); ?>/images/medical4.jpg" alt=""></figure>
<h4>予防歯科</h4>
<p> 「痛くなってから行く」のではなく、むし歯や歯周病を防ぐことを目的とした診療です。</p>
</a>
</div>

</section>

<section>

<h2>診察時間</h2>

<table class="ta2">
<tr>
<th>&nbsp;</th>
<th>月</th>
<th>火</th>
<th>水</th>
<th>木</th>
<th>金</th>
<th>土</th>
</tr>
<tr>
<th class="bgcolor1">午前</th>
<td><a>○</a><br>
<td><a>○</a><br>
<td><a>ー</a><br>
<td><a>○</a><br>
<td><a>○</a><br>
<td><a>○</a><br>
</tr>
<tr>
<th class="bgcolor1">午後</th><br>
<td><a>○</a><br>
<td><a>○</a><br>
<td><a>ー</a><br>
<td><a>○</a><br>
<td><a>○</a><br>
<td><a>ー</a><br>
</tr>
</table>

<p>【午前診療受付】9:30-13:00　　【午後診療受付】14:00-18:30<br>
（※水・日曜日休診）</p>

</section>

<section id="new">
<h2>クリニックブログ</h2>

<?php
//取得したい投稿記事などの条件を引数として渡す
  $args = array(
// 投稿タイプ
  'post_type' => 'post',
// 1ページに表示する投稿数
   'posts_per_page' => 3,
   );
// データの取得
    $posts = get_posts($args);
    ?>

<!-- ループ処理 -->
  <?php foreach($posts as $number => $post): ?>
  <?php setup_postdata($post); ?>
  <div class="news_post_small">
  <div class="news_post_meta">
   <dl>
    <dt>
      <!-- 日付を出力する -->
      <?php echo get_the_date(); ?>
	  </dt>
  </div>
   <div class="news_post_small_title">
   <!--  aタグで投稿記事へのリンクを作成する -->
   <a href="<?php the_permalink(); ?>">
   <!--  投稿記事のタイトルを表示する -->
   <dd><?php the_title(); ?>
	 <?php if ($number == 0) {
		echo '<span class="newicon">NEW</span>';
	 } ?></dd>
  </a>
  </div>
  
	<div class="news_post_content">
  <dl>
	<?php 
    $content = wp_trim_words( get_the_content() ,  50, '...');
    echo $content;
    ?>
	</dl>
  </div>
	</div>

  <?php endforeach; ?>
  <!-- 使用した投稿データをリセット -->
  <?php wp_reset_postdata(); ?>

<p class="r">&raquo;&nbsp;<a href="blog.html">過去ログ</a></p>
</section>

</div>
<!--/#main-->

</div>
<!--/#contents-->

</div>
<!--/#container-->

<?php get_footer(); ?>