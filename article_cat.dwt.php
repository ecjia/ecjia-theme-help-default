<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Keywords" content="{$keywords}" />
    <meta name="Description" content="{$description}" />
    <!-- TemplateBeginEditable name="doctitle" -->
    <title>{$page_title}</title>
    <!-- TemplateEndEditable -->
    <!-- TemplateBeginEditable name="head" -->
    <!-- TemplateEndEditable -->
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- #BeginLibraryItem "/library/js_languages_new.lbi" --><!-- #EndLibraryItem -->
</head>

<body class="bg-ligtGary">
<!-- #BeginLibraryItem "/library/page_header_common.lbi" --><!-- #EndLibraryItem -->
<div class="content article-content">
    <div class="article-search-hd mb20">
        <div class="w w1200">
            <div class="hd-tit">网店帮助中心</div>
            <div class="hd-search">
                <form action="{$search_url}" name="search_form" method="post" class="article_search">
                    <div class="f-search">
                        <input name="keywords" type="text" id="requirement" value="{$search_value}" class="text" placeholder="{$lang.search_placeholder}" />
                        <a href="javascript:void(0);" class="ui-btn-submit" ectype="searchSubmit"><i class="iconfont icon-search"></i>搜索</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="w w1200 clearfix">
        <div class="article-side">
            <dl class="article-menu">
                <dt class="am-t"><a href="javascript:void(0);">帮助中心</a></dt>
                <dd class="am-c">
                    {foreach $shop_help as $shop_help_cat}
                    <div class="menu-item active">
                        <div class="item-hd"><a href="javascript:void(0);">{$shop_help_cat.name}</a><i class="iconfont icon-down"></i></div>
                        <!-- {foreach $shop_help_cat.article as $key => $shop_help_child_cat} -->
                        {if $shop_help_child_cat.id}
                        <ul class="item-bd">
                            <li><a href='{url path="article/help/init"}&aid={$shop_help_child_cat.id}'>{$shop_help_child_cat.title}</a></li>
                        </ul>
                        {/if}
                        <!-- {/foreach} -->
                    </div>
                    {/foreach}
                </dd>
            </dl>
        </div>
        <div class="article-main">
            <div class="am-hd">
                <h2>搜索结果:“{$keywords}”</h2>
            </div>
            <div class="am-bd">
                <ul class="artilce-list">
                    {if empty($article.arr)}
                    <li>
                        <p>没有搜索到有关于“{$keywords}”的结果</p>
                    </li>
                    {else}
                    <!-- {foreach $article.arr as $key => $value} -->
                    <li>
                        <h3><a href='{url path="article/help/init"}&aid={$value.article_id}' title="{$value.title}">{$value.title}</a></h3>
                        <p>{$value.description}</p>
                    </li>
                    <!-- {/foreach} -->
                    {/if}
                </ul>
            </div>
            <!-- #BeginLibraryItem "/library/pages.lbi" --><!-- #EndLibraryItem -->
            <div class="row col-lg-12">{$article.page}</div>
        </div>

    </div>
</div>
{* DSC 提醒您：调用page_footer.lbi  *}{insert name='page_footer'}
<script type="text/javascript" src="{$theme_url}js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="{$theme_url}js/dsc-common.js"></script>
<script type="text/javascript">
    $(function(){
        $(".article-side .side-goods").slide({
            effect: 'leftLoop'
        });

        $("[ectype='searchSubmit']").on("click",function(){
            $(this).parents("form").submit();
        });
    });
</script>
</body>
</html>
