<?php

/* ::base.html.twig */
class __TwigTemplate_bed2a3d1f35d4e236a9bb26ae2f99f849f50ba1ff699eb51a158067f9e44325f extends Twig_Template
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
        return array (  160 => 40,  152 => 17,  146 => 5,  129 => 69,  100 => 51,  90 => 38,  65 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 48,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 14,  87 => 25,  28 => 3,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 42,  166 => 45,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 14,  93 => 28,  88 => 6,  78 => 32,  27 => 4,  38 => 6,  44 => 10,  25 => 4,  21 => 2,  31 => 4,  24 => 1,  46 => 7,  26 => 6,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 9,  37 => 10,  22 => 2,  246 => 32,  157 => 39,  145 => 46,  139 => 45,  131 => 42,  123 => 41,  120 => 40,  115 => 61,  111 => 37,  108 => 57,  101 => 32,  98 => 48,  96 => 31,  83 => 34,  74 => 22,  66 => 20,  55 => 15,  52 => 15,  50 => 14,  43 => 9,  41 => 8,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 49,  176 => 64,  173 => 65,  168 => 72,  164 => 42,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 65,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 47,  92 => 39,  86 => 28,  82 => 22,  80 => 24,  73 => 19,  64 => 14,  60 => 18,  57 => 17,  54 => 10,  51 => 14,  48 => 11,  45 => 17,  42 => 10,  39 => 9,  36 => 5,  33 => 4,  30 => 5,);
    }
}
