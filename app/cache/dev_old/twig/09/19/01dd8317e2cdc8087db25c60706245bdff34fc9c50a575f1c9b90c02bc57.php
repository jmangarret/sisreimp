<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_091901dd8317e2cdc8087db25c60706245bdff34fc9c50a575f1c9b90c02bc57 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
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
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

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
                        '',
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
        return array (  20 => 1,  357 => 123,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  318 => 111,  306 => 107,  297 => 104,  291 => 102,  263 => 95,  231 => 83,  212 => 78,  190 => 76,  161 => 63,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  363 => 126,  358 => 151,  353 => 121,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 112,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  288 => 101,  281 => 114,  276 => 111,  274 => 97,  265 => 96,  259 => 103,  255 => 93,  253 => 100,  232 => 88,  222 => 83,  210 => 77,  184 => 63,  175 => 58,  174 => 65,  167 => 71,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  202 => 77,  188 => 76,  170 => 56,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  351 => 120,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 110,  303 => 106,  300 => 105,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 97,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  207 => 75,  197 => 69,  194 => 68,  191 => 67,  185 => 74,  181 => 65,  178 => 59,  165 => 83,  150 => 55,  110 => 22,  127 => 35,  155 => 47,  137 => 51,  76 => 28,  84 => 40,  124 => 44,  118 => 49,  225 => 108,  211 => 96,  200 => 72,  192 => 90,  172 => 57,  153 => 69,  113 => 40,  34 => 5,  70 => 24,  104 => 37,  97 => 41,  77 => 25,  114 => 46,  58 => 18,  134 => 39,  126 => 61,  81 => 23,  53 => 15,  160 => 40,  152 => 46,  146 => 5,  129 => 69,  100 => 36,  90 => 37,  65 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 100,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 52,  107 => 41,  61 => 23,  273 => 96,  269 => 107,  254 => 92,  243 => 92,  240 => 86,  238 => 85,  235 => 85,  230 => 82,  227 => 86,  224 => 81,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 78,  179 => 86,  159 => 61,  143 => 51,  135 => 62,  119 => 40,  102 => 24,  71 => 24,  67 => 20,  63 => 18,  59 => 22,  87 => 32,  28 => 6,  94 => 21,  89 => 32,  85 => 24,  75 => 19,  68 => 30,  56 => 11,  201 => 92,  196 => 92,  183 => 87,  171 => 73,  166 => 54,  163 => 53,  158 => 80,  156 => 62,  151 => 63,  142 => 60,  138 => 56,  136 => 48,  121 => 50,  117 => 39,  105 => 25,  91 => 34,  62 => 21,  49 => 14,  93 => 38,  88 => 25,  78 => 26,  27 => 7,  38 => 12,  44 => 10,  25 => 35,  21 => 2,  31 => 8,  24 => 3,  46 => 12,  26 => 6,  19 => 1,  79 => 21,  72 => 27,  69 => 26,  47 => 18,  40 => 11,  37 => 10,  22 => 2,  246 => 96,  157 => 39,  145 => 52,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 44,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 35,  83 => 35,  74 => 14,  66 => 11,  55 => 13,  52 => 21,  50 => 16,  43 => 12,  41 => 8,  35 => 9,  32 => 7,  29 => 6,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 58,  149 => 57,  147 => 43,  144 => 42,  141 => 73,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 35,  106 => 51,  103 => 37,  99 => 23,  95 => 39,  92 => 27,  86 => 35,  82 => 28,  80 => 29,  73 => 23,  64 => 24,  60 => 6,  57 => 19,  54 => 22,  51 => 13,  48 => 16,  45 => 17,  42 => 11,  39 => 6,  36 => 8,  33 => 9,  30 => 7,);
    }
}
