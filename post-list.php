<div class="mdui-card card-fixed mdui-hoverable">
    <div class="mdui-card-primary">
        <a class="mdui-card-primary-title title-fixed" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
    </div>
    <div class="mdui-card-content nokatex">
        <?php $this->excerpt(200, '...'); ?>
    </div>
    <div class="mdui-card-actions more">
        <span class="badge mdui-color-indigo-accent"><i class="mdui-icon material-icons index-icon">&#xe192;</i> <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time></span>
        <?php if (isset($this->category)): ?><span class="badge mdui-color-pink-accent"><i class="mdui-icon material-icons index-icon">&#xe149;</i> <?php $this->category('  '); ?></span><?php endif; ?>
        <?php if (count($this->tags)): ?><span class="badge mdui-color-blue-accent"><i class="mdui-icon material-icons index-icon">&#xe866;</i><?php $this->tags('</span> <span class="badge mdui-color-blue-accent"><i class="mdui-icon material-icons index-icon">&#xe866;</i>', true, 'none'); ?></span><?php endif; ?>
        <div class="mdui-float-right"><a href="<?php $this->permalink() ?>" class="badge mdui-color-pink-accent">阅读更多</a></div>
    </div>
</div>