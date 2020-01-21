<?php
namespace Shopware\Themes\hello;

use Shopware\Components\Form as Form;

class Theme extends \Shopware\Components\Theme
{
    /** @var string Defines the parent theme */
    protected $extend = 'Responsive';

    /** @var string Defines the human readable name */
    protected $name = 'hello';

    /** @var string Description of the theme */
    protected $description = 'Dein indivualisierbares Allround-Shopware-Theme';

    /** @var string The author of the theme */
    protected $author = 'nexxtdesign';

    /** @var string License of the theme */
    protected $license = 'Proprietary';

    protected $injectBeforePlugins = false;

    protected $inheritanceConfig = false;

    /** @var array Defines the files which should be compiled by the javascript compressor */
    protected $javascript = array(
        'src/js/hello.js',
        'src/js/jquery.sticky-header.js'
    );

    private $fieldSetDefaults = [
        'layout' => 'column',
        'height' => 170,
        'flex' => 0,
        'defaults' => [
            'columnWidth' => 0.5,
            'labelWidth' => 180,
            'margin' => '3 16 3 0'
        ]
    ];

    // Neuen Tab anlegen
    public function createConfig(Form\Container\TabContainer $container)
    {
        $container->addTab($this->createLogoTab());
        $container->addTab($this->createMainConfigTab());

        $tab = $this->createTab(
            'custom_theme_settings',
            '__custom_theme_settings__'
        );

        $container->addTab($tab);
        $tab->addElement($this->themeTabPanel());
    }

    public function themeTabPanel()
    {
        $tabPanel = $this->createTabPanel(
            'theme_tab_panel',
            [
                'attributes' => [
                    'plain' => true
                ]
            ]
        );

        //Creates the Tabs inside the Tab Panel
        $tabPanel->addTab($this->createColorsTab());
        $tabPanel->addTab($this->themeBasicSettings());
        $tabPanel->addTab($this->themeFooterSettings());
        $tabPanel->addTab($this->themeUspSettings());

        return $tabPanel;
    }

