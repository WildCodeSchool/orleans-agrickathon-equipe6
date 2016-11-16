<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_275ad5cbe6407c5250bff9a77f13909ab2de62b98f16dd6ef59b3af3c41842ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_2931357ae29074ccb7d226017a31e98c711eb60de053de4010b26147308dd58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2931357ae29074ccb7d226017a31e98c711eb60de053de4010b26147308dd58c->enter($__internal_2931357ae29074ccb7d226017a31e98c711eb60de053de4010b26147308dd58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2931357ae29074ccb7d226017a31e98c711eb60de053de4010b26147308dd58c->leave($__internal_2931357ae29074ccb7d226017a31e98c711eb60de053de4010b26147308dd58c_prof);
=======
        $__internal_4f289e54e9db2ff3dee399079aa9d80c2114d30f119c63037a0de9bb41e7c74f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f289e54e9db2ff3dee399079aa9d80c2114d30f119c63037a0de9bb41e7c74f->enter($__internal_4f289e54e9db2ff3dee399079aa9d80c2114d30f119c63037a0de9bb41e7c74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f289e54e9db2ff3dee399079aa9d80c2114d30f119c63037a0de9bb41e7c74f->leave($__internal_4f289e54e9db2ff3dee399079aa9d80c2114d30f119c63037a0de9bb41e7c74f_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_b1057aa3dbc1e0c00d416e7c9c96d9170230f32c4f989181a5499ef8af125738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1057aa3dbc1e0c00d416e7c9c96d9170230f32c4f989181a5499ef8af125738->enter($__internal_b1057aa3dbc1e0c00d416e7c9c96d9170230f32c4f989181a5499ef8af125738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:confirmed.html.twig"));
=======
        $__internal_c3e192a8c359a31f3a0019e46f042bf44bca145352e95738165de060959286bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e192a8c359a31f3a0019e46f042bf44bca145352e95738165de060959286bb->enter($__internal_c3e192a8c359a31f3a0019e46f042bf44bca145352e95738165de060959286bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:confirmed.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 5
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()))) {
            // line 6
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 7
            echo "        ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 8
            echo "    ";
        }
        
<<<<<<< HEAD
        $__internal_b1057aa3dbc1e0c00d416e7c9c96d9170230f32c4f989181a5499ef8af125738->leave($__internal_b1057aa3dbc1e0c00d416e7c9c96d9170230f32c4f989181a5499ef8af125738_prof);
=======
        $__internal_c3e192a8c359a31f3a0019e46f042bf44bca145352e95738165de060959286bb->leave($__internal_c3e192a8c359a31f3a0019e46f042bf44bca145352e95738165de060959286bb_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  50 => 7,  47 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}, 'FOSUserBundle') }}</p>
    {% if app.session is not empty %}
        {% set targetUrl = app.session.get('_security.' ~ app.security.token.providerKey ~ '.target_path') %}
        {% if targetUrl is not empty %}<p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans({}, 'FOSUserBundle') }}</a></p>{% endif %}
    {% endif %}
{% endblock fos_user_content %}
<<<<<<< HEAD
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/confirmed.html.twig");
=======
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/confirmed.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
