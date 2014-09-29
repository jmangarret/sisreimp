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

                        <li>
                            <a href=\"";
        // line 63
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
        // line 73
        echo $this->env->getExtension('routing')->getPath("tipovehiculo");
        echo "\">Tipos de Veh&iacute;culos</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("vehiculos");
        echo "\">Vehiculos</a> 
                        </li>
                        <li>
                            <a href=\"";
        // line 79
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
        // line 89
        echo $this->env->getExtension('routing')->getPath("espectaculos");
        echo "\">Administrar</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("espectaculos");
        echo "\">Generar Impuesto</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("impespectaculosgratuitos");
        echo "\">Imp. Entrada Gratuita</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 98
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
        // line 126
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
        return array (  200 => 126,  169 => 98,  163 => 95,  157 => 92,  151 => 89,  138 => 79,  132 => 76,  126 => 73,  113 => 63,  106 => 59,  100 => 56,  94 => 53,  82 => 44,  76 => 41,  62 => 30,  52 => 23,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
