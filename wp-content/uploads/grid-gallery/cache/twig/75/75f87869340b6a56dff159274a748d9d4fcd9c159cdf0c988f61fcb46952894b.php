<?php

/* @galleries/shortcode/gallery.twig */
class __TwigTemplate_cd73fa4ea0017e675d0e62057199201de04e9f033476191d1e160fa5dba74448 extends Twig_SupTwgSgg_Template
{
    public function __construct(Twig_SupTwgSgg_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'gallery_before' => array($this, 'block_gallery_before'),
            'gallery_attributes' => array($this, 'block_gallery_attributes'),
            'additionalGridGalleryClass' => array($this, 'block_additionalGridGalleryClass'),
            'photos_before' => array($this, 'block_photos_before'),
            'photos_attributes' => array($this, 'block_photos_attributes'),
            'photos_attributes_class' => array($this, 'block_photos_attributes_class'),
            'photos' => array($this, 'block_photos'),
            'photos_after' => array($this, 'block_photos_after'),
            'styleForEffectInclude' => array($this, 'block_styleForEffectInclude'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["style"] = $this->loadTemplate("@galleries/shortcode/style.twig", "@galleries/shortcode/gallery.twig", 1);
        // line 3
        if ((array_key_exists("gallery", $context) &&  !Twig_SupTwgSgg_test_empty(($context["gallery"] ?? null)))) {
            // line 4
            $this->displayBlock('gallery_before', $context, $blocks);
            // line 14
            echo "
\t<div";
            // line 16
            $this->displayBlock('gallery_attributes', $context, $blocks);
            // line 209
            echo ">";
            // line 211
            if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array()), "enabled", array()) == "true") || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array()), "enabled", array()) == null))) {
                // line 212
                if (((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array()), "icon_name", array()) == "default") || ($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") != true)) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array()), "enabled", array()) == null))) {
                    // line 213
                    echo "\t\t\t\t<div class=\"gallery-loading\">
\t\t\t\t\t<div class=\"blocks\">
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>";
                } else {
                    // line 222
                    echo "\t\t\t\t<div class=\"gallery-loading\">
\t\t\t\t\t<div class=\"la-";
                    // line 223
                    echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array()), "icon_name", array()), "html", null, true);
                    echo "\" style=\"color:";
                    echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array()), "background", array()), "html", null, true);
                    echo "\">";
                    // line 224
                    $context['_parent'] = $context;
                    $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(range(1, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array()), "icon_items", array())));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 225
                        echo "\t\t\t\t\t\t\t<div></div>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 227
                    echo "\t\t\t\t\t</div>
\t\t\t\t</div>";
                }
            }
            // line 232
            $this->displayBlock('photos_before', $context, $blocks);
            // line 235
            if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "enabled", array())) {
                // line 236
                echo "            <div id=\"social-share-html\" style=\"display:none;\">";
                // line 237
                echo $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "html", array());
                // line 239
                echo "            </div>";
            }
            // line 335
            echo "
\t\t<div class=\"gallery-sharing-top\"  style=\"display:none;\">";
            // line 337
            if (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "buttonsPosition", array()) == "top") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "buttonsPosition", array()) == "all")) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "enabled", array()))) {
                // line 338
                echo $this->getAttribute($this, "getSocialIcons", array(0 => ($context["socialIcons"] ?? null), 1 => ($context["settings"] ?? null)), "method");
            }
            // line 340
            echo "\t\t</div>
\t\t<div";
            // line 342
            $this->displayBlock('photos_attributes', $context, $blocks);
            // line 345
            echo ">";
            // line 347
            $this->displayBlock('photos', $context, $blocks);
            // line 355
            echo "
\t\t\t<div class=\"grid-gallery-clearfix\"></div>
\t\t</div>
\t\t<div class=\"gallery-sharing-bottom\" style=\"display:none;\">";
            // line 359
            if (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "buttonsPosition", array()) == "bottom") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "buttonsPosition", array()) == "all")) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "enabled", array()))) {
                // line 360
                echo $this->getAttribute($this, "getSocialIcons", array(0 => ($context["socialIcons"] ?? null), 1 => ($context["settings"] ?? null)), "method");
            }
            // line 362
            echo "\t\t</div>
