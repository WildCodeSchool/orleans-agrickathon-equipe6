<?php

/* SfWebAppFrontOfficeBundle::layout-login.html.twig */
class __TwigTemplate_ddc60ff270da2bc3cf3e1d8f6b3ffa0bdcc4ddd55b63ecb869589086d10a43cb extends Twig_Template
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
        $__internal_2c6a52cf50c640387d65ec05791ae3abd613e138a529bbb2a39f9c260e468d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6a52cf50c640387d65ec05791ae3abd613e138a529bbb2a39f9c260e468d8a->enter($__internal_2c6a52cf50c640387d65ec05791ae3abd613e138a529bbb2a39f9c260e468d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c6a52cf50c640387d65ec05791ae3abd613e138a529bbb2a39f9c260e468d8a->leave($__internal_2c6a52cf50c640387d65ec05791ae3abd613e138a529bbb2a39f9c260e468d8a_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_c27020e4d3b12cbf0d8584e2ec57d82fb2b5459cde92796cbcda76b62a86be3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27020e4d3b12cbf0d8584e2ec57d82fb2b5459cde92796cbcda76b62a86be3a->enter($__internal_c27020e4d3b12cbf0d8584e2ec57d82fb2b5459cde92796cbcda76b62a86be3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        
        $__internal_c27020e4d3b12cbf0d8584e2ec57d82fb2b5459cde92796cbcda76b62a86be3a->leave($__internal_c27020e4d3b12cbf0d8584e2ec57d82fb2b5459cde92796cbcda76b62a86be3a_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_79c768eeefaf011758e157000c5ed7b77519a018488b5ab31dba87c59a4c865d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c768eeefaf011758e157000c5ed7b77519a018488b5ab31dba87c59a4c865d->enter($__internal_79c768eeefaf011758e157000c5ed7b77519a018488b5ab31dba87c59a4c865d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        
        $__internal_79c768eeefaf011758e157000c5ed7b77519a018488b5ab31dba87c59a4c865d->leave($__internal_79c768eeefaf011758e157000c5ed7b77519a018488b5ab31dba87c59a4c865d_prof);

    }

    // line 9
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7f993f0eacce4afab06458c98ab81e76f43f5809f874870359c7bf9021220d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f993f0eacce4afab06458c98ab81e76f43f5809f874870359c7bf9021220d3c->enter($__internal_7f993f0eacce4afab06458c98ab81e76f43f5809f874870359c7bf9021220d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        
        $__internal_7f993f0eacce4afab06458c98ab81e76f43f5809f874870359c7bf9021220d3c->leave($__internal_7f993f0eacce4afab06458c98ab81e76f43f5809f874870359c7bf9021220d3c_prof);

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
{% endblock %}", "SfWebAppFrontOfficeBundle::layout-login.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/src/SfWebApp/FrontOfficeBundle/Resources/views/layout-login.html.twig");
    }
}
