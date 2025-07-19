<?php

/* @optimization/index.twig */
class __TwigTemplate_8ed523b4601c76f38e09dd449f3259e1229793e215766c409d28a034be3aa781 extends Twig_SupTwgSgg_Template
{
    public function __construct(Twig_SupTwgSgg_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@optimization/index.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "grid-gallery.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        $context["hlp"] = $this->loadTemplate("@core/helpers.twig", "@optimization/index.twig", 4);
        // line 5
        echo "
    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\">
        <a href=\"";
        // line 7
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 9
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "optimization"), "method"), "html", null, true);
        echo "\">";
        echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Optimization")), "html", null, true);
        echo "</a>
    </nav>";
        // line 11
        if ($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method")) {
            // line 12
            echo "    <div class=\"sgg-io-tabs-links-list sgg-main-tab-anch\">
        <a href=\"#\" class=\"sgg-io-tab-link sggActive\" data-tab-id=\"sgg-maintab-image-opt\">
            <i class=\"fa fa-compress\"></i>";
            // line 15
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Optimize")), "html", null, true);
            // line 16
            echo $context["hlp"]->getshowTooltip((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Onboard image opimization with TinyPNG. ")) . "<a target='_blank' href='https://supsystic.com/documentation/image-optimize/'>https://supsystic.com/documentation/image-optimize/</a>"), "top", true);
            // line 18
            echo "
        </a>
        <a href=\"#\" class=\"sgg-io-tab-link\" data-tab-id=\"sgg-maintab-transfer-cdn\">
            <i class=\"fa fa-cloud-upload\"></i>";
            // line 22
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer to CDN")), "html", null, true);
            // line 23
            echo $context["hlp"]->getshowTooltip((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Here you may transfer your gallery images to CDN (Content Delivery Network) in order to reduce your site database load. ")) . "<a target='_blank' href='https://supsystic.com/documentation/transfer-to-cdn/'>https://supsystic.com/documentation/transfer-to-cdn/</a>"), "top", true);
            // line 26
            echo "
        </a>
    </div>";
        }
    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        // line 33
        $context["imgOptTemplate"] = $this;
        // line 34
        if ($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method")) {
            // line 35
            echo "    <div class=\"supsystic-image-optimize\">
        <div class=\"sgg-io-tabs-list sgg-main-tab-anch\">
            <input id=\"sggImgOptMainTabName\" name=\"sggImgOptMainTabName\" value=\"";
            // line 37
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["tabName"] ?? null), "html", null, true);
            echo "\" type=\"hidden\"/>
            <div class=\"sgg-io-one-tab sgg-maintab-image-opt\">";
            // line 39
            echo $context["imgOptTemplate"]->getimageOptimizeMainDialog(($context["imgOptTemplate"] ?? null), ($context["imgOptimizationSett"] ?? null));
            // line 40
            echo $context["imgOptTemplate"]->getimageOptimizeMainTab(($context["imgOptTemplate"] ?? null), ($context["imgOptimizationSett"] ?? null), ($context["galleryList"] ?? null), ($context["statistic"] ?? null));
            echo "
            </div>
            <div class=\"sgg-io-one-tab sgg-maintab-transfer-cdn sgg-io-tab-hidden\">";
            // line 43
            if ((($context["cdnSett"] ?? null) == null)) {
                // line 44
                echo "\t\t\t\t\t<div class=\"sgg-error-list-page\">
\t\t\t\t\t\t<h2>";
                // line 45
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Your host does not support the minimum requirements:")), "html", null, true);
                echo "</h2>";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["cdnRequirements"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["elem1"]) {
                    // line 47
                    echo "\t\t\t\t\t\t\t<h3>";
                    echo Twig_SupTwgSgg_escape_filter($this->env, $context["elem1"], "html", null, true);
                    echo "</h3>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "\t\t\t\t\t</div>";
            } else {
                // line 51
                echo $context["imgOptTemplate"]->gettransferToCdnDialog(($context["cdnSett"] ?? null));
                // line 52
                echo $context["imgOptTemplate"]->getimageOptimizeCdnTab(($context["cdnSett"] ?? null), ($context["galleryList"] ?? null));
                // line 53
                echo $context["imgOptTemplate"]->getcdnServiceSettingDialog(($context["cdnSett"] ?? null));
            }
            // line 55
            echo "            </div>
        </div>
    </div>";
        }
        // line 59
        if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == false)) {
            // line 60
            echo "        <p style=\"font-size:21px; font-weight:bold; margin-bottom:15px;\">";
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("PRO option")), "html", null, true);
            echo "</p>
        <div style=\"font-size:14px; margin-bottom:15px;\">";
            // line 61
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Optimize : The intelligent image optimization feature allows you to save bandwidth and make your gallery load faster. ")), "html", null, true);
            echo "</div>
        <div style=\"font-size:14px; margin-bottom:15px;\">";
            // line 62
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("CDN : Transfer your galleries to Content Delivery Network. Note: in order to do this, you should be a member of CDN. ")), "html", null, true);
            echo "</div>
        <div>
         <a href=\"https://supsystic.com/plugins/photo-gallery/\" target=\"_blank\"><img style=\"float:left; padding-right:10px; width:100%; max-width: 512px; margin-top:10px;\" src=\"";
            // line 64
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["SGG_PLUGIN_URL"] ?? null), "html", null, true);
            echo "/src/GridGallery/Overview/assets/img/optimization/01.png\"></a>
         <a href=\"https://supsystic.com/plugins/photo-gallery/\" target=\"_blank\"><img style=\"float:left; padding-right:10px; width:100%; max-width: 512px; margin-top:10px;\" src=\"";
            // line 65
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["SGG_PLUGIN_URL"] ?? null), "html", null, true);
            echo "/src/GridGallery/Overview/assets/img/optimization/02.png\"></a>
         <a href=\"https://supsystic.com/plugins/photo-gallery/\" target=\"_blank\"><img style=\"float:left; width:100%; max-width: 512px; margin-top:10px;\" src=\"";
            // line 66
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["SGG_PLUGIN_URL"] ?? null), "html", null, true);
            echo "/src/GridGallery/Overview/assets/img/optimization/03.png\"></a>
        </div>";
        }
    }

    // line 71
    public function getimageOptimizeCdnTab($__cdnSettings__ = null, $__cdnGalleryList__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "cdnSettings" => $__cdnSettings__,
            "cdnGalleryList" => $__cdnGalleryList__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 72
            $context["hlp"] = $this->loadTemplate("@core/helpers.twig", "@optimization/index.twig", 72);
            // line 73
            echo "
    <input type=\"hidden\" id=\"sgg-transfer-to-cdn-used\";/>
    <div class=\"supsystic-io-block sgg-cdn-service-block\">
        <div class=\"supsystic-io-block-table sgg-cnd-service-info\">
            <div class=\"supsystic-io-block-row\">
                <div class=\"supsystic-io-block-cell sgg-io-tab-hidden\">
                    <input value=\"keycdn\"";
            // line 79
            if (($this->getAttribute(($context["cdnSettings"] ?? null), "current", array()) == "keycdn")) {
                echo " checked=\"checked\"";
            }
            echo " type=\"radio\" class=\"selected-cnd-opt-service\" name=\"selected-cdn-opt-service\"/>
                </div>
                <div class=\"supsystic-io-block-cell\">";
            // line 82
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("KeyCDN")), "html", null, true);
            // line 83
            echo $context["hlp"]->getshowTooltip((((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer your galleries to Content Delivery Network. Note: in order to do this, you should be a member of CDN. ")) . "<a target='_blank' href='https://supsystic.com/documentation/transfer-to-cdn/'>https://supsystic.com/documentation/transfer-to-cdn/</a>") . "<br/>") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Note: before starting the transfer you should press the 'Setup' button, fill in the data and save the settings."))), "top", true);
            // line 87
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"supsystic-io-block-cell\">
                    <a href=\"\" class=\"button sgg-setup-button\" data-dialog-code=\"keycdn\"  data-dialog-title=\"";
            // line 90
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("KeyCDN Settings")), "html", null, true);
            echo "\">
                        <i class=\"fa fa-info-circle\"></i>";
            // line 92
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["cdnSettings"] ?? null), "setting", array(), "any", false, true), "keycdn", array(), "any", false, true), "u_name", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["cdnSettings"] ?? null), "setting", array()), "keycdn", array()), "u_name", array()) != ""))) {
                // line 93
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Change Details")), "html", null, true);
            } else {
                // line 95
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Setup")), "html", null, true);
            }
            // line 97
            echo "                    </a>
                </div>
            </div>
        </div>
    </div>
