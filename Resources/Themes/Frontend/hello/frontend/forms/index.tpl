{extends file="parent:frontend/forms/index.tpl"}

{* Breadcrumb *}
{block name='frontend_index_start'}
    {if !$theme.activate_breadcrumb}
        {$sBreadcrumb = [['name' => $sSupport.name, 'link' => {url controller=ticket sFid=$sSupport.id}]]}
        {$smarty.block.parent}
    {/if}
{/block}