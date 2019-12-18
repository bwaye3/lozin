<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/gavias_lozin/templates/views/views-view-grid.html.twig */
class __TwigTemplate_5fcaac1c8862a799f01b1428b5d398f600073c85390dd8b09b367e3e2b9d14c0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 30, "if" => 38, "for" => 73];
        $filters = ["escape" => 69];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 30
        $context["classes"] = [0 => "views-view-grid", 1 => $this->getAttribute(        // line 32
($context["gva_masonry"] ?? null), "class", []), 2 => $this->getAttribute(        // line 33
($context["options"] ?? null), "alignment", []), 3 => "clearfix"];
        // line 37
        echo "
  ";
        // line 38
        if (($this->getAttribute(($context["options"] ?? null), "columns", []) == "1")) {
            // line 39
            echo "    ";
            $context["xclass"] = [0 => "col-lg-12 col-md-12 col-sm-12 col-xs-12"];
            // line 40
            echo "  ";
        } elseif (($this->getAttribute(($context["options"] ?? null), "columns", []) == "2")) {
            // line 41
            echo "    ";
            $context["xclass"] = [0 => "col-lg-6 col-md-6 col-sm-12 col-xs-12"];
            // line 42
            echo "  ";
        } elseif (($this->getAttribute(($context["options"] ?? null), "columns", []) == "3")) {
            // line 43
            echo "    ";
            $context["xclass"] = [0 => "col-lg-4 col-md-4 col-sm-12 col-xs-12"];
            // line 44
            echo "  ";
        } elseif (($this->getAttribute(($context["options"] ?? null), "columns", []) == "4")) {
            // line 45
            echo "    ";
            $context["xclass"] = [0 => "col-lg-3 col-md-3 col-sm-12 col-xs-12"];
            // line 46
            echo "  ";
        } elseif (($this->getAttribute(($context["options"] ?? null), "columns", []) == "6")) {
            // line 47
            echo "    ";
            $context["xclass"] = [0 => "col-lg-2 col-md-2 col-sm-6 col-xs-12"];
            // line 48
            echo "  ";
        } else {
            // line 49
            echo "    ";
            $context["xclass"] = [0 => "col-lg-4 col-md-4 col-sm-12 col-xs-12"];
            // line 50
            echo "  ";
        }
        echo "  

";
        // line 52
        if ($this->getAttribute(($context["options"] ?? null), "row_class_default", [])) {
            // line 53
            echo "  ";
            // line 54
            $context["row_classes"] = [0 => "views-row row", 1 => ((($this->getAttribute(            // line 56
($context["options"] ?? null), "alignment", []) == "horizontal")) ? ("clearfix") : (""))];
        }
        // line 60
        if ($this->getAttribute(($context["options"] ?? null), "col_class_default", [])) {
            // line 61
            echo "  ";
            // line 62
            $context["col_classes"] = [0 => "views-col", 1 => ((($this->getAttribute(            // line 64
($context["options"] ?? null), "alignment", []) == "vertical")) ? ("clearfix") : (""))];
        }
        // line 68
        if (($context["title"] ?? null)) {
            // line 69
            echo "  <h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
";
        }
        // line 71
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 72
        if (($this->getAttribute(($context["options"] ?? null), "alignment", []) == "horizontal")) {
            // line 73
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 74
                echo "      
      ";
                // line 75
                if (($this->getAttribute(($context["gva_masonry"] ?? null), "class", []) == "")) {
                    // line 76
                    echo "        <div";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["row"], "attributes", []), "addClass", [0 => ($context["row_classes"] ?? null), 1 => (($this->getAttribute(($context["options"] ?? null), "row_class_default", [])) ? (("row-" . $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index", [])))) : (""))], "method")), "html", null, true);
                    echo ">
      ";
                }
                // line 77
                echo "  

        ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "content", []));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 80
                    echo "          <div";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["column"], "attributes", []), "addClass", [0 => ($context["col_classes"] ?? null), 1 => ($context["xclass"] ?? null), 2 => $this->getAttribute(($context["gva_masonry"] ?? null), "class_item", [])], "method")), "html", null, true);
                    echo ">
            ";
                    // line 81
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "content", [])), "html", null, true);
                    echo "
          </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "      
      ";
                // line 85
                if (($this->getAttribute(($context["gva_masonry"] ?? null), "class", []) == "")) {
                    // line 86
                    echo "        </div>
      ";
                }
                // line 87
                echo "  

    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "  ";
        } else {
            // line 91
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 92
                echo "      <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["column"], "attributes", []), "addClass", [0 => ($context["col_classes"] ?? null), 1 => (($this->getAttribute(($context["options"] ?? null), "col_class_default", [])) ? (("col-" . $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index", [])))) : ("")), 2 => ($context["xclass"] ?? null)], "method")), "html", null, true);
                echo ">
        ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 94
                    echo "          <div";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["row"], "attributes", []), "addClass", [0 => ($context["row_classes"] ?? null), 1 => (($this->getAttribute(($context["options"] ?? null), "row_class_default", [])) ? (("row-" . $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index", [])))) : (""))], "method")), "html", null, true);
                    echo ">
            ";
                    // line 95
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
                    echo "
          </div>
        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "      </div>
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "  ";
        }
        // line 101
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_lozin/templates/views/views-view-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 101,  290 => 100,  275 => 98,  258 => 95,  253 => 94,  236 => 93,  231 => 92,  213 => 91,  210 => 90,  194 => 87,  190 => 86,  188 => 85,  185 => 84,  176 => 81,  171 => 80,  167 => 79,  163 => 77,  157 => 76,  155 => 75,  152 => 74,  134 => 73,  132 => 72,  127 => 71,  121 => 69,  119 => 68,  116 => 64,  115 => 62,  113 => 61,  111 => 60,  108 => 56,  107 => 54,  105 => 53,  103 => 52,  97 => 50,  94 => 49,  91 => 48,  88 => 47,  85 => 46,  82 => 45,  79 => 44,  76 => 43,  73 => 42,  70 => 41,  67 => 40,  64 => 39,  62 => 38,  59 => 37,  57 => 33,  56 => 32,  55 => 30,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_lozin/templates/views/views-view-grid.html.twig", "/Users/bwaye3/Documents/sites/local.lozin.com/themes/gavias_lozin/templates/views/views-view-grid.html.twig");
    }
}
