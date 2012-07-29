<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_a6c44f6e82b2d90badf333b1609a1e12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("WebProfilerBundle:Profiler:base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        Sfjs.load(
            'sfwdt";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  22 => 2,  108 => 42,  101 => 38,  94 => 34,  85 => 28,  77 => 23,  64 => 18,  55 => 16,  50 => 14,  45 => 13,  37 => 11,  32 => 9,  17 => 1,  220 => 112,  217 => 110,  176 => 70,  173 => 69,  169 => 63,  166 => 62,  162 => 57,  159 => 56,  153 => 14,  148 => 13,  145 => 12,  138 => 10,  135 => 9,  129 => 8,  124 => 114,  122 => 110,  118 => 108,  116 => 69,  107 => 62,  98 => 56,  79 => 40,  53 => 23,  44 => 16,  41 => 12,  39 => 9,  28 => 3,  26 => 7,  24 => 3,  453 => 268,  412 => 229,  399 => 222,  391 => 219,  385 => 218,  374 => 213,  366 => 207,  362 => 206,  357 => 204,  295 => 145,  291 => 144,  284 => 139,  269 => 137,  258 => 132,  252 => 131,  247 => 129,  243 => 127,  239 => 126,  233 => 123,  228 => 121,  225 => 120,  222 => 119,  205 => 118,  149 => 65,  143 => 62,  137 => 59,  131 => 56,  119 => 48,  115 => 45,  112 => 44,  109 => 64,  100 => 57,  97 => 38,  91 => 35,  87 => 34,  82 => 33,  73 => 21,  66 => 23,  59 => 17,  52 => 15,  43 => 10,  40 => 9,  35 => 10,  33 => 7,  31 => 5,  29 => 6,  27 => 3,);
    }
}
