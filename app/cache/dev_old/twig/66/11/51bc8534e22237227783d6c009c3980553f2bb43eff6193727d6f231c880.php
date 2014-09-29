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
        return array (  76 => 38,  59 => 24,  51 => 19,  43 => 14,  31 => 4,  28 => 3,);
    }
}
