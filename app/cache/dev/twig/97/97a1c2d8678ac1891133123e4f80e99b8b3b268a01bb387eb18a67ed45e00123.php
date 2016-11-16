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
        $__internal_0e62558ee0e779ba5b066163d023462b7c5eadb00090258ecb264fbab07daeb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e62558ee0e779ba5b066163d023462b7c5eadb00090258ecb264fbab07daeb4->enter($__internal_0e62558ee0e779ba5b066163d023462b7c5eadb00090258ecb264fbab07daeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e62558ee0e779ba5b066163d023462b7c5eadb00090258ecb264fbab07daeb4->leave($__internal_0e62558ee0e779ba5b066163d023462b7c5eadb00090258ecb264fbab07daeb4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4377e9a5091134424f379e43d8efd25b61e1ad1cce0ec8eac51720ef3f3eb7d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4377e9a5091134424f379e43d8efd25b61e1ad1cce0ec8eac51720ef3f3eb7d0->enter($__internal_4377e9a5091134424f379e43d8efd25b61e1ad1cce0ec8eac51720ef3f3eb7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_4377e9a5091134424f379e43d8efd25b61e1ad1cce0ec8eac51720ef3f3eb7d0->leave($__internal_4377e9a5091134424f379e43d8efd25b61e1ad1cce0ec8eac51720ef3f3eb7d0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9bbf6cac2642af7ced6d53feb78275d9440a194176fb80f8a41efb2be43b9737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbf6cac2642af7ced6d53feb78275d9440a194176fb80f8a41efb2be43b9737->enter($__internal_9bbf6cac2642af7ced6d53feb78275d9440a194176fb80f8a41efb2be43b9737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9bbf6cac2642af7ced6d53feb78275d9440a194176fb80f8a41efb2be43b9737->leave($__internal_9bbf6cac2642af7ced6d53feb78275d9440a194176fb80f8a41efb2be43b9737_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b02c17656391bfc88d1116b7bae3e6982902b7d45b824376e26f76f9be8888f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b02c17656391bfc88d1116b7bae3e6982902b7d45b824376e26f76f9be8888f->enter($__internal_9b02c17656391bfc88d1116b7bae3e6982902b7d45b824376e26f76f9be8888f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9b02c17656391bfc88d1116b7bae3e6982902b7d45b824376e26f76f9be8888f->leave($__internal_9b02c17656391bfc88d1116b7bae3e6982902b7d45b824376e26f76f9be8888f_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
