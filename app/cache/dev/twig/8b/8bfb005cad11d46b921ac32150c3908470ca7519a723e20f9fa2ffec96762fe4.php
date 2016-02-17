<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f203522d23411e7db36a72f325b0eac22f4ae35e7d84c9422ab86f6a303d1701 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b239a0245e73268a48f3b8ee9e93064af4f31db49a87f0a0ea40de8e2d99ca7 = $this->env->getExtension("native_profiler");
        $__internal_4b239a0245e73268a48f3b8ee9e93064af4f31db49a87f0a0ea40de8e2d99ca7->enter($__internal_4b239a0245e73268a48f3b8ee9e93064af4f31db49a87f0a0ea40de8e2d99ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b239a0245e73268a48f3b8ee9e93064af4f31db49a87f0a0ea40de8e2d99ca7->leave($__internal_4b239a0245e73268a48f3b8ee9e93064af4f31db49a87f0a0ea40de8e2d99ca7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_052a63d1ec255024688d0377a568e4503abd54bd35cf0c118fa5c1452ba8b285 = $this->env->getExtension("native_profiler");
        $__internal_052a63d1ec255024688d0377a568e4503abd54bd35cf0c118fa5c1452ba8b285->enter($__internal_052a63d1ec255024688d0377a568e4503abd54bd35cf0c118fa5c1452ba8b285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_052a63d1ec255024688d0377a568e4503abd54bd35cf0c118fa5c1452ba8b285->leave($__internal_052a63d1ec255024688d0377a568e4503abd54bd35cf0c118fa5c1452ba8b285_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e2fe80371c8e50849fc4b89340a55b1f3bdcb42e25af8ecf3583b71331a90370 = $this->env->getExtension("native_profiler");
        $__internal_e2fe80371c8e50849fc4b89340a55b1f3bdcb42e25af8ecf3583b71331a90370->enter($__internal_e2fe80371c8e50849fc4b89340a55b1f3bdcb42e25af8ecf3583b71331a90370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e2fe80371c8e50849fc4b89340a55b1f3bdcb42e25af8ecf3583b71331a90370->leave($__internal_e2fe80371c8e50849fc4b89340a55b1f3bdcb42e25af8ecf3583b71331a90370_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df2bed2504d175024c245d1342122575a57b8b2b8319ec26400b4117f5c60a01 = $this->env->getExtension("native_profiler");
        $__internal_df2bed2504d175024c245d1342122575a57b8b2b8319ec26400b4117f5c60a01->enter($__internal_df2bed2504d175024c245d1342122575a57b8b2b8319ec26400b4117f5c60a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_df2bed2504d175024c245d1342122575a57b8b2b8319ec26400b4117f5c60a01->leave($__internal_df2bed2504d175024c245d1342122575a57b8b2b8319ec26400b4117f5c60a01_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
