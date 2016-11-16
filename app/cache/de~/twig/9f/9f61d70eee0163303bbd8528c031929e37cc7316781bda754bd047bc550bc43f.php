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
        $__internal_39550b91ca25375785f6e2078b64a3d0dabb008658b8eea67c1cf57bab6f2fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39550b91ca25375785f6e2078b64a3d0dabb008658b8eea67c1cf57bab6f2fde->enter($__internal_39550b91ca25375785f6e2078b64a3d0dabb008658b8eea67c1cf57bab6f2fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppBackOfficeBundle::layout-login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39550b91ca25375785f6e2078b64a3d0dabb008658b8eea67c1cf57bab6f2fde->leave($__internal_39550b91ca25375785f6e2078b64a3d0dabb008658b8eea67c1cf57bab6f2fde_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_c68f3b5fea3287cbb34af400d7907165853884a60fbedb83828d17d760b27e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68f3b5fea3287cbb34af400d7907165853884a60fbedb83828d17d760b27e82->enter($__internal_c68f3b5fea3287cbb34af400d7907165853884a60fbedb83828d17d760b27e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppBackOfficeBundle::layout-login.html.twig"));

        
        $__internal_c68f3b5fea3287cbb34af400d7907165853884a60fbedb83828d17d760b27e82->leave($__internal_c68f3b5fea3287cbb34af400d7907165853884a60fbedb83828d17d760b27e82_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_d61bfe4799e4823336b21f6941bf2c0ef2dd07d67bcd872eb03e71d94115175d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61bfe4799e4823336b21f6941bf2c0ef2dd07d67bcd872eb03e71d94115175d->enter($__internal_d61bfe4799e4823336b21f6941bf2c0ef2dd07d67bcd872eb03e71d94115175d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppBackOfficeBundle::layout-login.html.twig"));

        
        $__internal_d61bfe4799e4823336b21f6941bf2c0ef2dd07d67bcd872eb03e71d94115175d->leave($__internal_d61bfe4799e4823336b21f6941bf2c0ef2dd07d67bcd872eb03e71d94115175d_prof);

    }

    // line 9
    public function block_footer($context, array $blocks = array())
    {
        $__internal_39dbd7f1fa87f97b6c827f5fb9b621f136cade163d792863de4912c2e90fd317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39dbd7f1fa87f97b6c827f5fb9b621f136cade163d792863de4912c2e90fd317->enter($__internal_39dbd7f1fa87f97b6c827f5fb9b621f136cade163d792863de4912c2e90fd317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppBackOfficeBundle::layout-login.html.twig"));

        
        $__internal_39dbd7f1fa87f97b6c827f5fb9b621f136cade163d792863de4912c2e90fd317->leave($__internal_39dbd7f1fa87f97b6c827f5fb9b621f136cade163d792863de4912c2e90fd317_prof);

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
