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
        $__internal_aaf1c75d27e28307ad60cd8b4fac8f6e70ee58ed3810c378759079a7875f4206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf1c75d27e28307ad60cd8b4fac8f6e70ee58ed3810c378759079a7875f4206->enter($__internal_aaf1c75d27e28307ad60cd8b4fac8f6e70ee58ed3810c378759079a7875f4206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig"));

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
        
        $__internal_aaf1c75d27e28307ad60cd8b4fac8f6e70ee58ed3810c378759079a7875f4206->leave($__internal_aaf1c75d27e28307ad60cd8b4fac8f6e70ee58ed3810c378759079a7875f4206_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cc3e0a0ca456f3a88bce71704d8209e75409e63daa4c77bfa63f907b9a33adc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3e0a0ca456f3a88bce71704d8209e75409e63daa4c77bfa63f907b9a33adc6->enter($__internal_cc3e0a0ca456f3a88bce71704d8209e75409e63daa4c77bfa63f907b9a33adc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig"));

        // line 2
        echo "    ";
        // line 3
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_cc3e0a0ca456f3a88bce71704d8209e75409e63daa4c77bfa63f907b9a33adc6->leave($__internal_cc3e0a0ca456f3a88bce71704d8209e75409e63daa4c77bfa63f907b9a33adc6_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_706f19ebd8e343d1197e9912dcc8dd3f28637cd7400b3d5f53bad6d0f4b39e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706f19ebd8e343d1197e9912dcc8dd3f28637cd7400b3d5f53bad6d0f4b39e9b->enter($__internal_706f19ebd8e343d1197e9912dcc8dd3f28637cd7400b3d5f53bad6d0f4b39e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig"));

        // line 8
        echo "    ";
        // line 9
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_706f19ebd8e343d1197e9912dcc8dd3f28637cd7400b3d5f53bad6d0f4b39e9b->leave($__internal_706f19ebd8e343d1197e9912dcc8dd3f28637cd7400b3d5f53bad6d0f4b39e9b_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_297d8abf973325211d34d544105c4cde43fc17768f7347df576dd678ace68982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297d8abf973325211d34d544105c4cde43fc17768f7347df576dd678ace68982->enter($__internal_297d8abf973325211d34d544105c4cde43fc17768f7347df576dd678ace68982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig"));

        // line 14
        echo "    ";
        $this->loadTemplate("SfWebAppFrontOfficeBundle:Resetting:inc/email.html.twig", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig", 14)->display($context);
        
        $__internal_297d8abf973325211d34d544105c4cde43fc17768f7347df576dd678ace68982->leave($__internal_297d8abf973325211d34d544105c4cde43fc17768f7347df576dd678ace68982_prof);

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
{% endblock %}", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Resetting/email.html.twig");
    }
}
