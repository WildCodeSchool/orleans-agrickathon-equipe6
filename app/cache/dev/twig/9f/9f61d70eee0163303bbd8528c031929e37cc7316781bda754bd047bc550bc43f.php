<?php

/* SfWebAppBackOfficeBundle::layout-login.html.twig */
class __TwigTemplate_b42404792306480f951a0f9d6fbd01f7299babf4affec70cba95319236d099ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SfWebAppBackOfficeBundle::back-office.html.twig", "SfWebAppBackOfficeBundle::layout-login.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SfWebAppBackOfficeBundle::back-office.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6f12080acb7c6d68cfd029f710846297325873b7261f76023092d018b1ceb93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6f12080acb7c6d68cfd029f710846297325873b7261f76023092d018b1ceb93->enter($__internal_b6f12080acb7c6d68cfd029f710846297325873b7261f76023092d018b1ceb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppBackOfficeBundle::layout-login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6f12080acb7c6d68cfd029f710846297325873b7261f76023092d018b1ceb93->leave($__internal_b6f12080acb7c6d68cfd029f710846297325873b7261f76023092d018b1ceb93_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_013c87de31b224fffe9a31b130a8acc1a4be5ab1e60cabd25ee02ea0ba25a16f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013c87de31b224fffe9a31b130a8acc1a4be5ab1e60cabd25ee02ea0ba25a16f->enter($__internal_013c87de31b224fffe9a31b130a8acc1a4be5ab1e60cabd25ee02ea0ba25a16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppBackOfficeBundle::layout-login.html.twig"));

        
        $__internal_013c87de31b224fffe9a31b130a8acc1a4be5ab1e60cabd25ee02ea0ba25a16f->leave($__internal_013c87de31b224fffe9a31b130a8acc1a4be5ab1e60cabd25ee02ea0ba25a16f_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_7722b1e77a56ba1f6ae1a0c12055cb74e3a89ea6868c2be2e70649918f483559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7722b1e77a56ba1f6ae1a0c12055cb74e3a89ea6868c2be2e70649918f483559->enter($__internal_7722b1e77a56ba1f6ae1a0c12055cb74e3a89ea6868c2be2e70649918f483559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppBackOfficeBundle::layout-login.html.twig"));

        
        $__internal_7722b1e77a56ba1f6ae1a0c12055cb74e3a89ea6868c2be2e70649918f483559->leave($__internal_7722b1e77a56ba1f6ae1a0c12055cb74e3a89ea6868c2be2e70649918f483559_prof);

    }

    // line 9
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b6ea0945156d3d0d7cc4905c0442397ce39aac62fffdbf9d35ec9ea546b18888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ea0945156d3d0d7cc4905c0442397ce39aac62fffdbf9d35ec9ea546b18888->enter($__internal_b6ea0945156d3d0d7cc4905c0442397ce39aac62fffdbf9d35ec9ea546b18888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppBackOfficeBundle::layout-login.html.twig"));

        
        $__internal_b6ea0945156d3d0d7cc4905c0442397ce39aac62fffdbf9d35ec9ea546b18888->leave($__internal_b6ea0945156d3d0d7cc4905c0442397ce39aac62fffdbf9d35ec9ea546b18888_prof);

    }

    public function getTemplateName()
    {
        return "SfWebAppBackOfficeBundle::layout-login.html.twig";
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
        return new Twig_Source("{% extends 'SfWebAppBackOfficeBundle::back-office.html.twig' %}

{% block header %}
{% endblock %}

{% block content %}
{% endblock %}

{% block footer %}
{% endblock %}", "SfWebAppBackOfficeBundle::layout-login.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/src/SfWebApp/BackOfficeBundle/Resources/views/layout-login.html.twig");
    }
}
