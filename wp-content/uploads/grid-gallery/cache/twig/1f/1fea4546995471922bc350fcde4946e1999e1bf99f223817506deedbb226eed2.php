<?php

/* @promo/promo.twig */
class __TwigTemplate_5154efa833d3a7530f0485432035f56151bcdef96e1cad362ecd5d2c75928cbe extends Twig_SupTwgSgg_Template
{
    public function __construct(Twig_SupTwgSgg_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "@promo/promo.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <section>
        <div class=\"supsystic-item supsystic-panel supsystic-plugin supsystic-plugin-promo\">
            <div id=\"containerWrapper\">
                <div class=\"supRow\">
                    <div class=\"supSm12\">
                        <h2>";
        // line 10
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Welcome to the"), "method"), "html", null, true);
        echo Twig_SupTwgSgg_escape_filter($this->env, ($context["plugin_name"] ?? null), "html", null, true);
        echo " v";
        echo Twig_SupTwgSgg_escape_filter($this->env, ($context["plugin_version"] ?? null), "html", null, true);
        echo "
                        </h2>
                        <p class=\"supSm6\">";
        // line 13
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Photo Gallery plugin is created for people who would like to show their photos in a marvelous way. Perform your best ideas, making delightful presentations or galleries from videos and photos."), "method"), "html", null, true);
        echo "
                        </p>
                    </div>
                </div>
                <div class=\"supRow\">
                    <div class=\"supSm8\">
                        <div class=\"supRow\">
                            <div class=\"supSm6\">
                                <h3>";
        // line 21
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Step-by-step tutorial"), "method"), "html", null, true);
        echo "</h3>
                                <p>";
        // line 23
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "There’re really many options of photo gallery plugin customization. So as soon as you close that page, I’ll show you step-by-step tutorial of how to use plugin. Hope it will be usefull for you :)"), "method"), "html", null, true);
        echo "
                                </p>
                            </div>
                            <div class=\"supSm6\">
                                <h3>";
        // line 27
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Support"), "method"), "html", null, true);
        echo "</h3>
                                <p>";
        // line 29
        echo $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "We love our plugin and do the best to improve all features you want and fix all issues. But sometimes some issues happened or you can’t find feature you want :) Don’t worry, just <a href=\"//supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=welcomepage&utm_campaign=photo-gallery#contact\" target=\"_blank\"> contact us </a> . We’ll answer in an hour and fix all issues."), "method");
        echo "
                                </p>
                            </div>
                        </div>
                        <div class=\"supRow\">
                            <div class=\"supSm12\">
                                <h3>";
        // line 35
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Video Tutorial"), "method"), "html", null, true);
        echo "</h3>
                                <iframe type=\"text/html\"
                                        width=\"90%\"
                                        height=\"330px\"
                                        src=\"https://www.youtube.com/embed/5bkjrlV14CE\"
                                        frameborder=\"0\">
                                </iframe>
                            </div>
                        </div>
                    </div>
                    <div class=\"supSm4\">
                        <h3>";
        // line 47
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Frequently Asked Questions"), "method"), "html", null, true);
        echo "
                        </h3>

                        <h4>";
        // line 51
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Gallery doesn’t load on the front end. If the loading gallery icon just keeps playing but never loads the gallery."), "method"), "html", null, true);
        echo "
                        </h4>
                        <p>
\t\t\t\t\t\t\tMost likely there are conflicts with your theme or other plugins. Please contact us through our <a href=\"//supsystic.com/contact-us/\" target=\"_blank\">internal support</a>. We will check what is wrong and will help you to solve the problem.
                        </p>

                        <h4>";
        // line 58
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "How to change the position of photos in gallery?"), "method"), "html", null, true);
        echo "
                        </h4>
                        <p>
\t\t\t\t\t\t\tTo change the position of photos just drag them manually on the Images List and click save. Also there you can sort the images by add date, create date, size, name and tags.
                        </p>

                        <h4>";
        // line 65
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "How to insert gallery into widget?"), "method"), "html", null, true);
        echo "
                        </h4>
                         <p>
\t\t\t\t\t\t\tIf you want to use gallery in widgets -
                            <ol>
                                <li>";
        // line 70
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Go to Appearance -> Widgets."), "method"), "html", null, true);
        echo "</li>
                                <li>";
        // line 71
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "You’ll see Gallery by Supsystic Widget on the left. Drag it to the area, where you want it to appear."), "method"), "html", null, true);
        echo "</li>
                                <li>";
        // line 72
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Then choose what gallery you want to display. And press save."), "method"), "html", null, true);
        echo "</li>
                            </ol>
                        </p>

                        <h4>
                            <a href=\"//supsystic.com/plugins/photo-gallery/?utm_source=plugin&utm_medium=welcomepagefaq&utm_campaign=photogallery#faq\" target=\"_blank\">";
        // line 77
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Check all other FAQs"), "method"), "html", null, true);
        echo "</a>
                        </h4>

                        <div style=\"clear: both;\"></div>
                        <a href=\"";
        // line 81
        echo Twig_SupTwgSgg_escape_filter($this->env, ($context["start_url"] ?? null), "html", null, true);
        echo "\" style=\"font-size: 20px\" class=\"button button-primary button-hero\">";
        // line 82
        echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Let's Start!"), "method"), "html", null, true);
        echo "
                        </a>
                    </div>
                </div>
                <div style=\"clear: both;\"></div>
            </div>
        </div>
    </section>";
    }

    public function getTemplateName()
    {
        return "@promo/promo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 82,  150 => 81,  143 => 77,  135 => 72,  131 => 71,  127 => 70,  119 => 65,  110 => 58,  101 => 51,  95 => 47,  81 => 35,  72 => 29,  68 => 27,  61 => 23,  57 => 21,  46 => 13,  38 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        //@trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_SupTwgSgg_Source("", "@promo/promo.twig", "C:\\xampp\\htdocs\\wordpress\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Promo\\views\\promo.twig");
    }
}
