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
        $__internal_5e3351ea01e15b9e5654307eb4bf7839ccb3e7bc6dd49547f54dbe3f8b965dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3351ea01e15b9e5654307eb4bf7839ccb3e7bc6dd49547f54dbe3f8b965dc6->enter($__internal_5e3351ea01e15b9e5654307eb4bf7839ccb3e7bc6dd49547f54dbe3f8b965dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e3351ea01e15b9e5654307eb4bf7839ccb3e7bc6dd49547f54dbe3f8b965dc6->leave($__internal_5e3351ea01e15b9e5654307eb4bf7839ccb3e7bc6dd49547f54dbe3f8b965dc6_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_5cd3208173d9335412a625123d140849d90a5c46ea1aeb826b131ff00eb0bd4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd3208173d9335412a625123d140849d90a5c46ea1aeb826b131ff00eb0bd4c->enter($__internal_5cd3208173d9335412a625123d140849d90a5c46ea1aeb826b131ff00eb0bd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        
        $__internal_5cd3208173d9335412a625123d140849d90a5c46ea1aeb826b131ff00eb0bd4c->leave($__internal_5cd3208173d9335412a625123d140849d90a5c46ea1aeb826b131ff00eb0bd4c_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_dbff3900187e0f9f6e58894b0da7300939eca924a3f96e66e0587e321eb99c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbff3900187e0f9f6e58894b0da7300939eca924a3f96e66e0587e321eb99c15->enter($__internal_dbff3900187e0f9f6e58894b0da7300939eca924a3f96e66e0587e321eb99c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        
        $__internal_dbff3900187e0f9f6e58894b0da7300939eca924a3f96e66e0587e321eb99c15->leave($__internal_dbff3900187e0f9f6e58894b0da7300939eca924a3f96e66e0587e321eb99c15_prof);

    }

    // line 9
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0a49aea8d8d61cff292a9c13b35fe60b76a9088a786cfb3d2dc2794c4956ad6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a49aea8d8d61cff292a9c13b35fe60b76a9088a786cfb3d2dc2794c4956ad6a->enter($__internal_0a49aea8d8d61cff292a9c13b35fe60b76a9088a786cfb3d2dc2794c4956ad6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        
        $__internal_0a49aea8d8d61cff292a9c13b35fe60b76a9088a786cfb3d2dc2794c4956ad6a->leave($__internal_0a49aea8d8d61cff292a9c13b35fe60b76a9088a786cfb3d2dc2794c4956ad6a_prof);

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
