<?php

/* ::abm.html.twig */
class __TwigTemplate_b4f4f19f26ee0750b60023d2518c2334f213b1c8eabd33b9933bd9bb1ddf14ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::abm.html.twig");

        $this->blocks = array(
            'menulateral' => array($this, 'block_menulateral'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::abm.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menulateral($context, array $blocks = array())
    {
        echo "               
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::abm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  29 => 3,);
    }
}