    private function createColorsTab()
    {
        $tab = $this->createTab(
            'general_tab',
            '__responsive_colors__',
            [
                'attributes' => [
                    'autoScroll' => true,
                ],
            ]
        );


        $attributes = array_merge($this->fieldSetDefaults, ['height' => 160]);
        $basicFieldSet = $this->createFieldSet(
            'basic_field_set',
            '__responsive_tab_general_fieldset_base__',
            ['attributes' => $attributes]
        );

        $basicFieldSet->addElement(
            $this->createColorPickerField(
                'brand-primary',
                '@brand-primary',
                '#BF3137'
            )
        );
        $basicFieldSet->addElement(
            $this->createColorPickerField(
                'brand-primary-dark',
                '@brand-primary-dark',
                '#89161E'
            )
        );
        $basicFieldSet->addElement(
            $this->createColorPickerField(
                'brand-primary-light',
                '@brand-primary-light',
                'saturate(lighten(@brand-primary,12%), 5%)'
            )
        );
        $basicFieldSet->addElement(
            $this->createColorPickerField(
                'brand-secondary',
                '@brand-secondary',
                '#303030'
            )
        );
        $basicFieldSet->addElement(
            $this->createColorPickerField(
                'brand-secondary-dark',
                '@brand-secondary-dark',
                '#0A0A0A'
            )
        );
        $basicFieldSet->addElement(
            $this->createColorPickerField(
                'produkt-box-image-bg',
                '@produkt-box-image-bg',
                '@gray-light'
            )
        );


        $attributes = array_merge($this->fieldSetDefaults, ['height' => 130]);
        $fieldSetGrey = $this->createFieldSet(
            'grey_tones',
            '__responsive_tab_general_fieldset_grey__',
            ['attributes' => $attributes]
        );

        $fieldSetGrey->addElement(
            $this->createColorPickerField(
                'gray',
                '@gray',
                '#F3F3F3'
            )
        );
        $fieldSetGrey->addElement(
            $this->createColorPickerField(
                'gray-light',
                '@gray-light',
                'lighten(@gray, 1%)'
            )
        );
        $fieldSetGrey->addElement(
            $this->createColorPickerField(
                'gray-dark',
                '@gray-dark',
                '@brand-secondary'
            )
        );
        $fieldSetGrey->addElement(
            $this->createColorPickerField(
                'border-color',
                '@border-color',
                '@gray'
            )
        );

        $tab->addElement($basicFieldSet);
        $tab->addElement($fieldSetGrey);

        $attributes = array_merge($this->fieldSetDefaults, ['height' => 130]);
        $fieldSetHighlights = $this->createFieldSet(
            'highlight_colors',
            '__responsive_tab_general_fieldset_highlight__',
            ['attributes' => $attributes]
        );

        $fieldSetHighlights->addElement(
            $this->createColorPickerField(
                'highlight-success',
                '@highlight-success',
                '#2ECC71'
            )
        );
        $fieldSetHighlights->addElement(
            $this->createColorPickerField(
                'highlight-error',
                '@highlight-error',
                '#BF3137'
            )
        );
        $fieldSetHighlights->addElement(
            $this->createColorPickerField(
                'highlight-notice',
                '@highlight-notice',
                '#F1C40F'
            )
        );
        $fieldSetHighlights->addElement(
            $this->createColorPickerField(
                'highlight-info',
                '@highlight-info',
                '#4AA3DF'
            )
        );

        $tab->addElement($fieldSetHighlights);

        $attributes = array_merge($this->fieldSetDefaults, ['height' => 220]);
        $fieldSetScaffolding = $this->createFieldSet(
            'scaffolding',
            '__responsive_tab_general_fieldset_scaffolding__',
            ['attributes' => $attributes]
        );

        $fieldSetScaffolding->addElement(
            $this->createColorPickerField(
                'body-bg',
                '@body-bg',
                '#ffffff'
            )
        );
        $fieldSetScaffolding->addElement(
            $this->createColorPickerField(
                'text-color',
                '@text-color',
                '@brand-secondary'
            )
        );
        $fieldSetScaffolding->addElement(
            $this->createColorPickerField(
                'text-color-dark',
                '@text-color-dark',
                '@brand-secondary-dark'
            )
        );
        $fieldSetScaffolding->addElement(
            $this->createColorPickerField(
                'link-color',
                '@link-color',
                '@brand-primary'
            )
        );
        $fieldSetScaffolding->addElement(
            $this->createColorPickerField(
                'link-hover-color',
                '@link-hover-color',
                '@brand-primary-light'
            )
        );
        $fieldSetScaffolding->addElement(
            $this->createColorPickerField(
                'rating-star-color',
                '@rating-star-color',
                '@highlight-notice'
            )
        );
        $fieldSetScaffolding->addElement(
            $this->createColorPickerField(
                'overlay-bg',
                '@overlay-bg',
                '@brand-secondary-dark'
            )
        );
        $fieldSetScaffolding->addElement(
            $this->createColorPickerField(
                'overlay-theme-dark-bg',
                '@overlay-theme-dark-bg',
                '@overlay-bg'
            )
        );
        $fieldSetScaffolding->addElement(
            $this->createColorPickerField(
                'overlay-theme-light-bg',
                '@overlay-theme-light-bg',
                '#FFFFFF'
            )
        );
        $fieldSetScaffolding->addElement(
            $this->createColorPickerField(
                'overlay-opacity',
                '@overlay-opacity',
                '0.7'
            )
        );

        $tab->addElement($fieldSetScaffolding);

        return $tab;
    }

