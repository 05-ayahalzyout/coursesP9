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

/* themes/theme__100360/templates/block.html.twig */
class __TwigTemplate_c1b78218c49bf14d8883e2f9ec079f27 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 4
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 4), 4, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 5
($context["plugin_id"] ?? null), 5, $this->source)))];
        // line 8
        if (($context["version"] ?? null)) {
            // line 9
            $context["theme_path"] = ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 9, $this->source) . $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath());
        } else {
            // line 10
            echo " 
";
            // line 11
            $context["theme_path"] = ($this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["node"] ?? null), 11, $this->source)) . $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath());
        }
        // line 13
        echo " ";
        if ((((((((((((((((((((((((((((((((((((((((((((((($context["region"] ?? null) == "leftfooterarea") && (($context["style_leftfooterarea"] ?? null) == 0)) || ((($context["region"] ?? null) == "centerfooterarea") && (($context["style_centerfooterarea"] ?? null) == 0))) || ((($context["region"] ?? null) == "rightfooterarea") && (($context["style_rightfooterarea"] ?? null) == 0))) || ((        // line 14
($context["region"] ?? null) == "headershape00") && (($context["style_headershape00"] ?? null) == 0))) || ((        // line 15
($context["region"] ?? null) == "headershape01") && (($context["style_headershape01"] ?? null) == 0))) || ((        // line 16
($context["region"] ?? null) == "headershape12") && (($context["style_headershape12"] ?? null) == 0))) || ((        // line 17
($context["region"] ?? null) == "headershape22") && (($context["style_headershape22"] ?? null) == 0))) || ((        // line 18
($context["region"] ?? null) == "headershape32") && (($context["style_headershape32"] ?? null) == 0))) || ((        // line 19
($context["region"] ?? null) == "slideshowabovecolumn1") && (($context["style_slideshowabovecolumn1"] ?? null) == 0))) || ((        // line 20
($context["region"] ?? null) == "slideshowabovecolumn2") && (($context["style_slideshowabovecolumn2"] ?? null) == 0))) || ((        // line 21
($context["region"] ?? null) == "slideshowabovecolumn3") && (($context["style_slideshowabovecolumn3"] ?? null) == 0))) || ((        // line 22
($context["region"] ?? null) == "slideshowabovecolumn4") && (($context["style_slideshowabovecolumn4"] ?? null) == 0))) || ((        // line 23
($context["region"] ?? null) == "slideshowbelowcolumn1") && (($context["style_slideshowbelowcolumn1"] ?? null) == 0))) || ((        // line 24
($context["region"] ?? null) == "slideshowbelowcolumn2") && (($context["style_slideshowbelowcolumn2"] ?? null) == 0))) || ((        // line 25
($context["region"] ?? null) == "slideshowbelowcolumn3") && (($context["style_slideshowbelowcolumn3"] ?? null) == 0))) || ((        // line 26
($context["region"] ?? null) == "slideshowbelowcolumn4") && (($context["style_slideshowbelowcolumn4"] ?? null) == 0))) || ((        // line 27
($context["region"] ?? null) == "menuabovecolumn1") && (($context["style_menuabovecolumn1"] ?? null) == 0))) || ((        // line 28
($context["region"] ?? null) == "menuabovecolumn2") && (($context["style_menuabovecolumn2"] ?? null) == 0))) || ((        // line 29
($context["region"] ?? null) == "menuabovecolumn3") && (($context["style_menuabovecolumn3"] ?? null) == 0))) || ((        // line 30
($context["region"] ?? null) == "menuabovecolumn4") && (($context["style_menuabovecolumn4"] ?? null) == 0))) || ((        // line 31
($context["region"] ?? null) == "menubelowcolumn1") && (($context["style_menubelowcolumn1"] ?? null) == 0))) || ((        // line 32
($context["region"] ?? null) == "menubelowcolumn2") && (($context["style_menubelowcolumn2"] ?? null) == 0))) || ((        // line 33
($context["region"] ?? null) == "menubelowcolumn3") && (($context["style_menubelowcolumn3"] ?? null) == 0))) || ((        // line 34
($context["region"] ?? null) == "menubelowcolumn4") && (($context["style_menubelowcolumn4"] ?? null) == 0))) || ((        // line 35
($context["region"] ?? null) == "contenttopcolumn1") && (($context["style_contenttopcolumn1"] ?? null) == 0))) || ((        // line 36
($context["region"] ?? null) == "contenttopcolumn2") && (($context["style_contenttopcolumn2"] ?? null) == 0))) || ((        // line 37
($context["region"] ?? null) == "contenttopcolumn3") && (($context["style_contenttopcolumn3"] ?? null) == 0))) || ((        // line 38
($context["region"] ?? null) == "contenttopcolumn4") && (($context["style_contenttopcolumn4"] ?? null) == 0))) || ((        // line 39
($context["region"] ?? null) == "contentbottomcolumn1") && (($context["style_contentbottomcolumn1"] ?? null) == 0))) || ((        // line 40
($context["region"] ?? null) == "contentbottomcolumn2") && (($context["style_contentbottomcolumn2"] ?? null) == 0))) || ((        // line 41
($context["region"] ?? null) == "contentbottomcolumn3") && (($context["style_contentbottomcolumn3"] ?? null) == 0))) || ((        // line 42
($context["region"] ?? null) == "contentbottomcolumn4") && (($context["style_contentbottomcolumn4"] ?? null) == 0))) || ((        // line 43
($context["region"] ?? null) == "footerabovecolumn1") && (($context["style_footerabovecolumn1"] ?? null) == 0))) || ((        // line 44
($context["region"] ?? null) == "footerabovecolumn2") && (($context["style_footerabovecolumn2"] ?? null) == 0))) || ((        // line 45
($context["region"] ?? null) == "footerabovecolumn3") && (($context["style_footerabovecolumn3"] ?? null) == 0))) || ((        // line 46
($context["region"] ?? null) == "footerabovecolumn4") && (($context["style_footerabovecolumn4"] ?? null) == 0))) || ((        // line 47
($context["region"] ?? null) == "footercellcolumn1") && (($context["style_footercellcolumn1"] ?? null) == 0))) || ((        // line 48
($context["region"] ?? null) == "footercellcolumn2") && (($context["style_footercellcolumn2"] ?? null) == 0))) || ((        // line 49
($context["region"] ?? null) == "footercellcolumn3") && (($context["style_footercellcolumn3"] ?? null) == 0))) || ((        // line 50
($context["region"] ?? null) == "footercellcolumn4") && (($context["style_footercellcolumn4"] ?? null) == 0))) || ((        // line 51
($context["region"] ?? null) == "footerbelowcolumn1") && (($context["style_footerbelowcolumn1"] ?? null) == 0))) || ((        // line 52
($context["region"] ?? null) == "footerbelowcolumn2") && (($context["style_footerbelowcolumn2"] ?? null) == 0))) || ((        // line 53
($context["region"] ?? null) == "footerbelowcolumn3") && (($context["style_footerbelowcolumn3"] ?? null) == 0))) || ((        // line 54
($context["region"] ?? null) == "footerbelowcolumn4") && (($context["style_footerbelowcolumn4"] ?? null) == 0)))) {
            // line 55
            echo " 
\t";
            // line 56
            if ((($context["region"] ?? null) == "sidebar_first")) {
                echo " 
<div class= \"ttr_sidebar_left_padding\" >
";
            } else {
                // line 58
                echo " 
";
                // line 59
                if ((($context["region"] ?? null) == "sidebar_second")) {
                    echo " 
<div class= \"ttr_sidebar_right_padding\" >
";
                }
                // line 61
                echo " 
";
            }
            // line 62
            echo " 
";
            // line 63
            if (twig_in_filter("shape", ($context["region"] ?? null))) {
                // line 64
                echo "<div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "ttr_shapes"], "method", false, false, true, 64), 64, $this->source), "html", null, true);
                echo "> 
";
            } else {
                // line 65
                echo " 
";
                // line 66
                if (twig_in_filter("footercellcolumn", ($context["region"] ?? null))) {
                    // line 67
                    echo "<div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "ttr_footer_block"], "method", false, false, true, 67), 67, $this->source), "html", null, true);
                    echo "> 
";
                } else {
                    // line 68
                    echo " 
<div";
                    // line 69
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "ttr_block"], "method", false, false, true, 69), 69, $this->source), "html", null, true);
                    echo "> 
