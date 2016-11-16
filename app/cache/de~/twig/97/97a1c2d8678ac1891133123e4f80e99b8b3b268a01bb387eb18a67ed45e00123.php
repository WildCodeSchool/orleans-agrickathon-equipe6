<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_978e019150cae4dc8cc5a460aa332e4538e414be2485f9b82013e6b75a262c9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_978934564c87192f2233610dcfea5dce8cf0e86560d7c8e0c4be01455125ae5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978934564c87192f2233610dcfea5dce8cf0e86560d7c8e0c4be01455125ae5f->enter($__internal_978934564c87192f2233610dcfea5dce8cf0e86560d7c8e0c4be01455125ae5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_978934564c87192f2233610dcfea5dce8cf0e86560d7c8e0c4be01455125ae5f->leave($__internal_978934564c87192f2233610dcfea5dce8cf0e86560d7c8e0c4be01455125ae5f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f808847f89c1d7f915af23fdd35e5b2b0fcd2a5304381026c396104697819e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f808847f89c1d7f915af23fdd35e5b2b0fcd2a5304381026c396104697819e2d->enter($__internal_f808847f89c1d7f915af23fdd35e5b2b0fcd2a5304381026c396104697819e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_f808847f89c1d7f915af23fdd35e5b2b0fcd2a5304381026c396104697819e2d->leave($__internal_f808847f89c1d7f915af23fdd35e5b2b0fcd2a5304381026c396104697819e2d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b8499a883d0cff339cd3f0f3c83b8b0c0114ba60d96d9b7af99adc440fe108fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8499a883d0cff339cd3f0f3c83b8b0c0114ba60d96d9b7af99adc440fe108fa->enter($__internal_b8499a883d0cff339cd3f0f3c83b8b0c0114ba60d96d9b7af99adc440fe108fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b8499a883d0cff339cd3f0f3c83b8b0c0114ba60d96d9b7af99adc440fe108fa->leave($__internal_b8499a883d0cff339cd3f0f3c83b8b0c0114ba60d96d9b7af99adc440fe108fa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d3518b0c53656b8981391d84837df95753ee9f3c83e007a736b320be3c8005d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3518b0c53656b8981391d84837df95753ee9f3c83e007a736b320be3c8005d8->enter($__internal_d3518b0c53656b8981391d84837df95753ee9f3c83e007a736b320be3c8005d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d3518b0c53656b8981391d84837df95753ee9f3c83e007a736b320be3c8005d8->leave($__internal_d3518b0c53656b8981391d84837df95753ee9f3c83e007a736b320be3c8005d8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
