<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_4e79a87e50f9e669380ec1831e63aca9891939d2488cf522ee8814004c0e32d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SfWebAppFrontOfficeBundle::layout-login.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SfWebAppFrontOfficeBundle::layout-login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0160db1ab241066b60bb0f0d346c21c56439a899c672b9517587ebd44f2c827f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0160db1ab241066b60bb0f0d346c21c56439a899c672b9517587ebd44f2c827f->enter($__internal_0160db1ab241066b60bb0f0d346c21c56439a899c672b9517587ebd44f2c827f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0160db1ab241066b60bb0f0d346c21c56439a899c672b9517587ebd44f2c827f->leave($__internal_0160db1ab241066b60bb0f0d346c21c56439a899c672b9517587ebd44f2c827f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6d638270495c8c4f86d89afd9cdb2f2247a4e17ad93e92ce3be967fc0d602517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d638270495c8c4f86d89afd9cdb2f2247a4e17ad93e92ce3be967fc0d602517->enter($__internal_6d638270495c8c4f86d89afd9cdb2f2247a4e17ad93e92ce3be967fc0d602517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    <div id=\"layout-view\" class=\"view view-login\">
        ";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "            <div class=\"bg-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 8
        echo "        <div id=\"login-form\" class=\"col-md-4 col-md-offset-4\">
            <div class=\"columns clearfix\">
                <div class=\"column-01\">

                </div>
                <div class=\"column-02\">
                    <h1></h1>
                    <p>Espace client</p>
                </div>
            </div>
            <form action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"center-block\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"/>
                </div>
                <div class=\"form-group\">
                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"/>
                </div>
                <div class=\"form-group\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                </div>
                <div class=\"form-group\">
                    <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">
                        <strong>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reset_password"), "html", null, true);
        echo "</strong>
                    </a>
                </div>
                <input class=\"btn btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </form>
        </div>
    </div>

";
        
        $__internal_6d638270495c8c4f86d89afd9cdb2f2247a4e17ad93e92ce3be967fc0d602517->leave($__internal_6d638270495c8c4f86d89afd9cdb2f2247a4e17ad93e92ce3be967fc0d602517_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 35,  92 => 32,  88 => 31,  82 => 28,  72 => 21,  67 => 19,  63 => 18,  51 => 8,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SfWebAppFrontOfficeBundle::layout-login.html.twig' %}

{% block content %}
    <div id=\"layout-view\" class=\"view view-login\">
        {% if error %}
            <div class=\"bg-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}
        <div id=\"login-form\" class=\"col-md-4 col-md-offset-4\">
            <div class=\"columns clearfix\">
                <div class=\"column-01\">

                </div>
                <div class=\"column-02\">
                    <h1></h1>
                    <p>Espace client</p>
                </div>
            </div>
            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"center-block\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"/>
                </div>
                <div class=\"form-group\">
                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"/>
                </div>
                <div class=\"form-group\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>
                </div>
                <div class=\"form-group\">
                    <a href=\"{{ path('fos_user_resetting_request') }}\">
                        <strong>{{ 'reset_password'|trans }}</strong>
                    </a>
                </div>
                <input class=\"btn btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\" />
            </form>
        </div>
    </div>

{% endblock %}", "FOSUserBundle:Security:login.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Security/login.html.twig");
    }
}
