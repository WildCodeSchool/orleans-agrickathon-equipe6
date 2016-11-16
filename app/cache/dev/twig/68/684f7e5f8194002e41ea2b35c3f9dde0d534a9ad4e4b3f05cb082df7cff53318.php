<?php

/* SfWebAppFrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_1abd2f1a4676b0229ecb996f41f8a920cd2a074ff6d7d33ab0c430e40319fc1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SfWebAppFrontOfficeBundle::layout.html.twig", "SfWebAppFrontOfficeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SfWebAppFrontOfficeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54d18c7a8fd9d259c7f55bbe2e15d2f5dd4a652ec0b140a2a717b91b20852554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d18c7a8fd9d259c7f55bbe2e15d2f5dd4a652ec0b140a2a717b91b20852554->enter($__internal_54d18c7a8fd9d259c7f55bbe2e15d2f5dd4a652ec0b140a2a717b91b20852554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54d18c7a8fd9d259c7f55bbe2e15d2f5dd4a652ec0b140a2a717b91b20852554->leave($__internal_54d18c7a8fd9d259c7f55bbe2e15d2f5dd4a652ec0b140a2a717b91b20852554_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_48933cdfc28f1d8d548f8a2ad9aecf0aa43a595f30d7e084fe48ce6fa178ebd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48933cdfc28f1d8d548f8a2ad9aecf0aa43a595f30d7e084fe48ce6fa178ebd7->enter($__internal_48933cdfc28f1d8d548f8a2ad9aecf0aa43a595f30d7e084fe48ce6fa178ebd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Default:index.html.twig"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Accueil"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"panel-body\">
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_48933cdfc28f1d8d548f8a2ad9aecf0aa43a595f30d7e084fe48ce6fa178ebd7->leave($__internal_48933cdfc28f1d8d548f8a2ad9aecf0aa43a595f30d7e084fe48ce6fa178ebd7_prof);

    }

    public function getTemplateName()
    {
        return "SfWebAppFrontOfficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SfWebAppFrontOfficeBundle::layout.html.twig' %}

{% block content %}

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">{{ 'Accueil'|trans }}</h2>
                </div>
                <div class=\"panel-body\">
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "SfWebAppFrontOfficeBundle:Default:index.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
