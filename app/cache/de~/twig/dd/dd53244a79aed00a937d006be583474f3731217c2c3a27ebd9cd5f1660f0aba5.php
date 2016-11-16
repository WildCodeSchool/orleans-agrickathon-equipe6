<?php

/* SfWebAppFrontOfficeBundle::layout-login.html.twig */
class __TwigTemplate_252d944f8282660fde0e3d7af57359113cd353af4a991dfb7284db503056a242 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::front-office.html.twig", "SfWebAppFrontOfficeBundle::layout-login.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::front-office.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6398c0a4a315d16e0dcdd2f4994cdcba15d3e7af4b53e7bd9aa19736dada1aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6398c0a4a315d16e0dcdd2f4994cdcba15d3e7af4b53e7bd9aa19736dada1aa->enter($__internal_f6398c0a4a315d16e0dcdd2f4994cdcba15d3e7af4b53e7bd9aa19736dada1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6398c0a4a315d16e0dcdd2f4994cdcba15d3e7af4b53e7bd9aa19736dada1aa->leave($__internal_f6398c0a4a315d16e0dcdd2f4994cdcba15d3e7af4b53e7bd9aa19736dada1aa_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_d7db58bc8eac7362c41fddf6ed1d4bcd5a794c77d061c1137f5f6dde7118ba77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7db58bc8eac7362c41fddf6ed1d4bcd5a794c77d061c1137f5f6dde7118ba77->enter($__internal_d7db58bc8eac7362c41fddf6ed1d4bcd5a794c77d061c1137f5f6dde7118ba77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        
        $__internal_d7db58bc8eac7362c41fddf6ed1d4bcd5a794c77d061c1137f5f6dde7118ba77->leave($__internal_d7db58bc8eac7362c41fddf6ed1d4bcd5a794c77d061c1137f5f6dde7118ba77_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_545f12cc7d34e1540179218f5e6b9595a7d9b0ba7165f396f77e65510b818776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545f12cc7d34e1540179218f5e6b9595a7d9b0ba7165f396f77e65510b818776->enter($__internal_545f12cc7d34e1540179218f5e6b9595a7d9b0ba7165f396f77e65510b818776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        
        $__internal_545f12cc7d34e1540179218f5e6b9595a7d9b0ba7165f396f77e65510b818776->leave($__internal_545f12cc7d34e1540179218f5e6b9595a7d9b0ba7165f396f77e65510b818776_prof);

    }

    // line 9
    public function block_footer($context, array $blocks = array())
    {
        $__internal_35e1638e0e0b5ac5ce24fdbcc9e1a465a36acf7a12f23e893cd55a62eb206158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e1638e0e0b5ac5ce24fdbcc9e1a465a36acf7a12f23e893cd55a62eb206158->enter($__internal_35e1638e0e0b5ac5ce24fdbcc9e1a465a36acf7a12f23e893cd55a62eb206158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout-login.html.twig"));

        
        $__internal_35e1638e0e0b5ac5ce24fdbcc9e1a465a36acf7a12f23e893cd55a62eb206158->leave($__internal_35e1638e0e0b5ac5ce24fdbcc9e1a465a36acf7a12f23e893cd55a62eb206158_prof);

    }

    public function getTemplateName()
    {
        return "SfWebAppFrontOfficeBundle::layout-login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  47 => 6,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::front-office.html.twig' %}

{% block header %}
{% endblock %}

{% block content %}
{% endblock %}

{% block footer %}
{% endblock %}", "SfWebAppFrontOfficeBundle::layout-login.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/layout-login.html.twig");
    }
}
