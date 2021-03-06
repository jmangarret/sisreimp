<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_948adb44450a1448e47a3dbb7fce22e57140f2cea1b3734adaa2504234502137 extends Twig_Template
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
        echo "Symfony - Demos";
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
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World"));
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  127 => 28,  118 => 43,  126 => 61,  225 => 108,  211 => 96,  200 => 91,  192 => 90,  172 => 84,  153 => 68,  134 => 66,  97 => 41,  77 => 25,  104 => 42,  70 => 29,  155 => 78,  137 => 51,  124 => 46,  84 => 29,  76 => 17,  113 => 54,  114 => 46,  58 => 17,  148 => 74,  81 => 32,  53 => 11,  160 => 40,  152 => 17,  146 => 5,  129 => 69,  100 => 37,  90 => 32,  65 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 109,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 52,  107 => 40,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 86,  159 => 61,  143 => 57,  135 => 62,  119 => 48,  102 => 17,  71 => 24,  67 => 26,  63 => 19,  59 => 13,  87 => 30,  28 => 3,  94 => 34,  89 => 34,  85 => 32,  75 => 27,  68 => 19,  56 => 11,  201 => 92,  196 => 90,  183 => 87,  171 => 42,  166 => 45,  163 => 62,  158 => 79,  156 => 62,  151 => 63,  142 => 60,  138 => 54,  136 => 52,  121 => 46,  117 => 19,  105 => 18,  91 => 41,  62 => 23,  49 => 10,  93 => 35,  88 => 31,  78 => 26,  27 => 4,  38 => 6,  44 => 10,  25 => 4,  21 => 2,  31 => 3,  24 => 1,  46 => 14,  26 => 9,  19 => 1,  79 => 28,  72 => 24,  69 => 29,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 32,  157 => 39,  145 => 46,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 44,  111 => 39,  108 => 19,  101 => 43,  98 => 45,  96 => 33,  83 => 26,  74 => 27,  66 => 24,  55 => 21,  52 => 10,  50 => 18,  43 => 7,  41 => 5,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 88,  182 => 49,  176 => 85,  173 => 65,  168 => 72,  164 => 42,  162 => 82,  154 => 58,  149 => 57,  147 => 73,  144 => 49,  141 => 70,  133 => 65,  130 => 62,  125 => 44,  122 => 49,  116 => 54,  112 => 43,  109 => 50,  106 => 45,  103 => 37,  99 => 46,  95 => 42,  92 => 42,  86 => 35,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 20,  51 => 19,  48 => 9,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 3,  30 => 3,);
    }
}