";
                }
                // line 70
                echo " 
";
            }
            // line 71
            echo " 
<div class=\"margin_collapsetop\"></div> 
";
            // line 73
            if (($context["label"] ?? null)) {
                echo " 
<div class=\"ttr_block_header\"> 
";
                // line 75
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 75, $this->source), "html", null, true);
                echo " 
<h3 ";
                // line 76
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "ttr_block_heading"], "method", false, false, true, 76), 76, $this->source), "html", null, true);
                echo "> 
";
                // line 77
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 77, $this->source), "html", null, true);
                echo " </h3> 
";
                // line 78
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 78, $this->source), "html", null, true);
                echo " 
";
            } else {
                // line 79
                echo " 
<div class=\"ttr_block_without_header\"> 
";
            }
            // line 81
            echo " 
</div> 
";
            // line 83
            if (twig_in_filter("shape", ($context["region"] ?? null))) {
                echo " 
";
                // line 84
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 84, $this->source), "html", null, true);
                echo " 
";
            } else {
                // line 85
                echo " 
";
                // line 86
                if (twig_in_filter("footercellcolumn", ($context["region"] ?? null))) {
                    // line 87
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 87, $this->source), "html", null, true);
                    echo "
";
                } else {
                    // line 89
                    echo "<div class = \"ttr_block_content\"> 
";
                    // line 90
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 90, $this->source), "html", null, true);
                    echo "
