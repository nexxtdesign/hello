{namespace name="frontend/index/menu_footer"}

<section class="newsletter-main">
    <div class="container">
        {block name="frontend_index_footer_column_newsletter_headline"}
            <h3>{s name="sFooterNewsletterHead"}{/s}</h3>
        {/block}

        {block name="frontend_index_footer_column_newsletter_content"}

            <p>{s name="sFooterNewsletter"}{/s}</p>

                {block name="frontend_index_footer_column_newsletter_form"}
                    <form class="newsletter--form" action="{url controller='newsletter'}" method="post">
                        <input type="hidden" value="1" name="subscribeToNewsletter" />

                        {block name="frontend_index_footer_column_newsletter_form_field"}
                            <input type="email" name="newsletter" class="newsletter--field" placeholder="{s name="IndexFooterNewsletterValue"}{/s}" />
                            {if {config name="newsletterCaptcha"} !== "nocaptcha"}
                                <input type="hidden" name="redirect">
                            {/if}
                        {/block}

                        {block name="frontend_index_footer_column_newsletter_form_submit"}
                            <button type="submit" class="newsletter--button btn is--primary">
                                <i class="icon icon--mail"></i>
                            </button>
                        {/block}
                    </form>
                {/block}
        {/block}
    </div>
</section>
