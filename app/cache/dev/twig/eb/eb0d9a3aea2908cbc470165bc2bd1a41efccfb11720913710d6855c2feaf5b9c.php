<?php

/* StoreBundle:Product:edit.html.twig */
class __TwigTemplate_20f6eb5f808ba1895d375f753566b989d89d5c0c024845c54110e9de8a60b653 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "StoreBundle:Product:edit.html.twig", 1);
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
        $__internal_e25749e80e1c1f0ac5159fdcb48c62be77a77f74d2a1b77d745d287d2be566de = $this->env->getExtension("native_profiler");
        $__internal_e25749e80e1c1f0ac5159fdcb48c62be77a77f74d2a1b77d745d287d2be566de->enter($__internal_e25749e80e1c1f0ac5159fdcb48c62be77a77f74d2a1b77d745d287d2be566de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreBundle:Product:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e25749e80e1c1f0ac5159fdcb48c62be77a77f74d2a1b77d745d287d2be566de->leave($__internal_e25749e80e1c1f0ac5159fdcb48c62be77a77f74d2a1b77d745d287d2be566de_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6883a95a4794879bedbfea5e398e08c10507a3470fc8ebb2d196dbf01e731988 = $this->env->getExtension("native_profiler");
        $__internal_6883a95a4794879bedbfea5e398e08c10507a3470fc8ebb2d196dbf01e731988->enter($__internal_6883a95a4794879bedbfea5e398e08c10507a3470fc8ebb2d196dbf01e731988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Product edit</h1>

    <form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_update", array("id" => $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <p>
            <button type=\"submit\">Edit</button>
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
        <li>
            <form action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_delete", array("id" => $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
                <button type=\"submit\">Delete</button>
            </form>
        </li>
    </ul>
";
        
        $__internal_6883a95a4794879bedbfea5e398e08c10507a3470fc8ebb2d196dbf01e731988->leave($__internal_6883a95a4794879bedbfea5e398e08c10507a3470fc8ebb2d196dbf01e731988_prof);

    }

    public function getTemplateName()
    {
        return "StoreBundle:Product:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  69 => 19,  61 => 14,  50 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* {% block body %}*/
/*     <h1>Product edit</h1>*/
/* */
/*     <form action="{{ path('product_update', { 'id': document.id }) }}" method="post" {{ form_enctype(edit_form) }}>*/
/*         {{ form_widget(edit_form) }}*/
/*         <p>*/
/*             <button type="submit">Edit</button>*/
/*         </p>*/
/*     </form>*/
/* */
/*     <ul class="record_actions">*/
/*         <li>*/
/*             <a href="{{ path('product') }}">*/
/*                 Back to the list*/
/*             </a>*/
/*         </li>*/
/*         <li>*/
/*             <form action="{{ path('product_delete', { 'id': document.id }) }}" method="post">*/
/*                 {{ form_widget(delete_form) }}*/
/*                 <button type="submit">Delete</button>*/
/*             </form>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
