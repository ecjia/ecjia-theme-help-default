<div class="tools">
    <div class="wrap">
        <div class="bl-name" title="{$shop_name}"><div class="txt">Hi，欢迎来到{$shop_name}</div><b></b></div>
        <div class="tools-right">
            <ul>
                <li id="user_not_login" class="box">
                    <div>
                        <a href="{$site_main}" class="login-button"><i></i><span>请登录</span></a>
                        <a id="headerReg" href="{$site_login}" class="registered">注册</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="infomation">
    <div class="wrap ">
        <div class="info-header">
            <div class="info-logo">
                <a href="{$site_index}"> <img src="{$shop_logo}" style="max-height: 60px; max-width: 159px;" alt="{$shop_name}"></a>
            </div>
            <div class="info-menu">
                <ul>
                    <li onclick="javascript:document.getElementById('shop_help').click();" class="help-center {if empty($smarty.get.article_type) || $smarty.get.article_type eq 'shop_help'} current {/if}">
                        <a id="shop_help" href='{url path="article/help/init"}&article_type=shop_help'><span>帮助中心</span> </a>
                    </li>
                    <li onclick="javascript:document.getElementById('shop_notice').click();" class="new-ad {if $smarty.get.article_type eq 'shop_notice'} current {/if}">
                        <a id="shop_notice" href='{url path="article/help/init"}&article_type=shop_notice'><span>商城公告</span></a>
                    </li>
                    <li onclick="javascript:document.getElementById('shop_info').click();" class="about-our {if $smarty.get.article_type eq 'shop_info'} current {/if}">
                        <a id="shop_info" href='{url path="article/help/init"}&article_type=shop_info'> <span>关于我们</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="banner help-banner">
    <div class="help-banner-wp">
        <a role="button" style="background:url({$theme_url}images/banner.png) center center no-repeat;"></a>
    </div>
</div>