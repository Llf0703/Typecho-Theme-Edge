<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('head.php');
$this->need('nav.php');
?>
<?php $this->header(); ?>
<div id="pjax">
<header class="intro-header relate" style="background-image: url('<?php $this->options->backgroundImage();?>');">
    <div class="mdui-container">
        <div class="post-heading" style="text-align:center">
            <h1 class="header-title mdui-center">
                <?php $this->title() ?>
            </h1>
            <div class="mdui-center">
                <span class="badge mdui-color-indigo-accent"><i class="mdui-icon material-icons index-icon">&#xe192;</i> <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time></span>
            </div>
        </div>
    </div>
</header>
<div class="mdui-container blog-content">
    <div class="mdui-row">
        <div class="mdui-col-md-8 mdui-col-sm-12 mdui-col-offset-md-2">
            <article class="mdui-typo" id="post-content">
                <?php $this->content(); ?>
            </article>
        </div>
        <div class="mdui-col-md-2 mdui-hidden-sm-down sticky">
            <div id="toc"></div>
        </div>
    </div>
</div>
<div class="mdui-container">
    <div class="mdui-row">
        <div class="mdui-col-md-8 mdui-col-sm-12 mdui-col-offset-md-2">
            <?php $this->need('comments.php'); ?>
        </div>
    </div>
</div>
<?php $this->need('footer.php'); ?>