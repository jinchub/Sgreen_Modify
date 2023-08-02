<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!-- 切换外观和头像，每天凌晨cookie失效 -->
<script>
    var header = document.getElementsByTagName("html")[0];
    var headts = document.getElementsByTagName('head')[0];
    var ts = headts.getAttribute("class").trim();
    var currentTheme = header.classList.contains('black') ? 'black' : ts;
    var Logo = document.querySelector('.intro-logo');
    var cookieTheme = getCookie("theme");
    videoSource = "/usr/themes/Sgreen_Modify/video/yun.mp4";

    if (cookieTheme) {
        currentTheme = cookieTheme;
        setDocumentTheme(currentTheme);
    }

    if (currentTheme === "black") {
        videoSource = "/usr/themes/Sgreen_Modify/video/dark.mp4";
        document.getElementById("vd").src = videoSource;
    }

    document.getElementById("toggle-style").addEventListener("click", function() {
        if (currentTheme === ts) {
            setDocumentTheme("black");
            currentTheme = "black";
            videoSource = "/usr/themes/Sgreen_Modify/video/dark.mp4";
            document.getElementById("vd").src = videoSource;
        } else if (currentTheme === "black") {
            setDocumentTheme(ts);
            currentTheme = ts;
            videoSource = "/usr/themes/Sgreen_Modify/video/yun.mp4";
            document.getElementById("vd").src = videoSource;
        }
        setCookie("theme", currentTheme);
    });

    function setDocumentTheme(theme) {
        header.className = '';
        header.classList.add(theme);
        Logo.src = '/usr/themes/Sgreen_Modify/img/logo/' + theme + '/logo.png';
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

<!-- 图片点击放大 -->
<?php if ($this->options->Zoom == 'able'): ?>
    <script type="text/javascript">
        var setupContents = function () {
            $(".article-content p > img").each(function() {
                $(this).attr('data-action', 'zoom');
            }); 
        };
        setupContents();
    </script>
<?php endif; ?>

<!-- 背景彩带 -->
<?php if ($this->options->Caidai == 'able'): ?>
    <script src="<?php $this->options->themeUrl('js/caidai.min.js'); ?>"></script>
<?php endif; ?>

<!-- 复制版权 -->
<?php if ($this->options->Copyright == 'able'): ?>
    <script>
        document.body.addEventListener('copy', function (e) {
            if (window.getSelection().toString() && window.getSelection().toString().length > 42) {
                setClipboardText(e);
                alert('商业转载请联系作者获得授权，非商业转载请注明出处，谢谢合作。');
            }
        }); 
        function setClipboardText(event) {
            var clipboardData = event.clipboardData || window.clipboardData;
            if (clipboardData) {
                event.preventDefault();
                var htmlData = ''
                    + '著作权归作者所有。<br>'
                    + '商业转载请联系作者获得授权，非商业转载请注明出处。<br>'
                    + '作者：<?php $this->author() ?><br>'
                    + '链接：' + window.location.href + '<br>'
                    + '来源：<?php $this->options->siteUrl(); ?><br><br>'
                    + window.getSelection().toString();
                var textData = ''
                    + '著作权归作者所有。\n'
                    + '商业转载请联系作者获得授权，非商业转载请注明出处。\n'
                    + '作者：<?php $this->author() ?>\n'
                    + '链接：' + window.location.href + '\n'
                    + '来源：<?php $this->options->siteUrl(); ?>\n\n'
                    + window.getSelection().toString();
         
                clipboardData.setData('text/html', htmlData);
                clipboardData.setData('text/plain',textData);
            }
        }
    </script>
<?php endif; ?>

<!-- 动态title -->
<?php if ($this->options->Title== 'able'): ?>
    <script type="text/javascript"> 
        var titleInfo = document.title + ' ';
        var scrollSpeed = 200; // 滚动速度，单位为毫秒
        var scrollDelay = 100; // 滚动延迟时间，单位为毫秒
        var scrollDirection = 1; // 滚动方向，1为向左滚动，-1为向右滚动
        function scrollTitle() {
            titleInfo = titleInfo.substring(scrollDirection) + titleInfo.charAt(0);
            document.title = titleInfo; // 更新标题
        }
        setInterval(scrollTitle, scrollSpeed);
        setTimeout(function() { clearInterval(scrollTitle); }, scrollDelay);
    </script>
<?php endif; ?>

<!-- 加载进度条 -->
<?php if ($this->options->Gress== 'able'): ?>
    <script>
        $('body').show();
        $('.version').text(NProgress.version);
        NProgress.start();
        setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);
        $("#b-0").click(function() { NProgress.start(); });
        $("#b-40").click(function() { NProgress.set(0.4); });
        $("#b-inc").click(function() { NProgress.inc(); });
        $("#b-100").click(function() { NProgress.done(); });
    </script>
<?php endif; ?>

<!-- 网站公告 -->
<?php if ($this->options->Demo== 'able'): ?>
    <script>
        $(function(){
            var gonggao= document.getElementById("demo");
            gonggao.style.cssText="display:inline-table;";
            $("#demo").click(function(){
                swal({   
                    title: " 网站公告栏 ",   
                    text: "<?php $this->options->jrxq() ?>",   
                    imageUrl: "",
                    html: true,
                    timer: 5000,   
                    showConfirmButton: true
                });
            });
        });
    </script>
<?php endif; ?>

