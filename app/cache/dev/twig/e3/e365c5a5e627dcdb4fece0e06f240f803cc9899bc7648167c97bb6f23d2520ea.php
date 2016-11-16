<?php

/* SfWebAppFrontOfficeBundle:Resetting:email.html.twig */
class __TwigTemplate_e2870dff49f37c6af790992389669257dedb83a332f7329b61472b29c05d1f16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_f7ca2dac194e3dce9bd3506c97a4d08a83615d95bfbe6829ee5411ce7246723a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ca2dac194e3dce9bd3506c97a4d08a83615d95bfbe6829ee5411ce7246723a->enter($__internal_f7ca2dac194e3dce9bd3506c97a4d08a83615d95bfbe6829ee5411ce7246723a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig"));
=======
        $__internal_f8d0ad14d8522b2ec4df442bb3090419ac69f8c745f95e4da203090485d90daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d0ad14d8522b2ec4df442bb3090419ac69f8c745f95e4da203090485d90daa->enter($__internal_f8d0ad14d8522b2ec4df442bb3090419ac69f8c745f95e4da203090485d90daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
<<<<<<< HEAD
        $__internal_f7ca2dac194e3dce9bd3506c97a4d08a83615d95bfbe6829ee5411ce7246723a->leave($__internal_f7ca2dac194e3dce9bd3506c97a4d08a83615d95bfbe6829ee5411ce7246723a_prof);
=======
        $__internal_f8d0ad14d8522b2ec4df442bb3090419ac69f8c745f95e4da203090485d90daa->leave($__internal_f8d0ad14d8522b2ec4df442bb3090419ac69f8c745f95e4da203090485d90daa_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_9162854a8cdbf3a561f16bb62a062f65669cf6b2770b21c1879ff2e37fb41ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9162854a8cdbf3a561f16bb62a062f65669cf6b2770b21c1879ff2e37fb41ae6->enter($__internal_9162854a8cdbf3a561f16bb62a062f65669cf6b2770b21c1879ff2e37fb41ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig"));
=======
        $__internal_f493dc271305e29264f76df0e3597b2472b045b5777d0e85efd746ab50a342a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f493dc271305e29264f76df0e3597b2472b045b5777d0e85efd746ab50a342a7->enter($__internal_f493dc271305e29264f76df0e3597b2472b045b5777d0e85efd746ab50a342a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 2
        echo "    ";
        // line 3
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
<<<<<<< HEAD
        $__internal_9162854a8cdbf3a561f16bb62a062f65669cf6b2770b21c1879ff2e37fb41ae6->leave($__internal_9162854a8cdbf3a561f16bb62a062f65669cf6b2770b21c1879ff2e37fb41ae6_prof);
=======
        $__internal_f493dc271305e29264f76df0e3597b2472b045b5777d0e85efd746ab50a342a7->leave($__internal_f493dc271305e29264f76df0e3597b2472b045b5777d0e85efd746ab50a342a7_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_0a2b99f94e4333831e793d7ded4dd17bb29dbc01196f01756bc411fec7975f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2b99f94e4333831e793d7ded4dd17bb29dbc01196f01756bc411fec7975f4b->enter($__internal_0a2b99f94e4333831e793d7ded4dd17bb29dbc01196f01756bc411fec7975f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig"));
=======
        $__internal_2655beab7e97f51d10312502686bc60fe41dd47a8dec41fcc5064d711e87ab42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2655beab7e97f51d10312502686bc60fe41dd47a8dec41fcc5064d711e87ab42->enter($__internal_2655beab7e97f51d10312502686bc60fe41dd47a8dec41fcc5064d711e87ab42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 8
        echo "    ";
        // line 9
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
<<<<<<< HEAD
        $__internal_0a2b99f94e4333831e793d7ded4dd17bb29dbc01196f01756bc411fec7975f4b->leave($__internal_0a2b99f94e4333831e793d7ded4dd17bb29dbc01196f01756bc411fec7975f4b_prof);
=======
        $__internal_2655beab7e97f51d10312502686bc60fe41dd47a8dec41fcc5064d711e87ab42->leave($__internal_2655beab7e97f51d10312502686bc60fe41dd47a8dec41fcc5064d711e87ab42_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_17a3f4a56794658113e8f1edf4b7b5b62ab4bfa7d09944c336a38db110806fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a3f4a56794658113e8f1edf4b7b5b62ab4bfa7d09944c336a38db110806fa9->enter($__internal_17a3f4a56794658113e8f1edf4b7b5b62ab4bfa7d09944c336a38db110806fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig"));
=======
        $__internal_be0d8dfc3e05655e2068114bba444ef4ab75dc2dd1b360e03f6385902a3523c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0d8dfc3e05655e2068114bba444ef4ab75dc2dd1b360e03f6385902a3523c5->enter($__internal_be0d8dfc3e05655e2068114bba444ef4ab75dc2dd1b360e03f6385902a3523c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 14
        echo "    ";
        $this->loadTemplate("SfWebAppFrontOfficeBundle:Resetting:inc/email.html.twig", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig", 14)->display($context);
        
<<<<<<< HEAD
        $__internal_17a3f4a56794658113e8f1edf4b7b5b62ab4bfa7d09944c336a38db110806fa9->leave($__internal_17a3f4a56794658113e8f1edf4b7b5b62ab4bfa7d09944c336a38db110806fa9_prof);
=======
        $__internal_be0d8dfc3e05655e2068114bba444ef4ab75dc2dd1b360e03f6385902a3523c5->leave($__internal_be0d8dfc3e05655e2068114bba444ef4ab75dc2dd1b360e03f6385902a3523c5_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "SfWebAppFrontOfficeBundle:Resetting:email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  78 => 13,  68 => 9,  66 => 8,  60 => 7,  50 => 3,  48 => 2,  42 => 1,  35 => 13,  32 => 12,  30 => 7,  27 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
    {% autoescape false %}
        {{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
    {% endautoescape %}
{% endblock %}

{% block body_text %}
    {% autoescape false %}
        {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
    {% endautoescape %}
{% endblock %}

{% block body_html %}
    {% include 'SfWebAppFrontOfficeBundle:Resetting:inc/email.html.twig' %}
<<<<<<< HEAD
{% endblock %}", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Resetting/email.html.twig");
=======
{% endblock %}", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Resetting/email.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
