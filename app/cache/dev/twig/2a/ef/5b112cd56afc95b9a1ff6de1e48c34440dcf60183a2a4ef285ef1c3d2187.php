<?php

/* DojoBackendBundle:Modulos:index.html.twig */
class __TwigTemplate_2aef5b112cd56afc95b9a1ff6de1e48c34440dcf60183a2a4ef285ef1c3d2187 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DojoLoginBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">Listado de Módulos</h3>
  </div>
  <div class=\"panel-body\">
    <div class=\"table-responsive\">
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Asignatura</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "                <tr>
                    <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulos_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "asignaturaID", array()), "html", null, true);
            echo "</td>
                    <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulos_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Ver</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modulos_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Editar</a>
                        </li>
                    </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </tbody>
        </table>
    </div>  
  </div>            
</div>               
<div class=\"btn-group btn-group-lg\">
         
    <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("modulos_new");
        echo "\">
        Crear un nuevo Modulo
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "DojoBackendBundle:Modulos:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 44,  91 => 37,  79 => 31,  73 => 28,  66 => 24,  62 => 23,  56 => 22,  53 => 21,  49 => 20,  31 => 4,  28 => 3,);
    }
}
