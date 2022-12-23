<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/druppio_small_business/templates/page--front.html.twig */
class __TwigTemplate_2af5b7972ce214730b7752476cc3f0f9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "
<div id=\"page\" class=\"";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_classes"] ?? null), 76, $this->source), "html", null, true);
        echo "\">

\t<header id=\"navigation\">
        ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 79)) {
            // line 80
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 82
        echo "
        ";
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 83)) {
            // line 84
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 86
        echo "\t</header>

\t";
        // line 88
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 88)) {
            // line 89
            echo "\t\t<section id=\"header\">
\t\t\t<div class=\"container\">";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
            echo "</div>
\t\t</section>
\t";
        }
        // line 93
        echo "
    ";
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "helper", [], "any", false, false, true, 94)) {
            // line 95
            echo "\t\t<section id=\"helper\" class=\"clearfix\">
\t\t\t<div class=\"container\">";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "helper", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            echo "</div>
\t\t</section>
\t";
        }
        // line 99
        echo "
\t";
        // line 100
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_first", [], "any", false, false, true, 100)) {
            // line 101
            echo "\t\t<section id=\"section_first\" class=\"page-section clearfix\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bg_images", [], "any", false, false, true, 101), "section_first", [], "any", false, false, true, 101)) {
                echo " style=\"background-image: url('";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bg_images", [], "any", false, false, true, 101), "section_first", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
                echo "')\" ";
            }
            echo ">
\t\t\t<div class=\"container\">
\t\t  \t";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_first", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<div class=\"section-first-separator\">
\t\t    <img src=\"";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 106, $this->source), "html", null, true);
            echo "/images/section-separators/section-first.svg\" id=\"section-first-separator-image\" class=\"svg\">
\t\t  </div>
\t\t</section>
\t";
        }
        // line 110
        echo "
\t";
        // line 111
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_second", [], "any", false, false, true, 111)) {
            // line 112
            echo "\t\t<section id=\"section_second\" class=\"page-section clearfix\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bg_images", [], "any", false, false, true, 112), "section_second", [], "any", false, false, true, 112)) {
                echo " style=\"background-image: url('";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bg_images", [], "any", false, false, true, 112), "section_second", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                echo "')\" ";
            }
            echo ">
\t\t\t<div class=\"container\">";
            // line 113
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_second", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "</div>
\t\t\t<div class=\"section-second-separator\">
\t\t    <img src=\"";
            // line 115
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 115, $this->source), "html", null, true);
            echo "/images/section-separators/section-second.svg\" id=\"section-second-separator-image\" class=\"svg\">
\t\t  </div>
\t\t</section>
\t";
        }
        // line 119
        echo "
\t";
        // line 120
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_third", [], "any", false, false, true, 120)) {
            // line 121
            echo "\t\t<section id=\"section_third\" class=\"page-section clearfix\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bg_images", [], "any", false, false, true, 121), "section_third", [], "any", false, false, true, 121)) {
                echo " style=\"background-image: url('";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bg_images", [], "any", false, false, true, 121), "section_third", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
                echo "')\" ";
            }
            echo ">
\t\t\t<div class=\"container\">";
            // line 122
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_third", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
            echo "</div>
\t\t\t<div class=\"section-third-separator\">
\t\t    <img src=\"";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 124, $this->source), "html", null, true);
            echo "/images/section-separators/section-third.svg\" id=\"section-third-separator-image\" class=\"svg\">
\t\t  </div>
\t\t</section>
\t";
        }
        // line 128
        echo "
\t";
        // line 129
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_fourth", [], "any", false, false, true, 129)) {
            // line 130
            echo "\t\t<section id=\"section_fourth\" class=\"page-section clearfix\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bg_images", [], "any", false, false, true, 130), "section_fourth", [], "any", false, false, true, 130)) {
                echo " style=\"background-image: url('";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bg_images", [], "any", false, false, true, 130), "section_fourth", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                echo "')\" ";
            }
            echo ">
\t\t\t<div class=\"container\">";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_fourth", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
            echo "</div>
\t\t\t<div class=\"section-fourth-separator\">
\t\t    <img src=\"";
            // line 133
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 133, $this->source), "html", null, true);
            echo "/images/section-separators/section-fourth.svg\" id=\"section-fourth-separator-image\" class=\"svg\">
\t\t  </div>
\t\t</section>
\t";
        }
        // line 137
        echo "\t
\t";
        // line 138
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_fifth", [], "any", false, false, true, 138)) {
            // line 139
            echo "\t\t<section id=\"section_fifth\" class=\"page-section clearfix\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bg_images", [], "any", false, false, true, 139), "section_fifth", [], "any", false, false, true, 139)) {
                echo " style=\"background-image: url('";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bg_images", [], "any", false, false, true, 139), "section_fifth", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
                echo "')\" ";
            }
            echo ">
\t\t\t<div class=\"container\">";
            // line 140
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_fifth", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
            echo "</div>
\t\t</section>
\t";
        }
        // line 143
        echo "
\t";
        // line 144
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 144) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 144)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 144))) {
            // line 145
            echo "\t\t<footer id=\"footer\" class=\"clearfix\">
\t\t\t<div role=\"contentinfo\" class=\"";
            // line 146
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["region_classes"] ?? null), "footer", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
            echo " container\">
\t\t\t\t";
            // line 147
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 147)) {
                // line 148
                echo "\t\t\t\t\t";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 150
            echo "
\t\t\t\t";
            // line 151
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 151)) {
                // line 152
                echo "\t\t\t\t\t";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 154
            echo "\t\t\t</div>
\t\t</footer>
\t";
        }
        // line 157
        echo "
</div>
<div class=\"js-menu-screen sliding-panel-fade-screen\"></div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/druppio_small_business/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 157,  253 => 154,  247 => 152,  245 => 151,  242 => 150,  236 => 148,  234 => 147,  230 => 146,  227 => 145,  225 => 144,  222 => 143,  216 => 140,  207 => 139,  205 => 138,  202 => 137,  195 => 133,  190 => 131,  181 => 130,  179 => 129,  176 => 128,  169 => 124,  164 => 122,  155 => 121,  153 => 120,  150 => 119,  143 => 115,  138 => 113,  129 => 112,  127 => 111,  124 => 110,  117 => 106,  111 => 103,  101 => 101,  99 => 100,  96 => 99,  90 => 96,  87 => 95,  85 => 94,  82 => 93,  76 => 90,  73 => 89,  71 => 88,  67 => 86,  61 => 84,  59 => 83,  56 => 82,  50 => 80,  48 => 79,  42 => 76,  39 => 75,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/druppio_small_business/templates/page--front.html.twig", "C:\\xampp\\htdocs\\drupal\\portfolionew\\themes\\contrib\\druppio_small_business\\templates\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 79);
        static $filters = array("escape" => 76);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
