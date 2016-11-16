<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_893d9a149344dce7ce8b9668d43537d2f56427746cc68aa53afc3c780f7f90d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_eeaa8ebe9477ba8dd9d446708e0e49a59cb2203bd5d1aefbf9e03cba4a350603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeaa8ebe9477ba8dd9d446708e0e49a59cb2203bd5d1aefbf9e03cba4a350603->enter($__internal_eeaa8ebe9477ba8dd9d446708e0e49a59cb2203bd5d1aefbf9e03cba4a350603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eeaa8ebe9477ba8dd9d446708e0e49a59cb2203bd5d1aefbf9e03cba4a350603->leave($__internal_eeaa8ebe9477ba8dd9d446708e0e49a59cb2203bd5d1aefbf9e03cba4a350603_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b7f6774f1343f87dd216cc74d906729dd0c366a15e4766aa30650aadcfc8591d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f6774f1343f87dd216cc74d906729dd0c366a15e4766aa30650aadcfc8591d->enter($__internal_b7f6774f1343f87dd216cc74d906729dd0c366a15e4766aa30650aadcfc8591d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b7f6774f1343f87dd216cc74d906729dd0c366a15e4766aa30650aadcfc8591d->leave($__internal_b7f6774f1343f87dd216cc74d906729dd0c366a15e4766aa30650aadcfc8591d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/list.html.twig");
    }
}
