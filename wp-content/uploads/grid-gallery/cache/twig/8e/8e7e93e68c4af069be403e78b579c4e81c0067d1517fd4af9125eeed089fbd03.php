<?php

/* @galleries/settings.twig */
class __TwigTemplate_0facc3efc9b2ce9fb807864edf1a17649676c36bba7f54c1d45509e80365ce11 extends Twig_SupTwgSgg_Template
{
    public function __construct(Twig_SupTwgSgg_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@galleries/settings.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'tabs' => array($this, 'block_tabs'),
            'preview' => array($this, 'block_preview'),
            'figcaption_after' => array($this, 'block_figcaption_after'),
            'gallery_preview_figure_attributes' => array($this, 'block_gallery_preview_figure_attributes'),
            'gallery_preview_image_attributes' => array($this, 'block_gallery_preview_image_attributes'),
            'settginsFigCaption' => array($this, 'block_settginsFigCaption'),
            'content' => array($this, 'block_content'),
            'proHiddenSettings' => array($this, 'block_proHiddenSettings'),
            'area' => array($this, 'block_area'),
            'galleryTypeSelectorItems' => array($this, 'block_galleryTypeSelectorItems'),
            'openByLink' => array($this, 'block_openByLink'),
            'browserUrlTooltipHide' => array($this, 'block_browserUrlTooltipHide'),
            'disableRightClick' => array($this, 'block_disableRightClick'),
            'mosaicImagesCount' => array($this, 'block_mosaicImagesCount'),
            'mosaicGalleryImageCountText' => array($this, 'block_mosaicGalleryImageCountText'),
            'socialSharing' => array($this, 'block_socialSharing'),
            'horizontalScroll' => array($this, 'block_horizontalScroll'),
            'horizontalScrollAfter' => array($this, 'block_horizontalScrollAfter'),
            'border' => array($this, 'block_border'),
            'shadow' => array($this, 'block_shadow'),
            'popup' => array($this, 'block_popup'),
            'popupLinkedImageText' => array($this, 'block_popupLinkedImageText'),
            'disableSourceImageForLi' => array($this, 'block_disableSourceImageForLi'),
            'enableDownloadPhotosButton' => array($this, 'block_enableDownloadPhotosButton'),
            'popupAfter' => array($this, 'block_popupAfter'),
            'lazyload' => array($this, 'block_lazyload'),
            'preload' => array($this, 'block_preload'),
            'attributes' => array($this, 'block_attributes'),
            'additionalCaptionSettings' => array($this, 'block_additionalCaptionSettings'),
            'post' => array($this, 'block_post'),
            'captionSettingsType' => array($this, 'block_captionSettingsType'),
            'overlaySettings' => array($this, 'block_overlaySettings'),
            'backgroundImageForHoverEffect' => array($this, 'block_backgroundImageForHoverEffect'),
            'backgroundColorForShowOnHover' => array($this, 'block_backgroundColorForShowOnHover'),
            'icons' => array($this, 'block_icons'),
            'proCaptionAndIconSettings' => array($this, 'block_proCaptionAndIconSettings'),
            'exifCaptionSettings' => array($this, 'block_exifCaptionSettings'),
            'categories' => array($this, 'block_categories'),
            'pagination' => array($this, 'block_pagination'),
            'watermark' => array($this, 'block_watermark'),
            'form' => array($this, 'block_form'),
            'captionEffectInPro' => array($this, 'block_captionEffectInPro'),
            'iconsEffects' => array($this, 'block_iconsEffects'),
            'modals' => array($this, 'block_modals'),
            'icon_wrap_item_class' => array($this, 'block_icon_wrap_item_class'),
            'settingsOtherPro' => array($this, 'block_settingsOtherPro'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "grid-gallery.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["borderTypes"] = array("solid" => "Solid", "dotted" => "Dotted", "dashed" => "Dashed", "double" => "Double", "groove" => "Groove", "ridge" => "Ridge", "inset" => "Inset", "outset" => "Outset", "none" => "None");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        // line 19
        echo "    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\" style=\"float: left;\">";
        // line 40
        echo "        <a href=\"";
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 42
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute(($context["gallery"] ?? null), "id", array()))), "method"), "html", null, true);
        echo "\">";
        echo $this->getAttribute(($context["gallery"] ?? null), "title", array());
        echo "</a>
    </nav>

    <h2 class=\"form-tabs\">
        <a class=\"nav-tab change-tab\" href=\"area\">
            <i class=\"fa fa-home\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 48
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "</span>
        </a>

        <a class=\"nav-tab change-tab\" href=\"overlay\">
            <i class=\"fa fa-info\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 53
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Captions and icons")), "html", null, true);
        echo "</span>
        </a>

        <a class=\"nav-tab change-tab\" href=\"cats\">
            <i class=\"fa fa-bookmark-o\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 58
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categories and Pagination")), "html", null, true);
        echo "</span>
        </a>

        <a class=\"nav-tab change-tab\" href=\"post\">
            <i class=\"fa fa-columns\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 63
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Posts")), "html", null, true);
        echo "</span>
        </a>

        <a class=\"nav-tab change-tab\" href=\"water-m-tab\">
            <i class=\"fa fa-fw fa-certificate\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 68
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Watermark")), "html", null, true);
        echo "</span>
        </a>";
        // line 70
        $this->displayBlock('tabs', $context, $blocks);
        // line 71
        echo "    </h2>";
    }

    // line 70
    public function block_tabs($context, array $blocks = array())
    {
    }

    // line 74
    public function block_preview($context, array $blocks = array())
    {
        // line 75
        if ($this->getAttribute(($context["settings"] ?? null), "watermark", array(), "any", true, true)) {
            // line 76
            $context["settingsWatermark"] = Twig_SupTwgSgg_array_merge($this->getAttribute(($context["settings"] ?? null), "watermark", array()), array("galleryId" => $this->getAttribute(($context["gallery"] ?? null), "id", array())));
            // line 77
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_attachment_settings')->getCallable(), array("watermark", ($context["settingsWatermark"] ?? null))), "html", null, true);
        }
        // line 79
        $context["style"] = $this->loadTemplate("@galleries/shortcode/style.twig", "@galleries/settings.twig", 79);
        // line 80
        $context["attachment"] = $this->loadTemplate("@galleries/helpers/attachment.twig", "@galleries/settings.twig", 80);
        // line 81
        $context["form"] = $this->loadTemplate("@core/form.twig", "@galleries/settings.twig", 81);
        // line 83
        ob_start();
        // line 84
        $this->displayBlock('figcaption_after', $context, $blocks);
        $context["var_figcaption_after"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
        // line 88
        ob_start();
        // line 89
        echo "\t\t<div class=\"sggFigCaptionIconsEntry ggSettingsDisplNone

\t\t\thi-icon-wrap";
        // line 91
        echo " ";
        echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_slice($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "effect", array()), 0, (($context["length"] ?? null) - 1)), "html", null, true);
        echo " ";
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "effect", array()), "html", null, true);
        echo "\">";
        // line 93
        $context["videoIcon"] = ((Twig_SupTwgSgg_in_filter("youtu", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "photos", array()), 0, array(), "array"), "attachment", array()), "video", array()))) ? ("fa-youtube-play") : ("fa-vimeo"));
        // line 94
        ob_start();
        // line 95
        if ( !Twig_SupTwgSgg_test_empty($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "margin", array()))) {
            // line 96
            echo "\t\t\t\t\tmargin-left:";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "margin", array()), "html", null, true);
            echo "px;
\t\t\t\t\tmargin-right:";
            // line 97
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "margin", array()), "html", null, true);
            echo "px;";
        }
        $context["iconStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
        // line 100
        echo "\t\t\t<a href=\"#\" class=\"hi-icon gg-icon-video fa";
        echo " ";
        echo Twig_SupTwgSgg_escape_filter($this->env, ($context["videoIcon"] ?? null), "html", null, true);
        echo "\" style=\"";
        echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_trim_filter(($context["iconStyle"] ?? null)), "html", null, true);
        echo "\"></a>
\t\t\t<a href=\"#\" class=\"hi-icon gg-icon-link fa fa-link\" style=\"";
        // line 101
        echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_trim_filter(($context["iconStyle"] ?? null)), "html", null, true);
        echo "\"></a>
\t\t\t<a href=\"#\" class=\"hi-icon gg-icon-popup fa fa-expand\" style=\"";
        // line 102
        echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_trim_filter(($context["iconStyle"] ?? null)), "html", null, true);
        echo "\"></a>
            <a href=\"#\" class=\"hi-icon gg-icon-download fa fa-download\" style=\"";
        // line 103
        echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_trim_filter(($context["iconStyle"] ?? null)), "html", null, true);
        echo "\"></a>
\t\t</div>";
        $context["simpleIconsEntryVal"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
        // line 106
        echo "
    <div id=\"preview\" class=\"gallery-preview\">
        <section class=\"supsystic-bar-preview\" id=\"single-gallery-toolbar\">
            <ul class=\"supsystic-bar-controls\">";
        // line 117
        echo "
                <li title=\"";
        // line 118
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload new images")), "html", null, true);
        echo "\">
                    <button class=\"button button-primary gallery import-to-gallery\" data-gallery-id=\"";
        // line 119
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
        echo "\">
                        <i class=\"fa fa-fw fa-camera\"></i>";
        // line 121
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Images")), "html", null, true);
        echo "
                    </button>
                </li>

                <li>
                    <a class=\"button\"
                       href=\"";
        // line 127
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute(($context["gallery"] ?? null), "id", array()))), "method"), "html", null, true);
        echo "\">
                        <i class=\"fa fa-list fa-fw\"></i>";
        // line 129
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images list")), "html", null, true);
        echo "
                    </a>
                </li>

                <li>
                    <button class=\"button button-primary\" id=\"btnSave\">
                        <i class=\"fa fa-fw fa-check\"></i>";
        // line 136
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
        echo "
                    </button>
                </li>
            </ul>
        </section>";
        // line 141
        if ( !Twig_SupTwgSgg_test_empty($this->getAttribute(($context["gallery"] ?? null), "photos", array()))) {
            // line 142
            echo "                <img";
            // line 143
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "photos", array(), "any", false, true), 0, array(), "array", false, true), "attachment", array(), "any", false, true), "isRemoteImage", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "photos", array()), 0, array(), "array"), "attachment", array()), "isRemoteImage", array()) == 1))) {
                // line 144
                echo "                                src=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "photos", array()), 0, array(), "array"), "attachment", array()), "thumbUrl", array()), "html", null, true);
                echo "\"";
            } else {
                // line 146
                echo "                                    src=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "photos", array()), 0, array(), "array"), "attachment", array()), "id", array()), ($context["width"] ?? null), ($context["height"] ?? null), ($context["crop"] ?? null), ($context["cropQuality"] ?? null))), "html", null, true);
                echo "\"";
            }
            // line 148
            echo "                                data-src=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, ("holder.js/350x250?theme=simple&text=" . $this->getAttribute(($context["gallery"] ?? null), "title", array())), "html", null, true);
            echo "\" alt=\"";
            echo $this->getAttribute(($context["gallery"] ?? null), "title", array());
            echo "\"
                                style=\"width: auto;height:auto;max-width: 290px; max-height: 290px;\"
                />";
            // line 152
            if (false) {
                // line 153
                echo "                <div style=\"";
                // line 154
                if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "settings", array()), "area", array()), "photo_width_unit", array()) == 0) &&  !Twig_SupTwgSgg_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "settings", array()), "area", array()), "photo_width", array())))) {
                    // line 155
                    echo "                    width:";
                    echo Twig_SupTwgSgg_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "settings", array()), "area", array()), "photo_width", array()) + 40), "html", null, true);
                    echo "px;";
                }
                // line 157
                echo "                margin: 10px auto;
                max-width: 330px;
                clear:both;
                \">
                    <figure";
                // line 162
                $this->displayBlock('gallery_preview_figure_attributes', $context, $blocks);
                // line 168
                echo "                        >";
                // line 169
                list($context["width"], $context["height"], $context["crop"]) =                 array(0, 0, 0);
                // line 171
                if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()) == 0)) {
                    // line 172
                    $context["width"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array());
                }
                // line 175
                if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()) == 0)) {
                    // line 176
                    $context["height"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array());
                }
                // line 179
                if (((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 0) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "2")) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "3"))) {
                    // line 180
                    $context["crop"] = 1;
                } else {
                    // line 182
                    $context["height"] = 0;
                }
                // line 185
                if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) {
                    // line 186
                    $context["cropQuality"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "cropQuality", array());
                } else {
                    // line 188
                    $context["cropQuality"] = null;
                }
                // line 190
                echo "                        <img";
                // line 191
                $this->displayBlock('gallery_preview_image_attributes', $context, $blocks);
                // line 212
                echo "                            />";
                // line 213
                ob_start();
                // line 214
                echo "                            <figcaption style=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_trim_filter(($context["figcaptionStyle"] ?? null)), "html", null, true);
                echo "\">
                                <div style=\"display: table; height: 100%; width: 100%;\" class=\"sggFigcaptionCaptionWrapper\">
                                    <div class=\"grid-gallery-figcaption-wrap\" style=\"display: table-cell;\">
                                        <span";
                // line 217
                if (($this->getAttribute(($context["settings"] ?? null), "rtl", array()) == true)) {
                    echo "dir=\"rtl\" class=\"ggRtlClass\"";
                }
                echo ">Gallery by Supsystic</span>
                                    </div>
                                </div>";
                // line 220
                echo Twig_SupTwgSgg_escape_filter($this->env, ($context["simpleIconsEntryVal"] ?? null), "html", null, true);
                echo "
                            </figcaption>";
                // line 222
                echo Twig_SupTwgSgg_escape_filter($this->env, ($context["var_figcaption_after"] ?? null), "html", null, true);
                $context["figcaptionBlockFree"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
                // line 225
                $this->displayBlock('settginsFigCaption', $context, $blocks);
                // line 228
                echo "                    </figure>
                </div>";
            }
        } else {
            // line 232
            echo "                <div style=\"clear: both;\"></div>
                <h2 style=\"text-align: center;\">";
            // line 234
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("There're no images in the gallery.")), "html", null, true);
            echo "<br>
                    <a class=\"import-to-gallery\" href=\"#\">Add Images</a>
                </h2>";
        }
        // line 238
        echo "
        <div style=\"clear: both;\"></div>

        <div class=\"shortcode-wrap\" style=\"margin-top: 20px\">
\t\t\t<div class=\"shortcode\">";
        // line 242
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shortcode:")), "html", null, true);
        echo "
\t\t\t\t<input type=\"text\" id=\"shortcode\" class=\"gallery-shortcode\" value=\"[";
        // line 243
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "config", array()), "get", array(0 => "shortcode_name"), "method"), "html", null, true);
        echo " id=";
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
        echo "]\" onclick=\"this.select();\" size=\"42\" style=\"font-size: 12px;\" readonly>";
        // line 244
        echo $context["form"]->getshow_tooltip("sgg-shortcode");
        echo "
\t\t\t</div>
\t\t\t<div class=\"shortcode\">";
        // line 246
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("PHPCode:")), "html", null, true);
        echo "
\t\t\t\t<input type=\"text\" id=\"shortcode\" class=\"gallery-shortcode\" value=\"";
        // line 247
        echo Twig_SupTwgSgg_escape_filter($this->env, (("<?php echo do_shortcode('[supsystic-gallery id=" . $this->getAttribute(($context["gallery"] ?? null), "id", array())) . "]') ?>"), "html", null, true);
        echo "\" onclick=\"this.select();\" size=\"42\" style=\"font-size: 12px;\" readonly>";
        // line 248
        echo $context["form"]->getshow_tooltip("sgg-php-code");
        echo "
\t\t\t</div>
        </div>

        <small style=\"left:25px;position:absolute;top:10px;display:none;\">Oops! Transparency doesn't work in live preview. </small>
        <div class=\"separator\"></div>

        <div style=\"margin: 20px 0\" class=\"gg-preview-bottom-bar\">
\t\t\t<a class=\"button button-primary\" target=\"_blank\"
\t\t\t   href=\"";
        // line 257
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "preview", 2 => array("gallery_id" => $this->getAttribute(($context["gallery"] ?? null), "id", array()))), "method"), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"fa fa-fw fa-eye\"></i>";
        // line 259
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preview")), "html", null, true);
        echo "
\t\t\t</a>

            <a class=\"button\" id=\"openSettingsImportDialog\" href=\"\"><i class=\"fa fa-copy\"></i>";
        // line 262
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import settings")), "html", null, true);
        echo "</a>
\t\t\t<a class=\"button\" id=\"ggCreateClone\" href=\"#\" target=\"_blank\" data-url=\"";
        // line 263
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "settings", 2 => array("_wpnonce" => ($context["_wpnonce"] ?? null))), "method"), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"fa fa-clone\"></i>";
        // line 265
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Clone")), "html", null, true);
        echo "
\t\t\t</a>
        </div>
    </div>