\t<div class=\"supsystic-io-block sgg-cdn-list\">
\t\t<input id=\"sgg-cdn-auth-sett\" type=\"hidden\" value=\"";
            // line 103
            echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_jsonencode_filter(($context["cdnSettings"] ?? null)), "html", null, true);
            echo "\"/>
        <button class=\"button sgg-transer-to-cdn\" disabled=\"disabled\">";
            // line 104
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer selected")), "html", null, true);
            echo "</button>

        <div class=\"supsystic-io-block-table sgg-transfer-to-cdn-table\">
            <div class=\"supsystic-io-block-row sgg-table-row-header\">
                <div class=\"supsystic-io-block-cell\"></div>
                <div class=\"supsystic-io-block-cell\">";
            // line 109
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Name")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">";
            // line 110
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total Images")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">";
            // line 111
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total Size")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">";
            // line 112
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Location")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\"></div>
            </div>";
            // line 116
            $context["disableTransferBtn"] = false;
            // line 117
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["cdnSettings"] ?? null), "setting", array(), "any", false, true), "keycdn", array(), "any", false, true), "u_name", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["cdnSettings"] ?? null), "setting", array()), "keycdn", array()), "u_name", array()) != ""))) {
                // line 118
                $context["disableTransferBtn"] = false;
            } else {
                // line 120
                $context["disableTransferBtn"] = true;
            }
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["cdnGalleryList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["gallInfo"]) {
                // line 124
                echo "                <div class=\"supsystic-io-block-row sgg-cdn-info-row-";
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "id", array()), "html", null, true);
                echo "\">
                    <div class=\"supsystic-io-block-cell\">
\t\t\t\t\t\t<input class=\"sgg-check-gallery-inp\" name=\"sgg-check-gallery-inp\" type=\"checkbox\"
\t\t\t\t\t\t\t   data-gallery-size=\"";
                // line 127
                if ($this->getAttribute($context["gallInfo"], "cdn_size", array(), "any", true, true)) {
                    echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "cdn_size", array()), "html", null, true);
                } elseif ($this->getAttribute($context["gallInfo"], "optimized_size", array(), "any", true, true)) {
                    echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "optimized_size", array()), "html", null, true);
                } else {
                    echo "-";
                }
                echo "\"
\t\t\t\t\t\t\t   data-gallery-img-cnt=\"";
                // line 128
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "photo_count", array()), "html", null, true);
                echo "\" value=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "id", array()), "html", null, true);
                echo "\"/>
                    </div>
\t\t\t\t\t<div class=\"supsystic-io-block-cell\">";
                // line 130
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "title", array()), "html", null, true);
                echo "</div>
\t\t\t\t\t<div class=\"supsystic-io-block-cell\">";
                // line 132
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "photo_count", array()), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"supsystic-io-block-cell sgg-cdn-info-size\">";
                // line 135
                if ($this->getAttribute($context["gallInfo"], "cdn_size", array(), "any", true, true)) {
                    // line 136
                    echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($context["gallInfo"], "cdn_size", array()) . " ") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb"))), "html", null, true);
                } elseif ($this->getAttribute(                // line 137
$context["gallInfo"], "optimized_size", array(), "any", true, true)) {
                    // line 138
                    echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($context["gallInfo"], "optimized_size", array()) . " ") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb"))), "html", null, true);
                } else {
                    // line 139
                    echo "-";
                }
                // line 140
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"supsystic-io-block-cell sgg-cdn-info-tr-date\">";
                // line 142
                if (($this->getAttribute($context["gallInfo"], "cdn_last_transfer_date", array(), "any", true, true) && $this->getAttribute($context["gallInfo"], "cdn_service_name", array(), "any", true, true))) {
                    // line 143
                    echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($context["gallInfo"], "cdn_service_name", array()) . " / ") . $this->getAttribute($context["gallInfo"], "cdn_last_transfer_date", array())), "html", null, true);
                } else {
                    // line 144
                    echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("website")), "html", null, true);
                }
                // line 145
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"supsystic-io-block-cell\">
\t\t\t\t\t\t<button class=\"button sgg-transfer-to\" data-gallery-id=\"";
                // line 147
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "id", array()), "html", null, true);
                echo "\"";
                // line 148
                if ((($context["disableTransferBtn"] ?? null) == true)) {
                    echo "disabled=\"disabled\"";
                }
                // line 149
                echo "\t\t\t\t\t\t\t\tdata-photo-count=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "photo_count", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\tdata-img-size=\"";
                // line 150
                if ($this->getAttribute($context["gallInfo"], "cdn_size", array(), "any", true, true)) {
                    echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "cdn_size", array()), "html", null, true);
                } elseif ($this->getAttribute($context["gallInfo"], "optimized_size", array(), "any", true, true)) {
                    echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "optimized_size", array()), "html", null, true);
                } else {
                    echo "-";
                }
                echo "\">";
                // line 151
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer to")), "html", null, true);
                echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
                </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallInfo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "        </div>
