<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3750a9c1f90e1806b310e2b150764762c6f1c32f9194c7b8b6cf29517962e784 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5f2f766824ef61df4f30ffea584eb4fc879a381d2458c064aed9df3f549321f = $this->env->getExtension("native_profiler");
        $__internal_e5f2f766824ef61df4f30ffea584eb4fc879a381d2458c064aed9df3f549321f->enter($__internal_e5f2f766824ef61df4f30ffea584eb4fc879a381d2458c064aed9df3f549321f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5f2f766824ef61df4f30ffea584eb4fc879a381d2458c064aed9df3f549321f->leave($__internal_e5f2f766824ef61df4f30ffea584eb4fc879a381d2458c064aed9df3f549321f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d452cef0cd6a9840194d49bc9b4023cc1178494d1d42b0e39bab01a2bd53f3b1 = $this->env->getExtension("native_profiler");
        $__internal_d452cef0cd6a9840194d49bc9b4023cc1178494d1d42b0e39bab01a2bd53f3b1->enter($__internal_d452cef0cd6a9840194d49bc9b4023cc1178494d1d42b0e39bab01a2bd53f3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d452cef0cd6a9840194d49bc9b4023cc1178494d1d42b0e39bab01a2bd53f3b1->leave($__internal_d452cef0cd6a9840194d49bc9b4023cc1178494d1d42b0e39bab01a2bd53f3b1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe3311441737a06af9c965c0f99628b5798b240c421c7d0a66b6996e78dee10c = $this->env->getExtension("native_profiler");
        $__internal_fe3311441737a06af9c965c0f99628b5798b240c421c7d0a66b6996e78dee10c->enter($__internal_fe3311441737a06af9c965c0f99628b5798b240c421c7d0a66b6996e78dee10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fe3311441737a06af9c965c0f99628b5798b240c421c7d0a66b6996e78dee10c->leave($__internal_fe3311441737a06af9c965c0f99628b5798b240c421c7d0a66b6996e78dee10c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c20cc5df35d9439db15d6fa7a6e017f4f40468d4f02ccd63957fcc3937a1731 = $this->env->getExtension("native_profiler");
        $__internal_4c20cc5df35d9439db15d6fa7a6e017f4f40468d4f02ccd63957fcc3937a1731->enter($__internal_4c20cc5df35d9439db15d6fa7a6e017f4f40468d4f02ccd63957fcc3937a1731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4c20cc5df35d9439db15d6fa7a6e017f4f40468d4f02ccd63957fcc3937a1731->leave($__internal_4c20cc5df35d9439db15d6fa7a6e017f4f40468d4f02ccd63957fcc3937a1731_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
