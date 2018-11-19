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
        <div class="info-block help clearfix" id="helpaa">
            <div id="leftMenu" class="help-left">
                {if empty($article_list)}
                <input id="help_onekey" type="hidden" value="商城公告">
                <p class="menu_head current-header">商城公告</p>
                {else}
                <!-- {foreach $article_list as $article_list_cat} -->
                <input id="help_onekey" type="hidden" value="商城公告">
                <p class="menu_head current-header">商城公告</p>
                <ul  class="menu_body" style="display: none">
                    <!-- {foreach $article_list_cat.article as $key => $article_list_child_cat} -->
                    <li>
                        <a  href='{url path="article/notice/init"}&date={$key}' {if $date eq $key} class='current' {/if}>{$key}</a>
                    </li>
                    <!-- {/foreach} -->
                </ul>
                <!-- {/foreach} -->
                {/if}
            </div>


            {if $smarty.get.show neq 'detail'}
            <div class="help-right new-block-list" id="newNavigate">
                <div>
                    <ul class="crumb clearfix">
                        <li><a href='{url path="article/notice/init"}'>商城公告</a> <i>&gt;</i></li>
                        <li id="help_one" class="last-one">
                            热点公告
                        </li>
                    </ul>
                </div>
                <div class="detail help-list new-list" id="newArt">
                    {if empty($article_list)}
                        暂无商城公告
                    {else}
                    <ul>
                        <!-- {foreach $article_list as $article_list_cat} -->
                        <!-- {foreach $article_list_cat.article as $key => $article_list_child_cat} -->
                        {if $key eq $date}
                        <!-- {foreach $article_list_child_cat as $article_cat} -->
                        <li class="clearfix">
                            <div class="new-list-detail" id="newsPart">
                                <a class="current" href='{url path="article/notice/init"}&date={$date}&aid={$article_cat.id}&show=detail'>{$article_cat.title}</a>
                            </div>
                            <div class="new-list-time">{$article_cat.date}</div>
                        </li>
                        <!-- {/foreach} -->
                        {/if}
                        <!-- {/foreach} -->
                        <!-- {/foreach} -->
                    </ul>
                    {/if}
                </div>
            </div>
            {/if}


            {if $smarty.get.show eq 'detail'}
            <div id="rightContent" class="help-right">
                <div>
                    <ul class="crumb clearfix">
                        <li><a href='{url path="article/notice/init"}'>商城公告</a> <i>&gt;</i></li>
                        <!-- {foreach $article_list as $article_list_cat} -->
                        <!-- {foreach $article_list_cat.article as  $article_list_child_cat} -->
                        <!-- {foreach $article_list_child_cat as  $article_cat} -->
                        {if $article_cat.id eq $aid}
                        <li id="help_one" class="last-one">{$article_cat.title}</li>
                        {/if}
                        <!-- {/foreach} -->
                        <!-- {/foreach} -->
                        <!-- {/foreach} -->
                    </ul>
                </div>
                <div class="help-title" id="topNavigate" >{$article.title}</div>
                <div class="time-title">{RC_Time::local_date('Y-m-d H:i:s', $article.add_time)}</div>
                <div class="detail help-list" id="artricleText">
                    {rc_stripslashes($article.content)}
                </div>
            </div>
            {/if}


        </div>
    </div>
</div>
{insert name='page_footer'}
</body>
</html>
