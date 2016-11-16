<?php

/* ::base.html.twig */
class __TwigTemplate_db600c9cfe3a29995c1262c612d9146a05a7f40d4dfb35111b1e3d31cb3d932e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9064509905774017929394d2bb5d05df626c5caf59470ec87b1fcc9793e28278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9064509905774017929394d2bb5d05df626c5caf59470ec87b1fcc9793e28278->enter($__internal_9064509905774017929394d2bb5d05df626c5caf59470ec87b1fcc9793e28278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9064509905774017929394d2bb5d05df626c5caf59470ec87b1fcc9793e28278->leave($__internal_9064509905774017929394d2bb5d05df626c5caf59470ec87b1fcc9793e28278_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5178f017c72a4fb9c5054d849ca058d729df3e03b9a736f82d243a1d940c2b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5178f017c72a4fb9c5054d849ca058d729df3e03b9a736f82d243a1d940c2b04->enter($__internal_5178f017c72a4fb9c5054d849ca058d729df3e03b9a736f82d243a1d940c2b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Welcome!";
        
        $__internal_5178f017c72a4fb9c5054d849ca058d729df3e03b9a736f82d243a1d940c2b04->leave($__internal_5178f017c72a4fb9c5054d849ca058d729df3e03b9a736f82d243a1d940c2b04_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dbbb227f2c09191859675249a90b1c910e783d2494d6a984e48e41c20b0ef65a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbbb227f2c09191859675249a90b1c910e783d2494d6a984e48e41c20b0ef65a->enter($__internal_dbbb227f2c09191859675249a90b1c910e783d2494d6a984e48e41c20b0ef65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_dbbb227f2c09191859675249a90b1c910e783d2494d6a984e48e41c20b0ef65a->leave($__internal_dbbb227f2c09191859675249a90b1c910e783d2494d6a984e48e41c20b0ef65a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_74f7e727fc18982c1ac74ea4c134d7cd68a4b7d74ade7910d317000e1cba7f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f7e727fc18982c1ac74ea4c134d7cd68a4b7d74ade7910d317000e1cba7f16->enter($__internal_74f7e727fc18982c1ac74ea4c134d7cd68a4b7d74ade7910d317000e1cba7f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_74f7e727fc18982c1ac74ea4c134d7cd68a4b7d74ade7910d317000e1cba7f16->leave($__internal_74f7e727fc18982c1ac74ea4c134d7cd68a4b7d74ade7910d317000e1cba7f16_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_15eeae9d25b7ef57c513ae7ef196e66df105e0d8f0dc8217b4eac09278529dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15eeae9d25b7ef57c513ae7ef196e66df105e0d8f0dc8217b4eac09278529dd2->enter($__internal_15eeae9d25b7ef57c513ae7ef196e66df105e0d8f0dc8217b4eac09278529dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_15eeae9d25b7ef57c513ae7ef196e66df105e0d8f0dc8217b4eac09278529dd2->leave($__internal_15eeae9d25b7ef57c513ae7ef196e66df105e0d8f0dc8217b4eac09278529dd2_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/app/Resources/views/base.html.twig");
    }
}
