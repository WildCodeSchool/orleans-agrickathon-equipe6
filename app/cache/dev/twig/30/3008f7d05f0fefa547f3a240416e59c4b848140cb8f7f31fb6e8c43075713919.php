<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_830eb149529d6ae70f823a0953c45dd0b8c165bc80c610063ae09e18f838f840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
<<<<<<< HEAD
        $__internal_134d20c024e01cb4b2f968350fda1f7f39c5b6f6188b3ee29329369661a7cdaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134d20c024e01cb4b2f968350fda1f7f39c5b6f6188b3ee29329369661a7cdaf->enter($__internal_134d20c024e01cb4b2f968350fda1f7f39c5b6f6188b3ee29329369661a7cdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_134d20c024e01cb4b2f968350fda1f7f39c5b6f6188b3ee29329369661a7cdaf->leave($__internal_134d20c024e01cb4b2f968350fda1f7f39c5b6f6188b3ee29329369661a7cdaf_prof);
=======
        $__internal_5dfdf3b57238fc0c570ded5a77b3ddcedf985a471f5b0c0cc5dd40afadf1ca14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dfdf3b57238fc0c570ded5a77b3ddcedf985a471f5b0c0cc5dd40afadf1ca14->enter($__internal_5dfdf3b57238fc0c570ded5a77b3ddcedf985a471f5b0c0cc5dd40afadf1ca14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dfdf3b57238fc0c570ded5a77b3ddcedf985a471f5b0c0cc5dd40afadf1ca14->leave($__internal_5dfdf3b57238fc0c570ded5a77b3ddcedf985a471f5b0c0cc5dd40afadf1ca14_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_36afe61cd5e3db5fa20c07be692d190cb3d3b06de1ba74166323077d0396dde2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36afe61cd5e3db5fa20c07be692d190cb3d3b06de1ba74166323077d0396dde2->enter($__internal_36afe61cd5e3db5fa20c07be692d190cb3d3b06de1ba74166323077d0396dde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));
=======
        $__internal_51f9cc85a6827906c6896896cd70012a4a92be5835150f166bf2853a1eaff847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f9cc85a6827906c6896896cd70012a4a92be5835150f166bf2853a1eaff847->enter($__internal_51f9cc85a6827906c6896896cd70012a4a92be5835150f166bf2853a1eaff847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
<<<<<<< HEAD
        $__internal_36afe61cd5e3db5fa20c07be692d190cb3d3b06de1ba74166323077d0396dde2->leave($__internal_36afe61cd5e3db5fa20c07be692d190cb3d3b06de1ba74166323077d0396dde2_prof);
=======
        $__internal_51f9cc85a6827906c6896896cd70012a4a92be5835150f166bf2853a1eaff847->leave($__internal_51f9cc85a6827906c6896896cd70012a4a92be5835150f166bf2853a1eaff847_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_425591386ae95ae7ed9c51c62b30869e2196c772f52c83f83edb97c5b8aab4fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425591386ae95ae7ed9c51c62b30869e2196c772f52c83f83edb97c5b8aab4fc->enter($__internal_425591386ae95ae7ed9c51c62b30869e2196c772f52c83f83edb97c5b8aab4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));
=======
        $__internal_a480ebe9f5d8807cb74f562e04afbaaab9b1c0474cc990b0ebd26fd611fccc0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a480ebe9f5d8807cb74f562e04afbaaab9b1c0474cc990b0ebd26fd611fccc0e->enter($__internal_a480ebe9f5d8807cb74f562e04afbaaab9b1c0474cc990b0ebd26fd611fccc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
<<<<<<< HEAD
        $__internal_425591386ae95ae7ed9c51c62b30869e2196c772f52c83f83edb97c5b8aab4fc->leave($__internal_425591386ae95ae7ed9c51c62b30869e2196c772f52c83f83edb97c5b8aab4fc_prof);
=======
        $__internal_a480ebe9f5d8807cb74f562e04afbaaab9b1c0474cc990b0ebd26fd611fccc0e->leave($__internal_a480ebe9f5d8807cb74f562e04afbaaab9b1c0474cc990b0ebd26fd611fccc0e_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_3068996d6350285e36aed1c890fe916a116d780b39896f21050619a1b45d8929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3068996d6350285e36aed1c890fe916a116d780b39896f21050619a1b45d8929->enter($__internal_3068996d6350285e36aed1c890fe916a116d780b39896f21050619a1b45d8929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));
=======
        $__internal_b2f3211cc6ac2e46bf69c07c0d5607c8e46bc8ab166160c72dffd0497265aa4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f3211cc6ac2e46bf69c07c0d5607c8e46bc8ab166160c72dffd0497265aa4b->enter($__internal_b2f3211cc6ac2e46bf69c07c0d5607c8e46bc8ab166160c72dffd0497265aa4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
<<<<<<< HEAD
        $__internal_3068996d6350285e36aed1c890fe916a116d780b39896f21050619a1b45d8929->leave($__internal_3068996d6350285e36aed1c890fe916a116d780b39896f21050619a1b45d8929_prof);
=======
        $__internal_b2f3211cc6ac2e46bf69c07c0d5607c8e46bc8ab166160c72dffd0497265aa4b->leave($__internal_b2f3211cc6ac2e46bf69c07c0d5607c8e46bc8ab166160c72dffd0497265aa4b_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
<<<<<<< HEAD
", "WebProfilerBundle:Collector:exception.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
=======
", "WebProfilerBundle:Collector:exception.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
