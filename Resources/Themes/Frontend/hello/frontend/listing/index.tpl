{extends file="parent:frontend/listing/index.tpl"}

{block name='frontend_index_content_main'}
    {$hasTeaser = $sCategoryContent.media}

    {if $sCategoryContent.cmsheadline}
        <section class="hero--headline-section{if $hasTeaser} has--background-img{/if}"{if $hasTeaser} style="background-image: url({link file={$sCategoryContent.media.path}});"{/if}>
            <div class="container">
                <h1 class="hero--headline center">{$sCategoryContent.cmsheadline}</h1>
            </div>
        </section>
    {/if}
    {$smarty.block.parent}
{/block}