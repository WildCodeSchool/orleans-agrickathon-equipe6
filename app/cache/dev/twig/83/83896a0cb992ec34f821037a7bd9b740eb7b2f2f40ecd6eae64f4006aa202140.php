<?php

/* SfWebAppFrontOfficeBundle:Resetting:request.html.twig */
class __TwigTemplate_949da7301e9b2dd067b433d4a3503b476b54cdf912d52ef4b8aa2578878a78aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SfWebAppFrontOfficeBundle::layout.html.twig", "SfWebAppFrontOfficeBundle:Resetting:request.html.twig", 1);
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
        $__internal_ea75a644e3fe1e5d48d5e80c5ab82348397e4fd452fc3d58f7cfef3bc58ca164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea75a644e3fe1e5d48d5e80c5ab82348397e4fd452fc3d58f7cfef3bc58ca164->enter($__internal_ea75a644e3fe1e5d48d5e80c5ab82348397e4fd452fc3d58f7cfef3bc58ca164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea75a644e3fe1e5d48d5e80c5ab82348397e4fd452fc3d58f7cfef3bc58ca164->leave($__internal_ea75a644e3fe1e5d48d5e80c5ab82348397e4fd452fc3d58f7cfef3bc58ca164_prof);
=======
        $__internal_0b31c0f2ebf132910bbe26500be79629f40f7d3031c7d39277468afa92460c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b31c0f2ebf132910bbe26500be79629f40f7d3031c7d39277468afa92460c12->enter($__internal_0b31c0f2ebf132910bbe26500be79629f40f7d3031c7d39277468afa92460c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b31c0f2ebf132910bbe26500be79629f40f7d3031c7d39277468afa92460c12->leave($__internal_0b31c0f2ebf132910bbe26500be79629f40f7d3031c7d39277468afa92460c12_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_873f68a78311ec0530f1b501f951bea83da0b41c336c714199fa04904f1ba989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873f68a78311ec0530f1b501f951bea83da0b41c336c714199fa04904f1ba989->enter($__internal_873f68a78311ec0530f1b501f951bea83da0b41c336c714199fa04904f1ba989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Resetting:request.html.twig"));
=======
        $__internal_f8d21b32dcd1dc3f7273c93c03951e9a4c99924f70a6e80d55e7c42fa33c2799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d21b32dcd1dc3f7273c93c03951e9a4c99924f70a6e80d55e7c42fa33c2799->enter($__internal_f8d21b32dcd1dc3f7273c93c03951e9a4c99924f70a6e80d55e7c42fa33c2799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Resetting:request.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 4
        echo "    <div class=\"row\" >
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
        if (array_key_exists("invalid_username", $context)) {
            // line 12
            echo "                        <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
                    ";
        }
        // line 14
        echo "                    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
                        <div class=\"form-group\">
                            <label for=\"username\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input type=\"text\" id=\"username\" class=\"form-control\" name=\"username\" required=\"required\" />
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reset_password"), "html", null, true);
        echo "</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        
<<<<<<< HEAD
        $__internal_873f68a78311ec0530f1b501f951bea83da0b41c336c714199fa04904f1ba989->leave($__internal_873f68a78311ec0530f1b501f951bea83da0b41c336c714199fa04904f1ba989_prof);
=======
        $__internal_f8d21b32dcd1dc3f7273c93c03951e9a4c99924f70a6e80d55e7c42fa33c2799->leave($__internal_f8d21b32dcd1dc3f7273c93c03951e9a4c99924f70a6e80d55e7c42fa33c2799_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "SfWebAppFrontOfficeBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  66 => 16,  60 => 14,  54 => 12,  52 => 11,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
    <div class=\"row\" >
        <div class=\"col-md-12\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">{{ 'reset_password'|trans }}</h2>
                </div>
                <div class=\"panel-body\">
                    {% if invalid_username is defined %}
                        <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</p>
                    {% endif %}
                    <form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
                        <div class=\"form-group\">
                            <label for=\"username\">{{ 'resetting.request.username'|trans({}, 'FOSUserBundle') }}</label>
                            <input type=\"text\" id=\"username\" class=\"form-control\" name=\"username\" required=\"required\" />
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}\" />{{ 'reset_password'|trans }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
{% endblock %}", "SfWebAppFrontOfficeBundle:Resetting:request.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Resetting/request.html.twig");
=======
{% endblock %}", "SfWebAppFrontOfficeBundle:Resetting:request.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Resetting/request.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
