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
        $__internal_0112a44657cab84c34fd9535a1db980ca2c651fe7e28f9fa570efbe15897147b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0112a44657cab84c34fd9535a1db980ca2c651fe7e28f9fa570efbe15897147b->enter($__internal_0112a44657cab84c34fd9535a1db980ca2c651fe7e28f9fa570efbe15897147b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0112a44657cab84c34fd9535a1db980ca2c651fe7e28f9fa570efbe15897147b->leave($__internal_0112a44657cab84c34fd9535a1db980ca2c651fe7e28f9fa570efbe15897147b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a420b378192b8d5e3c5c85bb37eed9e360cf2c7a3f532d5fa313b68565ac884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a420b378192b8d5e3c5c85bb37eed9e360cf2c7a3f532d5fa313b68565ac884->enter($__internal_4a420b378192b8d5e3c5c85bb37eed9e360cf2c7a3f532d5fa313b68565ac884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_4a420b378192b8d5e3c5c85bb37eed9e360cf2c7a3f532d5fa313b68565ac884->leave($__internal_4a420b378192b8d5e3c5c85bb37eed9e360cf2c7a3f532d5fa313b68565ac884_prof);

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
", "FOSUserBundle:Group:new.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/new.html.twig");
    }
}