\t</div>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 160
    public function gettransferToCdnDialog($__cdnSettings__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "cdnSettings" => $__cdnSettings__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 161
            echo "\t<div id=\"transfer-to-cdn-dialog\">";
            // line 162
            echo "\t\t<div class=\"sgg-io-tabs-links-list sgg-il-transfer-dialog sgg-io-tab-hidden\">
\t\t\t<a href=\"#\" class=\"sgg-io-tab-link \" data-tab-id=\"sgg-il-transfer-start\">1</a>
\t\t\t<a href=\"#\" class=\"sgg-io-tab-link \" data-tab-id=\"sgg-il-transfer-process\">2</a>
\t\t</div>

\t\t<div class=\"sgg-io-tabs-list sgg-il-transfer-dialog\">
        \t<div class=\"sgg-io-one-tab sgg-il-transfer-start\">
\t\t\t\t<div class=\"sgg-cdndlg-row\">";
            // line 170
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer Gallery to")), "html", null, true);
            echo "
\t\t\t\t\t<strong><span class=\"sgg-cdn-service-name\">";
            // line 171
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Servicename")), "html", null, true);
            echo "</span></strong>
\t\t\t\t</div>
\t\t\t\t<div class=\"sgg-cdndlg-row\">
\t\t\t\t\t<strong>";
            // line 174
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total images")), "html", null, true);
            echo ":</strong>
\t\t\t\t\t<span class=\"sgg-cdndlg-img-count\">55</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"sgg-cdndlg-row sgg-cnddlg-imgs-size-row\">
\t\t\t\t\t<strong>";
            // line 178
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total size")), "html", null, true);
            echo ":</strong>
\t\t\t\t\t<span class=\"sgg-cnddlg-imgs-size\">66</span>";
            // line 179
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb")), "html", null, true);
            echo "
\t\t\t\t</div>";
            // line 187
            echo "\t\t\t\t<input type=\"hidden\" id=\"sgg-transl-start-transf\" value=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Start Transfer")), "html", null, true);
            echo "\"/>
\t\t\t</div>

\t\t\t<div class=\"sgg-io-one-tab sgg-il-transfer-process\">
\t\t\t\t<div class=\"sgg-cdndlg-row\">";
            // line 192
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Connected to")), "html", null, true);
            echo "
\t\t\t\t\t<strong><span class=\"sgg-cdn-service-name\">Servicename</span></strong>";
            // line 194
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("service")), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"sgg-cdndlg-row\"><strong>";
            // line 196
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer information:")), "html", null, true);
            echo "</strong></div>
\t\t\t\t<div class=\"sgg-cdndlg-row sgg-cdndlg-info\">
\t\t\t\t\t<div class=\"sgg-cdndlg-row\">
\t\t\t\t\t\t<span id=\"sgg-cdn-curr-gallery\">2</span>";
            // line 200
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")), "html", null, true);
            echo "
\t\t\t\t\t\t<span id=\"sgg-cdn-gallery-count\">22</span>";
            // line 202
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("galleries")), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sgg-cdndlg-row\">
\t\t\t\t\t\t<span id=\"sgg-cdn-curr-img\">1</span>";
            // line 206
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")), "html", null, true);
            echo "
\t\t\t\t\t\t<span id=\"sgg-cdn-img-count\">34</span>
\t\t\t\t\t\t<span class=\"sgg-cdn-img-text1\">";
            // line 208
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("images")), "html", null, true);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"sgg-cdndlg-row sgg-cdn-info-error\">
\t\t\t\t\t<span>";
            // line 212
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer ending with errors!")), "html", null, true);
            echo "</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"sgg-cdndlg-row sgg-cdn-info-succ\">