\t<input type=\"hidden\" id=\"ggMsgCloningGallery\" value=\"";
        // line 269
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cloning gallery...")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgServerInternalError\" value=\"";
        // line 270
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Server internal error")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgImgOptimizationErrorOcured\" value=\"";
        // line 271
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery image optimization error ocured.")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggIoParams\" value=\"";
        // line 272
        echo Twig_SupTwgSgg_escape_filter($this->env, ($context["ioServiceParams"] ?? null), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggCdnParams\" value=\"";
        // line 273
        echo Twig_SupTwgSgg_escape_filter($this->env, ($context["cdnServiceParams"] ?? null), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgOptimized\" value=\"";
        // line 274
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimized")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgTransfer\" value=\"";
        // line 275
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfered")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgOf\" value=\"";
        // line 276
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgImages\" value=\"";
        // line 277
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("images")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgGalleryImageOptimizing\" value=\"";
        // line 278
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Image optimizing...")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgGalleryTransferToCnd\" value=\"";
        // line 279
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tranfer images to CDN")), "html", null, true);
        echo "\"/>

\t<div id=\"ggCloneModalWndId\" style=\"display: none;\">
\t\t<label for=\"ggCloneTypeSelector\">";
        // line 282
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select clone type:")), "html", null, true);
        echo "</label>";
        // line 283
        echo $context["form"]->getselect("CloneTypeSelector", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select clone type")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Clone with images")), "2" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Clone without images"))), 0, array("style" => "width: auto;", "id" => "ggCloneTypeSelector"));
        // line 291
        echo "
\t</div>";
    }

    // line 84
    public function block_figcaption_after($context, array $blocks = array())
    {
    }

    // line 162
    public function block_gallery_preview_figure_attributes($context, array $blocks = array())
    {
        // line 163
        echo "                            class=\"grid-gallery-caption\" data-grid-gallery-type=\"center\" style=\"float: none !important;\"";
        // line 164
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "personal", array()) == "true")) {
            // line 165
            echo "                                data-thumb-overlay-personal=\"1\"";
        }
    }

    // line 191
    public function block_gallery_preview_image_attributes($context, array $blocks = array())
    {
        // line 192
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "photos", array(), "any", false, true), 0, array(), "array", false, true), "attachment", array(), "any", false, true), "isRemoteImage", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "photos", array()), 0, array(), "array"), "attachment", array()), "isRemoteImage", array()) == 1))) {
            // line 193
            echo "                                src=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "photos", array()), 0, array(), "array"), "attachment", array()), "thumbUrl", array()), "html", null, true);
            echo "\"";
        } else {
            // line 195
            echo "                                    src=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "photos", array()), 0, array(), "array"), "attachment", array()), "id", array()), ($context["width"] ?? null), ($context["height"] ?? null), ($context["crop"] ?? null), ($context["cropQuality"] ?? null))), "html", null, true);
            echo "\"";
        }
        // line 197
        echo "                                data-src=\"";
        echo Twig_SupTwgSgg_escape_filter($this->env, ("holder.js/350x250?theme=simple&text=" . $this->getAttribute(($context["gallery"] ?? null), "title", array())), "html", null, true);
        echo "\" alt=\"";
        echo $this->getAttribute(($context["gallery"] ?? null), "title", array());
        echo "\"
                                style=\"
                                    max-width: 290px; max-height: 290px;";
        // line 200
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()) == 0) &&  !Twig_SupTwgSgg_test_empty($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array())))) {
            // line 201
            echo "                                        width:";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array()), "html", null, true);
            echo "px;";
        } else {
            // line 203
            echo "                                        width: auto;";
        }
        // line 205
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()) == 0) &&  !Twig_SupTwgSgg_test_empty($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array())))) {
            // line 206
            echo "                                        height:";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array()), "html", null, true);
            echo "px;";
        } else {
            // line 208
            echo "                                        height: auto;";
        }
        // line 210
        echo "                                    \"";
    }

    // line 225
    public function block_settginsFigCaption($context, array $blocks = array())
    {
        // line 226
        echo Twig_SupTwgSgg_escape_filter($this->env, ($context["figcaptionBlockFree"] ?? null), "html", null, true);
    }

    // line 296
    public function block_content($context, array $blocks = array())
    {
        // line 297
        $context["form"] = $this->loadTemplate("@core/form.twig", "@galleries/settings.twig", 297);
        // line 298
        $context["f"] = $this;
        // line 299
        echo "
\t<div class=\"gg-wraper-anchor-nav-links\" style=\"display: none;\">
\t\t<a href=\"#gg-anl-main\" class=\"gg-anchor-nav-links\">";
        // line 301
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Type")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-mosaic-image-count-text-wrapper\" class=\"gg-anchor-nav-links ggSettingsDisplNone\" id=\"gg-anl-mosaic-settings-link\">";
        // line 302
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Count Settings")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-soc-share\" class=\"gg-anchor-nav-links\">";
        // line 303
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-load-more\" class=\"gg-anchor-nav-links\" id=\"gg-anl-load-more-link\">";
        // line 304
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load More")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-cust-button\" class=\"gg-anchor-nav-links\">";
        // line 305
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons")), "html", null, true);
        echo "</a>
        <a href=\"#gg-anl-horiz-scroll\" class=\"gg-anchor-nav-links\">";
        // line 306
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-border-type\" class=\"gg-anchor-nav-links\">";
        // line 307
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-shadow\" class=\"gg-anchor-nav-links\">";
        // line 308
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-popup\" class=\"gg-anchor-nav-links\">";
        // line 309
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Lightbox")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-lazyload\" class=\"gg-anchor-nav-links\">";
        // line 310
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("LazyLoad")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-preloader\" class=\"gg-anchor-nav-links\">";
        // line 311
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loader")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-attributes\" class=\"gg-anchor-nav-links\">";
        // line 312
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Attributes")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-caption-add-sett\" class=\"gg-anchor-nav-links\">";
        // line 313
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption Transformations")), "html", null, true);
        echo "</a>
\t</div>
    <div class=\"settings-wrap\" data-leave-confirm=\"";
        // line 315
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Your changes not saved. You really want to leave without saving?")), "html", null, true);
        echo "\">";
        // line 316
        echo $context["form"]->getopen("post", $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "saveSettings", 2 => array("gallery_id" => $this->getAttribute(($context["gallery"] ?? null), "id", array()), "_wpnonce" => ($context["_wpnonce"] ?? null))), "method"), array("id" => "form-settings", "class" => "form-gall-settings"));
        echo "
        <input id=\"currentPresetTitle\" name=\"title\" type=\"hidden\" value=\"";
        // line 317
        echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute(($context["settings"] ?? null), "title", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute(($context["settings"] ?? null), "title", array()), "")) : ("")), "html", null, true);
        echo "\"/>
        <input name=\"previewImage\" type=\"hidden\" value=\"";
        // line 318
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "settings", array()), "previewImage", array()), "html", null, true);
        echo "\"/>
        <input name=\"sort[sortto]\" type=\"hidden\" value=\"";
        // line 319
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sort", array()), "sortto", array()), "html", null, true);
        echo "\"/>
        <input name=\"sort[sortby]\" type=\"hidden\" value=\"";
        // line 320
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sort", array()), "sortby", array()), "html", null, true);
        echo "\"/>";
        // line 321
        echo $context["form"]->gethidden("plugins[membership][enable]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "plugins", array()), "membership", array()), "enable", array()), array("id" => "hiddenInpMembershipEnableVal"));
        // line 322
        $this->displayBlock('proHiddenSettings', $context, $blocks);
        // line 323
        echo "
        <div data-tab=\"area\">";
        // line 325
        $this->displayBlock('area', $context, $blocks);
        // line 504
        $this->displayBlock('mosaicImagesCount', $context, $blocks);
        // line 507
        $this->displayBlock('mosaicGalleryImageCountText', $context, $blocks);
        // line 510
        $this->displayBlock('socialSharing', $context, $blocks);
        // line 745
        echo "
            <div class=\"load-more-button-preview\" id=\"gg-anl-load-more\">
                <h1 style=\"line-height: 1;\">";
        // line 748
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load more gallery images with scroll or button")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\" href=\"";
        // line 750
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Get PRO"), "method"), "html", null, true);
        echo "</a>
                </h1>
                <div>
                    <a href=\"";
        // line 753
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                        <img src=\"";
        // line 754
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/load_more_button_pro.jpg\" />
                    </a>
                </div>
                <div class=\"separator\"></div>
            </div>

            <div class=\"custom-buttons-preview\" id=\"gg-anl-cust-button\">
                <table class=\"form-table\">
                    <thead>";
        // line 763
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Custom Buttons")),         // line 764
$context["form"]->getbutton("buttons-presets-editor-preview", "Show preset Editor", array("class" => "button button-primary")), "custom-buttons-preview", true);
        echo "
                    </thead>
                </table>
                <div class=\"separator\"></div>
            </div>";
        // line 770
        $this->displayBlock('horizontalScroll', $context, $blocks);
        // line 839
        $this->displayBlock('border', $context, $blocks);
        // line 894
        $this->displayBlock('shadow', $context, $blocks);
        // line 978
        $this->displayBlock('popup', $context, $blocks);
        // line 1379
        $this->displayBlock('lazyload', $context, $blocks);
        // line 1447
        $this->displayBlock('preload', $context, $blocks);
        // line 1501
        $this->displayBlock('attributes', $context, $blocks);
        // line 1516
        $this->displayBlock('additionalCaptionSettings', $context, $blocks);
        // line 1546
        echo $context["form"]->gethidden("adminPage[slimScrollStartPos]", (($this->getAttribute($this->getAttribute(        // line 1548
($context["settings"] ?? null), "adminPage", array(), "any", false, true), "slimScrollStartPos", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "adminPage", array(), "any", false, true), "slimScrollStartPos", array()), 0)) : (0)), array("id" => "slimScrollStartPos"));
        // line 1550
        echo "
        </div>";
        // line 1553
        $this->displayBlock('post', $context, $blocks);
        // line 1571
        echo "
\t\t<div data-tab=\"overlay\">";
        // line 1574
        $context["effects"] = array("none" => "None", "center" => "Middle", "quarter-appear" => "Appear", "quarter-disappear" => "Disappear", "quarter-slide-up" => "Quarter Slide Up", "quarter-slide-side" => "Quarter Slide Side", "quarter-fall-in" => "Quarter Fall in", "quarter-two-step" => "Quarter Two-step", "quarter-zoom" => "Quarter Caption Zoom", "cover-fade" => "Cover Fade", "cover-push-right" => "Cover Push Right", "revolving-door-left" => "Revolving Door Left", "revolving-door-right" => "Revolving Door Right", "revolving-door-top" => "Revolving Door Top", "revolving-door-bottom" => "Revolving Door Bottom", "revolving-door-original-left" => "Revolving Door Original Left", "revolving-door-original-right" => "Revolving Door Original Right", "revolving-door-original-top" => "Revolving Door Original Top", "revolving-door-original-bottom" => "Revolving Door Original Bottom", "cover-slide-top" => "Cover Slide Top", "offset" => "Caption Offset", "guillotine-reverse" => "Guillotine Reverse", "half-slide" => "Half Slide", "sqkwoosh" => "Skwoosh", "tunnel" => "Tunnel", "direction-aware" => "Direction Aware", "phophorus-rotate" => "Phosphorus Rotate", "phophorus-offset" => "Phosphorus Offset", "phophorus-scale" => "Phosphorus Scale", "cube" => "Cube", "polaroid" => "Polaroid", "3d-cube" => "3D Cube", "show-on-hover" => "Show on Hover", "swing" => "Swing");
        // line 1610
        $context["iconsWithCaptionsEffects"] = array("icons" => "Default", "icons-scale" => "Scale", "icons-sodium-left" => "Sodium Left", "icons-sodium-top" => "Sodium Top", "icons-nitrogen-top" => "Nitrogen Top");
        // line 1617
        $context["enableCaptions"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 1618
        $context["polaroidIsEnable"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()) == "polaroid")) ? ("true") : ("false"));
        // line 1620
        $this->displayBlock('captionSettingsType', $context, $blocks);
        // line 1650
        echo $context["form"]->gethidden("thumbnail[overlay][effect]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1652
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "effect", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "effect", array()), "quarter-appear")) : ("quarter-appear")), array("id" => "overlayEffect"));
        // line 1655
        echo         // line 1656
$context["form"]->gethidden("icons[effect]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "effect", array()), array("id" => "iconsEffectName"));
        // line 1657
        echo "

\t\t\t<div class=\"ggCaptionBuilderWrap\">
\t\t\t\t<div class=\"caption-type\" data-gg-cb-type=\"captions-icons\">";
        // line 1661
        $this->displayBlock('overlaySettings', $context, $blocks);
        // line 1916
        $this->displayBlock('icons', $context, $blocks);
        // line 2067
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"caption-type\" data-gg-cb-type=\"caption-builder\">";
        // line 2069
        $this->displayBlock('proCaptionAndIconSettings', $context, $blocks);
        // line 2071
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"exit-info\">";
        // line 2073
        $this->displayBlock('exifCaptionSettings', $context, $blocks);
        // line 2090
        echo "\t\t\t\t</div>
\t\t\t</div>
        </div>";
        // line 2094
        $this->displayBlock('categories', $context, $blocks);
        // line 2128
        $this->displayBlock('watermark', $context, $blocks);
        // line 2142
        $this->displayBlock('form', $context, $blocks);
        // line 2145
        echo $context["form"]->getclose();
        echo "

        <div id=\"saveDialog\" title=\"";
        // line 2147
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save settings as preset")), "html", null, true);
        echo "\">
            <div>
                <label for=\"presetTitle\">";
        // line 2150
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preset title:")), "html", null, true);
        echo "
                </label>
            </div>
            <div>
                <input id=\"presetTitle\" type=\"text\" name=\"title\" style=\"width:100%;\" value=\"";
        // line 2154
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["preset"] ?? null), "title", array()), "html", null, true);
        echo "\"/>
                <input id=\"settingsId\" type=\"hidden\" name=\"settings_id\" value=\"";
        // line 2155
        echo Twig_SupTwgSgg_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"/>
            </div>
        </div>

        <div id=\"deletePreset\" title=\"";
        // line 2159
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete preset")), "html", null, true);
        echo "\">
            <p>";
        // line 2161
        echo Twig_SupTwgSgg_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Are you really want to delete preset \"%s\"?")), $this->getAttribute(($context["preset"] ?? null), "title", array())), "html", null, true);
        echo "
            </p>
            <input type=\"hidden\" id=\"presetId\" value=\"";
        // line 2163
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["preset"] ?? null), "id", array()), "html", null, true);
        echo "\">
        </div>

        <div id=\"loadPreset\" title=\"";
        // line 2166
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load settings from presets")), "html", null, true);
        echo "\">
            <div>
                <label for=\"presetList\">";
        // line 2168
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select preset:")), "html", null, true);
        echo "</label>
            </div>
            <div>
                <select id=\"presetList\" name=\"presetList\" style=\"width:100%\"></select>
            </div>
            <div id=\"presetListError\">
                <p id=\"presetLoadingFailed\" style=\"display:none\">";
        // line 2175
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Failed to load the presets.")), "html", null, true);
        echo "
                </p>

                <p id=\"presetEmpty\" style=\"display:none\">";
        // line 2179
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Currently you have no presets.")), "html", null, true);
        echo "
                </p>
            </div>
        </div>

        <div id=\"themeDialog\" title=\"";
        // line 2184
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select \"Big image\" theme")), "html", null, true);
        echo "\">
            <h1>";
        // line 2186
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select a theme")), "html", null, true);
        echo "
            </h1>
\t\t\t<div class=\"popupPlacementTypeWrapper\">";
        // line 2189
        $context["popupPlacementType"] = ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array()), "placementType", array()) == null)) ? (0) : ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array()), "placementType", array())));
        // line 2190
        echo "\t\t\t\t<h4>";
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("How to fit image in lightbox")), "html", null, true);
        echo "</h4>";
        // line 2191
        echo ((((((((        // line 2192
$context["form"]->getradio("popup[placementType]", "0", Twig_SupTwgSgg_array_merge(array("id" => "popupPlacementTypeFts", "class" => "popupPlacementTypeRadio"), (((        // line 2195
($context["popupPlacementType"] ?? null) == 0)) ? (array("checked" => "checked")) : (array())))) .         // line 2197
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Fit To Screen")), "popupPlacementTypeFts")) . "<br/>") .         // line 2201
$context["form"]->getradio("popup[placementType]", "1", Twig_SupTwgSgg_array_merge(array("id" => "popupPlacementTypeFw", "class" => "popupPlacementTypeRadio"), (((        // line 2204
($context["popupPlacementType"] ?? null) == 1)) ? (array("checked" => "checked")) : (array()))))) .         // line 2206
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Fit Width")), "popupPlacementTypeFw")) . "<br/>") .         // line 2210
$context["form"]->getradio("popup[placementType]", "2", Twig_SupTwgSgg_array_merge(array("id" => "popupPlacementTypeSo", "class" => "popupPlacementTypeRadio"), (((        // line 2213
($context["popupPlacementType"] ?? null) == 2)) ? (array("checked" => "checked")) : (array()))))) .         // line 2215
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show Original")), "popupPlacementTypeSo")) . "<br/>");
        // line 2220
        echo "
\t\t\t</div>
            <div>";
        // line 2223
        $context["bigImageThemes"] = array("theme_1" => "Theme 1", "theme_2" => "Theme 2", "theme_3" => "Theme 3", "theme_4" => "Theme 4", "theme_5" => "Theme 5", "theme_6" => "Theme 6", "theme_7" => "Theme 7");
        // line 2233
        if ($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method")) {
            // line 2234
            $context["bigImageThemes"] = Twig_SupTwgSgg_array_merge(($context["bigImageThemes"] ?? null), array("theme_1_pro" => "Fullscreen popup"));
        }
        // line 2237
        $context['_parent'] = $context;
        $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["bigImageThemes"] ?? null));
        foreach ($context['_seq'] as $context["value"] => $context["name"]) {
            // line 2238
            echo "                    <div class=\"grid-gallery-caption";
            if (($context["value"] == $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "theme", array()))) {
                echo "gg-active";
            }
            echo "\">
                        <img data-name=\"";
            // line 2239
            echo Twig_SupTwgSgg_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" data-val=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" class=\"theme dialog-image\"
                             src=\"";
            // line 2240
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "getModule", array(0 => "colorbox"), "method"), "getThemeScreenshotUrl", array(0 => $context["value"]), "method"), "html", null, true);
            echo "\" alt=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\"
                             title=\"";
            // line 2241
            echo Twig_SupTwgSgg_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\"/>
                        <div class=\"select-element\">
                            <h3>";
            // line 2243
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "</h3>
                        </div>
\t\t\t\t\t\t<div class=\"gg-selected-theme\">
\t\t\t\t\t\t\t<div class=\"gg-selected-theme-txt\">";
            // line 2246
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(("Selected " . $context["name"]))), "html", null, true);
            echo "</div>
