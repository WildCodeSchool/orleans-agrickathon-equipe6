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
        $__internal_4807bdd5d422daf059d27f637699f1c75c50b16539ee158481c5def6d48b7f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4807bdd5d422daf059d27f637699f1c75c50b16539ee158481c5def6d48b7f88->enter($__internal_4807bdd5d422daf059d27f637699f1c75c50b16539ee158481c5def6d48b7f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4807bdd5d422daf059d27f637699f1c75c50b16539ee158481c5def6d48b7f88->leave($__internal_4807bdd5d422daf059d27f637699f1c75c50b16539ee158481c5def6d48b7f88_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_be58ee015f07c48d4577c7f60b5af9a2fe791167183b21886724029e332cf902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be58ee015f07c48d4577c7f60b5af9a2fe791167183b21886724029e332cf902->enter($__internal_be58ee015f07c48d4577c7f60b5af9a2fe791167183b21886724029e332cf902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        
        $__internal_be58ee015f07c48d4577c7f60b5af9a2fe791167183b21886724029e332cf902->leave($__internal_be58ee015f07c48d4577c7f60b5af9a2fe791167183b21886724029e332cf902_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_2f4024c3039944862dce287b818041b412c992e9eebbdea9beaf23d1c001252e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4024c3039944862dce287b818041b412c992e9eebbdea9beaf23d1c001252e->enter($__internal_2f4024c3039944862dce287b818041b412c992e9eebbdea9beaf23d1c001252e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        
        $__internal_2f4024c3039944862dce287b818041b412c992e9eebbdea9beaf23d1c001252e->leave($__internal_2f4024c3039944862dce287b818041b412c992e9eebbdea9beaf23d1c001252e_prof);

    }

    // line 9
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ba3b9ffebdf686a48f71036fe8a11799c0752241f2fade7d8eb652fe4d3faef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3b9ffebdf686a48f71036fe8a11799c0752241f2fade7d8eb652fe4d3faef7->enter($__internal_ba3b9ffebdf686a48f71036fe8a11799c0752241f2fade7d8eb652fe4d3faef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        
        $__internal_ba3b9ffebdf686a48f71036fe8a11799c0752241f2fade7d8eb652fe4d3faef7->leave($__internal_ba3b9ffebdf686a48f71036fe8a11799c0752241f2fade7d8eb652fe4d3faef7_prof);

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
{% endblock %}", "SfWebAppFrontOfficeBundle::layout-login.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/layout-login.html.twig");
    }
}
