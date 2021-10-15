<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!-- 公共头部 -->
<?php $this->need('header.php'); ?>
<!-- 内容 -->
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/404.css'); ?>">
<content class="main" style="width:100%;height: 100px;position: absolute;padding: 70px 0px 50px 0px;">
    <div class="site-name404">
        <p style="font-size: 22px;font-family: 华文彩云;color: #009fd9;filter: drop-shadow(0px 0px 2px #009fd9);">请求内容未找到<br>或许已经被删除</p>
    </div>
</content>

<!-- 公共底部 -->
<div style="margin-top: 140px;position:fixed;height: 100px;width: 100%;bottom:5px;">
<?php $this->need('footer.php'); ?>
</div>