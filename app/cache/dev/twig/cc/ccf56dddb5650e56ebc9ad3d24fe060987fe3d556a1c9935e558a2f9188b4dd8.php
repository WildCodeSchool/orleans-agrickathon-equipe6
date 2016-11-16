<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_30540d268c119be415b6c76856e072e4b14c69e43d6c27ea77e4e69cb5cdc9d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_3ba2d6a865641a026f0d3398967ce873b3bb618d6214232ce07bd4ce59fbdbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba2d6a865641a026f0d3398967ce873b3bb618d6214232ce07bd4ce59fbdbef->enter($__internal_3ba2d6a865641a026f0d3398967ce873b3bb618d6214232ce07bd4ce59fbdbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ba2d6a865641a026f0d3398967ce873b3bb618d6214232ce07bd4ce59fbdbef->leave($__internal_3ba2d6a865641a026f0d3398967ce873b3bb618d6214232ce07bd4ce59fbdbef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_097b56cc763f21b13a44e064c601687329ab84f9c927edfbc170c901defd0cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_097b56cc763f21b13a44e064c601687329ab84f9c927edfbc170c901defd0cbe->enter($__internal_097b56cc763f21b13a44e064c601687329ab84f9c927edfbc170c901defd0cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_097b56cc763f21b13a44e064c601687329ab84f9c927edfbc170c901defd0cbe->leave($__internal_097b56cc763f21b13a44e064c601687329ab84f9c927edfbc170c901defd0cbe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
