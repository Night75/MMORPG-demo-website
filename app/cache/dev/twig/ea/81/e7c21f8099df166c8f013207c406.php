<?php

/* WmsIntroductionBundle::layout.html.twig */
class __TwigTemplate_ea81e7c21f8099df166c8f013207c406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["path_public"] = $this->env->getExtension('assets')->getAssetUrl("bundles/wmsintroduction/");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta($context, array $blocks = array())
    {
        echo " 
\t<meta name=\"description\" content=\"WebMixingShapes, Site personnel de Lai Jean-François, étudiant en développement WEB/SQL, en recherche d'un contrat de professionnalisation\" />
\t<Meta name=\"Keywords\" content=\"webmixingshapes,html5,html 5,css3,css 3,web,developpement,sql,php\"> 
\t<meta name=\"author\" content=\"Lai Jean-François\" />
\t<meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0\"/>
\t<meta name=\"Date\" content=\"Sun, 29 April 2012\"> 
\t<link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getContext($context, "path_public"), "html", null, true);
        echo "images/logo.png\" />
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        // line 14
        echo "\tWebMixingShapes
";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "path_public"), "html", null, true);
        echo "css/styles.css\"/>
";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "path_public"), "html", null, true);
        echo "js/jquery.js\"></script>
";
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "
\t<div id=\"head_background\">
\t\t<header>
\t\t\t";
        // line 29
        $this->displayBlock('header', $context, $blocks);
        // line 38
        echo "\t\t</header>
\t</div>
\t
\t
\t<div id=\"main-background\">\t
\t\t<div class=\"mainborder\"><!--bordure transparente du main-->
\t\t\t<div id=\"main\">
\t\t\t\t
\t\t\t\t<!-- __________________ ----------------- ************ MENU ************----------------- __________________ -->
\t\t\t\t";
        // line 47
        $this->displayBlock('menu', $context, $blocks);
        // line 55
        echo "\t\t\t\t
\t\t\t\t<!-- __________________ ----------------- ************ CONTENT ************----------------- __________________ -->
\t\t\t\t<div id=\"content\">
\t\t\t\t\t<div class=\"insetborder\"><!--bordure rouge intérieure--></div>\t
\t\t\t\t\t";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "  
\t\t\t\t</div><!--fin de content-->
\t\t\t
\t\t\t</div> <!--fin de main-->
\t\t</div><!-- fin de mainborder-->

\t
\t
\t\t<!-- __________________ ----------------- ************ FOOTER ************----------------- __________________ -->
\t\t<div id=\"bot-wrapper\"><!--permet le recentrage du footer-->\t\t
\t\t\t<div id=\"foot-background\">
\t\t\t\t<footer>
\t\t\t\t
\t\t\t\t\t";
        // line 73
        $this->displayBlock('footer', $context, $blocks);
        // line 91
        echo "\t\t\t\t\t
