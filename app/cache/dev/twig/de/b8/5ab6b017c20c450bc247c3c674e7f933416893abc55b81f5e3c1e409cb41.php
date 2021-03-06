<?php

/* ::menu.html.twig */
class __TwigTemplate_deb85ab6b017c20c450bc247c3c674e7f933416893abc55b81f5e3c1e409cb41 extends Twig_Template
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
        return "::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  643 => 120,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  524 => 90,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  478 => 74,  470 => 73,  467 => 72,  464 => 71,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  433 => 60,  428 => 59,  426 => 58,  414 => 52,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  366 => 33,  316 => 16,  313 => 15,  311 => 14,  299 => 8,  271 => 374,  266 => 366,  260 => 363,  250 => 341,  245 => 335,  215 => 280,  186 => 239,  350 => 26,  308 => 13,  20 => 1,  34 => 4,  357 => 123,  344 => 24,  332 => 20,  327 => 114,  324 => 113,  318 => 111,  306 => 286,  297 => 104,  291 => 102,  263 => 365,  231 => 83,  212 => 132,  190 => 76,  161 => 202,  389 => 160,  386 => 159,  378 => 157,  371 => 35,  367 => 339,  363 => 32,  358 => 151,  353 => 328,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 112,  307 => 128,  302 => 125,  296 => 121,  293 => 6,  290 => 5,  288 => 4,  281 => 388,  276 => 381,  274 => 97,  265 => 96,  259 => 103,  255 => 353,  253 => 342,  232 => 88,  222 => 297,  210 => 270,  184 => 233,  175 => 101,  174 => 217,  167 => 71,  810 => 492,  807 => 491,  796 => 183,  792 => 488,  788 => 486,  775 => 485,  749 => 162,  746 => 161,  727 => 476,  710 => 149,  706 => 473,  702 => 472,  698 => 471,  694 => 138,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 122,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 92,  527 => 91,  522 => 406,  517 => 404,  202 => 266,  188 => 76,  170 => 56,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 50,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  351 => 120,  348 => 140,  342 => 23,  338 => 135,  335 => 21,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 110,  303 => 106,  300 => 105,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 336,  233 => 304,  226 => 84,  216 => 79,  213 => 78,  207 => 269,  197 => 249,  194 => 248,  191 => 246,  185 => 74,  181 => 104,  178 => 59,  165 => 83,  150 => 85,  110 => 38,  127 => 35,  118 => 65,  126 => 147,  225 => 298,  211 => 96,  200 => 72,  192 => 90,  172 => 57,  153 => 69,  134 => 161,  97 => 41,  77 => 25,  104 => 90,  70 => 19,  155 => 47,  137 => 51,  124 => 132,  84 => 41,  76 => 41,  113 => 40,  114 => 111,  58 => 15,  148 => 74,  81 => 30,  53 => 11,  160 => 40,  152 => 46,  146 => 181,  129 => 148,  100 => 56,  90 => 27,  65 => 17,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 111,  362 => 110,  360 => 109,  355 => 27,  341 => 118,  337 => 22,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 120,  294 => 90,  285 => 3,  283 => 100,  278 => 387,  268 => 373,  264 => 84,  258 => 354,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 290,  214 => 69,  177 => 65,  169 => 98,  140 => 55,  132 => 51,  128 => 52,  107 => 37,  61 => 2,  273 => 380,  269 => 107,  254 => 92,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 77,  219 => 76,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 62,  119 => 117,  102 => 30,  71 => 19,  67 => 16,  63 => 21,  59 => 17,  87 => 26,  28 => 5,  94 => 53,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 14,  201 => 92,  196 => 92,  183 => 87,  171 => 216,  166 => 209,  163 => 95,  158 => 80,  156 => 195,  151 => 188,  142 => 60,  138 => 79,  136 => 168,  121 => 131,  117 => 39,  105 => 25,  91 => 29,  62 => 30,  49 => 12,  93 => 28,  88 => 28,  78 => 24,  27 => 7,  38 => 5,  44 => 8,  25 => 35,  21 => 2,  31 => 5,  24 => 3,  46 => 10,  26 => 3,  19 => 1,  79 => 32,  72 => 21,  69 => 21,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 96,  157 => 39,  145 => 52,  139 => 169,  131 => 160,  123 => 61,  120 => 31,  115 => 40,  111 => 110,  108 => 33,  101 => 89,  98 => 29,  96 => 67,  83 => 30,  74 => 20,  66 => 12,  55 => 12,  52 => 23,  50 => 10,  43 => 9,  41 => 7,  35 => 4,  32 => 6,  29 => 3,  209 => 82,  203 => 73,  199 => 265,  193 => 73,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 43,  144 => 82,  141 => 175,  133 => 65,  130 => 46,  125 => 69,  122 => 41,  116 => 116,  112 => 62,  109 => 105,  106 => 59,  103 => 37,  99 => 68,  95 => 34,  92 => 31,  86 => 46,  82 => 44,  80 => 24,  73 => 23,  64 => 17,  60 => 6,  57 => 20,  54 => 15,  51 => 37,  48 => 10,  45 => 9,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
