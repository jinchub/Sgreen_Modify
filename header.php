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
<script src="<?php $this->options->themeUrl('js/ribbon.min.js'); ?>"></script>
<header>
<!-- 顶部时间 -->
<span id="beijing" class="time" ></span>
<!-- 顶部心知天气 -->
<!--
使用心知天气说明，去注册个账号，申请免费版，然后配置新版插件，把生成的代码放到这里即可使用 
-->
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
			<!--<a href="<?php $this->options->qqlink(); ?>" target="_blank">
				<i class="i1 fa fa-qq"></i>
			</a>-->
			<a title="公告" href="javascript:;" id="demo">
				<i style="font-size:16px" class="i3 fa fa-list-alt"></i>
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
			<!-- <a href="<?php $this->options->wlink(); ?>" target="_blank"><i style="color:#fdb205" class="iconfont icon-weibo"></i></a>-->

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

<!-- 波浪样式 -->
<div ondragstart="return false;" class="wave-box">
	<div class="marquee-box marquee-up" id="marquee-box">
		<div class="marquee">
			<div class="wave-list-box" id="wave-list-box1">
				<ul>
					<li><img height="60" alt="波浪" src="<?php $this->options->themeUrl('img/gray2.png'); ?>"></li>
				</ul>
			</div>
			<div class="wave-list-box" id="wave-list-box2">
				<ul>
					<li><img height="60" alt="波浪" src="<?php $this->options->themeUrl('img/gray2.png'); ?>"></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="marquee-box" id="marquee-box3">
		<div class="marquee">
			<div class="wave-list-box" id="wave-list-box4">
				<ul>
					<li><img height="60" alt="波浪" src="<?php $this->options->themeUrl('img/gray1.png'); ?>"></li>
				</ul>
			</div>
			<div class="wave-list-box" id="wave-list-box5">
				<ul>
					<li><img height="60" alt="波浪" src="<?php $this->options->themeUrl('img/gray1.png'); ?>"></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div>
</header>