<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html lang="zh-CN" xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?>
<?php $this->options->title(); ?><?php if($this->is('index')): ?> - <?php $this->options->description() ?><?php endif; ?></title>
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
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/share.min.css'); ?>">
<script src="<?php $this->options->themeUrl('js/social-share.min.js'); ?>"></script>
<!-- header头部波浪 -->
<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>" type="text/javascript"></script>
<script src="<?php $this->options->themeUrl('js/bolang.js'); ?>" type="text/javascript"></script>
</head>
<body>
<header>
<!-- 天气插件开始 -->
<div id="weather-v2-plugin-simple"></div>
<script>
WIDGET = {
  CONFIG: {
    "modules": "10234",
    "background": 5,
    "tmpColor": "FFFFFF",
    "tmpSize": "14",
    "cityColor": "FFFFFF",
    "citySize": "14",
    "aqiSize": 16,
    "weatherIconSize": "20",
    "alertIconSize": 18,
    "padding": "0px 10px 10px 10px",
    "shadow": "0",
    "language": "auto",
    "borderRadius": 5,
    "fixed": "true",
    "vertical": "middle",
    "horizontal": "center",
    "right": 10,
    "top": 10,
    "key": "H3sXBlL503"
  }
}
</script>
<script src="https://apip.weatherdt.com/simple/static/js/weather-simple-common.js?v=2.0"></script>
<!-- 天气插件结束 -->
<div class="main">
    <div class="intro">
		<a href="javascript:;" id="demo"><img src="<?php $this->options->logoUrl(); ?>" class="intro-logo"></a>
		<span class="intro-sitename">
			<a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
		</span> 
		<span class="intro-siteinfo">
			<?php $this->options->description() ?>
		</span> 
		<span class="social"> 
			<a href="<?php $this->options->qqlink(); ?>" target="_blank"><i class="i1 fa fa-qq"></i></a> 
			<a href="<?php $this->options->mlink(); ?>" ><i class="i2 fa fa-envelope"></i></a>
			<a href="<?php $this->options->wlink(); ?>" target="_blank"><i style="font-size:20px" class="fa fa-weibo"></i></a>
			<a href="<?php $this->options->glink(); ?>" target="_blank"><i style="font-size:20px" class="i3 fa fa-github"></i></a> 
			<a href="<?php $this->options->twlink(); ?>" target="_blank"<i style="font-size:20px"  class="fa fa-twitter"></i></a>
		</span> 
	</div>
    <?php if ($this->options->search == 'able'): ?>
    <div class="search">
         <form role="search" method="get" class="search-form is-active" action="/index.php">
        <label> 
        <input type="search" class="search-field" placeholder="输入想要搜索的内容..." value="" name="s">
        </label>
      </form>
    </div>
    <?php endif; ?>
    <nav>
      <div class="collapse"> <i class="fa fa-th-list"></i></div>
      <ul class="bar">
        <li class="lixue"><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <?php while($pages->next()): ?>
        <li class="lixue"><a<?php if($this->is('page', $pages->slug)): ?><?php endif; ?> href="<?php $pages->permalink(); ?>">
          <?php $pages->title(); ?>
          </a></li>
        <?php endwhile; ?>
      </ul>
    </nav>
</div>
<div ondragstart="return false;" class="wave-box">
	<div class="marquee-box marquee-up" id="marquee-box">
		<div class="marquee">
			<div class="wave-list-box" id="wave-list-box1">
				<ul>
					<li><img height="60" alt="波浪" src="<?php $this->options->themeUrl('img/bolang/gray2.png'); ?>"></li>
				</ul>
			</div>
			<div class="wave-list-box" id="wave-list-box2">
				<ul>
					<li><img height="60" alt="波浪" src="<?php $this->options->themeUrl('img/bolang/gray2.png'); ?>"></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="marquee-box" id="marquee-box3">
		<div class="marquee">
			<div class="wave-list-box" id="wave-list-box4">
				<ul>
					<li><img height="60" alt="波浪" src="<?php $this->options->themeUrl('img/bolang/gray1.png'); ?>"></li>
				</ul>
			</div>
			<div class="wave-list-box" id="wave-list-box5">
				<ul>
					<li><img height="60" alt="波浪" src="<?php $this->options->themeUrl('img/bolang/gray1.png'); ?>"></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</header>
