<header class="header-sticky-main">
    {block name='frontend_index_sticky_header'}
        <div class="container">

            {* Logo container *}
            {block name='frontend_index_sticky_header_logo'}
                <div class="sticky-col logo-sticky-main">
                    {include file="frontend/index/logo-container.tpl"}
                </div>
            {/block}

            {* Maincategories navigation top *}
            {block name='frontend_index_sticky_header_nav'}
                <nav class="sticky-col navigation-sticky-main">
                    <ul class="navigation-sticky-main--list">
                        {strip}
                            {foreach $sMainCategories as $sCategory}
                                {block name=''}
                                    {if !$sCategory.hideTop}
                                        <li class="navigation--entry{if $sCategory.flag} is--active{/if}" role="menuitem">
                                            <a class="navigation--link{if $sCategory.flag} is--active{/if}" href="{$sCategory.link}" title="{$sCategory.description}" itemprop="url"{if $sCategory.external && $sCategory.externalTarget} target="{$sCategory.externalTarget}"{/if}>
                                                <span itemprop="name">{$sCategory.description}</span>
                                            </a>
                                        </li>
                                    {/if}
                                {/block}
                            {/foreach}
                        {/strip}

                    </ul>
                </nav>
            {/block}

            {* Shop navigation *}
            {block name='frontend_index_sticky_header_shop_nav'}
                <nav class="sticky-col shop--navigation-sticky shop--navigation block-group">
                    <ul class="navigation--list block-group" role="menubar">
                        <li class="navigation--entry entry--account{if {config name=useSltCookie} || $sOneTimeAccount} with-slt{/if}"
                            role="menuitem"
                            data-offcanvas="true"
                            data-offCanvasSelector=".account--dropdown-navigation">
                                <a href="{url controller='account'}"
                                   title="{"{if $userInfo}{s name="AccountGreetingBefore" namespace="frontend/account/sidebar"}{/s}{$userInfo['firstname']}{s name="AccountGreetingAfter" namespace="frontend/account/sidebar"}{/s} - {/if}{s namespace='frontend/index/checkout_actions' name='IndexLinkAccount'}{/s}"|escape}"
                                   class="btn is--icon-left entry--link account--link{if $userInfo} account--user-loggedin{/if}">
                                    <i class="icon--account"></i>
                                </a>

                            {if {config name=useSltCookie} || $sOneTimeAccount}
                                    <div class="account--dropdown-navigation">

                                            <div class="navigation--smartphone">
                                                <div class="entry--close-off-canvas">
                                                    <a href="#close-account-menu"
                                                       class="account--close-off-canvas"
                                                       title="{s namespace='frontend/index/menu_left' name="IndexActionCloseMenu"}{/s}">
                                                        {s namespace='frontend/index/menu_left' name="IndexActionCloseMenu"}{/s} <i class="icon--arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            {include file="frontend/account/sidebar.tpl" showSidebar=true inHeader=true}
                                    </div>
                            {/if}
                        </li>
                        <li class="navigation--entry entry--cart" role="menuitem">
                            <a class="btn is--icon-left cart--link" href="{url controller='checkout' action='cart'}" title="{"{s namespace='frontend/index/checkout_actions' name='IndexLinkCart'}{/s}"|escape}">
                                <span class="cart--display">
                                    {if $sUserLoggedIn}
                                        {s name='IndexLinkCheckout' namespace='frontend/index/checkout_actions'}{/s}
                                    {else}
                                        {s namespace='frontend/index/checkout_actions' name='IndexLinkCart'}{/s}
                                    {/if}
                                </span>

                                <span class="badge is--primary is--minimal cart--quantity{if $sBasketQuantity < 1} is--hidden{/if}">{$sBasketQuantity}</span>
                                <i class="icon--basket"></i>
                            </a>
                            <div class="ajax-loader">&nbsp;</div>
                        </li>
                    </ul>
                </nav>
            {/block}
        </div>
    {/block}


</header>
