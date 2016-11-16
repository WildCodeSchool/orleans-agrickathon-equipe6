<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_3a7220a0aa671c77650e2b0e534ba3073f6c63e004b9be260954fb88c2649302 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_5fa9841760445b25221eddea439672ca3c7f389b2dbd3c4be1d8eca7e7e6f22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fa9841760445b25221eddea439672ca3c7f389b2dbd3c4be1d8eca7e7e6f22f->enter($__internal_5fa9841760445b25221eddea439672ca3c7f389b2dbd3c4be1d8eca7e7e6f22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fa9841760445b25221eddea439672ca3c7f389b2dbd3c4be1d8eca7e7e6f22f->leave($__internal_5fa9841760445b25221eddea439672ca3c7f389b2dbd3c4be1d8eca7e7e6f22f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_586405ca48bc2fb134f9c890b07e50ac0ad19cc2f7cfdc225c64358f2df0c78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_586405ca48bc2fb134f9c890b07e50ac0ad19cc2f7cfdc225c64358f2df0c78a->enter($__internal_586405ca48bc2fb134f9c890b07e50ac0ad19cc2f7cfdc225c64358f2df0c78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_586405ca48bc2fb134f9c890b07e50ac0ad19cc2f7cfdc225c64358f2df0c78a->leave($__internal_586405ca48bc2fb134f9c890b07e50ac0ad19cc2f7cfdc225c64358f2df0c78a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
