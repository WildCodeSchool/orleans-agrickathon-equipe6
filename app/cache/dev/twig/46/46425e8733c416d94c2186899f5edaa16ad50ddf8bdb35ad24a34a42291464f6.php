<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a6384f90aef7b66277cbfcb8a17bb2f60ad47f64d79658fd8d2661ceb2625274 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edbaace802179155406561406abd205789eba0fa1d1a0dbd87dc27f66bc76789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edbaace802179155406561406abd205789eba0fa1d1a0dbd87dc27f66bc76789->enter($__internal_edbaace802179155406561406abd205789eba0fa1d1a0dbd87dc27f66bc76789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edbaace802179155406561406abd205789eba0fa1d1a0dbd87dc27f66bc76789->leave($__internal_edbaace802179155406561406abd205789eba0fa1d1a0dbd87dc27f66bc76789_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a13a9622c88325672312c265e07899a6c6c043dc3cefdf33a61fc7ace54863d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13a9622c88325672312c265e07899a6c6c043dc3cefdf33a61fc7ace54863d6->enter($__internal_a13a9622c88325672312c265e07899a6c6c043dc3cefdf33a61fc7ace54863d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_a13a9622c88325672312c265e07899a6c6c043dc3cefdf33a61fc7ace54863d6->leave($__internal_a13a9622c88325672312c265e07899a6c6c043dc3cefdf33a61fc7ace54863d6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7145fc8894a5eb6e0f351f4e7aba78c1f745db66f947705862718df7319f43fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7145fc8894a5eb6e0f351f4e7aba78c1f745db66f947705862718df7319f43fc->enter($__internal_7145fc8894a5eb6e0f351f4e7aba78c1f745db66f947705862718df7319f43fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7145fc8894a5eb6e0f351f4e7aba78c1f745db66f947705862718df7319f43fc->leave($__internal_7145fc8894a5eb6e0f351f4e7aba78c1f745db66f947705862718df7319f43fc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_16f61c61d1823e2000fe1aa6d312d8405c6b7e601c5c1f8aafacdf27dc2e98ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f61c61d1823e2000fe1aa6d312d8405c6b7e601c5c1f8aafacdf27dc2e98ad->enter($__internal_16f61c61d1823e2000fe1aa6d312d8405c6b7e601c5c1f8aafacdf27dc2e98ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_16f61c61d1823e2000fe1aa6d312d8405c6b7e601c5c1f8aafacdf27dc2e98ad->leave($__internal_16f61c61d1823e2000fe1aa6d312d8405c6b7e601c5c1f8aafacdf27dc2e98ad_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
