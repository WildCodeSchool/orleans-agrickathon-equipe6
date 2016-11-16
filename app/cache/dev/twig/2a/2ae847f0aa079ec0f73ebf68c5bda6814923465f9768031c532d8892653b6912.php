<?php

/* SfWebAppBackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_651f537b68fda2e4680ffbbe7c31f266342bfe67763710800f332b1c48b1d466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SfWebAppBackOfficeBundle::login.html.twig", "SfWebAppBackOfficeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SfWebAppBackOfficeBundle::login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b7c3326d260b2d7627e8537df75bbca01d95f0367488896ca3401cc5f84b6f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7c3326d260b2d7627e8537df75bbca01d95f0367488896ca3401cc5f84b6f6->enter($__internal_2b7c3326d260b2d7627e8537df75bbca01d95f0367488896ca3401cc5f84b6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppBackOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b7c3326d260b2d7627e8537df75bbca01d95f0367488896ca3401cc5f84b6f6->leave($__internal_2b7c3326d260b2d7627e8537df75bbca01d95f0367488896ca3401cc5f84b6f6_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_882e1a6b51652f163528186488255467f1e1863a310d0329e0576557653033ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_882e1a6b51652f163528186488255467f1e1863a310d0329e0576557653033ad->enter($__internal_882e1a6b51652f163528186488255467f1e1863a310d0329e0576557653033ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppBackOfficeBundle:Default:index.html.twig"));

        // line 5
        echo "
    <div id=\"layout-view\" class=\"view view-login\">
        ";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "            <div class=\"bg-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
        ";
        }
        // line 10
        echo "        <div id=\"login-form\" class=\"col-md-4 col-md-offset-4\">

            <h1 class=\"text-center\">Blog Test</h1>

            <form action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sf_web_app_back_office_security_check");
        echo "\" method=\"post\" class=\"center-block\">

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("email_address"), "html", null, true);
        echo "\"/>
                </div>
                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("password"), "html", null, true);
        echo "\"/>
                </div>
                <div class=\"form-group\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                </div>

                <input class=\"btn btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />

            </form>

        </div>
    </div>
";
        
        $__internal_882e1a6b51652f163528186488255467f1e1863a310d0329e0576557653033ad->leave($__internal_882e1a6b51652f163528186488255467f1e1863a310d0329e0576557653033ad_prof);

    }

    public function getTemplateName()
    {
        return "SfWebAppBackOfficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  84 => 26,  77 => 22,  69 => 19,  63 => 16,  58 => 14,  52 => 10,  46 => 8,  44 => 7,  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SfWebAppBackOfficeBundle::login.html.twig' %}


{% block content %}

    <div id=\"layout-view\" class=\"view view-login\">
        {% if error %}
            <div class=\"bg-danger\">{{ error|trans({}, 'FOSUserBundle') }}</div>
        {% endif %}
        <div id=\"login-form\" class=\"col-md-4 col-md-offset-4\">

            <h1 class=\"text-center\">Blog Test</h1>

            <form action=\"{{ path(\"sf_web_app_back_office_security_check\") }}\" method=\"post\" class=\"center-block\">

                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" placeholder=\"{{ 'email_address'|trans }}\"/>
                </div>
                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"{{ 'password'|trans }}\"/>
                </div>
                <div class=\"form-group\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>
                </div>

                <input class=\"btn btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\" />

            </form>

        </div>
    </div>
{% endblock %}

", "SfWebAppBackOfficeBundle:Default:index.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/src/SfWebApp/BackOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
