<?php
/**
 * 这是一款小清新绿色Typecho主题。
 * ↓
 * [在此主题基础上做修改]
 * 二次修改 ：靳闯博客
 * ↑
 * @package Sgreen Theme 
 * @author 一夜涕
 * @version 3.0
 * @link https://www.boyhu.cn/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<content>
  <div id="pjax-container" class="main box">
    <?php while($this->next()): ?>
    <div class="article">
      <div class="article-title"> <a href="<?php $this->permalink() ?>">
        <?php $this->title() ?>
        </a> </div>
      <small class="article-time">
      <?php _e('发表于:'); ?>
      <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
        <?php $this->date('Y-m-d'); ?>
      </time>
      | 
      <?php _e('分类:'); ?>
      <?php $this->category(','); ?>
      |
      <?php _e('标签:'); ?>
      <?php $this->tags(' ', true, '暂无标签'); ?>
      |
      <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments">
      <?php $this->commentsNum('评论: 0', '评论: 1', '评论: %d'); ?>
      </a>
      |
      阅读:
      <?php get_post_view($this) ?>
      </small>
      <div style="color:#696969;margin-top: 20px !important;" class="article-content"><div class="list-cont">
        <?php if ($this->options->Abstract == 'able'): ?>
        <?php $this->excerpt(135, '...'); ?>
        <?php endif; ?>
        <?php if ($this->options->Abstract == 'disable'): ?>
        <?php $this->content(''); ?>
        <?php endif; ?></div>
        <p class="readmore"><a href="<?php $this->permalink() ?>">▲</a></p>
      </div>
    </div>
    <?php endwhile; ?>
    <div class="page-url"> </div>
    <div ondragstart="return false;" class="pagination">
      <?php $this->pageNav('&laquo; ', ' &raquo;'); ?></div>
      </div>
</content>
<?php $this->need('footer.php'); ?>
