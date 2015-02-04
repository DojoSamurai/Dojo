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
 
        <form class=\"form-signin\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("dojo_login_check");
        echo "\" method=\"post\">
          <h2 class=\"form-signin-heading\">Ingreso de usuarios</h2>
          <label for=\"inputEmail\" class=\"sr-only\">Email</label>
          <input type=\"email\" class=\"form-control input-lg\" placeholder=\"Email\" id=\"username\" name=\"_username\" value=\"";
        // line 15
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
    
        <!--div class=\"container\">    
        <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">                    
            <div class=\"panel panel-info\" >
                    <div class=\"panel-heading\">
                        <div class=\"panel-title\">Ingreso de usuarios</div>
                        <div style=\"float:right; font-size: 80%; position: relative; top:-10px\"><a href=\"#\">Recordar el password</a></div>
                    </div>     

                    <div style=\"padding-top:30px\" class=\"panel-body\" >

                        <div style=\"display:none\" id=\"login-alert\" class=\"alert alert-danger col-sm-12\"></div>
                            
                        <form id=\"loginform\" class=\"form-horizontal\" role=\"form\">
                                    
                            <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                        <input id=\"login-username\" type=\"text\" class=\"form-control\" name=\"username\" value=\"\" placeholder=\"Email\">                                        
                                    </div>
                                
                            <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                                        <input id=\"login-password\" type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Password\">
                                    </div>
                                    

                                
                            <div class=\"input-group\">
                                      <div class=\"checkbox\">
                                        <label>
                                          <input id=\"login-remember\" type=\"checkbox\" name=\"remember\" value=\"1\"> Recordarme
                                        </label>
                                      </div>
                                    </div>


                                <div style=\"margin-top:10px\" class=\"form-group\">


                                    <div class=\"col-sm-12 controls\">
                                      <a id=\"btn-login\" href=\"#\" class=\"btn btn-success\">Ingresar  </a>
                                      <a id=\"btn-fblogin\" href=\"#\" class=\"btn btn-primary\">Ingresar con Facebook</a>

                                    </div>
                                </div>


                                <div class=\"form-group\">
                                    <div class=\"col-md-12 control\">
                                        <div style=\"border-top: 1px solid#888; padding-top:15px; font-size:85%\" >
                                            No eres usuario! 
                                        <a href=\"#\" onClick=\"\$('#loginbox').hide(); \$('#signupbox').show()\">
                                            Crear una cuenta aquí
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
        <div id=\"signupbox\" style=\"display:none; margin-top:50px\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading\">
                            <div class=\"panel-title\">Sign Up</div>
                            <div style=\"float:right; font-size: 85%; position: relative; top:-10px\"><a id=\"signinlink\" href=\"#\" onclick=\"\$('#signupbox').hide(); \$('#loginbox').show()\">Sign In</a></div>
                        </div>  
                        <div class=\"panel-body\" >
                            <form id=\"signupform\" class=\"form-horizontal\" role=\"form\">
                                
                                <div id=\"signupalert\" style=\"display:none\" class=\"alert alert-danger\">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class=\"form-group\">
                                    <label for=\"email\" class=\"col-md-3 control-label\">Email</label>
                                    <div class=\"col-md-9\">
                                        <input type=\"text\" class=\"form-control\" name=\"email\" placeholder=\"Email Address\">
                                    </div>
                                </div>
                                    
                                <div class=\"form-group\">
                                    <label for=\"firstname\" class=\"col-md-3 control-label\">First Name</label>
                                    <div class=\"col-md-9\">
                                        <input type=\"text\" class=\"form-control\" name=\"firstname\" placeholder=\"First Name\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"lastname\" class=\"col-md-3 control-label\">Last Name</label>
                                    <div class=\"col-md-9\">
                                        <input type=\"text\" class=\"form-control\" name=\"lastname\" placeholder=\"Last Name\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"password\" class=\"col-md-3 control-label\">Password</label>
                                    <div class=\"col-md-9\">
                                        <input type=\"password\" class=\"form-control\" name=\"passwd\" placeholder=\"Password\">
                                    </div>
                                </div>
                                    
                                <div class=\"form-group\">
                                    <label for=\"icode\" class=\"col-md-3 control-label\">Invitation Code</label>
                                    <div class=\"col-md-9\">
                                        <input type=\"text\" class=\"form-control\" name=\"icode\" placeholder=\"\">
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                      
                                    <div class=\"col-md-offset-3 col-md-9\">
                                        <button id=\"btn-signup\" type=\"button\" class=\"btn btn-info\"><i class=\"icon-hand-right\"></i> &nbsp Sign Up</button>
                                        <span style=\"margin-left:8px;\">or</span>  
                                    </div>
                                </div>
                                
                                <div style=\"border-top: 1px solid #999; padding-top:20px\"  class=\"form-group\">
                                    
                                    <div class=\"col-md-offset-3 col-md-9\">
                                        <button id=\"btn-fbsignup\" type=\"button\" class=\"btn btn-primary\"><i class=\"icon-facebook\"></i>   Sign Up with Facebook</button>
                                    </div>                                           
                                        
                                </div>
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
    </div-->
    
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
        return array (  59 => 15,  53 => 12,  45 => 8,  40 => 6,  33 => 4,  30 => 3,);
    }
}
