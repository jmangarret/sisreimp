<?php

/* SistemaSisreimpBundle:Default:index.html.twig */
class __TwigTemplate_a3567f38ae88c218ecb3caa3cf5d18cb927f3118dbc1fc549c2fa18f81d11ddd extends Twig_Template
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
        echo "<H2 align=\"center\">BIENVENIDO AL SISTEMA DE RECAUDACION DE IMPUESTOS</H2>
<H2 align=\"center\">(SISREIMP) </H2>
<p align=center>
<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/alcaldia.jpg"), "html", null, true);
        echo "\">
</p>
<div align=\"center\">\t
\t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("inicio_login");
        echo "\">
\t<button name=\"boton\" type=\"button\">
\t\t<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/entrar.png"), "html", null, true);
        echo "\" class=\"tooltip\" title=\"Click para ir al formulario de Inicio de Sesion.\">
\t</button>
\t</a>
</div>

";
    }

    public function getTemplateName()
    {
        return "SistemaSisreimpBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  42 => 10,  36 => 7,  31 => 4,  28 => 3,);
    }
}
