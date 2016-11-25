<!DOCTYPE html>
<html lang="en-US" dir="ltr" prefix="og: http://ogp.me/ns# profile: http://ogp.me/ns/profile# fb: http://ogp.me/ns/fb#">
<head itemscope itemtype="http://schema.org/WebSite">

{{-- Metadata: Basic 1/3 --}}

<meta charset="utf-8" />
<!--

  Theme Name:   Berets
  Theme URL:    https://tnguyen.net/themes/berets-blue
  Author:       Tien Nguyen
  Author URI:   https://tnguyen.net
  Version:      1.0
  Description:  Experimental
  Features:     HTML5 (W3C Standard), Multi-columns, Responsive...
  License:      GNU General Public License
  License URI:  license.txt
  Tags:         simple

-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title itemprop="name">Tien Nguyen &mdash; Official Personal Site &ndash; T.N.</title>
<meta name="description" content="Trang web cá nhân của Hoàng Tiến. Nơi chia sẻ kiến thức, kinh nghiệm của tôi về CNTT. Nơi trao đổi, bàn luận các chủ đề tự do liên quan một số lĩnh vực :)" />
<meta name="keywords" content="nguyễn vũ hoàng tiến, tiến nguyễn, công nghệ thông tin, kiến thức, kinh nghiệm, thủ thuật, trao đổi, việc làm, học vấn, học hỏi, công nghệ, lập trình, blog cá nhân, web cá nhân, profile, photo, tự do, bảo mật, ngôn ngữ, php, java, javascript, html5, git, internet, security, hacking, vietnam, viet nam" />

{{-- Metadata: Open Graph/Facebook --}}

<meta property="og:title" content="Tien Nguyen &mdash; Official Personal Site &ndash; T.N." />
<meta property="og:site_name" content="Tien Nguyen: SW Developer, Blogger" />
<meta property="og:description" content="Trang web cá nhân của Hoàng Tiến. Nơi chia sẻ kiến thức, kinh nghiệm của tôi về CNTT. Nơi trao đổi, bàn luận các chủ đề tự do liên quan một số lĩnh vực :)" />
<meta property="og:type" content="profile" />
<meta property="og:locale" content="en_US" />
<meta property="og:locale:alternate" content="vi_VN" />
<meta property="og:url" content="https://tnguyen.net" />
<meta property="og:image" content="https://tnguyen.net/image.png" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="500" />
<meta property="og:image:height" content="500" />
<meta property="profile:first_name" content="Tien" />
<meta property="profile:last_name" content="Nguyen" />
<meta property="profile:gender" content="male" />
<meta property="profile:username" content="berets.blue" />
<meta property="fb:app_id" content="1807630716176107" />
<meta property="fb:admins" content="100008198430585" />
<meta property="fb:profile_id" content="100008198430585" />

{{-- Metadata: Twitter Card --}}

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@nvhtien" />
<meta name="twitter:creator" content="@nvhtien" />

{{-- Metadata: Microsoft/IE9 only --}}

{{-- Metadata: Microsoft/Windows 8 Tile --}}

{{-- Metadata: Apple --}}

<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-title" content="Tnguyen.NET" />

{{-- Metadata: Basic 2/3 --}}

<base href="{{ Request::getBasePath() }}/" />

{{-- Relationship: Basic --}}

<link href="https://tnguyen.net" itemprop="url" />
<link rel="canonical" href="https://tnguyen.net" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="author" href="https://google.com/+TienNguyenInHeaven" />
<link rel="publisher" href="https://google.com/+TienNguyenInHeaven" />

{{-- Relationship: Apple Touch Icons --}}

<link rel="apple-touch-icon" href="apple-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png" />
<link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png" />
<link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png" />

{{-- Relationship: Icons --}}

<link rel="icon" type="image/png" sizes="192x192" href="android-icon-192x192.png" />
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="96x96" href="android-icon-96x96.png" />
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
<link rel="manifest" href="manifest.json" />
<meta name="msapplication-TileColor" content="#ffffff" />
<meta name="msapplication-TileImage" content="ms-icon-144x144.png" />
<meta name="theme-color" content="#0e0529" />