\t\t\t\t\t\t</div>
                    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2250
        echo "
            </div>
        </div>

        <div id=\"effectDialog\" title=\"";
        // line 2254
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select overlay effect")), "html", null, true);
        echo "\">
            <div id=\"effectsPreview\" style=\"margin-top: 10px;\">";
        // line 2256
        $context['_parent'] = $context;
        $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["effects"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 2257
            if (($context["type"] == "direction-aware")) {
                // line 2258
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                            <div class=\"box\">
                                <div class=\"box__right\">Right → Left</div>
                                <div class=\"box__left\">Left → Right</div>
                                <div class=\"box__top\">Top → Bottom</div>
                                <div class=\"box__bottom\">Bottom → Top</div>
                                <div class=\"box__center\">
                                </div>
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 2266
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"dialog-image\">
                            </div>
                            <div class=\"select-element\">";
                // line 2269
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>";
            } elseif (Twig_SupTwgSgg_in_filter(            // line 2272
$context["type"], array(0 => "show-on-hover", 1 => "fade-in", 2 => "grow", 3 => "shrink", 4 => "rotate-z", 5 => "square-to-circle"))) {
                // line 2273
                $this->displayBlock('captionEffectInPro', $context, $blocks);
            } elseif ((            // line 2290
$context["type"] == "3d-cube")) {
                // line 2291
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                            <div class=\"box-3d-cube-scene\" style=\"perspective: 300px;-webkit-perspective: 300px\">
                                <div class=\"box-3d-cube\"
                                     style=\"
                                         transform-origin:50% 50% -75px;
                                         -ms-transform-origin: 50% 50% -75px;
                                         -webkit-transform-origin: 50% 50% -75px;
                                         width:150px; height:150px
                                     \"
                                >
                                    <div class=\"face front\" style=\"width:150px; height:150px\">
                                        <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 2302
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"dialog-image\">
                                    </div>
                                    <div style=\"";
                // line 2304
                echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_trim_filter(($context["figcaptionStyle"] ?? null)), "html", null, true);
                echo "width:150px; height:150px\" class=\"face back\">
                                        <div class=\"grid-gallery-figcaption-wrap\">
                                            <span";
                // line 2306
                if (($this->getAttribute(($context["settings"] ?? null), "rtl", array()) == true)) {
                    echo "dir=\"rtl\" class=\"ggRtlClass\"";
                }
                echo ">";
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"select-element\">";
                // line 2312
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>";
            } else {
                // line 2316
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 2317
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"dialog-image\">
                            <figcaption style=\"";
                // line 2318
                echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_trim_filter(($context["figcaptionStyle"] ?? null)), "html", null, true);
                echo "\">
                                <div class=\"grid-gallery-figcaption-wrap\" style=\"width:100%;height:100%;top:0;\">
                                    <div style=\"display:table;width:100%;height:100%;\">
                                        <span";
                // line 2321
                if (($this->getAttribute(($context["settings"] ?? null), "rtl", array()) == true)) {
                    echo "dir=\"rtl\" class=\"ggRtlClass\"";
                }
                echo " style=\"display:table-cell;font-size:";
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                echo ";padding:10px;vertical-align:";
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
                echo ";\">Caption</span>
                                    </div>
                                </div>
                            </figcaption>
                            <div class=\"select-element\">";
                // line 2326
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2331
        echo "                <div class=\"grid-gallery-clearfix\" style=\"clear: both;\"></div>";
        // line 2332
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "captionBuilder", array()), "enabled", array()) != "1")) {
            // line 2333
            echo "\t\t\t\t\t<div class=\"captions-effect-with-icons\" data-confirm=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("This effect requires icons be enabled. Enable Icons?")), "html", null, true);
            echo "\">
\t\t\t\t\t\t<h3>Captions effects with icons</h3>";
            // line 2335
            $this->displayBlock('iconsEffects', $context, $blocks);
            // line 2359
            echo "\t\t\t\t\t</div>";
        }
        // line 2361
        echo "            </div>
        </div>

        <div id=\"shadowDialog\" title=\"";
        // line 2364
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select shadow preset")), "html", null, true);
        echo "\">
            <h1>";
        // line 2366
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select shadow")), "html", null, true);
        echo "
            </h1>
            <div class=\"shadow-dialog-wrapper\">";
        // line 2369
        $context["shadowPresets"] = array("effect_1" => array("name" => "Effect 1", "offset_x" => "8", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_2" => array("name" => "Effect 2", "offset_x" => "-8", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_3" => array("name" => "Effect 3", "offset_x" => "-8", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_4" => array("name" => "Effect 4", "offset_x" => "8", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_5" => array("name" => "Effect 5", "offset_x" => "8", "offset_y" => "0", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_6" => array("name" => "Effect 6", "offset_x" => "-8", "offset_y" => "0", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_7" => array("name" => "Effect 7", "offset_x" => "0", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_8" => array("name" => "Effect 8", "offset_x" => "0", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_9" => array("name" => "Effect 9", "offset_x" => "0", "offset_y" => "4", "blur" => "10", "color" => "rgba(0, 0, 0, 1.0)"), "effect_10" => array("name" => "Effect 10", "offset_x" => "0", "offset_y" => "-4", "blur" => "8", "color" => "rgba(0, 0, 0, 1.0)"));
        // line 2443
        $context['_parent'] = $context;
        $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["shadowPresets"] ?? null));
        foreach ($context['_seq'] as $context["value"] => $context["effect"]) {
            // line 2444
            echo "                    <div class=\"grid-gallery-caption\" style=\"float: left; margin-left: 15px; cursor: pointer;\">
                        <div class=\"shadow-preset\" data-offset-x=\"";
            // line 2445
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_x", array()), "html", null, true);
            echo "\" data-offset-y=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_y", array()), "html", null, true);
            echo "\" data-blur=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["effect"], "blur", array()), "html", null, true);
            echo "\" data-color=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["effect"], "color", array()), "html", null, true);
            echo "\"
                             style=\"margin: 20px; box-shadow:";
            // line 2446
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_x", array()), "html", null, true);
            echo "px";
            echo " ";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_y", array()), "html", null, true);
            echo "px";
            echo " ";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["effect"], "blur", array()), "html", null, true);
            echo "px";
            echo " ";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["effect"], "color", array()), "html", null, true);
            echo ";\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 2447
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["effect"], "name", array()), "html", null, true);
            echo "\" class=\"dialog-image\"/>
                        </div>
                        <div class=\"select-element\">";
            // line 2450
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                        </div>
                    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['effect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2454
        echo "
            </div>
        </div>

        <div id=\"reviewNotice\" title=\"Review\" hidden>
            <h3>Hey, I noticed you just use Gallery by Supsystic over a week – that’s awesome!</h3>
            <p>Could you please do me a BIG favor and give it a 5-star rating on WordPress? Just to help us spread the word and boost our motivation.</p>

            <ul style=\"list-style: circle; padding-left: 30px;\">
                <li>
                    <button class=\"button button-primary\"><a href=\"//wordpress.org/support/view/plugin-reviews/gallery-by-supsystic?rate=5#postform\" target=\"_blank\" class=\"bupSendStatistic\" data-statistic-code=\"is_shown\" style=\"color:#000000 !important;\">Ok, you deserve it</a></button>
                </li>
                <li>
                    <button class=\"button button-primary\"><span class=\"toeLikeLink bupSendStatistic\" data-statistic-code=\"is_shown\">Nope, maybe later</span></button>
                </li>
                <li>
                    <button class=\"button button-primary\"><span class=\"toeLikeLink bupSendStatistic\" data-statistic-code=\"is_shown\">I already did</span></button>
                </li>
            </ul>
        </div>

        <div id=\"settingsImportDialog\" title=\"Import\" hidden>
            <div class=\"import\" style=\"display:none\">
                <p>";
        // line 2477
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import settings from gallery")), "html", null, true);
        echo "</p>
                <select class=\"list\"></select>
            </div>
            <div class=\"import-not-available\" style=\"display:none\">
                <p>";
        // line 2481
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Here you can import settings from other galleries, but right now, you have only one gallery, create more - and see how it works")), "html", null, true);
        echo "</p>
            </div>
            <div class=\"import-gallery-loading\">
                <p>";
        // line 2484
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loading gallery list...")), "html", null, true);
        echo "</p>
            </div>
        </div>

\t\t<div id=\"videoUrlAddDialog\" title=\"";
        // line 2488
        echo "Add video url";
        echo "\" style=\"display:none;\" data-gallery-id=\"";
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
        echo "\">
\t\t\t<div class=\"sggVideoUrlAddWr\">
\t\t\t\t<div class=\"sggTableRow\">
\t\t\t\t\t<div class=\"sggTableColumn6\">
\t\t\t\t\t\t<div class=\"sggDlgVideoTypeH3\">";
        // line 2492
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video type:")), "html", null, true);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sggTableColumn6\">";
        // line 2495
        echo ((((        // line 2496
$context["form"]->getradio("sggDlgVideoType", "youtube", array("id" => "sggDlgYoutubeVideoType", "class" => "sggDlgVideoTypeRadio", "checked" => "checked")) .         // line 2501
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Youtube url")), "sggDlgYoutubeVideoType")) . "<br/>") .         // line 2505
$context["form"]->getradio("sggDlgVideoType", "vimeo", array("id" => "sggDlgVimeoVideoType", "class" => "sggDlgVideoTypeRadio"))) .         // line 2510
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Vimeo url")), "sggDlgVimeoVideoType"));
        // line 2514
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"sggTableRow\">
\t\t\t\t\t<div class=\"sggTableColumn6\">
\t\t\t\t\t\t<div class=\"sggDlgVideoTypeH3\">";
        // line 2519
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video url:")), "html", null, true);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sggTableColumn6\">";
        // line 2522
        echo         // line 2523
$context["form"]->getinput("text", "sggDlgUrlVideoValue", "", array("id" => "sggDlgUrlVideoInp", "class" => ""));
        // line 2529
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"sggTableRow sggAduHiden\" id=\"sggAduErrorText\"></div>
\t\t\t</div>
\t\t</div>";
        // line 2536
        $context["importTypes"] = $this->loadTemplate("@galleries/shortcode/import.twig", "@galleries/settings.twig", 2536);
        // line 2537
        echo "        <div id=\"importDialog\" title=\"";
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
        echo "\" style=\"display: none;\">";
        // line 2538
        echo $context["importTypes"]->getshow(400, $this->getAttribute(($context["gallery"] ?? null), "id", array()));
        echo "
        </div>

        <div class=\"buttons-edit-preset-dialog-preview\" title=\"";
        // line 2541
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons preset editor for Paginations, Categories and Load More buttons")), "html", null, true);
        echo "\">
            <a href=\"";
        // line 2542
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                <img src=\"";
        // line 2543
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/custom_button_icon_pro.jpg\" />
            </a>
        </div>

        <div class=\"loader-dialog-preview\" title=\"";
        // line 2547
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Improve free version")), "html", null, true);
        echo "\" style=\"line-height: 200%;\">
            Please be advised that this option is available only in <u>Pro version</u>. You can
            <a  href=\"";
        // line 2549
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" class=\"button\">
                Get PRO
            </a>
            today and get this and other PRO options for Galleries!
        </div>
    </div>";
        // line 2556
        $this->displayBlock('modals', $context, $blocks);
        // line 2613
        $this->displayBlock('settingsOtherPro', $context, $blocks);
    }

    // line 322
    public function block_proHiddenSettings($context, array $blocks = array())
    {
    }

    // line 325
    public function block_area($context, array $blocks = array())
    {
        // line 326
        echo "                <table class=\"form-table\" name=\"area\" id=\"gg-anl-main\">
                    <thead>";
        // line 328
        $this->displayBlock('galleryTypeSelectorItems', $context, $blocks);
        // line 347
        echo "
                        <tr id=\"generalColumnsRow\" hidden>
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">";
        // line 351
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Number of Columns")), "html", null, true);
        // line 352
        echo $context["form"]->getshow_tooltip("columns");
        echo "
        \t\t\t\t\t\t\t<br />
        \t\t\t\t\t\t\t<label><a href=\"http://supsystic.com/fixed-columns-gallery-example/\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">More Info</a> </label>
                                </label>
                            </th>
                            <td>
                                <input type=\"number\" name=\"general[columns][number]\" value=\"";
        // line 358
        echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)), "html", null, true);
        echo "\">
                            </td>
                        </tr>";
        // line 362
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Responsive columns")), (((((((((((((        // line 363
$context["form"]->getinput("number", "general[responsiveColumns][desktop][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "width", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "width", array()), 1200)) : (1200)), array("style" => array("width" => "60px;"))) . $context["form"]->getspan("", "px")) .         // line 364
$context["form"]->getinput("number", "general[responsiveColumns][desktop][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $context["form"]->getspan("", "columns")) . "<br>") .         // line 366
$context["form"]->getinput("number", "general[responsiveColumns][tablet][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "width", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "width", array()), 768)) : (768)), array("style" => array("width" => "60px;")))) . $context["form"]->getspan("", "px")) .         // line 367
$context["form"]->getinput("number", "general[responsiveColumns][tablet][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $context["form"]->getspan("", "columns")) . "<br>") .         // line 369
$context["form"]->getinput("number", "general[responsiveColumns][mobile][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 370
($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "width", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "width", array()), 320)) : (320)), array("style" => array("width" => "60px;")))) . $context["form"]->getspan("", "px")) .         // line 371
$context["form"]->getinput("number", "general[responsiveColumns][mobile][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $context["form"]->getspan("", "columns")), "responsive-columns");
        // line 376
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Name:")),         // line 377
$context["form"]->getinput("text", "title", $this->getAttribute(($context["gallery"] ?? null), "title", array()), array("style" => array("width" => "232px;"))), "title");
        // line 380
        echo $context["form"]->getrow($this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Gallery alignment"), "method"),         // line 381
$context["form"]->getselect("area[position]", array(0 => "Left", 1 => "Center", 2 => "Right"), (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array(), "any", false, true), "position", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array(), "any", false, true), "position", array()), 1)) : (1)), array("style" => "width: 100px;")), "gallery-align");
        // line 384
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Distance between images")), (        // line 385
$context["form"]->getinput("number", "area[distance]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "distance", array()), array("style" => array("width" => "140px;"))) .         // line 386
$context["form"]->getspan("", "pixels")), "distance");
        // line 388
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery width")), (        // line 389
$context["form"]->getinput("number", "area[width]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "width", array()), array("style" => array("width" => "140px"))) .         // line 390
$context["form"]->getselect("area[width_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "width_unit", array()), array("style" => "margin-top: -2px; height: 27px;"))), "area-width");
        // line 393
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Full screen width")),         // line 394
$context["form"]->getcheckbox("fullscreen", "1", (($this->getAttribute(        // line 397
($context["settings"] ?? null), "fullscreen", array())) ? (array("checked" => "checked")) : (array()))), "full-screen-width");
        // line 402
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery padding")), (        // line 403
$context["form"]->getinput("number", "area[padding]", (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array(), "any", false, true), "padding", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array(), "any", false, true), "padding", array()), 0)) : (0)), array("style" => array("width" => "140px"))) . $context["form"]->getspan("", "pixels")), "area-padding");
        // line 411
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image width")), (        // line 412
$context["form"]->getinput("number", "area[photo_width]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array()), array("style" => array("width" => "140px"))) .         // line 413
$context["form"]->getselect("area[photo_width_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "photo-width");
        // line 416
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image height")), (        // line 417
$context["form"]->getinput("number", "area[photo_height]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array()), array("style" => array("width" => "140px"))) .         // line 418
$context["form"]->getselect("area[photo_height_unit]", array(0 => "pixels"), $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "photo-height");
        // line 420
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image radius")), (        // line 421
$context["form"]->getinput("number", "thumbnail[border][radius]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius", array()), array("style" => array("width" => "140px"))) .         // line 422
$context["form"]->getselect("thumbnail[border][radius_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "border-radius");
        // line 425
        $context["qualityList"] = array("100" => "100%", "90" => "90%", "80" => "80%", "70" => "70%", "60" => "60%", "50" => "50%", "40" => "40%", "30" => "30%", "20" => "20%", "10" => "10%");
        // line 437
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image crop quality")),         // line 438
$context["form"]->getselect("thumbnail[cropQuality]",         // line 440
($context["qualityList"] ?? null), (($this->getAttribute($this->getAttribute(        // line 441
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "cropQuality", array()), "100")) : ("100"))), "cropQuality");
        // line 446
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Display only first image")),         // line 447
$context["form"]->getcheckbox("displayFirstPhoto", "on", ((($this->getAttribute(        // line 450
($context["settings"] ?? null), "displayFirstPhoto", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "display-first-photo", null, "display-first-photo-row");
        // line 457
        $this->displayBlock('openByLink', $context, $blocks);
        // line 466
        $this->displayBlock('browserUrlTooltipHide', $context, $blocks);
        // line 476
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable image title")),         // line 477
$context["form"]->getcheckbox("disableImageTitle", 1, ((($this->getAttribute(        // line 480
($context["settings"] ?? null), "disableImageTitle", array()) == 1)) ? (array("checked" => "checked")) : (array()))), null, null, null);
        // line 485
        $this->displayBlock('disableRightClick', $context, $blocks);
        // line 488
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Use these settings by default")),         // line 489
$context["form"]->getcheckbox("defaultsettings", "1", (($this->getAttribute(        // line 492
($context["settings"] ?? null), "defaultsettings", array())) ? (array("checked" => "checked")) : (array()))), "default-settings");
        // line 495
        echo "



                    </thead>
                </table>
                <div class=\"separator\"></div>";
    }

    // line 328
    public function block_galleryTypeSelectorItems($context, array $blocks = array())
    {
        // line 329
        $context["galleryTypeObj"] = array(0 => array("value" => "0", "title" => "Fixed"), 1 => array("value" => "1", "title" => "Vertical"), 2 => array("value" => "2", "title" => "Horizontal"), 3 => array("value" => "3", "title" => "Fixed Columns"), 4 => array("value" => "4", "title" => (("Mosaic(" . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Available in Pro"))) . ")"), "disabled" => 1));
        // line 337
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Type")),         // line 338
$context["form"]->getselectWithElem("area[grid]",         // line 340
($context["galleryTypeObj"] ?? null), $this->getAttribute($this->getAttribute(        // line 341
($context["settings"] ?? null), "area", array()), "grid", array()), array("style" => "width: auto;")), "grid-type", "gallery-types", "columns");
    }

    // line 457
    public function block_openByLink($context, array $blocks = array())
    {
        // line 458
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open by link in popup")), "utm_source=plugin&utm_medium=open-by-link&utm_campaign=gallery", "open-by-link",         // line 461
$context["form"]->getcheckbox("openByLink", "on", array("disabled" => "disabled")));
    }

    // line 466
    public function block_browserUrlTooltipHide($context, array $blocks = array())
    {
        // line 467
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide browser url tooltip on image hover")), "utm_source=plugin&utm_medium=browser-url-tooltip-hide&utm_campaign=gallery", "browserUrlTooltipHideFree",         // line 470
$context["form"]->getcheckbox("browserUrlTooltipHideFree", "on", array("disabled" => "disabled")));
    }

    // line 485
    public function block_disableRightClick($context, array $blocks = array())
    {
    }

    // line 504
    public function block_mosaicImagesCount($context, array $blocks = array())
    {
    }

    // line 507
    public function block_mosaicGalleryImageCountText($context, array $blocks = array())
    {
    }

    // line 510
    public function block_socialSharing($context, array $blocks = array())
    {
        // line 511
        echo "                <table class=\"form-table\" id=\"gg-anl-soc-share\">";
        // line 512
        if ($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method")) {
            // line 513
            echo "                        <thead>";
            // line 514
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social Sharing")), (((            // line 515
$context["form"]->getradio("socialSharing[enabled]", true, Twig_SupTwgSgg_array_merge(array("id" => "social-sharing-enable"), (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "enabled", array())) ? (array("checked" => "checked")) : (array())))) .             // line 516
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "social-sharing-enable")) .             // line 517
$context["form"]->getradio("socialSharing[enabled]", false, Twig_SupTwgSgg_array_merge(array("id" => "social-sharing-disable"), (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "enabled", array())) ? (array()) : (array("checked" => "checked")))))) .             // line 518
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "social-sharing-disable")), "social-sharing", true);
            echo "
                        </thead>
                        <tbody style=\"display: none;\">";
            // line 521
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social Icons")),             // line 522
$context["form"]->getselect("socialSharing[gallerySharing][socialIcons][]", $this->getAttribute(            // line 523
($context["settings"] ?? null), "socialShareList", array()), $this->getAttribute($this->getAttribute($this->getAttribute(            // line 524
($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "socialIcons", array()), array("style" => "width: 200px", "class" => "chosen-select gallerySocialMultipleSelect", "multiple" => "multiple")), "gallery-sharing-social-icons");
            // line 528
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Box size")), (            // line 529
$context["form"]->getinput("number", "socialSharing[gallerySharing][boxsize]", (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "boxsize", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "boxsize", array()), 30)) : (30)), array("min" => "1", "style" => array("width" => "140px;"))) .             // line 530
$context["form"]->getspan("", "pixels")), "boxsize");
            // line 532
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Font size")), (            // line 533
$context["form"]->getinput("number", "socialSharing[gallerySharing][fontsize]", (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "fontsize", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "fontsize", array()), 18)) : (18)), array("min" => "1", "style" => array("width" => "140px;"))) .             // line 534
$context["form"]->getspan("", "pixels")), "fontsize");
            // line 536
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons transparency")),             // line 537
$context["form"]->getselect("socialSharing[gallerySharing][transparency]", array("1" => "0%", "0.90" => "10%", "0.80" => "20%", "0.70" => "30%", "0.60" => "40%", "0.50" => "50%", "0.40" => "60%", "0.30" => "70%", "0.20" => "80%", "0.10" => "90%", "0" => "100%"), (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 552
($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "transparency", array()), 1)) : (1)), array("style" => "width: auto")), "gallerySharing-transparency_color");
            // line 557
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons border radius")),             // line 558
$context["form"]->getselect("socialSharing[gallerySharing][style_radius]", array("square" => "square", "rounded" => "rounded", "circle" => "round"), (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 564
($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "style_radius", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "style_radius", array()), "rounded")) : ("rounded")), array("style" => "width: 200px")), "gallery-sharing-buttons-style_radius");
            // line 568
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons style")),             // line 569
$context["form"]->getselect("socialSharing[gallerySharing][style_color]", array("brand" => "brand", "black" => "black", "white" => "white", "custom" => "custom"), (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 576
($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "style_color", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "style_color", array()), "brand")) : ("brand")), array("style" => "width: 200px")), "gallery-sharing-buttons-style_color");
            // line 580
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color (custom style)")),             // line 581
$context["form"]->gettext("socialSharing[gallerySharing][background_color]", (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 583
($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "background_color", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "background_color", array()), "#ffffff")) : ("#ffffff")), array("class" => "gg-color-picker")), "gallerySharing-background_color");
            // line 589
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icon color (custom style)")),             // line 590
$context["form"]->gettext("socialSharing[gallerySharing][icon_color]", (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 592
($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "icon_color", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "icon_color", array()), "#000000")) : ("#000000")), array("class" => "gg-color-picker")), "gallerySharing-icon_color");
            // line 598
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Button border type (custom style)")),             // line 599
$context["form"]->getselect("socialSharing[gallerySharing][border_type]", ($context["borderTypes"] ?? null), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "border_type", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "border_type", array()), "solid")) : ("solid")), array("style" => "width: auto;")), "gallerySharing-border_type");
            // line 602
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Button border color (custom style)")),             // line 603
$context["form"]->getinput("text", "socialSharing[gallerySharing][border_color]", (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "border_color", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "border_color", array()), "#000000")) : ("#000000")), array("class" => "gg-color-picker")), "gallerySharing-border_color");
            // line 605
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Button border width (custom style)")), (            // line 606
$context["form"]->getinput("number", "socialSharing[gallerySharing][border_width]", (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "border_width", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "border_width", array()), "1")) : ("1")), array("style" => array("width" => "140px;"))) .             // line 607
$context["form"]->getspan("", "pixels")), "gallerySharing-border_width");
            // line 609
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Sharing")),             // line 610
$context["form"]->getcheckbox("socialSharing[gallerySharing][enabled]", true, (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 613
($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "enabled", array())) ? (array("checked" => "checked")) : (array()))), "gallery-social-sharing", "h4");
            // line 619
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")),             // line 620
$context["form"]->getselect("socialSharing[gallerySharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "all" => "top and bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(            // line 626
($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "gallery-sharing-buttons-position");
            // line 630
            echo $context["form"]->getrow("",             // line 631
$context["form"]->getcheckbox("socialSharing[imageSharing][enabled]", "0", array("checked" => "checked")), "image-sharing-hidden");
            // line 633
            $context["enabled"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "enabled", array());
            // line 634
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Sharing")),             // line 635
$context["form"]->getcheckbox("socialSharing[imageSharing][enabled]", true, (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 638
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "enabled", array())) ? (array("checked" => "checked")) : (array()))), "image-social-sharing", "h4");
            // line 644
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")),             // line 645
$context["form"]->getselect("socialSharing[imageSharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "left" => "left", "right" => "right"), $this->getAttribute($this->getAttribute($this->getAttribute(            // line 652
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "image-sharing-buttons-position");
            // line 656
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),             // line 657
$context["form"]->getselect("socialSharing[imageSharing][buttonsAlignHorizontal]", array("left" => "left", "center" => "center", "right" => "right"), $this->getAttribute($this->getAttribute($this->getAttribute(            // line 663
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignHorizontal", array()), array("style" => "width: 200px")), "image-sharing-buttons-align-horizontal");
            // line 667
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),             // line 668
$context["form"]->getselect("socialSharing[imageSharing][buttonsAlignVertical]", array("top" => "top", "middle" => "middle", "bottom" => "bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(            // line 674
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignVertical", array()), array("style" => "width: 200px")), "image-sharing-buttons-align-vertical");
            // line 678
            echo $context["form"]->getrow("",             // line 679
$context["form"]->getcheckbox("socialSharing[popupImageSharing][enabled]", "0", array("checked" => "checked")), "popup-sharing-hidden");
            // line 681
            $context["enabled"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "enabled", array());
            // line 682
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image Sharing")),             // line 683
$context["form"]->getcheckbox("socialSharing[popupImageSharing][enabled]", true, (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 686
($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "enabled", array())) ? (array("checked" => "checked")) : (array()))), "popup-social-sharing", "h4");
            // line 692
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")),             // line 693
$context["form"]->getselect("socialSharing[popupImageSharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "left" => "left", "right " => "right "), $this->getAttribute($this->getAttribute($this->getAttribute(            // line 700
($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "popup-sharing-buttons-position");
            // line 704
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),             // line 705
$context["form"]->getselect("socialSharing[popupImageSharing][buttonsAlignHorizontal]", array("left" => "left", "center" => "center", "right" => "right"), $this->getAttribute($this->getAttribute($this->getAttribute(            // line 711
($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignHorizontal", array()), array("style" => "width: 200px")), "popup-sharing-buttons-align-horizontal");
            // line 715
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),             // line 716
$context["form"]->getselect("socialSharing[popupImageSharing][buttonsAlignVertical]", array("top" => "top", "middle" => "middle", "bottom" => "bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(            // line 722
($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignVertical", array()), array("style" => "width: 200px")), "popup-sharing-buttons-align-vertical");
            // line 724
            echo "
                        </tbody>";
        }
        // line 727
        if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == false)) {
            // line 728
            echo "                                <th scope=\"row\">                
                                    <h3 style=\"margin: 0 !important;\">";
            // line 729
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social Sharing")), "html", null, true);
            echo "</h3>
                                    <label><a href=\"http://supsystic.com/plugins/photo-gallery/?utm_source=plugin&amp;utm_medium=caption_settings_type&amp;utm_campaign=gallery\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\" class=\"sggLinkToProVer\">PRO Option</a></label>
                                </th>
                                <td>
                                    <input type=\"radio\" id=\"social-sharing-enable\" name=\"socialSharing[enabled]\" value=\"1\">";
            // line 734
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "html", null, true);
            echo "
                                    <input type=\"radio\" id=\"social-sharing-disable\" name=\"socialSharing[enabled]\" value=\"0\">";
            // line 736
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "html", null, true);
            echo "
                                </td>";
        }
        // line 740
        $context["iconsEnabled"] = ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "enabled", array()), "false")) : ("false")) == "true");
        // line 741
        echo "                    
                </table>
                <div class=\"separator\"></div>";
    }

    // line 770
    public function block_horizontalScroll($context, array $blocks = array())
    {
        // line 771
        echo "\t\t\t\t<table class=\"form-table\" id=\"gg-anl-horiz-scroll\">
\t\t\t\t\t<thead>";
        // line 773
        $context["horizontalScrollEnabled"] = ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "enabled", array()), "false")) : ("false")) == "true");
        // line 774
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Horizontal Scroll")), (((        // line 775
$context["form"]->getradio("horizontalScroll[enabled]", "true", Twig_SupTwgSgg_array_merge(array("id" => "horizontal-scroll-enable"), ((($context["horizontalScrollEnabled"] ?? null)) ? (array("checked" => "checked")) : (array())))) .         // line 776
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "horizontal-scroll-enable")) .         // line 777
$context["form"]->getradio("horizontalScroll[enabled]", "false", Twig_SupTwgSgg_array_merge(array("id" => "horizontal-scroll-disable"), ((($context["horizontalScrollEnabled"] ?? null)) ? (array()) : (array("checked" => "checked")))))) .         // line 778
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "horizontal-scroll-disable")), "horizontal-scroll", true);
        echo "
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>";
        // line 781
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll Bar Color")),         // line 782
$context["form"]->gettext("horizontalScroll[color]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array()), "color", array()), array("class" => "gg-color-picker")), "horizontal-scroll-color");
        // line 784
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll Bar Transparency")),         // line 785
$context["form"]->getselect("horizontalScroll[transparency]", array("0" => "0%", "10" => "10%", "20" => "20%", "30" => "30%", "40" => "40%", "50" => "50%", "60" => "60%", "70" => "70%", "80" => "80%", "90" => "90%", "100" => "100%"), (($this->getAttribute($this->getAttribute(        // line 799
($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "transparency", array()), "60")) : ("60")), array("style" => "width: auto")), "horizontal-scroll-transparency");
        // line 802
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mouse Wheel Scroll Step")),         // line 803
$context["form"]->gettext("horizontalScroll[mouseWheelStep]", (($this->getAttribute($this->getAttribute(        // line 805
($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "mouseWheelStep", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "mouseWheelStep", array()), 20)) : (20)), array()), "hscroll-mouse-wheel");
        // line 811
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Touch Scroll Step")),         // line 812
$context["form"]->gettext("horizontalScroll[touchStep]", (($this->getAttribute($this->getAttribute(        // line 814
($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "touchStep", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "touchStep", array()), 200)) : (200)), array()), "hscroll-touch-gest");
        // line 820
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Responsive Mode")),         // line 821
$context["form"]->getselect("horizontalScroll[responsiveMode]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("None")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("One by One"))), (($this->getAttribute($this->getAttribute(        // line 826
($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "responsiveMode", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "responsiveMode", array()), "0")) : ("0")), array("style" => "width: auto")), "hScrollResponsiveMode");
        // line 832
        $this->displayBlock('horizontalScrollAfter', $context, $blocks);
        // line 834
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"separator\"></div>";
    }

    // line 832
    public function block_horizontalScrollAfter($context, array $blocks = array())
    {
    }

    // line 839
    public function block_border($context, array $blocks = array())
    {
        // line 840
        echo "                <table class=\"form-table\" name=\"border\" id=\"gg-anl-border-type\">
                    <thead>";
        // line 842
        if ($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method")) {
            // line 843
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border Type")), (            // line 844
$context["form"]->getselect("thumbnail[border][type]", ($context["borderTypes"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "type", array()), array("style" => "width: auto;")) .             // line 845
$context["form"]->getinput("text", "border-type", "Example", array("style" => "margin-top: -2px; height: 27px; width: 70px; border: 1px solid black; display:none;"))), "border-type", "gallery-borders");
            // line 847
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border color")),             // line 848
$context["form"]->getinput("text", "thumbnail[border][color]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "color", array()), array("class" => "gg-color-picker")), "border-color");
            // line 850
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border width")), (            // line 851
$context["form"]->getinput("number", "thumbnail[border][width]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "width", array()), array("style" => array("width" => "140px;"))) .             // line 852
$context["form"]->getspan("", "pixels")), "border-width");
        }
        // line 854
        if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == false)) {
            // line 855
            echo "                                <tr>
                                    <th scope=\"row\">                
                                        <h3 style=\"margin: 0 !important;\">";
            // line 857
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border Type")), "html", null, true);
            echo "</h3>
                                        <label><a href=\"http://supsystic.com/plugins/photo-gallery/?utm_source=plugin&amp;utm_medium=border_type&amp;utm_campaign=gallery\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\" class=\"sggLinkToProVer\">PRO Option</a></label>
                                    </th>
                                    <td>
                                        <select>";
            // line 862
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["borderTypes"] ?? null));
            foreach ($context['_seq'] as $context["value"] => $context["text"]) {
                // line 863
                echo "                                            <option value=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" name = \"";
                echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_lower_filter($this->env, $context["text"]), "html", null, true);
                echo "\"";
                if (($context["value"] == "none")) {
                    echo "selected";
                }
                echo ">";
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["text"], "html", null, true);
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 865
            echo "                                        </select>
                                    </td>
                                </tr>";
            // line 868
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border color")),             // line 869
$context["form"]->getinput("text", "thumbnail[border][color]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "color", array()), array("class" => "gg-color-picker")), "border-color");
            // line 870
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border width")), (            // line 871
$context["form"]->getinput("number", "thumbnail[border][width]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "width", array()), array("style" => array("width" => "140px;"))) .             // line 872
$context["form"]->getspan("", "pixels")), "border-width");
        }
        // line 889
        echo "                    </thead>
                </table>
                <div class=\"separator\"></div>";
    }

    // line 894
    public function block_shadow($context, array $blocks = array())
    {
        // line 895
        echo "                <table class=\"form-table\" name=\"shadow\" id=\"gg-anl-shadow\">
                    <thead>";
        // line 897
        if ($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method")) {
            // line 898
            echo "                        <tr id=\"useShadowRow\">
                            <th scope=\"row\">
                                <h3 style=\"margin: 0 !important;\">";
            // line 901
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow")), "html", null, true);
            // line 902
            echo $context["form"]->getshow_tooltip("sgg-t-shadow");
            echo "
                                </h3>
                            </th>
                            <td>
                                <input type=\"radio\" id=\"showShadow\" name=\"use_shadow\" value=\"1\"";
            // line 906
            if (($this->getAttribute(($context["settings"] ?? null), "use_shadow", array()) == "1")) {
                echo "checked";
            }
            echo ">";
            // line 907
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "html", null, true);
            echo "
                                <input type=\"radio\" id=\"hideShadow\" name=\"use_shadow\" value=\"0\"";
            // line 908
            if (($this->getAttribute(($context["settings"] ?? null), "use_shadow", array()) != "1")) {
                echo "checked";
            }
            echo ">";
            // line 909
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "html", null, true);
            echo "
                            </td>
                        </tr>";
        }
        // line 913
        if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == false)) {
            // line 914
            echo "                                <th scope=\"row\">                
                                    <h3 style=\"margin: 0 !important;\">";
            // line 915
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow")), "html", null, true);
            echo "</h3>
                                    <label><a href=\"http://supsystic.com/plugins/photo-gallery/?utm_source=plugin&amp;utm_medium=caption_settings_type&amp;utm_campaign=gallery\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\" class=\"sggLinkToProVer\">PRO Option</a></label>
                                </th>
                                <td>
                                    <input type=\"radio\" id=\"showShadow\" name=\"use_shadow\" value=\"1\" checked>";
            // line 920
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "html", null, true);
            echo "
                                    <input type=\"radio\" id=\"hideShadow\" name=\"use_shadow\" value=\"0\">";
            // line 922
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "html", null, true);
            echo "
                                </td>";
        }
        // line 925
        echo "                    </thead>
                    <tbody>
                        <tr>
                            <th scope=\"row\">";
        // line 929
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow effect preset")), "html", null, true);
        // line 930
        echo $context["form"]->getshow_tooltip("sgg-t-shadow-eff-preset");
        echo "
                            </th>
                            <td>
                                <button id=\"chooseShadowPreset\" class=\"button bordered\" type=\"button\">";
        // line 934
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose preset")), "html", null, true);
        echo "
                                </button>
                            </td>
                        </tr>

                        <tr id=\"useMouseShadowRow\">
                            <th scope=\"row\">";
        // line 941
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("When mouse is over")), "html", null, true);
        // line 942
        echo $context["form"]->getshow_tooltip("when-mouse-is-over");
        echo "
                            </th>
                            <td>
                                <select id=\"useMouseOverShadow\" style=\"width: auto;\" name=\"mouse_shadow\">
                                    <option value=\"0\"";
        // line 946
        if (($this->getAttribute(($context["settings"] ?? null), "mouse_shadow", array()) == "0")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        // line 947
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Off")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"1\"";
        // line 949
        if (($this->getAttribute(($context["settings"] ?? null), "mouse_shadow", array()) == "1")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        // line 950
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show mouse on")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"2\"";
        // line 952
        if (($this->getAttribute(($context["settings"] ?? null), "mouse_shadow", array()) == "2")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        // line 953
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide mouse on")), "html", null, true);
        echo "
                                    </option>
                                </select>
                            </td>
                        </tr>";
        // line 959
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay image with shadow")),         // line 960
$context["form"]->getselect("thumbnail[shadow][overlay]", array(0 => "Off", 1 => "On"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "overlay", array()), array("style" => "width: auto;")), "overlay-type");
        // line 962
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow color")),         // line 963
$context["form"]->gettext("thumbnail[shadow][color]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "color", array()), array("style" => array("width" => "300px"), "class" => "gg-color-picker")), "shadow-color");
        // line 965
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow blur")),         // line 966
$context["form"]->getinput("number", "thumbnail[shadow][blur]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "blur", array()), array("style" => array("width" => "auto"))), "shadow-blur");
        // line 968
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow X")),         // line 969
$context["form"]->getinput("number", "thumbnail[shadow][x]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "x", array()), array("style" => array("width" => "auto"))), "shadow-x");
        // line 971
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow Y")),         // line 972
$context["form"]->getinput("number", "thumbnail[shadow][y]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "y", array()), array("style" => array("width" => "auto"))), "shadow-y");
        echo "
                    </tbody>
                </table>
                <div class=\"separator\"></div>";
    }

    // line 978
    public function block_popup($context, array $blocks = array())
    {
        // line 979
        echo "                <table class=\"form-table\" id=\"gg-anl-popup\">
                    <thead>";
        // line 982
        $context["popUpEnabled"] = ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 983
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pop-up Image")), (((        // line 984
$context["form"]->getradio("box[enabled]", "true", Twig_SupTwgSgg_array_merge(array("id" => "box-enable"), ((        // line 987
($context["popUpEnabled"] ?? null)) ? (array("checked" => "checked")) : (array())))) .         // line 989
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "box-enable")) .         // line 993
$context["form"]->getradio("box[enabled]", "false", Twig_SupTwgSgg_array_merge(array("id" => "box-disable"), ((        // line 996
($context["popUpEnabled"] ?? null)) ? (array()) : (array("checked" => "checked")))))) .         // line 998
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "box-disable")), "box", true);
        // line 1002
        echo "
                    </thead>
                    <tbody>";
        // line 1006
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup box theme")), ((        // line 1007
$context["form"]->getbutton("chooseTheme", call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose theme")), array("class" => "button bordered", "id" => "chooseTheme")) .         // line 1012
$context["form"]->gethidden("box[type]", $this->getAttribute($this->getAttribute(        // line 1014
($context["settings"] ?? null), "box", array()), "type", array()))) .         // line 1016
$context["form"]->gethidden("box[theme]", $this->getAttribute($this->getAttribute(        // line 1018
($context["settings"] ?? null), "box", array()), "theme", array()), array("id" => "bigImageTheme"))), "sgg-t-popup-theme");
        // line 1024
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable popup border")),         // line 1025
$context["form"]->getcheckbox("popup[border][enable]", "on", ((($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1028
($context["settings"] ?? null), "popup", array()), "border", array()), "enable", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "popup-border-enable");
        // line 1033
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pop up border type")),         // line 1034
$context["form"]->getselect("popup[border][type]", ($context["borderTypes"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array()), "border", array()), "type", array()), array("style" => "width: auto;")), "border-type-popup");
        // line 1037
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pop up border color")),         // line 1038
$context["form"]->getinput("text", "popup[border][color]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array()), "border", array()), "color", array()), array("class" => "gg-color-picker")), "border-color-popup");
        // line 1040
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pop up border width")), (        // line 1041
$context["form"]->getinput("number", "popup[border][width]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array()), "border", array()), "width", array()), array("style" => array("width" => "140px;"))) .         // line 1042
$context["form"]->getspan("", "pixels")), "border-width-popup");
        // line 1045
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable on mobile")),         // line 1046
$context["form"]->getcheckbox("box[mobile]", "on", ((($this->getAttribute($this->getAttribute(        // line 1049
($context["settings"] ?? null), "box", array()), "mobile", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "mobile");
        // line 1055
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image Text")),         // line 1056
$context["form"]->getselect("box[imageText]", array("data-caption" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption")), "data-title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Title")), "alt" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alt text")), "data-description" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description"))), (($this->getAttribute($this->getAttribute(        // line 1064
($context["settings"] ?? null), "box", array(), "any", false, true), "imageText", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "imageText", array()), "data-description")) : ("data-description")), array("style" => "width: 150px")), "popup-image-text");
        // line 1070
        $this->displayBlock('popupLinkedImageText', $context, $blocks);
        // line 1097
        $this->displayBlock('disableSourceImageForLi', $context, $blocks);
        // line 1118
        $this->displayBlock('enableDownloadPhotosButton', $context, $blocks);
        // line 1139
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide Popup Captions")),         // line 1140
$context["form"]->getcheckbox("box[captions]", "on", ((($this->getAttribute($this->getAttribute(        // line 1143
($context["settings"] ?? null), "box", array()), "captions", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "captions");
        // line 1148
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide long captions")),         // line 1149
$context["form"]->getcheckbox("hideLongTooltipTitles", "on", ((($this->getAttribute(        // line 1152
($context["settings"] ?? null), "hideLongTooltipTitles", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "hide-long-tooltip-titles");
        // line 1157
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")),         // line 1158
$context["form"]->gettext("box[background]", $this->getAttribute($this->getAttribute(        // line 1160
($context["settings"] ?? null), "box", array()), "background", array()), array("class" => "gg-color-picker")), "box-background");
        // line 1167
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background transparency")),         // line 1168
$context["form"]->getselect("box[transparency]", array("0" => "0%", "10" => "10%", "20" => "20%", "30" => "30%", "40" => "40%", "50" => "50%", "60" => "60%", "70" => "70%", "80" => "80%", "90" => "90%", "100" => "100%"), (($this->getAttribute($this->getAttribute(        // line 1183
($context["settings"] ?? null), "box", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "transparency", array()), 30)) : (30)), array("style" => "width: auto")), "box-transparency");
        // line 1188
        if ($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method")) {
            // line 1189
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow")),             // line 1190
$context["form"]->getselect("box[slideshow]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute(            // line 1193
($context["settings"] ?? null), "box", array(), "any", false, true), "slideshow", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshow", array()), "false")) : ("false")), array("style" => "width: auto")), "slideshow", "h4");
        }
        // line 1200
        if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == false)) {
            // line 1201
            echo "                    <tr>
                                    <th scope=\"row\">                
                                        <h4 style=\"margin: 0 !important;\">";
            // line 1203
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow")), "html", null, true);
            echo "</h4>
                                        <label><a href=\"http://supsystic.com/plugins/photo-gallery/?utm_source=plugin&amp;utm_medium=border_type&amp;utm_campaign=gallery\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\" class=\"sggLinkToProVer\">PRO Option</a></label>
                                    </th>
                                    <td id=\"slideshow\">
                                        <select name=\"box[slideshow]\" style=\"width: auto\"><option value=\"true\" name=\"enable\" selected=\"\">Enable</option><option value=\"false\" name=\"disable\">Disable</option></select>
                                    </td>
                    </tr>";
        }
        // line 1213
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow speed")),         // line 1214
$context["form"]->getinput("number", "box[slideshowSpeed]", (($this->getAttribute($this->getAttribute(        // line 1217
($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowSpeed", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowSpeed", array()), 2500)) : (2500)), array("style" => array("width" => "auto")), "box-slideshowSpeed"), "sgg-t-popup-slide-show-speed");
        // line 1224
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow pause on hover")),         // line 1225
$context["form"]->getselect("box[popupHoverStop]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No"))), (($this->getAttribute($this->getAttribute(        // line 1228
($context["settings"] ?? null), "box", array(), "any", false, true), "popupHoverStop", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "popupHoverStop", array()), "true")) : ("true")), array("style" => "width: auto"), "box-popupHoverStop"), "popupHoverStop");
        // line 1236
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow autostart")),         // line 1237
$context["form"]->getselect("box[slideshowAuto]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No"))), (($this->getAttribute($this->getAttribute(        // line 1240
($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowAuto", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowAuto", array()), "false")) : ("false")), array("style" => "width: auto"), "box-slideshowAuto"), "sgg-t-popup-slideshow-autostart");
        // line 1247
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image size")), (((        // line 1248
$context["form"]->getinput("number", "box[popupwidth]", $this->getAttribute($this->getAttribute(        // line 1251
($context["settings"] ?? null), "box", array()), "popupwidth", array()), array("style" => array("width" => "60px"))) .         // line 1254
$context["form"]->getspan("", "x")) .         // line 1255
$context["form"]->getinput("number", "box[popupheight]", $this->getAttribute($this->getAttribute(        // line 1258
($context["settings"] ?? null), "box", array()), "popupheight", array()), array("style" => array("width" => "60px")))) .         // line 1261
$context["form"]->getspan("", "pixels")), "box-popupsize");
        // line 1267
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable browser history")),         // line 1269
$context["form"]->getcheckbox("box[disableHistory]", "true", ((($this->getAttribute($this->getAttribute(        // line 1272
($context["settings"] ?? null), "box", array()), "disableHistory", array()) == "true")) ? (array("checked" => "checked")) : (array()))), "box-disableHistory");
        // line 1278
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable change url")),         // line 1280
$context["form"]->getcheckbox("box[disableChangeUrl]", "true", ((($this->getAttribute($this->getAttribute(        // line 1283
($context["settings"] ?? null), "box", array()), "disableChangeUrl", array()) == "true")) ? (array("checked" => "checked")) : (array()))), "box-disableChangeUrl");
        // line 1289
        $this->displayBlock('popupAfter', $context, $blocks);
        // line 1369
        echo "                    </tbody>
                </table>";
        // line 1371
        echo $context["form"]->gethidden("popup[placementType]", (($this->getAttribute($this->getAttribute(        // line 1373
($context["settings"] ?? null), "popup", array(), "any", false, true), "placementType", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array(), "any", false, true), "placementType", array()), 0)) : (0)), array("id" => "popupPlacementTypeHidden"));
        // line 1375
        echo "
                <div class=\"separator\"></div>";
    }

    // line 1070
    public function block_popupLinkedImageText($context, array $blocks = array())
    {
        // line 1071
        echo "                            <tr>
                                <th scope=\"row\">
                                    <label style=\"margin: 0 !important;\">";
        // line 1074
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Linked Image Text")), "html", null, true);
        // line 1075
        echo $context["form"]->getshow_tooltip("popupLinkedImageTextPro");
        echo "
                                        <br />
                                        <label><a href=\"";
        // line 1077
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=linkedImageText&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                    </label>
                                </th>
                                <td>";
        // line 1081
        echo $context["form"]->getselect("box[linkedImageTextFree]", array("data-title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Title")), "alt" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alt text")), "data-description" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description"))), "data-title", array("style" => "width: 150px", "disabled" => "", "id" => "ptsLinkTextChoose"));
        // line 1091
        echo "
                                </td>
                            </tr>";
    }

    // line 1097
    public function block_disableSourceImageForLi($context, array $blocks = array())
    {
        // line 1098
        echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label style=\"margin: 0 !important;\">";
        // line 1101
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable source image for Linked Images")), "html", null, true);
        // line 1102
        echo $context["form"]->getshow_tooltip("disableSourceImageForLiPro");
        echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t<label><a href=\"";
        // line 1104
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=linkedImageText&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>";
        // line 1108
        echo $context["form"]->getcheckbox("box[disableSourceImageForLiFree]", "1", array("disabled" => "disabled"));
        // line 1112
        echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>";
    }

    // line 1118
    public function block_enableDownloadPhotosButton($context, array $blocks = array())
    {
        // line 1119
        echo "                            <tr>
                                <th scope=\"row\">
                                    <label style=\"margin: 0 !important;\">";
        // line 1122
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable Download Photos Button")), "html", null, true);
        // line 1123
        echo $context["form"]->getshow_tooltip("enableDownloadPhotosButtonPro");
        echo "
                                        <br />
                                        <label><a href=\"";
        // line 1125
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=linkedImageText&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                    </label>
                                </th>
                                <td>";
        // line 1129
        echo $context["form"]->getcheckbox("box[enableDownloadPhotosButtonFree]", "1", array("disabled" => "disabled"));
        // line 1133
        echo "
                                </td>
                            </tr>";
    }

    // line 1289
    public function block_popupAfter($context, array $blocks = array())
    {
        // line 1291
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video size")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.size", (((        // line 1294
$context["form"]->gettext("popup[video][width]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1296
($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "width", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "width", array()), "853")) : ("853")), array("style" => array("width" => "40px"), "disabled" => "")) .         // line 1299
$context["form"]->getspan("", "x")) .         // line 1300
$context["form"]->gettext("popup[video][height]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1302
($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "height", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "height", array()), "480")) : ("480")), array("style" => array("width" => "40px"), "disabled" => ""))) .         // line 1305
$context["form"]->getspan("", "pixels")));
        // line 1309
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Autoplay video")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.autoplay",         // line 1312
$context["form"]->getselect("popup[video][autoplay]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1315
($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "autoplay", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "autoplay", array()), "false")) : ("false")), array("disabled" => "")));
        // line 1321
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("When video ends")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.onEnd",         // line 1324
$context["form"]->getselect("popup[video][onEnd]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Do nothing")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open next slide")), "2" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Close popup"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1331
($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "onEnd", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "onEnd", array()), "0")) : ("0")), array("disabled" => "")));
        // line 1336
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show rotate button")), "utm_source=plugin&utm_medium=popup_show_rotate_btn&utm_campaign=gallery", "box[freeSRB]",         // line 1339
$context["form"]->getcheckbox("box[freeSRB]", 1, array("disabled" => "")));
        // line 1346
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show details button")), "utm_source=plugin&utm_medium=popup_show_details_button&utm_campaign=gallery", "box[freeSLB]",         // line 1349
$context["form"]->getcheckbox("box[freeSLB]", 1, array("disabled" => "")));
        // line 1358
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show On hover thumbnail")), "utm_source=plugin&utm_medium=popup_show_thumbnail_on_hover&utm_campaign=gallery", "box[freeSTFOH]",         // line 1361
$context["form"]->getcheckbox("box[freeSTFOH]", 1, array("disabled" => "")));
    }

    // line 1379
    public function block_lazyload($context, array $blocks = array())
    {
        // line 1380
        echo "\t\t\t\t<table class=\"form-table\" name=\"lazyload\" id=\"gg-anl-lazyload\">
\t\t\t\t\t<thead>";
        // line 1383
        if ($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method")) {
            // line 1384
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Lazy Load")), (((            // line 1385
$context["form"]->getradio("lazyload[enabled]", "1", Twig_SupTwgSgg_array_merge(array("id" => "lazyLoadEnabled"), ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "lazyload", array()), "enabled", array()) == "1")) ? (array("checked" => "checked")) : (array())))) .             // line 1386
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "lazyLoadEnabled")) .             // line 1387
$context["form"]->getradio("lazyload[enabled]", "0", Twig_SupTwgSgg_array_merge(array("id" => "lazyLoadDisabled"), ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "lazyload", array()), "enabled", array()) == "1")) ? (array()) : (array("checked" => "checked")))))) .             // line 1388
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "lazyLoadDisabled")), "sgg-t-lazyload-enable", true, "sggLazyLoadEnableRow");
        }
        // line 1390
        if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == false)) {
            // line 1391
            echo "                    <tr id=\"sggLazyLoadEnableRow\">
                        <th scope=\"row\">                
                            <h3 style=\"margin: 0 !important;\">";
            // line 1393
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Lazy Load")), "html", null, true);
            echo "</h3>
                            <label><a href=\"http://supsystic.com/plugins/photo-gallery/?utm_source=plugin&amp;utm_medium=caption_settings_type&amp;utm_campaign=gallery\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\" class=\"sggLinkToProVer\">PRO Option</a></label>
                        </th>
                        <td id=\"sgg-t-lazyload-enable\">
                            <input type=\"radio\" name=\"lazyloadpromo\" id=\"lazyLoadEnabled\" checked>";
            // line 1398
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "html", null, true);
            echo "
                            <input type=\"radio\" name=\"lazyloadpromo\" id=\"lazyLoadDisabled\" >";
            // line 1400
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "html", null, true);
            echo "
                        </td>
                    </tr>";
        }
        // line 1404
        echo "                    </thead>