\t\t\t\t</footer>
\t\t\t</div>\t
\t\t</div>
\t</div><!-- fin de main-background-->
";
    }

    // line 29
    public function block_header($context, array $blocks = array())
    {
        // line 30
        echo "\t\t\t\t<div id=\"logo\">
\t\t\t\t\t<a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wmsintroduction_accueil"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "path_public"), "html", null, true);
        echo "images/logo.png\" alt=\"Logo_webmixingshapes\"></a>
\t\t\t\t</div>
\t\t\t\t<div id=\"text_logo\">
\t\t\t\t\t<a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wmsintroduction_accueil"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "path_public"), "html", null, true);
        echo "images/text_logo.png\" title=\"webmixingshapes\" alt=\"WebMixingShapes\"></a>
\t\t\t\t</div>
\t\t\t\t<h1>Site personnel de LAI Jean-François <br/>Développeur Web-PHP/SQL en auto formation</h1>
\t\t\t";
    }

    // line 47
    public function block_menu($context, array $blocks = array())
    {
        // line 48
        echo "\t\t\t\t\t<nav>
\t\t\t\t\t\t<p><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wmsintroduction_accueil"), "html", null, true);
        echo "\">Accueil</a></p>
\t\t\t\t\t\t<p><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wmsintroduction_cv"), "html", null, true);
        echo "\">CV</a></p>
\t\t\t\t\t\t<p><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wmsintroduction_apropos"), "html", null, true);
        echo "\">A propos</a></p>
\t\t\t\t\t\t<p><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wmsintroduction_contact"), "html", null, true);
        echo "\">Contact</a></p>
\t\t\t\t\t</nav>
\t\t\t\t";
    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
        // line 60
        echo "\t\t\t\t\t";
    }

    // line 73
    public function block_footer($context, array $blocks = array())
    {
        // line 74
        echo "\t\t\t\t\t\t<div class=\"left_foot\">
\t\t\t\t\t\t\t <h3>A  propos de WebMixingShapes </h3>
\t\t\t\t\t\t\t <p>
\t\t\t\t\t\t\t \tSite personnel de Lai Jean-François, en recherche d’un contrat de professionnalisation Développeur Web-PHP/SQL.<br/>
\t\t\t\t\t\t\t\tSi vous êtes intéressé par mon profil, contactez moi!
\t\t\t\t\t\t\t </p>
\t\t\t\t\t\t</div> \t\t
\t\t\t\t\t\t<div class=\"right_foot\">
\t\t\t\t\t\t\t<div class=\"nav_foot\">
\t\t\t\t\t\t\t\t<p><a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wmsintroduction_accueil"), "html", null, true);
        echo "\">Accueil</a></p>
\t\t\t\t\t\t\t\t<p><a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wmsintroduction_cv"), "html", null, true);
        echo "\">CV</a></p>
\t\t\t\t\t\t\t\t<p><a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wmsintroduction_apropos"), "html", null, true);
        echo "\">A propos</a></p>
\t\t\t\t\t\t\t\t<p><a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wmsintroduction_contact"), "html", null, true);
        echo "\">Contact</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t<p class=\"copyright\">&copy; Copyright 2011 by WebMixingShapes</p>\t
\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "WmsIntroductionBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 86,  215 => 85,  211 => 84,  207 => 83,  196 => 74,  193 => 73,  186 => 59,  175 => 51,  167 => 49,  164 => 48,  88 => 29,  80 => 25,  60 => 17,  168 => 67,  139 => 53,  133 => 51,  111 => 60,  107 => 41,  101 => 47,  67 => 24,  63 => 18,  51 => 17,  38 => 7,  21 => 3,  217 => 112,  173 => 70,  166 => 63,  159 => 57,  135 => 10,  132 => 9,  126 => 73,  95 => 35,  295 => 100,  289 => 96,  286 => 95,  283 => 94,  281 => 93,  276 => 90,  270 => 86,  267 => 85,  264 => 84,  262 => 83,  257 => 80,  243 => 79,  239 => 77,  224 => 75,  216 => 73,  209 => 70,  205 => 69,  198 => 66,  188 => 62,  179 => 52,  177 => 60,  171 => 50,  154 => 59,  138 => 50,  97 => 57,  36 => 4,  156 => 56,  148 => 55,  142 => 12,  140 => 30,  127 => 45,  123 => 46,  115 => 43,  110 => 41,  85 => 32,  65 => 18,  59 => 21,  45 => 15,  103 => 55,  91 => 20,  74 => 16,  70 => 21,  66 => 14,  25 => 4,  89 => 33,  82 => 27,  92 => 39,  86 => 28,  77 => 28,  57 => 19,  19 => 2,  42 => 12,  29 => 4,  26 => 3,  223 => 96,  214 => 110,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 63,  189 => 60,  187 => 77,  184 => 76,  178 => 72,  170 => 69,  157 => 61,  152 => 59,  145 => 55,  130 => 48,  125 => 46,  119 => 110,  116 => 44,  112 => 43,  102 => 36,  98 => 34,  76 => 24,  73 => 22,  69 => 15,  56 => 13,  32 => 5,  24 => 2,  22 => 6,  23 => 3,  17 => 1,  68 => 20,  61 => 16,  44 => 9,  20 => 1,  161 => 47,  153 => 50,  150 => 58,  147 => 48,  143 => 31,  137 => 29,  129 => 50,  121 => 114,  118 => 40,  113 => 69,  104 => 62,  99 => 33,  94 => 33,  81 => 18,  78 => 24,  72 => 16,  64 => 15,  53 => 12,  50 => 9,  48 => 10,  41 => 14,  39 => 10,  35 => 10,  33 => 9,  30 => 4,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 62,  160 => 57,  155 => 60,  151 => 34,  149 => 53,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 91,  120 => 37,  117 => 44,  114 => 46,  109 => 59,  106 => 64,  100 => 35,  96 => 34,  93 => 34,  90 => 38,  87 => 19,  83 => 26,  79 => 28,  71 => 25,  62 => 17,  58 => 23,  55 => 14,  52 => 13,  49 => 16,  46 => 10,  43 => 13,  40 => 8,  37 => 7,  34 => 5,  31 => 2,  28 => 5,);
    }
}
