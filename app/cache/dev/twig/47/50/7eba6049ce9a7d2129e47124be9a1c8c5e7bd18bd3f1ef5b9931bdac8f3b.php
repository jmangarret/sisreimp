<?php

/* menu.html.twig */
class __TwigTemplate_47507eba6049ce9a7d2129e47124be9a1c8c5e7bd18bd3f1ef5b9931bdac8f3b extends Twig_Template
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
        echo "<html>
<head>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/superfish.css"), "html", null, true);
        echo "\" media=\"screen\">
<!--   Slide   -->
<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/slide.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/funciones.js"), "html", null, true);
        echo "\"></script>
<!--   Fin Slide   -->
<script type=\"text/javascript\">
function salir(){
\tif (confirm(\"Seguro que desea salir?\"))
\tlocation.href=\"index.php\";
}
</script>
<title></title>
</head>
<body>
<table width=85% border=0 align=center>
<tr>
<td width=10%>&nbsp;</td>
<td>
    <ul class=\"sf-menu\">
                <li class=\"current\">
                    <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("inicio_home");
        echo "\">Inicio</a>
                </li>

                <li>
                    <a>Contribuyentes</a>
                    <ul>
                         <li>
                            <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("contribuyente");
        echo "\">Administrar</a>
                        </li>

                    </ul>

                </li>

                <li>
                    <a>Rubros</a>
                    <ul>
                         <li>
                            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("rubrostributarios");
        echo "\">Administrar</a> 
                        </li>
                         <li>
                            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("tiposimpuestos");
        echo "\">Tipos de Impuestos</a> 
                        </li>
                    </ul>
                </li>

                <li>
                <a>Actividades Economicas</a>
                    <ul>
\t\t\t<li>
                            <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("ramos");
        echo "\">Ramos</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("clasificacion");
        echo "\">Clasificación</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("empresa");
        echo "\">Empresas</a>
                        </li>
\t\t\t\t\t\t<li>
                            <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("declaracion");
        echo "\">Declaracion</a>
                        </li>
\t\t\t\t\t\t<li>
                            <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("actividadesempresa");
        echo "\">AutoLiquidacion</a>
                        </li>

                        <li>
                            <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("licenciaactecon");
        echo "\">Licencias</a>
                        </li>

                  </ul>
                </li>

                <li>
                <a>Patente de Vehiculos</a>
                    <ul>
                        <li>
                            <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("tipovehiculo");
        echo "\">Tipos de Veh&iacute;culos</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("vehiculos");
        echo "\">Vehiculos</a> 
                        </li>
                        <li>
                            <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("patentevehiculo");
        echo "\">Patentes</a>
                        </li>

                  </ul>
                </li>
                
                <li>
                <a>Espectaculos  Publicos</a>
                    <ul>
                        <li>
                             <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("espectaculos");
        echo "\">Administrar</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("espectaculos");
        echo "\">Generar Impuesto</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("impespectaculosgratuitos");
        echo "\">Imp. Entrada Gratuita</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("impcobroentradas");
        echo "\">Imp. Pago de Entradas</a>
                        </li>
                  </ul>
                </li>
                      

                <li>
                    <a>Facturacion</a>
                    <ul>
                        <li>
                            <a href=\"formFactura.php\">Generar Factura</a>
                        </li>
                        <li>
                            <a href=\"buscarFactura.php\">Consultar</a>
                        </li>
                        <li>
                            <a href=\"anularFactura.php\">Anular</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a>Utilidades</a>
                    <ul>
                        <li>
                            <a href=\"cambiar_clave.php\">Cambio de Clave</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("usuarios");
        echo "\">Administrar Usuarios</a>
                        </li>
                    </ul>
                </li>           

           </ul>
    </td>    
    <td>&nbsp;</td>
</tr>
</table>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 132,  181 => 104,  175 => 101,  169 => 98,  163 => 95,  150 => 85,  144 => 82,  138 => 79,  125 => 69,  112 => 62,  106 => 59,  94 => 53,  82 => 44,  76 => 41,  62 => 30,  52 => 23,  32 => 6,  23 => 3,  19 => 1,  182 => 49,  179 => 48,  171 => 42,  166 => 45,  164 => 42,  160 => 40,  157 => 39,  152 => 17,  146 => 5,  129 => 69,  122 => 65,  115 => 61,  108 => 57,  100 => 56,  98 => 48,  95 => 47,  92 => 39,  90 => 38,  83 => 34,  78 => 32,  65 => 22,  57 => 17,  48 => 11,  44 => 10,  40 => 9,  35 => 7,  30 => 5,  24 => 1,  143 => 57,  136 => 52,  124 => 46,  118 => 65,  111 => 39,  105 => 38,  101 => 37,  97 => 36,  93 => 35,  89 => 34,  85 => 33,  81 => 32,  77 => 31,  73 => 30,  69 => 29,  63 => 28,  60 => 27,  56 => 26,  31 => 4,  28 => 5,);
    }
}
