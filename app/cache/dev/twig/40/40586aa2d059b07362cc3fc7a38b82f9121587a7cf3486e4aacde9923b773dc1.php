<?php

/* SfWebAppFrontOfficeBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_1c9006de121b0934c9f7c01e0a536d4b69a1a7da3be6d99d76a16ac3b2cce2a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SfWebAppFrontOfficeBundle::layout.html.twig", "SfWebAppFrontOfficeBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_8ac62853b66d8533148067c266f8218115538a9f52d281bbc4a95e674a06b51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac62853b66d8533148067c266f8218115538a9f52d281bbc4a95e674a06b51f->enter($__internal_8ac62853b66d8533148067c266f8218115538a9f52d281bbc4a95e674a06b51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ac62853b66d8533148067c266f8218115538a9f52d281bbc4a95e674a06b51f->leave($__internal_8ac62853b66d8533148067c266f8218115538a9f52d281bbc4a95e674a06b51f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_bded31a07585a66f74bc9236df336a6a2fd3622bee1b6391f83a16e55836683a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bded31a07585a66f74bc9236df336a6a2fd3622bee1b6391f83a16e55836683a->enter($__internal_bded31a07585a66f74bc9236df336a6a2fd3622bee1b6391f83a16e55836683a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Resetting:checkEmail.html.twig"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reset_password"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"panel-body\">
                    <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_bded31a07585a66f74bc9236df336a6a2fd3622bee1b6391f83a16e55836683a->leave($__internal_bded31a07585a66f74bc9236df336a6a2fd3622bee1b6391f83a16e55836683a_prof);

    }

    public function getTemplateName()
    {
        return "SfWebAppFrontOfficeBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
                    <h2 class=\"panel-title\">{{ 'reset_password'|trans }}</h2>
                </div>
                <div class=\"panel-body\">
                    <p>{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}</p>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "SfWebAppFrontOfficeBundle:Resetting:checkEmail.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/src/SfWebApp/FrontOfficeBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