\t\t\t\t\t<tbody>";
        // line 1406
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide loader")),         // line 1408
$context["form"]->getcheckbox("lazyload[hideLoader]", "true", ((($this->getAttribute($this->getAttribute(        // line 1411
($context["settings"] ?? null), "lazyload", array()), "hideLoader", array()) == "true")) ? (array("checked" => "checked")) : (array()))), "lazyload-hideLoader");
        // line 1415
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Animation effect")),         // line 1417
$context["form"]->getselect("lazyload[animationEffect]", array("show" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("show")), "fadeIn" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("fade")), "slideDown" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("slide"))), (($this->getAttribute($this->getAttribute(        // line 1424
($context["settings"] ?? null), "lazyload", array(), "any", false, true), "animationEffect", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "lazyload", array(), "any", false, true), "animationEffect", array()), "0")) : ("0"))));
        // line 1427
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Effect duration")),         // line 1429
$context["form"]->getselect("lazyload[effectDuration]", array("400" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("default")), "0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("none")), "200" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("fast")), "600" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("slow")), "2000" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("very slow"))), (($this->getAttribute($this->getAttribute(        // line 1438
($context["settings"] ?? null), "lazyload", array(), "any", false, true), "effectDuration", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "lazyload", array(), "any", false, true), "effectDuration", array()), "400")) : ("400"))));
        // line 1440
        echo "
