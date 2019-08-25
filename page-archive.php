<?php
/**
* Archives
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('head.php');
$this->need('nav.php');
?>
<?php $this->header(); ?>
<div id="pjax">
<header class="intro-header relate" style="background-image: url('<?php $this->options->backgroundImage(); ?>');">
    <div class="mdui-container">
        <div class="site-heading">
            <h1 class="header-title"><?php $this->options->backgroundText(); ?></h1>
        </div>
    </div>
</header>

<div class="mdui-container archive-page">
	<?php
    $stat = Typecho_Widget::widget('Widget_Stat');
    $this->widget('Widget_Contents_Post_Recent', 'pageSize='.$stat->publishedPostsNum)->to($archives);
    $year=0; $mon=0; $i=0; $j=0;
    $output = '<div class="categorys-item">';
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
			 $output .= '<h2 class="categorys-title">'.date('M Y',$archives->created).'</h2><div class="post-lists">';
        }
        $output .= '<div class="post-list-item"><div class="post-list-item-container mdui-hoverable mdui-shadow-1"><div class="item-label"><div class="item-title"><a href="'.$archives->permalink .'">'. $archives->title .'</a></div><div class="item-meta"><div class="item-meta-date"> '.date('M j, Y',$archives->created).' </div></div></div></div></div>';
    }
    $output .= '</div></div>';
    echo $output;
    ?>
</div>

<?php $this->need('footer.php'); ?>