<?php

/* SfWebAppFrontOfficeBundle:Resetting:reset.html.twig */
class __TwigTemplate_28bdd7656093d5d12f8b9af786b1479785d07ef253f0fe7e063c546742fbe970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SfWebAppFrontOfficeBundle::layout.html.twig", "SfWebAppFrontOfficeBundle:Resetting:reset.html.twig", 1);
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
        $__internal_e5e081bf1c54e6cbb9d4e0cbbb98c47d0e110bf096d4acae8ce1251987acf627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e081bf1c54e6cbb9d4e0cbbb98c47d0e110bf096d4acae8ce1251987acf627->enter($__internal_e5e081bf1c54e6cbb9d4e0cbbb98c47d0e110bf096d4acae8ce1251987acf627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5e081bf1c54e6cbb9d4e0cbbb98c47d0e110bf096d4acae8ce1251987acf627->leave($__internal_e5e081bf1c54e6cbb9d4e0cbbb98c47d0e110bf096d4acae8ce1251987acf627_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_25490bec78afd9f6fde6e5c70683ad4f3279bc48f6432c8cf1a6d5878e366398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25490bec78afd9f6fde6e5c70683ad4f3279bc48f6432c8cf1a6d5878e366398->enter($__internal_25490bec78afd9f6fde6e5c70683ad4f3279bc48f6432c8cf1a6d5878e366398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Resetting:reset.html.twig"));

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
                    ";
        // line 11
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 12
        echo "                    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new", array()), "first", array()), 'row');
        echo "
                    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new", array()), "second", array()), 'row');
        echo "
                    <button type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reset_password"), "html", null, true);
        echo "</button>
                    ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_25490bec78afd9f6fde6e5c70683ad4f3279bc48f6432c8cf1a6d5878e366398->leave($__internal_25490bec78afd9f6fde6e5c70683ad4f3279bc48f6432c8cf1a6d5878e366398_prof);

    }

    public function getTemplateName()
    {
        return "SfWebAppFrontOfficeBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  67 => 15,  63 => 14,  59 => 13,  54 => 12,  52 => 11,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
                    {% form_theme form 'bootstrap_3_layout.html.twig' %}
                    {{ form_start(form) }}
                    {{ form_row(form.new.first) }}
                    {{ form_row(form.new.second) }}
                    <button type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}\" />{{ 'reset_password'|trans }}</button>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "SfWebAppFrontOfficeBundle:Resetting:reset.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Resetting/reset.html.twig");
    }
}
