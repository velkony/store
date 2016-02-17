<?php

/* StoreBundle:Product:show.html.twig */
class __TwigTemplate_b8b064b15aec1db4847dfa038afb16ad08fb50b0691d93e3c7bfca921368c20b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "StoreBundle:Product:show.html.twig", 1);
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
        $__internal_0e636ddbc3d3f139223ef78e09fa9aa6ab4ab036466fd363e990bec3d66a7db4 = $this->env->getExtension("native_profiler");
        $__internal_0e636ddbc3d3f139223ef78e09fa9aa6ab4ab036466fd363e990bec3d66a7db4->enter($__internal_0e636ddbc3d3f139223ef78e09fa9aa6ab4ab036466fd363e990bec3d66a7db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreBundle:Product:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e636ddbc3d3f139223ef78e09fa9aa6ab4ab036466fd363e990bec3d66a7db4->leave($__internal_0e636ddbc3d3f139223ef78e09fa9aa6ab4ab036466fd363e990bec3d66a7db4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa61e8e62dfb377331e73a5f74308a4bda6b054ee28d4a5028604f2e2af66684 = $this->env->getExtension("native_profiler");
        $__internal_aa61e8e62dfb377331e73a5f74308a4bda6b054ee28d4a5028604f2e2af66684->enter($__internal_aa61e8e62dfb377331e73a5f74308a4bda6b054ee28d4a5028604f2e2af66684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Product</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "price", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
";
        // line 22
        echo "            </tr>
        </tbody>
    </table>

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("product");
        echo "\">
                Back to the list
            </a>
        </li>
        <li>
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_edit", array("id" => $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "id", array()))), "html", null, true);
        echo "\">
                Edit
            </a>
        </li>
        <li>
            <form action=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_delete", array("id" => $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
                <button type=\"submit\">Delete</button>
            </form>
        </li>
    </ul>
";
        
        $__internal_aa61e8e62dfb377331e73a5f74308a4bda6b054ee28d4a5028604f2e2af66684->leave($__internal_aa61e8e62dfb377331e73a5f74308a4bda6b054ee28d4a5028604f2e2af66684_prof);

    }

    public function getTemplateName()
    {
        return "StoreBundle:Product:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 39,  93 => 38,  85 => 33,  77 => 28,  69 => 22,  62 => 17,  55 => 13,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* {% block body %}*/
/* <h1>Product</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ document.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ document.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Price</th>*/
/*                 <td>{{ document.price }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/* {#                <td>{{ document.description }}</td>#}*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul class="record_actions">*/
/*         <li>*/
/*             <a href="{{ path('product') }}">*/
/*                 Back to the list*/
/*             </a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('product_edit', { 'id': document.id }) }}">*/
/*                 Edit*/
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
