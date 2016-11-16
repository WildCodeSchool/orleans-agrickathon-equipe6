<?php

/* SfWebAppBackOfficeBundle:Security:login.html.twig */
class __TwigTemplate_e96fd6ca030d0e167c7b40f743b066658077cb79b596fd79e5a8133c0f15ea55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SfWebAppBackOfficeBundle::layout-login.html.twig", "SfWebAppBackOfficeBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SfWebAppBackOfficeBundle::layout-login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e54ca02f443b70816123b1232b97ab658d22401d079444dbcdd0945e51e1d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e54ca02f443b70816123b1232b97ab658d22401d079444dbcdd0945e51e1d24->enter($__internal_1e54ca02f443b70816123b1232b97ab658d22401d079444dbcdd0945e51e1d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppBackOfficeBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e54ca02f443b70816123b1232b97ab658d22401d079444dbcdd0945e51e1d24->leave($__internal_1e54ca02f443b70816123b1232b97ab658d22401d079444dbcdd0945e51e1d24_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_92503d3b9e3889e3bb23e95d4887a8b7f280f976a23e28cb360cc47c6e7bc18b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92503d3b9e3889e3bb23e95d4887a8b7f280f976a23e28cb360cc47c6e7bc18b->enter($__internal_92503d3b9e3889e3bb23e95d4887a8b7f280f976a23e28cb360cc47c6e7bc18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppBackOfficeBundle:Security:login.html.twig"));

        // line 4
        echo "
    <div id=\"layout-view\" class=\"view view-login\">
        ";
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "            <div class=\"bg-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
        ";
        }
        // line 9
        echo "        <div id=\"login-form\" class=\"col-md-4 col-md-offset-4\">

            <h1 class=\"text-center\">Blog Test</h1>

            <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sf_web_app_back_office_security_check");
        echo "\" method=\"post\" class=\"center-block\">

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("email_address"), "html", null, true);
        echo "\"/>
                </div>
                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("password"), "html", null, true);
        echo "\"/>
                </div>
                <div class=\"form-group\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                </div>

                <input class=\"btn btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />

            </form>

        </div>
    </div>
";
        
        $__internal_92503d3b9e3889e3bb23e95d4887a8b7f280f976a23e28cb360cc47c6e7bc18b->leave($__internal_92503d3b9e3889e3bb23e95d4887a8b7f280f976a23e28cb360cc47c6e7bc18b_prof);

    }

    public function getTemplateName()
    {
        return "SfWebAppBackOfficeBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 28,  84 => 25,  77 => 21,  69 => 18,  63 => 15,  58 => 13,  52 => 9,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SfWebAppBackOfficeBundle::layout-login.html.twig' %}

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
{% endblock %}", "SfWebAppBackOfficeBundle:Security:login.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/BackOfficeBundle/Resources/views/Security/login.html.twig");
    }
}