\t\t<div class=\"gallery-sharing-image\" style=\"display:none;\">";
            // line 364
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "enabled", array())) {
                // line 365
                echo $this->getAttribute($this, "getSocialIcons", array(0 => ($context["socialIcons"] ?? null), 1 => ($context["settings"] ?? null), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsPosition", array()), 3 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignHorizontal", array()), 4 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignVertical", array())), "method");
            }
            // line 367
            echo "\t\t</div>
\t\t<div class=\"gallery-sharing-popup\" style=\"display:none;\">";
            // line 369
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "enabled", array())) {
                // line 370
                echo $this->getAttribute($this, "getSocialIcons", array(0 => ($context["socialIcons"] ?? null), 1 => ($context["settings"] ?? null), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "buttonsPosition", array()), 3 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignHorizontal", array()), 4 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignVertical", array())), "method");
            }
            // line 372
            echo "\t\t</div>
\t\t<div class=\"grid-gallery-clearfix\"></div>";
            // line 375
            $this->displayBlock('photos_after', $context, $blocks);
            // line 377
            echo "\t</div>

\t<!-- Gallery by Supsystic plugin";
            // line 379
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "getConfig", array(), "method"), "get", array(0 => "plugin_version"), "method"), "html", null, true);
            if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == true)) {
                echo " /";
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "getConfig", array(), "method"), "get", array(0 => "pro_plugin_version"), "method"), "html", null, true);
            }
            echo " -->";
        }
        // line 382
        $this->displayBlock('styleForEffectInclude', $context, $blocks);
    }

    // line 4
    public function block_gallery_before($context, array $blocks = array())
    {
        // line 5
        if (($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true"))) {
            // line 6
            echo "\t\t\t<style>
\t\t\t\t #grid-gallery-";
            // line 7
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
            echo "-";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "random_val", array()), "html", null, true);
            echo " .";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "effect", array()), "html", null, true);
            echo " .hi-icon { color:";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "color", array()), "html", null, true);
            echo " !important; background:";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background", array()), "html", null, true);
            echo " !important; }
\t\t\t\t #grid-gallery-";
            // line 8
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
            echo "-";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "random_val", array()), "html", null, true);
            echo " .";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "effect", array()), "html", null, true);
            echo " .hi-icon:hover { color:";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "hover_color", array()), "html", null, true);
            echo " !important; background:";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background_hover", array()), "html", null, true);
            echo " !important; }
\t\t\t\t #grid-gallery-";
            // line 9
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
            echo "-";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "random_val", array()), "html", null, true);
            echo " .hi-icon { width:";
            echo Twig_SupTwgSgg_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()) * 2), "html", null, true);
            echo "px !important; height:";
            echo Twig_SupTwgSgg_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()) * 2), "html", null, true);
            echo "px !important; }
\t\t\t\t #grid-gallery-";
            // line 10
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
            echo "-";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "random_val", array()), "html", null, true);
            echo " .hi-icon:before { font-size:";
            echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "size", array()), 16)) : (16)), "html", null, true);
            echo "px !important; line-height:";
            echo Twig_SupTwgSgg_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()) * 2), "html", null, true);
            echo "px !important; }
\t\t\t</style>";
        }
    }

    // line 16
    public function block_gallery_attributes($context, array $blocks = array())
    {
        // line 17
        echo "\t\t\tid=\"grid-gallery-";
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
        echo "-";
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "random_val", array()), "html", null, true);
        echo "\"
\t\t\tdata-gg-id=\"";
        // line 18
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
        echo "\"
\t\t\tdata-title=\"";
        // line 19
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "title", array()), "html", null, true);
        echo "\"
\t\t\tdata-grid-type=\"";
        // line 20
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()), "html", null, true);
        echo "\"
\t\t\tdata-offset=\"";
        // line 21
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "distance", array()), "html", null, true);
        echo "\"
\t\t\tdata-area-position=\"";
        // line 22
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "position", array()), "html", null, true);
        echo "\"
\t\t\tdata-icons=\"";
        // line 23
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()), "html", null, true);
        echo "\"
\t\t\tdata-preloader=\"";
        // line 24
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array()), "enabled", array()), "html", null, true);
        echo "\"";
        // line 25
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "2")) {
            // line 26
            echo " \t\t\t\tdata-width=\"auto\"";
        } else {
            // line 28
            echo " \t\t\t\tdata-width=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array()), "html", null, true);
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()) == 1)) {
                echo "%";
            }
            echo "\"";
        }
        // line 30
        echo "\t\t\tdata-height=\"";
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array()), "html", null, true);
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()) == 1)) {
            echo "%";
        }
        echo "\"
\t\t\tdata-padding=\"";
        // line 31
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "padding", array()), "html", null, true);
        echo "\"
\t\t\tdata-quicksand=\"";
        // line 32
        if ((($this->getAttribute(($context["settings"] ?? null), "categories", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "categories", array()), "enabled", array()) == "true")) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "quicksand", array()), "enabled", array()) == "1"))) {
            echo "enabled";
        } else {
            echo "disabled";
        }
        echo "\"
