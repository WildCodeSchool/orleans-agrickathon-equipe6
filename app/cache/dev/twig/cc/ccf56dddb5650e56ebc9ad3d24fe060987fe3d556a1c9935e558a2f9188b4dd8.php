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
        $__internal_a38da7d126f354e5c05e065b65ab3f07b5a83ace3e43971a90b8f3664f718165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38da7d126f354e5c05e065b65ab3f07b5a83ace3e43971a90b8f3664f718165->enter($__internal_a38da7d126f354e5c05e065b65ab3f07b5a83ace3e43971a90b8f3664f718165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a38da7d126f354e5c05e065b65ab3f07b5a83ace3e43971a90b8f3664f718165->leave($__internal_a38da7d126f354e5c05e065b65ab3f07b5a83ace3e43971a90b8f3664f718165_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d23b0ad02144aaad0d5cf49fb396f29cb2f92f36cf8d77eeb02cc4a77cb53ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23b0ad02144aaad0d5cf49fb396f29cb2f92f36cf8d77eeb02cc4a77cb53ea4->enter($__internal_d23b0ad02144aaad0d5cf49fb396f29cb2f92f36cf8d77eeb02cc4a77cb53ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_d23b0ad02144aaad0d5cf49fb396f29cb2f92f36cf8d77eeb02cc4a77cb53ea4->leave($__internal_d23b0ad02144aaad0d5cf49fb396f29cb2f92f36cf8d77eeb02cc4a77cb53ea4_prof);

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
", "FOSUserBundle:Profile:edit.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
