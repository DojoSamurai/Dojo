<?php

/* DojoBackendBundle:Asignaturas:index.html.twig */
class __TwigTemplate_ef0d654785245f2ff5c720a4ff2c289acf74ef5fe753865e08e3bf404c5a9709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DojoLoginBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'itemsmenulateral' => array($this, 'block_itemsmenulateral'),
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
        echo "<h1>Listado de Asignaturas</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asignaturas_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asignaturas_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-pencil-square-o\"></i></a>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asignaturas_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-trash-o\"></i></a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>
";
    }

    // line 35
    public function block_itemsmenulateral($context, array $blocks = array())
    {
        // line 36
        echo "<li>
    <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("asignaturas_new");
        echo "\"><i class=\"fa fa-fw fa-plus-square \"></i> Crear nueva</a>
</li>
";
    }

    public function getTemplateName()
    {
        return "DojoBackendBundle:Asignaturas:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  95 => 36,  92 => 35,  86 => 31,  74 => 25,  70 => 24,  63 => 20,  59 => 19,  53 => 18,  50 => 17,  46 => 16,  32 => 4,  29 => 3,);
    }
}
