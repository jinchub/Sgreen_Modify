<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div id="comments">
<?php $this->comments()->to($comments); ?>
<?php if ($comments->have()): ?>
<h3 class="widget-title">
<h3 class="ping1">
  <!--<?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?>-->
  <?php $this->commentsNum(_t('暂无评论'), _t('📑 留言内容'), _t('📑 留言内容 ↴')); ?>
</h3>
<?php $comments->listComments(); ?>
<?php $comments->pageNav('&laquo; ', ' &raquo;'); ?>
<?php endif; ?>
<?php if($this->allow('comment')): ?>
<h3 id="response">
<div id="<?php $this->respondId(); ?>" class="respond">
  <div class="cancel-comment-reply">
    <?php $comments->cancelReply(); ?>
  </div>
  <h3 class="ping2">  
     <?php _e('📬 评论留言 ↴'); ?>
  </h3>
  <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
    <div class="col2">
      <?php if($this->user->hasLogin()): ?>
      <p>
        <?php _e('登录身份: '); ?>
        <a href="<?php $this->options->profileUrl(); ?>">
        <?php $this->user->screenName(); ?>
        </a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout">
        <?php _e('退出'); ?>
        &raquo;</a></p>
      <?php else: ?>
      <p>
        <label for="author" class="required">
        <?php _e('昵称：'); ?>
        </label>
        <input type="text" name="author" id="author" class="text form-control" placeholder="<?php _e('（必填）'); ?>" value="<?php $this->remember('author'); ?>" required />
      </p>
      <p>
        <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>>
        <?php _e('邮箱：'); ?>
        </label>
        <input type="email" name="mail" id="mail" class="text form-control" placeholder="<?php _e('（必填）'); ?>" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
      </p>
      <p>
        <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>>
        <?php _e('网址：'); ?>
        </label>
        <input type="url" name="url" id="url" class="text form-control" placeholder="<?php _e('（http|s://）'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
      </p>
      <?php endif; ?>
      <div class="col1">
      <?php
if(isset($this->options->plugins['activated']['Smilies']))
    Smilies_Plugin::output();
?>
       <p>
          <textarea rows="8" cols="50" name="text" id="textarea" placeholder="<?php _e('📝 这里写下你的留言...'); ?>" class="textarea form-control" required ><?php $this->remember('text'); ?>
</textarea>
        </p>


      </div>

      <p>
        <button type="submit" class="submit">
        <?php _e('提交想法'); ?>
        </button>
      </p>
    </div>
    <div class="clear"></div>
  </form>
  <?php else: ?>
  <h3 style="color:#fff;">
    <?php _e('评论已关闭'); ?>
  </h3>
  <?php endif; ?>
    </div>
</div>

