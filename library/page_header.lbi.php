<div class="tools">
    <div class="wrap">
        <div class="bl-name" title="{$shop_name}"><div class="txt">Hi，欢迎来到{$shop_name}</div><b></b></div>
        {if ecjia::config('pc_enabled_member')}
        <div class="tools-right">
            <ul>
                <li id="user_not_login" class="box">
                    <div>
                        <a href="{$site_main}" target="_blank" class="login-button"><i></i><span>请登录</span></a>
                        <a id="headerReg" target="_blank" href="{$site_login}" class="registered">注册</a>
                    </div>
                </li>
            </ul>
        </div>
        {/if}
    </div>
</div>