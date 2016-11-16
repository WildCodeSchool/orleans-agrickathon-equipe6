<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7e7abd0efea188c6c47c122d55edfdb369678e98cb598a6578ff16d44000a26a extends Twig_Template
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
        $__internal_d90c861b2baffaa77588eb33243fe38d084f77f5df2c77c18163a9bae9d80afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90c861b2baffaa77588eb33243fe38d084f77f5df2c77c18163a9bae9d80afc->enter($__internal_d90c861b2baffaa77588eb33243fe38d084f77f5df2c77c18163a9bae9d80afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d90c861b2baffaa77588eb33243fe38d084f77f5df2c77c18163a9bae9d80afc->leave($__internal_d90c861b2baffaa77588eb33243fe38d084f77f5df2c77c18163a9bae9d80afc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b1392382198cc514cfbbebe6d37b1dd7cb9213a2071d416874a28154a0a5dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1392382198cc514cfbbebe6d37b1dd7cb9213a2071d416874a28154a0a5dcb->enter($__internal_2b1392382198cc514cfbbebe6d37b1dd7cb9213a2071d416874a28154a0a5dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2b1392382198cc514cfbbebe6d37b1dd7cb9213a2071d416874a28154a0a5dcb->leave($__internal_2b1392382198cc514cfbbebe6d37b1dd7cb9213a2071d416874a28154a0a5dcb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d2592ace9e1b09c1e18c3d78154a69a438d60606d6c13ccd36e2c139d3e60ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2592ace9e1b09c1e18c3d78154a69a438d60606d6c13ccd36e2c139d3e60ca->enter($__internal_0d2592ace9e1b09c1e18c3d78154a69a438d60606d6c13ccd36e2c139d3e60ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0d2592ace9e1b09c1e18c3d78154a69a438d60606d6c13ccd36e2c139d3e60ca->leave($__internal_0d2592ace9e1b09c1e18c3d78154a69a438d60606d6c13ccd36e2c139d3e60ca_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee4d4e0545aee3d498552bcfcc2e616bd3ea9980d0a175d8e1435896af1c2528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4d4e0545aee3d498552bcfcc2e616bd3ea9980d0a175d8e1435896af1c2528->enter($__internal_ee4d4e0545aee3d498552bcfcc2e616bd3ea9980d0a175d8e1435896af1c2528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ee4d4e0545aee3d498552bcfcc2e616bd3ea9980d0a175d8e1435896af1c2528->leave($__internal_ee4d4e0545aee3d498552bcfcc2e616bd3ea9980d0a175d8e1435896af1c2528_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
