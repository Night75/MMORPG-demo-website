<?php

/* ::base.html.twig */
class __TwigTemplate_3898ee5bac53fbb71ef96cac9563df37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 86,  215 => 85,  211 => 84,  207 => 83,  196 => 74,  193 => 73,  186 => 59,  175 => 51,  167 => 49,  164 => 48,  88 => 29,  80 => 25,  60 => 17,  168 => 67,  139 => 53,  133 => 51,  111 => 60,  107 => 41,  101 => 47,  67 => 11,  63 => 18,  51 => 5,  38 => 7,  21 => 1,  217 => 112,  173 => 70,  166 => 63,  159 => 57,  135 => 10,  132 => 9,  126 => 73,  95 => 35,  295 => 100,  289 => 96,  286 => 95,  283 => 94,  281 => 93,  276 => 90,  270 => 86,  267 => 85,  264 => 84,  262 => 83,  257 => 80,  243 => 79,  239 => 77,  224 => 75,  216 => 73,  209 => 70,  205 => 69,  198 => 66,  188 => 62,  179 => 52,  177 => 60,  171 => 50,  154 => 59,  138 => 50,  97 => 57,  36 => 4,  156 => 56,  148 => 55,  142 => 12,  140 => 30,  127 => 45,  123 => 46,  115 => 43,  110 => 41,  85 => 32,  65 => 18,  59 => 21,  45 => 12,  103 => 55,  91 => 20,  74 => 16,  70 => 21,  66 => 14,  25 => 4,  89 => 33,  82 => 27,  92 => 39,  86 => 28,  77 => 28,  57 => 6,  19 => 2,  42 => 11,  29 => 4,  26 => 3,  223 => 96,  214 => 110,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 63,  189 => 60,  187 => 77,  184 => 76,  178 => 72,  170 => 69,  157 => 61,  152 => 59,  145 => 55,  130 => 48,  125 => 46,  119 => 110,  116 => 44,  112 => 43,  102 => 36,  98 => 34,  76 => 24,  73 => 22,  69 => 15,  56 => 13,  32 => 5,  24 => 2,  22 => 6,  23 => 3,  17 => 1,  68 => 20,  61 => 16,  44 => 9,  20 => 1,  161 => 47,  153 => 50,  150 => 58,  147 => 48,  143 => 31,  137 => 29,  129 => 50,  121 => 114,  118 => 40,  113 => 69,  104 => 62,  99 => 33,  94 => 33,  81 => 18,  78 => 24,  72 => 16,  64 => 15,  53 => 12,  50 => 9,  48 => 10,  41 => 14,  39 => 10,  35 => 10,  33 => 7,  30 => 4,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 62,  160 => 57,  155 => 60,  151 => 34,  149 => 53,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 91,  120 => 37,  117 => 44,  114 => 46,  109 => 59,  106 => 64,  100 => 35,  96 => 34,  93 => 34,  90 => 38,  87 => 19,  83 => 26,  79 => 28,  71 => 25,  62 => 10,  58 => 23,  55 => 14,  52 => 13,  49 => 16,  46 => 10,  43 => 13,  40 => 10,  37 => 7,  34 => 5,  31 => 6,  28 => 5,);
    }
}
