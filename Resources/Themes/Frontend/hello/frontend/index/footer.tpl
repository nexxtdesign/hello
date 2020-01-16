{extends file="parent:frontend/index/footer.tpl"}

{* Footer menu *}
{block name='frontend_index_footer_menu' prepend}


    {if $theme.social_settings_show}
        <div class="footer--social">
            <ul class="social--inner">
                {if $theme.social_settings_facebook}
                    <li class="social--item">
                        <a href="{$theme.social_settings_facebook}" target="_blank" rel="nofollow" class="social--item-link">
                            <i class="icon icon--facebook"></i>
                        </a>
                    </li>
                {/if}
                {if $theme.social_settings_twitter}
                    <li class="social--item">
                        <a href="{$theme.social_settings_twitter}" target="_blank" rel="nofollow" class="social--item-link">
                            <i class="icon icon--twitter"></i>
                        </a>
                    </li>
                {/if}
                {if $theme.social_settings_instagram}
                    <li class="social--item">
                        <a href="{$theme.social_settings_instagram}" target="_blank" rel="nofollow" class="social--item-link">
                            <i class="icon icon--instagram"></i>
                        </a>
                    </li>
                {/if}
                {if $theme.social_settings_pinterest}
                    <li class="social--item">
                        <a href="{$theme.social_settings_pinterest}" target="_blank" rel="nofollow" class="social--item-link">
                            <i class="icon icon--pinterest"></i>
                        </a>
                    </li>
                {/if}
            </ul>
        </div>
    {/if}



{* back to top *}
{block name="frontend_index_backtop_footer"}
{include file='frontend/index/backtop.tpl'}
{/block}



{/block}

{* Copyright in the footer *}
{block name='frontend_index_footer_copyright'}
{/block}




