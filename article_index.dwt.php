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
                <!-- {foreach $shop_help as $shop_help_cat} -->
                <input id="help_onekey" type="hidden" value="{$shop_help_cat.name}">

                <p class="menu_head current-header">{$shop_help_cat.name}</p>
                <ul style="" class="menu_body">
                    <!-- {foreach $shop_help_cat.article as $key => $shop_help_child_cat} -->
                    <li>
                        <a href='{url path="article/help/init"}&aid={$shop_help_child_cat.id}' style='cursor: pointer;' {if $shop_help_child_cat.id eq $aid} class='current' {/if}>{$shop_help_child_cat.title}</a>
                    </li>
                    <!-- {/foreach} -->
                </ul>
                <!-- {/foreach} -->

            </div>
            <!--右边部分XXX>XXX>XXX>XXX>XXX 【帮助中心】 右边-->
            <div id="rightContent" class="help-right">
                <div>
                    <ul class="crumb clearfix">
                        <li><a href="#">帮助中心</a> <i>&gt;</i></li>

                    <!-- {foreach $shop_help as $shop_help_cat} -->
                        <!-- {foreach $shop_help_cat.article as  $shop_help_child_cat} -->
                        {if $shop_help_child_cat.id eq $aid}
                        <li id="help_one" class="last-one">{$shop_help_cat.name}<i>&gt;</i></li>
                        <li id="help_one" class="last-one">{$shop_help_child_cat.title}</li>
                        {/if}
                        <!-- {/foreach} -->
                    <!-- {/foreach} -->

                    </ul>
                    </div>
                    <!--这里是图片【？】后面的一个title    给相对应的属性去匹配   【帮助中心】-->
                <div class="help-title" id="topNavigate">{$article.title}</div>
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