{{-- Stylesheet --}}

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jura:400" />
<style>
  html {
    font-size: 10px;
  }

  tt, code, kbd, samp {
    font-family: Jura, Consolas, monospace;
  }

  body
  {
    margin: 0;
    line-height: 1.42857143;
    font-family: Jura, Consolas, monospace;
    font-size: 18px;
    color: #999;
    background-color: #0e0529; /* 17151d, 121417 */
  }

  a {
    color: #33b5e5;
    border-bottom: 1px solid transparent;
    text-decoration: none;
  }

  a:hover {
    color: #fff;
    border-bottom: 1px solid #fff;
  }

  a:active {
    border-bottom: 1px solid transparent;
  }

  dl {
    margin: 0;
    padding: 2rem;
  }

  dd {
    margin-top: 1rem;
    margin-bottom: 1rem;
  }

  p {
    padding-left: 2rem;
    padding-right: 2rem;
  }

  .bg1 {
    background-color: #202027;
  }

  .bg2 {
    background-color: #101013;
  }

  .page-heading {
    margin: 0;
    padding: 2rem;
    font-weight: normal;
  }

  .heading-letter, .page-heading {
    color: #ccc;
  }

  .container {
    padding: 2rem;
  }
</style>

{{-- JavaScript: Google Analytics --}}

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-43303042-1', 'auto');
  ga('send', 'pageview');
</script>
</head>
<body>
<ul itemscope itemtype="http://schema.org/BreadcrumbList">
  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a itemprop="item" href="https://tnguyen.net">
      <span itemprop="name">Profile</span>
    </a>
    <meta itemprop="position" content="1" />
  </li>
</ul>

<h1 class="page-heading">Tien Nguyen&apos;s profile page</h1>
<p>Secured site!</p>
<p>Deep site!</p>
<p>I&apos;m here, waiting for you after the rain!</p>
<p>Touch me if you can: <a href="mailto:hello@tnguyen.net">hello@tnguyen.net</a></p>

<dl>
  <dt><span class="heading-letter">[ E ]</span> mail:</dt>
  <dd><a href="mailto:tien@thichlinux.net">tien@thichlinux.net</a></dd>
  <dt><span class="heading-letter">[ P ]</span> ersonal site:</dt>
  <dd><a href="https://tnguyen.net">https://tnguyen.net</a></dd>
  <dd>alias: <a href="https://nvhtien.com">nvhtien.com</a></dd>
  <dd>tumblr: <a href="http://narsi.nvhtien.com">narsi.nvhtien.com</a></dd>
</dl>
<dl>
  <dt><span class="heading-letter">[ W ]</span> ebsites:</dt>
{{--
  <dd><a href="http://echip.online">eChip Online</a> &ndash; http://echip.online</dd>
  <dd><a href="http://hva.online">HVA Online</a> &ndash; http://hva.online</dd>
--}}
  <dd><a href="https://101things.xyz">101 Things For You</a> &ndash; https://101things.xyz</dd>
  <dd><a href="https://gatenotes.xyz">GATE Notes</a> &ndash; https://gatenotes.xyz</dd>
</dl>
<dl>
  <dt></dt>
  <dd><a href="https://laptrinh.xyz">Lap Trinh</a> &ndash; https://laptrinh.xyz</dd>
  <dd><a href="https://quantrimang.net">Quan Tri Mang</a> &ndash; https://quantrimang.net</dd>
</dl>
<dl>
  <dt><span class="heading-letter">[ C ]</span> ommunity:</dt>
  <dd><a href="https://thichlinux.net">Thichlinux Community</a> &ndash; https://thichlinux.net</dd>
</dl>
<dl>
  <dt><span class="heading-letter">[ Tw ]</span> itter:</dt>
  <dd>
    <a href="https://twitter.com/nvhtien">@nvhtien</a>
    <a class="twitter-follow-button" href="https://twitter.com/nvhtien"
      data-show-screen-name="false" data-show-count="false">Follow</a>
  </dd>
  <dt><span class="heading-letter">[ I ]</span> nstagram:</dt>
  <dd><a href="https://www.instagram.com/tng89">tng89</a></dd>
  <dt><span class="heading-letter">[ S ]</span> kype:</dt>
  <dd><a href="skype:berets.blue">berets.blue</a></dd>
</dl>

<div class="container">
  <div class="fb-share-button" data-href="https://tnguyen.net" data-layout="button" data-size="large"></div>
</div>

<script>
  window.twttr = (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0],
      t = window.twttr || {};
    if (d.getElementById(id)) return t;
    js = d.createElement(s);
    js.id = id;
    js.src = "https://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js, fjs);

    t._e = [];
    t.ready = function(f) {
      t._e.push(f);
    };

    return t;
  }(document, "script", "twitter-wjs"));
</script>

{{-- Script: Facebook SDK for JavaScript --}}
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1807630716176107',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<!-- <![CDATA[ AUTO-GENERATED ]]> -->

</body>
</html>