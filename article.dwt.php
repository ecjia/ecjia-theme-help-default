<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Keywords" content="{$keywords}" />
    <meta name="Description" content="{$description}" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <!-- TemplateBeginEditable name="doctitle" -->
    <title>{$page_title}</title>
    <!-- TemplateEndEditable -->
    <!-- TemplateBeginEditable name="head" -->
    <!-- TemplateEndEditable -->
    <link rel="shortcut icon" href="" />
    <link rel="stylesheet" type="text/css" href="{$theme_url}css/tools1200.css" />
    <link rel="stylesheet" type="text/css" href="{$theme_url}css/base.css" />
    <link rel="stylesheet" type="text/css" href="{$theme_url}css/infomationCenter.css" />
    <link rel="stylesheet" type="text/css" href="{$theme_url}css/footer1200.css" />
    <link rel="stylesheet" type="text/css" href="{$theme_url}css/notosanssc.css" />
</head>

<body class="w1200">

{insert name='page_header'}

<div class="wrap-bg">
    <div class="wrap">
        <div style="" class="info-block help clearfix" id="helpaa">

            <!--对于【帮助中心】左边目录部分     左边目录有两级  tree  【帮助中心】左边-->
            <div id="leftMenu" class="help-left">
                <!-- {foreach $article_list as $article_list_cat} -->
                {if empty($article_list_cat.name)}
                    {if  $smarty.get.article_type eq 'shop_notice'}
                    <input id="help_onekey" type="hidden" value="新闻公告">
                    <p class="menu_head current-header" style="font-size: 16px">商城公告</p>
                    {/if}
                    {if  $smarty.get.article_type eq 'shop_info'}
                    <input id="help_onekey" type="hidden" value="关于我们">
                    <p class="menu_head current-header">关于我们</p>
                    {/if}
                {else}
                    <input id="help_onekey" type="hidden" value="{$article_list_cat.name}">
                    <p class="menu_head current-header">{$article_list_cat.name}</p>
                {/if}
                <ul style="" class="menu_body">
                    <!-- {foreach $article_list_cat.article as $key => $article_list_child_cat} -->
                    <li style="font-size: 14px;">
                        <a  href='{url path="article/index/init"}&article_type={$article_type}&aid={$article_list_child_cat.id}' style='cursor: pointer;' {if $article_list_child_cat.id eq $aid} class='current' {/if}>{$article_list_child_cat.title}</a>
                    </li>
                    <!-- {/foreach} -->
                </ul>
                <!-- {/foreach} -->

            </div>
            <!--右边部分XXX>XXX>XXX>XXX>XXX 【帮助中心】 右边-->
            <div id="rightContent" class="help-right">
                <div>
                    <ul class="crumb clearfix" style="padding-bottom: 10px;border-bottom: 1px solid #dee2e6!important;">
                        <li><a href="#">帮助中心</a> <i>&gt;</i></li>

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

                    </ul>
                </div>
                <!--这里是图片【？】后面的一个title    给相对应的属性去匹配   【帮助中心】-->
                <div class="help-title" id="topNavigate" style="font-size: 24px;font-weight: 999;color: #333;background: unset;text-align: center">{$article.title}</div>
                <div class="" id="topNavigate" style="margin-left: 20px;font-size: 14px;color: #a5a5a5;text-align: center">{RC_Time::local_date('Y-m-d H:i:s', $article.add_time)}</div>

                <!--这里显示的文章列表内容  -->
                <div class="detail help-list" id="articlelist">
                    <ul>
                    </ul>


                </div>

                <div class="detail help-list" id="artricleText">
                    {rc_stripslashes($article.content)}
                </div>

            </div>

        </div>
    </div>
</div>
{insert name='page_footer'}
</body>
</html>

