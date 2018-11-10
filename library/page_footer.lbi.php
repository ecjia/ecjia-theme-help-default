{nocache}
<div id="footer" class="footer">
    <div class="helpnav clearfix">
        <div class="wrap">
            <div class="footer-center">
                {if $help_list}
                <!-- {foreach from=$help_list key=key item=help} -->
                {if $key lt 5}
                <div class="helpnav-list">
                    <div class="helpnav-title">
                        <i class="footic1"></i>
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
    <div class="bottom-nav">
        <div>
            <!-- {foreach $shop_info as $info} -->
            <a target="_blank" href='{url path="article/about/init"}&aid={$info.article_id}'>{$info.title}</a>
            <span>|</span>
            <!-- {/foreach} -->
        </div>
        <div class="copyright">{if ecjia::config('company_name')}{ecjia::config('company_name')}版权所有{/if} <span>|</span>  客服电话：{ecjia::config('service_phone')}  <span>|</span> {if ecjia::config('icp_number')}{ecjia::config('icp_number')}{/if}</div>
        <div class="police">
        </div>
    </div>
</div>
{/nocache}