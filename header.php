<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php ob_start(); ?>
<!DOCTYPE HTML>

<!--根据时间切换配色和logo -->
<?php
    date_default_timezone_set('Asia/Shanghai');
    $hour = date('H');
    if ($hour >= 6 && $hour < 22) {
        $theme = $this->options->css;
    } else {
        $theme = 'black';
    };
?>
<?php echo '<html lang="zh-Hans-CN" xmlns="//www.w3.org/1999/xhtml" class="'. $theme .'">' ?>
    <?php echo '<head>' ?>
    <!--<base target="_blank"/>-->
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
       <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
       <title>
           <?php $this->archiveTitle(array(
               'category'  =>  _t('分类 %s 下的文章'),
               'search'    =>  _t('包含关键字 %s 的文章'),
               'tag'       =>  _t('标签 %s 下的文章'),
               'author'    =>  _t('%s 发布的文章')
           ), '', ' - '); 
           ?>
            靳闯博客
           <?php if($this->is('index')): ?> - <?php $this->options->description() ?>
           <?php endif; ?>
       </title>
       <!--<?php $this->options->title(); ?>-->
       <?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&atom='); ?>
       <meta name="description" content="typecho博客">
       
       <!--icon图标-->
       <link href="<?php $this->options->ico() ?>" rel="shortcut icon">
       <!--<?php echo '<link href="/img/logo/'. $themes .'/favicon.ico" rel="shortcut icon">' ?>-->
       
       <!--jquery-->
       <script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
       
       <!--fontawesome图标 -->
       <link rel="stylesheet" href="<?php $this->options->themeUrl('css/font-awesome.min.css'); ?>">
       
       <!--字体样式-->
       <link rel="stylesheet" href="<?php $this->options->themeUrl('css/fonts.css'); ?>">
    
       <!--主题样式-->
       <link rel="stylesheet" href="<?php $this->options->themeUrl('css/' . $this->options->css . '.css'); ?>">
       <!--暗黑样式-->
       <link rel="stylesheet" href="<?php $this->options->themeUrl('css/dark.css'); ?>">
       
       <!--加载进度条-->
       <?php if ($this->options->Gress== 'able'): ?>
           <script src="<?php $this->options->themeUrl('js/gress.min.js'); ?>"></script>
       <?php endif; ?>
       
       <!--灯箱 此js为合并js，包含文章下方分享的js-->
       <?php if ($this->options->Zoom == 'able'): ?>
           <link rel="stylesheet" href="<?php $this->options->themeUrl('css/zoom.css'); ?>">
           <script src="<?php $this->options->themeUrl('js/zoom-share.min.js'); ?>"></script>
       <?php endif; ?>
       
       <!--网站公告-->
       <?php if ($this->options->Demo== 'able'): ?>
           <link rel="stylesheet" href="<?php $this->options->themeUrl('css/sweetalert.css'); ?>">
           <script src="<?php $this->options->themeUrl('js/sweetalert.min.js'); ?>"></script>
       <?php endif; ?>
       
       <!--代码高亮-->
       <?php if ($this->options->Prism== 'able'): ?>
           <!--<link rel="stylesheet" href="<?php $this->options->themeUrl('css/prism.css'); ?>">-->
           <link rel="stylesheet" href="<?php $this->options->themeUrl('hljs/github.min.css'); ?>">
           <script src="<?php $this->options->themeUrl('hljs/highlight.min.js'); ?>"></script>
           <script>hljs.highlightAll();</script>
       <?php endif; ?>
       
       <!--文章分享-->
       <link rel="stylesheet" href="<?php $this->options->themeUrl('css/share.min.css'); ?>">
       
       <!--js-->
       <script>
            //主题判断
            var html = document.getElementsByTagName("html")[0];
            var deftheme = html.getAttribute("class");
            var currentTheme = deftheme.includes('black') ? deftheme : 'green';
            if (currentTheme === 'green') {
                newtheme = 'black'
            } else {
                newtheme = 'green'
            }
            var cookieTheme = getCookie("theme");
            if (cookieTheme) {
                currentTheme = cookieTheme;
                setDocumentTheme(currentTheme);
            }
            function setDocumentTheme(theme) {
                html.className = '';
                html.classList.add(theme);
            }
            function setCookie(name, value) {
                var expires = new Date();
                expires.setHours(24, 0, 0, 0);
                var timeDiff = expires.getTime() - Date.now();
                document.cookie = name + "=" + value + "; expires=" + new Date(Date.now() + timeDiff) + "; path=/";
            }
            function getCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
            }
        </script>
    </head>
    
    <!--body开始-->
    <body>

        <!-- header -->
        <header id="header">

            <!--切换样式-->
            <button id="toggle-style">
                <i class="fa fa-moon-o"></i>
                <i class="fa fa-certificate"></i>
            </button>
            <script>
                document.getElementById("toggle-style").addEventListener("click", function() {
                    if (currentTheme === newtheme) {
                        setDocumentTheme(deftheme);
                        currentTheme = deftheme;
                        scrollTOP();
                    } else if (currentTheme === deftheme) {
                        setDocumentTheme(newtheme);
                        currentTheme = newtheme;
                        scrollTOP();
                    }
                    setCookie("theme", currentTheme);
                });
            </script>

            <!--背景视频-->
            <!--<div class="header-video" id="header-video">
                <video oncontextmenu="return false" id="vd" controlslist="nodownload" autoplay loop muted >
                    <source src="视频地址" type="video/mp4" />
                </video>
            </div>-->
            
            <!--顶部内容-->
            <div class="header-top">
                <div class="scrolltop"></div>
                <div class="intro">
                    <!--标题-->
                    <div class="intro-sitename" title="靳闯博客">
                        <!--头像-->
                        <div class="ulogo">
                            <img src="<?php $this->options->logoUrl(); ?>" class="intro-logo">
                            <!--<?php echo '<img src="' . $logo_path . '" class="intro-logo">' ?>-->
                        </div>
                        <a class="sitename" href="<?php $this->options->siteUrl(); ?>" >
                            <?php $this->options->title() ?>
                        </a>
                    </div>
                    
                    <nav>
                    <!--手机版导航菜单图标-->
                        <div class="collapse">
                        <div class="ulogo">
                            <img src="<?php $this->options->logoUrl(); ?>" class="intro-logo">
                            <!--<?php echo '<img src="' . $logo_path . '" class="intro-logo">' ?>-->
                        </div>
                            <!--<i class="fa fa-th-list"></i>-->
                        </div>
                        
                        <ul class="header-menu">
                            <a class="lixue" target="_self" href="<?php $this->options->siteUrl(); ?>">
                                <li>文章</li>
                            </a>
            
                            <!--导航菜单-->
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
                                    }
                                
                                    var links = document.querySelectorAll('.lixue');
                                    var currentUrl = getCurrentUrl();
                                    
                                    // 获取当前页面的域名
                                    var domain = window.location.hostname;
                                
                                    for (var i = 0; i < links.length; i++) {
                                        var link = links[i];
                                        if (link.href.replace(/\/$/, "") === currentUrl) {
                                            link.classList.add('hactive');
                                        }
                                    }
                                    if (/^\d+\.html$/.test(currentUrl.split('/').pop())) {
                                        var link = document.querySelector('.lixue');
                                        link.setAttribute('href', 'https://' + domain);
                                        link.classList.add('hactive');
                                    }
                                    // 检查当前页面是否在下面的集合中
                                    var pages = [
                                        "https://" + domain + "/logo.html",
                                        "https://" + domain + "/tv.html",
                                        "https://" + domain + "/video.html",
                                        "https://" + domain + "/wallpaper.html",
                                        "https://" + domain + "/shorts.html",
                                        "https://" + domain + "/shuimo.html",
                                        "https://" + domain + "/touxiang.html"
                                    ];
                                
                                    if (pages.includes(currentUrl)) {
                                        // 然后获取这个yule.html链接
                                        var menuLink = document.querySelector('a[href="https://' + domain + '/yule.html"]');
                                        // 添加高亮样式
                                        menuLink.classList.add('hactive');
                                    }
                                }
  
                                highlightCurrentLink();
                            </script>
                        </ul>
                    </nav>

            <!--搜索模块-->
            <?php if ($this->options->search == 'able'): ?>
                <div class="headertop-search">
                    <form id="search-form" role="search" method="get" class="searchtop-form is-active" action="/index.php">
                        <label>
                            <input type="search" class="searchtop-field" placeholder="输入搜索内容" value="" name="s">
                        </label>
                    </form>
                </div>
            <?php endif; ?>
                </div> <!-- intro end -->

                <div class="tool">
                    
                    <!--时间-年月日-->
                    <div class="tools time" id="beijing" >
                        <script>window.onload = function() {startTime();};</script>
                    </div>
                    
                    <!--时间-农历-->
                    <div class="tools solarlunar">
                        <script src="<?php $this->options->themeUrl('js/nongli.min.js'); ?>" type="text/javascript"></script>
                        <script src="<?php $this->options->themeUrl('js/time.js'); ?>" type="text/javascript"></script>
                        <script>
                            $(function () {
                                var lunar = calendar.solar2lunar();
                                $('.solarlunar').html(''+'农历: '+lunar.gzYear +'年'+'·'+ lunar.IMonthCn+lunar.IDayCn+'');
                            });
                        </script>
                    </div>
                    
                    <!--时间-周-->
                    <div class="tools week">
                        <script>document.write("星期" + "日一二三四五六".charAt(new Date().getDay()))</script>
                    </div>
                    
                    <!--音乐分享-->
                    <div class="tools" id="share_home">
                        <button id="playButton" title="5首歌曲连续播放">播放音乐</button>
                    </div>
                    
                    <!--连续随机播放-->
                    <script type="text/javascript">
                        var music_name = ["1.mp3","2.mp3","3.mp3","4.mp3","5.mp3"];
                        var arr = music_name.map(function(name) {
                            //这里是歌曲目录列表url地址，然后拼接上面music_name列表中的歌曲名称
                            return "https://xxx.com/mp3list/" + name;
                        });
                    
                        //监听页面第一次鼠标点击，自动播放歌曲
                        //var firstMouseClickDetected = false;
                        /*document.addEventListener('mousedown', function firstMouseClickHandler() {
                            if (!firstMouseClickDetected) {
                                if (myAudio.src === '') {
                                    myAudio.src = playlist[currentTrack];
                                }
                                myAudio.play();
                                playButton.innerHTML = '暂停音乐';
                                firstMouseClickDetected = true;
                            }
                            document.removeEventListener('mousedown', firstMouseClickHandler);
                        });*/
                    
                        var playlist = shuffle(arr.slice());
                        var currentTrack = 0;
                        var hasClickedOnce = false;
                        var myAudio = new Audio();
                        myAudio.loop = false;
                        myAudio.preload = "none";
                        myAudio.controls = true;
                        myAudio.controlsList = "nodownload";
                        myAudio.src = playlist[currentTrack];
                        var playButton = document.getElementById("playButton");
                        playButton.addEventListener('click', function() {
                            if (myAudio.paused) {
                                if (myAudio.src === '') {
                                    myAudio.src = playlist[currentTrack];
                                }
                                myAudio.play();
                                playButton.innerHTML = '暂停音乐';
                            } else {
                                myAudio.pause();
                                playButton.innerHTML = '播放音乐';
                            }
                        });
                        myAudio.addEventListener('ended', playEndedHandler);
                        function playEndedHandler() {
                            currentTrack++;
                            if (currentTrack < playlist.length) {
                                myAudio.src = playlist[currentTrack];
                                myAudio.play();
                            } else {
                                currentTrack = 0;
                                myAudio.src = playlist[currentTrack];
                                myAudio.play();
                            }
                        };
                        document.addEventListener('click', function() {
                            if (!hasClickedOnce) {
                                if (myAudio.paused && myAudio.src === '') {
                                    myAudio.src = playlist[currentTrack];
                                    myAudio.play();
                                    playButton.innerHTML = '暂停音乐';
                                    hasClickedOnce = true; // Set the flag to prevent further clicks.
                                }
                            }
                        });
                        document.getElementById("share_home").appendChild(myAudio);
                        function shuffle(array) {
                            for (let i = array.length - 1; i > 0; i--) {
                                const j = Math.floor(Math.random() * (i + 1));
                                [array[i], array[j]] = [array[j], array[i]];
                            }
                            return array;
                        };
                    </script>

                </div> <!-- tool end -->

            </div> <!-- header-top end -->
            
            <!--描述-->
            <div class="header-siteinfo">
                <a class="siteurl" href="<?php $this->options->siteUrl(); ?>" ><?php $this->options->description() ?></a>
            </div>

            <!--图标按钮-->
            <div class="header-social">
                <a style="display:none" target="_self" title="公告" href="javascript:;" id="demo">小站告示 
                    <i class="fa fa-bullhorn"></i>
                </a>
                <a class="contact flink">
                    <i class="fa fa-envelope"></i>
                    <div class="icon"><?php $this->options->mlink(); ?></div>
                </a>
                <a  class="contact flink">
                    <i class="fa fa-qq"></i>
                    <div class="icon"><?php $this->options->qqlink(); ?></div>
                </a>
                <script>
                    var contacts = document.querySelectorAll('.contact');
                    Array.prototype.forEach.call(contacts, function(contact) {
                        var div = contact.querySelector('.icon');
                            contact.addEventListener('mouseenter', function() {
                                div.classList.add('icons');
                            });
                            contact.addEventListener('mouseleave', function() {
                                div.classList.remove('icons');
                            });
                    });
                </script>
                <a class="flink" href="<?php $this->options->musiclink(); ?>" target="_blank">
                    <i class="fa fa-headphones"></i>
                </a>
                <a class="flink" href="<?php $this->options->glink(); ?>" target="_blank">
                    <i class="fa fa-github"></i>
                </a>
            </div> <!-- header-social end -->
                
            <!--搜索模块-->
            <?php if ($this->options->search == 'able'): ?>
                <div class="header-search">
                    <form id="search-form" role="search" method="get" class="search-form is-active" action="/index.php">
                        <label>
                            <input type="search" class="search-field" placeholder="输入搜索内容" value="" name="s">
                        </label>
                    </form>
                </div>
            <?php endif; ?>

        <!--波浪样式-->
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
        </header>
        

