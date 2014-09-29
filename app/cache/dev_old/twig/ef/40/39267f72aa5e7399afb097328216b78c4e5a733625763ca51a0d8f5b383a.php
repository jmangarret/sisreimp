<?php

/* ::base.html.twig */
class __TwigTemplate_ef4039267f72aa5e7399afb097328216b78c4e5a733625763ca51a0d8f5b383a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'mensaje' => array($this, 'block_mensaje'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <style type=\"text/css\" title=\"currentStyle\">
        @import \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/formato.css"), "html", null, true);
        echo "\";                 
        </style>
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jqueryTooltip.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ajax.js"), "html", null, true);
        echo "\"></script>                
        <script>
        function abrirSubVentana(url){  
            window.open(url,'','titlebars=0, toolbar=0,scrollbars=1,location=no,directories=no,statusbar=0,menubar=0,resizable=0,width=700,height=400,top=200,left=300');   
        }
        </script>        
        ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        echo "        
    </head>
    <body>        
        <table width=\"100%\" border=\"0\">
          <tr>
            <th width=\"100%\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cintillo.png"), "html", null, true);
        echo "\" /></th>
          </tr>
          <tr>
            <td width=\"100%\">
      
            </td>
          </tr>
        </table>
        <table align=center width=\"80%\" border=\"0\">
            <tr>
            <td align=left><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/home.jpg"), "html", null, true);
        echo "\"> <b>Usuario:</b> </td> 
            <td align=right>
                <a href='salir.php' class='tooltip' title='Cerrar Sesion'><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logout.gif"), "html", null, true);
        echo "\"><b>Salir</b></a> 
            </td>
            </tr>
        </table>
        ";
        // line 38
        $this->env->loadTemplate("menu.html.twig")->display($context);
        // line 39
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "        
        ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "        <table align=center width=\"80%\" border=\"0\">
            <tr>
            <td align=\"center\">
                <div align=\"center\" id=\"piedepagina\">
                <p align=\"center\">
                    <a href=\"http://www.apache.org/\">
                        <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apache_pb.gif"), "html", null, true);
        echo "\" alt=\"Powered by Apache\" align=\"BOTTOM\" border=\"0\" height=\"40\" hspace=\"10\" width=\"200\">
                    </a>
                    &nbsp;&nbsp;
                    <a href=\"http://www.postgresql.org/\">
                        <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/postgres.gif"), "html", null, true);
        echo "\" alt=\"PostgreSQL\" align=\"BOTTOM\" border=\"0\" height=\"40\" hspace=\"10\" width=\"167\">
                    </a>
                    &nbsp;&nbsp;
                    <a href=\"http://www.php.net/\">
                        <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/linux-php.jpg"), "html", null, true);
        echo "\" alt=\"PHP\" align=\"BOTTOM\" border=\"0\" height=\"40\" hspace=\"10\" width=\"88\">
                    </a>
                    &nbsp;&nbsp;
                    <a href=\"http://www.symfony.org/\">
                        <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/symfony.png"), "html", null, true);
        echo "\" alt=\"symfony\" align=\"BOTTOM\" border=\"0\" height=\"40\" hspace=\"10\" width=\"180\">
                    </a>
                </p>
                <div align=\"center\" class=\"fondorojo\">
                CopyLeft 2014 - Alcaldia Bolivariana del Municipio Santos Michelena - Estado Aragua
                </div>
                </div>
            </td>
            </tr>
        </table>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 40
        echo "            

            ";
        // line 42
        $this->displayBlock('mensaje', $context, $blocks);
        // line 45
        echo "
        ";
    }

    // line 42
    public function block_mensaje($context, array $blocks = array())
    {
        echo "  

            ";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 49,  179 => 48,  171 => 42,  166 => 45,  164 => 42,  160 => 40,  157 => 39,  152 => 17,  146 => 5,  129 => 69,  122 => 65,  115 => 61,  108 => 57,  100 => 51,  98 => 48,  95 => 47,  92 => 39,  90 => 38,  83 => 34,  78 => 32,  65 => 22,  57 => 17,  48 => 11,  44 => 10,  40 => 9,  35 => 7,  30 => 5,  24 => 1,);
    }
}
