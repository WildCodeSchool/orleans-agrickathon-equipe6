<?php

/* SfWebAppFrontOfficeBundle:Profile/Registration:checkEmail.html.twig */
class __TwigTemplate_2ec19a465e9a445cb5e260c98a7d85a33feddfe1325760317e7ff84e49189c54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SfWebAppFrontOfficeBundle::layout.html.twig", "SfWebAppFrontOfficeBundle:Profile/Registration:checkEmail.html.twig", 1);
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
        $__internal_32bb6d216a256c9e7f7603e6b834f344b9c9bd196af81b167d3731332db01e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32bb6d216a256c9e7f7603e6b834f344b9c9bd196af81b167d3731332db01e5b->enter($__internal_32bb6d216a256c9e7f7603e6b834f344b9c9bd196af81b167d3731332db01e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Profile/Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32bb6d216a256c9e7f7603e6b834f344b9c9bd196af81b167d3731332db01e5b->leave($__internal_32bb6d216a256c9e7f7603e6b834f344b9c9bd196af81b167d3731332db01e5b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_56f16dffb23bb93286a86b044e335138b1f2804f57b2b92416e2bbdd4bf3d016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f16dffb23bb93286a86b044e335138b1f2804f57b2b92416e2bbdd4bf3d016->enter($__internal_56f16dffb23bb93286a86b044e335138b1f2804f57b2b92416e2bbdd4bf3d016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Profile/Registration:checkEmail.html.twig"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("check_email"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"panel-body\">
                    <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_56f16dffb23bb93286a86b044e335138b1f2804f57b2b92416e2bbdd4bf3d016->leave($__internal_56f16dffb23bb93286a86b044e335138b1f2804f57b2b92416e2bbdd4bf3d016_prof);

    }

    public function getTemplateName()
    {
        return "SfWebAppFrontOfficeBundle:Profile/Registration:checkEmail.html.twig";
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
                    <h2 class=\"panel-title\">{{ 'check_email'|trans }}</h2>
                </div>
                <div class=\"panel-body\">
                    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "SfWebAppFrontOfficeBundle:Profile/Registration:checkEmail.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Profile/Registration/checkEmail.html.twig");
    }
}
