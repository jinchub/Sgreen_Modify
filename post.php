<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<!-- 文章内容 -->
<content>
    <div id="pjax-container" class="main box">
        <div class="article">
        
            <div class="article-title">
                <?php $this->title() ?>
            </div>
            
            <small class="article-time">
                    <!--<img class="small-img1" src="/img/pic/time1.svg">-->
                    <svg t="1685083887247" class="small-img1" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="95340" width="14" height="14">
                        <path d="M529.81 102.07c-222.09 0-402.22 180.13-402.22 402.22s180.13 402.22 402.22 402.22S932 726.38 932 504.29 751.9 102.07 529.81 102.07z m223 625.17A314.18 314.18 0 1 1 820.38 627a318 318 0 0 1-67.61 100.25z" fill="#a9a9a9" p-id="95341"></path>
                        <path d="M688 553.27l-129-74.46V291.56a35.75 35.75 0 1 0-71.5 0v214.52a35.86 35.86 0 0 0 35.75 35.75c0.55 0 1.07-0.14 1.62-0.16l127.35 73.52a35.86 35.86 0 0 0 48.84-13.09A35.86 35.86 0 0 0 688 553.27z" fill="#a9a9a9" p-id="95342"></path>
                    </svg>
                    <time class="posttime" datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
                        <?php $this->date('Y-m-d'); ?>
                    </time>
                    ·    
                    <span class="postfl classify">
                        <!--<img class="small-img2" src="/img/pic/fl1.svg">-->
                        <svg t="1685080643393" class="small-img2" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="7615" width="14" height="14">
                            <path d="M476.7232 112.503467L121.634133 279.825067a68.266667 68.266667 0 0 0 1.6896 124.279466l355.089067 155.648a68.266667 68.266667 0 0 0 54.818133 0l355.089067-155.6992a68.266667 68.266667 0 0 0 1.672533-124.279466l-355.089066-167.253334a68.266667 68.266667 0 0 0-58.197334 0zM150.7328 341.572267l355.089067-167.304534 355.072 167.253334-355.089067 155.6992-355.072-155.648zM860.842667 685.346133a34.133333 34.133333 0 0 1 28.962133 61.781334l-2.4064 1.1264-368.810667 155.682133a34.133333 34.133333 0 0 1-23.671466 1.0752l-2.8672-1.0752-368.7936-155.648a34.133333 34.133333 0 0 1 24.064-63.829333l2.491733 0.938666 355.498667 150.050134 355.5328-150.101334z" fill="#a9a9a9" p-id="7616"></path>
                            <path d="M853.333333 512l-341.486933 153.634133L170.666667 512.341333v55.210667c0 13.4656 7.748267 25.6512 19.712 30.9248l286.190933 126.976a78.7968 78.7968 0 0 0 35.2768 8.3968c12.049067 0 24.081067-2.798933 35.293867-8.3968l286.498133-127.249067A33.7408 33.7408 0 0 0 853.333333 567.278933V512z" fill="#a9a9a9" p-id="7617"></path>
                        </svg>
                        <?php $this->category(''); ?>
                    </span> 
                    ·
                    <span class="postbq label">
                        <!--<img class="small-img3" src="/img/pic/bq1.svg">-->
                        <svg t="1685081862009" class="small-img3" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="26688" width="12" height="12">
                            <path d="M844.64783 90.739758a87.380775 87.380775 0 0 1 64.739142 28.102932c16.725226 17.862997 25.372282 41.813066 23.893181 66.246687l-13.937689 250.081958a35.69755 35.69755 0 0 1-10.268378 22.385635L461.503612 905.155888a96.141608 96.141608 0 0 1-68.323119 30.236251 88.290991 88.290991 0 0 1-62.605823-27.818488l-214.099965-214.12841a92.842074 92.842074 0 0 1 2.417762-130.928942L566.434497 114.917381c6.001739-5.973295 13.937689-9.614161 22.385635-10.268378l250.081957-13.937689h5.745741z m0-90.737198h-10.268378L584.26905 13.655806a124.585871 124.585871 0 0 0-81.635034 36.892209L55.347984 498.402931a183.266385 183.266385 0 0 0-3.015092 259.468565l213.787079 213.815523A177.805086 177.805086 0 0 0 393.180493 1023.996018c49.77746 0 97.450044-19.939428 132.436487-55.352535L973.187454 521.101453a124.585871 124.585871 0 0 0 36.892208-81.635034l13.596358-250.110402A178.43086 178.43086 0 0 0 844.64783 0.00256z m-215.010181 333.878756a60.472503 60.472503 0 1 1 0 120.945005 60.472503 60.472503 0 0 1 0-120.945005z m0-90.737198a151.209701 151.209701 0 1 0-0.654218 302.419401 151.209701 151.209701 0 0 0 0.654218-302.419401z" fill="#a9a9a9" p-id="26689"></path>
                        </svg>
                    <?php $this->tags(' ', true, '暂无标签'); ?>
                </span> 
                <!--<a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments">
                <?php $this->commentsNum('评论: 0', '评论: 1', '评论: %d'); ?>
                </a> 阅读:<?php get_post_view($this) ?>-->
            </small>
            
            <div class="article-content">
                <!-- 文章内容 -->
                <?php //$this->content(); ?>
<?php
$content = $this->content; // 获取文章内容
// 禁用 Typecho 的自动段落包装
$content = str_replace('<p>', '', $content);
$content = str_replace('</p>', '', $content);

// 将 <img 替换为 <div><img>
$content = preg_replace('/<img(.*?)>/', '<div class="content_img"><img$1></img></div>', $content);

// 输出处理后的内容
echo $content;
?>

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
                    
                    <br>
                    <p class="archupdate">
                        <font style="user-select:none">本文最后更新时间 <?php echo gmdate('Y-m-d', $this->modified + Typecho_Widget::widget('Widget_Options')->timezone); ?><br>文章链接地址：</font><?php $this->permalink() ?><br>
                        <font style="user-select:none">本站文章除注明[转载|引用|原文]出处外,均为本站原生内容,转载前请注明出处</font>
                    </p>
            </div>

            <?php if ($this->options->Reward == 'able'): ?>
            <div style="">
                <div class="social-share" data-disabled="diandian,tencent,google">
                    <font style="font-size: 14px;color: #757575;font-family:'Misansdb' !important;">分享到 </font>
                </div>
            </div>
            
            <div ondragstart="return false;" style="user-select:none;padding:0; margin: 6px auto; width: 90%; font-size:14px; text-align: center;">
                <div style="opacity:0.5">
                    <?php $this->options->wzdsw(); ?>
                </div>
                <label id="rewardButton" disable="enable" onClick="var qr = document.getElementById('QR'); if (qr.style.display === 'none') {qr.style.display='block';} else {qr.style.display='none'}">
                    <span class="reward-button"> 赞赏博主</span> 
                </label>
                <div id="QR" style="display: none;">
                    <div id="wechat" class="wxpd"><img id="wechat_qr" src="<?php $this->options->wechat(); ?>">
                        <p class="wx">希望本文内容对您有帮助</p>
                    </div>
                    <div id="alipay" class="zfbpd"> <img id="alipay_qr" src="<?php $this->options->zhifubao(); ?>">
                        <p class="zfb">支付宝赞赏</p>
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
    </div>
</content>
<?php $this->need('footer.php'); ?>