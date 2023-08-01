<?php
/**
 * 关于我们
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<content>
  <div id="pjax-container" class="main">
    <div class="article">
      <div class="article-title" style="font-family:'longcang';">
        <?php $this->title() ?>
      </div>
      <div class="article-content">
        <?php $this->content(); ?>
      </div>
    <?php $this->need('comments.php'); ?>
  </div>
</content>
<?php $this->need('footer.php'); ?>
