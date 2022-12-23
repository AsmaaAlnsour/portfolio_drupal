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

/* themes/contrib/druppio_small_business/templates/html.html.twig */
class __TwigTemplate_e37cb72dc02abc7fe5d528213d08c1d0 extends \Twig\Template
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
        // line 32
        $context["body_classes"] = [0 => ((        // line 33
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 34
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 34, $this->source))))), 2 => ((        // line 35
($context["node_type"] ?? null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 35, $this->source)))) : ("")), 3 => ((        // line 36
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 4 => ((        // line 37
($context["path_alias"] ?? null)) ? (($context["path_alias"] ?? null)) : ("")), 5 => ((        // line 38
($context["current_path"] ?? null)) ? (("context" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["current_path"] ?? null), 38, $this->source)))) : ("")), 6 => (((twig_get_attribute($this->env, $this->source,         // line 39
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 39) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 39))) ? ("with-sidebar-both") : ("")), 7 => (((twig_get_attribute($this->env, $this->source,         // line 40
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 40) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 40))) ? ("with-sidebar-first") : ("")), 8 => ((( !twig_get_attribute($this->env, $this->source,         // line 41
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 41) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 41))) ? ("with-sidebar-second") : ("")), 9 => ((        // line 42
($context["demo_enabled"] ?? null)) ? ("with-demo-regions") : ("without-demo-regions")), 10 => ((        // line 43
($context["language"] ?? null)) ? (("lang-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 43, $this->source)))) : (""))];
        // line 46
        echo "<!DOCTYPE html>
<html";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 47, $this->source), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 49, $this->source));
        echo "\">
    <title>";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 50, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 51, $this->source));
        echo "\">
    <js-placeholder token=\"";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 52, $this->source));
        echo "\">
  </head>

  <body";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 55), 55, $this->source), "html", null, true);
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 59, $this->source), "html", null, true);
        echo "
    ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 60, $this->source), "html", null, true);
        echo "
    ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 61, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 62, $this->source));
        echo "\">
    ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cached_js"] ?? null), 63, $this->source), "html", null, true);
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/druppio_small_business/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 63,  100 => 62,  96 => 61,  92 => 60,  88 => 59,  83 => 57,  78 => 55,  72 => 52,  68 => 51,  64 => 50,  60 => 49,  55 => 47,  52 => 46,  50 => 43,  49 => 42,  48 => 41,  47 => 40,  46 => 39,  45 => 38,  44 => 37,  43 => 36,  42 => 35,  41 => 34,  40 => 33,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/druppio_small_business/templates/html.html.twig", "C:\\xampp\\htdocs\\drupal\\portfolionew\\themes\\contrib\\druppio_small_business\\templates\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 32);
        static $filters = array("clean_class" => 34, "escape" => 47, "raw" => 49, "safe_join" => 50, "t" => 57);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
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
