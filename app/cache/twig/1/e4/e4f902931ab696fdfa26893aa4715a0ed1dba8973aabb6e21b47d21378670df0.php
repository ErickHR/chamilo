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

/* overrides/layout/login_form.tpl */
class __TwigTemplate_2ddf048752cdc589e64cbf5d23fbb3396932be409d44e2fa99c0d6a905e95ce1 extends \Twig\Template
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
        echo "
";
        // line 2
        if (($this->getAttribute(($context["_u"] ?? null), "logged", []) == 0)) {
            // line 3
            echo "    ";
            if (($context["login_form"] ?? null)) {
                // line 4
                echo "        <div id=\"login-block\" class=\"panel panel-default\">
            <div class=\"panel-body bg-danger\">
            ";
                // line 6
                echo ($context["login_language_form"] ?? null);
                echo "
            ";
                // line 7
                if ( !(null === ($context["plugin_login_top"] ?? null))) {
                    // line 8
                    echo "                <div id=\"plugin_login_top\">
                    ";
                    // line 9
                    echo ($context["plugin_login_top"] ?? null);
                    echo "
                </div>
            ";
                }
                // line 12
                echo "            
            ";
                // line 13
                echo ($context["login_failed"] ?? null);
                echo "
            ";
                // line 14
                echo ($context["login_form"] ?? null);
                echo "

            ";
                // line 16
                if (((api_get_setting("allow_lostpassword") == "true") || (api_get_setting("allow_registration") == "true"))) {
                    // line 17
                    echo "                <ul class=\"nav nav-pills nav-stacked\">
                    ";
                    // line 18
                    if ((api_get_setting("allow_registration") != "false")) {
                        // line 19
                        echo "                        <li><a href=\"";
                        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
                        echo "auth/inscription.php\"> ";
                        echo get_lang("SignUp");
                        echo " </a></li>
                    ";
                    }
                    // line 21
                    echo "
                    ";
                    // line 22
                    if ((api_get_setting("allow_lostpassword") == "true")) {
                        // line 23
                        echo "                        ";
                        $context["pass_reminder_link"] = api_get_configuration_value("pass_reminder_custom_link");
                        // line 24
                        echo "                        ";
                        $context["lost_password_link"] = ($this->getAttribute(($context["_p"] ?? null), "web_main", []) . "auth/lostPassword.php");
                        // line 25
                        echo "
                        ";
                        // line 26
                        if ( !twig_test_empty(($context["pass_reminder_link"] ?? null))) {
                            // line 27
                            echo "                            ";
                            $context["lost_password_link"] = ($context["pass_reminder_link"] ?? null);
                            // line 28
                            echo "                        ";
                        }
                        // line 29
                        echo "
                        <li><a href=\"";
                        // line 30
                        echo ($context["lost_password_link"] ?? null);
                        echo "\"> ";
                        echo get_lang("LostPassword");
                        echo " </a></li>
                    ";
                    }
                    // line 32
                    echo "                </ul>
            ";
                }
                // line 34
                echo "
            ";
                // line 35
                if ( !(null === ($context["plugin_login_bottom"] ?? null))) {
                    // line 36
                    echo "                <div id=\"plugin_login_bottom\">
                    ";
                    // line 37
                    echo ($context["plugin_login_bottom"] ?? null);
                    echo "
                </div>
            ";
                }
                // line 40
                echo "            </div>
        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "overrides/layout/login_form.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 40,  128 => 37,  125 => 36,  123 => 35,  120 => 34,  116 => 32,  109 => 30,  106 => 29,  103 => 28,  100 => 27,  98 => 26,  95 => 25,  92 => 24,  89 => 23,  87 => 22,  84 => 21,  76 => 19,  74 => 18,  71 => 17,  69 => 16,  64 => 14,  60 => 13,  57 => 12,  51 => 9,  48 => 8,  46 => 7,  42 => 6,  38 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "overrides/layout/login_form.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\overrides\\layout\\login_form.tpl");
    }
}
