<?php

/* AcmeDemoBundle:Welcome:index.html.twig */
class __TwigTemplate_51f82e8c5af2b0e315afe561c202d01d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Welcome";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["version"] = ((constant("Symfony\\Component\\HttpKernel\\Kernel::MAJOR_VERSION") . ".") . constant("Symfony\\Component\\HttpKernel\\Kernel::MINOR_VERSION"));
        // line 9
        echo "
    <h1>Welcome!</h1>

    <p>Congratulations! You have successfully installed a new Symfony application.</p>

    <div class=\"symfony-blocks-welcome\">
        <div class=\"block-quick-tour\">
            <div class=\"illustration\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-quick-tour.gif"), "html", null, true);
        echo "\" alt=\"Quick tour\" />
            </div>
            <a class=\"symfony-button-green\" href=\"http://symfony.com/doc/";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/quick_tour/index.html\">Read the Quick Tour</a>
        </div>
        ";
        // line 21
        if (($this->getAttribute($this->getContext($context, "app"), "environment") == "dev")) {
            // line 22
            echo "            <div class=\"block-configure\">
                <div class=\"illustration\">
                    <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-configure.gif"), "html", null, true);
            echo "\" alt=\"Configure your application\" />
                </div>
                <a class=\"symfony-button-green\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_home"), "html", null, true);
            echo "\">Configure</a>
            </div>
        ";
        }
        // line 29
        echo "        <div class=\"block-demo\">
            <div class=\"illustration\">
                <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-demo.gif"), "html", null, true);
        echo "\" alt=\"Demo\" />
            </div>
            <a class=\"symfony-button-green\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo"), "html", null, true);
        echo "\">Run The Demo</a>
        </div>
    </div>

    <div class=\"symfony-blocks-help\">
        <div class=\"block-documentation\">
            <ul>
                <li><strong>Documentation</strong></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 41
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/book/index.html\">The Book</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 42
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/cookbook/index.html\">The Cookbook</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 43
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/components/index.html\">The Components</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 44
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/reference/index.html\">Reference</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 45
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/glossary.html\">Glossary</a></li>
            </ul>
        </div>
        <div class=\"block-documentation-more\">
            <ul>
                <li><strong>Sensio</strong></li>
                <li><a href=\"http://trainings.sensiolabs.com\">Trainings</a></li>
                <li><a href=\"http://books.sensiolabs.com\">Books</a></li>
            </ul>
        </div>
        <div class=\"block-community\">
            <ul>
                <li><strong>Community</strong></li>
                <li><a href=\"http://symfony.com/irc\">IRC channel</a></li>
                <li><a href=\"http://symfony.com/mailing-lists\">Mailing lists</a></li>
                <li><a href=\"http://forum.symfony-project.org\">Forum</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 61
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/contributing/index.html\">Contributing</a></li>
            </ul>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 48,  492 => 211,  479 => 204,  470 => 200,  466 => 199,  459 => 197,  448 => 192,  440 => 186,  436 => 185,  431 => 183,  369 => 124,  365 => 123,  358 => 118,  343 => 116,  332 => 111,  326 => 110,  321 => 108,  317 => 106,  313 => 105,  307 => 102,  302 => 100,  299 => 99,  296 => 98,  279 => 97,  265 => 86,  254 => 77,  244 => 76,  238 => 75,  232 => 71,  105 => 37,  84 => 39,  75 => 27,  191 => 77,  180 => 70,  173 => 63,  159 => 55,  122 => 43,  219 => 86,  215 => 85,  211 => 60,  207 => 83,  196 => 74,  175 => 51,  167 => 49,  164 => 14,  80 => 37,  18 => 1,  228 => 91,  222 => 87,  206 => 82,  200 => 78,  172 => 67,  166 => 65,  111 => 43,  107 => 42,  101 => 36,  95 => 45,  67 => 21,  51 => 11,  38 => 6,  88 => 29,  54 => 10,  21 => 1,  237 => 121,  234 => 119,  193 => 78,  190 => 58,  186 => 59,  183 => 71,  165 => 13,  162 => 64,  146 => 46,  139 => 42,  135 => 49,  133 => 51,  126 => 44,  124 => 44,  108 => 37,  63 => 23,  60 => 19,  47 => 13,  295 => 100,  289 => 96,  286 => 95,  283 => 94,  281 => 93,  276 => 90,  270 => 86,  267 => 85,  264 => 84,  262 => 83,  257 => 80,  243 => 79,  239 => 77,  224 => 75,  216 => 63,  209 => 70,  205 => 69,  198 => 66,  188 => 76,  179 => 52,  177 => 69,  171 => 50,  154 => 59,  138 => 61,  97 => 35,  36 => 6,  156 => 12,  148 => 55,  142 => 49,  140 => 8,  127 => 46,  123 => 45,  115 => 44,  110 => 38,  85 => 29,  65 => 20,  59 => 22,  45 => 10,  103 => 41,  91 => 35,  74 => 26,  70 => 23,  66 => 21,  25 => 3,  89 => 32,  82 => 30,  92 => 33,  86 => 41,  77 => 26,  57 => 13,  19 => 2,  42 => 9,  29 => 3,  26 => 3,  223 => 96,  214 => 84,  210 => 83,  203 => 84,  199 => 83,  194 => 76,  192 => 75,  189 => 60,  187 => 77,  184 => 57,  178 => 56,  170 => 62,  157 => 61,  152 => 9,  145 => 55,  130 => 46,  125 => 47,  119 => 45,  116 => 29,  112 => 42,  102 => 38,  98 => 36,  76 => 29,  73 => 23,  69 => 22,  56 => 17,  32 => 5,  24 => 9,  22 => 6,  23 => 29,  17 => 1,  68 => 22,  61 => 19,  44 => 8,  20 => 7,  161 => 47,  153 => 50,  150 => 58,  147 => 48,  143 => 55,  137 => 29,  129 => 47,  121 => 33,  118 => 42,  113 => 28,  104 => 35,  99 => 37,  94 => 36,  81 => 30,  78 => 28,  72 => 24,  64 => 23,  53 => 17,  50 => 14,  48 => 11,  41 => 11,  39 => 10,  35 => 5,  33 => 5,  30 => 5,  27 => 5,  182 => 70,  176 => 65,  169 => 62,  163 => 58,  160 => 57,  155 => 10,  151 => 34,  149 => 10,  141 => 40,  136 => 41,  134 => 76,  131 => 31,  128 => 30,  120 => 62,  117 => 41,  114 => 41,  109 => 38,  106 => 37,  100 => 47,  96 => 33,  93 => 33,  90 => 43,  87 => 31,  83 => 29,  79 => 27,  71 => 16,  62 => 19,  58 => 12,  55 => 12,  52 => 15,  49 => 15,  46 => 9,  43 => 8,  40 => 7,  37 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
