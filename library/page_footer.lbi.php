<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<div class="footer-new">
    <div class="footer-new-top">
    	<div class="w w1200">
            <div class="service-list">
                <div class="service-item">
                    <i class="f-icon f-icon-qi"></i>
                    <span>七天包退</span>
                </div>
                <div class="service-item">
                    <i class="f-icon f-icon-zheng"></i>
                    <span>正品保障</span>
                </div>
                <div class="service-item">
                    <i class="f-icon f-icon-hao"></i>
                    <span>好评如潮</span>
                </div>
                <div class="service-item">
                    <i class="f-icon f-icon-shan"></i>
                    <span>闪电发货</span>
                </div>
                <div class="service-item">
                    <i class="f-icon f-icon-quan"></i>
                    <span>权威荣誉</span>
                </div>
            </div>
            <div class="contact">
                <div class="contact-item contact-item-first"><i class="f-icon f-icon-tel"></i><span>{ecjia::config('service_phone')}</span></div>
            </div>
        </div>
    </div>

<!--     <div class="footer-new-con"> -->
<!--     	<div class="fnc-warp"> -->
<!--             <div class="help-list"> -->
<!--                 {foreach from=$helps item=help_cat name=no} -->
<!--                 {if $smarty.foreach.no.iteration < 6} -->
<!--                 <div class="help-item"> -->
<!--                     <h3>{$help_cat.cat_name}</h3> -->
<!--                     <ul> -->
<!--                     {foreach from=$help_cat.article item=item name=help_cat} -->
<!--                     {if $smarty.foreach.help_cat.iteration < 4} -->
<!--                     <li><a href="{$item.url}"  title="{$item.title|escape:html}" target="_blank">{$item.short_title}</a></li> -->
<!--                     {/if} -->
<!--                     {/foreach} --> -->
<!--                     </ul> -->
<!--                 </dl> -->
<!--                 </div> -->
<!--                 {/if} -->
<!--                 {/foreach}   -->
<!--             </div> -->
<!--             <div class="qr-code"> -->
<!--                 <div class="qr-item qr-item-first"> -->
<!--                     <div class="code_img"><img src="{$theme_url}images/temp/common/ecjia_qrcode.png"></div> -->
<!--                     <div class="code_txt">ECJia</div> -->
<!--                 </div> -->
<!--                 <div class="qr-item"> -->
<!--                     <div class="code_img"><img src="{$theme_url}images/temp/common/ectouch_qrcode.png"></div> -->
<!--                     <div class="code_txt">ECTouch</div> -->
<!--                 </div> -->
<!--             </div> -->
<!--     	</div> -->
<!--     </div> -->

	<div class="footer-new-con">
		<div class="fnc-warp">
			{if $help_list}
			<div class="help-list">
				<!-- {foreach from=$help_list key=key item=help} -->
				{if $key lt 5}
				<div class="help-item">
					<h3>{$help.name} </h3>
					{if $help.article}
					<ul>
						<!-- {foreach from=$help.article key=k item=h} -->
						{if $k lt 3}
						<li><a href="{RC_Uri::url('article/help/init')}&aid={$h.id}" title="{$h.title}" target="_blank">{$h.title}</a></li>
						{/if}
						<!-- {/foreach} -->
					</ul>
					{/if}
				</div>
				{/if}
				<!-- {/foreach} -->
			</div>
			{/if}

			<div class="qr-code">
				<div class="qr-item qr-item-first">
					<div class="code_img">
						<img src="{RC_Upload::upload_url(ecjia::config('shop_wechat_qrcode'))}">
					</div>
					<div class="code_txt">
						扫一扫关注
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-new-bot">
		<div class="w w1200">

			{if $friendlink}
			<p class="copyright_links">
				{foreach from=$friendlink key=key item=v name=link}
					<a href="{$v.link_url}" target="_blank" title="{$v.link_name}">
						<img src="{$v.link_logo}" width="80" style="border-radius:2px;" />
					</a>
					{if !$smarty.foreach.link.last}
					<span class="">&nbsp;</span>
					{/if}
				{/foreach}
			</p>
			{/if}

			{if $shop_info}
			<p class="copyright_links">
				<!-- {foreach from=$shop_info key=key item=val name=shopinfo} -->
				<a href="{RC_Uri::url('article/help/init')}&aid={$val.article_id}">{$val.title}</a>
				{if !$smarty.foreach.shopinfo.last}
				<span class="spacer"></span>
				{/if}
				<!-- {/foreach} -->
			</p>
			{/if}

			<p>
				{if ecjia::config('company_name')}{ecjia::config('company_name')} 版权所有{/if} {if ecjia::config('icp_number')}&nbsp;&nbsp;<a href="http://www.miibeian.gov.cn" target="_blank"> {ecjia::config('icp_number')}</a>{/if}&nbsp;&nbsp;{ecjia::config('powered')}
			</p>
			<p class="copyright_auth">
				&nbsp;
			</p>
		</div>
	</div>

    <!--优惠券领取弹窗-->
    <div class="hide" id="pd_coupons">
        <span class="success-icon m-icon"></span>
        <div class="item-fore">
            <h3>{$lang.Coupon_redemption_succeed}</h3>
            <div class="txt ftx-03">{$lang.coupons_prompt}</div>
        </div>
    </div>

    <!--隐藏域-->
    <div class="hidden">
        <input type="hidden" name="seller_kf_IM" value="{$shop_information.is_IM}" rev="{$site_domain}" ru_id="{$merchant_id|default:0}" />
        <input type="hidden" name="seller_kf_qq" value="{$basic_info.kf_qq}" />
        <input type="hidden" name="seller_kf_tel" value="{$basic_info.kf_tel}" />
        <input type="hidden" name="user_id" ectype="user_id" value="{if $user_id}{$user_id}{else}{$smarty.session.user_id|default:0}{/if}" />
    </div>
</div>

<script type="text/jscript" src="{$theme_url}js/suggest.js"></script>
<script type="text/jscript" src="{$theme_url}js/scroll_city.js"></script>
<script type="text/jscript" src="{$theme_url}js/utils.js"></script>

<!-- {if $site_domain} -->
{if $area_htmlType neq 'goods' && $area_htmlType neq 'exchange'}
	<script type="text/javascript" src="{$theme_url}js/warehouse_area.js"></script>
{else}
	<script type="text/javascript" src="{$theme_url}js/warehouse.js"></script>
{/if}
<!-- {else} -->
{insert_scripts files='warehouse.js,warehouse_area.js'}
<!-- {/if} -->

{if $suspension_two}
<script>var seller_qrcode='<img src="{$site_domain}{$seller_qrcode_img}" alt="{$seller_qrcode_text}" width="164" height="164">'; //by wu</script>
{$suspension_two}
{/if}
