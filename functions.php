<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $faviconUrl = new Typecho_Widget_Helper_Form_Element_Text('faviconUrl', NULL, NULL, _t('站点favicon.ico地址'), _t('站点favicon.ico地址'));
    $form->addInput($faviconUrl);

    $backgroundImage = new Typecho_Widget_Helper_Form_Element_Text('backgroundImage', NULL, NULL, _t('背景图片地址'), _t('请输入背景图片地址'));
    $form->addInput($backgroundImage);

    $backgroundText = new Typecho_Widget_Helper_Form_Element_Text('backgroundText', NULL, NULL, _t('背景图片大标题'), _t('请输入背景图片大标题内容'));
    $form->addInput($backgroundText);

    $footerText = new Typecho_Widget_Helper_Form_Element_Text('footerText', NULL, NULL, _t('底部自定义内容'), _t('如备案号等，将在页面最底部显示。支持html'));
    $form->addInput($footerText);

    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
        array('showCategory' => _t('显示分类'),
        'showTag' => _t('显示标签'),
        'showArchive' => _t('显示归档'),
        'showOther' => _t('显示更多')),
        array('showCategory', 'showTag', 'showArchive', 'showOther'), _t('侧边栏显示'));  
    $form->addInput($sidebarBlock->multiMode());

    $useHighline = new Typecho_Widget_Helper_Form_Element_Radio('useHighline',
        array('1' => _t('启用'),
            '0' => _t('禁止'),
        ),
        '0', _t('代码高亮设置'), _t('默认禁止，启用则会对 ``` 进行代码高亮'));
    $form->addInput($useHighline);

    $useToc = new Typecho_Widget_Helper_Form_Element_Radio('useToc',
        array('1' => _t('启用'),
            '0' => _t('禁止'),
        ),
        '0', _t('文章目录设置'), _t('默认禁止，会在文章右侧显示目录'));
    $form->addInput($useToc);
}