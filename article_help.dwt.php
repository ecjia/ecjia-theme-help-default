<!doctype html>
<html>
<head>
    <!-- #BeginLibraryItem "/library/tag_head.lbi" --><!-- #EndLibraryItem -->
</head>

<body class="w1200">

{insert name='page_header'}

<div class="infomation">
    <div class="wrap ">
        <div class="info-header">
            <div class="info-logo">
                <a href="{$site_index}"> <img src="{$shop_logo}" alt="{$shop_name}"></a>
            </div>
            <div class="info-menu">
                <ul>
                    <li onclick="javascript:document.getElementById('shop_help').click();" class="help-center {if $smarty.get.c eq 'help' || empty($smarty.get.c) } current {/if}">
                        <a id="shop_help" href='{url path="article/help/init"}'><span>帮助中心</span> </a>
                    </li>
                    <li onclick="javascript:document.getElementById('shop_notice').click();" class="new-ad {if $smarty.get.c eq 'notice'} current {/if}">
                        <a id="shop_notice" href='{url path="article/notice/init"}'><span>商城公告</span></a>
                    </li>
                    <li onclick="javascript:document.getElementById('shop_info').click();" class="about-our {if $smarty.get.c eq 'info'} current {/if}">
                        <a id="shop_info" href='{url path="article/info/init"}'> <span>关于我们</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="banner help-banner">
    <div class="help-banner-wp">
        <a role="button" style="background:url('{$theme_url}images/banner.png') center center no-repeat;"></a>
    </div>
</div>

<div class="wrap-bg">
    <div class="wrap">
        <div  class="info-block help clearfix" id="helpaa">
            <div id="leftMenu" class="help-left">
                {if empty($article_list)}
                <input id="help_onekey" type="hidden" value="帮助中心">
                <p class="menu_head current-header">帮助中心</p>
                {else}
                <!-- {foreach $article_list as $article_list_cat} -->
                <input id="help_onekey" type="hidden" value="{$article_list_cat.name}">
                <p class="menu_head">{$article_list_cat.name}</p>
                <ul class="menu_body" style="display: none">
                    <!-- {foreach $article_list_cat.article as $key => $article_list_child_cat} -->
                    <li>
                        <a  href='{url path="article/help/init"}&aid={$article_list_child_cat.id}' {if $article_list_child_cat.id eq $aid} class='current' {/if}>{$article_list_child_cat.title}</a>
                    </li>
                    <!-- {/foreach} -->
                </ul>
                <!-- {/foreach} -->
                {/if}
            </div>

            <div id="rightContent" class="help-right">
                <div>
                    <ul class="crumb clearfix">
                        {if empty($article_list)}
                        <li><a href='{url path="article/info/init"}'>帮助中心</a></li>
                        {else}
                        <li><a href='{url path="article/help/init"}'>帮助中心</a> <i>&gt;</i></li>
                        <!-- {foreach $article_list as $article_list_cat} -->
                        <!-- {foreach $article_list_cat.article as  $article_list_child_cat} -->
                        {if $article_list_child_cat.id eq $aid}
                        {if not empty($article_list_cat.name) }
                        <li id="help_one" class="last-one">{$article_list_cat.name}<i>&gt;</i></li>
                        {/if}
                        <li id="help_one" class="last-one">{$article_list_child_cat.title}</li>
                        {/if}
                        <!-- {/foreach} -->
                        <!-- {/foreach} -->
                        {/if}
                    </ul>
                </div>
                {if empty($article_list)}
                <div class="detail help-list">暂无内容</div>
                {else}
                <div class="help-title" id="topNavigate" >{$article.title}</div>
                <div class="detail help-list" id="artricleText">
                    {rc_stripslashes($article.content)}
                </div>
                {/if}
            </div>

        </div>
    </div>
</div>
{insert name='page_footer'}
</body>
</html>

