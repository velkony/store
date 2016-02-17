<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_d3822cc50dd4410f84f2c01834b49f992d4b74616fb997f64a5a18489f3ebeaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fae6b729c37d15cb72caab398a0043273cc8f85cef6e7c5298dc40b0bb0f1b91 = $this->env->getExtension("native_profiler");
        $__internal_fae6b729c37d15cb72caab398a0043273cc8f85cef6e7c5298dc40b0bb0f1b91->enter($__internal_fae6b729c37d15cb72caab398a0043273cc8f85cef6e7c5298dc40b0bb0f1b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/shop-item.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    </head>
    <body>
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button class=\"navbar-toggle\" data-target=\"#bs-example-navbar-collapse-1\" data-toggle=\"collapse\" type=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Start Bootstrap</a>
                </div>
                <div id=\"bs-example-navbar-collapse-1\" class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li>
                            <a href=\"#\">About</a>
                        </li>
                        <li>
                            <a href=\"#\">Services</a>
                        </li>
                        <li>
                            <a href=\"#\">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "        <div class=\"container\">
            <hr>
            <footer>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <p>Copyright © Your Website 2014</p>
                    </div>
                </div>
            </footer>
        </div>

        <!-- jQuery -->
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>


        ";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "    </body>
</html>
";
        
        $__internal_fae6b729c37d15cb72caab398a0043273cc8f85cef6e7c5298dc40b0bb0f1b91->leave($__internal_fae6b729c37d15cb72caab398a0043273cc8f85cef6e7c5298dc40b0bb0f1b91_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccd821ad948620a053941854ca02250f268842d5f057b275a806108b639929a3 = $this->env->getExtension("native_profiler");
        $__internal_ccd821ad948620a053941854ca02250f268842d5f057b275a806108b639929a3->enter($__internal_ccd821ad948620a053941854ca02250f268842d5f057b275a806108b639929a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ccd821ad948620a053941854ca02250f268842d5f057b275a806108b639929a3->leave($__internal_ccd821ad948620a053941854ca02250f268842d5f057b275a806108b639929a3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_39eca6bbb227ab9feea18e899bd7bd0536bb03b7638e7a6cd825a334be1a8664 = $this->env->getExtension("native_profiler");
        $__internal_39eca6bbb227ab9feea18e899bd7bd0536bb03b7638e7a6cd825a334be1a8664->enter($__internal_39eca6bbb227ab9feea18e899bd7bd0536bb03b7638e7a6cd825a334be1a8664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_39eca6bbb227ab9feea18e899bd7bd0536bb03b7638e7a6cd825a334be1a8664->leave($__internal_39eca6bbb227ab9feea18e899bd7bd0536bb03b7638e7a6cd825a334be1a8664_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c4946d36050777420e220ea07f54d4fd676febe232eb10b8619d2984bc9eaf5 = $this->env->getExtension("native_profiler");
        $__internal_6c4946d36050777420e220ea07f54d4fd676febe232eb10b8619d2984bc9eaf5->enter($__internal_6c4946d36050777420e220ea07f54d4fd676febe232eb10b8619d2984bc9eaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6c4946d36050777420e220ea07f54d4fd676febe232eb10b8619d2984bc9eaf5->leave($__internal_6c4946d36050777420e220ea07f54d4fd676febe232eb10b8619d2984bc9eaf5_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_abfa0bd2ad3dcc8f6dbc528f3d07c2c8788b4999c921c558c22bd6c160d9443b = $this->env->getExtension("native_profiler");
        $__internal_abfa0bd2ad3dcc8f6dbc528f3d07c2c8788b4999c921c558c22bd6c160d9443b->enter($__internal_abfa0bd2ad3dcc8f6dbc528f3d07c2c8788b4999c921c558c22bd6c160d9443b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/collection.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_abfa0bd2ad3dcc8f6dbc528f3d07c2c8788b4999c921c558c22bd6c160d9443b->leave($__internal_abfa0bd2ad3dcc8f6dbc528f3d07c2c8788b4999c921c558c22bd6c160d9443b_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 61,  155 => 60,  144 => 41,  133 => 6,  121 => 5,  112 => 63,  110 => 60,  104 => 57,  98 => 54,  84 => 42,  82 => 41,  48 => 10,  44 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">*/
/*         <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>*/
/*         <link href="{{ asset('css/shop-item.css') }}" rel="stylesheet"/>*/
/* */
/*     </head>*/
/*     <body>*/
/*         <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button class="navbar-toggle" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="#">Start Bootstrap</a>*/
/*                 </div>*/
/*                 <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li>*/
/*                             <a href="#">About</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Services</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Contact</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/* */
/*         {% block body %}{% endblock %}*/
/*         <div class="container">*/
/*             <hr>*/
/*             <footer>*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         <p>Copyright © Your Website 2014</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </footer>*/
/*         </div>*/
/* */
/*         <!-- jQuery -->*/
/*         <script src="{{ asset('js/jquery.min.js') }}"></script>*/
/* */
/*         <!-- Bootstrap Core JavaScript -->*/
/*         <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/* */
/* */
/*         {% block javascripts %}*/
/*             <script type="text/javascript" src="{{ asset('js/collection.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
