<?php

/* SfWebAppFrontOfficeBundle::layout-login.html.twig */
class __TwigTemplate_78e881ee7370eee31321e20363101b41b666351f1c5fca6198b803f9bfe5cc46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::front-office.html.twig", "SfWebAppFrontOfficeBundle::layout-login.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::front-office.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_489a58512bdf5e927eecad5707fd434982b4135e2cf5798c881cbf01fc9f0ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489a58512bdf5e927eecad5707fd434982b4135e2cf5798c881cbf01fc9f0ef5->enter($__internal_489a58512bdf5e927eecad5707fd434982b4135e2cf5798c881cbf01fc9f0ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_489a58512bdf5e927eecad5707fd434982b4135e2cf5798c881cbf01fc9f0ef5->leave($__internal_489a58512bdf5e927eecad5707fd434982b4135e2cf5798c881cbf01fc9f0ef5_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_5ee5cf21786b1d928d7788d730ca61afd366d95f48ae86ae7f3c549e7566f74d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee5cf21786b1d928d7788d730ca61afd366d95f48ae86ae7f3c549e7566f74d->enter($__internal_5ee5cf21786b1d928d7788d730ca61afd366d95f48ae86ae7f3c549e7566f74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        
        $__internal_5ee5cf21786b1d928d7788d730ca61afd366d95f48ae86ae7f3c549e7566f74d->leave($__internal_5ee5cf21786b1d928d7788d730ca61afd366d95f48ae86ae7f3c549e7566f74d_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_54f021409b94747f8be3d4b208e08142bad9c9015265585338fae476783a40a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f021409b94747f8be3d4b208e08142bad9c9015265585338fae476783a40a3->enter($__internal_54f021409b94747f8be3d4b208e08142bad9c9015265585338fae476783a40a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        
        $__internal_54f021409b94747f8be3d4b208e08142bad9c9015265585338fae476783a40a3->leave($__internal_54f021409b94747f8be3d4b208e08142bad9c9015265585338fae476783a40a3_prof);

    }

    // line 9
    public function block_footer($context, array $blocks = array())
    {
        $__internal_17edba67b589573688fed32f13ff93a40a93ead4642825afd76ea8cbcc0b3d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17edba67b589573688fed32f13ff93a40a93ead4642825afd76ea8cbcc0b3d83->enter($__internal_17edba67b589573688fed32f13ff93a40a93ead4642825afd76ea8cbcc0b3d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        
        $__internal_17edba67b589573688fed32f13ff93a40a93ead4642825afd76ea8cbcc0b3d83->leave($__internal_17edba67b589573688fed32f13ff93a40a93ead4642825afd76ea8cbcc0b3d83_prof);

    }

    public function getTemplateName()
    {
        return "SfWebAppFrontOfficeBundle::layout-login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  47 => 6,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::front-office.html.twig' %}

{% block header %}
{% endblock %}

{% block content %}
{% endblock %}

{% block footer %}
{% endblock %}", "SfWebAppFrontOfficeBundle::layout-login.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/layout-login.html.twig");
    }
}
