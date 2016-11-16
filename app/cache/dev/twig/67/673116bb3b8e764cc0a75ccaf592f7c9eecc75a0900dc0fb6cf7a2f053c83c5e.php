<?php

/* SfWebAppFrontOfficeBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_7bb9cbad71903fa8d4fb742861ea4931c1f7720f409abbbb0954e706761628ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SfWebAppFrontOfficeBundle::layout.html.twig", "SfWebAppFrontOfficeBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_f49eb6cce11b74d15eef7c20baf9097bef67b6fb19cb540e2382b6cd65d93d93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49eb6cce11b74d15eef7c20baf9097bef67b6fb19cb540e2382b6cd65d93d93->enter($__internal_f49eb6cce11b74d15eef7c20baf9097bef67b6fb19cb540e2382b6cd65d93d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f49eb6cce11b74d15eef7c20baf9097bef67b6fb19cb540e2382b6cd65d93d93->leave($__internal_f49eb6cce11b74d15eef7c20baf9097bef67b6fb19cb540e2382b6cd65d93d93_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7100832d40180327fb7b1ee11a88ab5236384d71bbf75be00753f4091420fa9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7100832d40180327fb7b1ee11a88ab5236384d71bbf75be00753f4091420fa9c->enter($__internal_7100832d40180327fb7b1ee11a88ab5236384d71bbf75be00753f4091420fa9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Resetting:passwordAlreadyRequested.html.twig"));

        // line 4
        echo "    <div class=\"row\"></div>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7100832d40180327fb7b1ee11a88ab5236384d71bbf75be00753f4091420fa9c->leave($__internal_7100832d40180327fb7b1ee11a88ab5236384d71bbf75be00753f4091420fa9c_prof);

    }

    public function getTemplateName()
    {
        return "SfWebAppFrontOfficeBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
    <div class=\"row\"></div>
    <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
{% endblock %}", "SfWebAppFrontOfficeBundle:Resetting:passwordAlreadyRequested.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
