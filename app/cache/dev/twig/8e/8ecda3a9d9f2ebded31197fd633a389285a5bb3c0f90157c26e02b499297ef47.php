<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_aca92b7f665c4cbd229c764a1231e470d9f04b3696dceb204580e2d2af02a48d extends Twig_Template
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
        $__internal_71d77495077c56efebcb01629f04a6be8bbc860e1899fefcef13e8db3822b9fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d77495077c56efebcb01629f04a6be8bbc860e1899fefcef13e8db3822b9fd->enter($__internal_71d77495077c56efebcb01629f04a6be8bbc860e1899fefcef13e8db3822b9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71d77495077c56efebcb01629f04a6be8bbc860e1899fefcef13e8db3822b9fd->leave($__internal_71d77495077c56efebcb01629f04a6be8bbc860e1899fefcef13e8db3822b9fd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8afd5272e5e1a7a5296ee6fd8c61c1f26921796350c84042a838bc9016438b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8afd5272e5e1a7a5296ee6fd8c61c1f26921796350c84042a838bc9016438b92->enter($__internal_8afd5272e5e1a7a5296ee6fd8c61c1f26921796350c84042a838bc9016438b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_8afd5272e5e1a7a5296ee6fd8c61c1f26921796350c84042a838bc9016438b92->leave($__internal_8afd5272e5e1a7a5296ee6fd8c61c1f26921796350c84042a838bc9016438b92_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8b44f4864cdce75796d6894098014d29588c4a585832c691a9a3a374a1ed62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b44f4864cdce75796d6894098014d29588c4a585832c691a9a3a374a1ed62b->enter($__internal_f8b44f4864cdce75796d6894098014d29588c4a585832c691a9a3a374a1ed62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f8b44f4864cdce75796d6894098014d29588c4a585832c691a9a3a374a1ed62b->leave($__internal_f8b44f4864cdce75796d6894098014d29588c4a585832c691a9a3a374a1ed62b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5650c9c921dac8d6acbc330720f7f10d7d90bff0eac444c3e0804f2634418d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5650c9c921dac8d6acbc330720f7f10d7d90bff0eac444c3e0804f2634418d5->enter($__internal_e5650c9c921dac8d6acbc330720f7f10d7d90bff0eac444c3e0804f2634418d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e5650c9c921dac8d6acbc330720f7f10d7d90bff0eac444c3e0804f2634418d5->leave($__internal_e5650c9c921dac8d6acbc330720f7f10d7d90bff0eac444c3e0804f2634418d5_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