\t\t\tdata-quicksand-duration=\"";
        // line 33
        if ( !Twig_SupTwgSgg_test_empty($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "quicksand", array()), "duration", array()))) {
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "quicksand", array()), "duration", array()), "html", null, true);
        } else {
            echo "none";
        }
        echo "\"";
        // line 34
        if (($this->getAttribute(($context["settings"] ?? null), "browserUrlTooltipHide", array(), "any", true, true) && ($this->getAttribute(($context["settings"] ?? null), "browserUrlTooltipHide", array()) == 1))) {
            // line 35
            echo "\t\t\t\tdata-popup-type=\"disable\"";
        } else {
            // line 37
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "enabled", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "enabled", array()) == "false"))) {
                // line 38
                echo "\t\t\t\t\tdata-popup-type=\"disable\"";
            } else {
                // line 40
                echo "\t\t\t\t\tdata-popup-theme=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "theme", array()), "html", null, true);
                echo "\"";
            }
            // line 42
            if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "0") && (($context["mobile"] ?? null) != "true"))) {
                // line 43
                echo "\t\t\t\t\tdata-popup-type=\"colorbox\"
\t\t\t\t\tdata-popup-fadeOut=\"";
                // line 44
                echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "fadeOut", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "fadeOut", array()), 300)) : (300)), "html", null, true);
                echo "\"";
            }
            // line 46
            if (((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "1") && (($context["mobile"] ?? null) != "true")) && ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true"))) {
                // line 47
                echo "\t\t\t\t\tdata-popup-type=\"pretty-photo\"";
            }
            // line 49
            if (((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "2") && (($context["mobile"] ?? null) != "true")) && ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true"))) {
                // line 50
                echo "\t\t\t\t\tdata-popup-type=\"photobox\"";
            }
            // line 52
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "3")) {
                // line 53
                echo "\t\t\t\t\tdata-columns-number=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array()), "columns", array()), "number", array()), "html", null, true);
                echo "\"";
            }
            // line 55
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "captions", array()) == "on")) {
                // line 56
                echo "\t\t\t\t\tdata-popup-captions=\"hide\"";
            }
            // line 58
            echo "
\t\t\t\tdata-popup-image-text=\"";
            // line 59
            echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "imageText", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "imageText", array()), "title")) : ("title")), "html", null, true);
            echo "\"";
            // line 61
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "popupwidth", array()) == "")) {
                // line 62
                echo "\t\t\t\t\tdata-popup-widthsize=\"auto\"";
            } else {
                // line 64
                echo "\t\t\t\t\tdata-popup-widthsize=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "popupwidth", array()), "html", null, true);
                echo "\"";
            }
            // line 67
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "popupheight", array()) == "")) {
                // line 68
                echo "\t\t\t\t\tdata-popup-heightsize=\"auto\"";
            } else {
                // line 70
                echo "\t\t\t\t\tdata-popup-heightsize=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "popupheight", array()), "html", null, true);
                echo "\"";
            }
        }
        // line 74
        $context["popup_i18n_words"] = array("close" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("close")), "next" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("next")), "previous" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("previous")), "start_slideshow" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("start slideshow")), "stop_slideshow" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("stop slideshow")), "image" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("image")), "of" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")), "prev" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("prev")), "cExpand" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Expand")), "cPrevious" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Previous")), "cNext" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Next")), "cExpandStr" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Expand the image")), "cRotate" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Rotate")), "cDetails" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Details")));
        // line 75
        echo "\t\t\tdata-popup-i18n-words=\"";
        echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_jsonencode_filter(($context["popup_i18n_words"] ?? null)));
        echo "\"

            data-popup-slideshow=\"";
        // line 77
        echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshow", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshow", array()), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\tdata-popup-slideshow-speed=\"";
        // line 78
        echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowSpeed", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowSpeed", array()), 2500)) : (2500)), "html", null, true);
        echo "\"
\t\t\tdata-popup-hoverstop=\"";
        // line 79
        echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "popupHoverStop", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "popupHoverStop", array()), "true")) : ("true")), "html", null, true);
        echo "\"
\t\t\tdata-popup-slideshow-auto=\"";
        // line 80
        echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowAuto", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowAuto", array()), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\tdata-popup-background=\"";
        // line 81
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "background", array()), "html", null, true);
        echo "\"
\t\t\tdata-popup-transparency=\"";
        // line 82
        echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "transparency", array()), 30)) : (30)), "html", null, true);
        echo "\"
\t\t\tdata-popup-disable-history=\"";
        // line 83
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "disableHistory", array()), "html", null, true);
        echo "\"
\t\t\tdata-popup-disable-changed-url=\"";
        // line 84
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "disableChangeUrl", array()), "html", null, true);
        echo "\"
