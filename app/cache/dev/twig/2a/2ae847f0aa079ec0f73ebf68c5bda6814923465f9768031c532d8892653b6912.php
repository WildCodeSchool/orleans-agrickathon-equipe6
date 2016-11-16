<?php

/* SfWebAppBackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_651f537b68fda2e4680ffbbe7c31f266342bfe67763710800f332b1c48b1d466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
<<<<<<< HEAD
        $this->parent = $this->loadTemplate("SfWebAppFrontOfficeBundle::layout-login.html.twig", "SfWebAppBackOfficeBundle:Default:index.html.twig", 1);
=======
        $this->parent = $this->loadTemplate("SfWebAppFrontOfficeBundle:Security:layout-login.html.twig", "SfWebAppBackOfficeBundle:Default:index.html.twig", 1);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
<<<<<<< HEAD
        return "SfWebAppFrontOfficeBundle::layout-login.html.twig";
=======
        return "SfWebAppFrontOfficeBundle:Security:layout-login.html.twig";
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_edceddd7003c3efa74ff7f57547b7bfffe88b78e8eed8d8adec354f40d7b4385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edceddd7003c3efa74ff7f57547b7bfffe88b78e8eed8d8adec354f40d7b4385->enter($__internal_edceddd7003c3efa74ff7f57547b7bfffe88b78e8eed8d8adec354f40d7b4385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppBackOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edceddd7003c3efa74ff7f57547b7bfffe88b78e8eed8d8adec354f40d7b4385->leave($__internal_edceddd7003c3efa74ff7f57547b7bfffe88b78e8eed8d8adec354f40d7b4385_prof);
=======
        $__internal_d269ca8a3fd3261ad8fed6e823a7616f805629116770c38531adc6d7b9f3069b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d269ca8a3fd3261ad8fed6e823a7616f805629116770c38531adc6d7b9f3069b->enter($__internal_d269ca8a3fd3261ad8fed6e823a7616f805629116770c38531adc6d7b9f3069b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppBackOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d269ca8a3fd3261ad8fed6e823a7616f805629116770c38531adc6d7b9f3069b->leave($__internal_d269ca8a3fd3261ad8fed6e823a7616f805629116770c38531adc6d7b9f3069b_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "SfWebAppBackOfficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
<<<<<<< HEAD
        return new Twig_Source("{% extends 'SfWebAppFrontOfficeBundle::layout-login.html.twig' %}", "SfWebAppBackOfficeBundle:Default:index.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/BackOfficeBundle/Resources/views/Default/index.html.twig");
=======
        return new Twig_Source("{% extends 'SfWebAppFrontOfficeBundle:Security:layout-login.html.twig' %}", "SfWebAppBackOfficeBundle:Default:index.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/src/SfWebApp/BackOfficeBundle/Resources/views/Default/index.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
