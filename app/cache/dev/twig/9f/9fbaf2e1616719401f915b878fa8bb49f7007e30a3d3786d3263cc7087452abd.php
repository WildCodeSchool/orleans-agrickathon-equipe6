<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_558c438045ee82f5694f00a333010243eada38c1a46d581f2132d5bd0dcc2a64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e316ea43593464da90c15785681c6e8246ccb0fefdf8e71fb43ef0d4154ba2b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e316ea43593464da90c15785681c6e8246ccb0fefdf8e71fb43ef0d4154ba2b7->enter($__internal_e316ea43593464da90c15785681c6e8246ccb0fefdf8e71fb43ef0d4154ba2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e316ea43593464da90c15785681c6e8246ccb0fefdf8e71fb43ef0d4154ba2b7->leave($__internal_e316ea43593464da90c15785681c6e8246ccb0fefdf8e71fb43ef0d4154ba2b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_35796a2189b0c30521c0a38ad7b6d53a84a49a305bc49e92da6231e3d4bf0eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35796a2189b0c30521c0a38ad7b6d53a84a49a305bc49e92da6231e3d4bf0eb0->enter($__internal_35796a2189b0c30521c0a38ad7b6d53a84a49a305bc49e92da6231e3d4bf0eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_35796a2189b0c30521c0a38ad7b6d53a84a49a305bc49e92da6231e3d4bf0eb0->leave($__internal_35796a2189b0c30521c0a38ad7b6d53a84a49a305bc49e92da6231e3d4bf0eb0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f719c9e1b66d6802df6ab8de1d89fa57e89bdca4d36fdeb83df2829adec351af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f719c9e1b66d6802df6ab8de1d89fa57e89bdca4d36fdeb83df2829adec351af->enter($__internal_f719c9e1b66d6802df6ab8de1d89fa57e89bdca4d36fdeb83df2829adec351af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f719c9e1b66d6802df6ab8de1d89fa57e89bdca4d36fdeb83df2829adec351af->leave($__internal_f719c9e1b66d6802df6ab8de1d89fa57e89bdca4d36fdeb83df2829adec351af_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
