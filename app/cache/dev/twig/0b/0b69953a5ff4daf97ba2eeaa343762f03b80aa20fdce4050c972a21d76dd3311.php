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
<<<<<<< HEAD
        $__internal_b2cb33d2fad91ad4a7ab54fad0422b0e31153b567aae8ab984585fc52bb0e0d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2cb33d2fad91ad4a7ab54fad0422b0e31153b567aae8ab984585fc52bb0e0d4->enter($__internal_b2cb33d2fad91ad4a7ab54fad0422b0e31153b567aae8ab984585fc52bb0e0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));
=======
        $__internal_35808be4bc903f0c5be77e1ac996b881f1d68c1616f2b152db4fcfc374b51f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35808be4bc903f0c5be77e1ac996b881f1d68c1616f2b152db4fcfc374b51f23->enter($__internal_35808be4bc903f0c5be77e1ac996b881f1d68c1616f2b152db4fcfc374b51f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

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
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
<<<<<<< HEAD
        $__internal_b2cb33d2fad91ad4a7ab54fad0422b0e31153b567aae8ab984585fc52bb0e0d4->leave($__internal_b2cb33d2fad91ad4a7ab54fad0422b0e31153b567aae8ab984585fc52bb0e0d4_prof);
=======
        $__internal_35808be4bc903f0c5be77e1ac996b881f1d68c1616f2b152db4fcfc374b51f23->leave($__internal_35808be4bc903f0c5be77e1ac996b881f1d68c1616f2b152db4fcfc374b51f23_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_b6e8fcd1db2d5b7e65181358a469b24bccb9d48e34c4e1c9841c685554e699bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e8fcd1db2d5b7e65181358a469b24bccb9d48e34c4e1c9841c685554e699bb->enter($__internal_b6e8fcd1db2d5b7e65181358a469b24bccb9d48e34c4e1c9841c685554e699bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_b6e8fcd1db2d5b7e65181358a469b24bccb9d48e34c4e1c9841c685554e699bb->leave($__internal_b6e8fcd1db2d5b7e65181358a469b24bccb9d48e34c4e1c9841c685554e699bb_prof);
=======
        $__internal_514bacab5ff31c4b7dfbbf547ec36d77560a7699476737287699ef8010668999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514bacab5ff31c4b7dfbbf547ec36d77560a7699476737287699ef8010668999->enter($__internal_514bacab5ff31c4b7dfbbf547ec36d77560a7699476737287699ef8010668999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Welcome!";
        
        $__internal_514bacab5ff31c4b7dfbbf547ec36d77560a7699476737287699ef8010668999->leave($__internal_514bacab5ff31c4b7dfbbf547ec36d77560a7699476737287699ef8010668999_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_ef304e00a4125bb632a5cc6c50864e7cd96d759bc69c8fd5f4b2e85d31f4277b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef304e00a4125bb632a5cc6c50864e7cd96d759bc69c8fd5f4b2e85d31f4277b->enter($__internal_ef304e00a4125bb632a5cc6c50864e7cd96d759bc69c8fd5f4b2e85d31f4277b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_ef304e00a4125bb632a5cc6c50864e7cd96d759bc69c8fd5f4b2e85d31f4277b->leave($__internal_ef304e00a4125bb632a5cc6c50864e7cd96d759bc69c8fd5f4b2e85d31f4277b_prof);
=======
        $__internal_e35e489f2dd2980636b5d84acb402047b931702c7a49797655e1cdb424c2c273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35e489f2dd2980636b5d84acb402047b931702c7a49797655e1cdb424c2c273->enter($__internal_e35e489f2dd2980636b5d84acb402047b931702c7a49797655e1cdb424c2c273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_e35e489f2dd2980636b5d84acb402047b931702c7a49797655e1cdb424c2c273->leave($__internal_e35e489f2dd2980636b5d84acb402047b931702c7a49797655e1cdb424c2c273_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_7b6fc569e737c97ed0a5779063ad93b21141ecf88ce18623aeb6dbc137b741a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6fc569e737c97ed0a5779063ad93b21141ecf88ce18623aeb6dbc137b741a9->enter($__internal_7b6fc569e737c97ed0a5779063ad93b21141ecf88ce18623aeb6dbc137b741a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_7b6fc569e737c97ed0a5779063ad93b21141ecf88ce18623aeb6dbc137b741a9->leave($__internal_7b6fc569e737c97ed0a5779063ad93b21141ecf88ce18623aeb6dbc137b741a9_prof);
=======
        $__internal_e8634f49bec791146b4506fb74327736ba6aa4d487c6a50c2522c32ccb458d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8634f49bec791146b4506fb74327736ba6aa4d487c6a50c2522c32ccb458d73->enter($__internal_e8634f49bec791146b4506fb74327736ba6aa4d487c6a50c2522c32ccb458d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_e8634f49bec791146b4506fb74327736ba6aa4d487c6a50c2522c32ccb458d73->leave($__internal_e8634f49bec791146b4506fb74327736ba6aa4d487c6a50c2522c32ccb458d73_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_474667a935823e28f45cdd703b3e778411643ea7d322c7707890cd2196178900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474667a935823e28f45cdd703b3e778411643ea7d322c7707890cd2196178900->enter($__internal_474667a935823e28f45cdd703b3e778411643ea7d322c7707890cd2196178900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_474667a935823e28f45cdd703b3e778411643ea7d322c7707890cd2196178900->leave($__internal_474667a935823e28f45cdd703b3e778411643ea7d322c7707890cd2196178900_prof);
=======
        $__internal_930aac072f191933102b62430a4cda144c785abda01cafffa48ba7b4ce391364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930aac072f191933102b62430a4cda144c785abda01cafffa48ba7b4ce391364->enter($__internal_930aac072f191933102b62430a4cda144c785abda01cafffa48ba7b4ce391364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_930aac072f191933102b62430a4cda144c785abda01cafffa48ba7b4ce391364->leave($__internal_930aac072f191933102b62430a4cda144c785abda01cafffa48ba7b4ce391364_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

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
        return array (  94 => 12,  83 => 11,  72 => 6,  60 => 5,  51 => 13,  48 => 12,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
<<<<<<< HEAD
", "base.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/app/Resources/views/base.html.twig");
=======
", "::base.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/app/Resources/views/base.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
