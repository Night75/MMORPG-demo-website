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
        return array (  42 => 13,  22 => 2,  108 => 42,  101 => 38,  94 => 34,  85 => 28,  77 => 23,  64 => 18,  55 => 16,  50 => 14,  45 => 13,  37 => 11,  32 => 9,  17 => 1,  224 => 116,  221 => 114,  180 => 74,  177 => 73,  173 => 67,  170 => 66,  166 => 61,  163 => 60,  157 => 14,  152 => 13,  149 => 12,  133 => 8,  128 => 118,  126 => 114,  122 => 112,  120 => 73,  113 => 68,  111 => 66,  104 => 61,  102 => 60,  73 => 21,  59 => 17,  53 => 23,  44 => 16,  41 => 12,  39 => 9,  28 => 3,  26 => 7,  24 => 3,  528 => 248,  486 => 208,  473 => 201,  465 => 198,  459 => 197,  448 => 192,  440 => 186,  436 => 185,  431 => 183,  369 => 124,  365 => 123,  358 => 118,  343 => 116,  332 => 111,  326 => 110,  321 => 108,  317 => 106,  313 => 105,  307 => 102,  302 => 100,  299 => 99,  296 => 98,  279 => 97,  265 => 86,  254 => 77,  244 => 76,  238 => 75,  232 => 71,  216 => 63,  211 => 60,  190 => 58,  184 => 57,  178 => 56,  159 => 55,  146 => 46,  142 => 10,  139 => 9,  136 => 41,  127 => 37,  124 => 36,  118 => 33,  114 => 32,  109 => 31,  97 => 21,  79 => 40,  75 => 17,  71 => 16,  52 => 15,  43 => 10,  40 => 9,  35 => 10,  33 => 7,  31 => 5,  29 => 6,  27 => 3,);
    }
}
