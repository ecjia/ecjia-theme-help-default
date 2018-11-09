<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
{if $topBanner}
{$topBanner}
{else}
{* DSC 提醒您：动态载入position_get_adv.lbi，显示首页分类小广告 *}{insert name='get_adv' logo_name=$top_banner}
{/if}
<div class="site-nav" id="site-nav">
    <div class="w w1200">
        <div class="fl">
			{* DSC 提醒您：根据用户id来调用header_region_style.lbi显示不同的界面  *}{insert name='header_region'}
            <div class="txt-info" id="ECS_MEMBERZONE">
				{* DSC 提醒您：根据用户id来调用member_info.lbi显示不同的界面  *}{insert name='member_info'}	
            </div>
        </div>
        
        <ul class="quick-menu fr">
			<li>
			<div class="dt">
				<a href="{$common_url.user_order_url}">我的订单</a>
			</div>
			</li>
			<li class="spacer"></li>
			<li>
			<div class="dt">
				<a href="history_list.php">我的浏览</a>
			</div>
			</li>
			<li class="spacer"></li>

<!-- 			<li>
			<div class="dt">
				<a href="user.php?act=collection_list">我的收藏</a>
			</div>
			</li>
			<li class="spacer"></li> -->
			
			<li class="li_dorpdown" data-ectype="dorpdown">
				<div class="dt dsc-cm">
					手机APP<i class="iconfont icon-down"></i>
				</div>
				<div class="dd dorpdown-layer">
					<dl class="fore2">
						<img src="" />
						<p>扫一扫下载客户端</p>
					</dl>
				</div>
			</dl>
			<li class="spacer"></li>


			<li class="li_dorpdown" data-ectype="dorpdown">
				<div class="dt dsc-cm">
					网站导航<i class="iconfont icon-down"></i>
				</div>
				<div class="dd dorpdown-layer" style="min-width:270px;">
					<dl class="fore2">
						<dd>
							<div class="item">
								<a href="{$common_url.user_order_await_pay_url}">待付款订单</a>
							</div>
							<div class="item">
								<a href="{$common_url.user_order_shipped_url}">待收货订单</a>
							</div>
							<div class="item">
								<a href="{RC_Uri::url('article/help/init')}&aid=712">购物指南</a>
							</div>
							<div class="item">
								<a href="{$common_url.login_url}">卖家中心</a>
							</div>
							<div class="item">
								<a href="{RC_Uri::url('main/brand/init')}">品牌街</a>
							</div>
						</dd>
					</dl>
				</div>
			</li>
		</ul>

<!--         <ul class="quick-menu fr"> -->
<!--             {if $navigator_list.top} -->
<!-- 	           	{foreach name=nav_top_list from=$navigator_list.top item=nav key=key} -->
<!-- 		            {if $smarty.foreach.nav_top_list.index < 4} -->
<!-- 		            <li> -->
<!-- 		                <div class="dt"><a href="{$nav.url}" {if $nav.opennew}target="_blank"{/if}>{$nav.name}</a></div> -->
<!-- 		            </li> -->
<!-- 		            <li class="spacer"></li> -->
		            <!--{/if}-->
<!-- 	            {/foreach} -->
<!--             {/if} -->
            
<!--             {if $navigator_list.top} -->
<!--             <li class="li_dorpdown" data-ectype="dorpdown"> -->
<!--                 <div class="dt dsc-cm">{$lang.Site_navigation}<i class="iconfont icon-down"></i></div> -->
<!--                 <div class="dd dorpdown-layer"> -->
<!--                     <dl class="fore1"> -->
<!--                         <dt>{$lang.characteristic_theme}</dt> -->
<!--                         <dd> -->
<!--                             {foreach name=nav_top_list from=$top_cat_list item=topc_cats key=key} --> -->
<!--                                 {if $smarty.foreach.nav_top_list.index < 3} -->
<!--                                     <div class="item"><a href="{$topc_cats.url}" target="_blank">{$topc_cats.cat_alias_name}</a></div> -->
<!--                                 {/if} -->
<!--                             {/foreach} -->
<!--                         </dd> -->
<!--                     </dl> -->
<!--                     <dl class="fore2"> -->
<!--                         <dt>{$lang.modules_txt_promo}</dt> -->
<!--                         <dd> -->
<!--                             {foreach name=nav_top_list from=$navigator_list.top item=nav key=key} -->
<!--                         		{if $smarty.foreach.nav_top_list.index >= 4} -->
<!--                          			<div class="item"><a href="{$nav.url}"{if $nav.opennew} target="_blank"{/if}>{$nav.name}</a></div> -->
<!--                                 {/if} -->
<!--                             {/foreach} -->
<!--                         </dd> -->
<!--                     </dl> -->
<!--                 </div> -->
<!--             </li> -->
<!--             {/if} -->
<!--         </ul> -->
        
    </div>
