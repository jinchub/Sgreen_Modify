<?php
/**
 * 标签归档
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<content>
  <div class="main">
    <div class="article">
      <div class="article-title">
        <?php $this->title() ?>
      </div>
      <div class="article-content">
      <div ondragstart="return false;" class="content_tags">
        <?php $this->widget('Widget_Metas_Tag_Cloud')
->to($taglist); ?><?php while($taglist->next()): ?>
<li ondragstart="return false;" class="tags"><a href="<?php $taglist->permalink(); ?>" title="<?php $taglist->name(); ?>"><?php $taglist->name(); ?></a></li>
<?php endwhile; ?>
      </div>
      </div>
    </div>
  </div>
</content>
<?php $this->need('footer.php'); ?>
