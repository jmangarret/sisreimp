<?php

/* SistemaSisreimpBundle:RubrosTributarios:edit.html.twig */
class __TwigTemplate_7d1da781ba4bc50343b026bfef9f81bbd3f57f7a704e636ba086f4a6a93bb25c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>RubrosTributarios edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("rubrostributarios");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "SistemaSisreimpBundle:RubrosTributarios:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 43,  126 => 61,  225 => 108,  211 => 96,  200 => 91,  192 => 90,  172 => 84,  153 => 68,  134 => 66,  97 => 36,  77 => 31,  104 => 42,  70 => 29,  155 => 78,  137 => 51,  124 => 46,  84 => 30,  76 => 38,  113 => 54,  114 => 46,  58 => 24,  148 => 74,  81 => 32,  53 => 19,  160 => 40,  152 => 17,  146 => 5,  129 => 69,  100 => 37,  90 => 30,  65 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 109,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 52,  107 => 40,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 86,  159 => 61,  143 => 57,  135 => 53,  119 => 48,  102 => 46,  71 => 24,  67 => 22,  63 => 21,  59 => 20,  87 => 30,  28 => 3,  94 => 34,  89 => 34,  85 => 38,  75 => 27,  68 => 19,  56 => 26,  201 => 92,  196 => 90,  183 => 87,  171 => 42,  166 => 45,  163 => 62,  158 => 67,  156 => 62,  151 => 63,  142 => 60,  138 => 54,  136 => 52,  121 => 46,  117 => 45,  105 => 38,  91 => 41,  62 => 23,  49 => 14,  93 => 35,  88 => 38,  78 => 34,  27 => 4,  38 => 6,  44 => 10,  25 => 4,  21 => 2,  31 => 4,  24 => 1,  46 => 17,  26 => 6,  19 => 1,  79 => 28,  72 => 24,  69 => 29,  47 => 18,  40 => 9,  37 => 4,  22 => 2,  246 => 32,  157 => 39,  145 => 46,  139 => 56,  131 => 48,  123 => 58,  120 => 43,  115 => 45,  111 => 39,  108 => 39,  101 => 37,  98 => 45,  96 => 33,  83 => 26,  74 => 26,  66 => 24,  55 => 21,  52 => 20,  50 => 18,  43 => 6,  41 => 8,  35 => 6,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 88,  182 => 49,  176 => 85,  173 => 65,  168 => 72,  164 => 42,  162 => 82,  154 => 58,  149 => 57,  147 => 73,  144 => 49,  141 => 70,  133 => 65,  130 => 62,  125 => 44,  122 => 49,  116 => 54,  112 => 43,  109 => 50,  106 => 50,  103 => 37,  99 => 40,  95 => 42,  92 => 35,  86 => 35,  82 => 28,  80 => 29,  73 => 30,  64 => 22,  60 => 22,  57 => 23,  54 => 20,  51 => 19,  48 => 19,  45 => 17,  42 => 10,  39 => 10,  36 => 7,  33 => 4,  30 => 5,);
    }
}