\t\t\t\t\t<span>";
            // line 215
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer completed successfully!")), "html", null, true);
            echo "</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 222
    public function getimageOptimizeMainDialog($___selfTemplate__ = null, $__ioSetting__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "_selfTemplate" => $___selfTemplate__,
            "ioSetting" => $__ioSetting__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 223
            echo "    <input type=\"hidden\" id=\"sgg-ai-optimize-sel-auth\" value=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_jsonencode_filter(($context["ioSetting"] ?? null)), "html", null, true);
            echo "\"/>
    <div class=\"sgg-io-tabs-links-list sgg-il-optimize-dlg-wnd sgg-io-tab-hidden\">
        <a href=\"#\" class=\"sgg-io-tab-link sggActive\" data-tab-id=\"sgg-il-optimize-start\">FirstPage</a>
        <a href=\"#\" class=\"sgg-io-tab-link\" data-tab-id=\"sgg-il-optimize-servlist\">Service List</a>
        <a href=\"#\" class=\"sgg-io-tab-link\" data-tab-id=\"sgg-il-optimize-process\">Image Optimize process</a>
        <a href=\"#\" class=\"sgg-io-tab-link\" data-tab-id=\"sgg-il-optimize-result\">Image Optimize Result</a>
    </div>

    <!--  sgg-io-tab-hidden -->
    <div class=\"sgg-io-tabs-list sgg-il-optimize-dlg-wnd\">
        <div class=\"sgg-io-one-tab sgg-il-optimize-start sgg-io-tab-hidden\">
\t\t\t<input type=\"hidden\" id=\"sgg-transl-img-opt-1\" value=\"";
            // line 234
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image optimization")), "html", null, true);
            echo "\"/>
\t\t\t<input type=\"hidden\" id=\"sgg-transl-start-opt-1\" value=\"";
            // line 235
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Start Optimization")), "html", null, true);
            echo "\"/>";
            // line 247
            echo "
            <div class=\"sgg-il-os-item\">
                <div class=\"sgg-il-os-onerow\">";
            // line 249
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images")), "html", null, true);
            echo ":
\t\t\t\t\t<div id=\"sgg-il-full-img-cnt-div\" class=\"sgg-il-img-cnt-type-obj\">
\t\t\t\t\t\t<span id=\"sgg-il-amount-img-cnt\">18</span>
\t\t\t\t\t\t(<span class=\"sgg-il-preview-img-cnt\">9</span> preview and <span class=\"sgg-il-original-img-cnt\">9</span> original images)
\t\t\t\t\t</div>
\t\t\t\t</div><br/>
                <div id=\"sgg-iop-totalrow\" class=\"sgg-il-os-onerow\">";
            // line 255
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total Size")), "html", null, true);
            echo ":
\t\t\t\t\t<span id=\"sgg-il-gallery-size\">00</span>
\t\t\t\t\t<span id=\"sgg-il-gallery-units\">";
            // line 257
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb")), "html", null, true);
            echo "</span>
\t\t\t\t</div>
            </div>
            <label for=\"sgg-il-backup-img-src\" class=\"sgg-il-os-item\">
                <input id=\"sgg-il-backup-img-src\" class=\"sgg-il-checkbox-prm\" name=\"sgg-il-backup-img-src\" type=\"checkbox\" checked=\"checked\"/>";
            // line 262
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Backup Images Source")), "html", null, true);
            echo "
            </label>
            <label for=\"sgg-il-optimize-preview\" class=\"sgg-il-os-item\">
                <input id=\"sgg-il-optimize-preview\" class=\"sgg-il-checkbox-prm\" name=\"sgg-il-optimize-preview\" type=\"checkbox\" checked=\"checked\"/>";
            // line 266
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimize Preview images")), "html", null, true);
            echo "
            </label>
        </div>
        <div class=\"sgg-io-one-tab sgg-il-optimize-servlist sgg-io-tab-hidden\">";
            // line 270
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["_selfTemplate"] ?? null), "imageOptimizeServiceSettingTable", array(0 => ($context["_selfTemplate"] ?? null), 1 => ($context["ioSetting"] ?? null)), "method"), "html", null, true);
            echo "
        </div>
        <div class=\"sgg-io-one-tab sgg-il-optimize-process sgg-io-tab-hidden\">
\t\t\t<input type=\"hidden\" id=\"sgg-transl-img-opt-2\" value=\"";
            // line 273
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimization in process...")), "html", null, true);
            echo "\"/>
            <div class=\"sgg-optimize-info sgg-io-tab-hidden\">
                <div>";
            // line 276
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Connected to")), "html", null, true);
            echo "
                    <strong><span id=\"sgg-conn-to-serv-name\">servicename</span></strong>";
            // line 278
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("service")), "html", null, true);
            echo "
                </div>
                <div><strong>";
            // line 280
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimize:")), "html", null, true);
            echo "</strong></div>
                <div>
                    <span id=\"sgg-opt-curr-gallery\">curr</span>";
            // line 283
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")), "html", null, true);
            echo "
                    <span id=\"sgg-opt-numb-gallery\">numb</span>";
            // line 285
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("galleries")), "html", null, true);
            echo "
                </div>
                <div>
                    <span id=\"sgg-opt-curr-img\">curr</span>";
            // line 289
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")), "html", null, true);
            echo "
                    <span id=\"sgg-opt-numb-imgs\">numb</span>
                    <span class=\"sgg-iop-without-prev\">";
            // line 291
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("images")), "html", null, true);
            echo "</span>
                    <span class=\"sgg-iop-with-prev\">";
            // line 292
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("images (preview and original images)")), "html", null, true);
            echo "</span>
                </div>
                <div class=\"sgg-opt-info-error sgg-io-tab-hidden\">
                    <span>";
            // line 295
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Error ocured. Optimize process stopped!")), "html", null, true);
            echo "</span>
                </div>
            </div>
        </div>
        <div class=\"sgg-io-one-tab sgg-il-optimize-result sgg-io-tab-hidden\">
