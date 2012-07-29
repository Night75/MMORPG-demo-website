<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_1f3c0ec1e60a31e47b9a5f9c41b5db83 extends Twig_Template
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
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},
            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },
            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },
            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },
            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            };

        return {
            hasClass: hasClass,
            removeClass: removeClass,
            addClass: addClass,
            request: request,
            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },
            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }

        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  22 => 2,  108 => 42,  101 => 38,  94 => 34,  85 => 28,  77 => 23,  64 => 18,  55 => 16,  50 => 14,  45 => 13,  37 => 11,  32 => 9,  17 => 1,  220 => 112,  217 => 110,  176 => 70,  173 => 69,  169 => 63,  166 => 62,  162 => 57,  159 => 56,  153 => 14,  148 => 13,  145 => 12,  138 => 10,  135 => 9,  129 => 8,  124 => 114,  122 => 110,  118 => 108,  116 => 69,  107 => 62,  98 => 56,  79 => 40,  53 => 23,  44 => 16,  41 => 12,  39 => 9,  28 => 3,  26 => 7,  24 => 3,  453 => 268,  412 => 229,  399 => 222,  391 => 219,  385 => 218,  374 => 213,  366 => 207,  362 => 206,  357 => 204,  295 => 145,  291 => 144,  284 => 139,  269 => 137,  258 => 132,  252 => 131,  247 => 129,  243 => 127,  239 => 126,  233 => 123,  228 => 121,  225 => 120,  222 => 119,  205 => 118,  149 => 65,  143 => 62,  137 => 59,  131 => 56,  119 => 48,  115 => 45,  112 => 44,  109 => 64,  100 => 57,  97 => 38,  91 => 35,  87 => 34,  82 => 33,  73 => 21,  66 => 23,  59 => 17,  52 => 15,  43 => 10,  40 => 9,  35 => 10,  33 => 7,  31 => 5,  29 => 6,  27 => 3,);
    }
}
