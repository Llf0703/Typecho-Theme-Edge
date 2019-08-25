<?php function threadedComments($comments, $options) {
  $commentClass = '';
  if ($comments->authorId) {
    if ($comments->authorId == $comments->ownerId) {
      $commentClass .= ' comment-by-author';
    } else {
      $commentClass .= ' comment-by-user';
    }
  }
  $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>
<div id="<?php $comments->theId(); ?>"
    class="mdui-card comment-shadow<?php if ($comments->levels > 0) { echo ' comment-child'; $comments->levelsAlt(' comment-level-odd', ' comment-level-even'); } else { echo ' comment-parent'; } $comments->alt(' comment-odd', ' comment-even'); echo $commentClass; ?>">
    <div class="mdui-card-header">
        <div class="mdui-card-header-avatar"><?php $comments->gravatar('40', ''); ?></div>
        <div class="mdui-card-header-title mdui-text-color-theme-accent"><?php $comments->author(); ?></div>
        <div class="mdui-card-header-subtitle"><?php $comments->date('Y-m-d H:i'); ?></div>
    </div>
    <div class="mdui-card-content"><?php $comments->content(); ?></div>
    <?php $comments->reply('<div class="mdui-card-actions"><button class="mdui-btn mdui-ripple mdui-text-color-theme-accent">回复</button></div>'); ?>
    <?php if ($comments->children) { ?>
    <div class="mdui-container">
        <?php $comments->threadedComments($options); ?>
    </div>
    <?php } ?>
</div>
<div class="card-spacer"></div>
<?php } ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if($this->allow('comment')): ?>
    <div class="card-spacer"></div>
    <div id="<?php $this->respondId(); ?>" class="comment comment-shadow">
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <div class="comment-title">
                <h2>新评论</h2>
            </div>
            <div class="comment-content">
                <?php if($this->user->hasLogin()): ?>
                <div class="mdui-chip mdui-typo">
                    <span class="mdui-chip-title">登录身份: <a
                            href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>&nbsp;&nbsp;<a
                            href="<?php $this->options->logoutUrl(); ?>" title="Logout">退出</a></span>
                </div>
                <?php else: ?>
                <div class="comment-options">
                <div class="mdui-textfield mdui-textfield-floating-label comment-option">
                    <i class="mdui-icon material-icons">&#xe853;</i>
                    <label class="mdui-textfield-label">称呼</label>
                    <input name="author" class="mdui-textfield-input" type="text"
                        value="<?php $this->remember('author'); ?>" required/>
                    <div class="mdui-textfield-error">称呼不能为空</div>
                </div>
                <div class="mdui-textfield mdui-textfield-floating-label comment-option">
                    <i class="mdui-icon material-icons">&#xe0be;</i>
                    <label class="mdui-textfield-label">Email</label>
                    <input name="mail" class="mdui-textfield-input" type="email"
                        value="<?php $this->remember('mail'); ?>" <?php if ($this->options->commentsRequireMail): ?>required<?php endif;?>/>
                    <div class="mdui-textfield-error">邮箱格式不合法</div>
                </div>
                <div class="mdui-textfield mdui-textfield-floating-label comment-option">
                    <i class="mdui-icon material-icons">&#xe157;</i>
                    <label class="mdui-textfield-label">网站</label>
                    <input name="url" class="mdui-textfield-input" type="url"
                        value="<?php $this->remember('url'); ?>" <?php if ($this->options->commentsRequireURL): ?>required<?php endif;?>>
                    <div class="mdui-textfield-error">网站格式不合法</div>
                </div>
                </div>
                <?php endif; ?>
                <?php $comments->cancelReply('<div class="mdui-chip mdui-typo"><span class="mdui-chip-icon"><i class="mdui-icon material-icons">&#xe5cd;</i></span><span class="mdui-chip-title">取消回复</span></div>'); ?>
                <div class="mdui-textfield mdui-textfield-floating-label" style="width:auto">
                    <i class="mdui-icon material-icons">&#xe0d8;</i>
                    <label class="mdui-textfield-label">内容</label>
                    <textarea name="text" class="mdui-textfield-input" type="text" required><?php $this->remember('text'); ?></textarea>
                    <div class="mdui-textfield-error">内容不能为空</div>
                </div>
            </div>
            <div class="mdui-card-actions">
                <button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent mdui-float-right" type="submit">发表评论</button>
            </div>
        </form>
    </div>
    <div class="card-spacer"></div>
    <?php else: ?>
    <div class="mdui-chip mdui-typo">
        <span class="mdui-chip-icon"><i class="mdui-icon material-icons">&#xe5cd;</i></span>
        <span class="mdui-chip-title">评论已关闭</span>
    </div>
    <?php endif; ?>
    <?php if ($comments->have()): ?>
    <?php $comments->listComments(); ?>
    <?php endif; ?>
</div>