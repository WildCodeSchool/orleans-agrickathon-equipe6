<?php

/* base.html.twig */
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
        $__internal_849043b9c9b49d69d98b10a7bd31f79e1bd2c2df060fd4b1b59137177b8b8ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849043b9c9b49d69d98b10a7bd31f79e1bd2c2df060fd4b1b59137177b8b8ab7->enter($__internal_849043b9c9b49d69d98b10a7bd31f79e1bd2c2df060fd4b1b59137177b8b8ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />

        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_849043b9c9b49d69d98b10a7bd31f79e1bd2c2df060fd4b1b59137177b8b8ab7->leave($__internal_849043b9c9b49d69d98b10a7bd31f79e1bd2c2df060fd4b1b59137177b8b8ab7_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_824571f6979788462d1b1e5969f627a71bdac8ae3d8da56a6d8a993e6a2d94e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_824571f6979788462d1b1e5969f627a71bdac8ae3d8da56a6d8a993e6a2d94e7->enter($__internal_824571f6979788462d1b1e5969f627a71bdac8ae3d8da56a6d8a993e6a2d94e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_824571f6979788462d1b1e5969f627a71bdac8ae3d8da56a6d8a993e6a2d94e7->leave($__internal_824571f6979788462d1b1e5969f627a71bdac8ae3d8da56a6d8a993e6a2d94e7_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_39a17b562f206a3e786c22b392cd826bd5f023e42b1d08475cc614ce6a31cee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a17b562f206a3e786c22b392cd826bd5f023e42b1d08475cc614ce6a31cee5->enter($__internal_39a17b562f206a3e786c22b392cd826bd5f023e42b1d08475cc614ce6a31cee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_39a17b562f206a3e786c22b392cd826bd5f023e42b1d08475cc614ce6a31cee5->leave($__internal_39a17b562f206a3e786c22b392cd826bd5f023e42b1d08475cc614ce6a31cee5_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbb45436d3bc5228d7b99608a8639e5a8f03b21f6ec5692256d53f652fac6a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb45436d3bc5228d7b99608a8639e5a8f03b21f6ec5692256d53f652fac6a34->enter($__internal_cbb45436d3bc5228d7b99608a8639e5a8f03b21f6ec5692256d53f652fac6a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_cbb45436d3bc5228d7b99608a8639e5a8f03b21f6ec5692256d53f652fac6a34->leave($__internal_cbb45436d3bc5228d7b99608a8639e5a8f03b21f6ec5692256d53f652fac6a34_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d61013b24c7e114c2396e243e424ba39bc43b15f49714b709f30b62e30b2c22e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61013b24c7e114c2396e243e424ba39bc43b15f49714b709f30b62e30b2c22e->enter($__internal_d61013b24c7e114c2396e243e424ba39bc43b15f49714b709f30b62e30b2c22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_d61013b24c7e114c2396e243e424ba39bc43b15f49714b709f30b62e30b2c22e->leave($__internal_d61013b24c7e114c2396e243e424ba39bc43b15f49714b709f30b62e30b2c22e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 17,  94 => 16,  83 => 11,  71 => 10,  62 => 18,  59 => 17,  57 => 16,  49 => 12,  47 => 11,  43 => 10,  39 => 9,  35 => 8,  26 => 1,);
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

        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link href=\"{{ asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/font-awesome.min.css')}}\" rel=\"stylesheet\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/app/Resources/views/base.html.twig");
    }
}
