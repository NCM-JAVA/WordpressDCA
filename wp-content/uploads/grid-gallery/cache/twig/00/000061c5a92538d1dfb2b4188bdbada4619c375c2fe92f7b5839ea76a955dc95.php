<?php

/* @galleries/shortcode/style_for_effects.twig */
class __TwigTemplate_53d8dd062232cbe7f4044361fa6f03fb2e2704edcd4c123c62c166685ebf743b extends Twig_SupTwgSgg_Template
{
    public function __construct(Twig_SupTwgSgg_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'captionAdditionalParams' => array($this, 'block_captionAdditionalParams'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('captionAdditionalParams', $context, $blocks);
    }

    public function block_captionAdditionalParams($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/style_for_effects.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        //@trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_SupTwgSgg_Source("", "@galleries/shortcode/style_for_effects.twig", "C:\\xampp\\htdocs\\wordpress\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Galleries\\views\\shortcode\\style_for_effects.twig");
    }
}
