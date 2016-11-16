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
<<<<<<< HEAD
        $__internal_8aceca40ec720562738ddf051ce9bf03ad9f9352f2e2e6792777f03db7fa78c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aceca40ec720562738ddf051ce9bf03ad9f9352f2e2e6792777f03db7fa78c4->enter($__internal_8aceca40ec720562738ddf051ce9bf03ad9f9352f2e2e6792777f03db7fa78c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aceca40ec720562738ddf051ce9bf03ad9f9352f2e2e6792777f03db7fa78c4->leave($__internal_8aceca40ec720562738ddf051ce9bf03ad9f9352f2e2e6792777f03db7fa78c4_prof);
=======
        $__internal_2590042a60a95119feea4b5fa0a8fd6167f504a0ecac902937d631f1d1cdd652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2590042a60a95119feea4b5fa0a8fd6167f504a0ecac902937d631f1d1cdd652->enter($__internal_2590042a60a95119feea4b5fa0a8fd6167f504a0ecac902937d631f1d1cdd652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2590042a60a95119feea4b5fa0a8fd6167f504a0ecac902937d631f1d1cdd652->leave($__internal_2590042a60a95119feea4b5fa0a8fd6167f504a0ecac902937d631f1d1cdd652_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_303b9d909c1d83b1865cd7ee1909fdc4e272f38f4af964807ba9604e2768e269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303b9d909c1d83b1865cd7ee1909fdc4e272f38f4af964807ba9604e2768e269->enter($__internal_303b9d909c1d83b1865cd7ee1909fdc4e272f38f4af964807ba9604e2768e269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Resetting:checkEmail.html.twig"));
=======
        $__internal_1f9d2ed1ebf49e566d9d4aeb73357b78dc74b0a4d299e6c0aab4d7ad4a33d697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9d2ed1ebf49e566d9d4aeb73357b78dc74b0a4d299e6c0aab4d7ad4a33d697->enter($__internal_1f9d2ed1ebf49e566d9d4aeb73357b78dc74b0a4d299e6c0aab4d7ad4a33d697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Resetting:checkEmail.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

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
        
<<<<<<< HEAD
        $__internal_303b9d909c1d83b1865cd7ee1909fdc4e272f38f4af964807ba9604e2768e269->leave($__internal_303b9d909c1d83b1865cd7ee1909fdc4e272f38f4af964807ba9604e2768e269_prof);
=======
        $__internal_1f9d2ed1ebf49e566d9d4aeb73357b78dc74b0a4d299e6c0aab4d7ad4a33d697->leave($__internal_1f9d2ed1ebf49e566d9d4aeb73357b78dc74b0a4d299e6c0aab4d7ad4a33d697_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

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
<<<<<<< HEAD
{% endblock %}", "SfWebAppFrontOfficeBundle:Resetting:checkEmail.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Resetting/checkEmail.html.twig");
=======
{% endblock %}", "SfWebAppFrontOfficeBundle:Resetting:checkEmail.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Resetting/checkEmail.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
