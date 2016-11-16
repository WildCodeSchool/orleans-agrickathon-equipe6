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
        $__internal_8a9f891391567f234e814b7c46c930bd549d9acd1aba98fd8fa29122459e5c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9f891391567f234e814b7c46c930bd549d9acd1aba98fd8fa29122459e5c57->enter($__internal_8a9f891391567f234e814b7c46c930bd549d9acd1aba98fd8fa29122459e5c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Profile/Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a9f891391567f234e814b7c46c930bd549d9acd1aba98fd8fa29122459e5c57->leave($__internal_8a9f891391567f234e814b7c46c930bd549d9acd1aba98fd8fa29122459e5c57_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d23c827b8cdc34dfc9848ee3e95fb67fc44c3c02c671da7cbfaaa06904c20133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23c827b8cdc34dfc9848ee3e95fb67fc44c3c02c671da7cbfaaa06904c20133->enter($__internal_d23c827b8cdc34dfc9848ee3e95fb67fc44c3c02c671da7cbfaaa06904c20133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Profile/Registration:checkEmail.html.twig"));

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
        
        $__internal_d23c827b8cdc34dfc9848ee3e95fb67fc44c3c02c671da7cbfaaa06904c20133->leave($__internal_d23c827b8cdc34dfc9848ee3e95fb67fc44c3c02c671da7cbfaaa06904c20133_prof);

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
{% endblock %}", "SfWebAppFrontOfficeBundle:Profile/Registration:checkEmail.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/src/SfWebApp/FrontOfficeBundle/Resources/views/Profile/Registration/checkEmail.html.twig");
    }
}
