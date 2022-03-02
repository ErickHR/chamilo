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

/* overrides/layout/layout_2_col.tpl */
class __TwigTemplate_5cb632bd7ec95c851cc0c20441480ffa73ccf83dfba8412e7873bfac8d704ce5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'page_body' => [$this, 'block_page_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(api_find_template("layout/page.tpl"), "overrides/layout/layout_2_col.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["display"] = $this->loadTemplate("default/macro/macro.tpl", "overrides/layout/layout_2_col.tpl", 2)->unwrap();
        // line 3
        $context["sidebar_hide"] = api_get_configuration_value("sidebar_hide");
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        if (($context["plugin_main_top"] ?? null)) {
            // line 7
            echo "        ";
            echo $context["display"]->getpluginPanel("main-top", ($context["plugin_main_top"] ?? null));
            echo "
    ";
        }
        // line 9
        echo "    <div class=\"row\">
        <div class=\"col-md-9 col-md-push-3 w-100 bg-success pb-4\">
            <div class=\"layout-2-col__container\">
                <div class=\"layout-2-col__text\">
                    Hola Fragote
                </div>
            </div>
            <div class=\"page-content\">
                ";
        // line 17
        if (($context["plugin_content_top"] ?? null)) {
            // line 18
            echo "                    <div class=\"page-content-top\">
                        ";
            // line 19
            echo ($context["plugin_content_top"] ?? null);
            echo "
                    </div>
                ";
        }
        // line 22
        echo "
                ";
        // line 23
        echo ($context["sniff_notification"] ?? null);
        echo "

                ";
        // line 25
        $this->displayBlock('page_body', $context, $blocks);
        // line 28
        echo "
                ";
        // line 29
        if (($context["home_welcome"] ?? null)) {
            // line 30
            echo "                    <article id=\"home-welcome\">
                        ";
            // line 31
            echo ($context["home_welcome"] ?? null);
            echo "
                    </article>
                ";
        }
        // line 34
        echo "
                ";
        // line 35
        if (($context["home_include"] ?? null)) {
            // line 36
            echo "                <article id=\"home-include\">
                    ";
            // line 37
            echo ($context["home_include"] ?? null);
            echo "
                </article>
                ";
        }
        // line 40
        echo "

                ";
        // line 42
        if (($context["welcome_to_course_block"] ?? null)) {
            // line 43
            echo "                    <article id=\"homepage-course\">
                        ";
            // line 44
            echo ($context["welcome_to_course_block"] ?? null);
            echo "
                    </article>
                ";
        }
        // line 47
        echo "
                ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "
                ";
        // line 56
        if (($context["announcements_block"] ?? null)) {
            // line 57
            echo "                    <article id=\"homepage-announcements\">
                        ";
            // line 58
            echo ($context["announcements_block"] ?? null);
            echo "
                    </article>
                ";
        }
        // line 61
        echo "
                ";
        // line 62
        if (($context["course_category_block"] ?? null)) {
            // line 63
            echo "                    <article id=\"homepage-course-category\">
                        ";
            // line 64
            echo ($context["course_category_block"] ?? null);
            echo "
                    </article>
                ";
        }
        // line 67
        echo "                ";
        $this->loadTemplate(api_find_template("layout/hot_courses.tpl"), "overrides/layout/layout_2_col.tpl", 67)->display($context);
        // line 68
        echo "                ";
        $this->loadTemplate(api_find_template("session/sessions_current.tpl"), "overrides/layout/layout_2_col.tpl", 68)->display($context);
        // line 69
        echo "                ";
        if (($context["plugin_content_bottom"] ?? null)) {
            // line 70
            echo "                    <div id=\"plugin_content_bottom\">
                        ";
            // line 71
            echo ($context["plugin_content_bottom"] ?? null);
            echo "
                    </div>
                ";
        }
        // line 74
        echo "            </div>
        </div>
        <div class=\"col-md-3 col-md-pull-9\">
            <div class=\"sidebar\">
                ";
        // line 78
        if (($context["plugin_menu_top"] ?? null)) {
            // line 79
            echo "                    ";
            echo $context["display"]->getpluginSidebar("sidebar-top", ($context["plugin_menu_top"] ?? null));
            echo "
                ";
        }
        // line 81
        echo "
                ";
        // line 82
        $this->loadTemplate(api_find_template("layout/login_form.tpl"), "overrides/layout/layout_2_col.tpl", 82)->display($context);
        // line 83
        echo "
                ";
        // line 84
        if ( !($context["sidebar_hide"] ?? null)) {
            // line 85
            echo "
                    ";
            // line 86
            if (($this->getAttribute(($context["_u"] ?? null), "logged", []) == 1)) {
                // line 87
                echo "                        ";
                echo ($context["user_image_block"] ?? null);
                echo "
                    ";
            }
            // line 89
            echo "
                    <!-- BLOCK PROFILE -->
                    ";
            // line 91
            if (($context["profile_block"] ?? null)) {
                // line 92
                echo "                        ";
                echo $context["display"]->getcollapseMenu("profile", get_lang("Profile"), ($context["profile_block"] ?? null));
                echo "
                    ";
            }
            // line 94
            echo "
                    <!-- BLOCK COURSE -->
                    ";
            // line 96
            if (($context["course_block"] ?? null)) {
                // line 97
                echo "                        ";
                echo $context["display"]->getcollapseMenu("courses", get_lang("Courses"), ($context["course_block"] ?? null));
                echo "
                    ";
            }
            // line 99
            echo "
                    <!-- BLOCK SKILLS -->
                    ";
            // line 101
            if (($context["skills_block"] ?? null)) {
                // line 102
                echo "                        ";
                echo $context["display"]->getcollapseMenu("skills", get_lang("Skills"), ($context["skills_block"] ?? null));
                echo "
                    ";
            }
            // line 104
            echo "
                    <!-- BLOCK WORK -->
                    ";
            // line 106
            if (($context["student_publication_block"] ?? null)) {
                // line 107
                echo "                        ";
                echo $context["display"]->getcollapseMenu("student_publications", get_lang("StudentPublications"), ($context["student_publication_block"] ?? null));
                echo "
                    ";
            }
            // line 109
            echo "
                    ";
            // line 110
            if (($context["grade_book_sidebar"] ?? null)) {
                // line 111
                echo "                        <div class=\"panel-group\" id=\"skill\" role=\"tablist\" aria-multiselectable=\"true\">
                        <div class=\"panel panel-default\" id=\"gradebook_block\">
                            <div class=\"panel-heading\" role=\"tab\">
                                <h4 class=\"panel-title\">
                                    <a role=\"button\" data-toggle=\"collapse\"
                                       data-parent=\"#skill\"
                                       href=\"#skillCollapse\"
                                       aria-expanded=\"true\"
                                       aria-controls=\"skillCollapse\">
                                        ";
                // line 120
                echo get_lang("Gradebook");
                echo "
                                    </a>
                                </h4>
                            </div>
                            <div style=\"\" aria-expanded=\"true\" id=\"skillCollapse\" class=\"panel-collapse collapse in\" role=\"tabpanel\">
                                <div class=\"panel-body\">
                                    <ul class=\"list-group\">
                                        <li class=\"list-group-item ";
                // line 127
                echo $this->getAttribute(($context["item"] ?? null), "class", []);
                echo "\">
                                            ";
                // line 128
                echo get_lang("Progress");
                echo " : ";
                echo ($context["grade_book_progress"] ?? null);
                echo " %
                                            <br />
                                            ";
                // line 130
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["grade_book_badge_list"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                    // line 131
                    echo "                                                <div class=\"badge_sidebar\">
                                                ";
                    // line 132
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["badge"], "skills", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                        // line 133
                        echo "                                                    ";
                        if ($this->getAttribute($context["badge"], "finished", [])) {
                            // line 134
                            echo "                                                        <img class=\"badge_sidebar_image \" src =\"";
                            echo $this->getAttribute($context["skill"], "icon_big", []);
                            echo "\" />
                                                    ";
                        } else {
                            // line 136
                            echo "                                                        <img class=\"badge_sidebar_image badge_sidebar_image_transparency\"
                                                             src = \"";
                            // line 137
                            echo $this->getAttribute($context["skill"], "icon_big", []);
                            echo "\" />
                                                    ";
                        }
                        // line 139
                        echo "                                                    <div class=\"badge_sidebar_title\">
                                                    ";
                        // line 140
                        echo $this->getAttribute($context["skill"], "name", []);
                        echo "
                                                    </div>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 143
                    echo "                                                </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                echo "                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
            }
            // line 152
            echo "                    ";
            echo ($context["certificates_search_block"] ?? null);
            echo "
                    <!-- BLOCK NOTICE -->
                    ";
            // line 154
            if (($context["notice_block"] ?? null)) {
                // line 155
                echo "                        ";
                echo $context["display"]->getcollapse("notice", get_lang("Notice"), ($context["notice_block"] ?? null));
                echo "
                    ";
            }
            // line 157
            echo "                    <!-- BLOCK HELP -->
                    ";
            // line 158
            if (($context["help_block"] ?? null)) {
                // line 159
                echo "                        ";
                echo $context["display"]->getcollapse("help", get_lang("MenuGeneral"), ($context["help_block"] ?? null), true);
                echo "
                    ";
            }
            // line 161
            echo "                    <!-- BLOCK LINKS NAVIGATION -->
                    ";
            // line 162
            if (($context["navigation_links"] ?? null)) {
                // line 163
                echo "                        ";
                echo $context["display"]->getcollapseFor("navigation_sidebar", get_lang("MainNavigation"), ($context["navigation_links"] ?? null));
                echo "
                    ";
            }
            // line 165
            echo "                    ";
            echo ($context["search_block"] ?? null);
            echo "
                    ";
            // line 166
            echo ($context["classes_block"] ?? null);
            echo "

                    ";
            // line 168
            if (($context["plugin_menu_bottom"] ?? null)) {
                // line 169
                echo "                        ";
                echo $context["display"]->getpluginSidebar("sidebar-bottom", ($context["plugin_menu_bottom"] ?? null));
                echo "
                    ";
            }
            // line 171
            echo "                ";
        }
        // line 172
        echo "            </div>
        </div>
    </div>
    ";
        // line 175
        if (($context["plugin_main_bottom"] ?? null)) {
            // line 176
            echo "        ";
            echo $context["display"]->getpluginPanel("main-bottom", ($context["plugin_main_bottom"] ?? null));
            echo "
    ";
        }
    }

    // line 25
    public function block_page_body($context, array $blocks = [])
    {
        // line 26
        echo "                    ";
        $this->loadTemplate(api_find_template("layout/page_body.tpl"), "overrides/layout/layout_2_col.tpl", 26)->display($context);
        // line 27
        echo "                ";
    }

    // line 48
    public function block_content($context, array $blocks = [])
    {
        // line 49
        echo "                    ";
        if ( !(null === ($context["content"] ?? null))) {
            // line 50
            echo "                        <section id=\"page\" class=\"";
            echo ($context["course_history_page"] ?? null);
            echo "\">
                            ";
            // line 51
            echo ($context["content"] ?? null);
            echo "
                        </section>
                    ";
        }
        // line 54
        echo "                ";
    }

    public function getTemplateName()
    {
        return "overrides/layout/layout_2_col.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 54,  451 => 51,  446 => 50,  443 => 49,  440 => 48,  436 => 27,  433 => 26,  430 => 25,  422 => 176,  420 => 175,  415 => 172,  412 => 171,  406 => 169,  404 => 168,  399 => 166,  394 => 165,  388 => 163,  386 => 162,  383 => 161,  377 => 159,  375 => 158,  372 => 157,  366 => 155,  364 => 154,  358 => 152,  349 => 145,  342 => 143,  333 => 140,  330 => 139,  325 => 137,  322 => 136,  316 => 134,  313 => 133,  309 => 132,  306 => 131,  302 => 130,  295 => 128,  291 => 127,  281 => 120,  270 => 111,  268 => 110,  265 => 109,  259 => 107,  257 => 106,  253 => 104,  247 => 102,  245 => 101,  241 => 99,  235 => 97,  233 => 96,  229 => 94,  223 => 92,  221 => 91,  217 => 89,  211 => 87,  209 => 86,  206 => 85,  204 => 84,  201 => 83,  199 => 82,  196 => 81,  190 => 79,  188 => 78,  182 => 74,  176 => 71,  173 => 70,  170 => 69,  167 => 68,  164 => 67,  158 => 64,  155 => 63,  153 => 62,  150 => 61,  144 => 58,  141 => 57,  139 => 56,  136 => 55,  134 => 48,  131 => 47,  125 => 44,  122 => 43,  120 => 42,  116 => 40,  110 => 37,  107 => 36,  105 => 35,  102 => 34,  96 => 31,  93 => 30,  91 => 29,  88 => 28,  86 => 25,  81 => 23,  78 => 22,  72 => 19,  69 => 18,  67 => 17,  57 => 9,  51 => 7,  48 => 6,  45 => 5,  41 => 1,  39 => 3,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "overrides/layout/layout_2_col.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\overrides\\layout\\layout_2_col.tpl");
    }
}
