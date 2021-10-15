<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
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

<?php if ($this->options->Title== 'able'): ?>
<script type="text/javascript"> 
function scroll() { 
var titleInfo = document.title;  
var firstInfo = titleInfo.charAt(0); 
var lastInfo = titleInfo.substring(1, titleInfo.length); 
document.title = lastInfo + firstInfo;} 
setInterval("scroll()", 500); 
</script>
<?php endif; ?>

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

<?php if ($this->options->Demo== 'able'): ?>
<script>
$(function(){
	$("#demo").click(function(){
swal({   
			title: " 网站公告",   
			text: "<?php $this->options->jrxq() ?>",   
			imageUrl: "",
			html: true,
			timer: 5000,   
			showConfirmButton: false
	});
	});
});
</script>
<?php endif; ?>

<footer>
<div style="padding-top: 15px;">
    <!-- 网站地图 -->
    <?php if ($this->options->Webdt== 'able'): ?>
        <a href="<?php $this->options->zddt() ?>" target="_blank">站点地图</a>
        <a href="<?php $this->options->wzdt() ?>" target="_blank">网站地图</a>
        <a href="/feed" target="_blank">RSS Feed</a>
    <?php endif; ?>
	<br>
    <!-- icp备案 -->
    <?php if ($this->options->Icp== 'able'): ?>
        <a href="https://beian.miit.gov.cn/" target="_blank"><?php $this->options->icp() ?></a> 
    <?php endif; ?>
	
    <!-- 公安备案号 -->
    <?php if ($this->options->Gongan== 'able'): ?>
        <a target="_blank" href="<?php $this->options->gonganurl() ?>" style="display:inline-block;text-decoration:none;height:13px;line-height:20px;">
            <img src="<?php $this->options->themeUrl('img/gongan.png'); ?>" style="width:16px;float:left;"/>
            <p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 0px;"><?php $this->options->gongan() ?></p>
        </a>
    <?php endif; ?>

	
    <a target="_blank" href="http://typecho.org/">Typecho</a>
    🍹
    <a href="https://github.com/boyshu/typecho_Sgreen" target="_blank">Sgreen</a>
    <br>
    Copyright © 2016 - <?php echo date('Y'); ?>
    <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
    . All Rights Reserved.
</div>
  <?php $this->footer(); ?>
</footer>

<div class="toTop">TOP</div>

<script src="<?php $this->options->themeUrl('js/all.js'); ?>"></script>

<?php if ($this->options->Prism== 'able'): ?>
<script src="<?php $this->options->themeUrl('js/prism.js'); ?>"></script>
<?php endif; ?>

<?php if ($this->options->Zoom == 'able'): ?>
<script src="<?php $this->options->themeUrl('js/zoom.min.js'); ?>"></script>
<?php endif; ?>

<script src="<?php $this->options->themeUrl('js/time.js'); ?>"></script>
</body>
</html>
<?php if ($this->options->Compress == 'able'): ?>
<?php $html_source = ob_get_contents(); ob_clean(); print compressHtml($html_source); ob_end_flush(); ?>
<?php endif; ?>
