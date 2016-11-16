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
        $__internal_1370270bc519409d9ed35e75116613928406efc43e3165dfe37d642cf0389a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1370270bc519409d9ed35e75116613928406efc43e3165dfe37d642cf0389a8f->enter($__internal_1370270bc519409d9ed35e75116613928406efc43e3165dfe37d642cf0389a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig"));

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
        
        $__internal_1370270bc519409d9ed35e75116613928406efc43e3165dfe37d642cf0389a8f->leave($__internal_1370270bc519409d9ed35e75116613928406efc43e3165dfe37d642cf0389a8f_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2e966cb1c9e7848f05443d3cc899ebf6674b438b2ffc4a2677646c0ee6d94e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e966cb1c9e7848f05443d3cc899ebf6674b438b2ffc4a2677646c0ee6d94e6d->enter($__internal_2e966cb1c9e7848f05443d3cc899ebf6674b438b2ffc4a2677646c0ee6d94e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig"));

        // line 2
        echo "    ";
        // line 3
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_2e966cb1c9e7848f05443d3cc899ebf6674b438b2ffc4a2677646c0ee6d94e6d->leave($__internal_2e966cb1c9e7848f05443d3cc899ebf6674b438b2ffc4a2677646c0ee6d94e6d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c34e0d0054fe0876b8bbbede3025a32922255444a4f33880922ab55df72415ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34e0d0054fe0876b8bbbede3025a32922255444a4f33880922ab55df72415ec->enter($__internal_c34e0d0054fe0876b8bbbede3025a32922255444a4f33880922ab55df72415ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig"));

        // line 8
        echo "    ";
        // line 9
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_c34e0d0054fe0876b8bbbede3025a32922255444a4f33880922ab55df72415ec->leave($__internal_c34e0d0054fe0876b8bbbede3025a32922255444a4f33880922ab55df72415ec_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d0c437dc45edd1ea2a820a08112fab883c34afa994a93875b162106d50d66f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c437dc45edd1ea2a820a08112fab883c34afa994a93875b162106d50d66f87->enter($__internal_d0c437dc45edd1ea2a820a08112fab883c34afa994a93875b162106d50d66f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig"));

        // line 14
        echo "    ";
        $this->loadTemplate("SfWebAppFrontOfficeBundle:Resetting:inc/email.html.twig", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig", 14)->display($context);
        
        $__internal_d0c437dc45edd1ea2a820a08112fab883c34afa994a93875b162106d50d66f87->leave($__internal_d0c437dc45edd1ea2a820a08112fab883c34afa994a93875b162106d50d66f87_prof);

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
{% endblock %}", "SfWebAppFrontOfficeBundle:Resetting:email.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/src/SfWebApp/FrontOfficeBundle/Resources/views/Resetting/email.html.twig");
    }
}
