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

/* themes/gavias_lozin/templates/listings/views/views-view-gvagrid--listing-map-block.html.twig */
class __TwigTemplate_21cd2ca28986f37bd42b8251872649d3809c8424cdb21bbd2635893cae36cf19 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "set" => 27, "for" => 28];
        $filters = ["escape" => 2, "t" => 19, "raw" => 30];
        $functions = ["gva_theme_setting" => 1, "attach_library" => 2];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 't', 'raw'],
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

";
        // line 6
        if (($context["attributes"] ?? null)) {
            // line 7
            echo "<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
            echo ">
";
        }
        // line 9
        echo "   
  ";
        // line 10
        if (($context["title"] ?? null)) {
            // line 11
            echo "    <h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
  ";
        }
        // line 13
        echo "  
  <div class=\"listings-map-page gva-listings-map-page\">
    <div class=\"map-layout-full clearfix\">
      <div class=\"main-listing-wrapper\">
      
        <div class=\"map-action clearfix\">
          <div class=\"control-search-link\"><a href=\"";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\gavias_hook_themer\TwigExtension')->themeSetting("listing_search_action"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Search Page"));
        echo "</a></div>
          <div class=\"control-map\">
            <div class=\"control-reset-map\"><a href=\"#\" class=\"gva-reset-map\"><i class=\"la la-map-marker\"></i>";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Reset Map");
        echo "</a></div>
            <div class=\"control-current-map\"><a href=\"#\" class=\"gva-current-map\"></a></div>
          </div>  
        </div>  

        <div class=\"d-none listing-items gva-view-grid-inner lg-block-grid-";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["class_grid"] ?? null), "items_lg", [])), "html", null, true);
        echo " md-block-grid-";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["class_grid"] ?? null), "items_md", [])), "html", null, true);
        echo " sm-block-grid-";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["class_grid"] ?? null), "items_sm", [])), "html", null, true);
        echo " xs-block-grid-";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["class_grid"] ?? null), "items_xs", [])), "html", null, true);
        echo "\" data-drupal-views-infinite-scroll-content-wrapper-gvaloadmorelistings>
          ";
        // line 27
        $context["i"] = 0;
        // line 28
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 29
            echo "              <div class=\"item-columns\">
                <div class=\"listing-item-wrapper\" data-marker=\"";
            // line 30
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["i"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])));
            echo "</div>
              </div>
          ";
            // line 32
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 33
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </div>
      </div>  
      <div class=\"main-map-wrapper\">
        <div id=\"listing-main-map\" class=\"listing-main-map\"></div>
      </div>
    </div>  
  </div>  
  
";
        // line 42
        if (($context["attributes"] ?? null)) {
            // line 43
            echo "</div>
";
        }
        // line 45
        echo "

<script type=\"text/javascript\">
  jQuery(document).ready(function(){
    map_init();
  });
</script>";
    }

    public function getTemplateName()
    {
        return "themes/gavias_lozin/templates/listings/views/views-view-gvagrid--listing-map-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 45,  161 => 43,  159 => 42,  149 => 34,  143 => 33,  141 => 32,  134 => 30,  131 => 29,  126 => 28,  124 => 27,  114 => 26,  106 => 21,  98 => 19,  90 => 13,  84 => 11,  82 => 10,  79 => 9,  73 => 7,  71 => 6,  66 => 4,  63 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_lozin/templates/listings/views/views-view-gvagrid--listing-map-block.html.twig", "/Users/bwaye3/Documents/sites/local.lozin.com/themes/gavias_lozin/templates/listings/views/views-view-gvagrid--listing-map-block.html.twig");
    }
}
