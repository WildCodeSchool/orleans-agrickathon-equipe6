<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_36e3042f2787ff39b04884bb830cbca1c46dd3ede819766c7adfac211cfdfdfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_87c541c463abbd9e9dcab1e3f051c909d0f7c9a973fc62879bc2bcaa4f96f903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c541c463abbd9e9dcab1e3f051c909d0f7c9a973fc62879bc2bcaa4f96f903->enter($__internal_87c541c463abbd9e9dcab1e3f051c909d0f7c9a973fc62879bc2bcaa4f96f903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87c541c463abbd9e9dcab1e3f051c909d0f7c9a973fc62879bc2bcaa4f96f903->leave($__internal_87c541c463abbd9e9dcab1e3f051c909d0f7c9a973fc62879bc2bcaa4f96f903_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_65e16f2fcfca0254c172dc3ebd9e981df0e8a71b05f842629c63aaae2dcfb3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e16f2fcfca0254c172dc3ebd9e981df0e8a71b05f842629c63aaae2dcfb3cf->enter($__internal_65e16f2fcfca0254c172dc3ebd9e981df0e8a71b05f842629c63aaae2dcfb3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Profile/show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_65e16f2fcfca0254c172dc3ebd9e981df0e8a71b05f842629c63aaae2dcfb3cf->leave($__internal_65e16f2fcfca0254c172dc3ebd9e981df0e8a71b05f842629c63aaae2dcfb3cf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/show.html.twig");
    }
}