</div> 
";
                }
            }
            // line 94
            echo "<div class=\"margin_collapsetop\"></div>
</div>
";
        } else {
            // line 96
            echo " 
<div";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 97), 97, $this->source), "html", null, true);
            echo "> 
";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 98, $this->source), "html", null, true);
            echo " 
";
            // line 99
            if (($context["label"] ?? null)) {
                echo " 
<h2";
                // line 100
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 100, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 100, $this->source), "html", null, true);
                echo "</h2> 
";
            }
            // line 101
            echo " 
";
            // line 102
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 102, $this->source), "html", null, true);
            echo " 
";
            // line 103
            $this->displayBlock('content', $context, $blocks);
            // line 107
            echo " 
</div> 
";
        }
        // line 109
        echo " 
";
    }

    // line 103
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<div";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method", false, false, true, 104), 104, $this->source), "html", null, true);
        echo "> 
";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 105, $this->source), "html", null, true);
        echo " 
</div> 
";
    }

    public function getTemplateName()
    {
        return "themes/theme__100360/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 105,  271 => 104,  265 => 103,  260 => 109,  255 => 107,  253 => 103,  249 => 102,  246 => 101,  239 => 100,  235 => 99,  231 => 98,  227 => 97,  224 => 96,  219 => 94,  212 => 90,  209 => 89,  204 => 87,  202 => 86,  199 => 85,  194 => 84,  190 => 83,  186 => 81,  181 => 79,  176 => 78,  172 => 77,  168 => 76,  164 => 75,  159 => 73,  155 => 71,  151 => 70,  146 => 69,  143 => 68,  137 => 67,  135 => 66,  132 => 65,  126 => 64,  124 => 63,  121 => 62,  117 => 61,  111 => 59,  108 => 58,  102 => 56,  99 => 55,  97 => 54,  96 => 53,  95 => 52,  94 => 51,  93 => 50,  92 => 49,  91 => 48,  90 => 47,  89 => 46,  88 => 45,  87 => 44,  86 => 43,  85 => 42,  84 => 41,  83 => 40,  82 => 39,  81 => 38,  80 => 37,  79 => 36,  78 => 35,  77 => 34,  76 => 33,  75 => 32,  74 => 31,  73 => 30,  72 => 29,  71 => 28,  70 => 27,  69 => 26,  68 => 25,  67 => 24,  66 => 23,  65 => 22,  64 => 21,  63 => 20,  62 => 19,  61 => 18,  60 => 17,  59 => 16,  58 => 15,  57 => 14,  55 => 13,  52 => 11,  49 => 10,  46 => 9,  44 => 8,  42 => 5,  41 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/theme__100360/templates/block.html.twig", "C:\\xampp\\htdocs\\coursesP9\\drupal-9.5.3\\themes\\theme__100360\\templates\\block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 8, "block" => 103);
        static $filters = array("clean_class" => 4, "escape" => 64);
        static $functions = array("active_theme_path" => 9, "file_url" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
                ['active_theme_path', 'file_url']
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