\t\t\tdata-popup-border-type=\"";
        // line 85
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array()), "border", array()), "type", array()), "html", null, true);
        echo "\"
\t\t\tdata-popup-border-color=\"";
        // line 86
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array()), "border", array()), "color", array()), "html", null, true);
        echo "\"
\t\t\tdata-popup-border-width=\"";
        // line 87
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array()), "border", array()), "width", array()), "html", null, true);
        echo "\"
\t\t\tdata-popup-border-enable=\"";
        // line 88
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array()), "border", array()), "enable", array()), "html", null, true);
        echo "\"
\t\t\tdata-fullscreen=\"";
        // line 89
        echo (($this->getAttribute(($context["settings"] ?? null), "fullscreen", array())) ? ("true") : ("false"));
        echo "\"
\t\t\tdata-hide-tooltip=\"";
        // line 90
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "tooltip", array()), "html", null, true);
        echo "\"
\t\t\tdata-caption-font-family=\"";
        // line 91
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
        echo "\"
\t\t\tdata-caption-text-size=\"";
        // line 92
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
        echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
        echo "\"
\t\t\tdata-is-mobile=\"";
        // line 93
        echo Twig_SupTwgSgg_escape_filter($this->env, ((array_key_exists("isMobile", $context)) ? (_Twig_SupTwgSgg_default_filter(($context["isMobile"] ?? null), "0")) : ("0")), "html", null, true);
        echo "\"
\t\t\tdata-caption-mobile=\"";
        // line 94
        echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isMobile", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isMobile", array()), "false")) : ("false")), "html", null, true);
        echo "\"";
        // line 95
        echo "\t\t\tdata-hide-long-tltp-title=\"";
        echo ((($this->getAttribute(($context["settings"] ?? null), "hideLongTooltipTitles", array()) == "on")) ? ("1") : ("0"));
        echo "\"
\t\t\tdata-caption-disabled-on-mobile=\"";
        // line 96
        echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array()), "false")) : ("false")), "html", null, true);
        echo "\"";
        // line 97
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "lazyload", array()), "enabled", array()) == "1")) {
            // line 98
            echo "\t\t\t\tdata-lazyload-enable='1'
\t\t\t\tdata-lazyload-effect=\"";
            // line 99
            echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "lazyload", array(), "any", false, true), "animationEffect", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "lazyload", array(), "any", false, true), "animationEffect", array()), "show")) : ("show")), "html", null, true);
            echo "\"
\t\t\t\tdata-lazyload-effect-duration=\"";
            // line 100
            echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "lazyload", array(), "any", false, true), "effectDuration", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "lazyload", array(), "any", false, true), "effectDuration", array()), "400")) : ("400")), "html", null, true);
            echo "\"";
        }
        // line 102
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()) == "polaroid")) {
            // line 103
            echo "\t\t\t\tdata-polaroid-animation=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array()), "true")) : ("true")), "html", null, true);
            echo "\"
\t\t\t\tdata-polaroid-scattering=\"";
            // line 104
            echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array()), "true")) : ("true")), "html", null, true);
            echo "\"
