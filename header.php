<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php ob_start(); ?>
<!DOCTYPE HTML>
<html lang="zh-CN" xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>
    <?php $this->archiveTitle(array(
        'category'  =>  _t('分类 %s 下的文章'),
        'search'    =>  _t('包含关键字 %s 的文章'),
        'tag'       =>  _t('标签 %s 下的文章'),
        'author'    =>  _t('%s 发布的文章')
    ), '', ' - '); 
    ?>
    <?php $this->options->title(); ?>
    <?php if($this->is('index')): ?> - <?php $this->options->description() ?>
    <?php endif; ?>
</title>
<meta name="description" content="靳闯,靳闯博客-me.jinchuang.org,靳闯博客-wojc.cn：技术男的个人博客,Linux/Windows技术问题记录分享,软件工具收录分享;个人爱好创作,代码语言的风味组合;记录点滴技术，展望未来梦想">
<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&atom='); ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/' . $this->options->css . '.css'); ?>">
<?php if ($this->options->Prism== 'able'): ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/prism.css'); ?>">
<?php endif; ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/font-awesome.min.css'); ?>">
<?php if ($this->options->Music== 'able'): ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/player.css'); ?>">
<?php endif; ?>
<?php if ($this->options->Zoom == 'able'): ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/zoom.css'); ?>">
<?php endif; ?>
<?php if ($this->options->Gress== 'able'): ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/gress.css'); ?>">
<script src="<?php $this->options->themeUrl('js/gress.js'); ?>"></script>
<?php endif; ?>
<link href="<?php $this->options->ico() ?>" rel="shortcut icon">
<?php if ($this->options->Demo== 'able'): ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/sweetalert.css'); ?>">
<script src="<?php $this->options->themeUrl('js/sweetalert.min.js'); ?>"></script>
<?php endif; ?>
<!-- 文章分享 -->
<script src="<?php $this->options->themeUrl('js/social-share.min.js'); ?>"></script>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/share.min.css'); ?>">
<!-- 波浪代码 -->
<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/bolang.js'); ?>"></script>
</head>
<!-- 正文 -->
<body onLoad="startTime()">
<!-- 背景彩带 -->	
<script src="<?php $this->options->themeUrl('js/ribbon.min.js'); ?>"></script>
<header>
<!-- 顶部时间 -->
<span id="beijing" class="time" ></span>
<!--时间-周-->
<span class="week">
<script>document.write("星期" + "日一二三四五六".charAt(new Date().getDay()))</script>
</span>
<!--时间-农历年-->
<span class="solarlunar">
<script src="https://img.jinchuang.org/typecho/js/ncalendar.js" type="text/javascript"></script>
<script>
$(function () {
    var lunar = calendar.solar2lunar();
    $('.solarlunar').html(''+'农历: '+lunar.gzYear +'年'+'&nbsp;&nbsp;'+ lunar.IMonthCn+lunar.IDayCn+'');
});
</script>
</span>
<!-- 头部内容 -->
<div class="main">
	<div class="intro">
		<a href="javascript:;">
			<img src="<?php $this->options->logoUrl(); ?>" class="intro-logo">
		</a>
		<span class="intro-sitename">
			<a href="<?php $this->options->siteUrl(); ?>">
				<?php $this->options->title() ?>
			</a>
		</span>
		<span class="intro-siteinfo">
			<?php $this->options->description() ?>
		</span>
		<span class="social">

			<a style="display:none" target="_self" title="公告" href="javascript:;" id="demo">网站公告
				<i style="font-size:16px" class="i3 fa fa-volume-up"></i>
			</a>
			<a href="<?php $this->options->qqlink(); ?>" target="_blank">
				<i class="i1 fa fa-qq"></i>
			</a>
			<a href="<?php $this->options->mlink(); ?>" target="_blank">
				<i class="i2 fa fa-envelope"></i>
			</a>
			<a href="<?php $this->options->glink(); ?>" target="_blank">
				<i class="i2 fa fa-github fa-lg"></i>
			</a>
			<a href="<?php $this->options->qzlink(); ?>" target="_blank">
				<i class="i4 fa fa-music fa-lg"></i>
			</a>
			<a href="<?php $this->options->wlink(); ?>" target="_blank">
				<i class="i5 fa fa-weibo fa-lg"></i>
			</a>

		</span>
	</div>
	<?php if ($this->
		options->search == 'able'): ?>
		<div class="search">
			<form role="search" method="get" class="search-form is-active" action="/index.php">
				<label>
					<input type="search" class="search-field" placeholder="Search" value="" name="s">
				</label>
			</form>
		</div>
		<?php endif; ?>
		<nav>
			<div class="collapse">
				<i class="fa fa-th-list"></i>
			</div>
			<ul class="bar">
				<li class="lixue">
					<a href="<?php $this->options->siteUrl(); ?>">首页</a>
				</li>
				<!--分类目录调用-->
				<?php /*<?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
				<?php while($category->next()): ?>
				<li>
					<a <?php if($this->is('category', $category->slug)): ?> class="current" <?php endif; ?> href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?>
					</a>
				</li>
				<?php endwhile; ?>
				*/?>
				<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
				<?php while($pages->next()): ?>
				<li class="lixue">
					<a <?php if($this->is('page', $pages->slug)): ?><?php endif; ?>href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?>
					</a>
				</li>
				<?php endwhile; ?>
				</ul>
			</nav>
</div>
</header>
<!-- 波浪 -->
<div class="twiiuii_layout">
<svg class="teditorial"
     xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink"
     viewBox="0 24 150 38"
     preserveAspectRatio="none">
 <defs>
 <path id="tgentle-wave"
 d="M-160 44c30 0
    58-18 88-18s
    58 18 88 18
    58-18 88-18
    58 18 88 18
    v44h-352z" />
  </defs>
  <g class="tparallax">
   <use xlink:href="#tgentle-wave" x="50" y="0" fill="rgba(0,131,209,0.2)"/>
   <use xlink:href="#tgentle-wave" x="50" y="3" fill="rgba(0,131,209,0.4)"/>
   <use xlink:href="#tgentle-wave" x="50" y="6" fill="rgba(0,131,209,0.6)"/>
   <use xlink:href="#tgentle-wave" x="50" y="9" fill="rgba(0,131,209,0.8)"/>
   <use xlink:href="#tgentle-wave" x="50" y="12" fill="#0083d1"/>
  </g>
</svg>
</div>

