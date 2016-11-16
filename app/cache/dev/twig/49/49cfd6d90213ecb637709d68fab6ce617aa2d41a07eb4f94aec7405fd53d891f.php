<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_ab5527b4022bee4f353c68734f72b8b4c3322ce8fcd04b7d24ba1e48423a7d9b extends Twig_Template
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
        $__internal_3641236832947c72278fb897fea30d60c72752ea1a9cc55e48ecc33e158b94fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3641236832947c72278fb897fea30d60c72752ea1a9cc55e48ecc33e158b94fe->enter($__internal_3641236832947c72278fb897fea30d60c72752ea1a9cc55e48ecc33e158b94fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3641236832947c72278fb897fea30d60c72752ea1a9cc55e48ecc33e158b94fe->leave($__internal_3641236832947c72278fb897fea30d60c72752ea1a9cc55e48ecc33e158b94fe_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4e8e9762d6f4535d028a095caa79939d8609fa59305a1ad484696e4302704760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8e9762d6f4535d028a095caa79939d8609fa59305a1ad484696e4302704760->enter($__internal_4e8e9762d6f4535d028a095caa79939d8609fa59305a1ad484696e4302704760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4e8e9762d6f4535d028a095caa79939d8609fa59305a1ad484696e4302704760->leave($__internal_4e8e9762d6f4535d028a095caa79939d8609fa59305a1ad484696e4302704760_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d350d258cc4154ec40499be05a844f393483eacb7a2d4b1a3f6cb44da7e3e5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d350d258cc4154ec40499be05a844f393483eacb7a2d4b1a3f6cb44da7e3e5d9->enter($__internal_d350d258cc4154ec40499be05a844f393483eacb7a2d4b1a3f6cb44da7e3e5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d350d258cc4154ec40499be05a844f393483eacb7a2d4b1a3f6cb44da7e3e5d9->leave($__internal_d350d258cc4154ec40499be05a844f393483eacb7a2d4b1a3f6cb44da7e3e5d9_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7f0f0ca03430dc1498ec244ad87b535c60ecda5eeb912530b7e694fc8bd482c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0f0ca03430dc1498ec244ad87b535c60ecda5eeb912530b7e694fc8bd482c1->enter($__internal_7f0f0ca03430dc1498ec244ad87b535c60ecda5eeb912530b7e694fc8bd482c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_7f0f0ca03430dc1498ec244ad87b535c60ecda5eeb912530b7e694fc8bd482c1->leave($__internal_7f0f0ca03430dc1498ec244ad87b535c60ecda5eeb912530b7e694fc8bd482c1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
