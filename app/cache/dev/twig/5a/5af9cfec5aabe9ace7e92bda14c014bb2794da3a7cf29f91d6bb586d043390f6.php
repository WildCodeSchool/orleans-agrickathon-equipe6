<?php

/* SfWebAppFrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_7a0830a65145a2c4131a568082857c204722a8f587f2f7c303177f9dd6c5f212 extends Twig_Template
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
        $__internal_034709ca4c8f7c4ed12d2d6584f192db95c59857faba968ef5dcf284d548b1f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034709ca4c8f7c4ed12d2d6584f192db95c59857faba968ef5dcf284d548b1f9->enter($__internal_034709ca4c8f7c4ed12d2d6584f192db95c59857faba968ef5dcf284d548b1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_034709ca4c8f7c4ed12d2d6584f192db95c59857faba968ef5dcf284d548b1f9->leave($__internal_034709ca4c8f7c4ed12d2d6584f192db95c59857faba968ef5dcf284d548b1f9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e8e7c33fcf9e8bf64d8d6742e214e97211a5bdece9dd15003517941bfa87f116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e7c33fcf9e8bf64d8d6742e214e97211a5bdece9dd15003517941bfa87f116->enter($__internal_e8e7c33fcf9e8bf64d8d6742e214e97211a5bdece9dd15003517941bfa87f116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Default:index.html.twig"));

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
        
        $__internal_e8e7c33fcf9e8bf64d8d6742e214e97211a5bdece9dd15003517941bfa87f116->leave($__internal_e8e7c33fcf9e8bf64d8d6742e214e97211a5bdece9dd15003517941bfa87f116_prof);

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
