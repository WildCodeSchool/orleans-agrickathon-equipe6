<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_fe297496d6edff6ee15794536beab25db055c78b8a6a3a71f2299f55dbb6ebd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_aae8e927b1a85e266d1e486796c2542bb859f719480192340fbf0a7dd85fbd2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae8e927b1a85e266d1e486796c2542bb859f719480192340fbf0a7dd85fbd2c->enter($__internal_aae8e927b1a85e266d1e486796c2542bb859f719480192340fbf0a7dd85fbd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aae8e927b1a85e266d1e486796c2542bb859f719480192340fbf0a7dd85fbd2c->leave($__internal_aae8e927b1a85e266d1e486796c2542bb859f719480192340fbf0a7dd85fbd2c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_879079970652aed9aaac79a795e340cfc931afba11f4291913e3c1149203e24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_879079970652aed9aaac79a795e340cfc931afba11f4291913e3c1149203e24b->enter($__internal_879079970652aed9aaac79a795e340cfc931afba11f4291913e3c1149203e24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_879079970652aed9aaac79a795e340cfc931afba11f4291913e3c1149203e24b->leave($__internal_879079970652aed9aaac79a795e340cfc931afba11f4291913e3c1149203e24b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/new.html.twig");
    }
}
