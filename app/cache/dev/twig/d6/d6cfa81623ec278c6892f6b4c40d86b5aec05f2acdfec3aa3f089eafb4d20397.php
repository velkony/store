<?php

/* ::forms/collection.html.twig */
class __TwigTemplate_6471cbb6384e4e3520b5256e9e908271da3ca5baff764ac925385c7fc70ed9c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'collection_widget' => array($this, 'block_collection_widget'),
            'single_table_collection' => array($this, 'block_single_table_collection'),
            'single_table_widget_row' => array($this, 'block_single_table_widget_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b826bd025a4799f1175d9c8757670e7655f37f1187f0ed9d1f99d1069bcb997e = $this->env->getExtension("native_profiler");
        $__internal_b826bd025a4799f1175d9c8757670e7655f37f1187f0ed9d1f99d1069bcb997e->enter($__internal_b826bd025a4799f1175d9c8757670e7655f37f1187f0ed9d1f99d1069bcb997e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::forms/collection.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('single_table_collection', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('single_table_widget_row', $context, $blocks);
        
        $__internal_b826bd025a4799f1175d9c8757670e7655f37f1187f0ed9d1f99d1069bcb997e->leave($__internal_b826bd025a4799f1175d9c8757670e7655f37f1187f0ed9d1f99d1069bcb997e_prof);

    }

    // line 3
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_a5564e3e6c6ea414c7997f63e5ec4b4573ca08c238610b2c7d8359bbf9c71f9d = $this->env->getExtension("native_profiler");
        $__internal_a5564e3e6c6ea414c7997f63e5ec4b4573ca08c238610b2c7d8359bbf9c71f9d->enter($__internal_a5564e3e6c6ea414c7997f63e5ec4b4573ca08c238610b2c7d8359bbf9c71f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 4
        echo "    ";
        if ( !array_key_exists("prototype", $context)) {
            // line 5
            echo "        <div class=\"alert alert-danger\">
            In order to render labels properly, prototype is required! Try setting the following options:<br/>
            * <strong>allow_add:</strong> true<br/>
            * <strong>prototype_only:</strong> true<br/>
            This way will ensure that prototype will be rendered and the user will not be able to add new rows.
        </div>
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if (((isset($context["layout"]) ? $context["layout"] : $this->getContext($context, "layout")) == twig_constant("StoreBundle\\Constant\\CollectionLayoutConstants::SINGLE_TABLE"))) {
            // line 14
            echo "        ";
            $this->displayBlock("single_table_collection", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_a5564e3e6c6ea414c7997f63e5ec4b4573ca08c238610b2c7d8359bbf9c71f9d->leave($__internal_a5564e3e6c6ea414c7997f63e5ec4b4573ca08c238610b2c7d8359bbf9c71f9d_prof);

    }

    // line 18
    public function block_single_table_collection($context, array $blocks = array())
    {
        $__internal_26c571782a36f8138f32087688b76339ad7a373fef10143594b08322ef397e89 = $this->env->getExtension("native_profiler");
        $__internal_26c571782a36f8138f32087688b76339ad7a373fef10143594b08322ef397e89->enter($__internal_26c571782a36f8138f32087688b76339ad7a373fef10143594b08322ef397e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "single_table_collection"));

        // line 19
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 20
            echo "        ";
            $context["child"] = (isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype"));
            // line 21
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->renderBlock("single_table_widget_row", $context, $blocks)));
        }
        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            <table class=\"table table-striped table-bordered table-hover\">
                <thead>
                <tr>
                    ";
        // line 28
        if (array_key_exists("prototype", $context)) {
            // line 29
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 30
                echo "                            <th>";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["row"], 'label');
                echo "</th>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                    ";
        }
        // line 33
        echo "                    ";
        if ((array_key_exists("allow_delete", $context) && ((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete")) === true))) {
            // line 34
            echo "                        <th class=\"col-small text-center\">
                            <i class=\"fa fa-trash\"></i>
                        </th>
                    ";
        }
        // line 38
        echo "                </tr>
                </thead>
                <tbody>
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 42
            echo "                    ";
            $this->displayBlock("single_table_widget_row", $context, $blocks);
            echo "
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                </tbody>
                ";
        // line 45
        if (((array_key_exists("allow_add", $context) && ((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add")) === true)) && ((isset($context["prototype_only"]) ? $context["prototype_only"] : $this->getContext($context, "prototype_only")) === false))) {
            // line 46
            echo "                    <tfoot>
                    <tr>
                        <td colspan=\"";
            // line 48
            echo twig_escape_filter($this->env, ((array_key_exists("prototype", $context)) ? (twig_length_filter($this->env, (isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")))) : (1)), "html", null, true);
            echo "\">
                            <button type=\"button\" class=\"btn btn-xs btn-success collection-add-row\">
                                <i class=\"fa fa-plus\"></i>
                                ";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("common.add_new_element", array(), "form"), "html", null, true);
            echo "
                            </button>
                        </td>
                    </tr>
                    </tfoot>
                ";
        }
        // line 57
        echo "            </table>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_26c571782a36f8138f32087688b76339ad7a373fef10143594b08322ef397e89->leave($__internal_26c571782a36f8138f32087688b76339ad7a373fef10143594b08322ef397e89_prof);

    }

    // line 62
    public function block_single_table_widget_row($context, array $blocks = array())
    {
        $__internal_2ab115af42264046ffd504f1ca5c4971e0b3f506b4a7cfee0cfc50576433583c = $this->env->getExtension("native_profiler");
        $__internal_2ab115af42264046ffd504f1ca5c4971e0b3f506b4a7cfee0cfc50576433583c->enter($__internal_2ab115af42264046ffd504f1ca5c4971e0b3f506b4a7cfee0cfc50576433583c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "single_table_widget_row"));

        // line 63
        echo "    <tr>
        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 65
            echo "            <td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["element"], 'widget');
            echo "</td>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        ";
        if ((array_key_exists("allow_delete", $context) && ((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete")) === true))) {
            // line 68
            echo "            <td class=\"col-small text-center\">
                <button class=\"btn btn-danger btn-xs btn-circle btn-line delete_row\" type=\"button\" title=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("common.delete_element", array(), "form"), "html", null, true);
            echo "\">
                    <i class=\"fa fa-trash icon-only\"></i>
                </button>
            </td>
        ";
        }
        // line 74
        echo "    </tr>
";
        
        $__internal_2ab115af42264046ffd504f1ca5c4971e0b3f506b4a7cfee0cfc50576433583c->leave($__internal_2ab115af42264046ffd504f1ca5c4971e0b3f506b4a7cfee0cfc50576433583c_prof);

    }

    public function getTemplateName()
    {
        return "::forms/collection.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  242 => 74,  234 => 69,  231 => 68,  228 => 67,  219 => 65,  215 => 64,  212 => 63,  206 => 62,  196 => 57,  187 => 51,  181 => 48,  177 => 46,  175 => 45,  172 => 44,  155 => 42,  138 => 41,  133 => 38,  127 => 34,  124 => 33,  121 => 32,  112 => 30,  107 => 29,  105 => 28,  97 => 24,  94 => 23,  91 => 21,  88 => 20,  85 => 19,  79 => 18,  68 => 14,  66 => 13,  63 => 12,  54 => 5,  51 => 4,  45 => 3,  38 => 62,  35 => 61,  33 => 18,  30 => 17,  28 => 3,  25 => 2,);
    }
}
/* {% trans_default_domain 'form' %}*/
/* */
/* {% block collection_widget %}*/
/*     {% if prototype is not defined %}*/
/*         <div class="alert alert-danger">*/
/*             In order to render labels properly, prototype is required! Try setting the following options:<br/>*/
/*             * <strong>allow_add:</strong> true<br/>*/
/*             * <strong>prototype_only:</strong> true<br/>*/
/*             This way will ensure that prototype will be rendered and the user will not be able to add new rows.*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% if layout == constant('StoreBundle\\Constant\\CollectionLayoutConstants::SINGLE_TABLE') %}*/
/*         {{ block('single_table_collection') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block single_table_collection %}*/
/*     {% if prototype is defined %}*/
/*         {% set child = prototype %}*/
/*         {%- set attr = attr|merge({'data-prototype': block('single_table_widget_row') }) -%}*/
/*     {% endif %}*/
/*     {% spaceless %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             <table class="table table-striped table-bordered table-hover">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     {% if prototype is defined %}*/
/*                         {% for row in prototype %}*/
/*                             <th>{{ form_label(row) }}</th>*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                     {% if allow_delete is defined and allow_delete is sameas(true) %}*/
/*                         <th class="col-small text-center">*/
/*                             <i class="fa fa-trash"></i>*/
/*                         </th>*/
/*                     {% endif %}*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for child in form %}*/
/*                     {{ block('single_table_widget_row') }}*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*                 {% if allow_add is defined and allow_add is sameas(true) and prototype_only is sameas(false) %}*/
/*                     <tfoot>*/
/*                     <tr>*/
/*                         <td colspan="{{ prototype is defined ? prototype | length : 1 }}">*/
/*                             <button type="button" class="btn btn-xs btn-success collection-add-row">*/
/*                                 <i class="fa fa-plus"></i>*/
/*                                 {{ 'common.add_new_element'|trans }}*/
/*                             </button>*/
/*                         </td>*/
/*                     </tr>*/
/*                     </tfoot>*/
/*                 {% endif %}*/
/*             </table>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block single_table_widget_row %}*/
/*     <tr>*/
/*         {% for element in child %}*/
/*             <td>{{ form_widget(element) }}</td>*/
/*         {% endfor %}*/
/*         {% if allow_delete is defined and allow_delete is sameas(true) %}*/
/*             <td class="col-small text-center">*/
/*                 <button class="btn btn-danger btn-xs btn-circle btn-line delete_row" type="button" title="{{ 'common.delete_element'|trans }}">*/
/*                     <i class="fa fa-trash icon-only"></i>*/
/*                 </button>*/
/*             </td>*/
/*         {% endif %}*/
/*     </tr>*/
/* {% endblock %}*/
