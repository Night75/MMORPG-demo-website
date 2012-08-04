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
        return array (  42 => 13,  33 => 7,  22 => 2,  17 => 1,  237 => 121,  234 => 119,  193 => 79,  190 => 78,  186 => 72,  183 => 71,  179 => 66,  176 => 65,  170 => 14,  165 => 13,  162 => 12,  155 => 10,  152 => 9,  146 => 8,  141 => 123,  139 => 119,  135 => 117,  133 => 78,  126 => 73,  124 => 71,  117 => 66,  115 => 65,  108 => 60,  102 => 57,  99 => 56,  97 => 55,  79 => 40,  59 => 26,  39 => 9,  35 => 8,  28 => 3,  24 => 3,  73 => 37,  70 => 15,  63 => 15,  57 => 13,  50 => 10,  47 => 9,  41 => 12,  32 => 4,  65 => 17,  60 => 14,  53 => 23,  48 => 10,  44 => 16,  40 => 8,  37 => 5,  31 => 5,  29 => 6,  26 => 2,);
    }
}
