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
        $__internal_35808be4bc903f0c5be77e1ac996b881f1d68c1616f2b152db4fcfc374b51f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35808be4bc903f0c5be77e1ac996b881f1d68c1616f2b152db4fcfc374b51f23->enter($__internal_35808be4bc903f0c5be77e1ac996b881f1d68c1616f2b152db4fcfc374b51f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_35808be4bc903f0c5be77e1ac996b881f1d68c1616f2b152db4fcfc374b51f23->leave($__internal_35808be4bc903f0c5be77e1ac996b881f1d68c1616f2b152db4fcfc374b51f23_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_514bacab5ff31c4b7dfbbf547ec36d77560a7699476737287699ef8010668999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514bacab5ff31c4b7dfbbf547ec36d77560a7699476737287699ef8010668999->enter($__internal_514bacab5ff31c4b7dfbbf547ec36d77560a7699476737287699ef8010668999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Welcome!";
        
        $__internal_514bacab5ff31c4b7dfbbf547ec36d77560a7699476737287699ef8010668999->leave($__internal_514bacab5ff31c4b7dfbbf547ec36d77560a7699476737287699ef8010668999_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e35e489f2dd2980636b5d84acb402047b931702c7a49797655e1cdb424c2c273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35e489f2dd2980636b5d84acb402047b931702c7a49797655e1cdb424c2c273->enter($__internal_e35e489f2dd2980636b5d84acb402047b931702c7a49797655e1cdb424c2c273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_e35e489f2dd2980636b5d84acb402047b931702c7a49797655e1cdb424c2c273->leave($__internal_e35e489f2dd2980636b5d84acb402047b931702c7a49797655e1cdb424c2c273_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8634f49bec791146b4506fb74327736ba6aa4d487c6a50c2522c32ccb458d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8634f49bec791146b4506fb74327736ba6aa4d487c6a50c2522c32ccb458d73->enter($__internal_e8634f49bec791146b4506fb74327736ba6aa4d487c6a50c2522c32ccb458d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_e8634f49bec791146b4506fb74327736ba6aa4d487c6a50c2522c32ccb458d73->leave($__internal_e8634f49bec791146b4506fb74327736ba6aa4d487c6a50c2522c32ccb458d73_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_930aac072f191933102b62430a4cda144c785abda01cafffa48ba7b4ce391364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930aac072f191933102b62430a4cda144c785abda01cafffa48ba7b4ce391364->enter($__internal_930aac072f191933102b62430a4cda144c785abda01cafffa48ba7b4ce391364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_930aac072f191933102b62430a4cda144c785abda01cafffa48ba7b4ce391364->leave($__internal_930aac072f191933102b62430a4cda144c785abda01cafffa48ba7b4ce391364_prof);

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
", "::base.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/app/Resources/views/base.html.twig");
    }
}
