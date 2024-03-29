<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<content>
    <div id="pjax-container" class="main">
        <div class="col-mb-12 col-8" id="main" role="main">
            <h3 class="archive-title">
                <?php $this->archiveTitle(array(
                    'category'  =>  _t('分类 %s 下的文章：'),
                    'search'    =>  _t('❤ 搜索词：  <span class="searchkey">%s</span> '),
                    'tag'       =>  _t('标签 %s 下的文章：'),
                    'author'    =>  _t('%s 发布的文章：')
                ), '', ''); ?>
            </h3>
            <?php if ($this->have()): ?>
            <?php while($this->next()): ?>
            <div class="article">
                <div class="article-title">
                    <a href="<?php $this->permalink() ?>">
                        <?php $this->title() ?>
                    </a>
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
                    ·
                    <span class="leave">
                        <!--<img class="small-img4" src="/img/pic/ly1.svg">-->
                        <svg t="1685082747554" class="small-img4" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="42633" width="14" height="14">
                            <path d="M883.498667 55.168a42.666667 42.666667 0 0 0-60.330667 0l-425.984 425.941333a42.325333 42.325333 0 0 0-9.130667 12.714667l-84.906666 169.770667a42.666667 42.666667 0 0 0 48.554666 60.458666l170.069334-42.496a42.624 42.624 0 0 0 22.186666-13.269333l426.24-468.906667a42.666667 42.666667 0 0 0-1.365333-58.88l-42.666667-42.666666-42.666666-42.666667z m-394.368 546.56l-68.138667 17.066667 40.746667-81.493334L853.333333 145.621333l12.501334 12.501334 13.909333 13.909333-390.613333 429.653333zM85.333333 170.666667a42.666667 42.666667 0 0 1 42.666667-42.666667h384a42.666667 42.666667 0 1 1 0 85.333333H170.666667v597.333334h213.333333a42.666667 42.666667 0 0 1 23.68 7.168L512 887.381333l104.32-69.546666A42.666667 42.666667 0 0 1 640 810.666667h213.333333v-298.666667a42.666667 42.666667 0 1 1 85.333334 0v341.333333a42.666667 42.666667 0 0 1-42.666667 42.666667h-243.072l-117.248 78.165333a42.666667 42.666667 0 0 1-47.36 0L371.072 896H128a42.666667 42.666667 0 0 1-42.666667-42.666667V170.666667z" fill="#a9a9a9" p-id="42634"></path>
                        </svg>
                        <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments">
                        <?php $this->commentsNum('0', '1', '%d'); ?>
                        </a>
                    </span>
                    ·
                    <span class="read">
                        <!--<img class="small-img5" src="/img/pic/yd.svg">-->
                        <svg t="1685082926781" class="small-img5" viewBox="0 0 1033 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="44002" width="14" height="14">
                            <path d="M516.644571 146.285714c150.893714 0 278.930286 67.401143 384 178.578286a775.497143 775.497143 0 0 1 116.297143 160.621714c4.022857 7.460571 6.765714 12.946286 8.265143 16.128l8.045714 17.225143-9.472 16.493714c-1.718857 2.998857-4.900571 8.265143-9.435428 15.36a907.154286 907.154286 0 0 1-125.915429 154.550858C778.825143 812.617143 654.226286 877.714286 516.644571 877.714286c-137.581714 0-262.180571-65.097143-371.785142-172.470857A907.154286 907.154286 0 0 1 18.944 550.765714a418.852571 418.852571 0 0 1-9.435429-15.36l-9.508571-16.530285 8.082286-17.188572c5.485714-11.739429 15.981714-31.341714 31.561143-56.173714A775.497143 775.497143 0 0 1 132.644571 324.864C237.714286 213.686857 365.750857 146.285714 516.644571 146.285714z m415.049143 338.029715a703.012571 703.012571 0 0 0-84.224-109.202286C755.090286 277.394286 645.010286 219.428571 516.644571 219.428571c-128.365714 0-238.445714 57.965714-330.825142 155.684572a703.012571 703.012571 0 0 0-102.546286 140.361143 834.706286 834.706286 0 0 0 112.786286 137.508571C293.193143 748.214857 401.152 804.571429 516.644571 804.571429c115.492571 0 223.451429-56.393143 320.585143-151.552a834.706286 834.706286 0 0 0 112.786286-137.545143c-5.229714-9.508571-11.337143-20.004571-18.322286-31.158857zM516.644571 329.142857c100.242286 0 182.857143 82.614857 182.857143 182.857143 0 101.083429-80.713143 182.857143-182.857143 182.857143-101.083429 0-182.857143-80.713143-182.857142-182.857143 0-101.083429 80.713143-182.857143 182.857142-182.857143z m0 73.142857c-61.549714 0-109.714286 48.786286-109.714285 109.714286 0 61.549714 48.786286 109.714286 109.714285 109.714286 61.549714 0 109.714286-48.786286 109.714286-109.714286 0-59.830857-49.883429-109.714286-109.714286-109.714286z" fill="#a9a9a9" p-id="44003"></path>
                        </svg>
                        <?php get_post_view($this) ?>
                    </span>
                </small>

            <a class="readmore" title="阅读全文" href="<?php $this->permalink() ?>">
            <div style="color:#555555;margin-top: 20px !important; display: flex;flex-wrap: nowrap;" class="article-content">
                <?php if($this->fields->thumb): ?>
                    <div class="thumb"><img class="thumbimg" src="<?php echo $this->fields->thumb; ?>" alt="缩略图"></div>
                <?php endif; ?>
                <div class="newlist">
                <div class="list-cont">
                    <?php $this->excerpt(200, '...'); ?>
                </div>
                </div>
            </div>
            </a>
            
            <?php endwhile; ?>
            <?php else: ?>
            
            <article class="post">
                <h2 class="post-title">
                    <?php _e('没有找到相关内容...'); ?>
                    <br>
                    <br>
                    <br>
                    <a href="<?php $this->options->siteUrl(); ?>">返回首页</a>
                </h2>
            </article>
            
            <?php endif; ?>
            <div class="page-url"></div>
            
            <div class="pagination">
                <?php $this->pageNav('&laquo; ', ' &raquo;'); ?>
            </div>
            
        </div>
    </div>
</content>
<?php $this->need('footer.php'); ?>
