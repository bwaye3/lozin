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

/* themes/gavias_lozin/templates/listings/page/page--view--listing-full-one.html.twig */
class __TwigTemplate_c80076ddee63975225c2f877821c67d38e1b4fd2d69edaf3b99fa5e79c2c9be0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "include" => 8, "set" => 11];
        $filters = ["escape" => 2];
        $functions = ["gva_theme_setting" => 1, "attach_library" => 2];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include', 'set'],
                ['escape'],
                ['gva_theme_setting', 'attach_library']
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
        // line 1
        if ((($this->env->getExtension('Drupal\gavias_hook_themer\TwigExtension')->themeSetting("map_source") == "google") || ($this->env->getExtension('Drupal\gavias_hook_themer\TwigExtension')->themeSetting("map_source") == ""))) {
            // line 2
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("gavias_lozin/listing_init.gmap"), "html", null, true);
            echo "
";
        }
        // line 3
        echo " 
";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("gavias_lozin/listing_init"), "html", null, true);
        echo "

<div class=\"gva-body-wrapper gva-listings-full-page listings-full-1 clearfix\">
\t<div class=\"body-page gva-body-page\">
\t   ";
        // line 8
        $this->loadTemplate(($context["header_skin"] ?? null), "themes/gavias_lozin/templates/listings/page/page--view--listing-full-one.html.twig", 8)->display($context);
        // line 9
        echo "\t\t
\t\t";
        // line 10
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])) {
            // line 11
            echo "\t   \t";
            $context["has_breadcrumb"] = " has-breadcrumb";
            // line 12
            echo "\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 16
        echo "
\t\t<div role=\"main\" class=\"main main-page\">

\t\t\t";
        // line 19
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 20
            echo "\t\t\t\t<div class=\"help gav-help-region\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"content-inner col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 \">
\t\t\t\t\t\t\t\t";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 30
        echo "\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t
\t\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
        // line 35
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 36
            echo "\t\t\t\t\t\t<div class=\"content-main\">
\t\t\t\t\t\t\t";
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
\t";
        // line 45
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/footer.html.twig"), "themes/gavias_lozin/templates/listings/page/page--view--listing-full-one.html.twig", 45)->display($context);
        // line 46
        echo "</div>
<script>
jQuery(document).ready(function(){
\tjQuery('.views-exposed-form .js-form-type-checkbox').each(function(){
    \tjQuery(this).addClass('pretty p-default p-round');
    \tjQuery(this).find('label').wrap( '<div class=\"state p-success-o\"></div>' );
  });
})
</script>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_lozin/templates/listings/page/page--view--listing-full-one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 46,  139 => 45,  132 => 40,  126 => 37,  123 => 36,  121 => 35,  114 => 30,  105 => 24,  99 => 20,  97 => 19,  92 => 16,  86 => 13,  83 => 12,  80 => 11,  78 => 10,  75 => 9,  73 => 8,  66 => 4,  63 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_lozin/templates/listings/page/page--view--listing-full-one.html.twig", "/Users/bwaye3/Documents/sites/local.lozin.com/themes/gavias_lozin/templates/listings/page/page--view--listing-full-one.html.twig");
    }
}