\t\t\t\tdata-polaroid-frame-width=\"";
            // line 105
            echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array()), 20)) : (20)), "html", null, true);
            echo "\"";
            // line 106
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "captionBuilder", array()), "enabled", array()) == "1")) {
                // line 107
                echo "\t\t\t\t\tdata-polaroid-caption-height=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "captionBuilder", array(), "any", false, true), "title", array(), "any", false, true), "height", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "captionBuilder", array(), "any", false, true), "title", array(), "any", false, true), "height", array()), 50)) : (50)), "html", null, true);
                echo "\"";
            }
        }
        // line 110
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "3")) {
            // line 111
            echo "\t\t\t\tdata-responsive-colums=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_jsonencode_filter((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array()), "")) : (""))));
            echo "\"";
        }
        // line 113
        if (($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array()), "enabled", array()) == "true"))) {
            // line 114
            echo "\t\t\t\tdata-horizontal-scroll=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_jsonencode_filter($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array())));
            echo "\"";
        }
        // line 116
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "personal", array()) == "true")) {
            // line 117
            echo "\t\t\t\tdata-thumb-overlay-personal=\"1\"";
        }
        // line 119
        echo "\t\t\tdata-popup-placement-type=\"";
        echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array(), "any", false, true), "placementType", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array(), "any", false, true), "placementType", array()), 0)) : (0)), "html", null, true);
        echo "\"";
        // line 121
        $context["imageSharingButPos"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsPosition", array());
        // line 122
        $context["imageSharingWrapperClass"] = (($context["imageSharingButPos"] ?? null) . " ");
        // line 123
        if (((($context["imageSharingButPos"] ?? null) == "top") || (($context["imageSharingButPos"] ?? null) == "bottom"))) {
            // line 124
            $context["imageSharingWrapperClass"] = (($context["imageSharingWrapperClass"] ?? null) . $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignHorizontal", array()));
        } else {
            // line 126
            $context["imageSharingWrapperClass"] = ((($context["imageSharingWrapperClass"] ?? null) . "vertical ") . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 127
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignVertical", array()));
        }
        // line 141
        $context["socialSharing"] = array("enabled" => $this->getAttribute($this->getAttribute(        // line 142
($context["settings"] ?? null), "socialSharing", array()), "enabled", array()), "gallerySharing" => array("enabled" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 144
($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "enabled", array()), "position" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 145
($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "buttonsPosition", array())), "imageSharing" => array("enabled" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 148
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "enabled", array()), "wrapperClass" => $this->getAttribute(        // line 149
$this, "getSocialSharingWrapperClass", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 150
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsPosition", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 151
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignHorizontal", array()), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 152
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignVertical", array())), "method")), "popupSharing" => array("enabled" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 156
($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "enabled", array()), "wrapperClass" => $this->getAttribute(        // line 157
$this, "getSocialSharingWrapperClass", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 158
($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "buttonsPosition", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 159
($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignHorizontal", array()), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 160
($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignVertical", array())), "method")));
        // line 166
        echo "\t\t\tdata-social-sharing=\"";
        echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_jsonencode_filter(($context["socialSharing"] ?? null)));
        echo "\"";
        // line 167
        ob_start();
        // line 168
        $this->displayBlock('additionalGridGalleryClass', $context, $blocks);
        $context["varAdditionalGalleryClass"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
        // line 176
        echo "\t\t\tclass=\"grid-gallery";
        // line 177
        echo Twig_SupTwgSgg_escape_filter($this->env, ($context["varAdditionalGalleryClass"] ?? null), "html", null, true);
        // line 178
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbs", array()), "enable", array()) == "1")) {
            // line 179
            echo "\t\t\t\t\tgrid-gallery-thumbs";
        }
        // line 182
        if ((($this->getAttribute($this->getAttribute(($context["environment"] ?? null), "getConfig", array(), "method"), "get", array(0 => "optimizations"), "method") == 1) && ($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == false))) {
            // line 183
            echo "\t\t\t\t\t\toptimizations";
        }
        // line 186
        if (($this->getAttribute(($context["settings"] ?? null), "openByLink", array()) == "on")) {
            // line 187
            echo "\t\t\t\t    hidden-item";
        }
        // line 190
        if (($this->getAttribute(($context["settings"] ?? null), "displayFirstPhoto", array()) == "on")) {
            // line 191
            echo "\t\t\t\t    one-photo";
        }
        // line 193
        echo "                \"
\t\t\tstyle=\"
\t\t\t\twidth:";
        // line 195
        echo Twig_SupTwgSgg_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "width", array()) . Twig_SupTwgSgg_replace_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "width_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
\t\t\t\theight:";
        // line 196
        echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array(), "any", false, true), "height", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array(), "any", false, true), "height", array()), "auto")) : ("auto")), "html", null, true);
        // line 197
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "height", array()) != "auto") && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "height", array()) != null))) {
            echo "px";
        }
        echo ";";
        // line 198
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "position", array()) == "1") || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "position", array()) == "left"))) {
            // line 199
            echo "\t\t\t\t\tfloat: left;";
        }
        // line 201
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "position", array()) == "2") || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "position", array()) == "right"))) {
            // line 202
            echo "\t\t\t\t\tfloat: left;";
        }
        // line 204
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "position", array()) == "center")) {
            // line 205
            echo "\t\t\t\tmargin-left:auto;
\t\t\t\tmargin-right:auto;";
        }
        // line 208
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "fullscreen", array()), "enabled", array())) {
            echo "position: fixed; z-index: 9999999; top: 0; left: 0; background-color: white;";
        } else {
            echo "position:relative;";
        }
        echo "\"";
    }

    // line 168
    public function block_additionalGridGalleryClass($context, array $blocks = array())
    {
        // line 169
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "1")) {
            // line 170
            echo "\t\t\t\t\t\tgrid-gallery-fluid-height";
        } else {
            // line 172
            echo "\t\t\t\t\t\tgrid-gallery-fixed";
        }
    }

    // line 232
    public function block_photos_before($context, array $blocks = array())
    {
    }

    // line 342
    public function block_photos_attributes($context, array $blocks = array())
    {
        // line 343
        echo "\t\t\t\tid=\"photos-";
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
        echo "\"
\t\t\t\tclass=\"grid-gallery-photos";
        // line 344
        $this->displayBlock('photos_attributes_class', $context, $blocks);
        echo "\"";
    }

    public function block_photos_attributes_class($context, array $blocks = array())
    {
    }

    // line 347
    public function block_photos($context, array $blocks = array())
    {
        // line 348
        $context["i"] = 0;
        // line 350
        $context['_parent'] = $context;
        $context['_seq'] = Twig_SupTwgSgg_ensure_traversable($this->getAttribute(($context["gallery"] ?? null), "photos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 351
            $this->loadTemplate("@galleries/shortcode/helpers.twig", "@galleries/shortcode/gallery.twig", 351)->display(array("gallery" => ($context["gallery"] ?? null), "photo" => $context["photo"], "settings" => ($context["settings"] ?? null), "index" => ($context["i"] ?? null)));
            // line 352
            $context["i"] = (($context["i"] ?? null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 375
    public function block_photos_after($context, array $blocks = array())
    {
    }

    // line 382
    public function block_styleForEffectInclude($context, array $blocks = array())
    {
        // line 383
        $this->loadTemplate("@galleries/shortcode/style_for_effects.twig", "@galleries/shortcode/gallery.twig", 383)->display(array_merge($context, array("gallery" => ($context["gallery"] ?? null), "settings" => ($context["settings"] ?? null))));
    }

    // line 130
    public function getgetSocialSharingWrapperClass($__position__ = null, $__horizontalAlign__ = null, $__verticalAlign__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "position" => $__position__,
            "horizontalAlign" => $__horizontalAlign__,
            "verticalAlign" => $__verticalAlign__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 131
            $context["class"] = (($context["position"] ?? null) . " ");
            // line 132
            if (((($context["position"] ?? null) == "top") || (($context["position"] ?? null) == "bottom"))) {
                // line 133
                $context["class"] = (($context["class"] ?? null) . ($context["horizontalAlign"] ?? null));
            } else {
                // line 135
                $context["class"] = ((($context["class"] ?? null) . "vertical ") .                 // line 136
($context["verticalAlign"] ?? null));
            }
            // line 138
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 242
    public function getgetSocialIcons($__socialIcons__ = null, $__settings__ = null, $__position__ = null, $__horizontal__ = null, $__vertical__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "socialIcons" => $__socialIcons__,
            "settings" => $__settings__,
            "position" => $__position__,
            "horizontal" => $__horizontal__,
            "vertical" => $__vertical__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 243
            echo "\t\t\t
\t\t\t<div class=\"supSocialIconsWrapper";
            // line 245
            if (((($context["position"] ?? null) || ($context["horizontal"] ?? null)) || ($context["vertical"] ?? null))) {
                // line 246
                echo "\t\t\t\t\tsupSocialIconsWrapperAbsolute";
            }
            // line 248
            if ((($context["position"] ?? null) == "top")) {
                // line 249
                echo "\t\t\t\t\tsupSocialIconsWrapperTop";
            }
            // line 251
            if ((($context["position"] ?? null) == "bottom")) {
                // line 252
                echo "\t\t\t\t\tsupSocialIconsWrapperBottom";
            }
            // line 254
            if ((($context["position"] ?? null) == "left")) {
                // line 255
                echo "\t\t\t\t\tsupSocialIconsWrapperLeft";
            }
            // line 257
            if ((($context["position"] ?? null) == "right")) {
                // line 258
                echo "\t\t\t\t\tsupSocialIconsWrapperRight";
            }
            // line 261
            if (((($context["position"] ?? null) == "top") || (($context["position"] ?? null) == "bottom"))) {
                // line 262
                if ((($context["horizontal"] ?? null) == "left")) {
                    // line 263
                    echo "\t\t\t\t\t\tsupSocialIconsWrapperHLeft";
                }
                // line 265
                if ((($context["horizontal"] ?? null) == "center")) {
                    // line 266
                    echo "\t\t\t\t\t\tsupSocialIconsWrapperHCenter";
                }
                // line 268
                if ((($context["horizontal"] ?? null) == "right")) {
                    // line 269
                    echo "\t\t\t\t\t\tsupSocialIconsWrapperHRight";
                }
            }
            // line 273
            if (((($context["position"] ?? null) == "left") || (($context["position"] ?? null) == "right"))) {
                // line 274
                if ((($context["vertical"] ?? null) == "top")) {
                    // line 275
                    echo "\t\t\t\t\t\tsupSocialIconsWrapperVTop";
                }
                // line 277
                if ((($context["vertical"] ?? null) == "middle")) {
                    // line 278
                    echo "\t\t\t\t\t\tsupSocialIconsWrapperVMiddle";
                }
                // line 280
                if ((($context["vertical"] ?? null) == "bottom")) {
                    // line 281
                    echo "\t\t\t\t\t\tsupSocialIconsWrapperVBottom";
                }
            }
            // line 284
            echo "\t\t\t\">";
            // line 285
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["socialIcons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                // line 286
                echo "\t\t\t\t\t<a href=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["social"], "url", array()), "html", null, true);
                echo "\" class=\"supSocialIcon supSocialIcon";
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["social"], "class", array()), "html", null, true);
                // line 287
                if (($this->getAttribute($context["social"], "class", array()) == "bookmark")) {
                    // line 288
                    echo "\t\t\t\t\t\t\tsupSocialIconBookmarkBtn";
                }
                // line 290
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "style_color", array()) == "black")) {
                    // line 291
                    echo "\t\t\t\t\t\t\tsupSocialIconBlack";
                }
                // line 293
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "style_color", array()) == "white")) {
                    // line 294
                    echo "\t\t\t\t\t\t\tsupSocialIconWhite";
                }
                // line 296
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "style_color", array()) == "brand")) {
                    // line 297
                    echo "\t\t\t\t\t\t\tsupSocialIconBrand";
                }
                // line 299
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "style_radius", array()) == "square")) {
                    // line 300
                    echo "\t\t\t\t\t\t\tsupSocialIconSquare";
                }
                // line 302
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "style_radius", array()) == "circle")) {
                    // line 303
                    echo "\t\t\t\t\t\t\tsupSocialIconRound";
                }
                // line 305
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "style_radius", array()) == "rounded")) {
                    // line 306
                    echo "\t\t\t\t\t\t\tsupSocialIconRounded";
                }
                // line 308
                echo "\t\t\t\t\t\" 
