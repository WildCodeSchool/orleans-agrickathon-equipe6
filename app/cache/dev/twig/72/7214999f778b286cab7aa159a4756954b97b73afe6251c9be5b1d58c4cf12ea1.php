<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ced8ead91144f695e33b64dcf6cdd0022668c84d9a9943020bcd37f9dbd9dc76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_22ff57b405402a5c3f279ba66b71bb0efe358dcd55faca939436b8ce03aa8d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ff57b405402a5c3f279ba66b71bb0efe358dcd55faca939436b8ce03aa8d27->enter($__internal_22ff57b405402a5c3f279ba66b71bb0efe358dcd55faca939436b8ce03aa8d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22ff57b405402a5c3f279ba66b71bb0efe358dcd55faca939436b8ce03aa8d27->leave($__internal_22ff57b405402a5c3f279ba66b71bb0efe358dcd55faca939436b8ce03aa8d27_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c49e2106a4855e19dddeede4a832f3b35f5400b38fdb9e7f1c2f7eaf683a2597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c49e2106a4855e19dddeede4a832f3b35f5400b38fdb9e7f1c2f7eaf683a2597->enter($__internal_c49e2106a4855e19dddeede4a832f3b35f5400b38fdb9e7f1c2f7eaf683a2597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c49e2106a4855e19dddeede4a832f3b35f5400b38fdb9e7f1c2f7eaf683a2597->leave($__internal_c49e2106a4855e19dddeede4a832f3b35f5400b38fdb9e7f1c2f7eaf683a2597_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7ccd41e3e5407063efac5694a799d515a6ca33a84cba551e6831420bc092e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ccd41e3e5407063efac5694a799d515a6ca33a84cba551e6831420bc092e92->enter($__internal_f7ccd41e3e5407063efac5694a799d515a6ca33a84cba551e6831420bc092e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f7ccd41e3e5407063efac5694a799d515a6ca33a84cba551e6831420bc092e92->leave($__internal_f7ccd41e3e5407063efac5694a799d515a6ca33a84cba551e6831420bc092e92_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a03313257e1a35e03395efa1cb72c0de5326a8e4303d9eca46ba67a735f68dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a03313257e1a35e03395efa1cb72c0de5326a8e4303d9eca46ba67a735f68dd->enter($__internal_8a03313257e1a35e03395efa1cb72c0de5326a8e4303d9eca46ba67a735f68dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8a03313257e1a35e03395efa1cb72c0de5326a8e4303d9eca46ba67a735f68dd->leave($__internal_8a03313257e1a35e03395efa1cb72c0de5326a8e4303d9eca46ba67a735f68dd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
