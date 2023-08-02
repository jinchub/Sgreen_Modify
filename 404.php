<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<content >
    <div id="pjax-container" class="main box">
        <div class="article">
            <!--<div class="article-title" style="font-family:'MISANSDB';">
                    <?php $this->title() ?>
                </div>
            -->
            <div class="article-content">
        <div class="page404">
            <img style="height: 200pxpx;position: relative;margin-top: -45px;" src="<?php $this->options->themeUrl('img/404.png');?>">

        </div>
            </div>
        </div>
    </div>
</content>
<?php $this->need('footer.php'); ?>