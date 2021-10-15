<?php
/**
 * 文章存档
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<content>  
	<div class="main box">
      <div class="article-title" style="font-family:'longcang';">
        <?php $this->title() ?>
      </div>
      <p class="duan_g">专栏1</p>
      <span class="archive duan_g_a"><a target="_blank" href="#">标题1</a></span>
      <br>
      <br>
      <p class="duan_g">专栏2</p>
      <span class="archive duan_g_a"><a target="_blank" href="#">标题1</a>      </span>
      <span class="archive duan_g_a"><a target="_blank" href="#">标题2</a></span>
      <span class="archive duan_g_a"><a target="_blank" href="#">标题3</a></span>
      <hr>
      <div ondragstart="return false;" style="user-select:none;margin-top:30px;" class="article-content">
        <?php 
                $stat = Typecho_Widget::widget('Widget_Stat');
                Typecho_Widget::widget('Widget_Contents_Post_Recent', 'pageSize='.$stat->publishedPostsNum)->to($archives);
                $year=0; $mon=0; $i=0; $j=0;
                $output = '<div class="archives">';
                while($archives->next()){
                    $year_tmp = date('Y',$archives->created);
                    $mon_tmp = date('m',$archives->created);
                    $y=$year; $m=$mon;
                    if ($year > $year_tmp || $mon > $mon_tmp) {
                        $output .= '</div>';
                    }
                    if ($year != $year_tmp || $mon != $mon_tmp) {
                        $year = $year_tmp;
                        $mon = $mon_tmp;
                        $output .= '<div class="archives-item"><blockquote><p><strong>'.date('Y年m月',$archives->created).'</strong></p></blockquote><!--<hr class="blokquotehr">--><div class="archives_list" style="padding-left:3%;padding-bottom: 10px;">'; //输出年份
                    }
                    $output .= '<p class="archive"><font class="archive_date">'.date('d日',$archives->created).'</font> <a href="'.$archives->permalink .'">'. $archives->title .'</a></p>'; //输出文章
                }
                $output .= '</div></div></div>';
                echo $output;
        ?>
    </div>
    <?php $this->need('comments.php'); ?>
</content>
<?php $this->need('footer.php'); ?>
