<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_9ef4ec070f4e94a3546cced4d9b0ba8d99dea89b312b9b3ea0a229e481d15e45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_69e7bd4a4751acc0475548208bbc7629c0702a5af23a89f1336af33a46dd9636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e7bd4a4751acc0475548208bbc7629c0702a5af23a89f1336af33a46dd9636->enter($__internal_69e7bd4a4751acc0475548208bbc7629c0702a5af23a89f1336af33a46dd9636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69e7bd4a4751acc0475548208bbc7629c0702a5af23a89f1336af33a46dd9636->leave($__internal_69e7bd4a4751acc0475548208bbc7629c0702a5af23a89f1336af33a46dd9636_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_645d87c136a40a65e43fd4b95842b9b1219b2f9224930920748d448e658f8e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_645d87c136a40a65e43fd4b95842b9b1219b2f9224930920748d448e658f8e78->enter($__internal_645d87c136a40a65e43fd4b95842b9b1219b2f9224930920748d448e658f8e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_645d87c136a40a65e43fd4b95842b9b1219b2f9224930920748d448e658f8e78->leave($__internal_645d87c136a40a65e43fd4b95842b9b1219b2f9224930920748d448e658f8e78_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/show.html.twig");
    }
}