<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!-- footer -->
<footer>

<!-- 滚动判断 -->
<script>
    window.addEventListener('scroll', scrollTOP);
    function scrollTOP() {
        var headerscroll = document.getElementsByClassName('scrolltop')[0];
        var headbg = getComputedStyle(document.querySelector('.scrolltop')).background;                          
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > 450) {
            headerscroll.style.opacity = '0.9';
        } else {
            headerscroll.style.opacity = '0';

        };
    };
</script>
<!-- 图片放大 -->
<?php if ($this->options->Zoom == 'able'): ?>
<script>
        var setupContents = function () {
            $(".article-content img").each(function() {
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
<script> 
function scroll() { 
var titleInfo = document.title;  
var firstInfo = titleInfo.charAt(0); 
var lastInfo = titleInfo.substring(1, titleInfo.length); 
document.title = lastInfo + firstInfo;} 
setInterval("scroll()", 400); 
</script>
<?php endif; ?>

<!-- 顶部加载进度条 -->
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

<!-- 网站顶部公告 -->
<?php if ($this->options->Demo== 'able'): ?>
<script>
$(function(){
var gonggao= document.getElementById("demo");
gonggao.style.cssText="display:flex;";
$("#demo").click(function(){
swal({   
	title: " 网站公告 ",   
	text: '<?php $this->options->jrxq() ?>',   
	imageUrl: "",
	html: true,
	timer: 10000,   
	showConfirmButton: true
});
});
});
</script>
<?php endif; ?>


<div class="fotn">
<span class="fottb">
    <a target="_blank" href="http://typecho.org/" title="typecho博客">
        <img class="fotlink typecho" src="<?php $this->options->themeUrl('img/footer/typecho.png'); ?>" oncontextmenu="return false;" ondragstart="return false;" />
    </a>  
    <a href="https://me.jinchuang.org/archives/851.html" title="Sgreen主题">
        <img class="fotlink" src="<?php $this->options->themeUrl('img/footer/theme.png'); ?>" oncontextmenu="return false;" ondragstart="return false;" />
    </a>  
    <a href="mailto:admin@jinchuang.org" target="_blank" title="联系我">
        <img style="width:16px;top:3px" class="fotlink" src="<?php $this->options->themeUrl('img/footer/email.png'); ?>" oncontextmenu="return false;" ondragstart="return false;" />
    </a>   
    <!-- 网站地图 -->
    <?php if ($this->options->Webdt== 'able'): ?>
        <a href="<?php $this->options->zddt() ?>" target="_blank" title="站点地图"><img class="fotlink" src="<?php $this->options->themeUrl('img/footer/zd.png'); ?>" oncontextmenu="return false;" ondragstart="return false;" /></a>
        <a href="<?php $this->options->wzdt() ?>" target="_blank" title="网站地图"><img class="fotlink" src="<?php $this->options->themeUrl('img/footer/wz.png'); ?>" oncontextmenu="return false;" ondragstart="return false;" /></a>
        <!--<a href="/feed" target="_blank" title="RSS"><img class="fotlink" src="<?php $this->options->themeUrl('img/footer/rss.png'); ?>" oncontextmenu="return false;" ondragstart="return false;" /></a>-->
</span>
    <?php endif; ?>
	<br><span class="fotba">
    本站：使用CDN加速访问 · 支持IPv6访问<br>
    Copyright ©  <?php echo date('Y'); ?>
    <a style="background: rgba(125,125,125,0.07);border-radius: 4px;padding: 0px 4px;" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
    <!-- icp备案 -->
    <?php if ($this->options->Icp== 'able'): ?>
        <a style="user-select:all;" href="https://beian.miit.gov.cn/" target="_blank"><?php $this->options->icp() ?></a> 
    <?php endif; ?>
	
    <!-- 公安备案号 -->
    <?php if ($this->options->Gongan== 'able'): ?>
        <a target="_blank" href="<?php $this->options->gonganurl() ?>" style="display:inline-block;text-decoration:none;height:13px;line-height:20px;">
            <img src="<?php $this->options->themeUrl('img/footer/gongan.png'); ?>" style="width:16px;float:left;"/>
            <p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 0px;"><?php $this->options->gongan() ?></p>
        </a></span>
    <?php endif; ?>
</div>


<div class="toTop" id="toTopBtn"><span class="ttop">顶部</span></div>
<script src="<?php $this->options->themeUrl('js/top.min.js'); ?>" async></script>

<!-- 代码高亮 -->
<?php if ($this->options->Prism== 'able'): ?>
<!--<script src="<?php $this->options->themeUrl('js/prism.min.js'); ?>" async></script>-->
<?php endif; ?>


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
      socialShare(".social-share, .share-component"); //分享
      hljs.highlightAll();//代码高亮

      $(document).on('pjax:end', function() {
      // 清除之前已高亮的链接类名
          const activeLinks = document.querySelectorAll('.hactive');
          activeLinks.forEach(function(link) {
              link.classList.remove('hactive');
          });

          // 高亮当前链接
          highlightCurrentLink();
      });

  });

}

//评论
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
<!-- IE浏览器提示 -->
<div id="popupDiv" class="isie">
      您当前正在使用Internet Explorer浏览器访问本站，本站在此浏览器上兼容性较差<br>建议使用 Chrome, Firefox, or Edge浏览器访问本网站
</div>
<script>
  function isIE() {
    const ua = navigator.userAgent;
    return ua.indexOf("MSIE") > -1 || ua.indexOf("Trident/") > -1;
  }
  function showPopup() {
    const popupDiv = document.getElementById("popupDiv");
    const popuphdDiv = document.getElementById("hdvideo");
    popupDiv.style.display = "block";
    popuphdDiv.style.display = "none";
  }
  document.addEventListener("DOMContentLoaded", function() {
    if (isIE()) {
      showPopup();
    }
  });
</script>
<?php $this->footer(); ?>
</footer>
</body>
</html>
<?php if ($this->options->Compress == 'able'): ?>
<?php $html_source = ob_get_contents(); ob_clean(); print compressHtml($html_source); ob_end_flush(); ?>
<?php endif; ?>
