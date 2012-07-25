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
        return array (  219 => 86,  215 => 85,  211 => 84,  207 => 83,  196 => 74,  193 => 73,  189 => 60,  186 => 59,  179 => 52,  175 => 51,  171 => 50,  167 => 49,  164 => 48,  161 => 47,  151 => 34,  143 => 31,  140 => 30,  137 => 29,  128 => 91,  126 => 73,  111 => 60,  109 => 59,  103 => 55,  101 => 47,  90 => 38,  88 => 29,  83 => 26,  80 => 25,  73 => 22,  70 => 21,  63 => 18,  60 => 17,  55 => 14,  52 => 13,  36 => 4,  46 => 10,  31 => 2,  28 => 5,  23 => 3,);
    }
}