\t\t\t<input type=\"hidden\" id=\"sgg-transl-img-opt-3\" value=\"";
            // line 300
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimization complete")), "html", null, true);
            echo "\"/>
            <div class=\"sgg-iores-info\">
                <div class=\"sgg-iores-txt\">";
            // line 303
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images size before:")), "html", null, true);
            echo "
                    <span class=\"sgg-iores-tsizebefore\">0</span>";
            // line 305
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb")), "html", null, true);
            echo "
                </div>
                <div class=\"sgg-iores-txt\">";
            // line 308
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images size after:")), "html", null, true);
            echo "
                    <span class=\"sgg-iores-tsizeafter\">0</span>";
            // line 310
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb")), "html", null, true);
            echo "
                </div>
                <div class=\"sgg-iores-txt\">";
            // line 313
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total Saving:")), "html", null, true);
            echo " <span class=\"sgg-iores-tsaving\">0</span>%
                </div>
            </div>
            <br/>
            <button class=\"button sgg-il-optimize-again-btn\">
                <i class=\"fa fa-compress\"></i>";
            // line 319
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimize one more time")), "html", null, true);
            echo "
            </button>
            <br/>
            <a href=\"\" class=\"sgg-iores-link-compare\">";
            // line 323
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show image comparision")), "html", null, true);
            echo "
            </a>

            <div class=\"supsystic-io-block-table sgg-iores-compare-wrap sgg-io-tab-hidden\">
                <!-- Rows to compare Images -->
            </div>
            <div class=\"sgg-iores-cmp-template sgg-io-tab-hidden\">
                <div class=\"supsystic-io-block-row sgg-compare-first-row\">
                    <div class=\"supsystic-io-block-cell\"><h3>";
            // line 331
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Before")), "html", null, true);
            echo "</h3></div>
                    <div class=\"supsystic-io-block-cell\"><h3>";
            // line 332
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("After")), "html", null, true);
            echo "</h3></div>
                </div>
            </div>
        </div>
    </div>";
            // line 338
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["_selfTemplate"] ?? null), "imageOptimizeServiceSettingsDialog", array(0 => ($context["ioSetting"] ?? null)), "method"), "html", null, true);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 341
    public function getimageOptimizeServiceSettingTable($___selfTemplate__ = null, $__ioSetting__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "_selfTemplate" => $___selfTemplate__,
            "ioSetting" => $__ioSetting__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 342
            $context["hlp"] = $this->loadTemplate("@core/helpers.twig", "@optimization/index.twig", 342);
            // line 343
            echo "
    <div class=\"supsystic-io-block sgg-service-setting\">
        <div class=\"supsystic-io-block-table sgg-service-info\">
            <div class=\"supsystic-io-block-row\">
                <div class=\"supsystic-io-block-cell sgg-io-tab-hidden\">
                    <input value=\"tinypng\"";
            // line 348
            if (($this->getAttribute(($context["ioSetting"] ?? null), "current", array()) == "tinypng")) {
                echo " checked=\"checked\"";
            }
            echo " type=\"radio\" class=\"selected-opt-service\" name=\"selected-opt-service\"/>
                </div>
                <div class=\"supsystic-io-block-cell\">";
            // line 351
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("TinyPNG")), "html", null, true);
            // line 352
            echo $context["hlp"]->getshowTooltip((((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("The intelligent image optimization feature allows you to save bandwidth and make your gallery load faster. ")) . "<a target='_blank' href='https://supsystic.com/documentation/image-optimize/'>https://supsystic.com/documentation/image-optimize/</a> ") . "<br/>") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Note: before starting the optimization you should press the 'Change Details' button, get your TinyPNG API key and insert it to the text field. Use the tooltip to find the key. "))), "top", true);
            // line 356
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"supsystic-io-block-cell\">
                    <a href=\"\" class=\"button sgg-setup-button\" data-dialog-code=\"tinypng\"  data-dialog-title=\"";
            // line 359
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("TinyPNG Settings")), "html", null, true);
            echo "\">
                        <i class=\"fa fa-info-circle\"></i>";
            // line 361
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["ioSetting"] ?? null), "setting", array(), "any", false, true), "tinypng", array(), "any", false, true), "auth_key", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["ioSetting"] ?? null), "setting", array()), "tinypng", array()), "auth_key", array()) != ""))) {
                // line 362
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Change Details")), "html", null, true);
            } else {
                // line 364
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Setup")), "html", null, true);
            }
            // line 366
            echo "                    </a>
                </div>
            </div>";
            // line 381
            echo "        </div>
    </div>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 385
    public function getimageOptimizeMainTab($___selfTemplate__ = null, $__ioSetting__ = null, $__galleryList__ = null, $__statistic__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "_selfTemplate" => $___selfTemplate__,
            "ioSetting" => $__ioSetting__,
            "galleryList" => $__galleryList__,
            "statistic" => $__statistic__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 386
            $context["hlp"] = $this->loadTemplate("@core/helpers.twig", "@optimization/index.twig", 386);
            // line 387
            echo "
    <input type=\"hidden\" id=\"sgg-optimize-main-tab-inp\"/>";
            // line 389
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["_selfTemplate"] ?? null), "imageOptimizeServiceSettingTable", array(0 => ($context["_selfTemplate"] ?? null), 1 => ($context["ioSetting"] ?? null)), "method"), "html", null, true);
            echo "

    <div class=\"supsystic-io-block sgg-io-stat-block\">
        <!--<div class=\"sgg-io-tabs-links-list sgg-io-stat-anch\">
            <a href=\"#\" class=\"sgg-io-tab-link\" data-tab-id=\"sgg-io-one-tab\">All</a>
            <a href=\"#\" class=\"sgg-io-tab-link sggActive\" data-tab-id=\"sgg-stat-tab-1\">TinyPNG</a>
            <a href=\"#\" class=\"sgg-io-tab-link\" data-tab-id=\"sgg-stat-tab-2\">Another Service</a>
        </div>-->
        <div class=\"sgg-io-tabs-list sgg-io-stat-anch\">
            <div class=\"sgg-io-one-tab sgg-stat-tab-1\">";
            // line 399
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["_selfTemplate"] ?? null), "oneImageOptimizeStatTable", array(0 => "tinypng", 1 => "", 2 => ($context["statistic"] ?? null)), "method"), "html", null, true);
            echo "
            </div>
            <!-- <div class=\"sgg-io-one-tab sgg-stat-tab-2 sgg-io-tab-hidden\">";
            // line 403
            echo "            </div>-->
        </div>
    </div>

    <div class=\"supsystic-io-block sgg-optimize-list\">
        <button class=\"button sgg-optimize-selected\" disabled=\"disabled\">";
            // line 408
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimize selected")), "html", null, true);
            echo "</button>";
            // line 409
            echo $context["hlp"]->getshowTooltip((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You may choose one, several or all the galleries at once to optimize them. ")) . "<a target='_blank' href='https://supsystic.com/documentation/image-optimize/'>https://supsystic.com/documentation/image-optimize/</a>"), "top", true);
            // line 412
            echo "

        <div class=\"supsystic-io-block-table sgg-gallery-opt-table\">
            <div class=\"supsystic-io-block-row sgg-table-row-header\">
                <div class=\"supsystic-io-block-cell\"></div>
                <div class=\"supsystic-io-block-cell\">";
            // line 417
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Name")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">";
            // line 418
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total Images")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">";
            // line 419
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total Size")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">";
            // line 420
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimization")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\"></div>
            </div>";
            // line 423
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["galleryList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["gallInfo"]) {
                // line 424
                echo "                <div class=\"supsystic-io-block-row\">
                    <div class=\"supsystic-io-block-cell\">
                        <input class=\"sgg-checkb-inp\" type=\"checkbox\" value=\"";
                // line 426
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "id", array()), "html", null, true);
                echo "\"
                               data-once-optimize=\"";
                // line 427
                if (($this->getAttribute($context["gallInfo"], "last_optimize_date", array(), "any", true, true) && $this->getAttribute($context["gallInfo"], "service_name", array(), "any", true, true))) {
                    echo "1";
                } else {
                    echo "0";
                }
                echo "\"
                               data-gallery-total-size=\"";
                // line 428
                if ($this->getAttribute($context["gallInfo"], "optimized_size", array(), "any", true, true)) {
                    echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "optimized_size", array()), "html", null, true);
                } else {
                    echo "-";
                }
                echo "\"
                               data-phot-count=\"";
                // line 429
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "photo_count", array()), "html", null, true);
                echo "\"
                        />
                    </div>
                    <div class=\"supsystic-io-block-cell\">";
                // line 432
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "title", array()), "html", null, true);
                echo "</div>
                    <div class=\"supsystic-io-block-cell\">";
                // line 434
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "photo_count", array()), "html", null, true);
                echo "
                    </div>
                    <div class=\"supsystic-io-block-cell\">";
                // line 437
                if ($this->getAttribute($context["gallInfo"], "optimized_size", array(), "any", true, true)) {
                    // line 438
                    echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute($context["gallInfo"], "optimized_size", array()) . " ") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb"))), "html", null, true);
                } else {
                    // line 440
                    echo "                            -";
                }
                // line 442
                echo "                    </div>
                    <div class=\"supsystic-io-block-cell\">";
                // line 444
                if ((($this->getAttribute($context["gallInfo"], "last_optimize_date", array(), "any", true, true) && $this->getAttribute($context["gallInfo"], "service_name", array(), "any", true, true)) && $this->getAttribute($context["gallInfo"], "optimize_percent", array(), "any", true, true))) {
                    // line 446
                    echo Twig_SupTwgSgg_escape_filter($this->env, ((($this->getAttribute($context["gallInfo"], "last_optimize_date", array()) . " / ") . $this->getAttribute($context["gallInfo"], "optimize_percent", array())) . "% "), "html", null, true);
                } else {
                    // line 448
                    echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "html", null, true);
                }
                // line 450
                echo "\t\t\t\t\t</div>
                    <div class=\"supsystic-io-block-cell\">";
                // line 452
                if ($this->getAttribute($context["gallInfo"], "last_optimize_date", array(), "any", true, true)) {
                    // line 453
                    echo "                            <button class=\"button sgg-restore-src-img\" data-gallery-id=\"";
                    echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "id", array()), "html", null, true);
                    echo "\">";
                    // line 454
                    echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Restore Source Images")), "html", null, true);
                    echo "
                            </button>
                            <div class=\"sgg-opt-twi-button\">
                                <button class=\"button sgg-tbl-optimize-retr\"
                                        data-gallery-id=\"";
                    // line 458
                    echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "id", array()), "html", null, true);
                    echo "\"
                                        data-gallery-total-size=\"";
                    // line 459
                    if ($this->getAttribute($context["gallInfo"], "optimized_size", array(), "any", true, true)) {
                        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "optimized_size", array()), "html", null, true);
                    } else {
                        echo "-";
                    }
                    echo "\"
                                        data-photo-count=\"";
                    // line 460
                    echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "photo_count", array()), "html", null, true);
                    echo "\">";
                    // line 461
                    echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimize")), "html", null, true);
                    echo "
                                </button>
                                <br/><span class=\"sgg-more-info-str\">* one more time</span>
                            </div>";
                } else {
                    // line 466
                    echo "                            <button class=\"button sgg-restore-src-img sgg-io-tab-hidden\" data-gallery-id=\"";
                    echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "id", array()), "html", null, true);
                    echo "\">";
                    // line 467
                    echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Restore Source Images")), "html", null, true);
                    echo "
                            </button>
                            <button class=\"button sgg-tbl-optimize-first\"
                                    data-gallery-id=\"";
                    // line 470
                    echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "id", array()), "html", null, true);
                    echo "\"
                                    data-gallery-total-size=\"";
                    // line 471
                    if ($this->getAttribute($context["gallInfo"], "optimized_size", array(), "any", true, true)) {
                        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "optimized_size", array()), "html", null, true);
                    } else {
                        echo "-";
                    }
                    echo "\"
                                    data-photo-count=\"";
                    // line 472
                    echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "photo_count", array()), "html", null, true);
                    echo "\">";
                    // line 473
                    echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimize Now")), "html", null, true);
                    echo "
                            </button>";
                }
                // line 476
                echo "                    </div>
                </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallInfo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 479
            echo "        </div>
    </div>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 483
    public function getimageOptimizeServiceSettingsDialog($__ioSetting__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "ioSetting" => $__ioSetting__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 484
            $context["helper1"] = $this->loadTemplate("@core/helpers.twig", "@optimization/index.twig", 484);
            // line 485
            echo "
    <div id=\"sggDialogSeviceSetting\" title=\"\" style=\"display:none;\">
        <div class=\"sgg-dialog-block-part sgg-io-tab-hidden\" data-img-opt-sett-code=\"tinypng\">
            <label>";
            // line 489
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your TinyPNG API key")), "html", null, true);
            // line 490
            echo $context["helper1"]->getshowTooltip(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your name and email address on this <a target='_blank' href='https://tinypng.com/developers'>page</a> to retrieve your API key. On your email will be sent a link to your API key. Follow the link from email and grab your API key.")), "top", true);
            echo "
                <br/>
                <input type=\"text\" class=\"sgg-tinypng-sett-auth-val\" name=\"tinypng-auth-val\" value=\"";
            // line 492
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["ioSetting"] ?? null), "setting", array(), "any", false, true), "tinypng", array(), "any", false, true), "auth_key", array(), "any", true, true)) {
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["ioSetting"] ?? null), "setting", array()), "tinypng", array()), "auth_key", array()), "html", null, true);
            }
            echo "\"/>
            </label>
            <button class=\"button sgg-setup-button sgg-tinypng-save\" >";
            // line 494
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
            echo "</button>
        </div>
    </div>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 499
    public function getcdnServiceSettingDialog($__cdnSett__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "cdnSett" => $__cdnSett__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 500
            $context["helper1"] = $this->loadTemplate("@core/helpers.twig", "@optimization/index.twig", 500);
            // line 501
            echo "
    <div id=\"sggCdnDialogSeviceSett\" title=\"\" style=\"display:none;\">
        <div class=\"sgg-dialog-block-part sgg-io-tab-hidden\" data-img-opt-sett-code=\"keycdn\">
            <label>";
            // line 505
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your Site name")), "html", null, true);
            // line 506
            echo $context["helper1"]->getshowTooltip((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your KeyCdn Zone name (for example: pz-6f09.kxcdn.com)")) . " <a target='_blank' href='https://supsystic.com/documentation/transfer-to-cdn/'>https://supsystic.com/documentation/transfer-to-cdn/</a>"), "top", true);
            // line 509
            echo "
\t\t\t\t<br/>
                <input type=\"text\" autocomplete=\"off\" class=\"sgg-keycdn-sett-zonename\" name=\"sgg-keycdn-sett-sitename\" value=\"";
            // line 511
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["cdnSett"] ?? null), "setting", array(), "any", false, true), "keycdn", array(), "any", false, true), "zone_name", array(), "any", true, true)) {
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["cdnSett"] ?? null), "setting", array()), "keycdn", array()), "zone_name", array()), "html", null, true);
            }
            echo "\"/>
            </label>
            <br/>
