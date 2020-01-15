{extends file="parent:frontend/index/footer-navigation.tpl"}
{namespace name="frontend/index/menu_footer"}

{block name="frontend_index_footer_column_service_menu"}
<div class="footer--column column--logos block">
    {block name="frontend_index_footer_column_payment_headline"}
        <div class="column--headline">{s name="sFooterPaymentNavi"}Einfach bezahlen{/s}</div>
    {/block}
    {block name="frontend_index_footer_column_payment_content"}
        <div class="column--content footer--logos">
            {if $theme.show_amazon}
                <div class="footer--logos-item">
                    <img align="left" class="footer--logos-img" src="{link file='frontend/_public/src/img/payment/amazon.svg' fullPath}" />
                </div>
            {/if}
            {if $theme.show_mastercard}
                <div class="footer--logos-item">
                    <img align="left" class="footer--logos-img" src="{link file='frontend/_public/src/img/payment/mastercard.svg' fullPath}" />
                </div>
            {/if}
            {if $theme.show_paypal}
                <div class="footer--logos-item">
                    <img align="left" class="footer--logos-img" src="{link file='frontend/_public/src/img/payment/paypal.svg' fullPath}" />
                </div>
            {/if}
            {if $theme.show_sofort}
                <div class="footer--logos-item">
                    <img align="left" class="footer--logos-img" src="{link file='frontend/_public/src/img/payment/sofort.svg' fullPath}" />
                </div>
            {/if}
            {if $theme.show_visa}
                <div class="footer--logos-item">
                    <img align="left" class="footer--logos-img" src="{link file='frontend/_public/src/img/payment/visa.svg' fullPath}" />
                </div>
            {/if}
            {if $theme.show_vorkasse}
                <div class="footer--logos-item">
                    <img align="left" class="footer--logos-img" src="{link file='frontend/_public/src/img/payment/vorkasse.svg' fullPath}" />
                </div>
            {/if}
        </div>
    {/block}

    {block name="frontend_index_footer_column_shipping_headline"}
        <div class="column--headline">{s name="sFooterShippingNavi"}Schneller Versand{/s}</div>
    {/block}
    {block name="frontend_index_footer_column_shipping_content"}
        <div class="column--content footer--logos">
            {if $theme.show_dhl}
                <div class="footer--logos-item">
                    <img align="left" class="footer--logos-img" src="{link file='frontend/_public/src/img/shipping/dhl.svg' fullPath}" />
                </div>
            {/if}
            {if $theme.show_hermes}
                <div class="footer--logos-item">
                    <img align="left" class="footer--logos-img" src="{link file='frontend/_public/src/img/shipping/hermes.svg' fullPath}" />
                </div>
            {/if}
            {if $theme.show_post}
                <div class="footer--logos-item">
                    <img align="left" class="footer--logos-img" src="{link file='frontend/_public/src/img/shipping/post.svg' fullPath}" />
                </div>
            {/if}
            {if $theme.show_ups}
                <div class="footer--logos-item">
                    <img align="left" class="footer--logos-img" src="{link file='frontend/_public/src/img/shipping/ups.svg' fullPath}" />
                </div>
            {/if}
        </div>
    {/block}
</div>
{/block}

{block name="frontend_index_footer_column_newsletter"}
    <div class="footer--column column--menu is--last block">
        {block name="frontend_index_footer_column_service_menu_headline"}
            <div class="column--headline">{s name="sFooterShopNavi1"}{/s}</div>
        {/block}

        {block name="frontend_index_footer_column_service_menu_content"}
            <nav class="column--navigation column--content">
                <ul class="navigation--list" role="menu">
                    {block name="frontend_index_footer_column_service_menu_before"}{/block}

                    {if $sMenu.bottom}
                        {foreach $sMenu.bottom as $item}

                            {block name="frontend_index_footer_column_service_menu_entry"}
                                <li class="navigation--entry" role="menuitem">
                                    <a class="navigation--link" href="{if $item.link}{$item.link}{else}{url controller='custom' sCustom=$item.id title=$item.description}{/if}" title="{$item.description|escape}"{if $item.target} target="{$item.target}"{/if}>
                                        {$item.description}
                                    </a>

                                    {* Sub categories *}
                                    {if $item.childrenCount > 0}
                                        <ul class="navigation--list is--level1" role="menu">
                                            {foreach $item.subPages as $subItem}
                                                <li class="navigation--entry" role="menuitem">
                                                    <a class="navigation--link" href="{if $subItem.link}{$subItem.link}{else}{url controller='custom' sCustom=$subItem.id title=$subItem.description}{/if}" title="{$subItem.description|escape}"{if $subItem.target} target="{$subItem.target}"{/if}>
                                                        {$subItem.description}
                                                    </a>
                                                </li>
                                            {/foreach}
                                        </ul>
                                    {/if}
                                </li>
                            {/block}
                        {/foreach}
                        {else}
                        {foreach $sMenu.gBottom as $item}

                            {block name="frontend_index_footer_column_service_menu_entry"}
                                <li class="navigation--entry" role="menuitem">
                                    <a class="navigation--link" href="{if $item.link}{$item.link}{else}{url controller='custom' sCustom=$item.id title=$item.description}{/if}" title="{$item.description|escape}"{if $item.target} target="{$item.target}"{/if}>
                                        {$item.description}
                                    </a>

                                    {* Sub categories *}
                                    {if $item.childrenCount > 0}
                                        <ul class="navigation--list is--level1" role="menu">
                                            {foreach $item.subPages as $subItem}
                                                <li class="navigation--entry" role="menuitem">
                                                    <a class="navigation--link" href="{if $subItem.link}{$subItem.link}{else}{url controller='custom' sCustom=$subItem.id title=$subItem.description}{/if}" title="{$subItem.description|escape}"{if $subItem.target} target="{$subItem.target}"{/if}>
                                                        {$subItem.description}
                                                    </a>
                                                </li>
                                            {/foreach}
                                        </ul>
                                    {/if}
                                </li>
                            {/block}
                        {/foreach}
                    {/if}

                    {block name="frontend_index_footer_column_service_menu_after"}{/block}
                </ul>
            </nav>
        {/block}
    </div>
{/block}
