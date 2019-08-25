<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('head.php');
$this->need('nav.php');
?>
<?php $this->header(); ?>
<div id="pjax">
<header class="intro-header relate" style="background-image: url('<?php $this->options->backgroundImage(); ?>');">
    <div class="mdui-container">
        <div class="site-heading">
            <h1 class="header-title">404</h1>
        </div>
    </div>
</header>
<?php $this->need('footer.php'); ?>