\t\t\t\t\t\t<input type=\"hidden\" value=\"";
        // line 1441
        echo Twig_SupTwgSgg_escape_filter($this->env, (($context["pluginUrl"] ?? null) . "/assets/img/loading.gif"), "html", null, true);
        echo "\" name=\"lazyload[defaultImgUrl]\"/>
\t\t\t\t\t\t<input type=\"hidden\" value=\"";
        // line 1442
        echo Twig_SupTwgSgg_escape_filter($this->env, (($context["pluginUrl"] ?? null) . "/assets/img/leer.png"), "html", null, true);
        echo "\" name=\"lazyload[leerImgUrl]\"/>
\t\t\t\t\t</tbody>
\t\t\t\t</table>";
    }

    // line 1447
    public function block_preload($context, array $blocks = array())
    {
        // line 1448
        echo "                <table class=\"form-table\" name=\"preload\" id=\"gg-anl-preloader\">
                    <thead>";
        // line 1450
        $context["preloadEnabled"] = ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 1451
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Loader")), (((        // line 1452
$context["form"]->getradio("preload[enabled]", "true", Twig_SupTwgSgg_array_merge(array("id" => "preload-enable"), ((($context["preloadEnabled"] ?? null)) ? (array("checked" => "checked")) : (array())))) .         // line 1453
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "preload-enable")) .         // line 1454
$context["form"]->getradio("preload[enabled]", "false", Twig_SupTwgSgg_array_merge(array("id" => "preload-disable"), ((($context["preloadEnabled"] ?? null)) ? (array()) : (array("checked" => "checked")))))) .         // line 1455
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "preload-disable")), "preload", true);
        echo "
                    </thead>";
        // line 1457
        if ( !$this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method")) {
            // line 1458
            echo "                    <tbody>
                        <tr id=\"preload-background\">
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">";
            // line 1462
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), "html", null, true);
            echo "
                                    <br />
                                    <label><a href=\"";
            // line 1464
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                </label>
                            </th>
                            <td>";
            // line 1468
            echo $context["form"]->gettext("preload[background]", "#0073AA", array("class" => "gg-color-picker", "id" => "preloadColor-free"));
            echo "
                            </td>
                        </tr>";
            // line 1471
            $context["piconImg"] = ('' === $tmp = "                            <div class=\"gallery-loading\">
                                <div class=\"blocks\">
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                </div>
                            </div>") ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
            // line 1481
            echo "
                        <tr>
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">";
            // line 1485
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose Icon")), "html", null, true);
            // line 1486
            echo $context["form"]->getshow_tooltip("chooseIconPro");
            echo "
                                    <br />
                                    <label><a href=\"";
            // line 1488
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                </label>
                            </th>
                            <td>";
            // line 1492
            echo $context["form"]->getbutton("buttons-preload-icon", "Choose Icon", array("class" => "button button-primary", "id" => "choosePreicon-free"));
            // line 1493
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["piconImg"] ?? null), "html", null, true);
            echo "
                            </td>
                        </tr>
                    </tbody>";
        }
        // line 1498
        echo "                </table>";
    }

    // line 1501
    public function block_attributes($context, array $blocks = array())
    {
        // line 1502
        echo "                <table class=\"form-table\" name=\"attributes\" id=\"gg-anl-attributes\">
                    <thead>";
        // line 1504
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Custom Attributes")), "utm_source=plugin&utm_campaign=gallery", "customAttributes", (((        // line 1507
$context["form"]->getradio("attributes[enabled]", "true", array("id" => "attributes-enable", "disabled" => "disabled")) .         // line 1508
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "attributes-enable")) .         // line 1509
$context["form"]->getradio("attributes[enabled]", "false", array("id" => "attributes-disable", "checked" => "checked", "disabled" => "disabled"))) .         // line 1510
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "attributes-disable")), true, 1);
        // line 1511
        echo "
                    </thead>
                </table>";
    }

    // line 1516
    public function block_additionalCaptionSettings($context, array $blocks = array())
    {
        // line 1517
        echo "\t\t\t\t<table class=\"form-table\" name=\"captionAdditSett\" id=\"gg-anl-caption-add-sett\">
\t\t\t\t\t<thead>";
        // line 1519
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thumbnail transformations")), "utm_source=plugin&utm_medium=additinalCaptionSettings&utm_campaign=gallery", "additionalCaptionSettingInPro", (((        // line 1522
$context["form"]->getradio("captionEffectSettings[Enable]", 1, array("id" => "captEffSettEnable", "class" => "captAdditEffectSettEnbl", "disabled" => "disabled")) .         // line 1527
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "captEffSettEnable")) .         // line 1531
$context["form"]->getradio("captionEffectSettings[Enable]", 0, array("id" => "captEffDisable", "class" => "captAdditEffectSettEnbl", "checked" => "checked", "disabled" => "disabled"))) .         // line 1536
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "captEffDisable")), true, 1);
        // line 1542
        echo "
