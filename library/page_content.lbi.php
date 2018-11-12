{if $article_type neq 'shop_notice'}
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
    <!--这里是图片【？】后面的一个title    给相对应的属性去匹配   【帮助中心】-->
    <div class="help-title" id="topNavigate" style="margin-bottom: 10px;font-size: 24px;font-weight: 999;color: #333;background: unset;text-align: center">{$article.title}</div>
    {if $article_type eq 'shop_notice'}
    <div class="" id="topNavigate" style="margin-bottom: 15px;margin-left: 20px;font-size: 14px;color: #a5a5a5;text-align: center">{RC_Time::local_date('Y-m-d H:i:s', $article.add_time)}</div>
    {/if}

    <!--这里显示的文章列表内容  -->
    <div class="detail help-list" id="articlelist">
        <ul>
        </ul>


    </div>

    <div class="detail help-list" id="artricleText">
        {rc_stripslashes($article.content)}
    </div>

</div>
{/if}


{if $article_type eq 'shop_notice'}
{if $smarty.get.show eq 'detail'}
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
    <!--这里是图片【？】后面的一个title    给相对应的属性去匹配   【帮助中心】-->
    <div class="help-title" id="topNavigate" style="margin-bottom: 10px;font-size: 24px;font-weight: 999;color: #333;background: unset;text-align: center">{$article.title}</div>
    {if $article_type eq 'shop_notice'}
    <div class="" id="topNavigate" style="margin-bottom: 15px;margin-left: 20px;font-size: 14px;color: #a5a5a5;text-align: center">{RC_Time::local_date('Y-m-d H:i:s', $article.add_time)}</div>
    {/if}

    <!--这里显示的文章列表内容  -->
    <div class="detail help-list" id="articlelist">
        <ul>
        </ul>


    </div>

    <div class="detail help-list" id="artricleText">
        {rc_stripslashes($article.content)}
    </div>

</div>
{/if}
{/if}

