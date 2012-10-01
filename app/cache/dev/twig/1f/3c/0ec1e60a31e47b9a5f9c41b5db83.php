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
        return array (  42 => 13,  33 => 7,  29 => 6,  22 => 2,  40 => 11,  27 => 6,  21 => 3,  122 => 45,  97 => 29,  93 => 27,  84 => 24,  75 => 22,  70 => 20,  65 => 19,  57 => 15,  54 => 15,  48 => 13,  46 => 12,  19 => 2,  17 => 1,  261 => 132,  258 => 130,  223 => 97,  219 => 96,  211 => 90,  208 => 89,  204 => 83,  201 => 82,  197 => 77,  194 => 76,  178 => 15,  174 => 14,  171 => 13,  168 => 12,  161 => 10,  158 => 9,  152 => 8,  145 => 130,  139 => 89,  130 => 82,  121 => 76,  114 => 71,  108 => 68,  105 => 34,  103 => 66,  91 => 57,  87 => 56,  79 => 23,  73 => 48,  59 => 17,  39 => 9,  35 => 8,  26 => 6,  24 => 3,  550 => 231,  547 => 230,  544 => 229,  541 => 228,  538 => 227,  535 => 226,  532 => 225,  521 => 231,  519 => 225,  509 => 218,  501 => 212,  488 => 205,  479 => 201,  475 => 200,  468 => 198,  457 => 193,  449 => 187,  445 => 186,  440 => 184,  378 => 125,  374 => 124,  367 => 119,  352 => 117,  341 => 112,  335 => 111,  330 => 109,  326 => 107,  322 => 106,  316 => 103,  307 => 101,  304 => 100,  301 => 99,  284 => 98,  270 => 87,  259 => 78,  249 => 77,  243 => 76,  237 => 72,  221 => 64,  216 => 61,  195 => 59,  189 => 58,  183 => 57,  164 => 56,  151 => 47,  147 => 134,  144 => 43,  141 => 128,  132 => 84,  129 => 37,  123 => 77,  119 => 33,  115 => 41,  110 => 31,  98 => 21,  80 => 18,  76 => 17,  72 => 16,  53 => 34,  44 => 27,  41 => 9,  36 => 9,  34 => 7,  32 => 8,  30 => 4,  28 => 3,);
    }
}
