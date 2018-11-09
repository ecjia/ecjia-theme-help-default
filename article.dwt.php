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
    <link rel="shortcut icon" href="favicon.ico" />
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
<!--                <input id="help_onekey" type="hidden" value="售后服务">-->
<!---->
<!--                <p class="menu_head">售后服务</p>-->
<!--                <ul style="display: none" class="menu_body">-->
<!---->
<!--                    <li><a attr_id="290" style="cursor: pointer;" class="" href="http://help.bl.com/toHelpCenter/queryCategoryId.html?categoryId=290&amp;&amp;categoryType=help">退换货政策</a>-->
<!--                    </li>-->
<!--                    <li><a attr_id="291" style="cursor: pointer;" href="http://help.bl.com/toHelpCenter/queryCategoryId.html?categoryId=291&amp;&amp;categoryType=help">退换货流程</a>-->
<!--                    </li>-->
<!--                    <li><a attr_id="292" style="cursor: pointer;" href="http://help.bl.com/toHelpCenter/queryCategoryId.html?categoryId=292&amp;&amp;categoryType=help">退款说明</a>-->
<!--                    </li>-->
<!--                    <li><a attr_id="347" style="cursor: pointer;" href="http://help.bl.com/toHelpCenter/queryCategoryId.html?categoryId=347&amp;&amp;categoryType=help">品牌售后服务电话</a>-->
<!--                    </li>-->
<!--                </ul>-->

            </div>
            <!--右边部分XXX>XXX>XXX>XXX>XXX 【帮助中心】 右边-->
            <div id="rightContent" class="help-right">
                <div>
                    <ul class="crumb clearfix">
                        <li><a href="#">帮助中心</a> <i>&gt;</i></li>

                        <li id="help_one" class="last-one">支付方式<i>&gt;</i></li>

                        <li id="help_one" class="last-one"> {$article.title}</li></ul>
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



        <!--这里是【新闻公告】板块  -->
        <div class="info-block new clearfix" style="display: none;" id="xinwen">
            <!-- <div class="help-right new-block-listArticle"> -->
            <div class="help-right new-block-list" id="newNavigate">

                <div>
                    <ul class="crumb clearfix">
                        <li><a href="#">新闻公告</a> <i>&gt;</i></li>
                        <li id="help_one" class="last-one">
                            热点新闻
                        </li>
                        <!-- <li><a href="#" onclick="showNewArticle()";>热点新闻</a> <i>&gt; </i></li> -->
                    </ul>
                </div>
                <div class="help-title new-title">热点新闻</div>
                <div class="detail help-list new-list" id="newArt">
                    <ul>


                    </ul>
                </div>

                <div class="detail help-list" id="newtext"></div>

            </div>
        </div>





        <!--这里是【关于我们】模块  -->
        <div class="info-block our clearfix" style="display: none;" id="women">
            <div id="aboutour" class="help-left">
                <input id="about_onekey" type="hidden" value="关于我们">

                <p class="menu_head current-header">关于我们</p>
                <ul style="display: block" class="menu_body">
                    <li><a attr_id="296" class="current" style="cursor: pointer;" href="http://help.bl.com/toHelpCenter/queryCategoryId.html?categoryId=296&amp;&amp;categoryType=about">关于我们</a>

                    </li>
                    <li><a attr_id="297" style="cursor: pointer;" href="http://help.bl.com/toHelpCenter/queryCategoryId.html?categoryId=297&amp;&amp;categoryType=about">联系我们</a></li>
                    <li><a attr_id="298" style="cursor: pointer;" href="http://help.bl.com/toHelpCenter/queryCategoryId.html?categoryId=298&amp;&amp;categoryType=about">加盟合作</a></li>
                    <li><a attr_id="299" style="cursor: pointer;" href="http://help.bl.com/toHelpCenter/queryCategoryId.html?categoryId=299&amp;&amp;categoryType=about">诚征英才</a></li>
                    <li><a attr_id="300" style="cursor: pointer;" href="http://help.bl.com/toHelpCenter/queryCategoryId.html?categoryId=300&amp;&amp;categoryType=about">友情链接</a></li>
                </ul>
            </div>




            <div class="help-right">
                <!--右边部分XXX>XXX>XXX>XXX>XXX 【关于我们】 右边-->
                <div class="navigateHelp">
                    <ul class="crumb clearfix">
                        <li><a href="">关于我们</a> <i>&gt;</i></li>
                        <li id="about_one" class="last-one">
                            <i>&gt;</i>
                        </li>

                    </ul>
                </div>

                <!--【！】后面的title  -->
                <div class="help-title our-title" id="ouerNavigat"></div>

                <!--【关于我们】的文章列表  -->
                <div class="detail help-list" id="ourArticle">

                    <ul>

                    </ul>

                </div>


                <input type="hidden" class="categoryId" value="[270, 271, 272, 269, 327, 307]">
                <div class="detail help-list" id="aboutourArticle">
                </div>

            </div>
        </div>
    </div>
</div>
{insert name='page_footer'}
</body>
</html>

