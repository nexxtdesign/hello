{extends file="parent:frontend/detail/content/buy_container.tpl"}


{block name="frontend_detail_rich_snippets_brand" prepend}
    <header class="product--header">
        {block name='frontend_detail_index_header_inner'}
            <div class="product--info">
                {block name='frontend_detail_index_product_info'}

                    {* Product name *}
                    {block name='frontend_detail_index_name'}
                        <h1 class="product--title" itemprop="name">
                            {$sArticle.articleName}
                        </h1>
                    {/block}

                    {* Product - Supplier information *}
                    {block name='frontend_detail_supplier_info'}
                        {if $sArticle.supplierImg}
                            <div class="product--supplier">
                                <a href="{url controller='listing' action='manufacturer' sSupplier=$sArticle.supplierID}"
                                   title="{"{s name="DetailDescriptionLinkInformation" namespace="frontend/detail/description"}{/s}"|escape}"
                                   class="product--supplier-link">
                                    <img src="{$sArticle.supplierImg}" alt="{$sArticle.supplierName|escape}">
                                </a>
                            </div>
                        {/if}
                    {/block}


					{block name="frontend_detail_index_configurator"}
					    {$smarty.block.parent}
					    <div class="product--delivery">
					    {if $sArticle.instock <= 10}
						<p class="delivery--information">
						<span class="delivery--text delivery--text-not-available">
						<i class="delivery--status-icon delivery--status-not-available"></i>
						Nur noch <b>{$sArticle.instock}X</b> verfügbar
						</span>
						</p>
					    {/if}
					    
					</div>
					{/block}   



                    {* Product rating *}
                    {block name="frontend_detail_comments_overview"}
                        {if !{config name=VoteDisable}}
                            <div class="product--rating-container">
                                <a href="#product--publish-comment" class="product--rating-link" rel="nofollow" title="{"{s namespace="frontend/detail/actions" name='DetailLinkReview'}{/s}"|escape}">
                                    {include file='frontend/_includes/rating.tpl' points=$sArticle.sVoteAverage.average type="aggregated" count=$sArticle.sVoteAverage.count}
                                </a>
                            </div>
                        {/if}
                    {/block}
                {/block}
            </div>
        {/block}
    </header>
{/block}