\t\t\t\t\tstyle=\"";
                // line 310
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "style_color", array()) == "custom")) {
                    // line 311
                    echo "\t\t\t\t\t\t\tbackground:";
                    echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "background_color", array()), "html", null, true);
                    echo ";color:";
                    echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "icon_color", array()), "html", null, true);
                    echo ";
\t\t\t\t\t\t\tborder:";
                    // line 312
                    echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "border_width", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "border_width", array()), "0")) : ("0")), "html", null, true);
                    echo "px";
                    echo " ";
                    echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "border_type", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "border_type", array()), "none")) : ("none")), "html", null, true);
                    echo " ";
                    echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "border_color", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "border_color", array()), "white")) : ("white")), "html", null, true);
                    echo ";";
                }
                // line 314
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "style_color", array()) == "brand")) {
                    // line 315
                    echo "\t\t\t\t\t\t\tbackground:";
                    echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["social"], "brand_primary", array()), "html", null, true);
                    echo ";color:";
                    echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["social"], "brand_secondary", array()), "html", null, true);
                    echo ";";
                }
                // line 317
                echo "\t\t\t\t\t\topacity:";
                echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "transparency", array()), 1)) : (1)), "html", null, true);
                echo ";
\t\t\t\t\t\tfont-size:";
                // line 318
                echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "fontsize", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "fontsize", array()), 18)) : (18)), "html", null, true);
                echo "px;
