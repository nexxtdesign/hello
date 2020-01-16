{extends file="parent:frontend/index/index.tpl"}

{block name='frontend_index_page_wrap' append}
    {if $theme.activate_stickyheader}
        {include file='frontend/index/sticky-header.tpl'}
    {/if}
{/block}

{* Breadcrumb *}
{block name='frontend_index_breadcrumb'}

    {if count($sBreadcrumb)}
        <nav class="content--breadcrumb block"{if $theme.activate_breadcrumb} style="display:none;"{/if}>
            {block name='frontend_index_breadcrumb_inner'}
                {include file='frontend/index/breadcrumb.tpl'}
            {/block}
        </nav>
    {/if}

{/block}



{* Footer *}
{block name="frontend_index_footer"}

{block name='frontend_index_prefooter'}
{include file='frontend/index/prefooter.tpl'}
{/block}



    {block name='frontend_index_newsletter'}
        {if $theme.show_newsletter_box}
            {include file='frontend/index/main-newsletter.tpl'}
        {/if}
    {/block}

    <footer class="footer-main">
        <div class="container">
            {block name="frontend_index_footer_container"}
                {include file='frontend/index/footer.tpl'}
            {/block}
        </div>
        {block name="frontend_index_footer_bottom"}
            {include file='frontend/index/footer-bottom.tpl'}
        {/block}

    </footer>
{/block}