\t\t\t\t\t</thead>
\t\t\t\t</table>";
    }

    // line 1553
    public function block_post($context, array $blocks = array())
    {
        // line 1554
        echo "            <div data-tab=\"post\">
                <h1 style=\"line-height: 1;\">";
        // line 1556
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Posts layout")), "html", null, true);
        // line 1557
        echo $context["form"]->getshow_tooltip("postsLayoutPro");
        echo "
                    </br>
                    <a class=\"button get-pro\" target=\"_blank\"
                       href=\"";
        // line 1560
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=postfeed&utm_campaign=gallery")), "html", null, true);
        echo "\">Get
                        PRO for 49\$</a>
                </h1>

                <div>
                    <a href=\"";
        // line 1565
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=postfeed&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                        <img style=\"max-width:796px;\" src=\"";
        // line 1566
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/posts_pro.jpg\" title=\"Available in PRO version\" />
                    </a>
                </div>
            </div>";
    }

    // line 1620
    public function block_captionSettingsType($context, array $blocks = array())
    {
        // line 1621
        echo "\t\t\t\t<table class=\"form-table captions-settings-type\" name=\"captionSettingsType\">
\t\t\t\t\t<tbody>";
        // line 1623
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Use Caption Builder")), "utm_source=plugin&utm_medium=caption_settings_type&utm_campaign=gallery", "caption-settings-type-pro", (((        // line 1626
$context["form"]->getradio("captionBuilder[enabled]", 1, array("id" => "ggsShowUserCaptionBuilder", "class" => "ggUserCaptionBuilderCl", "disabled" => "disabled")) .         // line 1631
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "ggsShowUserCaptionBuilder")) .         // line 1635
$context["form"]->getradio("captionBuilder[enabled]", 0, array("id" => "ggsHideUserCaptionBuilder", "class" => "ggUserCaptionBuilderCl", "disabled" => "disabled", "checked" => "checked"))) .         // line 1640
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "ggsHideUserCaptionBuilder")), "useCaptionBuilder", true);
        // line 1646
        echo "
\t\t\t\t\t</tbody>
\t\t\t\t</table>";
    }

    // line 1661
    public function block_overlaySettings($context, array $blocks = array())
    {
        // line 1662
        echo "\t\t\t\t\t\t<table class=\"form-table\" name=\"captions\">
\t\t\t\t\t\t\t<thead>";
        // line 1665
        if ($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method")) {
            // line 1666
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Captions")), (((            // line 1667
$context["form"]->getradio("thumbnail[overlay][enabled]", "true", Twig_SupTwgSgg_array_merge(array("id" => "showCaptions"), ((            // line 1670
($context["enableCaptions"] ?? null)) ? (array("checked" => "checked")) : (array())))) .             // line 1672
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "showCaptions")) .             // line 1676
$context["form"]->getradio("thumbnail[overlay][enabled]", "false", Twig_SupTwgSgg_array_merge(array("id" => "hideCaptions"), ((            // line 1679
($context["enableCaptions"] ?? null)) ? (array()) : (array("checked" => "checked")))))) .             // line 1681
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "hideCaptions")), "sgg-ci-caption-enable", true, "useCaptions");
        }
        // line 1689
        if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == false)) {
            // line 1690
            echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Captions")), "utm_source=plugin&utm_medium=caption_settings_type&utm_campaign=gallery", "", (((            // line 1693
$context["form"]->getradio("thumbnail[overlay][enabled]", "true", array("id" => "showCaptions", "checked" => "checked", "disabled" => "disabled")) .             // line 1694
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "showCaptions")) .             // line 1695
$context["form"]->getradio("thumbnail[overlay][enabled]", "false", array("id" => "hideCaptions", "disabled" => "disabled"))) .             // line 1696
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "hideCaptions")), "sgg-ci-caption-enable", true, "useCaptions");
        }
        // line 1703
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Effect")),         // line 1704
$context["form"]->getbutton("", call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose effect")), array("id" => "chooseEffect", "class" => "button bordered")), "chooseEffect");
        // line 1713
        $this->displayBlock('backgroundImageForHoverEffect', $context, $blocks);
        // line 1728
        $this->displayBlock('backgroundColorForShowOnHover', $context, $blocks);
        // line 1741
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Personal captions")),         // line 1742
$context["form"]->getselect("thumbnail[overlay][personal]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1745
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "personal", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "personal", array()), "false")) : ("false")), array("style" => "width: auto;")), "overlay-personal");
        // line 1752
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Style")),         // line 1753
$context["form"]->getselect("", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))),         // line 1756
($context["polaroidIsEnable"] ?? null), array("style" => "width: auto;", "class" => "polaroid-effect-class")), "polaroid-effect", "h4");
        // line 1764
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Image Animation")),         // line 1765
$context["form"]->getselect("thumbnail[overlay][polaroidAnimation]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1768
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array()), "true")) : ("true")), array("style" => "width: auto;")), "polaroid-animation");
        // line 1775
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Image Scattering ")),         // line 1776
$context["form"]->getselect("thumbnail[overlay][polaroidScattering]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1779
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array()), "true")) : ("true")), array("style" => "width: auto;")), "polaroid-scattering");
        // line 1786
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Frame Width")),         // line 1787
$context["form"]->getinput("number", "thumbnail[overlay][polaroidFrameWidth]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1790
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array()), 20)) : (20)), array("style" => array("width" => "140px"))), "polaroid-frame-width", null, "polaroid-fram-width-row");
        // line 1799
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")),         // line 1800
$context["form"]->gettext("thumbnail[overlay][background]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1802
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "background", array()), array("class" => "gg-color-picker")), "overlay-background");
        // line 1809
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text color")),         // line 1810
$context["form"]->gettext("thumbnail[overlay][foreground]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1812
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "foreground", array()), array("class" => "gg-color-picker")), "overlay-foreground");
        // line 1819
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transparency")),         // line 1820
$context["form"]->getselect("thumbnail[overlay][transparency]", array(0 => "0%", 1 => "10%", 2 => "20%", 3 => "30%", 4 => "40%", 5 => "50%", 6 => "60%", 7 => "70%", 8 => "80%", 9 => "90%", 10 => "100%"), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1823
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "transparency", array()), 9)) : (9)), array("style" => "width: auto;")), "overlay-transparency");
        // line 1830
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text size")), (        // line 1831
$context["form"]->getinput("number", "thumbnail[overlay][text_size]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1834
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), array("style" => array("width" => "140px"))) .         // line 1837
$context["form"]->getselect("thumbnail[overlay][text_size_unit]", array(0 => "pixels", 1 => "percents", 2 => "ems"), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1840
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array("style" => "margin-top: -2px; height: 27px"))), "text-size");
        // line 1847
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text horizontal align")),         // line 1848
$context["form"]->getselect("thumbnail[overlay][text_align]", array("left" => "Left", "right" => "Right", "center" => "Center", "auto" => "Auto"), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1851
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_align", array()), array("style" => "width: auto;")), "text-align");
        // line 1858
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text vertical align")),         // line 1859
$context["form"]->getselect("thumbnail[overlay][position]", array("top" => "Top", "middle" => "Middle", "bottom" => "Bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1862
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), array("style" => "width: auto;")), "overlay-position");
        // line 1869
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Font family")),         // line 1870
$context["form"]->getselectv("thumbnail[overlay][font_family]",         // line 1872
($context["fontList"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1873
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "font_family", array()), array("style" => "width: auto;")), "font-family");
        // line 1881
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide image title")),         // line 1882
$context["form"]->getselect("thumbnail[tooltip]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), $this->getAttribute($this->getAttribute(        // line 1885
($context["settings"] ?? null), "thumbnail", array()), "tooltip", array()), array("style" => "width: auto;")), "tooltip");
        // line 1892
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Always show captions on mobile")),         // line 1893
$context["form"]->getselect("thumbnail[isMobile]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute(        // line 1896
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isMobile", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isMobile", array()), "false")) : ("false"))), "ismobile");
        // line 1902
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable captions on mobile")),         // line 1903
$context["form"]->getselect("thumbnail[isDisableMobileCaption]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute(        // line 1906
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array()), "false")) : ("false"))), "isDisableMobileCaption");
        // line 1909
        echo "
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t</table>

\t\t\t\t\t\t<div class=\"separator\"></div>";
    }

    // line 1713
    public function block_backgroundImageForHoverEffect($context, array $blocks = array())
    {
        // line 1714
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image on hover")),         // line 1715
$context["form"]->getselect("thumbnail[overlay][imageOnHoverEnable]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable"))), "0", array("disabled" => "disabled")));
    }

    // line 1728
    public function block_backgroundColorForShowOnHover($context, array $blocks = array())
    {
        // line 1729
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color for \"Show on hover\"")),         // line 1730
$context["form"]->getselect("thumbnail[overlay][backgroundFoShowOnHover]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), 0, array("disabled" => "disabled")));
    }

    // line 1916
    public function block_icons($context, array $blocks = array())
    {
        // line 1917
        echo "\t\t\t\t\t\t<table class=\"form-table\" name=\"icons\">
\t\t\t\t\t\t\t<thead>";
        // line 1919
        $context["iconsEnabled"] = ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "enabled", array()), "false")) : ("false")) == "true");
        // line 1920
        if ($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method")) {
            // line 1921
            echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons")), (((            // line 1922
$context["form"]->getradio("icons[enabled]", "true", Twig_SupTwgSgg_array_merge(array("id" => "icons-enable"), ((($context["iconsEnabled"] ?? null)) ? (array("checked" => "checked")) : (array())))) .             // line 1923
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "icons-enable")) .             // line 1924
$context["form"]->getradio("icons[enabled]", "false", Twig_SupTwgSgg_array_merge(array("id" => "icons-disable"), ((($context["iconsEnabled"] ?? null)) ? (array()) : (array("checked" => "checked")))))) .             // line 1925
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "icons-disable")), "photo-icon", true);
        }
        // line 1928
        if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == false)) {
            // line 1929
            echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons")), " ", " ", (((            // line 1932
$context["form"]->getradio("icons[enabled]", "true", array("id" => "icons-enable", "checked" => "checked", "disabled" => "disabled")) .             // line 1933
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "icons-enable")) .             // line 1934
$context["form"]->getradio("icons[enabled]", "false", array("id" => "icons-disable", "disabled" => "disabled"))) .             // line 1935
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "icons-disable")), "photo-icon", true);
        }
        // line 1938
        echo "\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>";
        // line 1940
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Animation effects")),         // line 1941
$context["form"]->getbutton(null, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Animation")), array("class" => "button bordered", "id" => "selectIconsEffect")), "ci-icons-animation-effects");
        // line 1943
        echo "
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsColor\">";
        // line 1947
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons color")), "html", null, true);
        // line 1948
        echo $context["form"]->getshow_tooltip("ci-icons-color");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsColor\" class=\"gg-color-picker\" value=\"";
        // line 1952
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "color", array()), "html", null, true);
        echo "\" name=\"icons[color]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsHoverColor\">";
        // line 1958
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons hover color")), "html", null, true);
        // line 1959
        echo $context["form"]->getshow_tooltip("ci-icons-hover-color");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsHoverColor\" class=\"gg-color-picker\" value=\"";
        // line 1963
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "hover_color", array()), "html", null, true);
        echo "\" name=\"icons[hover_color]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsBackgroundColor\">";
        // line 1969
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), "html", null, true);
        // line 1970
        echo $context["form"]->getshow_tooltip("ci-icons-bg-color");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsBackgroundColor\" class=\"gg-color-picker\" value=\"";
        // line 1974
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background", array()), "html", null, true);
        echo "\" name=\"icons[background]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsBackgroundHoverColor\">";
        // line 1980
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background hover color")), "html", null, true);
        // line 1981
        echo $context["form"]->getshow_tooltip("ci-icons-hover-bg-color");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsBackgroundHoverColor\" class=\"gg-color-picker\" value=\"";
        // line 1985
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background_hover", array()), "html", null, true);
        echo "\" name=\"icons[background_hover]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsSize\">";
        // line 1991
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons size")), "html", null, true);
        // line 1992
        echo $context["form"]->getshow_tooltip("ci-icons-hover-size");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"number\" pattern=\"[0-9]\" id=\"iconsSize\"  name=\"icons[size]\" value=\"";
        // line 1996
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsMargin\">";
        // line 2002
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Distance between icons")), "html", null, true);
        // line 2003
        echo $context["form"]->getshow_tooltip("ci-icons-distance");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"number\" pattern=\"[0-9]\" id=\"iconsMargin\"  name=\"icons[margin]\" value=\"";
        // line 2007
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "margin", array()), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsOverlay\">";
        // line 2013
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show overlay")), "html", null, true);
        // line 2014
        echo $context["form"]->getshow_tooltip("ci-icons-show-overlay");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select id=\"iconsOverlay\" name=\"icons[overlay_enabled]\" style=\"width: auto;\">
