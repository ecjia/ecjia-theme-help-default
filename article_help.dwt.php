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

            <div id="leftMenu" class="help-left">
                <!-- {foreach $article_list as $article_list_cat} -->
                <input id="help_onekey" type="hidden" value="{$article_list_cat.name}">
                <p class="menu_head current-header">{$article_list_cat.name}</p>
                <ul style="" class="menu_body">
                    <!-- {foreach $article_list_cat.article as $key => $article_list_child_cat} -->
                    <li style="font-size: 14px;">
                        <a  href='{url path="article/help/init"}&aid={$article_list_child_cat.id}' style='cursor: pointer;' {if $article_list_child_cat.id eq $aid} class='current' {/if}>{$article_list_child_cat.title}</a>
                    </li>
                    <!-- {/foreach} -->
                </ul>
                <!-- {/foreach} -->
            </div>

            <div id="rightContent" class="help-right">
                <div>
                    <ul class="crumb clearfix">
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

                <div class="help-title" id="topNavigate" >{$article.title}</div>

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

