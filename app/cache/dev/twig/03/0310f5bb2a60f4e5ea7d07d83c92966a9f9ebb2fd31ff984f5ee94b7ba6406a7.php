<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_2abc2d7c276092202bb15d9ef580a8fc31ac05fcf36055a06e4ffb335cfb652c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_f4a0d18df1426440e6d8625705768d27fa3601920870a2ee79b9ccc407b1d79d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a0d18df1426440e6d8625705768d27fa3601920870a2ee79b9ccc407b1d79d->enter($__internal_f4a0d18df1426440e6d8625705768d27fa3601920870a2ee79b9ccc407b1d79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4a0d18df1426440e6d8625705768d27fa3601920870a2ee79b9ccc407b1d79d->leave($__internal_f4a0d18df1426440e6d8625705768d27fa3601920870a2ee79b9ccc407b1d79d_prof);
=======
        $__internal_c0e2015a31a6d4972c0f1bc3f40aef88121d4fe8b6bf2b90422080cc5d5faf1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e2015a31a6d4972c0f1bc3f40aef88121d4fe8b6bf2b90422080cc5d5faf1d->enter($__internal_c0e2015a31a6d4972c0f1bc3f40aef88121d4fe8b6bf2b90422080cc5d5faf1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0e2015a31a6d4972c0f1bc3f40aef88121d4fe8b6bf2b90422080cc5d5faf1d->leave($__internal_c0e2015a31a6d4972c0f1bc3f40aef88121d4fe8b6bf2b90422080cc5d5faf1d_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_ed84aee005cc881c6d35a99793b7377122208fc02c6c61b52234d5f8ee5b94ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed84aee005cc881c6d35a99793b7377122208fc02c6c61b52234d5f8ee5b94ef->enter($__internal_ed84aee005cc881c6d35a99793b7377122208fc02c6c61b52234d5f8ee5b94ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:ChangePassword:changePassword.html.twig"));
=======
        $__internal_cfb741d1197fd762089c6378dce3b6125e8572d1cea0110167500c94f53070ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb741d1197fd762089c6378dce3b6125e8572d1cea0110167500c94f53070ee->enter($__internal_cfb741d1197fd762089c6378dce3b6125e8572d1cea0110167500c94f53070ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:ChangePassword:changePassword.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
<<<<<<< HEAD
        $__internal_ed84aee005cc881c6d35a99793b7377122208fc02c6c61b52234d5f8ee5b94ef->leave($__internal_ed84aee005cc881c6d35a99793b7377122208fc02c6c61b52234d5f8ee5b94ef_prof);
=======
        $__internal_cfb741d1197fd762089c6378dce3b6125e8572d1cea0110167500c94f53070ee->leave($__internal_cfb741d1197fd762089c6378dce3b6125e8572d1cea0110167500c94f53070ee_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
<<<<<<< HEAD
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/ChangePassword/changePassword.html.twig");
=======
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/ChangePassword/changePassword.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
