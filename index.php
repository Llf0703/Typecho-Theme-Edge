<?php
/**
 * @package Typecho Theme Edge
 * @author Llf0703
 * @version 1.0
 * @link https://llf0703.com
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
<div class="mdui-container">
    <div class="mdui-row">
        <div class="mdui-col-md-9 mdui-col-sm-12">
            <?php while($this->next()): ?>
            <?php $this->need('post-list.php'); ?>
            <?php endwhile; ?>
            <div class="page-nav">
                <?php $this->pageNav('<span><i class="mdui-icon material-icons">&#xe5c4;</i></span>', '<span><i class="mdui-icon material-icons">&#xe5c8;</i></span>', 1, '...', 'wrapClass=pager&prevClass=prev&nextClass=next'); ?>
            </div>
        </div>
        <?php $this->need('sidebar.php'); ?>
    </div>
</div>
<?php $this->need('footer.php'); ?>