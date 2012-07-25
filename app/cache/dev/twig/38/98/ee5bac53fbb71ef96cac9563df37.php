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
        return array (  67 => 11,  62 => 10,  57 => 6,  51 => 5,  45 => 12,  42 => 11,  40 => 10,  33 => 7,  27 => 5,  21 => 1,  219 => 86,  215 => 85,  211 => 84,  207 => 83,  196 => 74,  193 => 73,  189 => 60,  186 => 59,  179 => 52,  175 => 51,  171 => 50,  167 => 49,  164 => 48,  161 => 47,  151 => 34,  143 => 31,  140 => 30,  137 => 29,  128 => 91,  126 => 73,  111 => 60,  109 => 59,  103 => 55,  101 => 47,  90 => 38,  88 => 29,  83 => 26,  80 => 25,  73 => 22,  70 => 21,  63 => 18,  60 => 17,  55 => 14,  52 => 13,  36 => 4,  46 => 10,  31 => 6,  28 => 5,  23 => 3,);
    }
}
