<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdui/0.4.3/js/mdui.min.js"></script>
<?php if ($this->options->useToc): ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tocbot/4.5.0/tocbot.min.js"></script>
<?php endif; ?>
<?php if ($this->is('post')): ?>
    <?php if ($this->options->useToc): ?>
        <script>eval(function(d,f,a,c,b,e){b=function(a){return a.toString(f)};if(!"".replace(/^/,String)){for(;a--;)e[b(a)]=c[a]||b(a);c=[function(a){return e[a]}];b=function(){return"\\w+"};a=1}for(;a--;)c[a]&&(d=d.replace(new RegExp("\\b"+b(a)+"\\b","g"),c[a]));return d}("5 4='8,d,e,i',2='#n-2',0={};$(2).9(4).b(c(){5 a=$(3).f().h(/[\\s|\\~|`|\\!|\\@|\\#|\\$|\\%|\\^|\\&|\\*|\\(|\\)|\\j|\\+|\\=|\\||\\|\\[|\\]|\\{|\\}|\\;|\\:|\\\"|\\'|\\,|\\<|\\.|\\>|\\/|\\?|\\\uff1a|\\\uff0c|\\\u3002]/g,'');a=a.k();l(0[a]){$(3).6('7',a+'-'+0[a]);0[a]++}o{0[a]=1;$(3).6('7',a)}});p.q({r:'#t',u:2,v:4,w:-m});",33,33,"idArr  content this headerEl var attr id h1 children  each function h2 h3 text  replace h4 _ toLowerCase if 400 post else tocbot init tocSelector  toc contentSelector headingSelector headingsOffset".split(" "),0,{}));</script>
    <?php endif; ?>
    <script>$("table").addClass('mdui-table');</script>
<?php endif;?>
<?php if ($this->options->useHighline): ?><script>function loadscript(url,callback){var script=document.createElement("script");script.type="text/javascript";if(script.readyState){script.onreadystatechange=function(){if(script.readyState=="loaded"||script.readyState=="complete"){script.onreadystatechange=null;callback()}}}else{script.onload=function(){callback()}}script.src=url;document.getElementsByTagName("head")[0].appendChild(script)}loadscript('<?php $this->options->themeUrl('js/highlight.pack.js'); ?>',function(){hljs.initHighlighting()});</script><?php endif;?>
<button class="mdui-fab mdui-fab-fixed mdui-ripple mdui-color-theme-accent mdui-fab-hide" id="scrolltop" mdui-tooltip="{content: '返回顶部',position: 'left'}"><i class="mdui-icon material-icons">&#xe316;</i></button>
<script>
    <?php $this->widget('Widget_Contents_Page_List')->to($pages); $cnt=0; ?>
    <?php while($pages->next()) { $cnt++; ?>
        <?php if ($this->is('page', $pages->slug)) { ?>
            $("#nav-<?=$cnt?>").addClass("nav-active");
        <?php } else { ?>
            $("#nav-<?=$cnt?>").removeClass("nav-active");
        <?php } ?>
    <?php } ?>
    $("#nav-index").removeClass("nav-active");
    <?php if ($this->is('index')) {?>
        $("#nav-index").addClass("nav-active");
    <?php } ?>
</script>
<script>function scrolltop(){$(window).scroll(function(e){if($(window).scrollTop()>300)document.getElementById("scrolltop").classList.remove("mdui-fab-hide");else document.getElementById("scrolltop").classList.add("mdui-fab-hide")})};$(function(){$("#scrolltop").click(function(e){$('body,html').animate({scrollTop:0},600)});scrolltop()})</script>
</div>
<script>$(".seai").click(function(){$("#SearchBar").show();$(".OutOfsearchBox").fadeIn(300);$(".fullScreen").fadeIn(300);$("#SearchBar > *").animate({opacity:'1'},200);$(".outOfSearch").css('width','75%');$(".seainput").focus();$('body').toggleClass('search-lock')});$(".sea-close").click(function(){$("#SearchBar > *").animate({opacity:'0'},200);$(".fullScreen").fadeOut(300);$(".OutOfsearchBox").fadeOut(300);$(".outOfSearch").css('width','30%');window.setTimeout("hideBar()",300);$('body').toggleClass('search-lock')});function hideBar(){$("#SearchBar").hide()}</script>
<footer class="blog-footer">
    <div class="blog-text-center">
        &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
        <br>
        Powered by <a href="http://typecho.org"> Typecho </a> | Theme is <a href="https://github.com/Llf0703/Typecho-Theme-Edge"> Edge </a> by <a href="https://llf0703.com"> Llf0703</a>
        <br>
        <?php $this->options->footerText(); ?>
    </div>
</footer>
<script>var $body=document.body;var $toggle=document.querySelector(".navbar-toggle");var $navbar=document.querySelector("#huxblog_navbar");var $collapse=document.querySelector(".navbar-collapse");var __HuxNav__={close:function(){$navbar.className=" ";setTimeout(function(){if($navbar.className.indexOf("in")<0){$collapse.style.height="0px"}},400)},open:function(){$collapse.style.height="auto";$navbar.className+=" in"}};$toggle.addEventListener("click",function(a){if($navbar.className.indexOf("in")>0){__HuxNav__.close()}else{__HuxNav__.open()}});document.addEventListener("click",function(a){if(a.target==$toggle){return}if(a.target.className=="icon-bar"){return}__HuxNav__.close()});jQuery(document).ready(function(c){var d=1170;if(c(window).width()>d){var b=c(".navbar-custom").height(),a=c(".intro-header .container").height();c(window).on("scroll",{previousTop:0},function(){var e=c(window).scrollTop(),f=c(".side-catalog");if(e<this.previousTop){if(e>0&&c(".navbar-custom").hasClass("is-fixed")){c(".navbar-custom").addClass("is-visible")}else{c(".navbar-custom").removeClass("is-visible is-fixed")}}else{c(".navbar-custom").removeClass("is-visible");if(e>b&&!c(".navbar-custom").hasClass("is-fixed")){c(".navbar-custom").addClass("is-fixed")}}this.previousTop=e;f.show();if(e>(a+41)){f.addClass("fixed")}else{f.removeClass("fixed")}})}});</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
<script>
    $(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])', {
        container: '#pjax',
        fragment: '#pjax',
        timeout: 8000
    })
    $(document).on('pjax:start', function () { $("#process").html("<div class=\"mdui-progress\"><div class=\"mdui-progress-indeterminate\"></div></div>"); });
    $(document).on('pjax:end', function () { $("#process").empty(); mdui.updateTextFields();});
</script>
</body>
</html>