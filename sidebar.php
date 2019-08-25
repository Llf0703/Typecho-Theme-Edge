<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="mdui-col-md-3 mdui-hidden-sm-down">
    <?php if (!empty($this->options->sidebarBlock) && in_array('showCategory', $this->options->sidebarBlock)): ?>
    <div class="mdui-card card-fixed mdui-hoverable">
        <div class="mdui-card-primary">
            <div class="mdui-card-primary-title">分类</div>
        </div>
        <ul class="mdui-list mdui-list-dense">
            <?php $this->widget('Widget_Metas_Category_List')->parse('<a href="{permalink}" title="{description}" class="mdui-list-item mdui-ripple">{name}<span class="tag-right">{count}</span></a>'); ?>
        </ul>
    </div>
    <?php endif; ?>
    <?php if (!empty($this->options->sidebarBlock) && in_array('showTag', $this->options->sidebarBlock)): ?>
    <div class="mdui-card card-fixed mdui-hoverable">
        <div class="mdui-card-primary">
            <div class="mdui-card-primary-title">标签</div>
        </div>
        <div class="mdui-card-content tag-list">
            <?php $this->widget('Widget_Metas_Tag_Cloud', array('sort' => 'count', 'ignoreZeroCount' => true, 'desc' => true))->to($tags); ?>
            <?php while($tags->next()): ?>
                <a class="tags" href="<?php $tags->permalink(); ?>"><span class="tag name"><?php $tags->name(); ?></span><span class="tag num"><?php $tags->count();?></span></a>
            <?php endwhile; ?>
        </div>
    </div>
    <?php endif; ?>
    <?php if (!empty($this->options->sidebarBlock) && in_array('showArchive', $this->options->sidebarBlock)): ?>
    <div class="mdui-card card-fixed mdui-hoverable">
        <div class="mdui-card-primary">
            <div class="mdui-card-primary-title">归档</div>
        </div>
        <ul class="mdui-list mdui-list-dense">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y年 m月')->parse('<a href="{permalink}" class="mdui-list-item mdui-ripple">{date}<span class="tag-right">{count}</span></a>'); ?>
        </ul>
    </div>
    <?php endif; ?>
    <?php if (!empty($this->options->sidebarBlock) && in_array('showOther', $this->options->sidebarBlock)): ?>
    <div class="mdui-card card-fixed mdui-hoverable">
        <div class="mdui-card-primary">
            <div class="mdui-card-primary-title">更多</div>
        </div>
        <ul class="mdui-list mdui-list-dense">
            <a href="/admin" target="_blank" class="mdui-list-item mdui-ripple">后台管理<span class="tag-right">/admin</span></a>
            <a href="/feed" target="_blank" class="mdui-list-item mdui-ripple">文章RSS<span class="tag-right">/feed</span></a>
        </ul>
    </div>
    <?php endif; ?>
    <!--<div class="mdui-card card-fixed mdui-hoverable">
        <div class="mdui-card-primary" style="display:flex">
            <div class="mdui-card-primary-title" style="display:flex">友链</div>
        </div>
        <ul class="mdui-list mdui-list-dense">
            <a href="https://llf0703.com" target="_blank" class="mdui-list-item mdui-ripple">Llf0703<span class="tag-right">llf0703.com</span></a>
        </ul>
    </div>-->
</div>