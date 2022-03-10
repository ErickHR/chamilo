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

/* overrides/layout/page_header.tpl */
class __TwigTemplate_6a1a3eda317df8d0408ad363820ef26bf1eef88ebed071c2398a55e715063ca0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'topbar' => [$this, 'block_topbar'],
            'menu' => [$this, 'block_menu'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"navigation\" class=\"notification-panel\">
    ";
        // line 2
        echo ($context["help_content"] ?? null);
        echo "
    ";
        // line 3
        echo ($context["bug_notification"] ?? null);
        echo "
</div>
";
        // line 5
        $this->displayBlock('topbar', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        if ( !(null === ($context["header_extra_content"] ?? null))) {
            // line 10
            echo "    ";
            echo ($context["header_extra_content"] ?? null);
            echo "
";
        }
        // line 12
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-12 header__col--fragote\">
        <!-- <div class=\"col-xs-12 col-md-3 header__col--fragote\"> -->
            ";
        // line 16
        if (($this->getAttribute(($context["_u"] ?? null), "logged", []) != 1)) {
            // line 17
            echo "                <div class=\"key-login\">
                    <a href=\"#login-block\" id=\"btn-login\" class=\"btn btn-default\">
                        <img src=\"";
            // line 19
            echo Display::get_icon_path("key.png", 22);
            echo "\" alt=\"key\"> ";
            echo get_lang("LoginAsThisUser");
            echo "
                    </a>
                </div>
            ";
        }
        // line 23
        echo "            <div class=\"logo\">
                ";
        // line 24
        echo ($context["logo"] ?? null);
        echo "
            </div>
        </div>
        <div class=\"col-xs-12 col-md-9\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    ";
        // line 30
        if ( !(null === ($context["plugin_header_left"] ?? null))) {
            // line 31
            echo "                        <div id=\"plugin_header_left\">
                            ";
            // line 32
            echo ($context["plugin_header_left"] ?? null);
            echo "
                        </div>
                    ";
        }
        // line 35
        echo "                </div>
                <div class=\"col-sm-3\">
                    ";
        // line 37
        if ( !(null === ($context["plugin_header_center"] ?? null))) {
            // line 38
            echo "                        <div id=\"plugin_header_center\">
                            ";
            // line 39
            echo ($context["plugin_header_center"] ?? null);
            echo "
                        </div>
                    ";
        }
        // line 42
        echo "                </div>
                <div class=\"col-sm-5\">
                    <ol class=\"header-ol\">
                        ";
        // line 45
        if ( !(null === ($context["plugin_header_right"] ?? null))) {
            // line 46
            echo "                            <li>
                                <div id=\"plugin_header_right\">
                                    ";
            // line 48
            echo ($context["plugin_header_right"] ?? null);
            echo "
                                </div>
                            </li>
                        ";
        }
        // line 52
        echo "                        <li>
                            <div class=\"section-notifications\">
                                ";
        // line 54
        if ((($this->getAttribute(($context["_u"] ?? null), "logged", []) == 1) &&  !($context["user_in_anon_survey"] ?? null))) {
            // line 55
            echo "                                    <ul id=\"notifications\" class=\"nav nav-pills pull-right\">
                                    </ul>
                                ";
        }
        // line 58
        echo "                            </div>
                        </li>
                        <li>
                            ";
        // line 61
        echo ($context["accessibility"] ?? null);
        echo "
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 70
        $this->displayBlock('menu', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->loadTemplate(api_find_template("layout/course_navigation.tpl"), "overrides/layout/page_header.tpl", 74)->display($context);
    }

    // line 5
    public function block_topbar($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        $this->loadTemplate(api_find_template("layout/topbar.tpl"), "overrides/layout/page_header.tpl", 6)->display($context);
    }

    // line 70
    public function block_menu($context, array $blocks = [])
    {
        // line 71
        $this->loadTemplate(api_find_template("layout/menu.tpl"), "overrides/layout/page_header.tpl", 71)->display($context);
    }

    public function getTemplateName()
    {
        return "overrides/layout/page_header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 71,  179 => 70,  174 => 6,  171 => 5,  167 => 74,  164 => 73,  162 => 70,  150 => 61,  145 => 58,  140 => 55,  138 => 54,  134 => 52,  127 => 48,  123 => 46,  121 => 45,  116 => 42,  110 => 39,  107 => 38,  105 => 37,  101 => 35,  95 => 32,  92 => 31,  90 => 30,  81 => 24,  78 => 23,  69 => 19,  65 => 17,  63 => 16,  57 => 12,  51 => 10,  49 => 9,  46 => 8,  44 => 5,  39 => 3,  35 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "overrides/layout/page_header.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\overrides\\layout\\page_header.tpl");
    }
}
