<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_51f05fe8e67ac5f7d1f8900b8b3fd0af5e32a2115f4dcd4f0048824745301e6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_f4a72f14fb2c0b2a9ee8e13c4a249e2b06fd2dda668cac5a2d10bd4406248a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a72f14fb2c0b2a9ee8e13c4a249e2b06fd2dda668cac5a2d10bd4406248a45->enter($__internal_f4a72f14fb2c0b2a9ee8e13c4a249e2b06fd2dda668cac5a2d10bd4406248a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4a72f14fb2c0b2a9ee8e13c4a249e2b06fd2dda668cac5a2d10bd4406248a45->leave($__internal_f4a72f14fb2c0b2a9ee8e13c4a249e2b06fd2dda668cac5a2d10bd4406248a45_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7ff4af93f360e03375f0dee24834d0acbb8065793d4857857c7b1c4a8ac011b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ff4af93f360e03375f0dee24834d0acbb8065793d4857857c7b1c4a8ac011b->enter($__internal_e7ff4af93f360e03375f0dee24834d0acbb8065793d4857857c7b1c4a8ac011b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_e7ff4af93f360e03375f0dee24834d0acbb8065793d4857857c7b1c4a8ac011b->leave($__internal_e7ff4af93f360e03375f0dee24834d0acbb8065793d4857857c7b1c4a8ac011b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/edit.html.twig");
    }
}
