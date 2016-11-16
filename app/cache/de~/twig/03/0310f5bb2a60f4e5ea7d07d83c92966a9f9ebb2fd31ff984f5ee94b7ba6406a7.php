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
        $__internal_52d37b587fcf954820911ce55c5bc1e49987d79e7270c17b6027f3e088119cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d37b587fcf954820911ce55c5bc1e49987d79e7270c17b6027f3e088119cb3->enter($__internal_52d37b587fcf954820911ce55c5bc1e49987d79e7270c17b6027f3e088119cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52d37b587fcf954820911ce55c5bc1e49987d79e7270c17b6027f3e088119cb3->leave($__internal_52d37b587fcf954820911ce55c5bc1e49987d79e7270c17b6027f3e088119cb3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d40f6b2dcf4ac6e570d00fcb5d3850c2b931b9d088081fb7ede4e71e2df75930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40f6b2dcf4ac6e570d00fcb5d3850c2b931b9d088081fb7ede4e71e2df75930->enter($__internal_d40f6b2dcf4ac6e570d00fcb5d3850c2b931b9d088081fb7ede4e71e2df75930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_d40f6b2dcf4ac6e570d00fcb5d3850c2b931b9d088081fb7ede4e71e2df75930->leave($__internal_d40f6b2dcf4ac6e570d00fcb5d3850c2b931b9d088081fb7ede4e71e2df75930_prof);

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
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
