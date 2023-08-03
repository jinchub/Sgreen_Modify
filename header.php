<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php ob_start(); ?>
<!DOCTYPE HTML>
<!--根据时间切换配色和logo -->
<?php
date_default_timezone_set('Asia/Shanghai');
$hour = date('H');
$themes = $this->options->css;
if ($hour >= 7 && $hour < 19) {
    $theme = $this->options->css;
} 
else{
    $theme = 'black';
};
$logo_path = '/usr/themes/Sgreen_Modify/img/logo/'.$theme.'/logo.png';
?>

<?php echo '<html lang="zh-cn" xmlns="//www.w3.org/1999/xhtml" class="'. $theme .'">' ?>
<?php echo '<head class="'. $themes .'">' ?>
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
    <?php if($this->is('index')): ?>
    <?php endif; ?>
</title>
<meta name="description" content="这是typecho博客，网站的描述内容">
<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&atom='); ?>

<!-- ico图标 -->
<link href="<?php $this->options->ico() ?>" rel="shortcut icon">

<!-- jquery -->
<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>

<!-- 时间字体样式 -->
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/fonts/time/time.css'); ?>">

<!-- 主题样式 -->
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/' . $this->options->css . '.css'); ?>">

<!-- 暗黑样式 -->
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/dark.css'); ?>">

<!-- 代码高亮 -->
<?php if ($this->options->Prism== 'able'): ?>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('hljs/github.min.css'); ?>">
    <script src="<?php $this->options->themeUrl('hljs/highlight.min.js'); ?>"></script>
<?php endif; ?>

<!-- 图标样式 -->
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/font-awesome.min.css'); ?>">

<!-- 图片放大 -->
<?php if ($this->options->Zoom == 'able'): ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/zoom.css'); ?>">
<?php endif; ?>

<!-- 加载进度条 -->
<?php if ($this->options->Gress== 'able'): ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/gress.css'); ?>">
<script src="<?php $this->options->themeUrl('js/gress.js'); ?>"></script>
<?php endif; ?>

<!-- 网站公告 -->
<?php if ($this->options->Demo== 'able'): ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/sweetalert.css'); ?>">
<script src="<?php $this->options->themeUrl('js/sweetalert.min.js'); ?>"></script>
<?php endif; ?>

<!-- 文章分享 -->
<script src="<?php $this->options->themeUrl('js/social-share.min.js'); ?>"></script>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/share.min.css'); ?>">
</head>

<!-- 网站正文body -->
<body onLoad="startTime()">
    <!-- 切换样式按钮 -->
    <button id="toggle-style">
        <i class="fa fa-moon-o"></i>
        <i class="fa fa-certificate"></i>
    </button>

    <!-- header头部内容 -->
    <header id="header">
        <!-- 顶部视频背景 -->
        <div class="video">
            <video oncontextmenu="return false" id="vd" controlslist="nodownload" autoplay loop muted >
                <source src="/usr/themes/Sgreen_Modify/video/header.mp4" type="video/mp4" />
            </video>
        </div>

        <!-- 顶部时间 -->
        <span id="beijing" class="time" ></span>
        <!--时间-周-->
        <span class="week">
        <script>document.write("星期" + "日一二三四五六".charAt(new Date().getDay()))</script>
        </span>
        <!--时间-农历年-->
        <script src="<?php $this->options->themeUrl('js/ncalendar.js'); ?>"></script>
        <span class="solarlunar">
        <script>
        $(function () {
            var lunar = calendar.solar2lunar();
            $('.solarlunar').html(''+'农历: '+lunar.gzYear +'年'+'&nbsp;&nbsp;'+ lunar.IMonthCn+lunar.IDayCn+'');
        });
        </script>
        </span>

        <div class="main">
            <div class="intro">
                <span class="ulogo">
                    <!--<img src="<?php $this->options->logoUrl(); ?>" class="intro-logo">-->
                    <?php echo '<img src="' . $logo_path . '" class="intro-logo">' ?>
                </span>
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

        <!-- 搜索模块 -->
        <?php if ($this->options->search == 'able'): ?>
        <div class="search">
            <form id="search-form" role="search" method="get" class="search-form is-active" action="/index.php">
                <label>
                    <input type="search" class="search-field" placeholder="Search" value="" name="s">
                </label>
            </form>
        </div>
        <?php endif; ?>

        <!-- 导航菜单 -->
        <nav>
        <!-- 手机版导航菜单图标 -->
        <div class="collapse">
            <i class="fa fa-th-list"></i>
        </div>
        <ul class="bar">
            <a class="lixue" target="_self" href="<?php $this->options->siteUrl(); ?>">
                <li>文章</li>
            </a>

            <!-- 导航菜单 -->
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
                <a class="lixue" target="_self" <?php if($this->is('page', $pages->slug)): ?><?php endif; ?>href="<?php $pages->permalink(); ?>">
                    <li><?php $pages->title(); ?></li>
                </a>
            <?php endwhile; ?>
                <script>
                    function highlightCurrentLink() {
                        function getCurrentUrl() {
                            return window.location.href.replace(/\/$/, "");
                        };

                        var protocol = window.location.protocol;
                        var hostname = window.location.hostname;
                        var domain = protocol + "//" + hostname;


                        var links = document.querySelectorAll('.lixue');
                        var currentUrl = getCurrentUrl();

                        for (var i = 0; i < links.length; i++) {
                            var link = links[i];
                            if (link.href.replace(/\/$/, "") === currentUrl) {
                                link.classList.add('hactive');
                            };
                        };
                        //用于在文章页面,文章菜单突出背景色
                        if (/^\d+\.html$/.test(currentUrl.split('/').pop())) {
                            var link = document.querySelector('.lixue');
                            link.setAttribute('href',domain);
                            link.classList.add('hactive');
                        };
                    };
                    highlightCurrentLink();
                </script>
            </ul>
        </nav>
    </div>
</header>
<!-- 波浪样式 -->
<div class="twiiuii_layout" id="wave">
    <svg class="teditorial" id="teditorial" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 38" preserveAspectRatio="none">
        <defs><path id="tgentle-wave" d="M-160 44 c30 0 58-18 88-18 s58 18 88 18 58-18 88-18 58 18 88 18 v20h-352z" />
        </defs>
        <g class="tparallax">
            <use xlink:href="#tgentle-wave" x="50" y="0" fill="transparent"/>
            <use xlink:href="#tgentle-wave" x="50" y="3" fill="transparent"/>
            <use xlink:href="#tgentle-wave" x="50" y="6" fill="transparent"/>
            <use xlink:href="#tgentle-wave" x="50" y="9" fill="transparent"/>
            <use xlink:href="#tgentle-wave" x="50" y="12" fill="transparent"/>
        </g>
    </svg>
</div>

