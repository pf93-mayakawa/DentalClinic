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
	<li><a href="<?php echo home_url(); ?>/info1.html">院長挨拶</a></li>
	<li><a href="<?php echo home_url(); ?>/info2.html">スタッフ紹介</a></li>
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

<div id="contents">

<ul class="nav">
<li><a href="<?php echo home_url(); ?>/index.html">ホーム</a></li>
<li>クリニック紹介</li>
</ul>

<div id="main">

<section>

<h2>クリニック紹介</h2>

<ul class="menu">
<li class="current"><a href="<?php echo home_url(); ?>/info.html">クリニック紹介</a></li>
<li><a href="<?php echo home_url(); ?>/info1.html">院長挨拶</a></li>
<li><a href="<?php echo home_url(); ?>/info2.html">スタッフ紹介</a></li>
</ul>

<h3>クリニック紹介</h3>
<p><img src="" alt=""><br>
当院は、小さなお子さまからご年配の方まで、どなたでも安心して通える歯科クリニックを目指しています。<br>
単に「治療をする」のではなく、患者さんの不安を和らげ、笑顔で通えることを大切にし、最新の設備とやさしい診療で家族みんなの健康な歯を守れるようサポートしていきます。<br><br><br><br></p>

<p><img src="<?php echo get_template_directory_uri(); ?>/images/info1.jpg" alt="" class="fr w40p"><strong class="color1">● 痛みの少ないやさしい治療</strong><br>
麻酔の工夫や最新の技術を取り入れ、痛みを最小限に抑えた治療 を心がけています。<br>
歯医者が苦手な方も、安心して通っていただけるよう配慮しています。<br></p>
<p><strong class="color1">● お口の健康を守る予防歯科</strong><br>
「痛くなったら行く」のではなく、むし歯や歯周病を防ぐ予防ケア を大切にしています。<br>
定期検診・クリーニングで、大切な歯を一生涯守ります。<br>
<p><strong class="color1">● 清潔で最新の設備</strong><br>
患者さんが安心して治療を受けられるよう、徹底した衛生管理 と 最新の歯科医療機器 を導入。<br>
快適な環境で、質の高い治療を提供します。<br><br><br>

<p><img src="<?php echo get_template_directory_uri(); ?>/images/info2.jpg" alt="" class="fl w40p"><strong class="color1">● 清潔で快適な診療環境</strong><br>
患者さんに安心して治療を受けていただけるよう、衛生管理を徹底 し、最新の滅菌システムを導入。<br>
院内は明るく、清潔感のある快適な空間づくりを心がけています。<br>
<p><strong class="color1">● 小さなお子さまからご年配の方まで通いやすい</strong><br>
お子さまが楽しく通えるように、キッズスペースを完備。<br>
また、ご年配の方やお身体が不自由な方にも安心してご来院いただけるよう、バリアフリー設計になっています。<br><br><br>


</section>

</div>
<!--/#main-->

</div>
<!--/#contents-->

</div>
<!--/#container-->

<?php get_footer(); ?>