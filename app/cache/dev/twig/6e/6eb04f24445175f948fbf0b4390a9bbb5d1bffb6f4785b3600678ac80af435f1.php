<?php

/* MainBundle:Default:home.html.twig */
class __TwigTemplate_1c020dc1e36924e20bcfe66f35d5c6c992ca070db981c5936faf1fa1136aa960 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "MainBundle:Default:home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a794da01cfc9b18c79db4189b994acdf0f12f43f7e1f9d353907665559f5a82 = $this->env->getExtension("native_profiler");
        $__internal_0a794da01cfc9b18c79db4189b994acdf0f12f43f7e1f9d353907665559f5a82->enter($__internal_0a794da01cfc9b18c79db4189b994acdf0f12f43f7e1f9d353907665559f5a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a794da01cfc9b18c79db4189b994acdf0f12f43f7e1f9d353907665559f5a82->leave($__internal_0a794da01cfc9b18c79db4189b994acdf0f12f43f7e1f9d353907665559f5a82_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_de48ed1c53742297988082495a52dca83f6d896b52c2e04fcfa20f841258ce28 = $this->env->getExtension("native_profiler");
        $__internal_de48ed1c53742297988082495a52dca83f6d896b52c2e04fcfa20f841258ce28->enter($__internal_de48ed1c53742297988082495a52dca83f6d896b52c2e04fcfa20f841258ce28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <p class=\"lead\">Shop Name</p>
                <div class=\"list-group\">
                    <a class=\"list-group-item active\" href=\"#\">Category 1</a>
                    <a class=\"list-group-item\" href=\"#\">Category 2</a>
                    <a class=\"list-group-item\" href=\"#\">Category 3</a>
                </div>
            </div>
            <div class=\"col-md-9\">
                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" alt=\"\" src=\"http://placehold.it/800x300\">
                    <div class=\"caption-full\">
                        <h4 class=\"pull-right\">\$24.99</h4>
                        <h4>
                            <a href=\"#\">Product Name</a>
                        </h4>
                        <p>
                            See more snippets like these online store reviews at
                            <a href=\"http://bootsnipp.com\" target=\"_blank\">Bootsnipp - http://bootsnipp.com</a>
                            .
                        </p>
                        <p>
                            Want to make these reviews work? Check out
                            <strong>
                                <a href=\"http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/\">this building a review system tutorial</a>
                            </strong>
                            over at maxoffsky.com!
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class=\"ratings\">
                        <p class=\"pull-right\">3 reviews</p>
                        <p>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star-empty\"></span>
                            4.0 stars
                        </p>
                    </div>
                </div>
                <div class=\"well\">
                    <div class=\"text-right\">
                        <a class=\"btn btn-success\">Leave a Review</a>
                    </div>
                    <hr>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star-empty\"></span>
                            Anonymous
                            <span class=\"pull-right\">10 days ago</span>
                            <p>This product was great in terms of quality. I would definitely buy another!</p>
                        </div>
                    </div>
                    <hr>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star-empty\"></span>
                            Anonymous
                            <span class=\"pull-right\">12 days ago</span>
                            <p>I've alredy ordered another one!</p>
                        </div>
                    </div>
                    <hr>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star-empty\"></span>
                            Anonymous
                            <span class=\"pull-right\">15 days ago</span>
                            <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_de48ed1c53742297988082495a52dca83f6d896b52c2e04fcfa20f841258ce28->leave($__internal_de48ed1c53742297988082495a52dca83f6d896b52c2e04fcfa20f841258ce28_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-3">*/
/*                 <p class="lead">Shop Name</p>*/
/*                 <div class="list-group">*/
/*                     <a class="list-group-item active" href="#">Category 1</a>*/
/*                     <a class="list-group-item" href="#">Category 2</a>*/
/*                     <a class="list-group-item" href="#">Category 3</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-9">*/
/*                 <div class="thumbnail">*/
/*                     <img class="img-responsive" alt="" src="http://placehold.it/800x300">*/
/*                     <div class="caption-full">*/
/*                         <h4 class="pull-right">$24.99</h4>*/
/*                         <h4>*/
/*                             <a href="#">Product Name</a>*/
/*                         </h4>*/
/*                         <p>*/
/*                             See more snippets like these online store reviews at*/
/*                             <a href="http://bootsnipp.com" target="_blank">Bootsnipp - http://bootsnipp.com</a>*/
/*                             .*/
/*                         </p>*/
/*                         <p>*/
/*                             Want to make these reviews work? Check out*/
/*                             <strong>*/
/*                                 <a href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this building a review system tutorial</a>*/
/*                             </strong>*/
/*                             over at maxoffsky.com!*/
/*                         </p>*/
/*                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>*/
/*                     </div>*/
/*                     <div class="ratings">*/
/*                         <p class="pull-right">3 reviews</p>*/
/*                         <p>*/
/*                             <span class="glyphicon glyphicon-star"></span>*/
/*                             <span class="glyphicon glyphicon-star"></span>*/
/*                             <span class="glyphicon glyphicon-star"></span>*/
/*                             <span class="glyphicon glyphicon-star"></span>*/
/*                             <span class="glyphicon glyphicon-star-empty"></span>*/
/*                             4.0 stars*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="well">*/
/*                     <div class="text-right">*/
/*                         <a class="btn btn-success">Leave a Review</a>*/
/*                     </div>*/
/*                     <hr>*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             <span class="glyphicon glyphicon-star"></span>*/
/*                             <span class="glyphicon glyphicon-star"></span>*/
/*                             <span class="glyphicon glyphicon-star"></span>*/
/*                             <span class="glyphicon glyphicon-star"></span>*/
/*                             <span class="glyphicon glyphicon-star-empty"></span>*/
/*                             Anonymous*/
/*                             <span class="pull-right">10 days ago</span>*/
/*                             <p>This product was great in terms of quality. I would definitely buy another!</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <hr>*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             <span class="glyphicon glyphicon-star"></span>*/
/*                             <span class="glyphicon glyphicon-star"></span>*/
/*                             <span class="glyphicon glyphicon-star"></span>*/
/*                             <span class="glyphicon glyphicon-star"></span>*/
/*                             <span class="glyphicon glyphicon-star-empty"></span>*/
/*                             Anonymous*/
/*                             <span class="pull-right">12 days ago</span>*/
/*                             <p>I've alredy ordered another one!</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <hr>*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             <span class="glyphicon glyphicon-star"></span>*/
/*                             <span class="glyphicon glyphicon-star"></span>*/
/*                             <span class="glyphicon glyphicon-star"></span>*/
/*                             <span class="glyphicon glyphicon-star"></span>*/
/*                             <span class="glyphicon glyphicon-star-empty"></span>*/
/*                             Anonymous*/
/*                             <span class="pull-right">15 days ago</span>*/
/*                             <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
