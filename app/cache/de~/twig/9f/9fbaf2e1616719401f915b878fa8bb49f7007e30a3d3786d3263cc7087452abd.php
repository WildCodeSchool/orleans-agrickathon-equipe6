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
        $__internal_5710e0d1add20348b8c32cae094d63a7fa2c9dc92acc46d8932fa2a1188b0630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5710e0d1add20348b8c32cae094d63a7fa2c9dc92acc46d8932fa2a1188b0630->enter($__internal_5710e0d1add20348b8c32cae094d63a7fa2c9dc92acc46d8932fa2a1188b0630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5710e0d1add20348b8c32cae094d63a7fa2c9dc92acc46d8932fa2a1188b0630->leave($__internal_5710e0d1add20348b8c32cae094d63a7fa2c9dc92acc46d8932fa2a1188b0630_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_46aef2e8c138aecb379209241d67262c1c5887d76de324a8b9142da983d3e400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46aef2e8c138aecb379209241d67262c1c5887d76de324a8b9142da983d3e400->enter($__internal_46aef2e8c138aecb379209241d67262c1c5887d76de324a8b9142da983d3e400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_46aef2e8c138aecb379209241d67262c1c5887d76de324a8b9142da983d3e400->leave($__internal_46aef2e8c138aecb379209241d67262c1c5887d76de324a8b9142da983d3e400_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3410587db33248b90ab61439684ebea5b8c56b50824ecb98c6d814ed7ad01e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3410587db33248b90ab61439684ebea5b8c56b50824ecb98c6d814ed7ad01e36->enter($__internal_3410587db33248b90ab61439684ebea5b8c56b50824ecb98c6d814ed7ad01e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

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
        
        $__internal_3410587db33248b90ab61439684ebea5b8c56b50824ecb98c6d814ed7ad01e36->leave($__internal_3410587db33248b90ab61439684ebea5b8c56b50824ecb98c6d814ed7ad01e36_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
