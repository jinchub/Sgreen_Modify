<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<content>
  <div class="main box">
    <div class="article">
      <div class="article-title">
        <?php $this->title() ?>
      </div>
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
      </a> | 阅读:
      <?php get_post_view($this) ?>
      </small>
      <div class="article-content">
        <?php $this->content(); ?>
        <br>
        <p style="user-select:none;text-align:center;color:#d0d0d0;font-size:14px;border-radius:5px;background: #f7f7f7;">商业转载请联系作者获得授权，非商业转载请注明出处 <a style="color:#d0d0d0" href="<?php $this->permalink() ?>">本文地址：<?php $this->permalink() ?></a></p>
        </div>

<div style="border">
<div class="social-share" data-disabled="diandian,tencent,google"><font style="font-size:18px;color:darkcyan;">分享:</font>
</div> 
      <?php if ($this->options->Reward == 'able'): ?>
</div>

        <div ondragstart="return false;" style="user-select:none;padding:0; margin: 0px auto; width: 90%; font-size:14px; text-align: center;">
        <div>
          <?php $this->options->wzdsw(); ?>
        </div>
        <label id="rewardButton" disable="enable" onClick="var qr = document.getElementById('QR'); if (qr.style.display === 'none') {qr.style.display='block';} else {qr.style.display='none'}"> <span class="reward-button"> 赞赏博主</span> </label>
        <div id="QR" style="display: none;">
          <div id="wechat" class="wxpd"> <img id="wechat_qr" src="<?php $this->options->wechat(); ?>">
            <p class="wx">微信打赏</p>
          </div>
          <div id="alipay" class="zfbpd"> <img id="alipay_qr" src="<?php $this->options->zhifubao(); ?>">
            <p class="zfb">支付宝打赏</p>
          </div>
        </div>
      </div>
      <?php endif; ?>
   
        <div ondragstart="return false;"  class="post-nav">
          <div class="prev post-nav-item">
            <?php $this->thePrev('%s','<a href="javascript:;" title="没有上一篇文章了">没有上一篇了</a>'); ?>
          </div>
          <div class="next post-nav-item">
            <?php $this->theNext('%s','<a href="javascript:;" title="没有下一篇文章了">没有下一篇了</a>'); ?>
          </div>
        </div>
      </div>
    <div>
    <br>
    <?php $this->need('comments.php'); ?>
  </div>
</content>
<?php $this->need('footer.php'); ?>