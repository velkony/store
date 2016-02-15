<?php

/* StoreBundle:Product:new.html.twig */
class __TwigTemplate_3ec9235a5a65bd3e5241dbe3bb9990965186d5b4190b9c34fab35772b6dee733 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "StoreBundle:Product:new.html.twig", 1);
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
        $__internal_58fbd364cd8d99aad52ca3747bb2a06aefd166ed613b82057437a1f80614d54f = $this->env->getExtension("native_profiler");
        $__internal_58fbd364cd8d99aad52ca3747bb2a06aefd166ed613b82057437a1f80614d54f->enter($__internal_58fbd364cd8d99aad52ca3747bb2a06aefd166ed613b82057437a1f80614d54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreBundle:Product:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58fbd364cd8d99aad52ca3747bb2a06aefd166ed613b82057437a1f80614d54f->leave($__internal_58fbd364cd8d99aad52ca3747bb2a06aefd166ed613b82057437a1f80614d54f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_38a1a72fe3791d2ebc837a66417e20c3a19b5f60419050a33608bcab7ce0ba57 = $this->env->getExtension("native_profiler");
        $__internal_38a1a72fe3791d2ebc837a66417e20c3a19b5f60419050a33608bcab7ce0ba57->enter($__internal_38a1a72fe3791d2ebc837a66417e20c3a19b5f60419050a33608bcab7ce0ba57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Product creation</h1>

    <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("product_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <p>
            <button type=\"submit\">Create</button>
        </p>
    </form>

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("product");
        echo "\">
                Back to the list
            </a>
        </li>
    </ul>
";
        
        $__internal_38a1a72fe3791d2ebc837a66417e20c3a19b5f60419050a33608bcab7ce0ba57->leave($__internal_38a1a72fe3791d2ebc837a66417e20c3a19b5f60419050a33608bcab7ce0ba57_prof);

    }

    public function getTemplateName()
    {
        return "StoreBundle:Product:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  50 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* {% block body %}*/
/*     <h1>Product creation</h1>*/
/* */
/*     <form action="{{ path('product_create') }}" method="post" {{ form_enctype(form) }}>*/
/*         {{ form_widget(form) }}*/
/*         <p>*/
/*             <button type="submit">Create</button>*/
/*         </p>*/
/*     </form>*/
/* */
/*     <ul class="record_actions">*/
/*         <li>*/
/*             <a href="{{ path('product') }}">*/
/*                 Back to the list*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
