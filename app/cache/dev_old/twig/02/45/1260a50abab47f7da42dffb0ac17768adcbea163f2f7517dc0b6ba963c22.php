<?php

/* VehiculosVehiculosBundle:PatenteVehiculo:show.html.twig */
class __TwigTemplate_02451260a50abab47f7da42dffb0ac17768adcbea163f2f7517dc0b6ba963c22 extends Twig_Template
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
        echo "<h1>PatenteVehiculo</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idvehiculo</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idVehiculo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fecha"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("patentevehiculo");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patentevehiculo_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "VehiculosVehiculosBundle:PatenteVehiculo:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 42,  97 => 37,  77 => 33,  114 => 42,  58 => 26,  134 => 66,  126 => 61,  81 => 34,  53 => 18,  160 => 40,  152 => 17,  146 => 5,  129 => 69,  100 => 51,  90 => 38,  65 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 38,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 48,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 46,  71 => 29,  67 => 26,  63 => 15,  59 => 14,  87 => 33,  28 => 3,  94 => 28,  89 => 20,  85 => 38,  75 => 30,  68 => 23,  56 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 42,  166 => 45,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 34,  62 => 23,  49 => 14,  93 => 28,  88 => 38,  78 => 32,  27 => 4,  38 => 6,  44 => 10,  25 => 4,  21 => 2,  31 => 4,  24 => 1,  46 => 14,  26 => 6,  19 => 1,  79 => 28,  72 => 24,  69 => 25,  47 => 18,  40 => 9,  37 => 10,  22 => 2,  246 => 32,  157 => 39,  145 => 46,  139 => 56,  131 => 42,  123 => 41,  120 => 45,  115 => 61,  111 => 37,  108 => 57,  101 => 32,  98 => 48,  96 => 31,  83 => 32,  74 => 30,  66 => 20,  55 => 15,  52 => 15,  50 => 14,  43 => 9,  41 => 8,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 49,  176 => 64,  173 => 65,  168 => 72,  164 => 42,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 70,  133 => 55,  130 => 41,  125 => 44,  122 => 65,  116 => 54,  112 => 42,  109 => 50,  106 => 36,  103 => 37,  99 => 36,  95 => 35,  92 => 42,  86 => 28,  82 => 22,  80 => 24,  73 => 19,  64 => 22,  60 => 22,  57 => 17,  54 => 20,  51 => 19,  48 => 11,  45 => 17,  42 => 10,  39 => 10,  36 => 5,  33 => 4,  30 => 5,);
    }
}