    //Theme Basic Setting Tab
    public function themeBasicSettings()
    {

        // Create the Tab
        $tab = $this->createTab(
            'theme_settings_tab',
            '__theme_settings_tab__',
            array(
                'attributes' => array(
                    'layout' => 'anchor',
                    'flex' => 0,
                    'autoScroll' => true,
                )
            )
        );

        $tab->addElement($this->themeLogoPositionFieldset());
        $tab->addElement($this->themeFontSettingsFieldset());
        $tab->addElement($this->themeStickyHeaderFieldset());
        $tab->addElement($this->themeNewsletterFieldset());
        $tab->addElement($this->themeBreadcrumbFieldset());

        return $tab;
    }
    public function themeLogoPositionFieldset()
    {

        $fieldset = $this->createFieldSet(
            'logo_position',
            '__logo_position__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 200,
                        'margin' => '5 15 5 0'
                    )
                )
            )
        );

        $fieldset->addElement(
            $this->createSelectField(
                'logo_position',
                '__logo_position__',
                'left',
                [
                    ['value' => 'center', 'text' => '__logo_position_center__'],
                    ['value' => 'left', 'text' => '__logo_position_left__'],
                ],
                [
                    'attributes' =>
                        [
                            'lessCompatible' => false,
                            'multiSelect' => false,
                            'columnWidth' => 1
                        ]
                ]
            )
        );

        return $fieldset;
    }
    public function themeFontSettingsFieldset()
    {

        $fieldset = $this->createFieldSet(
            'font_settings',
            '__font_settings__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 200,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );

        //Font Basic
        $fontBase = $this->createTextField(
            "custom-theme-font-base",
            "__custom_theme_font_base__",
            '"Poppins", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;'
        );

        //Font Headline
        $fontHeadline = $this->createTextField(
            "custom-theme-font-headline",
            "__custom_theme_font_headline__",
            '"Poppins", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;'
        );

        //Font Navigation
        $fontNavigation = $this->createTextField(
            "custom-theme-font-navigation",
            "__custom_theme_font_navigation__",
            '"Poppins", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;'
        );

        //Font Button
        $fontButton = $this->createTextField(
            "custom-theme-font-btn",
            "__custom_theme_font_btn__",
            '"Poppins", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;'
        );

        $fontBaseSize = $this->createTextField(
            'font-size-base',
            '@font-size-base',
            '14'
        );

        $fontBaseWeight = $this->createTextField(
            'font-base-weight',
            '@font-base-weight',
            '400'
        );

        $fontLightWeight = $this->createTextField(
            'font-light-weight',
            '@font-light-weight',
            '300'
        );

        $fontBoldWeight = $this->createTextField(
            'font-bold-weight',
            '@font-bold-weight',
            '700'
        );

        $fieldset->addElement($fontBaseSize);
        $fieldset->addElement($fontBaseWeight);
        $fieldset->addElement($fontLightWeight);
        $fieldset->addElement($fontBoldWeight);
        $fieldset->addElement($fontBase);
        $fieldset->addElement($fontHeadline);
        $fieldset->addElement($fontNavigation);
        $fieldset->addElement($fontButton);

        return $fieldset;
    }
    public function themeStickyHeaderFieldset()
    {

        $fieldset = $this->createFieldSet(
            'stickyheader_settings',
            '__stickyheader_settings__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 200,
                        'margin' => '5 15 5 0'
                    )
                )
            )
        );

        $fieldset->addElement(
            $this->createCheckboxField(
                'activate_stickyheader',
                '__activate_stickyheader__',
                true,
                [
                    'attributes' =>
                        [
                            'lessCompatible' => false,
                            'columnWidth' => 1
                        ]
                ]
            )
        );

        return $fieldset;
    }
    public function themeNewsletterFieldset()
    {

        $fieldset = $this->createFieldSet(
            'newsletter_settings',
            '__newsletter_settings__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 200,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );

        $fieldset->addElement(
            $this->createCheckboxField(
                'show_newsletter_box',
                '__show_newsletter_box__',
                true,
                [
                    'attributes' =>
                        [
                            'lessCompatible' => false,
                            'columnWidth' => 1
                        ]
                ]
            )
        );

        return $fieldset;
    }
    public function themeBreadcrumbFieldset()
    {

        $fieldset = $this->createFieldSet(
            'breadcrumb_settings',
            '__breadcrumb_settings__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 200,
                        'margin' => '5 15 5 0'
                    )
                )
            )
        );

        $fieldset->addElement(
            $this->createCheckboxField(
                'activate_breadcrumb',
                '__activate_breadcrumb__',
                true,
                [
                    'attributes' =>
                        [
                            'lessCompatible' => false,
                            'columnWidth' => 1
                        ]
                ]
            )
        );

        return $fieldset;
    }

    //Footer Tab
    public function themeFooterSettings()
    {

        // Create the Tab
        $tab = $this->createTab(
            'footer_settings_tab',
            '__footer_settings_tab__',
            array(
                'attributes' => array(
                    'layout' => 'anchor',
                    'flex' => 0,
                    'autoScroll' => true,
                )
            )
        );
        $tab->addElement($this->themeFooterColorFieldset());
        $tab->addElement($this->themeSocialSettingsFieldset());
        $tab->addElement($this->themeShippingSettingsFieldset());
        $tab->addElement($this->themePaymentSettingsFieldset());

        return $tab;
    }
    public function themeFooterColorFieldset()
    {

        $fieldset = $this->createFieldSet(
            'footer_color_settings',
            '__footer_color_settings__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 200,
                        'margin' => '5 15 5 0'
                    )
                )
            )
        );

        $footerColor = $this->createColorPickerField(
            'footer-color',
            '@footer-color',
            '#ffffff'
        );
        $footerBackground = $this->createColorPickerField(
            'footer-background',
            '@footer-background',
            '@brand-secondary-dark'
        );

        $fieldset->addElement($footerColor);
        $fieldset->addElement($footerBackground);

        return $fieldset;
    }
    public function themeSocialSettingsFieldset()
    {

        $fieldset = $this->createFieldSet(
            'social_settings',
            '__social_settings__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 200,
                        'margin' => '5 15 5 0'
                    )
                )
            )
        );

        $fieldset->addElement(
            $this->createCheckboxField(
                'social_settings_show',
                '__social_settings_show__',
                false,
                [
                    'attributes' =>
                        [
                            'lessCompatible' => false,
                            'columnWidth' => 1
                        ]
                ]
            )
        );

        //Facebook
        $socialFacebook = $this->createTextField(
            "social_settings_facebook",
            "__social_settings_facebook__",
            'https://facebook.com/',
            ['attributes' => ['lessCompatible' => false]]
        );

        //Twitter
        $socialTwitter = $this->createTextField(
            "social_settings_twitter",
            "__social_settings_twitter__",
            'https://twitter.com/',
            ['attributes' => ['lessCompatible' => false]]
        );

        //Instagram
        $socialInstagram = $this->createTextField(
            "social_settings_instagram",
            "__social_settings_instagram__",
            'https://instagram.com/',
            ['attributes' => ['lessCompatible' => false]]
        );

        //Pinterest
        $socialPinterest = $this->createTextField(
            "social_settings_pinterest",
            "__social_settings_pinterest__",
            'https://pinterest.com/',
            ['attributes' => ['lessCompatible' => false]]
        );

        $fieldset->addElement($socialFacebook);
        $fieldset->addElement($socialTwitter);
        $fieldset->addElement($socialInstagram);
        $fieldset->addElement($socialPinterest);

        return $fieldset;
    }
    public function themeShippingSettingsFieldset()
    {
        $fieldset = $this->createFieldSet(
            'shipping_settings',
            '__shipping_settings__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 200,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );

        $fieldset->addElement(
            $this->createCheckboxField(
                'show_dhl',
                'DHL',
                true,
                [
                    'attributes' =>
                        [
                            'lessCompatible' => false,
                            'columnWidth' => 1
                        ]
                ]
            )
        );
        $fieldset->addElement(
            $this->createCheckboxField(
                'show_hermes',
                'Hermes',
                true,
                [
                    'attributes' =>
                        [
                            'lessCompatible' => false,
                            'columnWidth' => 1
                        ]
                ]
            )
        );
        $fieldset->addElement(
            $this->createCheckboxField(
                'show_post',
                'Deutsche Post',
                true,
                [
                    'attributes' =>
                        [
                            'lessCompatible' => false,
                            'columnWidth' => 1
                        ]
                ]
            )
        );
        $fieldset->addElement(
            $this->createCheckboxField(
                'show_ups',
                'UPS',
                true,
                [
                    'attributes' =>
                        [
                            'lessCompatible' => false,
                            'columnWidth' => 1
                        ]
                ]
            )
        );

        return $fieldset;
    }
    public function themePaymentSettingsFieldset()
    {
        $fieldset = $this->createFieldSet(
            'payment_settings',
            '__payment_settings__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 200,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );

        $fieldset->addElement(
            $this->createCheckboxField(
                'show_amazon',
                'Amazon',
                true,
                [
                    'attributes' =>
                        [
                            'lessCompatible' => false,
                            'columnWidth' => 1
                        ]
                ]
            )
        );
        $fieldset->addElement(
            $this->createCheckboxField(
                'show_mastercard',
                'Mastercard',
                true,
                [
                    'attributes' =>
                        [
                            'lessCompatible' => false,
                            'columnWidth' => 1
                        ]
                ]
            )
        );
        $fieldset->addElement(
            $this->createCheckboxField(
                'show_paypal',
                'PayPal',
                true,
                [
                    'attributes' =>
                        [
                            'lessCompatible' => false,
                            'columnWidth' => 1
                        ]
                ]
            )
        );
        $fieldset->addElement(
            $this->createCheckboxField(
                'show_sofort',
                'Sofort',
                true,
                [
                    'attributes' =>
                        [
                            'lessCompatible' => false,
                            'columnWidth' => 1
                        ]
                ]
            )
        );
        $fieldset->addElement(
            $this->createCheckboxField(
                'show_visa',
                'Visa',
                true,
                [
                    'attributes' =>
                        [
                            'lessCompatible' => false,
                            'columnWidth' => 1
                        ]
                ]
            )
        );
        $fieldset->addElement(
            $this->createCheckboxField(
                'show_vorkasse',
                'Vorkasse',
                true,
                [
                    'attributes' =>
                        [
                            'lessCompatible' => false,
                            'columnWidth' => 1
                        ]
                ]
            )
        );

        return $fieldset;
    }

    //USP Leiste Tab
    public function themeUspSettings()
    {

        // Create the Tab
        $tab = $this->createTab(
            'usp_settings_tab',
            '__usp_settings_tab__',
            array(
                'attributes' => array(
                    'layout' => 'anchor',
                    'flex' => 0,
                    'autoScroll' => true,
                )
            )
        );

        $tab->addElement($this->themeUspSettingsFieldset());
        $tab->addElement($this->themeUspColorFieldset());

        return $tab;
    }
    public function themeUspColorFieldset()
    {

        $fieldset = $this->createFieldSet(
            'usp_color_settings',
            '__usp_color_settings__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 200,
                        'margin' => '5 15 5 0'
                    )
                )
            )
        );

        $uspColor = $this->createColorPickerField(
            'topbar-color',
            '@topbar-color',
            '#ffffff'
        );
        $uspBackground = $this->createColorPickerField(
            'topbar-background',
            '@topbar-background',
            '@brand-secondary-dark'
        );

        $fieldset->addElement($uspColor);
        $fieldset->addElement($uspBackground);

        return $fieldset;
    }
    public function themeUspSettingsFieldset()
    {

        $fieldset = $this->createFieldSet(
            'usp_settings',
            '__usp_settings__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 200,
                        'margin' => '5 15 5 0'
                    )
                )
            )
        );

        $fieldset->addElement(
            $this->createCheckboxField(
                'usp_settings_show',
                '__usp_settings_show__',
                true,
                [
                    'attributes' =>
                        [
                            'lessCompatible' => false,
                            'columnWidth' => 1
                        ]
                ]
            )
        );
        
        // SHOW USPs in Footer
        $fieldset->addElement(
            $this->createCheckboxField(
                'usp_settings_show_footer',
                '__usp_settings_show_footer__',
                true,
                [
                    'attributes' =>
                        [
                            'lessCompatible' => false,
                            'columnWidth' => 1
                        ]
                ]
            )
        );




        $fieldset->addElement(
            $this->createCheckboxField(
                'usp_settings_show_cart',
                '__usp_settings_show_cart__',
                true,
                [
                    'attributes' =>
                        [
                            'lessCompatible' => false,
                            'columnWidth' => 1
                        ]
                ]
            )
        );

        $usp1_icon = $this->createTextField(
            "custom_theme_usp_1_icon",
            "USP 1 Icon",
            'icon--tag',
            ['attributes' => ['lessCompatible' => false]]
        );

        $usp1 = $this->createCheckboxField(
            "custom_theme_usp_1",
            "USP 1",
            true,
            ['attributes' => ['lessCompatible' => false]]
        );

        $usp2_icon = $this->createTextField(
            "custom_theme_usp_2_icon",
            "USP 2 Icon",
            'icon--clock',
            ['attributes' => ['lessCompatible' => false]]
        );

        $usp2 = $this->createCheckboxField(
            "custom_theme_usp_2",
            "USP 2",
            true,
            ['attributes' => ['lessCompatible' => false]]
        );

        $usp3_icon = $this->createTextField(
            "custom_theme_usp_3_icon",
            "USP 3 Icon",
            'icon--truck',
            ['attributes' => ['lessCompatible' => false]]
        );

        $usp3 = $this->createCheckboxField(
            "custom_theme_usp_3",
            "USP 3",
            true,
            ['attributes' => ['lessCompatible' => false]]
        );

        $usp4_icon = $this->createTextField(
            "custom_theme_usp_4_icon",
            "USP 4 Icon",
            'icon--text',
            ['attributes' => ['lessCompatible' => false]]
        );

        $usp4 = $this->createCheckboxField(
            "custom_theme_usp_4",
            "USP 4",
            true,
            ['attributes' => ['lessCompatible' => false]]
        );

        $fieldset->addElement($usp1_icon);
        $fieldset->addElement($usp1);
        $fieldset->addElement($usp2_icon);
        $fieldset->addElement($usp2);
        $fieldset->addElement($usp3_icon);
        $fieldset->addElement($usp3);
        $fieldset->addElement($usp4_icon);
        $fieldset->addElement($usp4);

        return $fieldset;
    }


    public function createLogoTab()
    {
        $tab = $this->createTab(
            'bareMain',
            '__bare_tab_header__',
            [
                'attributes' => [
                    'layout' => 'anchor',
                    'autoScroll' => true,
                    'padding' => '0',
                    'defaults' => ['anchor' => '100%'],
                ],
            ]
        );

        $fieldSet = $this->createFieldSet(
            'bareLogos',
            '__logos__',
            [
                'attributes' => [
                    'padding' => '10',
                    'margin' => '5',
                    'layout' => 'anchor',
                    'defaults' => ['labelWidth' => 155, 'anchor' => '100%'],
                ],
            ]
        );

        $fieldSet->addElement(
            $this->createMediaField(
                'mobileLogo',
                '__smartphone__',
                'frontend/_public/src/img/logos/logo.svg',
                ['attributes' => ['lessCompatible' => false]]
            )
        );

        $fieldSet->addElement(
            $this->createMediaField(
                'tabletLogo',
                '__tablet__',
                'frontend/_public/src/img/logos/logo.svg',
                ['attributes' => ['lessCompatible' => false]]
            )
        );

        $fieldSet->addElement(
            $this->createMediaField(
                'tabletLandscapeLogo',
                '__tablet_landscape__',
                'frontend/_public/src/img/logos/logo.svg',
                ['attributes' => ['lessCompatible' => false]]
            )
        );

        $fieldSet->addElement(
            $this->createMediaField(
                'desktopLogo',
                '__desktop__',
                'frontend/_public/src/img/logos/logo.svg',
                ['attributes' => ['lessCompatible' => false]]
            )
        );

        $tab->addElement($fieldSet);

        $fieldSet = $this->createFieldSet(
            'Icons',
            '__icons__',
            [
                'attributes' => [
                    'padding' => '10',
                    'margin' => '5',
                    'layout' => 'anchor',
                    'defaults' => ['labelWidth' => 155, 'anchor' => '100%'],
                ],
            ]
        );

        $fieldSet->addElement(
            $this->createMediaField(
                'appleTouchIcon',
                '__apple_touch_icon__',
                'frontend/_public/src/img/apple-touch-icon-precomposed.png',
                ['attributes' => ['lessCompatible' => false]]
            )
        );

        $fieldSet->addElement(
            $this->createCheckboxField(
                'setPrecomposed',
                'Precomposed Icon',
                true,
                $this->getLabelAttribute(
                    'apple_touch_icon_precomposed'
                )
            )
        );

        $fieldSet->addElement(
            $this->createMediaField(
                'win8TileImage',
                '__win8_tile_image__',
                'frontend/_public/src/img/win-tile-image.png',
                ['attributes' => ['lessCompatible' => false]]
            )
        );

        $fieldSet->addElement(
            $this->createMediaField(
                'favicon',
                '__favicon__',
                'frontend/_public/src/img/favicon.ico',
                ['attributes' => ['lessCompatible' => false]]
            )
        );

        $tab->addElement($fieldSet);

        return $tab;

    }
    public function createMainConfigTab()
    {
        $tab = $this->createTab(
            'responsiveMain',
            '__responsive_tab_header__',
            [
                'attributes' => [
                    'layout' => 'anchor',
                    'autoScroll' => true,
                    'padding' => '0',
                    'defaults' => ['anchor' => '100%'],
                ],
            ]
        );

        $fieldSet = $this->createFieldSet(
            'bareGlobal',
            '__global_configuration__',
            [
                'attributes' => [
                    'padding' => '10',
                    'margin' => '5',
                    'layout' => 'anchor',
                    'defaults' => ['labelWidth' => 155, 'anchor' => '100%'],
                ],
            ]
        );

        $fieldSet->addElement(
            $this->createCheckboxField(
                'offcanvasCart',
                '__offcanvas_cart__',
                true,
                $this->getLabelAttribute(
                    'offcanvas_cart_description'
                )
            )
        );

        $fieldSet->addElement(
            $this->createCheckboxField(
                'offcanvasOverlayPage',
                '__offcanvas_move_method__',
                true,
                $this->getLabelAttribute(
                    'offcanvas_move_method_description'
                )
            )
        );

        $fieldSet->addElement(
            $this->createCheckboxField(
                'focusSearch',
                '__focus_search__',
                false,
                $this->getLabelAttribute(
                    'focus_search_description'
                )
            )
        );

        $fieldSet->addElement(
            $this->createCheckboxField(
                'displaySidebar',
                '__display_sidebar__',
                true,
                $this->getLabelAttribute(
                    'display_sidebar_description'
                )
            )
        );

        $fieldSet->addElement(
            $this->createCheckboxField(
                'sidebarFilter',
                '__show_filter_in_sidebar__',
                false,
                $this->getLabelAttribute(
                    'show_filter_in_sidebar_description'
                )
            )
        );

        $fieldSet->addElement(
            $this->createCheckboxField(
                'checkoutHeader',
                '__checkout_header__',
                true,
                $this->getLabelAttribute(
                    'checkout_header_description'
                )
            )
        );

        $fieldSet->addElement(
            $this->createCheckboxField(
                'checkoutFooter',
                '__checkout_footer__',
                true,
                $this->getLabelAttribute(
                    'checkout_footer_description'
                )
            )
        );

        $fieldSet->addElement(
            $this->createCheckboxField(
                'infiniteScrolling',
                '__enable_infinite_scrolling__',
                true,
                $this->getLabelAttribute(
                    'enable_infinite_scrolling_description'
                )
            )
        );

        $fieldSet->addElement(
            $this->createNumberField(
                'infiniteThreshold',
                '__infinite_threshold__',
                4,
                $this->getLabelAttribute(
                    'infinite_threshold_description',
                    'supportText'
                )
            )
        );

        $fieldSet->addElement(
            $this->createSelectField(
                'lightboxZoomFactor',
                '__lightbox_zoom_factor__',
                0,
                [
                    ['value' => 0, 'text' => '__lightbox_zoom_factor_auto__'],
                    ['value' => 1, 'text' => '__lightbox_zoom_factor_none__'],
                    ['value' => 2, 'text' => '__lightbox_zoom_factor_2x__'],
                    ['value' => 3, 'text' => '__lightbox_zoom_factor_3x__'],
                    ['value' => 5, 'text' => '__lightbox_zoom_factor_5x__'],
                ],
                $this->getLabelAttribute(
                    'lightbox_zoom_factor_description',
                    'supportText'
                )
            )
        );

        $fieldSet->addElement(
            $this->createTextField(
                'appleWebAppTitle',
                '__apple_web_app_title__',
                '',
                ['attributes' => ['lessCompatible' => false]]
            )
        );

        $fieldSet->addElement(
            $this->createCheckboxField(
                'ajaxVariantSwitch',
                '__ajax_variant_switch__',
                true,
                ['attributes' => [
                    'lessCompatible' => false,
                    'boxLabel' => Shopware()->Snippets()->getNamespace('themes/bare/backend/config')->get('ajax_variant_switch_description'),
                ]]
            )
        );

        $fieldSet->addElement(
            $this->createCheckboxField(
                'asyncJavascriptLoading',
                '__async_javascript_loading__',
                true,
                ['attributes' => [
                    'lessCompatible' => false,
                    'boxLabel' => Shopware()->Snippets()->getNamespace('themes/bare/backend/config')->get('async_javascript_loading_description'),
                ]]
            )
        );

        $tab->addElement($fieldSet);

        $fieldSet = $this->createFieldSet(
            'responsiveGlobal',
            '__advanced_settings__',
            [
                'attributes' => [
                    'padding' => '10',
                    'margin' => '5',
                    'layout' => 'anchor',
                    'defaults' => ['anchor' => '100%', 'labelWidth' => 155],
                ],
            ]
        );

        $fieldSet->addElement(
            $this->createTextAreaField(
                'additionalCssData',
                '__additional_css_data__',
                '',
                ['attributes' => ['xtype' => 'textarea', 'lessCompatible' => false], 'help' => '__additional_css_data_description__']
            )
        );

        $fieldSet->addElement(
            $this->createTextAreaField(
                'additionalJsLibraries',
                '__additional_js_libraries__',
                '',
                ['attributes' => ['xtype' => 'textarea', 'lessCompatible' => false], 'help' => '__additional_js_libraries_description__']
            )
        );

        $tab->addElement($fieldSet);

        return $tab;
    }

    /**
     * Helper function to get the attribute of a checkbox field which shows a description label.
     *
     * @param $snippetName
     *
     * @return array
     */
    public function getLabelAttribute($snippetName, $labelType = 'boxLabel')
    {
        $description = Shopware()->Snippets()->getNamespace('themes/bare/backend/config')->get($snippetName);

        return ['attributes' => [$labelType => $description]];
    }

}