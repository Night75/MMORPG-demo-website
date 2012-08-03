<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_c61b5f844a2f93781040eaded032ff45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"symfony-wrapper\">
            <div id=\"symfony-header\">
                <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/logo.gif"), "html", null, true);
        echo "\" alt=\"Symfony logo\" />
                </a>
                <form id=\"symfony-search\" method=\"GET\" action=\"http://symfony.com/search\">
                    <label for=\"symfony-search-field\"><span>Search on Symfony Website</span></label>
                    <input name=\"q\" id=\"symfony-search-field\" type=\"search\" placeholder=\"Search on Symfony website\" class=\"medium_txt\" />
                    <input type=\"submit\" class=\"symfony-button-grey\" value=\"OK\" />
                </form>
            </div>

            ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "                <div class=\"flash-message\">
                    <em>Notice</em>: ";
            // line 24
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "
            ";
        // line 28
        $this->displayBlock('content_header', $context, $blocks);
        // line 37
        echo "
            <div class=\"symfony-content\">
                ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "            </div>

            ";
        // line 43
        if (array_key_exists("code", $context)) {
            // line 44
            echo "                <h2>Code behind this page</h2>
                <div class=\"symfony-content\">";
            // line 45
            echo $this->getContext($context, "code");
            echo "</div>
            ";
        }
        // line 47
        echo "        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 28
    public function block_content_header($context, array $blocks = array())
    {
        // line 29
        echo "                <ul id=\"menu\">
                    ";
        // line 30
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 33
        echo "                </ul>

                <div style=\"clear: both\"></div>
            ";
    }

    // line 30
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 31
        echo "                        <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo"), "html", null, true);
        echo "\">Demo Home</a></li>
                    ";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "                ";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 49,  105 => 37,  84 => 39,  528 => 248,  486 => 208,  473 => 201,  465 => 198,  459 => 197,  448 => 192,  440 => 186,  436 => 185,  431 => 183,  369 => 124,  365 => 123,  358 => 118,  343 => 116,  332 => 111,  326 => 110,  321 => 108,  317 => 106,  313 => 105,  307 => 102,  302 => 100,  299 => 99,  296 => 98,  279 => 97,  265 => 86,  254 => 77,  244 => 76,  238 => 75,  232 => 71,  159 => 55,  146 => 57,  124 => 44,  75 => 27,  108 => 37,  219 => 86,  215 => 85,  211 => 60,  207 => 83,  196 => 74,  193 => 73,  186 => 59,  175 => 51,  167 => 49,  164 => 48,  88 => 29,  80 => 37,  18 => 1,  190 => 58,  183 => 72,  172 => 67,  162 => 64,  107 => 5,  95 => 45,  67 => 21,  51 => 11,  38 => 10,  54 => 16,  21 => 1,  101 => 36,  221 => 114,  180 => 74,  173 => 67,  166 => 65,  139 => 55,  133 => 49,  126 => 44,  122 => 43,  111 => 40,  63 => 23,  60 => 19,  47 => 13,  295 => 100,  289 => 96,  286 => 95,  283 => 94,  281 => 93,  276 => 90,  270 => 86,  267 => 85,  264 => 84,  262 => 83,  257 => 80,  243 => 79,  239 => 77,  224 => 116,  216 => 63,  209 => 70,  205 => 69,  198 => 66,  188 => 62,  179 => 52,  177 => 73,  171 => 50,  154 => 61,  138 => 39,  97 => 35,  36 => 6,  156 => 58,  148 => 55,  142 => 49,  140 => 30,  127 => 46,  123 => 45,  115 => 41,  110 => 38,  85 => 29,  65 => 20,  59 => 22,  45 => 10,  103 => 38,  91 => 35,  74 => 24,  70 => 23,  66 => 24,  25 => 3,  89 => 32,  82 => 27,  92 => 44,  86 => 41,  77 => 29,  57 => 18,  19 => 2,  42 => 9,  29 => 4,  26 => 3,  223 => 96,  214 => 72,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 63,  189 => 60,  187 => 77,  184 => 57,  178 => 56,  170 => 66,  157 => 14,  152 => 13,  145 => 55,  130 => 46,  125 => 47,  119 => 30,  116 => 29,  112 => 43,  102 => 35,  98 => 34,  76 => 25,  73 => 23,  69 => 22,  56 => 16,  32 => 4,  24 => 2,  22 => 6,  23 => 2,  17 => 1,  68 => 22,  61 => 19,  44 => 13,  20 => 7,  161 => 47,  153 => 50,  150 => 58,  147 => 57,  143 => 55,  137 => 29,  129 => 47,  121 => 33,  118 => 42,  113 => 28,  104 => 36,  99 => 37,  94 => 36,  81 => 30,  78 => 28,  72 => 24,  64 => 19,  53 => 17,  50 => 10,  48 => 11,  41 => 7,  39 => 7,  35 => 7,  33 => 5,  30 => 5,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 60,  160 => 57,  155 => 60,  151 => 60,  149 => 12,  141 => 40,  136 => 41,  134 => 50,  131 => 31,  128 => 30,  120 => 47,  117 => 41,  114 => 41,  109 => 38,  106 => 38,  100 => 47,  96 => 33,  93 => 33,  90 => 43,  87 => 34,  83 => 28,  79 => 27,  71 => 16,  62 => 10,  58 => 12,  55 => 12,  52 => 15,  49 => 16,  46 => 9,  43 => 12,  40 => 11,  37 => 11,  34 => 6,  31 => 6,  28 => 3,);
    }
}
