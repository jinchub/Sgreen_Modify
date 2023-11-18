<?php
/**
 * 分类目录
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>

<content>
    <div id="pjax-container" class="main">
        <div class="article">
            <div class="article-title">
                <?php $this->title() ?>
            </div>
        <div class="article-content">
            <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
            <?php while($category->next()): ?>
            <li>
                <a <?php if($this->is('category', $category->slug)): ?> class="current"<?php endif; ?> href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?></a>
            </li>
            <?php endwhile; ?>
        </div>
        <?php $this->need('comments.php'); ?>
    </div>
</content>

<?php $this->need('footer.php'); ?>