\t\t\t<label>";
            // line 515
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your username")), "html", null, true);
            // line 516
            echo $context["helper1"]->getshowTooltip((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your KeyCdn username")) . " <a target='_blank' href='https://supsystic.com/documentation/transfer-to-cdn/'>https://supsystic.com/documentation/transfer-to-cdn/</a>"), "top", true);
            // line 519
            echo "
\t\t\t\t<br/>
\t\t\t\t<input type=\"text\" autocomplete=\"off\" class=\"sgg-keycdn-sett-uname\" name=\"sgg-keycdn-sett-uname\" value=\"";
            // line 521
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["cdnSett"] ?? null), "setting", array(), "any", false, true), "keycdn", array(), "any", false, true), "u_name", array(), "any", true, true)) {
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["cdnSett"] ?? null), "setting", array()), "keycdn", array()), "u_name", array()), "html", null, true);
            }
            echo "\"/>
\t\t\t</label><br/>
\t\t\t<label>";
            // line 524
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your password")), "html", null, true);
            // line 525
            echo $context["helper1"]->getshowTooltip((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your KeyCdn password")) . " <a target='_blank' href='https://supsystic.com/documentation/transfer-to-cdn/'>https://supsystic.com/documentation/transfer-to-cdn/</a>"), "top", true);
            // line 528
            echo "
\t\t\t\t<br/>";
            // line 531
            echo "\t\t\t\t<input type=\"password\" autocomplete=\"off\" class=\"sgg-keycdn-sett-upass\" name=\"sgg-keycdn-sett-upass\" value=\"\"/>
\t\t\t</label><br/>
\t\t\t<label>";
            // line 534
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your ftp base path")), "html", null, true);
            // line 535
            echo $context["helper1"]->getshowTooltip((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your KeyCdn ftp base path (for example: /pz)")) . " <a target='_blank' href='https://supsystic.com/documentation/transfer-to-cdn/'>https://supsystic.com/documentation/transfer-to-cdn/</a>"), "top", true);
            // line 538
            echo "
\t\t\t\t<br/>
\t\t\t\t<input type=\"text\" class=\"sgg-keycdn-sett-base-ftp\" name=\"sgg-keycdn-sett-base-ftp\" value=\"";
            // line 540
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["cdnSett"] ?? null), "setting", array(), "any", false, true), "keycdn", array(), "any", false, true), "base_ftp_path", array(), "any", true, true)) {
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["cdnSett"] ?? null), "setting", array()), "keycdn", array()), "base_ftp_path", array()), "html", null, true);
            }
            echo "\"/>
