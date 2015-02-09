<?php

/* DojoLoginBundle::layout.html.twig */
class __TwigTemplate_db13e290f10e0a471b646b9178f3f5b5d41ac301f6e9b028fcc85774ad4d8957 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'estilos' => array($this, 'block_estilos'),
            'barranavegacion' => array($this, 'block_barranavegacion'),
            'menusuperior' => array($this, 'block_menusuperior'),
            'mensajes' => array($this, 'block_mensajes'),
            'alertas' => array($this, 'block_alertas'),
            'usuario' => array($this, 'block_usuario'),
            'menulateral' => array($this, 'block_menulateral'),
            'itemsmenulateral' => array($this, 'block_itemsmenulateral'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"Plataforma educativa\" content=\"\">
    <meta name=\"Cristian Dominguez\" content=\"\">

    <title>Dojo</title>

    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/plugins/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 16
        $this->displayBlock('estilos', $context, $blocks);
        // line 18
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome-4.1.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>
    <div id=\"wrapper\">
        <!-- Navigation -->
        ";
        // line 31
        $this->displayBlock('barranavegacion', $context, $blocks);
        // line 94
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 100
        echo "        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/morris-data.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 108
        $this->displayBlock('scripts', $context, $blocks);
        // line 110
        echo "
</body>

</html>";
    }

    // line 16
    public function block_estilos($context, array $blocks = array())
    {
        // line 17
        echo "    ";
    }

    // line 31
    public function block_barranavegacion($context, array $blocks = array())
    {
        // line 32
        echo "        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">Dojo!</a>
            </div>
            <!-- Top Menu Items -->
            ";
        // line 44
        $this->displayBlock('menusuperior', $context, $blocks);
        // line 83
        echo "        
            ";
        // line 84
        $this->displayBlock('menulateral', $context, $blocks);
        // line 91
        echo "                    
        </nav>
        ";
    }

    // line 44
    public function block_menusuperior($context, array $blocks = array())
    {
        // line 45
        echo "            <ul class=\"nav navbar-right top-nav\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-envelope\"></i> <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu message-dropdown\">
\t\t\t";
        // line 49
        $this->displayBlock('mensajes', $context, $blocks);
        // line 51
        echo "                        <li class=\"message-footer\">
                            <a href=\"#\">Leer todos los mensajes</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu alert-dropdown\">
\t\t\t";
        // line 59
        $this->displayBlock('alertas', $context, $blocks);
        // line 61
        echo "                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">Ver todas</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> ";
        // line 68
        $this->displayBlock('usuario', $context, $blocks);
        echo "<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-user\"></i> Datos personales</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-gear\"></i> Configuraciones</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("usuario_logout");
        echo "\"><i class=\"fa fa-fw fa-power-off\"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
            ";
    }

    // line 49
    public function block_mensajes($context, array $blocks = array())
    {
        // line 50
        echo "\t\t\t";
    }

    // line 59
    public function block_alertas($context, array $blocks = array())
    {
        // line 60
        echo "\t\t\t";
    }

    // line 68
    public function block_usuario($context, array $blocks = array())
    {
    }

    // line 84
    public function block_menulateral($context, array $blocks = array())
    {
        // line 85
        echo "            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">
                  ";
        // line 87
        $this->displayBlock('itemsmenulateral', $context, $blocks);
        // line 88
        echo "      
                </ul>
            </div>                    
            ";
    }

    // line 87
    public function block_itemsmenulateral($context, array $blocks = array())
    {
        // line 88
        echo "                  ";
    }

    // line 94
    public function block_body($context, array $blocks = array())
    {
        // line 95
        echo "        <div id=\"page-wrapper\">
        ";
        // line 96
        $this->displayBlock('contenido', $context, $blocks);
        // line 98
        echo "        </div>
        ";
    }

    // line 96
    public function block_contenido($context, array $blocks = array())
    {
        // line 97
        echo "        ";
    }

    // line 108
    public function block_scripts($context, array $blocks = array())
    {
        // line 109
        echo "    ";
    }

    public function getTemplateName()
    {
        return "DojoLoginBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 109,  268 => 108,  264 => 97,  261 => 96,  256 => 98,  254 => 96,  251 => 95,  248 => 94,  244 => 88,  241 => 87,  234 => 88,  232 => 87,  228 => 85,  225 => 84,  220 => 68,  216 => 60,  213 => 59,  209 => 50,  206 => 49,  196 => 78,  183 => 68,  174 => 61,  172 => 59,  162 => 51,  160 => 49,  154 => 45,  151 => 44,  145 => 91,  143 => 84,  140 => 83,  138 => 44,  124 => 32,  121 => 31,  117 => 17,  114 => 16,  107 => 110,  105 => 108,  101 => 107,  97 => 106,  93 => 105,  89 => 104,  85 => 103,  80 => 100,  77 => 94,  75 => 31,  58 => 18,  56 => 16,  52 => 15,  48 => 14,  44 => 13,  30 => 1,);
    }
}
