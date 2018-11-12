{if $article_type neq 'shop_notice'}
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
                <a  href='{url path="article/help/init"}&article_type={$article_type}&aid={$article_list_child_cat.id}' style='cursor: pointer;' {if $article_list_child_cat.id eq $aid} class='current' {/if}>{$article_list_child_cat.title}</a>
            </li>
            <!-- {/foreach} -->
        </ul>
        <!-- {/foreach} -->
    </div>
{/if}

<!-- 商城公告 -->
{if $article_type eq 'shop_notice'}
{if $smarty.get.show neq 'detail'}
    <div class="help-right new-block-list" id="newNavigate">

        <div>
            <ul class="crumb clearfix">
                <li><a href="#">商城公告</a> <i>&gt;</i></li>
                <li id="help_one" class="last-one">
                    热点公告
                </li>
                <!-- <li><a href="#" onclick="showNewArticle()";>热点新闻</a> <i>&gt; </i></li> -->
            </ul>
        </div>
        <div class="help-title news-title">热点公告</div>
        <div class="detail help-list new-list" id="newArt">
            <ul>
                <!-- {foreach $article_list as $article_list_cat} -->
                <!-- {foreach $article_list_cat.article as $key => $article_list_child_cat} -->
                <li class="clearfix">
                    <div class="new-list-detail" id="newsPart">
                        <a articleid="322" style="cursor: pointer;" class="current" target="_blank" href='{url path="article/help/init"}&article_type={$article_type}&aid={$article_list_child_cat.id}&show=detail'>{$article_list_child_cat.title}</a>
                    </div>
                    <div class="new-list-time" style="float: right">{RC_Time::local_date('Y-m-d H:i:s', $article_list_child_cat.add_time)}</div>
                </li>
                <!-- {/foreach} -->
                <!-- {/foreach} -->

            </ul>
        </div>

    </div>
{/if}
{/if}