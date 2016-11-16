<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_93724ecad741dadc451d37e91222526d317047863d326b75312f9519fa9d9f83 extends Twig_Template
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
        $__internal_0f891a54ef1435a44efc4b440ba216318bcc2226f59725c1d9e8176a7489760e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f891a54ef1435a44efc4b440ba216318bcc2226f59725c1d9e8176a7489760e->enter($__internal_0f891a54ef1435a44efc4b440ba216318bcc2226f59725c1d9e8176a7489760e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f891a54ef1435a44efc4b440ba216318bcc2226f59725c1d9e8176a7489760e->leave($__internal_0f891a54ef1435a44efc4b440ba216318bcc2226f59725c1d9e8176a7489760e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_20c07b756246c6bcc0718842983d67b63c9b484f0c4e6b2b0776265fdbc5bfc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c07b756246c6bcc0718842983d67b63c9b484f0c4e6b2b0776265fdbc5bfc1->enter($__internal_20c07b756246c6bcc0718842983d67b63c9b484f0c4e6b2b0776265fdbc5bfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_20c07b756246c6bcc0718842983d67b63c9b484f0c4e6b2b0776265fdbc5bfc1->leave($__internal_20c07b756246c6bcc0718842983d67b63c9b484f0c4e6b2b0776265fdbc5bfc1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bb75f8d3f1fc6dda36c335f5b4a9f2788fbd8a9c907041d4aa7b34ca0a5d742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb75f8d3f1fc6dda36c335f5b4a9f2788fbd8a9c907041d4aa7b34ca0a5d742->enter($__internal_2bb75f8d3f1fc6dda36c335f5b4a9f2788fbd8a9c907041d4aa7b34ca0a5d742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2bb75f8d3f1fc6dda36c335f5b4a9f2788fbd8a9c907041d4aa7b34ca0a5d742->leave($__internal_2bb75f8d3f1fc6dda36c335f5b4a9f2788fbd8a9c907041d4aa7b34ca0a5d742_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_45c7eeaa7dbe1fad44e06e6ee1a59cb85c04637c16a23e2c33f8b27056d17fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c7eeaa7dbe1fad44e06e6ee1a59cb85c04637c16a23e2c33f8b27056d17fed->enter($__internal_45c7eeaa7dbe1fad44e06e6ee1a59cb85c04637c16a23e2c33f8b27056d17fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_45c7eeaa7dbe1fad44e06e6ee1a59cb85c04637c16a23e2c33f8b27056d17fed->leave($__internal_45c7eeaa7dbe1fad44e06e6ee1a59cb85c04637c16a23e2c33f8b27056d17fed_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
