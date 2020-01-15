{extends file="parent:frontend/detail/index.tpl"}
{* Product attributes fields *}
{block name='frontend_detail_data_attributes_attr1' prepend}
  {if $sArticle.ean}
      <li class="base-info--entry entry-attribute">
          <strong class="entry--label">
              EAN:
          </strong>

          <span class="entry--content">
              <meta itemprop="gtin13" content="{$sArticle.ean}"/>
              <span class="entry--content" itemprop="gtin13">
                  {$sArticle.ean}
              </span>
          </span>
      </li>
  {/if}
{/block}