\t\t\t\t\t\t\t\t\t\t<option value=\"true\"";
        // line 2019
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_enabled", array()), "true");
        echo ">";
        // line 2020
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"false\"";
        // line 2022
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_enabled", array()), "false");
        echo ">";
        // line 2023
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"icons-overlay-toggle\">
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsOverlayColor\">";
        // line 2031
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay color")), "html", null, true);
        // line 2032
        echo $context["form"]->getshow_tooltip("ci-icons-overlay-color");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsOverlayColor\" class=\"gg-color-picker\" value=\"";
        // line 2036
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_color", array()), "html", null, true);
        echo "\" name=\"icons[overlay_color]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"icons-overlay-toggle\">
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsOverlayTransparency\">";
        // line 2042
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay transparency")), "html", null, true);
        // line 2043
        echo $context["form"]->getshow_tooltip("ci-icons-overlay-transparency");
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select id=\"iconsOverlayTransparency\" name=\"icons[overlay_transparency]\" style=\"width: auto;\">
\t\t\t\t\t\t\t\t\t\t<option value=\"0\"";
        // line 2048
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 0);
        echo ">0%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\"";
        // line 2049
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 1);
        echo ">10%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"2\"";
        // line 2050
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 2);
        echo ">20%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"3\"";
        // line 2051
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 3);
        echo ">30%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"4\"";
        // line 2052
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 4);
        echo ">40%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"5\"";
        // line 2053
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 5);
        if ( !$this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "overlay_transparency", array(), "any", true, true)) {
            echo "selected=\"selected\"";
        }
        echo ">50%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"6\"";
        // line 2054
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 6);
        echo ">60%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"7\"";
        // line 2055
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 7);
        echo ">70%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"8\"";
        // line 2056
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 8);
        echo ">80%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"9\"";
        // line 2057
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 9);
        echo ">90%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"10\"";
        // line 2058
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 10);
        echo ">100%</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>";
        // line 2062
        echo $this->getAttribute($this, "showFewIconsBy", array(0 => ($context["settings"] ?? null), 1 => ($context["form"] ?? null), 2 => 0), "method");
        echo "
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<div class=\"separator\"></div>";
    }

    // line 2069
    public function block_proCaptionAndIconSettings($context, array $blocks = array())
    {
    }

    // line 2073
    public function block_exifCaptionSettings($context, array $blocks = array())
    {
        // line 2074
        echo "\t\t\t\t\t<table class=\"form-table\" name=\"captions\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h1 style=\"line-height: 1;\">";
        // line 2079
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show EXIF data")), "html", null, true);
        // line 2080
        echo $context["form"]->getshow_tooltip("showExifDataPro");
        echo "</br>
\t\t\t\t\t\t\t\t\t\t<a class=\"button get-pro\" href=\"";
        // line 2081
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=exif-data&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">";
        // line 2082
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get PRO for 49\$")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>";
    }

    // line 2094
    public function block_categories($context, array $blocks = array())
    {
        // line 2095
        echo "            <div data-tab=\"cats\">
                <h1 style=\"line-height: 1;\">";
        // line 2097
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categories")), "html", null, true);
        // line 2098
        echo $context["form"]->getshow_tooltip("categoriesPro");
        echo "</br>
                    </br>
                    <a class=\"button get-pro\" target=\"_blank\"
                       href=\"";
        // line 2101
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=categories&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO</a>
                </h1>

                <div>
                    <a href=\"";
        // line 2105
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=categories&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                        <img style=\"max-width:600px;\" src=\"";
        // line 2106
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/cats_pro.jpg\" title=\"Available in PRO version\" />
                    </a>
                </div>";
        // line 2109
        $this->displayBlock('pagination', $context, $blocks);
        // line 2125
        echo "            </div>";
    }

    // line 2109
    public function block_pagination($context, array $blocks = array())
    {
        // line 2110
        echo "                    <h1 style=\"line-height: 1;\">";
        // line 2111
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pagination")), "html", null, true);
        // line 2112
        echo $context["form"]->getshow_tooltip("paginationPro");
        echo "</br>
                        </br>
                        <a class=\"button get-pro\" target=\"_blank\"
                           href=\"";
        // line 2115
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=pages&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO</a>
                    </h1>
                    <div name=\"pagination\">
                        <div>
                            <a href=\"";
        // line 2119
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=pages&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                                <img style=\"max-width:600px;\" src=\"";
        // line 2120
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/pagination_pro.jpg\" title=\"Available in PRO version\" />
                            </a>
                        </div>
                    </div>";
    }

    // line 2128
    public function block_watermark($context, array $blocks = array())
    {
        // line 2129
        echo "            <div data-tab=\"water-m-tab\">
                <h1 style=\"line-height: 1em;\">
                    <a class=\"button get-pro\" target=\"_blank\"
                       href=\"";
        // line 2132
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=watermarks&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO for 49\$</a>
                </h1>
                <div>
                    <a href=\"";
        // line 2135
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=watermarks&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                        <img src=\"";
        // line 2136
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/water_m_pro-min.png\" />
                    </a>
                </div>
            </div>";
    }

    // line 2142
    public function block_form($context, array $blocks = array())
    {
    }

    // line 2273
    public function block_captionEffectInPro($context, array $blocks = array())
    {
        // line 2274
        echo "\t\t\t\t\t\t\t<figure class=\"grid-gallery-caption available-in-pro\" data-grid-gallery-type=\"";
        echo Twig_SupTwgSgg_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
        // line 2275
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=caption-show-on-hover&utm_campaign=gallery")), "html", null, true);
        echo "\" class=\"caption-available-in-pro-link\">
\t\t\t\t\t\t\t\t\t<img data-src=\"holder.js/150x150?theme=industrial&text=";
        // line 2276
        echo Twig_SupTwgSgg_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" class=\"dialog-image\">
\t\t\t\t\t\t\t\t\t<figcaption style=\"";
        // line 2277
        echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_trim_filter(($context["figcaptionStyle"] ?? null)), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"grid-gallery-figcaption-wrap\" style=\"width:100%;height:100%;top:0;\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"display:table;width:100%;height:100%;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span";
        // line 2280
        if (($this->getAttribute(($context["settings"] ?? null), "rtl", array()) == true)) {
            echo "dir=\"rtl\" class=\"ggRtlClass\"";
        }
        echo " style=\"display:table-cell;font-size:";
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
        echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
        echo ";padding:10px;vertical-align:";
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
        echo ";\">Caption</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t<div class=\"get-in-pro-element\">";
        // line 2285
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pro Feature")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</figure>";
    }

    // line 2335
    public function block_iconsEffects($context, array $blocks = array())
    {
        // line 2336
        $context['_parent'] = $context;
        $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["iconsWithCaptionsEffects"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 2337
            echo "\t\t\t\t\t\t\t\t<figure class=\"grid-gallery-caption\" data-type=\"icons\" data-grid-gallery-type=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 2338
            echo Twig_SupTwgSgg_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" class=\"dialog-image\"/>
\t\t\t\t\t\t\t\t\t<figcaption style=\"";
            // line 2339
            echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_trim_filter(($context["figcaptionStyle"] ?? null)), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"hi-icon-wrap\" style=\"width: 48px; height: 48px; margin-top: 30%; position:relative;\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"hi-icon icon-link\" style=\"border:1px solid #ccc; border-radius:50%;margin:auto;position:absolute;left:0;right:0;top: 0;bottom: 0;\">
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t<div class=\"caption-with-";
            // line 2345
            echo Twig_SupTwgSgg_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<div style=\"display: table; height:100%; width:100%;\">
\t\t\t\t\t\t\t\t\t\t\t<span style=\"padding: 10px;display:table-cell;font-size:";
            // line 2347
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\tvertical-align:";
            // line 2348
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";\">
\t\t\t\t\t\t\t\t\t\t\t\tCaption
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"select-element\">";
            // line 2354
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 2556
    public function block_modals($context, array $blocks = array())
    {
        // line 2557
        echo "        <div id=\"iconsPreview\" title=\"";
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select icons effects")), "html", null, true);
        echo "\">";
        // line 2559
        $context["iconsEffects"] = array("hi-icon-effect-1a" => array("padding" => "0", "bg" => "41ab6b"), "hi-icon-effect-1b" => array("padding" => "0", "bg" => "41ab6b"), "hi-icon-effect-2a" => array("padding" => "0", "bg" => "eea303"), "hi-icon-effect-2b" => array("padding" => "0", "bg" => "eea303"), "hi-icon-effect-3a" => array("padding" => "0", "bg" => "f06060"), "hi-icon-effect-3b" => array("padding" => "0", "bg" => "f06060"), "hi-icon-effect-5a" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5b" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5c" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5d" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-7a" => array("padding" => "0", "bg" => "d54f30"), "hi-icon-effect-7b" => array("padding" => "0", "bg" => "d54f30"), "hi-icon-effect-9a" => array("padding" => "0", "bg" => "96a94b"), "hi-icon-effect-9b" => array("padding" => "0", "bg" => "96a94b"));
        // line 2576
        ob_start();
        // line 2577
        $this->displayBlock('icon_wrap_item_class', $context, $blocks);
        $context["var_icon_wrap_item_class"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
        // line 2581
        $context['_parent'] = $context;
        $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["iconsEffects"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["p"]) {
            // line 2582
            echo "                <div class=\"hi-icon-wrap";
            echo " ";
            echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_slice($this->env, $context["name"], 0, (($context["length"] ?? null) - 1)), "html", null, true);
            echo " ";
            echo Twig_SupTwgSgg_escape_filter($this->env, $context["name"], "html", null, true);
            echo " ";
            echo " holderjs\" style=\"display: inline-block; padding:";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["p"], "padding", array()), "html", null, true);
            echo "; width: 150px; height: 150px; background-color: #434A52; background-repeat: no-repeat; overflow: hidden;\">
                    <a href=\"#\" class=\"hi-icon";
            // line 2583
            echo " ";
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["var_icon_wrap_item_class"] ?? null), "html", null, true);
            echo "\" data-effect=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" data-effect-base=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_slice($this->env, $context["name"], 0, (($context["length"] ?? null) - 1)), "html", null, true);
            echo "\" title=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Click on the icon to select effect")) . " ") . $context["name"]), "html", null, true);
            echo "\" style=\"\">Select</a>
                </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2586
        echo "        </div>
\t\t<style id=\"sggSettingsIconSizeStyle\">
\t\t\t.hi-icon {
\t\t\t\twidth:";
        // line 2589
        echo Twig_SupTwgSgg_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
\t\t\t\theight:";
        // line 2590
        echo Twig_SupTwgSgg_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
\t\t\t}
\t\t</style>
\t\t<style id=\"sggSettingsIconColorStyle\">
\t\t\t.hi-icon {color:";
        // line 2594
        echo Twig_SupTwgSgg_escape_filter($this->env, GridGallery_Galleries_Module::hexToRgbaStr($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "color", array()), (1 - ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()) / 10))), "html", null, true);
        echo " !important;}
\t\t</style>
\t\t<style id=\"sggSettingsIconBgColorStyle\">
\t\t\t.hi-icon { background:";
        // line 2597
        echo Twig_SupTwgSgg_escape_filter($this->env, GridGallery_Galleries_Module::hexToRgbaStr($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background", array()), (1 - ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "bgTransparency", array()) / 10))), "html", null, true);
        echo " !important; }
\t\t</style>
\t\t<style id=\"sggSettingHiIconHoverColorStyle\">
\t\t\t.hi-icon:hover { color:";
        // line 2600
        echo Twig_SupTwgSgg_escape_filter($this->env, GridGallery_Galleries_Module::hexToRgbaStr($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "hover_color", array()), (1 - ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()) / 10))), "html", null, true);
        echo " !important; }
\t\t</style>
\t\t<style id=\"sggSettingHiIconHoverBgStyle\">
\t\t\t.hi-icon:hover { background:";
        // line 2603
        echo Twig_SupTwgSgg_escape_filter($this->env, GridGallery_Galleries_Module::hexToRgbaStr($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background_hover", array()), (1 - ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "bgTransparency", array()) / 10))), "html", null, true);
        echo " !important; }
\t\t</style>
\t\t<style id=\"sggSettingHiIconBeforeFontSizeStyle\">
\t\t\t.hi-icon:before {
\t\t\t\tfont-size:";
        // line 2607
        echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "size", array()), 16)) : (16)), "html", null, true);
        echo "px !important;
\t\t\t\tline-height:";
        // line 2608
        echo Twig_SupTwgSgg_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
