<?php

/* SistemaSisreimpBundle:Default:login.html.twig */
class __TwigTemplate_661151bc8534e22237227783d6c009c3980553f2bb43eff6193727d6f231c880 extends Twig_Template
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
        echo "<table align=\"center\" width=\"40%\">
  <tr>
    <th>
    <h3>INICIO DE SESION</h3>
    </th>
  </tr>
</table>
<form action=\"autenticar.php\" method=\"post\">
\t<table align=\"center\" width=\"40%\" class=\"recuadro\">
        <tr>
\t\t<td align=\"right\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/user.png"), "html", null, true);
        echo "\"></td>
          <td><b>Usuario:</b></td>
          <td><input type=\"text\" name=\"login\" size=\"15\" /></td>
        </tr>
        <tr>
        <td align=\"right\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/candado.png"), "html", null, true);
        echo "\"></td>
          <td><b>Contrase&ntilde;a:</b></td>
          <td><input type=\"password\" name=\"clave\" size=\"15\" /></td>
        </tr>
        <tr>
        <td align=\"right\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ok2.png"), "html", null, true);
        echo "\"></td>
          <td>       
              <label for=\"usercheck\"><b>Verificaci&oacute;n:</b></label>   
          </td>
          <td>      
          </td>
        </tr>
        <tr>
        <td colspan=\"3\" align=\"center\">
          <input name=\"submit\" type=\"submit\" value=\"Enviar\" />
        </td>
        </tr>
\t</table>\t
</form>
<div align=\"center\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ayuda.gif"), "html", null, true);
        echo "\">
\tOlvid&oacute; su Contrase&ntilde;a? Para generar una nueva, haga click <a href=\"\">aqui!</a>
</div>
<p><br><br></p>
<p><br><br></p>
<p><br><br></p>
<p><br><br></p>
<p><br><br></p>

";
    }

    public function getTemplateName()
    {
        return "SistemaSisreimpBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 37,  77 => 33,  104 => 42,  70 => 23,  155 => 78,  137 => 51,  124 => 44,  84 => 30,  76 => 38,  113 => 54,  114 => 46,  58 => 24,  134 => 66,  126 => 61,  81 => 34,  53 => 18,  160 => 40,  152 => 17,  146 => 5,  129 => 69,  100 => 37,  90 => 38,  65 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 41,  61 => 29,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 48,  159 => 61,  143 => 56,  135 => 53,  119 => 48,  102 => 46,  71 => 26,  67 => 25,  63 => 24,  59 => 24,  87 => 30,  28 => 3,  94 => 34,  89 => 32,  85 => 38,  75 => 27,  68 => 23,  56 => 22,  201 => 92,  196 => 90,  183 => 82,  171 => 42,  166 => 45,  163 => 62,  158 => 67,  156 => 62,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 45,  105 => 39,  91 => 41,  62 => 23,  49 => 14,  93 => 28,  88 => 38,  78 => 27,  27 => 4,  38 => 6,  44 => 10,  25 => 4,  21 => 2,  31 => 4,  24 => 1,  46 => 14,  26 => 6,  19 => 1,  79 => 28,  72 => 24,  69 => 25,  47 => 12,  40 => 9,  37 => 10,  22 => 2,  246 => 32,  157 => 39,  145 => 46,  139 => 56,  131 => 48,  123 => 58,  120 => 43,  115 => 61,  111 => 37,  108 => 40,  101 => 32,  98 => 45,  96 => 37,  83 => 29,  74 => 30,  66 => 24,  55 => 23,  52 => 15,  50 => 21,  43 => 14,  41 => 8,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 49,  176 => 64,  173 => 65,  168 => 72,  164 => 42,  162 => 82,  154 => 58,  149 => 57,  147 => 73,  144 => 49,  141 => 70,  133 => 55,  130 => 62,  125 => 44,  122 => 65,  116 => 42,  112 => 43,  109 => 50,  106 => 50,  103 => 37,  99 => 37,  95 => 35,  92 => 42,  86 => 35,  82 => 28,  80 => 29,  73 => 19,  64 => 22,  60 => 22,  57 => 23,  54 => 22,  51 => 19,  48 => 11,  45 => 17,  42 => 10,  39 => 10,  36 => 7,  33 => 4,  30 => 5,);
    }
}
