<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c24c0c64594d7ad00a48fc20cd1fd8ca3995b36bf004ded5e1e83ac672a8186a extends Twig_Template
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
        $__internal_2d2d8f0f5b1e8c872e4a694d43a3938db88a002b8bdfbe051e3b3ddca2bcc02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d2d8f0f5b1e8c872e4a694d43a3938db88a002b8bdfbe051e3b3ddca2bcc02c->enter($__internal_2d2d8f0f5b1e8c872e4a694d43a3938db88a002b8bdfbe051e3b3ddca2bcc02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d2d8f0f5b1e8c872e4a694d43a3938db88a002b8bdfbe051e3b3ddca2bcc02c->leave($__internal_2d2d8f0f5b1e8c872e4a694d43a3938db88a002b8bdfbe051e3b3ddca2bcc02c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7f90fc9bcbf0f75b086c614cfe3731c52576dbd8d63fe421de4fa579e99b94cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f90fc9bcbf0f75b086c614cfe3731c52576dbd8d63fe421de4fa579e99b94cd->enter($__internal_7f90fc9bcbf0f75b086c614cfe3731c52576dbd8d63fe421de4fa579e99b94cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_7f90fc9bcbf0f75b086c614cfe3731c52576dbd8d63fe421de4fa579e99b94cd->leave($__internal_7f90fc9bcbf0f75b086c614cfe3731c52576dbd8d63fe421de4fa579e99b94cd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_243ba7581a32659f3e92cf4d4249b7df218b5f47631771770dac4ee9257c6bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243ba7581a32659f3e92cf4d4249b7df218b5f47631771770dac4ee9257c6bbb->enter($__internal_243ba7581a32659f3e92cf4d4249b7df218b5f47631771770dac4ee9257c6bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_243ba7581a32659f3e92cf4d4249b7df218b5f47631771770dac4ee9257c6bbb->leave($__internal_243ba7581a32659f3e92cf4d4249b7df218b5f47631771770dac4ee9257c6bbb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b346024fff03a05fc10f7a35741d4b82bc371854d6a4e20626a6de81ad8bd411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b346024fff03a05fc10f7a35741d4b82bc371854d6a4e20626a6de81ad8bd411->enter($__internal_b346024fff03a05fc10f7a35741d4b82bc371854d6a4e20626a6de81ad8bd411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b346024fff03a05fc10f7a35741d4b82bc371854d6a4e20626a6de81ad8bd411->leave($__internal_b346024fff03a05fc10f7a35741d4b82bc371854d6a4e20626a6de81ad8bd411_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
