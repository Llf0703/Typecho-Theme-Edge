<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="x-dns-prefetch-control" content="on" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com" />
    <link rel="dns-prefetch" href="//www.gravatar.com" />
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类：%s'),
            'search'    =>  _t('搜索：%s'),
            'tag'       =>  _t('标签：%s'),
            'author'    =>  _t('作者：%s')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel="shortcut icon" href="<?php $this->options->faviconUrl(); ?>">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/mdui/0.4.3/css/mdui.min.css">
    <?php if ($this->options->useHighline): ?><style>.hljs-comment,.hljs-quote{color:#8e908c}.hljs-variable,.hljs-template-variable,.hljs-tag,.hljs-name,.hljs-selector-id,.hljs-selector-class,.hljs-regexp,.hljs-deletion{color:#c82829}.hljs-number,.hljs-built_in,.hljs-builtin-name,.hljs-literal,.hljs-type,.hljs-params,.hljs-meta,.hljs-link{color:#f5871f}.hljs-attribute{color:#eab700}.hljs-string,.hljs-symbol,.hljs-bullet,.hljs-addition{color:#718c00}.hljs-title,.hljs-section{color:#4271ae}.hljs-keyword,.hljs-selector-tag{color:#8959a8}.hljs{display:block;overflow-x:auto;background:#fff;color:#4d4d4c;padding:.5em}.hljs-emphasis{font-style:italic}.hljs-strong{font-weight:700}</style><?php endif; ?>
    <?php if ($this->options->useToc): ?><style>.toc{overflow-y:auto}.toc>.toc-list{overflow:hidden;position:relative}.toc>.toc-list li{list-style:none}.toc-list{margin:0;padding-left:10px}a.toc-link{color:currentColor;height:100%}.is-collapsible{max-height:1000px;overflow:hidden;transition:all .3s ease-in-out}.is-collapsed{max-height:0}.is-position-fixed{position:fixed!important;top:0}.is-active-link{font-weight:700}.is-active-link::before{background-color:#54bc4b}</style><?php endif; ?>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/main.css'); ?>">
</head>
<body class="mdui-theme-accent-pink">
<div id="process"></div>