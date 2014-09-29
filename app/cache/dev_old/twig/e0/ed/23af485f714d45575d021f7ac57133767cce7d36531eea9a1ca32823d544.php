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
        echo "\t        </tbody>
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
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
";
        // line 109
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
        return array (  229 => 109,  225 => 108,  211 => 96,  200 => 91,  192 => 90,  187 => 88,  183 => 87,  179 => 86,  176 => 85,  172 => 84,  153 => 68,  142 => 60,  134 => 55,  128 => 52,  122 => 49,  115 => 45,  107 => 40,  99 => 35,  92 => 31,  85 => 27,  81 => 26,  73 => 21,  68 => 19,  56 => 10,  50 => 9,  46 => 7,  43 => 6,  37 => 4,  32 => 3,  29 => 2,);
    }
}
