<?php

/* DojoLoginBundle:Default:index.html.twig */
class __TwigTemplate_0f2e59f4d34bf18536a1d3edc4b8dff0b9c916d6d57a6ced5a7f221fc9721143 extends Twig_Template
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
        // line 1
        if ($this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        echo " 
       <div class=\"container\">
            <h2 class=\"form-signin-heading\">Usuario logueado correctamente!</h2>
        </div> <!-- /container -->      
    ";
    }

    public function getTemplateName()
    {
        return "DojoLoginBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }
}
