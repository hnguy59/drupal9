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

/* core/themes/claro/templates/page.html.twig */
class __TwigTemplate_43e03f0ceb85cd87995252558a8d5f46523b13ed77b51972dfcac546e84de857 extends \Twig\Template
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
        // line 42
        echo "<header class=\"content-header clearfix\">
\t<div class=\"layout-container\">
\t\t";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "
\t\t";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "
\t\tYEEEEEEEEEEEEET
\t</div>
</header>

<div class=\"layout-container\">
\t";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_content", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "
\t<main class=\"page-content clearfix\" role=\"main\">
\t\t<div class=\"visually-hidden\">
\t\t\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t</div>
\t\t";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
\t\t";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 57)) {
            // line 58
            echo "\t\t\t<div class=\"help\">
\t\t\t\t";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 62
        echo "\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "
\t</main>

</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 62,  73 => 59,  70 => 58,  68 => 57,  64 => 56,  56 => 51,  47 => 45,  43 => 44,  39 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/page.html.twig", "D:\\software\\wamp64\\www\\drupal9\\core\\themes\\claro\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 57);
        static $filters = array("escape" => 44);
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
