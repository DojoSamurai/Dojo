<?php

/* DojoFrontendBundle:Default:alumnos.html.twig */
class __TwigTemplate_31d336f3c50e8ba757657807ea9a7bc202db62b96a4fe853ca2ad57949f7420f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DojoLoginBundle::layout.html.twig");

        $this->blocks = array(
            'mensajes' => array($this, 'block_mensajes'),
            'alertas' => array($this, 'block_alertas'),
            'usuario' => array($this, 'block_usuario'),
            'menulateral' => array($this, 'block_menulateral'),
            'indice' => array($this, 'block_indice'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DojoLoginBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_mensajes($context, array $blocks = array())
    {
        // line 4
        echo "<li class=\"message-preview\">
    <a href=\"#\">
        <div class=\"media\">
            <span class=\"pull-left\">
                <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
            </span>
            <div class=\"media-body\">
                <h5 class=\"media-heading\"><strong>John Smith</strong>
                </h5>
                <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                <p>Lorem ipsum dolor sit amet, consectetur...</p>
            </div>
        </div>
    </a>
</li>
<li class=\"message-preview\">
    <a href=\"#\">
        <div class=\"media\">
            <span class=\"pull-left\">
                <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
            </span>
            <div class=\"media-body\">
                <h5 class=\"media-heading\"><strong>John Smith</strong>
                </h5>
                <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                <p>Lorem ipsum dolor sit amet, consectetur...</p>
            </div>
        </div>
    </a>
</li>
<li class=\"message-preview\">
    <a href=\"#\">
        <div class=\"media\">
            <span class=\"pull-left\">
                <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
            </span>
            <div class=\"media-body\">
                <h5 class=\"media-heading\"><strong>John Smith</strong>
                </h5>
                <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                <p>Lorem ipsum dolor sit amet, consectetur...</p>
            </div>
        </div>
    </a>
</li>
";
    }

    // line 51
    public function block_alertas($context, array $blocks = array())
    {
    }

    // line 54
    public function block_usuario($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "html", null, true);
        echo "
";
    }

    // line 58
    public function block_menulateral($context, array $blocks = array())
    {
        // line 59
        echo "<li>
    <a href=\"forms.html\"><i class=\"fa fa-fw fa-university\"></i> Establecimiento</a>
</li>
<li>
    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#demo\"><i class=\"fa fa-fw fa-suitcase\"></i> Asignaturas <i class=\"fa fa-fw fa-caret-down\"></i></a>
    <ul id=\"demo\" class=\"collapse\">
        ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["asignaturas"]) ? $context["asignaturas"] : $this->getContext($context, "asignaturas")));
        foreach ($context['_seq'] as $context["_key"] => $context["asignatura"]) {
            // line 66
            echo "        <li>
            <a href=\"#\"><i class=\"fa fa-fw fa-bookmark\"></i> ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["asignatura"], "nombre", array()), "html", null, true);
            echo "</a>
        </li>\t\t
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asignatura'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        <li>
            <a href=\"#\"><i class=\"fa fa-fw fa-plus\"></i> Crear nueva asignatura</a>
        </li>\t
    </ul>
</li>
<li>
    <a href=\"charts.html\"><i class=\"fa fa-fw fa-calendar\"></i> Calendario</a>
</li>
<li>
    <a href=\"tables.html\"><i class=\"fa fa-fw fa-folder-open\"></i> Contenido</a>
</li>
<li>
    <a href=\"bootstrap-elements.html\"><i class=\"fa fa-fw fa-envelope\"></i> Mensajes</a>
</li>    
";
    }

    // line 86
    public function block_indice($context, array $blocks = array())
    {
    }

    // line 89
    public function block_contenido($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "DojoFrontendBundle:Default:alumnos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 89,  145 => 86,  127 => 70,  118 => 67,  115 => 66,  111 => 65,  103 => 59,  100 => 58,  93 => 55,  90 => 54,  85 => 51,  36 => 4,  33 => 3,);
    }
}
