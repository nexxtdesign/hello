 {** Check if USP is active for Footer **}
 {if $theme.usp_settings_show_footer}
 

<div class="container">
 {if $theme.usp_settings_show}
        <div class="bottom-bar--usp center">
            <ul class="usp--inner">
                {if $theme.custom_theme_usp_1}
                    <li class="usp--item">
                        <i class="icon{if $theme.custom_theme_usp_1_icon} {$theme.custom_theme_usp_1_icon}{else} icon--check{/if}"></i> <span>{s name="sIndexTopbarShipping" namespace="frontend/index/topbar"}Kostenlose Lieferung ab 50€{/s}</span>
                    </li>
                {/if}
                {if $theme.custom_theme_usp_2}
                    <li class="usp--item">
                        <i class="icon{if $theme.custom_theme_usp_2_icon} {$theme.custom_theme_usp_2_icon}{else} icon--check{/if}"></i> <span>{s name="sIndexTopbarReturn" namespace="frontend/index/topbar"}30 Tage Rückgaberecht{/s}</span>
                    </li>
                {/if}
                {if $theme.custom_theme_usp_3}
                    <li class="usp--item">
                        <i class="icon{if $theme.custom_theme_usp_3_icon} {$theme.custom_theme_usp_3_icon}{else} icon--check{/if}"></i> <span>{s name="sIndexTopbarShipping2" namespace="frontend/index/topbar"}Schnelle Lieferung{/s}</span>
                    </li>
                {/if}
                {if $theme.custom_theme_usp_4}
                    <li class="usp--item">
                        <i class="icon{if $theme.custom_theme_usp_4_icon} {$theme.custom_theme_usp_4_icon}{else} icon--check{/if}"></i> <span>{s name="sIndexTopbarInvoice" namespace="frontend/index/topbar"}Kauf auf Rechnung{/s}</span>
                    </li>
                {/if}
            </ul>
        </div>
    {/if}
</div>

{/if}