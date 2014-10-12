<?php

/* SistemaSisreimpBundle:Empresa:new.html.twig */
class __TwigTemplate_e0ed23af485f714d45575d021f7ac57133767cce7d36531eea9a1ca32823d544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "     
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/modal.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />    
\t";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<h3 align=\"center\">REGISTRO DE EMPRESAS</h3>

<form name=\"sistema_sisreimpbundle_empresa\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("empresa_create");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t<table align=\"center\" width=\"60%\" class=\"recuadro\">
\t<tr>
\t<td>
\t\t<table align=\"center\" align=\"center\" border=\"0\" >
\t\t<tr>
\t\t\t<td>Contribuyente</td>
\t\t\t<td>
\t\t\t<input type=\"text\" name=\"contribuyenteNombre\" readonly=\"true\">
\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contribuyenteId"), 'widget');
        echo "(*)
\t\t\t<!-- #dialog es el id de un DIV definido en el código que está a continuación -->
        \t<a href=\"#vmodal\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/b_search.png"), "html", null, true);
        echo "\"></a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Rif de la Empresa</td>
\t\t\t<td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rif"), 'widget');
        echo "(*)
\t\t\t<img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ayuda.gif"), "html", null, true);
        echo "\" class=\"tooltip\"  title=\"El formato permitido es (V,J,G)-12345678-0. Debe ser un Rif valido.\">
\t\t\t</td>
\t\t<tr>
\t\t\t<td>Raz&oacute;n Social</td>
\t\t\t<td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "razonSocial"), 'widget');
        echo "(*)</td>
\t\t\t<tr>
\t\t\t<td>Tipo de Contribuyente</td>
\t\t\t<td>
\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoContribuyente"), 'widget');
        echo "(*)
\t\t\t</td>
\t\t<tr>
\t\t\t<td>Organizaci&oacute;n Econ&oacute;mica</td>
\t\t\t<td>
\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizacionEconomica"), 'widget');
        echo "(*)
\t\t\t</td>
\t\t\t<tr>
\t\t\t<td>Organizaci&oacute;n Jur&iacute;dica</td>
\t\t\t<td>
\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizacionJuridica"), 'widget');
        echo "(*)
\t\t\t</td>
\t\t<tr>
\t\t\t<td>Representante Legal</td>
\t\t\t<td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "representanteLegal"), 'widget');
        echo "(*)</td>
\t\t<tr>
\t\t\t<td>Direcci&oacute;n/Ubicaci&oacute;n</td>
\t\t\t<td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion"), 'widget');
        echo "(*)</td>
\t\t<tr>
\t\t\t<td>Tel&eacute;fono</td>
\t\t\t<td>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonos"), 'widget');
        echo "(*)</td>
\t\t
\t\t<tr>
\t\t\t<td colspan=\"2\" align=\"center\">\t\t\t
\t\t\t<button type=\"submit\" name=\"enviar\">Enviar</button>
\t\t\t<a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("empresa");
        echo "\"><input type=\"button\" name=\"volver\" value=\"Volver\"></a>
\t\t\t</td>
\t\t</tr>
\t\t</table>
\t</td>
\t</tr>
\t</table>
\t<div align=\"center\">
\t\t<img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/info.jpg"), "html", null, true);
        echo "\">Los campos con (*) deben ser llenados obligatoriamente. 
\t</div>

\t<div id=\"vmodal\" class=\"modalmask\">
\t\t<div class=\"modalbox resize\">
\t   \t<h3 align=\"center\">Listado Contribuyentes</h3>
\t    <table class=\"recuadro\" align=\"center\" border=\"0\" cellspacing=\"0\" cellpanding=\"0\">
\t        <thead>
\t            <tr>
\t                <th>Rif</th>
\t                <th>Nombre</th>
\t                <th>Telefono</th>
\t                <th>Seleccionar</th>
\t            </tr>
\t        </thead>
\t        <tbody>
\t        ";
        // line 84
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contrib"]) ? $context["contrib"] : $this->getContext($context, "contrib")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 85
            echo "\t            <tr>
