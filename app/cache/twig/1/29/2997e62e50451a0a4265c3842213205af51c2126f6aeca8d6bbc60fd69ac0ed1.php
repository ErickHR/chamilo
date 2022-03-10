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

/* overrides/layout/header_nav_responsive.tpl */
class __TwigTemplate_7a3d14ab011aa84700b9da50e2d3a1325f69dde211031d4820075e3b54f5cb33 extends \Twig\Template
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
        echo "<div class=\"header-nav\">
    <div class=\"header-nav__head\">
        <div class=\"header-nav__wrapper-close\">
            <div class=\"header-nav__button-close\"></div>
        </div>
    </div>
    <div class=\"header-nav__body\">
        <ul class=\"nav navbar-nav\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "                ";
            $context["show_item"] = true;
            // line 11
            echo "                ";
            if ((($context["user_in_anon_survey"] ?? null) && ($this->getAttribute($context["item"], "key", []) != "homepage"))) {
                // line 12
                echo "                    ";
                $context["show_item"] = false;
                // line 13
                echo "                ";
            }
            // line 14
            echo "
                ";
            // line 15
            if (($context["show_item"] ?? null)) {
                // line 16
                echo "                    <li class=\"";
                echo $this->getAttribute($context["item"], "key", []);
                echo " ";
                echo $this->getAttribute($context["item"], "current", []);
                echo "\">
                        <a class=\"navbar__link--fragote\" href=\"";
                // line 17
                echo $this->getAttribute($context["item"], "url", []);
                echo "\" ";
                echo (($this->getAttribute($context["item"], "target", [])) ? ((("target=\"" . $this->getAttribute($context["item"], "target", [])) . "\"")) : (""));
                echo " title=\"";
                echo $this->getAttribute($context["item"], "title", []);
                echo "\">
                            ";
                // line 18
                echo $this->getAttribute($context["item"], "title", []);
                echo "
                        </a>
                    </li>
                ";
            }
            // line 22
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "overrides/layout/header_nav_responsive.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 23,  83 => 22,  76 => 18,  68 => 17,  61 => 16,  59 => 15,  56 => 14,  53 => 13,  50 => 12,  47 => 11,  44 => 10,  40 => 9,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "overrides/layout/header_nav_responsive.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\overrides\\layout\\header_nav_responsive.tpl");
    }
}
