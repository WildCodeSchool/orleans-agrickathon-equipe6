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
        $__internal_7e8112865e346ffb191c262d9549640b1b35cd265a87e7c227ac60223f25560f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8112865e346ffb191c262d9549640b1b35cd265a87e7c227ac60223f25560f->enter($__internal_7e8112865e346ffb191c262d9549640b1b35cd265a87e7c227ac60223f25560f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e8112865e346ffb191c262d9549640b1b35cd265a87e7c227ac60223f25560f->leave($__internal_7e8112865e346ffb191c262d9549640b1b35cd265a87e7c227ac60223f25560f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_926da8bfdcb8ac905b56eb434fb3368590c68484028c1c7aa8aa38a3b9630a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926da8bfdcb8ac905b56eb434fb3368590c68484028c1c7aa8aa38a3b9630a6b->enter($__internal_926da8bfdcb8ac905b56eb434fb3368590c68484028c1c7aa8aa38a3b9630a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_926da8bfdcb8ac905b56eb434fb3368590c68484028c1c7aa8aa38a3b9630a6b->leave($__internal_926da8bfdcb8ac905b56eb434fb3368590c68484028c1c7aa8aa38a3b9630a6b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_85bf5104e061994c7843d87303635dcceb850d5f7e83f7e924f7534e80b9f708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85bf5104e061994c7843d87303635dcceb850d5f7e83f7e924f7534e80b9f708->enter($__internal_85bf5104e061994c7843d87303635dcceb850d5f7e83f7e924f7534e80b9f708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_85bf5104e061994c7843d87303635dcceb850d5f7e83f7e924f7534e80b9f708->leave($__internal_85bf5104e061994c7843d87303635dcceb850d5f7e83f7e924f7534e80b9f708_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c0b36c877f105b17c79cf084b957849b973d131b31ce4998740df5fc82a436a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c0b36c877f105b17c79cf084b957849b973d131b31ce4998740df5fc82a436a->enter($__internal_9c0b36c877f105b17c79cf084b957849b973d131b31ce4998740df5fc82a436a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9c0b36c877f105b17c79cf084b957849b973d131b31ce4998740df5fc82a436a->leave($__internal_9c0b36c877f105b17c79cf084b957849b973d131b31ce4998740df5fc82a436a_prof);

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
