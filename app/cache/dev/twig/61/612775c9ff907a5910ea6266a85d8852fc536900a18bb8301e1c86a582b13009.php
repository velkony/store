<?php

/* StoreBundle:Product:index.html.twig */
class __TwigTemplate_1672605391a070d2f12c3853087743cf23e92b76860f56abb0b9e17d25b5e64c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "StoreBundle:Product:index.html.twig", 1);
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
        $__internal_d61b0fb3e277897db0e050deb33faa484670a570dbe5036d58eb141b86b9c860 = $this->env->getExtension("native_profiler");
        $__internal_d61b0fb3e277897db0e050deb33faa484670a570dbe5036d58eb141b86b9c860->enter($__internal_d61b0fb3e277897db0e050deb33faa484670a570dbe5036d58eb141b86b9c860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreBundle:Product:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d61b0fb3e277897db0e050deb33faa484670a570dbe5036d58eb141b86b9c860->leave($__internal_d61b0fb3e277897db0e050deb33faa484670a570dbe5036d58eb141b86b9c860_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3da8a4815f4dd41917b15168cef721a05f76366b23a68aa786cb5655a63219c0 = $this->env->getExtension("native_profiler");
        $__internal_3da8a4815f4dd41917b15168cef721a05f76366b23a68aa786cb5655a63219c0->enter($__internal_3da8a4815f4dd41917b15168cef721a05f76366b23a68aa786cb5655a63219c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Product list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute($context["document"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "price", array()), "html", null, true);
            echo "</td>
";
            // line 22
            echo "                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute($context["document"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_edit", array("id" => $this->getAttribute($context["document"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("product_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
";
        
        $__internal_3da8a4815f4dd41917b15168cef721a05f76366b23a68aa786cb5655a63219c0->leave($__internal_3da8a4815f4dd41917b15168cef721a05f76366b23a68aa786cb5655a63219c0_prof);

    }

    public function getTemplateName()
    {
        return "StoreBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 39,  99 => 34,  87 => 28,  81 => 25,  76 => 22,  72 => 20,  68 => 19,  62 => 18,  59 => 17,  55 => 16,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* {% block body %}*/
/*     <h1>Product list</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Price</th>*/
/*                 <th>Description</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for document in documents %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('product_show', { 'id': document.id }) }}">{{ document.id }}</a></td>*/
/*                 <td>{{ document.name }}</td>*/
/*                 <td>{{ document.price }}</td>*/
/* {#                <td>{{ document.description }}</td>#}*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('product_show', { 'id': document.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('product_edit', { 'id': document.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('product_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
