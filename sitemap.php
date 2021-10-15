<?php
/**
*Sitemap
*
* @package custom
*/
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
  <meta http-equiv="Content-Type" content="text/html; charset=<?php $this->options->charset(); ?>" />
  <title>网站地图 - <?php $this->options->title() ?></title>
  <meta name="keywords" content="网站地图,<?php $this->options->title() ?>" />
  <meta name="copyright" content="<?php $this->options->title() ?>" />
  <link rel="canonical" href="<?php $this->permalink() ?>" />
  <style type="text/css">
    body {background:white fixed center;font-family: Microsoft Yahei,Verdana;font-size:1px;margin:0 auto;color: #000000;width:990px;margin: 0 auto}
    a:link,a:visited {color:#3f748e;text-decoration:none;}
    a:hover {color:#08d;text-decoration:none;}
    h2{font-weight: bold;color: #009fd9;font-size: 25px;}
    img {border:0;}
    li {margin-top: 8px;}
    .page {padding: 4px; border-top: 1px #EEEEEE solid}
    .author {background-color:#EEEEFF; padding: 6px; border-top: 1px #ddddee solid}
    #nav, #content, #footer {box-shadow: 0 0 10px #ececec;border-radius:5px;background: rgba(255,255,255,0.5);padding: 8px;clear: both; width: 95%; margin: auto; margin-top: 10px;}
    @media screen and (max-width: 768px) {
	body {
		width: 100%;
    }
  </style>
</head>
<body vlink="#333333" link="#333333">
  <h2 style="text-align: center; margin-top: 20px"><?php $this->options->title() ?> 🌍 网站导航地图 </h2>
  <center></center>
  <div id="nav"><a href="<?php $this->options ->siteUrl(); ?>"><strong><?php $this->options->title() ?></strong></a> » <a href="<?php $this->permalink() ?>">网站地图</a></div>
  <div id="content">
    <li class="categories">🚧 分类目录
      <ul><?php $this->widget('Widget_Metas_Category_List')
               ->parse('<li><a href="{permalink}">{name}</a> ({count})</li>'); ?>
      </ul>
    </li>
  </div>
  <div id="content">
    <li class="categories">🎡 独立页面</li>
    <ul class="clearfix" id="nav_menu">
      <li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
      <?php $this->widget('Widget_Contents_Page_List')
                 ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
    </ul>
  </div>
  <div id="content">
    <h3>📝 最新文章</h3>
    <ul>
      <?php
      $stat = Typecho_Widget::widget('Widget_Stat');
      $this->widget('Widget_Contents_Post_Recent', 'pageSize='.$stat->publishedPostsNum)->to($archives);
      $year=0; $mon=0; $i=0; $j=0;
      while($archives->next()){
          $year_tmp = date('Y',$archives->created);
          $mon_tmp = date('m',$archives->created);
          $y=$year; $m=$mon;
          if ($year > $year_tmp || $mon > $mon_tmp) {
              $output .= '</ul>';
          }
          $output .= '<li><a href="'.$archives->permalink .'">'. $archives->title .'</a></li>';
      }
      $output .= '</ul>';
      echo $output;
      ?>
    </ul>
  </div>

  <div id="footer">返回博客首页: <strong><a href="<?php $this->options ->siteUrl(); ?>"><?php $this->options->title() ?></a></strong></div><br />
  <center>
    <div style="text-algin: center; font-size: 11px"><br /> © <?php echo date('Y'); ?> <strong><a href="<?php $this->options->siteUrl(); ?>" target="_blank"><?php $this->options->title() ?></a></strong> 版权所有<br /><br /><br />
    </div>
  </center>
</body>
</html>
