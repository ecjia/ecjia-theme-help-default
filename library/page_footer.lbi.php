{nocache}
<div id="footer" class="footer" style="background: #f5f5f5">
    <div class="helpnav clearfix" style="background: #f5f5f5">
        <div class="wrap">
            <div class="footer-center">
                {if $help_list}
                <!-- {foreach from=$help_list key=key item=help} -->
                {if $key lt 5}
                <div class="helpnav-list">
                    <div class="helpnav-title">
                        <i></i>
                        {$help.name}
                    </div>
                    <ul>
                        <!-- {foreach from=$help.article key=k item=h} -->
                        <li><a href="{RC_Uri::url('article/help/init')}&aid={$h.id}" title="{$h.title}" target="_blank">{$h.title}</a></li>
                        <!-- {/foreach} -->
                    </ul>
                </div>
                {/if}
                <!-- {/foreach} -->
                {/if}
            </div>
        </div>
    </div>
    <div class="bottom-nav" style="background: #f5f5f5">
        <div>
            {$shop_info_html}
        </div>
        <div class="copyright">{if ecjia::config('company_name')}{ecjia::config('company_name')}版权所有{/if} <span>|</span>  客服电话：{ecjia::config('service_phone')}  <span>|</span> {if ecjia::config('icp_number')}<a style="color: #999;" href="http://www.miibeian.gov.cn" target="_blank">{ecjia::config('icp_number')}</a>{/if}</div>
        <div class="police">
        </div>
    </div>
</div>
<!--{/nocache}-->