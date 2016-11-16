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
        $__internal_61690665911592a9dc34afbae0d41ab8783308d1ca8a63eb4cc1df6a7ad61a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61690665911592a9dc34afbae0d41ab8783308d1ca8a63eb4cc1df6a7ad61a9f->enter($__internal_61690665911592a9dc34afbae0d41ab8783308d1ca8a63eb4cc1df6a7ad61a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61690665911592a9dc34afbae0d41ab8783308d1ca8a63eb4cc1df6a7ad61a9f->leave($__internal_61690665911592a9dc34afbae0d41ab8783308d1ca8a63eb4cc1df6a7ad61a9f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e66e4b66986e78118e52de568c7ae40985ba1e6e3e4b741962e927617917b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e66e4b66986e78118e52de568c7ae40985ba1e6e3e4b741962e927617917b89->enter($__internal_5e66e4b66986e78118e52de568c7ae40985ba1e6e3e4b741962e927617917b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_5e66e4b66986e78118e52de568c7ae40985ba1e6e3e4b741962e927617917b89->leave($__internal_5e66e4b66986e78118e52de568c7ae40985ba1e6e3e4b741962e927617917b89_prof);

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
", "FOSUserBundle:Group:list.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/list.html.twig");
    }
}
