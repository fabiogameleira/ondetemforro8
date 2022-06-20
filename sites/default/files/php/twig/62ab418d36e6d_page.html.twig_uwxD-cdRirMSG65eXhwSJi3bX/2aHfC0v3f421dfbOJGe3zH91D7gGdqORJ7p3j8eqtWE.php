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

/* themes/ondetem/templates/page.html.twig */
class __TwigTemplate_3f17dd46b0bd20ad240a50ed9084f91a29ff8ab1e334971e0b7559df2517ad36 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'top' => [$this, 'block_top'],
            'navbar' => [$this, 'block_navbar'],
            'logotipo' => [$this, 'block_logotipo'],
            'navigation' => [$this, 'block_navigation'],
            'social' => [$this, 'block_social'],
            'objetivo' => [$this, 'block_objetivo'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'above_content' => [$this, 'block_above_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 55, "if" => 59, "block" => 60];
        $filters = ["escape" => 57, "clean_class" => 73];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'clean_class'],
                []
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
        // line 54
        echo "\t
";
        // line 55
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 56
        echo "
<div id=\"top\" class=\"";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo ">
\t";
        // line 59
        echo "\t";
        if ($this->getAttribute(($context["page"] ?? null), "top", [])) {
            // line 60
            echo "\t  ";
            $this->displayBlock('top', $context, $blocks);
            // line 63
            echo "\t";
        }
        // line 64
        echo "</div>

";
        // line 67
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 68
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 110
        echo "
";
        // line 112
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "objetivo", [])) {
            // line 113
            echo "\t";
            $this->displayBlock('objetivo', $context, $blocks);
        }
        // line 117
        echo "


";
        // line 121
        $this->displayBlock('main', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 197
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 60
    public function block_top($context, array $blocks = [])
    {
        // line 61
        echo "\t\t";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top", [])), "html", null, true);
        echo "
\t  ";
    }

    // line 68
    public function block_navbar($context, array $blocks = [])
    {
        // line 69
        echo "    ";
        // line 70
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 72
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 73
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : (($context["container"] ?? null)))];
        // line 76
        echo "    <header";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method")), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      
\t\t  ";
        // line 78
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 79
            echo "\t\t\t<div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
\t\t  ";
        }
        // line 81
        echo "\t\t  
\t\t  <div class=\"navbar-header col-xs-6 col-sm-2 col-md-2 col-lg-2 ondetem\">
\t\t\t";
        // line 84
        echo "\t\t\t\t";
        $this->displayBlock('logotipo', $context, $blocks);
        // line 86
        echo " 
\t\t  </div>

\t\t  <div class=\"navbar-menu col-sm-8 col-md-8 col-lg-8\">
\t\t\t";
        // line 90
        echo "   
\t\t\t\t";
        // line 91
        $this->displayBlock('navigation', $context, $blocks);
        // line 93
        echo " 
\t\t  </div>

\t\t  <div class=\"navbar-right col-xs-6 col-sm-2 col-md-2 col-lg-2\">
\t\t\t";
        // line 97
        echo "   
\t\t\t\t";
        // line 98
        $this->displayBlock('social', $context, $blocks);
        // line 100
        echo " 
\t\t  </div>

\t\t  ";
        // line 103
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 104
            echo "\t\t\t</div>
\t\t  ";
        }
        // line 106
        echo "    </header>
\t
  ";
    }

    // line 84
    public function block_logotipo($context, array $blocks = [])
    {
        echo "\t\t
\t\t\t\t\t";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "logotipo", [])), "html", null, true);
        echo "
\t\t\t\t";
    }

    // line 91
    public function block_navigation($context, array $blocks = [])
    {
        echo "\t\t
\t\t\t\t\t";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
\t\t\t\t";
    }

    // line 98
    public function block_social($context, array $blocks = [])
    {
        echo "\t\t
\t\t\t\t\t";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "social", [])), "html", null, true);
        echo "
\t\t\t\t";
    }

    // line 113
    public function block_objetivo($context, array $blocks = [])
    {
        // line 114
        echo "\t  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "objetivo", [])), "html", null, true);
        echo "
\t";
    }

    // line 121
    public function block_main($context, array $blocks = [])
    {
        // line 122
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
   
\t<div class=\"row\">

      ";
        // line 127
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 128
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 133
            echo "      ";
        }
        // line 134
        echo "
      ";
        // line 136
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 137
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 142
            echo "      ";
        }
        // line 143
        echo "
      ";
        // line 145
        echo "      ";
        // line 146
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 147
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6 col-md-6  col-lg-6") : ("")), 1 => ((($this->getAttribute(        // line 148
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9 col-md-9 col-lg-9") : ("")), 2 => ((($this->getAttribute(        // line 149
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9 col-md-9 col-lg-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 150
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 153
        echo "      <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 156
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 157
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 160
            echo "        ";
        }
        // line 161
        echo "
        ";
        // line 163
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 164
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 167
            echo "        ";
        }
        // line 168
        echo "
        ";
        // line 170
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 174
        echo "\t\t
