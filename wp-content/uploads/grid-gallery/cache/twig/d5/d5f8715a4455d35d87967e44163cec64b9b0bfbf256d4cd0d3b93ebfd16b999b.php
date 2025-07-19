<?php

/* @core/form.twig */
class __TwigTemplate_c3022981341b0aa9498d7d4b26a070c583afec08ff1603e540a7086ced1f7781 extends Twig_SupTwgSgg_Template
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
    public function getopen($__method__ = null, $__action__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "method" => $__method__,
            "action" => $__action__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <form method=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_upper_filter($this->env, ($context["method"] ?? null)), "html", null, true);
            echo "\"";
            if ( !Twig_SupTwgSgg_test_empty(($context["action"] ?? null))) {
                echo "action=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 6
    public function getclose(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "    </form>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function getshow_tooltip($__id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 12
            $context["title"] = $this->getAttribute(($context["tooltips"] ?? null), ($context["id"] ?? null), array(), "array");
            // line 14
            if ( !Twig_SupTwgSgg_test_empty(($context["title"] ?? null))) {
                // line 15
                echo "        <i class=\"fa fa-";
                echo Twig_SupTwgSgg_escape_filter($this->env, (($this->getAttribute(($context["tooltips_icon"] ?? null), "icon", array(), "any", true, true)) ? (_Twig_SupTwgSgg_default_filter($this->getAttribute(($context["tooltips_icon"] ?? null), "icon", array()), "question")) : ("question")), "html", null, true);
                echo " supsystic-tooltip\"
           title=\"";
                // line 16
                echo ($context["title"] ?? null);
                echo "\"
           style=\"";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = Twig_SupTwgSgg_ensure_traversable($this->getAttribute(($context["tooltips_icon"] ?? null), "style", array()));
                foreach ($context['_seq'] as $context["property"] => $context["value"]) {
                    echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_trim_filter($context["property"]), "html", null, true);
                    echo ":";
                    echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_trim_filter($context["value"]), "html", null, true);
                    echo ";";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['property'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\"></i>";
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

    // line 21
    public function getrow($__label__ = null, $__element__ = null, $__id__ = null, $__titleRow__ = null, $__row_id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "element" => $__element__,
            "id" => $__id__,
            "titleRow" => $__titleRow__,
            "row_id" => $__row_id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 22
            $context["form"] = $this;
            // line 24
            if ( !Twig_SupTwgSgg_test_empty(($context["row_id"] ?? null))) {
                // line 25
                echo "    <tr id=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                echo "\">";
            } else {
                // line 27
                echo "    <tr>";
            }
            // line 29
            echo "        <th scope=\"row\">";
            // line 30
            if (((Twig_SupTwgSgg_length_filter($this->env, ($context["titleRow"] ?? null)) == 2) && (($context["titleRow"] ?? null) == "h4"))) {
                // line 31
                echo "\t\t\t\t<h4 style=\"margin: 0 !important;\"";
                if ( !Twig_SupTwgSgg_test_empty(($context["id"] ?? null))) {
                    echo "id=\"label-";
                    echo Twig_SupTwgSgg_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 32
                echo ($context["label"] ?? null);
                // line 33
                echo $context["form"]->getshow_tooltip(($context["id"] ?? null));
                echo "
\t\t\t\t</h4>";
            } elseif ( !Twig_SupTwgSgg_test_empty(            // line 35
($context["titleRow"] ?? null))) {
                // line 36
                echo "                <h3 style=\"margin: 0 !important;\"";
                if ( !Twig_SupTwgSgg_test_empty(($context["id"] ?? null))) {
                    echo "id=\"label-";
                    echo Twig_SupTwgSgg_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 37
                echo ($context["label"] ?? null);
                // line 38
                echo $context["form"]->getshow_tooltip(($context["id"] ?? null));
                echo "
                </h3>";
            } else {
                // line 41
                echo "                <label";
                echo " ";
                if ( !Twig_SupTwgSgg_test_empty(($context["id"] ?? null))) {
                    echo "id=\"label-";
                    echo Twig_SupTwgSgg_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" for=\"";
                    echo Twig_SupTwgSgg_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 42
                echo Twig_SupTwgSgg_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                // line 43
                echo $context["form"]->getshow_tooltip(($context["id"] ?? null));
                echo "
                </label>";
            }
            // line 46
            echo "        </th>";
            // line 47
            if ( !Twig_SupTwgSgg_test_empty(($context["id"] ?? null))) {
                // line 48
                echo "        <td id=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\">";
            } else {
                // line 50
                echo "        <td>";
            }
            // line 52
            echo ($context["element"] ?? null);
            echo "
        </td>
    </tr>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 57
    public function getrowpro($__label__ = null, $__link__ = null, $__id__ = null, $__element__ = null, $__titleRow__ = null, $__notAddBr__ = null, $__row_id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "link" => $__link__,
            "id" => $__id__,
            "element" => $__element__,
            "titleRow" => $__titleRow__,
            "notAddBr" => $__notAddBr__,
            "row_id" => $__row_id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 58
            $context["form"] = $this;
            // line 60
            if ( !Twig_SupTwgSgg_test_empty(($context["row_id"] ?? null))) {
                // line 61
                echo "    <tr id=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                echo "\">";
            } else {
                // line 63
                echo "    <tr>";
            }
            // line 65
            echo "        <th scope=\"row\">";
            // line 66
            if ( !Twig_SupTwgSgg_test_empty(($context["titleRow"] ?? null))) {
                // line 67
                echo "                <h3 style=\"margin: 0 !important;\">";
                // line 68
                echo Twig_SupTwgSgg_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                // line 69
                echo $context["form"]->getshow_tooltip(($context["id"] ?? null));
                echo "
                </h3>";
            } else {
                // line 72
                echo "                <label";
                if ( !Twig_SupTwgSgg_test_empty(($context["id"] ?? null))) {
                    echo "id=\"label-";
                    echo Twig_SupTwgSgg_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" for=\"";
                    echo Twig_SupTwgSgg_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 73
                echo Twig_SupTwgSgg_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                // line 74
                echo $context["form"]->getshow_tooltip(($context["id"] ?? null));
                echo "
                </label>";
            }
            // line 77
            if ((($context["notAddBr"] ?? null) == null)) {
                // line 78
                echo "\t\t\t\t<br/>";
            }
            // line 80
            echo "\t\t\t<label><a href=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array(($context["link"] ?? null))), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\" class=\"sggLinkToProVer\">PRO Option</a> </label>
        </th>
        <td>";
            // line 82
            echo ($context["element"] ?? null);
            echo "</td>
    </tr>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 86
    public function getinput($__type__ = "text", $__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 87
            echo "    <input type=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["val"]) {
                // line 89
                if (Twig_SupTwgSgg_test_iterable($context["val"])) {
                    // line 90
                    echo Twig_SupTwgSgg_escape_filter($this->env, $context["attribute"], "html", null, true);
                    echo "=\"";
                    $context['_parent'] = $context;
                    $context['_seq'] = Twig_SupTwgSgg_ensure_traversable($context["val"]);
                    foreach ($context['_seq'] as $context["attr"] => $context["param"]) {
                        echo Twig_SupTwgSgg_escape_filter($this->env, $context["attr"], "html", null, true);
                        echo ":";
                        echo Twig_SupTwgSgg_escape_filter($this->env, $context["param"], "html", null, true);
                        echo ";";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attr'], $context['param'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\"";
                } else {
                    // line 92
                    echo Twig_SupTwgSgg_escape_filter($this->env, $context["attribute"], "html", null, true);
                    echo "=\"";
                    echo Twig_SupTwgSgg_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "\"";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "    />";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 98
    public function gettext($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 99
            $context["form"] = $this;
            // line 101
            echo $context["form"]->getinput("text", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 104
    public function getpassword($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 105
            $context["form"] = $this;
            // line 107
            echo $context["form"]->getinput("password", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 110
    public function getbutton($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 111
            $context["form"] = $this;
            // line 113
            if ($this->getAttribute(($context["attributes"] ?? null), "class", array(), "any", true, true)) {
                // line 114
                $context["attributes"] = Twig_SupTwgSgg_array_merge(($context["attributes"] ?? null), array("class" => ($this->getAttribute(($context["attributes"] ?? null), "class", array()) . " button button-primary")));
            }
            // line 117
            echo $context["form"]->getinput("button", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 120
    public function getcheckbox($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 121
            $context["form"] = $this;
            // line 123
            echo $context["form"]->getinput("checkbox", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 126
    public function getfile($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 127
            $context["form"] = $this;
            // line 129
            echo $context["form"]->getinput("file", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 132
    public function gethidden($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 133
            $context["form"] = $this;
            // line 135
            echo $context["form"]->getinput("hidden", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 138
    public function getradio($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 139
            $context["form"] = $this;
            // line 141
            echo $context["form"]->getinput("radio", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 144
    public function getcolor($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 145
            $context["form"] = $this;
            // line 147
            echo $context["form"]->getinput("color", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 150
    public function getsubmit($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 151
            $context["form"] = $this;
            // line 153
            if ($this->getAttribute(($context["attributes"] ?? null), "class", array(), "any", true, true)) {
                // line 154
                $context["attributes"] = Twig_SupTwgSgg_array_merge(($context["attributes"] ?? null), array("class" => ($this->getAttribute(($context["attributes"] ?? null), "class", array()) . " button button-primary")));
            }
            // line 157
            echo $context["form"]->getinput("submit", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
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
    public function getselect($__name__ = null, $__options__ = null, $__selected__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "options" => $__options__,
            "selected" => $__selected__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 166
            echo "    <select name=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"";
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 167
            $context["isMultiple"] = false;
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 169
                if (($context["attribute"] == "multiple")) {
                    // line 170
                    $context["isMultiple"] = true;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["value"] => $context["text"]) {
                // line 174
                echo "        <option value=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
                if (((($context["isMultiple"] ?? null) && Twig_SupTwgSgg_in_filter($context["value"], ($context["selected"] ?? null))) || (($context["selected"] ?? null) == $context["value"]))) {
                    echo "selected";
                }
                echo ">";
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["text"], "html", null, true);
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "</select>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 179
    public function getselectv($__name__ = null, $__options__ = null, $__selected__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "options" => $__options__,
            "selected" => $__selected__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 180
            echo "    <select name=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"";
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                // line 182
                echo "        <option value=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["text"], "html", null, true);
                echo "\" name = \"";
                echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_lower_filter($this->env, $context["text"]), "html", null, true);
                echo "\"";
                if ((($context["selected"] ?? null) == $context["text"])) {
                    echo "selected";
                }
                echo ">";
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["text"], "html", null, true);
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "    </select>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 187
    public function getselectWithElem($__name__ = null, $__options__ = null, $__selected__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "options" => $__options__,
            "selected" => $__selected__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 188
            echo "\t<select name=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"";
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 190
                echo "\t\t<option value=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["value"], "value", array()), "html", null, true);
                echo "\" name = \"";
                echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_lower_filter($this->env, $this->getAttribute($context["value"], "title", array())), "html", null, true);
                echo "\"";
                // line 191
                if ((($context["selected"] ?? null) == $this->getAttribute($context["value"], "value", array()))) {
                    echo "selected=\"selected\"";
                }
                // line 192
                if (($this->getAttribute($context["value"], "disabled", array()) == 1)) {
                    echo " disabled=\"disabled\"";
                }
                // line 193
                echo "\t\t>";
                echo Twig_SupTwgSgg_escape_filter($this->env, $this->getAttribute($context["value"], "title", array()), "html", null, true);
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "\t</select>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 198
    public function getspan($__name__ = null, $__text__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "text" => $__text__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 199
            echo "    <span name=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"";
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 200
            echo Twig_SupTwgSgg_escape_filter($this->env, Twig_SupTwgSgg_lower_filter($this->env, ($context["text"] ?? null)), "html", null, true);
            echo "
    </span>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwgSgg_Markup($tmp, $this->env->getCharset());
    }

    // line 204
    public function getselected($__actual__ = null, $__expected__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "actual" => $__actual__,
            "expected" => $__expected__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 205
            if ((($context["actual"] ?? null) == ($context["expected"] ?? null))) {
                echo "selected=\"selected\"";
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

    // line 208
    public function getlabel($__label__ = null, $__for__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "for" => $__for__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 209
            echo "\t<label for=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["for"] ?? null), "html", null, true);
            echo "\"";
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwgSgg_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo Twig_SupTwgSgg_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
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

    // line 212
    public function geticon($__name__ = null, $__size__ = null, $__id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "size" => $__size__,
            "id" => $__id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 213
            echo "    <i class=\"fa";
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo " mp-icon-preview\" style=\"font-size:";
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
            echo "px;\" id=\"";
            echo Twig_SupTwgSgg_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"></i>";
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
        return "@core/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1059 => 213,  1045 => 212,  1014 => 209,  1000 => 208,  983 => 205,  970 => 204,  953 => 200,  937 => 199,  923 => 198,  908 => 195,  900 => 193,  896 => 192,  892 => 191,  886 => 190,  882 => 189,  866 => 188,  851 => 187,  836 => 184,  820 => 182,  816 => 181,  800 => 180,  785 => 179,  770 => 176,  756 => 174,  752 => 173,  745 => 170,  743 => 169,  739 => 168,  737 => 167,  721 => 166,  706 => 160,  691 => 157,  688 => 154,  686 => 153,  684 => 151,  670 => 150,  655 => 147,  653 => 145,  639 => 144,  624 => 141,  622 => 139,  608 => 138,  593 => 135,  591 => 133,  577 => 132,  562 => 129,  560 => 127,  546 => 126,  531 => 123,  529 => 121,  515 => 120,  500 => 117,  497 => 114,  495 => 113,  493 => 111,  479 => 110,  464 => 107,  462 => 105,  448 => 104,  433 => 101,  431 => 99,  417 => 98,  402 => 95,  392 => 92,  376 => 90,  374 => 89,  370 => 88,  362 => 87,  347 => 86,  330 => 82,  324 => 80,  321 => 78,  319 => 77,  314 => 74,  312 => 73,  302 => 72,  297 => 69,  295 => 68,  293 => 67,  291 => 66,  289 => 65,  286 => 63,  281 => 61,  279 => 60,  277 => 58,  259 => 57,  241 => 52,  238 => 50,  233 => 48,  231 => 47,  229 => 46,  224 => 43,  222 => 42,  211 => 41,  206 => 38,  204 => 37,  196 => 36,  194 => 35,  190 => 33,  188 => 32,  180 => 31,  178 => 30,  176 => 29,  173 => 27,  168 => 25,  166 => 24,  164 => 22,  148 => 21,  121 => 17,  117 => 16,  112 => 15,  110 => 14,  108 => 12,  96 => 10,  81 => 7,  70 => 6,  44 => 3,  35 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        //@trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_SupTwgSgg_Source("", "@core/form.twig", "C:\\xampp\\htdocs\\wordpress\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Core\\views\\form.twig");
    }
}
