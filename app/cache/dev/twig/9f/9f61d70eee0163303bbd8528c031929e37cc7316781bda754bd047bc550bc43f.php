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
        $__internal_2773bb0a3db62110a8ad659db10dc9afe74d4708b48458b728c2c8a05cb4bbde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2773bb0a3db62110a8ad659db10dc9afe74d4708b48458b728c2c8a05cb4bbde->enter($__internal_2773bb0a3db62110a8ad659db10dc9afe74d4708b48458b728c2c8a05cb4bbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppBackOfficeBundle::layout-login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2773bb0a3db62110a8ad659db10dc9afe74d4708b48458b728c2c8a05cb4bbde->leave($__internal_2773bb0a3db62110a8ad659db10dc9afe74d4708b48458b728c2c8a05cb4bbde_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_e26d8798fc0cf12b468a725d04b814b515da7ec00abe571defdbb95311e567d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e26d8798fc0cf12b468a725d04b814b515da7ec00abe571defdbb95311e567d1->enter($__internal_e26d8798fc0cf12b468a725d04b814b515da7ec00abe571defdbb95311e567d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppBackOfficeBundle::layout-login.html.twig"));

        
        $__internal_e26d8798fc0cf12b468a725d04b814b515da7ec00abe571defdbb95311e567d1->leave($__internal_e26d8798fc0cf12b468a725d04b814b515da7ec00abe571defdbb95311e567d1_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_603206ade09b4c5a3d2c105fec4c27cbea70851f3c8f082e00650b7573f59e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603206ade09b4c5a3d2c105fec4c27cbea70851f3c8f082e00650b7573f59e3f->enter($__internal_603206ade09b4c5a3d2c105fec4c27cbea70851f3c8f082e00650b7573f59e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppBackOfficeBundle::layout-login.html.twig"));

        
        $__internal_603206ade09b4c5a3d2c105fec4c27cbea70851f3c8f082e00650b7573f59e3f->leave($__internal_603206ade09b4c5a3d2c105fec4c27cbea70851f3c8f082e00650b7573f59e3f_prof);

    }

    // line 9
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b313f542cbce27abfad8a0f4c8faae3d1a4eb048b61e80768bb356d5966bd153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b313f542cbce27abfad8a0f4c8faae3d1a4eb048b61e80768bb356d5966bd153->enter($__internal_b313f542cbce27abfad8a0f4c8faae3d1a4eb048b61e80768bb356d5966bd153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppBackOfficeBundle::layout-login.html.twig"));

        
        $__internal_b313f542cbce27abfad8a0f4c8faae3d1a4eb048b61e80768bb356d5966bd153->leave($__internal_b313f542cbce27abfad8a0f4c8faae3d1a4eb048b61e80768bb356d5966bd153_prof);

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
{% endblock %}", "SfWebAppBackOfficeBundle::layout-login.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/BackOfficeBundle/Resources/views/layout-login.html.twig");
    }
}