</div>
<div class="header">
    <div class="w w1200">
        <div class="logo">
            <div class="logoImg"><a href="{$url_index}"><img src="{$shop_logo}" /></a></div>
			<div class="logoAdv"><a href="{$common_url.merchant_franchisee_url}" target="__blank"><img src="{$theme_url}images/temp/ecsc-join.gif" /></a></div>
        </div>
        <div class="dsc-search">
            <div class="form">
                <form id="searchForm" name="searchForm" method="get" action="{$site_domain}search.php" onSubmit="return checkSearchForm(this)" class="search-form">
                    <input autocomplete="off" onKeyUp="lookup(this.value);" name="keywords" type="text" id="keyword" value="{if $search_keywords}{$search_keywords}{else}{insert name='rand_keyword'}{/if}" class="search-text"/>

                    <!--{if $filename eq 'merchants_store'}-->
                     <input type="hidden" value="{$merchant_id}" id="merchant_id" name="merchant_id">
                    <input type="hidden" value="{$cat_id}" id="cat_id" name="cat_id">
                    <button type="submit" class="button button-goods" onclick="checkstore_search_cmt(0,this)">{$lang.serch_whole_station}</button>
                    <button type="button" class="button button-store" onclick="checkstore_search_cmt(2,this)" data-domain="{$site_domain}" >{$lang.serch_our_shop}</button>
                     <!--{else}-->

                    <input type="hidden" name="store_search_cmt" value="{$search_type|default:0}">
                    <button type="submit" class="button button-goods" onclick="checkstore_search_cmt(0)">搜商品</button>
                    <button type="submit" class="button button-store" onclick="checkstore_search_cmt(1)">搜店铺</button>
                    <!--{/if}-->

                </form>
                {if $searchkeywords}
                <ul class="keyword">
                {foreach from=$searchkeywords item=val}
                <li><a href="{$site_domain}search.php?keywords={$val|escape:url}" target="_blank">{$val}</a></li>
                {/foreach}
                </ul>
                {/if}
                <!-- @Author guan 搜索栏提示 start -->
                <div class="suggestions_box" id="suggestions" style="display:none;">
                    <div class="suggestions_list" id="auto_suggestions_list">
                        &nbsp;
                    </div>
                </div>
                <!-- @Author guan 搜索栏提示 end -->
            </div>
        </div>
        <div class="shopCart" data-ectype="dorpdown" id="ECS_CARTINFO" data-carteveval="0">
        {* DSC 提醒您：根据用户id来调用cart_info.lbi显示不同的界面  *}{insert name='cart_info'}
        </div>
    </div>
</div>
{if !(($filename eq 'merchants_store' && $licence_type neq 1) || $snapshot )}
<div class="nav{if $filename neq 'index'} dsc-zoom{/if}" ectype="dscNav">
    <div class="w w1200">
        <div class="categorys {if $filename neq 'index'}site-mast{/if}">
            <div class="categorys-type"><a href="{$url_categoryall}" target="_blank">全部商品分类</a></div>
            <div class="categorys-tab-content">
            	{insert name='category_tree_nav' cat_model=$nav_cat_model cat_num=$nav_cat_num}
            </div>
        </div>
        {if $nav_page && $nav_page neq 'undefined'}
        {$nav_page}
        {else}
<!--         <div class="nav-main" id="nav"> -->
<!--             <ul class="navitems"> -->
<!--                 <li><a href="{$site_domain}index.php" {if $navigator_list.config.index eq 1}class="curr"{/if}>首页</a></li> -->
<!--                 {foreach name=nav_middle_list from=$navigator_list.middle item=nav} -->
<!--                 <li><a href="{$nav.url}" {if $nav.active eq 1}class="curr"{/if} {if $nav.opennew}target="_blank"{/if}>{$nav.name}</a></li> -->
<!--                 {/foreach} -->
<!--             </ul> -->
<!--         </div> -->
        
		<div class="nav-main" id="nav">
			<ul class="navitems">
				<li><a href="index.php" {if $filename eq 'index'}class="curr"{/if}>首页</a></li>
				{foreach from=$cat_list item=val}
				<li><a href='{url path="main/category/channel"}&id={$val.cat_id}'>{$val.cat_name}</a></li>
				{/foreach}
				<li><a href="{RC_Uri::url('groupbuy/index/init')}">限时团购</a></li>
				<li><a href='{url path="main/store_street/init"}'>店铺街</a></li>
			</ul>
		</div>
        
        {/if}
    </div>
</div>
{/if}