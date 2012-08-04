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
        return array (  132 => 48,  492 => 211,  479 => 204,  470 => 200,  466 => 199,  459 => 197,  448 => 192,  440 => 186,  436 => 185,  431 => 183,  369 => 124,  365 => 123,  358 => 118,  343 => 116,  332 => 111,  326 => 110,  321 => 108,  317 => 106,  313 => 105,  307 => 102,  302 => 100,  299 => 99,  296 => 98,  279 => 97,  265 => 86,  254 => 77,  244 => 76,  238 => 75,  232 => 71,  105 => 37,  84 => 39,  75 => 27,  191 => 77,  180 => 70,  173 => 63,  159 => 55,  122 => 43,  219 => 86,  215 => 85,  211 => 60,  207 => 83,  196 => 74,  175 => 51,  167 => 49,  164 => 14,  80 => 37,  18 => 1,  228 => 91,  222 => 87,  206 => 82,  200 => 78,  172 => 67,  166 => 65,  111 => 40,  107 => 5,  101 => 36,  95 => 45,  67 => 21,  51 => 11,  38 => 10,  88 => 29,  54 => 10,  21 => 1,  237 => 121,  234 => 119,  193 => 78,  190 => 58,  186 => 59,  183 => 71,  165 => 13,  162 => 64,  146 => 46,  139 => 42,  135 => 49,  133 => 51,  126 => 44,  124 => 44,  108 => 37,  63 => 23,  60 => 19,  47 => 13,  295 => 100,  289 => 96,  286 => 95,  283 => 94,  281 => 93,  276 => 90,  270 => 86,  267 => 85,  264 => 84,  262 => 83,  257 => 80,  243 => 79,  239 => 77,  224 => 75,  216 => 63,  209 => 70,  205 => 69,  198 => 66,  188 => 76,  179 => 52,  177 => 69,  171 => 50,  154 => 59,  138 => 39,  97 => 35,  36 => 6,  156 => 12,  148 => 55,  142 => 49,  140 => 8,  127 => 46,  123 => 45,  115 => 41,  110 => 38,  85 => 29,  65 => 20,  59 => 22,  45 => 10,  103 => 38,  91 => 35,  74 => 26,  70 => 23,  66 => 24,  25 => 3,  89 => 32,  82 => 30,  92 => 44,  86 => 41,  77 => 29,  57 => 19,  19 => 2,  42 => 9,  29 => 4,  26 => 3,  223 => 96,  214 => 84,  210 => 83,  203 => 84,  199 => 83,  194 => 76,  192 => 75,  189 => 60,  187 => 77,  184 => 57,  178 => 56,  170 => 62,  157 => 61,  152 => 9,  145 => 55,  130 => 46,  125 => 47,  119 => 30,  116 => 29,  112 => 42,  102 => 38,  98 => 36,  76 => 29,  73 => 23,  69 => 22,  56 => 16,  32 => 5,  24 => 2,  22 => 6,  23 => 2,  17 => 1,  68 => 24,  61 => 19,  44 => 13,  20 => 7,  161 => 47,  153 => 50,  150 => 58,  147 => 48,  143 => 55,  137 => 29,  129 => 47,  121 => 33,  118 => 42,  113 => 28,  104 => 35,  99 => 37,  94 => 36,  81 => 30,  78 => 28,  72 => 25,  64 => 23,  53 => 17,  50 => 10,  48 => 11,  41 => 7,  39 => 7,  35 => 7,  33 => 5,  30 => 5,  27 => 5,  182 => 70,  176 => 65,  169 => 62,  163 => 58,  160 => 57,  155 => 10,  151 => 34,  149 => 10,  141 => 40,  136 => 41,  134 => 76,  131 => 31,  128 => 30,  120 => 62,  117 => 41,  114 => 41,  109 => 38,  106 => 37,  100 => 47,  96 => 33,  93 => 33,  90 => 43,  87 => 34,  83 => 28,  79 => 27,  71 => 16,  62 => 19,  58 => 12,  55 => 12,  52 => 15,  49 => 15,  46 => 9,  43 => 12,  40 => 11,  37 => 7,  34 => 6,  31 => 6,  28 => 3,);
    }
}
