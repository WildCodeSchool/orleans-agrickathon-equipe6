<?php

/* SfWebAppBackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_651f537b68fda2e4680ffbbe7c31f266342bfe67763710800f332b1c48b1d466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SfWebAppFrontOfficeBundle::layout-login.html.twig", "SfWebAppBackOfficeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SfWebAppFrontOfficeBundle::layout-login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab9a86606756bd4114a4991f127f9e73d5206f7579b09dcec80fea51e061a7ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab9a86606756bd4114a4991f127f9e73d5206f7579b09dcec80fea51e061a7ea->enter($__internal_ab9a86606756bd4114a4991f127f9e73d5206f7579b09dcec80fea51e061a7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppBackOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab9a86606756bd4114a4991f127f9e73d5206f7579b09dcec80fea51e061a7ea->leave($__internal_ab9a86606756bd4114a4991f127f9e73d5206f7579b09dcec80fea51e061a7ea_prof);

    }

    public function getTemplateName()
    {
        return "SfWebAppBackOfficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SfWebAppFrontOfficeBundle::layout-login.html.twig' %}", "SfWebAppBackOfficeBundle:Default:index.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/BackOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
