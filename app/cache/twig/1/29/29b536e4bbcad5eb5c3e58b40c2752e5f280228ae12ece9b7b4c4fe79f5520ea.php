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

/* overrides/layout/header_responsive.tpl */
class __TwigTemplate_c9c13bd99cfc2ab1e6f0c94302966b158acf7d895929e87648616bb8a6af92a6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"header--responsive\">
    <div class=\"header__wrapper\">
        <div class=\"header__logo\">
            ";
        // line 4
        echo ($context["logo"] ?? null);
        echo "
        </div>
        <div class=\"header__option\">
            <ul class=\"nav navbar-nav header__list\">
                
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "                    ";
            $context["show_item"] = true;
            // line 11
            echo "                    ";
            if ((($context["user_in_anon_survey"] ?? null) && ($this->getAttribute($context["item"], "key", []) != "homepage"))) {
                // line 12
                echo "                        ";
                $context["show_item"] = false;
                // line 13
                echo "                    ";
            }
            // line 14
            echo "
                    ";
            // line 15
            if (($context["show_item"] ?? null)) {
                // line 16
                echo "                        <li class=\"";
                echo $this->getAttribute($context["item"], "key", []);
                echo " ";
                echo $this->getAttribute($context["item"], "current", []);
                echo "\">
                            ";
                // line 17
                echo ($context["login_language_form"] ?? null);
                echo "
                        </li>
                        <li class=\"header__item--burger\">
                            <div class=\"burger\"></div>
                        </li>
                    ";
            }
            // line 23
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </ul>
        </div>
    </div>
    ";
        // line 27
        $this->loadTemplate(api_find_template("layout/header_nav_responsive.tpl"), "overrides/layout/header_responsive.tpl", 27)->display($context);
        // line 28
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "overrides/layout/header_responsive.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 28,  91 => 27,  86 => 24,  80 => 23,  71 => 17,  64 => 16,  62 => 15,  59 => 14,  56 => 13,  53 => 12,  50 => 11,  47 => 10,  43 => 9,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "overrides/layout/header_responsive.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\overrides\\layout\\header_responsive.tpl");
    }
}
