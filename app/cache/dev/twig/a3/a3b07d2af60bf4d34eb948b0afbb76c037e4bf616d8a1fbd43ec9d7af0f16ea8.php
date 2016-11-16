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
        $__internal_8292b44d92b4787c5099f1bd4d1b566c58dc3e9f1b283b4bee0e3b8c2b7d7765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8292b44d92b4787c5099f1bd4d1b566c58dc3e9f1b283b4bee0e3b8c2b7d7765->enter($__internal_8292b44d92b4787c5099f1bd4d1b566c58dc3e9f1b283b4bee0e3b8c2b7d7765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8292b44d92b4787c5099f1bd4d1b566c58dc3e9f1b283b4bee0e3b8c2b7d7765->leave($__internal_8292b44d92b4787c5099f1bd4d1b566c58dc3e9f1b283b4bee0e3b8c2b7d7765_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_d74f2aaeb095c021f50038378cd249291be30e346ffaa62a6ae08e4d70ad7de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74f2aaeb095c021f50038378cd249291be30e346ffaa62a6ae08e4d70ad7de7->enter($__internal_d74f2aaeb095c021f50038378cd249291be30e346ffaa62a6ae08e4d70ad7de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        
        $__internal_d74f2aaeb095c021f50038378cd249291be30e346ffaa62a6ae08e4d70ad7de7->leave($__internal_d74f2aaeb095c021f50038378cd249291be30e346ffaa62a6ae08e4d70ad7de7_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_eb1ac1d25944aead4ce1cc3d85ffd968d7dd25458da330c1aed50ffa8b415646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1ac1d25944aead4ce1cc3d85ffd968d7dd25458da330c1aed50ffa8b415646->enter($__internal_eb1ac1d25944aead4ce1cc3d85ffd968d7dd25458da330c1aed50ffa8b415646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        
        $__internal_eb1ac1d25944aead4ce1cc3d85ffd968d7dd25458da330c1aed50ffa8b415646->leave($__internal_eb1ac1d25944aead4ce1cc3d85ffd968d7dd25458da330c1aed50ffa8b415646_prof);

    }

    // line 9
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1c5ce09bfc4dbf6c4648a1d13b8420a7c070719dfe2c0453876686af72bc667d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5ce09bfc4dbf6c4648a1d13b8420a7c070719dfe2c0453876686af72bc667d->enter($__internal_1c5ce09bfc4dbf6c4648a1d13b8420a7c070719dfe2c0453876686af72bc667d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        
        $__internal_1c5ce09bfc4dbf6c4648a1d13b8420a7c070719dfe2c0453876686af72bc667d->leave($__internal_1c5ce09bfc4dbf6c4648a1d13b8420a7c070719dfe2c0453876686af72bc667d_prof);

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
