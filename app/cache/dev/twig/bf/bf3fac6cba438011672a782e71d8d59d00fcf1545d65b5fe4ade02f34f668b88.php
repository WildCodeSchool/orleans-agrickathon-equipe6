<?php

/* SfWebAppFrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_6ced3b15d09b4510fb0ea79e879ba03e344c408a26b878f45f9224d5865f1579 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SfWebAppFrontOfficeBundle:Security:layout.html.twig", "SfWebAppFrontOfficeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SfWebAppFrontOfficeBundle:Security:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba1eafcbfe9c39c44e08e839519361aab9ef7de00d84555d0ab88a6d277294c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba1eafcbfe9c39c44e08e839519361aab9ef7de00d84555d0ab88a6d277294c2->enter($__internal_ba1eafcbfe9c39c44e08e839519361aab9ef7de00d84555d0ab88a6d277294c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba1eafcbfe9c39c44e08e839519361aab9ef7de00d84555d0ab88a6d277294c2->leave($__internal_ba1eafcbfe9c39c44e08e839519361aab9ef7de00d84555d0ab88a6d277294c2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_fb7c6f1d76ed154948eab46ace82f6086c73ca2ae2c9c891033841c0dcd6ce04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7c6f1d76ed154948eab46ace82f6086c73ca2ae2c9c891033841c0dcd6ce04->enter($__internal_fb7c6f1d76ed154948eab46ace82f6086c73ca2ae2c9c891033841c0dcd6ce04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Default:index.html.twig"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("dashboard"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"panel-body\">
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_fb7c6f1d76ed154948eab46ace82f6086c73ca2ae2c9c891033841c0dcd6ce04->leave($__internal_fb7c6f1d76ed154948eab46ace82f6086c73ca2ae2c9c891033841c0dcd6ce04_prof);

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
        return new Twig_Source("{% extends 'SfWebAppFrontOfficeBundle:Security:layout.html.twig' %}

{% block content %}

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">{{ 'dashboard'|trans }}</h2>
                </div>
                <div class=\"panel-body\">
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "SfWebAppFrontOfficeBundle:Default:index.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/src/SfWebApp/FrontOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
