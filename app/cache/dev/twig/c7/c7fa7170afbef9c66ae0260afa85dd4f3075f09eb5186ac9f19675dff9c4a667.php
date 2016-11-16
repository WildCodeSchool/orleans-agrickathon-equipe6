<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3dac457c8adde42fc52aa074086f01a774cbed45e849439dd11ed8c13a5f146a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c0d7b7c6af3c8fc19388bcb555ded2753cf3d73da441ee2d6696837ea2525818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d7b7c6af3c8fc19388bcb555ded2753cf3d73da441ee2d6696837ea2525818->enter($__internal_c0d7b7c6af3c8fc19388bcb555ded2753cf3d73da441ee2d6696837ea2525818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0d7b7c6af3c8fc19388bcb555ded2753cf3d73da441ee2d6696837ea2525818->leave($__internal_c0d7b7c6af3c8fc19388bcb555ded2753cf3d73da441ee2d6696837ea2525818_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_93d0aec64e46acf1c363b8230828a34084de09e394ae9e0e37a7f7ca0001cf95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d0aec64e46acf1c363b8230828a34084de09e394ae9e0e37a7f7ca0001cf95->enter($__internal_93d0aec64e46acf1c363b8230828a34084de09e394ae9e0e37a7f7ca0001cf95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_93d0aec64e46acf1c363b8230828a34084de09e394ae9e0e37a7f7ca0001cf95->leave($__internal_93d0aec64e46acf1c363b8230828a34084de09e394ae9e0e37a7f7ca0001cf95_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a23860d21d2a78c76b9df8d6e8aa8f398d66c1bd973a22907f710ec843ab7ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23860d21d2a78c76b9df8d6e8aa8f398d66c1bd973a22907f710ec843ab7ce9->enter($__internal_a23860d21d2a78c76b9df8d6e8aa8f398d66c1bd973a22907f710ec843ab7ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a23860d21d2a78c76b9df8d6e8aa8f398d66c1bd973a22907f710ec843ab7ce9->leave($__internal_a23860d21d2a78c76b9df8d6e8aa8f398d66c1bd973a22907f710ec843ab7ce9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_28cc7a6b1aae2578751973c7705d0296c9fba8742be09a06f6705e4543563a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28cc7a6b1aae2578751973c7705d0296c9fba8742be09a06f6705e4543563a5c->enter($__internal_28cc7a6b1aae2578751973c7705d0296c9fba8742be09a06f6705e4543563a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_28cc7a6b1aae2578751973c7705d0296c9fba8742be09a06f6705e4543563a5c->leave($__internal_28cc7a6b1aae2578751973c7705d0296c9fba8742be09a06f6705e4543563a5c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
