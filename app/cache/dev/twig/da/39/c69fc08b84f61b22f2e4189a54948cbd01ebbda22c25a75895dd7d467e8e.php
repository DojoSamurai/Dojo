<?php

/* DojoLoginBundle:Default:login.html.twig */
class __TwigTemplate_da39c69fc08b84f61b22f2e4189a54948cbd01ebbda22c25a75895dd7d467e8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DojoLoginBundle::layout.html.twig");

        $this->blocks = array(
            'estilos' => array($this, 'block_estilos'),
            'menusuperior' => array($this, 'block_menusuperior'),
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
    public function block_estilos($context, array $blocks = array())
    {
        // line 4
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 6
    public function block_menusuperior($context, array $blocks = array())
    {
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        echo "      
   <div class=\"container\">
     ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "        <h2 class=\"form-signin-heading\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</h2>
    ";
        }
        // line 13
        echo "        <form class=\"form-signin\" action=\"";
        echo $this->env->getExtension('routing')->getPath("usuario_login_check");
        echo "\" method=\"post\">
          <h2 class=\"form-signin-heading\">Ingreso de usuarios</h2>
          <label for=\"inputEmail\" class=\"sr-only\">Email</label>
          <input type=\"name\" class=\"form-control input-lg\" placeholder=\"Email\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required autofocus>
          <label for=\"inputPassword\" class=\"sr-only\">Password</label>
          <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required>
          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" value=\"remember-me\"> Recordarme
            </label>
          </div>
          <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Login</button>
        </form>

    </div> <!-- /container -->         
";
    }

    public function getTemplateName()
    {
        return "DojoLoginBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  59 => 13,  53 => 11,  51 => 10,  45 => 8,  40 => 6,  33 => 4,  30 => 3,);
    }
}
