<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_4cf4b8603508f524817f64e9b0b0b082b7a20e98fc45d4d727ebc7976acb4228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_95b8ac468913138f5f609e926920aae2a45169e276e68b9153a45ea7e6d76832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b8ac468913138f5f609e926920aae2a45169e276e68b9153a45ea7e6d76832->enter($__internal_95b8ac468913138f5f609e926920aae2a45169e276e68b9153a45ea7e6d76832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95b8ac468913138f5f609e926920aae2a45169e276e68b9153a45ea7e6d76832->leave($__internal_95b8ac468913138f5f609e926920aae2a45169e276e68b9153a45ea7e6d76832_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f565fd37ea05a6f3c489318aa42d174a5ed771325a33be041b107d71be0740e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f565fd37ea05a6f3c489318aa42d174a5ed771325a33be041b107d71be0740e->enter($__internal_0f565fd37ea05a6f3c489318aa42d174a5ed771325a33be041b107d71be0740e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_0f565fd37ea05a6f3c489318aa42d174a5ed771325a33be041b107d71be0740e->leave($__internal_0f565fd37ea05a6f3c489318aa42d174a5ed771325a33be041b107d71be0740e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
