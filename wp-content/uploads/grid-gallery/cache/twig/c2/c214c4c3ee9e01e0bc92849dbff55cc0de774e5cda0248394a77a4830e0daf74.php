<?php

/* @galleries/shortcode/style.twig */
class __TwigTemplate_13e0961b05dc984e417f154911c9bf99320d04b087481c71dcaffcf15fb4c185 extends Twig_SupTwgSgg_Template
{
    public function __construct(Twig_SupTwgSgg_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getprop($__prop__ = null, $__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "prop" => $__prop__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["prop"] ?? null), "html", null, true);
            echo ":";
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo ";";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 2
    public function getobject($__values__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "values" => $__values__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["values"] ?? null));
            foreach ($context['_seq'] as $context["prop"] => $context["value"]) {
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["prop"], "html", null, true);
                echo ":";
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["value"], "html", null, true);
                echo ";";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['prop'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return "@galleries/shortcode/style.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        //@trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_SupTwgSgg_Source("", "@galleries/shortcode/style.twig", "C:\\xampp\\htdocs\\wordpress\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Galleries\\views\\shortcode\\style.twig");
    }
}