\t\t\t\t\t\twidth:";
                // line 319
                echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "boxsize", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "boxsize", array()), 30)) : (30)), "html", null, true);
                echo "px;
\t\t\t\t\t\theight:";
                // line 320
                echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "boxsize", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array(), "any", false, true), "gallerySharing", array(), "any", false, true), "boxsize", array()), 30)) : (30)), "html", null, true);
                echo "px;
\t\t\t\t\t\"";
                // line 323
                if (($this->getAttribute($context["social"], "class", array()) == "print")) {
                    // line 324
                    echo "\t\t\t\t\t\tonclick=\"window.print();\"";
                } elseif (($this->getAttribute(                // line 325
$context["social"], "class", array()) == "bookmark")) {
                } elseif (($this->getAttribute(                // line 326
$context["social"], "class", array()) == "mail")) {
                } else {
                    // line 328
                    echo "\t\t\t\t\t\tonclick=\"window.open(this.href, 'mywin', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;\"";
                }
                // line 330
                echo "
\t\t\t\t\ttitle=\"Share to";
                // line 331
                echo " ";
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["social"], "name", array()), "html", null, true);
                echo "\" originalurl=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["social"], "url_original", array()), "html", null, true);
                echo "\"></a>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 333
            echo "\t\t\t</div>";
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
        return "@galleries/shortcode/gallery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  909 => 333,  899 => 331,  896 => 330,  893 => 328,  890 => 326,  888 => 325,  886 => 324,  884 => 323,  880 => 320,  876 => 319,  872 => 318,  867 => 317,  860 => 315,  858 => 314,  849 => 312,  842 => 311,  840 => 310,  837 => 308,  834 => 306,  832 => 305,  829 => 303,  827 => 302,  824 => 300,  822 => 299,  819 => 297,  817 => 296,  814 => 294,  812 => 293,  809 => 291,  807 => 290,  804 => 288,  802 => 287,  797 => 286,  793 => 285,  791 => 284,  787 => 281,  785 => 280,  782 => 278,  780 => 277,  777 => 275,  775 => 274,  773 => 273,  769 => 269,  767 => 268,  764 => 266,  762 => 265,  759 => 263,  757 => 262,  755 => 261,  752 => 258,  750 => 257,  747 => 255,  745 => 254,  742 => 252,  740 => 251,  737 => 249,  735 => 248,  732 => 246,  730 => 245,  727 => 243,  711 => 242,  696 => 138,  693 => 136,  692 => 135,  689 => 133,  687 => 132,  685 => 131,  671 => 130,  667 => 383,  664 => 382,  659 => 375,  651 => 352,  649 => 351,  645 => 350,  643 => 348,  640 => 347,  631 => 344,  626 => 343,  623 => 342,  618 => 232,  613 => 172,  610 => 170,  608 => 169,  605 => 168,  596 => 208,  592 => 205,  590 => 204,  587 => 202,  585 => 201,  582 => 199,  580 => 198,  575 => 197,  573 => 196,  569 => 195,  565 => 193,  562 => 191,  560 => 190,  557 => 187,  555 => 186,  552 => 183,  550 => 182,  547 => 179,  545 => 178,  543 => 177,  541 => 176,  538 => 168,  536 => 167,  532 => 166,  530 => 160,  529 => 159,  528 => 158,  527 => 157,  526 => 156,  525 => 152,  524 => 151,  523 => 150,  522 => 149,  521 => 148,  520 => 145,  519 => 144,  518 => 142,  517 => 141,  514 => 127,  513 => 126,  510 => 124,  508 => 123,  506 => 122,  504 => 121,  500 => 119,  497 => 117,  495 => 116,  490 => 114,  488 => 113,  483 => 111,  481 => 110,  475 => 107,  473 => 106,  470 => 105,  466 => 104,  461 => 103,  459 => 102,  455 => 100,  451 => 99,  448 => 98,  446 => 97,  443 => 96,  438 => 95,  435 => 94,  431 => 93,  426 => 92,  422 => 91,  418 => 90,  414 => 89,  410 => 88,  406 => 87,  402 => 86,  398 => 85,  394 => 84,  390 => 83,  386 => 82,  382 => 81,  378 => 80,  374 => 79,  370 => 78,  366 => 77,  360 => 75,  358 => 74,  352 => 70,  349 => 68,  347 => 67,  342 => 64,  339 => 62,  337 => 61,  334 => 59,  331 => 58,  328 => 56,  326 => 55,  321 => 53,  319 => 52,  316 => 50,  314 => 49,  311 => 47,  309 => 46,  305 => 44,  302 => 43,  300 => 42,  295 => 40,  292 => 38,  290 => 37,  287 => 35,  285 => 34,  278 => 33,  270 => 32,  266 => 31,  258 => 30,  250 => 28,  247 => 26,  245 => 25,  242 => 24,  238 => 23,  234 => 22,  230 => 21,  226 => 20,  222 => 19,  218 => 18,  211 => 17,  208 => 16,  195 => 10,  185 => 9,  173 => 8,  161 => 7,  158 => 6,  156 => 5,  153 => 4,  149 => 382,  141 => 379,  137 => 377,  135 => 375,  132 => 372,  129 => 370,  127 => 369,  124 => 367,  121 => 365,  119 => 364,  116 => 362,  113 => 360,  111 => 359,  106 => 355,  104 => 347,  102 => 345,  100 => 342,  97 => 340,  94 => 338,  92 => 337,  89 => 335,  86 => 239,  84 => 237,  82 => 236,  80 => 235,  78 => 232,  73 => 227,  67 => 225,  63 => 224,  58 => 223,  55 => 222,  45 => 213,  43 => 212,  41 => 211,  39 => 209,  37 => 16,  34 => 14,  32 => 4,  30 => 3,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        //@trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_SupTwgSgg_Source("", "@galleries/shortcode/gallery.twig", "C:\\xampp\\htdocs\\wordpress\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Galleries\\views\\shortcode\\gallery.twig");
    }
}