\t\t\t</label>
\t\t\t<button class=\"button sgg-setup-button sgg-keycdn-save\" >";
            // line 542
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
            echo "</button>
        </div>
    </div>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 547
    public function getoneImageOptimizeStatTable($__serviceCode__ = null, $__tblData__ = null, $__statistic__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "serviceCode" => $__serviceCode__,
            "tblData" => $__tblData__,
            "statistic" => $__statistic__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 548
            $context["hlp"] = $this->loadTemplate("@core/helpers.twig", "@optimization/index.twig", 548);
            // line 549
            echo "
    <div class=\"supsystic-io-block-table sgg-service-stat-info\">
        <div class=\"supsystic-io-block-caption\">
            <h4>";
            // line 553
            if ((($context["serviceCode"] ?? null) == "tinypng")) {
                // line 554
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("TinyPNG Statistics")), "html", null, true);
                // line 555
                echo $context["hlp"]->getshowTooltip((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Here you may find the detailed optimization statistics for your gallery. ")) . "<a target='_blank' href='https://supsystic.com/documentation/image-optimize/'>https://supsystic.com/documentation/image-optimize/</a>"), "top", true);
            } else {
                // line 560
                echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Incorrect service Code")), "html", null, true);
            }
            // line 562
            echo "            </h4>
        </div>

        <div class=\"supsystic-io-block-row\">
            <div class=\"supsystic-io-block-cell\"></div>
            <div class=\"supsystic-io-block-cell\"><span class=\"sgg-text-style1\">";
            // line 567
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Last 24 hours")), "html", null, true);
            echo "</span></div>
            <div class=\"supsystic-io-block-cell\"><span class=\"sgg-text-style1\">";
            // line 568
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Week")), "html", null, true);
            echo "</span></div>
            <div class=\"supsystic-io-block-cell\"><span class=\"sgg-text-style1\">";
            // line 569
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Month")), "html", null, true);
            echo "</span></div>
        </div>";
            // line 572
            echo "        <div class=\"supsystic-io-block-row\">
            <div class=\"supsystic-io-block-cell\">";
            // line 573
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Number of images")), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 574
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["statistic"] ?? null), 1, array(), "array"), "photo_count", array()), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 575
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["statistic"] ?? null), 2, array(), "array"), "photo_count", array()), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 576
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["statistic"] ?? null), 3, array(), "array"), "photo_count", array()), "html", null, true);
            echo "</div>
        </div>
        <div class=\"supsystic-io-block-row\">
            <div class=\"supsystic-io-block-cell\">";
            // line 579
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total size before")), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 580
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["statistic"] ?? null), 1, array(), "array"), "size_mb", array()), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 581
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["statistic"] ?? null), 2, array(), "array"), "size_mb", array()), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 582
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["statistic"] ?? null), 3, array(), "array"), "size_mb", array()), "html", null, true);
            echo "</div>
        </div>
        <div class=\"supsystic-io-block-row\">
            <div class=\"supsystic-io-block-cell\">";
            // line 585
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total size after")), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 586
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["statistic"] ?? null), 1, array(), "array"), "optimized_size_mb", array()), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 587
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["statistic"] ?? null), 2, array(), "array"), "optimized_size_mb", array()), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 588
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["statistic"] ?? null), 3, array(), "array"), "optimized_size_mb", array()), "html", null, true);
            echo "</div>
        </div>
        <div class=\"supsystic-io-block-row\">
            <div class=\"supsystic-io-block-cell\">";
            // line 591
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save in Mb")), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 592
            echo Twig_SupTwgSgg_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["statistic"] ?? null), 1, array(), "array"), "save_mb", array()) . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb"))), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 593
            echo Twig_SupTwgSgg_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["statistic"] ?? null), 2, array(), "array"), "save_mb", array()) . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb"))), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 594
            echo Twig_SupTwgSgg_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["statistic"] ?? null), 3, array(), "array"), "save_mb", array()) . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb"))), "html", null, true);
            echo "</div>
        </div>
        <div class=\"supsystic-io-block-row\">
            <div class=\"supsystic-io-block-cell\">";
            // line 597
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save in %")), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 598
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["statistic"] ?? null), 1, array(), "array"), "save_percent", array()), "html", null, true);
            echo "%</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 599
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["statistic"] ?? null), 2, array(), "array"), "save_percent", array()), "html", null, true);
            echo "%</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 600
            echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["statistic"] ?? null), 3, array(), "array"), "save_percent", array()), "html", null, true);
            echo "%</div>
        </div>
    </div>";
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
        return "@optimization/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1275 => 600,  1271 => 599,  1267 => 598,  1263 => 597,  1257 => 594,  1253 => 593,  1249 => 592,  1245 => 591,  1239 => 588,  1235 => 587,  1231 => 586,  1227 => 585,  1221 => 582,  1217 => 581,  1213 => 580,  1209 => 579,  1203 => 576,  1199 => 575,  1195 => 574,  1191 => 573,  1188 => 572,  1184 => 569,  1180 => 568,  1176 => 567,  1169 => 562,  1166 => 560,  1163 => 555,  1161 => 554,  1159 => 553,  1154 => 549,  1152 => 548,  1138 => 547,  1120 => 542,  1113 => 540,  1109 => 538,  1107 => 535,  1105 => 534,  1101 => 531,  1098 => 528,  1096 => 525,  1094 => 524,  1087 => 521,  1083 => 519,  1081 => 516,  1079 => 515,  1071 => 511,  1067 => 509,  1065 => 506,  1063 => 505,  1058 => 501,  1056 => 500,  1044 => 499,  1026 => 494,  1019 => 492,  1014 => 490,  1012 => 489,  1007 => 485,  1005 => 484,  993 => 483,  977 => 479,  970 => 476,  965 => 473,  962 => 472,  954 => 471,  950 => 470,  944 => 467,  940 => 466,  933 => 461,  930 => 460,  922 => 459,  918 => 458,  911 => 454,  907 => 453,  905 => 452,  902 => 450,  899 => 448,  896 => 446,  894 => 444,  891 => 442,  888 => 440,  885 => 438,  883 => 437,  878 => 434,  874 => 432,  868 => 429,  860 => 428,  852 => 427,  848 => 426,  844 => 424,  840 => 423,  835 => 420,  831 => 419,  827 => 418,  823 => 417,  816 => 412,  814 => 409,  811 => 408,  804 => 403,  799 => 399,  787 => 389,  784 => 387,  782 => 386,  767 => 385,  751 => 381,  747 => 366,  744 => 364,  741 => 362,  739 => 361,  735 => 359,  730 => 356,  728 => 352,  726 => 351,  719 => 348,  712 => 343,  710 => 342,  697 => 341,  682 => 338,  675 => 332,  671 => 331,  660 => 323,  654 => 319,  646 => 313,  641 => 310,  637 => 308,  632 => 305,  628 => 303,  623 => 300,  615 => 295,  609 => 292,  605 => 291,  600 => 289,  594 => 285,  590 => 283,  585 => 280,  580 => 278,  576 => 276,  571 => 273,  565 => 270,  559 => 266,  553 => 262,  546 => 257,  541 => 255,  532 => 249,  528 => 247,  525 => 235,  521 => 234,  506 => 223,  493 => 222,  473 => 215,  467 => 212,  460 => 208,  455 => 206,  449 => 202,  445 => 200,  439 => 196,  434 => 194,  430 => 192,  422 => 187,  418 => 179,  414 => 178,  407 => 174,  401 => 171,  397 => 170,  388 => 162,  386 => 161,  374 => 160,  358 => 156,  348 => 151,  339 => 150,  334 => 149,  330 => 148,  327 => 147,  323 => 145,  320 => 144,  317 => 143,  315 => 142,  312 => 140,  309 => 139,  306 => 138,  304 => 137,  302 => 136,  300 => 135,  295 => 132,  291 => 130,  284 => 128,  274 => 127,  267 => 124,  263 => 123,  260 => 120,  257 => 118,  255 => 117,  253 => 116,  248 => 112,  244 => 111,  240 => 110,  236 => 109,  228 => 104,  224 => 103,  216 => 97,  213 => 95,  210 => 93,  208 => 92,  204 => 90,  199 => 87,  197 => 83,  195 => 82,  188 => 79,  180 => 73,  178 => 72,  165 => 71,  158 => 66,  154 => 65,  150 => 64,  145 => 62,  141 => 61,  136 => 60,  134 => 59,  129 => 55,  126 => 53,  124 => 52,  122 => 51,  119 => 49,  111 => 47,  107 => 46,  104 => 45,  101 => 44,  99 => 43,  94 => 40,  92 => 39,  88 => 37,  84 => 35,  82 => 34,  80 => 33,  77 => 32,  70 => 26,  68 => 23,  66 => 22,  61 => 18,  59 => 16,  57 => 15,  53 => 12,  51 => 11,  45 => 9,  38 => 7,  34 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        //@trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_SupTwgSgg_Source("", "@optimization/index.twig", "C:\\xampp\\htdocs\\wordpress\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Optimization\\views\\index.twig");
    }
}
