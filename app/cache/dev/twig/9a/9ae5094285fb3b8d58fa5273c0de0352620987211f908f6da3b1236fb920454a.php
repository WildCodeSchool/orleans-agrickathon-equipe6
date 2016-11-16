<?php

/* SfWebAppFrontOfficeBundle:Profile/Registration:register.html.twig */
class __TwigTemplate_a8b13122983b41ec292c38a2f56282e48da7e1880d6b5ba4717c6421f015e22b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SfWebAppFrontOfficeBundle::layout.html.twig", "SfWebAppFrontOfficeBundle:Profile/Registration:register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SfWebAppFrontOfficeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fb093ce071227f30aa4b799af7c1fde37d5a96f1e9d194c04fce16857a14fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb093ce071227f30aa4b799af7c1fde37d5a96f1e9d194c04fce16857a14fec->enter($__internal_5fb093ce071227f30aa4b799af7c1fde37d5a96f1e9d194c04fce16857a14fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Profile/Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fb093ce071227f30aa4b799af7c1fde37d5a96f1e9d194c04fce16857a14fec->leave($__internal_5fb093ce071227f30aa4b799af7c1fde37d5a96f1e9d194c04fce16857a14fec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc0044faf65c3972f562c97057e70762396389b6d7e027e7ba02c4bc9f685d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0044faf65c3972f562c97057e70762396389b6d7e027e7ba02c4bc9f685d2f->enter($__internal_bc0044faf65c3972f562c97057e70762396389b6d7e027e7ba02c4bc9f685d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Profile/Registration:register.html.twig"));

        echo "Register";
        
        $__internal_bc0044faf65c3972f562c97057e70762396389b6d7e027e7ba02c4bc9f685d2f->leave($__internal_bc0044faf65c3972f562c97057e70762396389b6d7e027e7ba02c4bc9f685d2f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_e29f16a0846ad6a2bb73b94d84e915dc54dc0d2738b9b90740a413af02bb1f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29f16a0846ad6a2bb73b94d84e915dc54dc0d2738b9b90740a413af02bb1f0a->enter($__internal_e29f16a0846ad6a2bb73b94d84e915dc54dc0d2738b9b90740a413af02bb1f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Profile/Registration:register.html.twig"));

        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_register"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 13
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 14
        echo "                    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'row');
        echo "
                    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
                    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'row');
        echo "
                    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'row');
        echo "
                    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'row');
        echo "
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'row');
        echo "
                    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zip_code", array()), 'row');
        echo "
                    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'row');
        echo "
                    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), 'row');
        echo "
                    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
                    <button type=\"submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-success\"/>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("register"), "html", null, true);
        echo "</button>
                    ";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_e29f16a0846ad6a2bb73b94d84e915dc54dc0d2738b9b90740a413af02bb1f0a->leave($__internal_e29f16a0846ad6a2bb73b94d84e915dc54dc0d2738b9b90740a413af02bb1f0a_prof);

    }

    public function getTemplateName()
    {
        return "SfWebAppFrontOfficeBundle:Profile/Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 28,  120 => 27,  116 => 26,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  67 => 14,  65 => 13,  59 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Register{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">{{ 'title_user_register'|trans }}</h2>
                </div>
                <div class=\"panel-body\">
                    {% form_theme form 'bootstrap_3_layout.html.twig' %}
                    {{ form_start(form) }}
                    {{ form_row(form.gender) }}
                    {{ form_row(form.username) }}
                    {{ form_row(form.firstname) }}
                    {{ form_row(form.lastname) }}
                    {{ form_row(form.email) }}
                    {{ form_row(form.phone) }}
                    {{ form_row(form.address) }}
                    {{ form_row(form.zip_code) }}
                    {{ form_row(form.city) }}
                    {{ form_row(form.country) }}
                    {{ form_row(form.plainPassword.first) }}
                    {{ form_row(form.plainPassword.second) }}
                    <button type=\"submit\" value=\"{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}\" class=\"btn btn-success\"/>{{ 'register'|trans }}</button>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "SfWebAppFrontOfficeBundle:Profile/Registration:register.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Profile/Registration/register.html.twig");
    }
}