\t                <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "rif"), "html", null, true);
            echo "</td>
\t                <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "nombre"), "html", null, true);
            echo "</td>
\t                <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "telefono"), "html", null, true);
            echo "</td>
\t                <td align=\"center\">
\t                    <a href=\"#close\" class=\"close\" title=\"Seleccionar\" onclick=\"seleccionar(";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "id"), "html", null, true);
            echo ", '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "rif"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "nombre"), "html", null, true);
            echo "')\">
\t                    \t<img src=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/okey.png"), "html", null, true);
            echo "\">
\t                    </a>
\t                </td>
\t            </tr>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "\t        <tr><td align=\"center\"><a href=\"javascript:window.close()\">Cerrar</a></td></tr>
\t        </tbody>
\t    </table>
\t\t</div>
\t</div>\t\t
\t<script>
\t\tfunction seleccionar(id, rif, nombre){
\t\t\tdocument.getElementById(\"sistema_sisreimpbundle_empresa_contribuyenteId\").value=id;
\t\t\tdocument.getElementById(\"sistema_sisreimpbundle_empresa_rif\").value=rif;
\t\t\tdocument.sistema_sisreimpbundle_empresa.contribuyenteNombre.value=nombre;
\t\t\treturn true;
\t\t}
\t</script>
";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>
<p><br><br><br></p>
";
    }

    public function getTemplateName()
    {
        return "SistemaSisreimpBundle:Empresa:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 109,  211 => 96,  200 => 91,  192 => 90,  172 => 84,  153 => 68,  97 => 37,  77 => 25,  104 => 42,  70 => 29,  155 => 78,  137 => 51,  124 => 44,  84 => 30,  76 => 38,  113 => 54,  114 => 46,  58 => 24,  134 => 55,  126 => 61,  81 => 26,  53 => 18,  160 => 40,  152 => 17,  146 => 5,  129 => 69,  100 => 37,  90 => 30,  65 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 52,  107 => 40,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 110,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 86,  159 => 61,  143 => 56,  135 => 53,  119 => 48,  102 => 39,  71 => 24,  67 => 26,  63 => 21,  59 => 20,  87 => 30,  28 => 3,  94 => 34,  89 => 32,  85 => 27,  75 => 27,  68 => 19,  56 => 10,  201 => 92,  196 => 90,  183 => 87,  171 => 42,  166 => 45,  163 => 62,  158 => 67,  156 => 62,  151 => 63,  142 => 60,  138 => 54,  136 => 56,  121 => 46,  117 => 45,  105 => 39,  91 => 41,  62 => 23,  49 => 14,  93 => 28,  88 => 38,  78 => 34,  27 => 4,  38 => 6,  44 => 10,  25 => 4,  21 => 2,  31 => 4,  24 => 1,  46 => 7,  26 => 6,  19 => 1,  79 => 28,  72 => 24,  69 => 24,  47 => 18,  40 => 9,  37 => 4,  22 => 2,  246 => 32,  157 => 39,  145 => 46,  139 => 56,  131 => 48,  123 => 58,  120 => 43,  115 => 45,  111 => 37,  108 => 39,  101 => 32,  98 => 45,  96 => 33,  83 => 26,  74 => 30,  66 => 24,  55 => 21,  52 => 20,  50 => 9,  43 => 6,  41 => 8,  35 => 6,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 88,  182 => 49,  176 => 85,  173 => 65,  168 => 72,  164 => 42,  162 => 82,  154 => 58,  149 => 57,  147 => 73,  144 => 49,  141 => 70,  133 => 55,  130 => 62,  125 => 44,  122 => 49,  116 => 42,  112 => 43,  109 => 44,  106 => 50,  103 => 37,  99 => 35,  95 => 35,  92 => 31,  86 => 35,  82 => 28,  80 => 29,  73 => 21,  64 => 22,  60 => 22,  57 => 23,  54 => 20,  51 => 19,  48 => 19,  45 => 17,  42 => 10,  39 => 10,  36 => 7,  33 => 4,  30 => 5,);
    }
}
