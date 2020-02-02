{namespace name="frontend/index/footer"}

<div class="footer--bottom">
    <div class="container">
    {* Vat info *}
    {block name='frontend_index_footer_vatinfo'}
        <div class="footer--vat-info">
            <p class="vat-info--text">
                {if $sOutputNet}
                    {s name='FooterInfoExcludeVat' namespace="frontend/index/footer"}{/s}
                {else}
                    {s name='FooterInfoIncludeVat' namespace="frontend/index/footer"}{/s}
                {/if}
            </p>
        </div>
        
        <div class="footer--copyright">
            {s name="IndexThemeBy"}Theme by <a href="https://store.nexxtdesign.de" target="_parent" title="Theme by nexxtdesign.de">nexxtdesign.de</a>{/s}
        </div>

    {/block}

    {block name='frontend_index_footer_minimal'}
        {include file="frontend/index/footer_minimal.tpl" hideCopyrightNotice=true}
    {/block}

    {* Shopware footer *}
    {block name="frontend_index_shopware_footer"}

        {* Copyright *}
        {block name="frontend_index_shopware_footer_copyright"}
        {/block}

        {* Logo *}
        {block name="frontend_index_shopware_footer_logo"}
        {/block}
    {/block}
    </div>
</div>