<!-- 网站底部内容 -->
<footer>
    <div class="fotn">
        <span class="fottb">
            <a target="_blank" href="http://typecho.org/" title="typecho博客">
                <img class="fotlink typecho" src="<?php $this->options->themeUrl('img/footer/typecho.png'); ?>" oncontextmenu="return false;" ondragstart="return false;" />
            </a> 
            <a href="https://github.com/boyshu/typecho_Sgreen" target="_blank" title="Sgreen主题">
                <img class="fotlink" src="<?php $this->options->themeUrl('img/footer/theme.png'); ?>" oncontextmenu="return false;" ondragstart="return false;" />
            </a> 
            <a href="mailto:admin@jinchuang.org" target="_blank" title="联系我">
                <img style="width:16px;top:3px" class="fotlink" src="<?php $this->options->themeUrl('img/footer/email.png'); ?>" oncontextmenu="return false;" ondragstart="return false;" />
            </a> 
            <a href="/feed" target="_blank" title="RSS">
                <img class="fotlink" src="<?php $this->options->themeUrl('img/footer/rss.png'); ?>" oncontextmenu="return false;" ondragstart="return false;" />
            </a> 
            <!-- 网站地图 -->
            <?php if ($this->options->Webdt== 'able'): ?>
                <a href="<?php $this->options->zddt() ?>" target="_blank" title="站点地图">
                    <img class="fotlink" src="<?php $this->options->themeUrl('img/footer/zd.png'); ?>" oncontextmenu="return false;" ondragstart="return false;" />
                </a> 
                <a href="<?php $this->options->wzdt() ?>" target="_blank" title="网站地图">
                    <img class="fotlink" src="<?php $this->options->themeUrl('img/footer/wz.png'); ?>" oncontextmenu="return false;" ondragstart="return false;" />
                </a> 
            <?php endif; ?>
        </span>
        <br>
        <span class="fotba">Copyright ©  <?php echo date('Y'); ?>
            <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
            <br>
            <!-- icp备案 -->
            <?php if ($this->options->Icp== 'able'): ?>
                <a style="user-select:all;" href="https://beian.miit.gov.cn/" target="_blank"><?php $this->options->icp() ?></a> 
            <?php endif; ?>
            <!-- 公安备案号 -->
            <?php if ($this->options->Gongan== 'able'): ?>
                <a target="_blank" href="<?php $this->options->gonganurl() ?>" style="display:inline-block;text-decoration:none;height:13px;line-height:20px;">
                    <img src="<?php $this->options->themeUrl('img/footer/gongan.png'); ?>" style="width:16px;float:left;"/>
                    <span style="padding: 0px 2px;"><?php $this->options->gongan() ?></span>
                </a>
            <?php endif; ?>
        </span>
        <br>
    </div>
    <?php $this->footer(); ?>
</footer>

<!-- 返回顶部 -->
<div class="toTop">
    <span class="ttop">顶部</span>
</div>

<!-- js文件 -->
<script src="<?php $this->options->themeUrl('js/all.js'); ?>"></script>

<!-- 图片放大js -->
<?php if ($this->options->Zoom == 'able'): ?>
    <script src="<?php $this->options->themeUrl('js/zoom.min.js'); ?>"></script>
<?php endif; ?>

<!-- 时间显示 -->
<script src="<?php $this->options->themeUrl('js/time.js'); ?>"></script>

<!-- pjax header无刷新-->
<script src="//cdn.bootcss.com/jquery.pjax/1.9.6/jquery.pjax.min.js"></script>
<script>
function pjaxInit() {
    var pjaxContainer = '#pjax-container',
        pjaxSearchForm = '#search-form',
        commentForm = '#comment-form',
        pjaxTimeout = 8000;
        
    $(document).pjax('a[target!=_blank]', pjaxContainer, {
        fragment: pjaxContainer,
        timeout: pjaxTimeout
    });
    $(document).on('submit', pjaxSearchForm, function(event) {
        $.pjax.submit(event, pjaxContainer, {
            fragment: pjaxContainer,
            timeout: pjaxTimeout
        });
    });
    $(document).on('submit', commentForm, function(event) {
        $.pjax.submit(event, pjaxContainer, {
            fragment: pjaxContainer,
            timeout: pjaxTimeout
        });
    });

    $(document).on('pjax:send', function() {
      NProgress.start();//加载动画效果开始
    });

    $(document).on('pjax:complete', function() {
      NProgress.done();//加载动画效果结束
      setupContents();//图片灯箱效果
      socialShare(".social-share, .share-component"); //分享代码
      hljs.highlightAll();//代码高亮

    $(document).on('pjax:end', function() {
          // 清除之前已高亮的链接类名
          var activeLinks = document.querySelectorAll('.hactive');
          activeLinks.forEach(function(link) {
              link.classList.remove('hactive');
          });

          // 高亮当前链接
          highlightCurrentLink();
      });

  });

}

//评论提交
function cancelReply() {
    var response = $('.respond')[0],
        holder = $('#comment-form-place-holder')[0],
        input = $('#comment-parent')[0];
    if (null != input) {
        input.parentNode.removeChild(input);
    }
    if (null == holder) {
        return true;
    }
    $('#cancel-comment-reply-link')[0].style.display = 'none';
    holder.parentNode.insertBefore(response, holder);
    return false;
}
pjaxInit()
</script>
</body>
</html>

<!-- 代码压缩 -->
<?php if ($this->options->Compress == 'able'): ?>
<?php $html_source = ob_get_contents(); ob_clean(); print compressHtml($html_source); ob_end_flush(); ?>
<?php endif; ?>
