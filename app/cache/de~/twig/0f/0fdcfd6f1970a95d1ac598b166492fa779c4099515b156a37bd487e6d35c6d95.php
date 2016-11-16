<?php

/* SfWebAppFrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_2797f9ef433db4876704bb98e9d106a84fb2f83a84e08785b478625e70619163 extends Twig_Template
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
        $__internal_c5ef48c4b6d2327536c3947f65857c6d7ffe409e4b028a72e9cbc7bbe70631d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ef48c4b6d2327536c3947f65857c6d7ffe409e4b028a72e9cbc7bbe70631d3->enter($__internal_c5ef48c4b6d2327536c3947f65857c6d7ffe409e4b028a72e9cbc7bbe70631d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5ef48c4b6d2327536c3947f65857c6d7ffe409e4b028a72e9cbc7bbe70631d3->leave($__internal_c5ef48c4b6d2327536c3947f65857c6d7ffe409e4b028a72e9cbc7bbe70631d3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c681431883475abc53a31b961e09ec7d4977f3716acf10c3def1cf3b2611ddbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c681431883475abc53a31b961e09ec7d4977f3716acf10c3def1cf3b2611ddbf->enter($__internal_c681431883475abc53a31b961e09ec7d4977f3716acf10c3def1cf3b2611ddbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Default:index.html.twig"));

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
        
        $__internal_c681431883475abc53a31b961e09ec7d4977f3716acf10c3def1cf3b2611ddbf->leave($__internal_c681431883475abc53a31b961e09ec7d4977f3716acf10c3def1cf3b2611ddbf_prof);

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
                    <h2 class=\"panel-title\">{{ 'dashboard'|trans }}</h2>
                </div>
                <div class=\"panel-body\">
                </div>
            </div>
        </div>
    </div>

{% endblock %}

", "SfWebAppFrontOfficeBundle:Default:index.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