\t\t";
        // line 176
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "above_content", [])) {
            // line 177
            echo "          ";
            $this->displayBlock('above_content', $context, $blocks);
            // line 180
            echo "        ";
        }
        // line 181
        echo "\t\t
      </section>

      ";
        // line 185
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 186
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 191
            echo "      ";
        }
        // line 192
        echo "    </div>
  </div>
";
    }

    // line 128
    public function block_header($context, array $blocks = [])
    {
        // line 129
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 130
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 137
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 138
        echo "          <aside class=\"col-sm-3 col-md-3 col-lg-3\" role=\"complementary\">
            ";
        // line 139
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 157
    public function block_highlighted($context, array $blocks = [])
    {
        // line 158
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 164
    public function block_help($context, array $blocks = [])
    {
        // line 165
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 170
    public function block_content($context, array $blocks = [])
    {
        // line 171
        echo "          <a id=\"main-content\"></a>
          ";
        // line 172
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 177
    public function block_above_content($context, array $blocks = [])
    {
        // line 178
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "above_content", [])), "html", null, true);
        echo "
          ";
    }

    // line 186
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 187
        echo "          <aside class=\"col-sm-3 col-md-3 col-lg-3\" role=\"complementary\">
            ";
        // line 188
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 197
    public function block_footer($context, array $blocks = [])
    {
        // line 198
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
      ";
        // line 199
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/ondetem/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 199,  443 => 198,  440 => 197,  433 => 188,  430 => 187,  427 => 186,  420 => 178,  417 => 177,  411 => 172,  408 => 171,  405 => 170,  398 => 165,  395 => 164,  388 => 158,  385 => 157,  378 => 139,  375 => 138,  372 => 137,  365 => 130,  362 => 129,  359 => 128,  353 => 192,  350 => 191,  347 => 186,  344 => 185,  339 => 181,  336 => 180,  333 => 177,  330 => 176,  327 => 174,  324 => 170,  321 => 168,  318 => 167,  315 => 164,  312 => 163,  309 => 161,  306 => 160,  303 => 157,  300 => 156,  294 => 153,  292 => 150,  291 => 149,  290 => 148,  289 => 147,  288 => 146,  286 => 145,  283 => 143,  280 => 142,  277 => 137,  274 => 136,  271 => 134,  268 => 133,  265 => 128,  262 => 127,  254 => 122,  251 => 121,  244 => 114,  241 => 113,  235 => 99,  230 => 98,  224 => 92,  219 => 91,  213 => 85,  208 => 84,  202 => 106,  198 => 104,  196 => 103,  191 => 100,  189 => 98,  186 => 97,  180 => 93,  178 => 91,  175 => 90,  169 => 86,  166 => 84,  162 => 81,  156 => 79,  154 => 78,  148 => 76,  146 => 73,  145 => 72,  144 => 70,  142 => 69,  139 => 68,  132 => 61,  129 => 60,  123 => 197,  121 => 196,  118 => 195,  116 => 121,  111 => 117,  107 => 113,  104 => 112,  101 => 110,  97 => 68,  95 => 67,  91 => 64,  88 => 63,  85 => 60,  82 => 59,  78 => 57,  75 => 56,  73 => 55,  70 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ondetem/templates/page.html.twig", "C:\\web\\ondetemforro8\\themes\\ondetem\\templates\\page.html.twig");
    }
}
