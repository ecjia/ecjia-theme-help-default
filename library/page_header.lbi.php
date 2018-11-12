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
                <a href="#"> <img src="{$shop_logo}" style="max-height: 60px;    max-width: 159px;" alt="{$shop_name}"></a>
            </div>
            <div class="info-menu">
                <ul>
                    <li class="help-center {if empty($smarty.get.c) || $smarty.get.c eq 'help'} current {/if}">
                        <a  href='{url path="article/help/init"}'><span>帮助中心</span> </a>
                    </li>
                    <li class="new-ad {if $smarty.get.c eq 'news'} current {/if}">
                        <a href='{url path="article/shop_notice/init"}'><span>商城公告</span></a>
                    </li>
                    <li class="about-our {if $smarty.get.c eq 'about'} current {/if}">
                        <a href='{url path="article/about/init"}'> <span>关于我们</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="banner help-banner">
    <div class="help-banner-wp">
        <a href="" style="background:url({$theme_url}images/ad1.jpg) center center no-repeat;" target="_blank"></a>
    </div>
</div>