\t\t\t}
\t\t</style>";
    }

    // line 2577
    public function block_icon_wrap_item_class($context, array $blocks = array())
    {
        // line 2578
        echo "\t\t\t\t\ticon-fullscreen";
    }

    // line 2613
    public function block_settingsOtherPro($context, array $blocks = array())
    {
    }

    // line 2
    public function getlabel($__label__ = null, $__for__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "for" => $__for__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "    <label for=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["for"] ?? null), "html", null, true);
            echo "\">";
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "</label>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 2617
    public function getshowFewIconsBy($__settings__ = null, $__form__ = null, $__isCaptionBuilder__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "settings" => $__settings__,
            "form" => $__form__,
            "isCaptionBuilder" => $__isCaptionBuilder__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2619
            $context["isShowRow"] = 0;
            // line 2620
            if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "captionBuilder", array()), "enabled", array()) == 1) && (($context["isCaptionBuilder"] ?? null) == 1))) {
                // line 2621
                $context["isShowRow"] = 1;
            } elseif ((($this->getAttribute($this->getAttribute(            // line 2622
($context["settings"] ?? null), "captionBuilder", array()), "enabled", array()) != 1) && (($context["isCaptionBuilder"] ?? null) != 1))) {
                // line 2623
                $context["isShowRow"] = 1;
            }
            // line 2625
            $context["showDownIcon"] = "";
            // line 2626
            if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "captionBuilder", array()), "enabled", array()) != 1) && (($context["isCaptionBuilder"] ?? null) != 1))) {
                // line 2627
                $context["showDownIcon"] = $this->getAttribute(($context["form"] ?? null), "show_tooltip", array(0 => "downloadIconPro"), "method");
            }
            // line 2630
            if ((($context["isShowRow"] ?? null) == 1)) {
                // line 2631
                echo $this->getAttribute(                // line 2632
($context["form"] ?? null), "row", array(0 => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show few icons by")), 1 => $this->getAttribute(                // line 2634
($context["form"] ?? null), "select", array(0 => "icons[showFewIcons]", 1 => array("default" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Default")), "params" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("By params"))), 2 => (($this->getAttribute($this->getAttribute(                // line 2640
($context["settings"] ?? null), "icons", array(), "any", false, true), "showFewIcons", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "showFewIcons", array()), "default")) : ("default")), 3 => array("style" => "width: auto;", "id" => "showFewIconsSel")), "method"), 2 => "capt-showt-few-icons-by", 3 => "h4"), "method");
                // line 2647
                echo $this->getAttribute(                // line 2648
($context["form"] ?? null), "row", array(0 => "", 1 => (((((((($this->getAttribute(                // line 2650
($context["form"] ?? null), "checkbox", array(0 => "icons[isVideoIcon]", 1 => "1", 2 => Twig_SupTwgSgg_array_merge(array("id" => "showVideoIconInp", "class" => "sggCheckboxInOneRow"), ((($this->getAttribute($this->getAttribute(                // line 2653
($context["settings"] ?? null), "icons", array()), "isVideoIcon", array()) == 1)) ? (array("checked" => "checked")) : (array())))), "method") . $this->getAttribute(                // line 2654
($context["form"] ?? null), "label", array(0 => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show video icon, if exists")), 1 => "showVideoIconInp", 2 => array("class" => "sggCheckboxLabelInOneRow")), "method")) . $this->getAttribute(                // line 2659
($context["form"] ?? null), "checkbox", array(0 => "icons[isLinkIcon]", 1 => "1", 2 => Twig_SupTwgSgg_array_merge(array("id" => "showLinkIconInp", "class" => "sggCheckboxInOneRow"), ((($this->getAttribute($this->getAttribute(                // line 2662
($context["settings"] ?? null), "icons", array()), "isLinkIcon", array()) == 1)) ? (array("checked" => "checked")) : (array())))), "method")) . $this->getAttribute(                // line 2663
($context["form"] ?? null), "label", array(0 => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show link icon, if exists")), 1 => "showLinkIconInp", 2 => array("class" => "sggCheckboxLabelInOneRow")), "method")) . $this->getAttribute(                // line 2668
($context["form"] ?? null), "checkbox", array(0 => "icons[isPopupIcon]", 1 => "1", 2 => Twig_SupTwgSgg_array_merge(array("id" => "showPopupIconInp", "class" => "sggCheckboxInOneRow"), ((($this->getAttribute($this->getAttribute(                // line 2671
($context["settings"] ?? null), "icons", array()), "isPopupIcon", array()) == 1)) ? (array("checked" => "checked")) : (array())))), "method")) . $this->getAttribute(                // line 2672
($context["form"] ?? null), "label", array(0 => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show popup")), 1 => "showPopupIconInp", 2 => array("class" => "sggCheckboxLabelInOneRow")), "method")) . $this->getAttribute(                // line 2677
($context["form"] ?? null), "checkbox", array(0 => "icons[isDownloadIcon]", 1 => "1", 2 => Twig_SupTwgSgg_array_merge(Twig_SupTwgSgg_array_merge(array("id" => "showDownloadIconInp", "class" => "sggCheckboxInOneRow"), (((($this->getAttribute($this->getAttribute(                // line 2680
($context["settings"] ?? null), "icons", array()), "isDownloadIcon", array()) == 1) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "captionBuilder", array()), "enabled", array()) == 1))) ? (array("checked" => "checked")) : (array()))), (((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "captionBuilder", array()), "enabled", array()) != 1) && (($context["isCaptionBuilder"] ?? null) != 1))) ? (array("data-disabled" => "disabled")) : (array())))), "method")) . $this->getAttribute(                // line 2681
($context["form"] ?? null), "label", array(0 => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show download")), 1 => "showDownloadIconInp", 2 => array("class" => "sggCheckboxLabelInOneRow")), "method")) .                 // line 2685
($context["showDownIcon"] ?? null)), 2 => "capt-showv-few-icons-by", 3 => null, 4 => "sggFewIconsShowingRow"), "method");
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3134 => 2685,  3133 => 2681,  3132 => 2680,  3131 => 2677,  3130 => 2672,  3129 => 2671,  3128 => 2668,  3127 => 2663,  3126 => 2662,  3125 => 2659,  3124 => 2654,  3123 => 2653,  3122 => 2650,  3121 => 2648,  3120 => 2647,  3118 => 2640,  3117 => 2634,  3116 => 2632,  3115 => 2631,  3113 => 2630,  3110 => 2627,  3108 => 2626,  3106 => 2625,  3103 => 2623,  3101 => 2622,  3099 => 2621,  3097 => 2620,  3095 => 2619,  3081 => 2617,  3062 => 3,  3049 => 2,  3044 => 2613,  3040 => 2578,  3037 => 2577,  3030 => 2608,  3026 => 2607,  3019 => 2603,  3013 => 2600,  3007 => 2597,  3001 => 2594,  2994 => 2590,  2990 => 2589,  2985 => 2586,  2970 => 2583,  2959 => 2582,  2955 => 2581,  2952 => 2577,  2950 => 2576,  2948 => 2559,  2944 => 2557,  2941 => 2556,  2930 => 2354,  2922 => 2348,  2918 => 2347,  2913 => 2345,  2904 => 2339,  2900 => 2338,  2895 => 2337,  2891 => 2336,  2888 => 2335,  2880 => 2285,  2866 => 2280,  2860 => 2277,  2856 => 2276,  2852 => 2275,  2847 => 2274,  2844 => 2273,  2839 => 2142,  2831 => 2136,  2827 => 2135,  2821 => 2132,  2816 => 2129,  2813 => 2128,  2805 => 2120,  2801 => 2119,  2794 => 2115,  2788 => 2112,  2786 => 2111,  2784 => 2110,  2781 => 2109,  2777 => 2125,  2775 => 2109,  2770 => 2106,  2766 => 2105,  2759 => 2101,  2753 => 2098,  2751 => 2097,  2748 => 2095,  2745 => 2094,  2734 => 2082,  2731 => 2081,  2727 => 2080,  2725 => 2079,  2719 => 2074,  2716 => 2073,  2711 => 2069,  2703 => 2062,  2697 => 2058,  2693 => 2057,  2689 => 2056,  2685 => 2055,  2681 => 2054,  2674 => 2053,  2670 => 2052,  2666 => 2051,  2662 => 2050,  2658 => 2049,  2654 => 2048,  2646 => 2043,  2644 => 2042,  2636 => 2036,  2629 => 2032,  2627 => 2031,  2617 => 2023,  2614 => 2022,  2609 => 2020,  2606 => 2019,  2598 => 2014,  2596 => 2013,  2588 => 2007,  2581 => 2003,  2579 => 2002,  2571 => 1996,  2564 => 1992,  2562 => 1991,  2554 => 1985,  2547 => 1981,  2545 => 1980,  2537 => 1974,  2530 => 1970,  2528 => 1969,  2520 => 1963,  2513 => 1959,  2511 => 1958,  2503 => 1952,  2496 => 1948,  2494 => 1947,  2489 => 1943,  2487 => 1941,  2486 => 1940,  2483 => 1938,  2480 => 1935,  2479 => 1934,  2478 => 1933,  2477 => 1932,  2476 => 1929,  2474 => 1928,  2471 => 1925,  2470 => 1924,  2469 => 1923,  2468 => 1922,  2467 => 1921,  2465 => 1920,  2463 => 1919,  2460 => 1917,  2457 => 1916,  2453 => 1730,  2452 => 1729,  2449 => 1728,  2445 => 1715,  2444 => 1714,  2441 => 1713,  2433 => 1909,  2431 => 1906,  2430 => 1903,  2429 => 1902,  2427 => 1896,  2426 => 1893,  2425 => 1892,  2423 => 1885,  2422 => 1882,  2421 => 1881,  2419 => 1873,  2418 => 1872,  2417 => 1870,  2416 => 1869,  2414 => 1862,  2413 => 1859,  2412 => 1858,  2410 => 1851,  2409 => 1848,  2408 => 1847,  2406 => 1840,  2405 => 1837,  2404 => 1834,  2403 => 1831,  2402 => 1830,  2400 => 1823,  2399 => 1820,  2398 => 1819,  2396 => 1812,  2395 => 1810,  2394 => 1809,  2392 => 1802,  2391 => 1800,  2390 => 1799,  2388 => 1790,  2387 => 1787,  2386 => 1786,  2384 => 1779,  2383 => 1776,  2382 => 1775,  2380 => 1768,  2379 => 1765,  2378 => 1764,  2376 => 1756,  2375 => 1753,  2374 => 1752,  2372 => 1745,  2371 => 1742,  2370 => 1741,  2368 => 1728,  2366 => 1713,  2364 => 1704,  2363 => 1703,  2360 => 1696,  2359 => 1695,  2358 => 1694,  2357 => 1693,  2356 => 1690,  2354 => 1689,  2351 => 1681,  2350 => 1679,  2349 => 1676,  2348 => 1672,  2347 => 1670,  2346 => 1667,  2345 => 1666,  2343 => 1665,  2340 => 1662,  2337 => 1661,  2331 => 1646,  2329 => 1640,  2328 => 1635,  2327 => 1631,  2326 => 1626,  2325 => 1623,  2322 => 1621,  2319 => 1620,  2311 => 1566,  2307 => 1565,  2299 => 1560,  2293 => 1557,  2291 => 1556,  2288 => 1554,  2285 => 1553,  2279 => 1542,  2277 => 1536,  2276 => 1531,  2275 => 1527,  2274 => 1522,  2273 => 1519,  2270 => 1517,  2267 => 1516,  2261 => 1511,  2259 => 1510,  2258 => 1509,  2257 => 1508,  2256 => 1507,  2255 => 1504,  2252 => 1502,  2249 => 1501,  2245 => 1498,  2238 => 1493,  2236 => 1492,  2230 => 1488,  2225 => 1486,  2223 => 1485,  2218 => 1481,  2209 => 1471,  2204 => 1468,  2198 => 1464,  2193 => 1462,  2188 => 1458,  2186 => 1457,  2182 => 1455,  2181 => 1454,  2180 => 1453,  2179 => 1452,  2178 => 1451,  2176 => 1450,  2173 => 1448,  2170 => 1447,  2163 => 1442,  2159 => 1441,  2156 => 1440,  2154 => 1438,  2153 => 1429,  2152 => 1427,  2150 => 1424,  2149 => 1417,  2148 => 1415,  2146 => 1411,  2145 => 1408,  2144 => 1406,  2141 => 1404,  2135 => 1400,  2131 => 1398,  2124 => 1393,  2120 => 1391,  2118 => 1390,  2115 => 1388,  2114 => 1387,  2113 => 1386,  2112 => 1385,  2111 => 1384,  2109 => 1383,  2106 => 1380,  2103 => 1379,  2099 => 1361,  2098 => 1358,  2096 => 1349,  2095 => 1346,  2093 => 1339,  2092 => 1336,  2090 => 1331,  2089 => 1324,  2088 => 1321,  2086 => 1315,  2085 => 1312,  2084 => 1309,  2082 => 1305,  2081 => 1302,  2080 => 1300,  2079 => 1299,  2078 => 1296,  2077 => 1294,  2076 => 1291,  2073 => 1289,  2067 => 1133,  2065 => 1129,  2059 => 1125,  2054 => 1123,  2052 => 1122,  2048 => 1119,  2045 => 1118,  2039 => 1112,  2037 => 1108,  2031 => 1104,  2026 => 1102,  2024 => 1101,  2020 => 1098,  2017 => 1097,  2011 => 1091,  2009 => 1081,  2003 => 1077,  1998 => 1075,  1996 => 1074,  1992 => 1071,  1989 => 1070,  1984 => 1375,  1982 => 1373,  1981 => 1371,  1978 => 1369,  1976 => 1289,  1974 => 1283,  1973 => 1280,  1972 => 1278,  1970 => 1272,  1969 => 1269,  1968 => 1267,  1966 => 1261,  1965 => 1258,  1964 => 1255,  1963 => 1254,  1962 => 1251,  1961 => 1248,  1960 => 1247,  1958 => 1240,  1957 => 1237,  1956 => 1236,  1954 => 1228,  1953 => 1225,  1952 => 1224,  1950 => 1217,  1949 => 1214,  1948 => 1213,  1938 => 1203,  1934 => 1201,  1932 => 1200,  1929 => 1193,  1928 => 1190,  1927 => 1189,  1925 => 1188,  1923 => 1183,  1922 => 1168,  1921 => 1167,  1919 => 1160,  1918 => 1158,  1917 => 1157,  1915 => 1152,  1914 => 1149,  1913 => 1148,  1911 => 1143,  1910 => 1140,  1909 => 1139,  1907 => 1118,  1905 => 1097,  1903 => 1070,  1901 => 1064,  1900 => 1056,  1899 => 1055,  1897 => 1049,  1896 => 1046,  1895 => 1045,  1893 => 1042,  1892 => 1041,  1891 => 1040,  1889 => 1038,  1888 => 1037,  1886 => 1034,  1885 => 1033,  1883 => 1028,  1882 => 1025,  1881 => 1024,  1879 => 1018,  1878 => 1016,  1877 => 1014,  1876 => 1012,  1875 => 1007,  1874 => 1006,  1870 => 1002,  1868 => 998,  1867 => 996,  1866 => 993,  1865 => 989,  1864 => 987,  1863 => 984,  1862 => 983,  1860 => 982,  1857 => 979,  1854 => 978,  1846 => 972,  1845 => 971,  1843 => 969,  1842 => 968,  1840 => 966,  1839 => 965,  1837 => 963,  1836 => 962,  1834 => 960,  1833 => 959,  1826 => 953,  1821 => 952,  1816 => 950,  1811 => 949,  1806 => 947,  1801 => 946,  1794 => 942,  1792 => 941,  1783 => 934,  1777 => 930,  1775 => 929,  1770 => 925,  1765 => 922,  1761 => 920,  1754 => 915,  1751 => 914,  1749 => 913,  1743 => 909,  1738 => 908,  1734 => 907,  1729 => 906,  1722 => 902,  1720 => 901,  1716 => 898,  1714 => 897,  1711 => 895,  1708 => 894,  1702 => 889,  1699 => 872,  1698 => 871,  1697 => 870,  1695 => 869,  1694 => 868,  1690 => 865,  1674 => 863,  1670 => 862,  1663 => 857,  1659 => 855,  1657 => 854,  1654 => 852,  1653 => 851,  1652 => 850,  1650 => 848,  1649 => 847,  1647 => 845,  1646 => 844,  1645 => 843,  1643 => 842,  1640 => 840,  1637 => 839,  1632 => 832,  1626 => 834,  1624 => 832,  1622 => 826,  1621 => 821,  1620 => 820,  1618 => 814,  1617 => 812,  1616 => 811,  1614 => 805,  1613 => 803,  1612 => 802,  1610 => 799,  1609 => 785,  1608 => 784,  1606 => 782,  1605 => 781,  1600 => 778,  1599 => 777,  1598 => 776,  1597 => 775,  1596 => 774,  1594 => 773,  1591 => 771,  1588 => 770,  1582 => 741,  1580 => 740,  1575 => 736,  1571 => 734,  1564 => 729,  1561 => 728,  1559 => 727,  1555 => 724,  1553 => 722,  1552 => 716,  1551 => 715,  1549 => 711,  1548 => 705,  1547 => 704,  1545 => 700,  1544 => 693,  1543 => 692,  1541 => 686,  1540 => 683,  1539 => 682,  1537 => 681,  1535 => 679,  1534 => 678,  1532 => 674,  1531 => 668,  1530 => 667,  1528 => 663,  1527 => 657,  1526 => 656,  1524 => 652,  1523 => 645,  1522 => 644,  1520 => 638,  1519 => 635,  1518 => 634,  1516 => 633,  1514 => 631,  1513 => 630,  1511 => 626,  1510 => 620,  1509 => 619,  1507 => 613,  1506 => 610,  1505 => 609,  1503 => 607,  1502 => 606,  1501 => 605,  1499 => 603,  1498 => 602,  1496 => 599,  1495 => 598,  1493 => 592,  1492 => 590,  1491 => 589,  1489 => 583,  1488 => 581,  1487 => 580,  1485 => 576,  1484 => 569,  1483 => 568,  1481 => 564,  1480 => 558,  1479 => 557,  1477 => 552,  1476 => 537,  1475 => 536,  1473 => 534,  1472 => 533,  1471 => 532,  1469 => 530,  1468 => 529,  1467 => 528,  1465 => 524,  1464 => 523,  1463 => 522,  1462 => 521,  1457 => 518,  1456 => 517,  1455 => 516,  1454 => 515,  1453 => 514,  1451 => 513,  1449 => 512,  1447 => 511,  1444 => 510,  1439 => 507,  1434 => 504,  1429 => 485,  1425 => 470,  1424 => 467,  1421 => 466,  1417 => 461,  1416 => 458,  1413 => 457,  1409 => 341,  1408 => 340,  1407 => 338,  1406 => 337,  1404 => 329,  1401 => 328,  1391 => 495,  1389 => 492,  1388 => 489,  1387 => 488,  1385 => 485,  1383 => 480,  1382 => 477,  1381 => 476,  1379 => 466,  1377 => 457,  1375 => 450,  1374 => 447,  1373 => 446,  1371 => 441,  1370 => 440,  1369 => 438,  1368 => 437,  1366 => 425,  1364 => 422,  1363 => 421,  1362 => 420,  1360 => 418,  1359 => 417,  1358 => 416,  1356 => 413,  1355 => 412,  1354 => 411,  1352 => 403,  1351 => 402,  1349 => 397,  1348 => 394,  1347 => 393,  1345 => 390,  1344 => 389,  1343 => 388,  1341 => 386,  1340 => 385,  1339 => 384,  1337 => 381,  1336 => 380,  1334 => 377,  1333 => 376,  1331 => 371,  1330 => 370,  1329 => 369,  1328 => 367,  1327 => 366,  1326 => 364,  1325 => 363,  1324 => 362,  1319 => 358,  1310 => 352,  1308 => 351,  1303 => 347,  1301 => 328,  1298 => 326,  1295 => 325,  1290 => 322,  1286 => 2613,  1284 => 2556,  1276 => 2549,  1271 => 2547,  1264 => 2543,  1260 => 2542,  1256 => 2541,  1250 => 2538,  1246 => 2537,  1244 => 2536,  1237 => 2529,  1235 => 2523,  1234 => 2522,  1229 => 2519,  1222 => 2514,  1220 => 2510,  1219 => 2505,  1218 => 2501,  1217 => 2496,  1216 => 2495,  1211 => 2492,  1202 => 2488,  1195 => 2484,  1189 => 2481,  1182 => 2477,  1157 => 2454,  1148 => 2450,  1143 => 2447,  1130 => 2446,  1120 => 2445,  1117 => 2444,  1113 => 2443,  1111 => 2369,  1106 => 2366,  1102 => 2364,  1097 => 2361,  1094 => 2359,  1092 => 2335,  1087 => 2333,  1085 => 2332,  1083 => 2331,  1065 => 2326,  1051 => 2321,  1045 => 2318,  1041 => 2317,  1036 => 2316,  1030 => 2312,  1018 => 2306,  1013 => 2304,  1008 => 2302,  993 => 2291,  991 => 2290,  989 => 2273,  987 => 2272,  982 => 2269,  977 => 2266,  965 => 2258,  963 => 2257,  946 => 2256,  942 => 2254,  936 => 2250,  927 => 2246,  921 => 2243,  916 => 2241,  910 => 2240,  904 => 2239,  897 => 2238,  893 => 2237,  890 => 2234,  888 => 2233,  886 => 2223,  882 => 2220,  880 => 2215,  879 => 2213,  878 => 2210,  877 => 2206,  876 => 2204,  875 => 2201,  874 => 2197,  873 => 2195,  872 => 2192,  871 => 2191,  867 => 2190,  865 => 2189,  860 => 2186,  856 => 2184,  848 => 2179,  842 => 2175,  833 => 2168,  828 => 2166,  822 => 2163,  817 => 2161,  813 => 2159,  806 => 2155,  802 => 2154,  795 => 2150,  790 => 2147,  785 => 2145,  783 => 2142,  781 => 2128,  779 => 2094,  775 => 2090,  773 => 2073,  770 => 2071,  768 => 2069,  765 => 2067,  763 => 1916,  761 => 1661,  756 => 1657,  754 => 1656,  753 => 1655,  751 => 1652,  750 => 1650,  748 => 1620,  746 => 1618,  744 => 1617,  742 => 1610,  740 => 1574,  737 => 1571,  735 => 1553,  732 => 1550,  730 => 1548,  729 => 1546,  727 => 1516,  725 => 1501,  723 => 1447,  721 => 1379,  719 => 978,  717 => 894,  715 => 839,  713 => 770,  706 => 764,  705 => 763,  694 => 754,  690 => 753,  682 => 750,  677 => 748,  673 => 745,  671 => 510,  669 => 507,  667 => 504,  665 => 325,  662 => 323,  660 => 322,  658 => 321,  655 => 320,  651 => 319,  647 => 318,  643 => 317,  639 => 316,  636 => 315,  631 => 313,  627 => 312,  623 => 311,  619 => 310,  615 => 309,  611 => 308,  607 => 307,  603 => 306,  599 => 305,  595 => 304,  591 => 303,  587 => 302,  583 => 301,  579 => 299,  577 => 298,  575 => 297,  572 => 296,  568 => 226,  565 => 225,  561 => 210,  558 => 208,  553 => 206,  551 => 205,  548 => 203,  543 => 201,  541 => 200,  533 => 197,  528 => 195,  523 => 193,  521 => 192,  518 => 191,  513 => 165,  511 => 164,  509 => 163,  506 => 162,  501 => 84,  496 => 291,  494 => 283,  491 => 282,  485 => 279,  481 => 278,  477 => 277,  473 => 276,  469 => 275,  465 => 274,  461 => 273,  457 => 272,  453 => 271,  449 => 270,  445 => 269,  438 => 265,  434 => 263,  430 => 262,  424 => 259,  420 => 257,  408 => 248,  405 => 247,  401 => 246,  396 => 244,  391 => 243,  387 => 242,  381 => 238,  375 => 234,  372 => 232,  367 => 228,  365 => 225,  362 => 222,  358 => 220,  351 => 217,  344 => 214,  342 => 213,  340 => 212,  338 => 191,  336 => 190,  333 => 188,  330 => 186,  328 => 185,  325 => 182,  322 => 180,  320 => 179,  317 => 176,  315 => 175,  312 => 172,  310 => 171,  308 => 169,  306 => 168,  304 => 162,  298 => 157,  293 => 155,  291 => 154,  289 => 153,  287 => 152,  279 => 148,  274 => 146,  269 => 144,  267 => 143,  265 => 142,  263 => 141,  256 => 136,  247 => 129,  243 => 127,  234 => 121,  230 => 119,  226 => 118,  223 => 117,  218 => 106,  213 => 103,  209 => 102,  205 => 101,  197 => 100,  192 => 97,  187 => 96,  185 => 95,  183 => 94,  181 => 93,  175 => 91,  171 => 89,  169 => 88,  166 => 84,  164 => 83,  162 => 81,  160 => 80,  158 => 79,  155 => 77,  153 => 76,  151 => 75,  148 => 74,  143 => 70,  139 => 71,  137 => 70,  133 => 68,  125 => 63,  117 => 58,  109 => 53,  101 => 48,  90 => 42,  82 => 40,  80 => 19,  77 => 17,  73 => 1,  71 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        //@trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_SupTwgSgg_Source("", "@galleries/settings.twig", "C:\\xampp\\htdocs\\wordpress\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Galleries\\views\\settings.twig");
    }
}
