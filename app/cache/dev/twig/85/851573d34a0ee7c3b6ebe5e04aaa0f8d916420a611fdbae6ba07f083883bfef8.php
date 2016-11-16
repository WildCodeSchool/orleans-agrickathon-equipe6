<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_9e88b69b74612417f494d3aca50fddc4c63f17f40262965d2dd3277ccbf43be5 extends Twig_Template
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
        $__internal_653d3d64b945dd854b127fdbfeb96d2e1bd2951583c7ac2504ff0962a41bee83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653d3d64b945dd854b127fdbfeb96d2e1bd2951583c7ac2504ff0962a41bee83->enter($__internal_653d3d64b945dd854b127fdbfeb96d2e1bd2951583c7ac2504ff0962a41bee83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_653d3d64b945dd854b127fdbfeb96d2e1bd2951583c7ac2504ff0962a41bee83->leave($__internal_653d3d64b945dd854b127fdbfeb96d2e1bd2951583c7ac2504ff0962a41bee83_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_13188ee945b9de828f9b96b4cd6b292b3b4093f17fe7a49f7f6cb8f62c5f5c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13188ee945b9de828f9b96b4cd6b292b3b4093f17fe7a49f7f6cb8f62c5f5c3f->enter($__internal_13188ee945b9de828f9b96b4cd6b292b3b4093f17fe7a49f7f6cb8f62c5f5c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_13188ee945b9de828f9b96b4cd6b292b3b4093f17fe7a49f7f6cb8f62c5f5c3f->leave($__internal_13188ee945b9de828f9b96b4cd6b292b3b4093f17fe7a49f7f6cb8f62c5f5c3f_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d2a37a37fe9cdc874fa767907a8dfa2d6dc96d828304158b6d6e83dcfff643ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a37a37fe9cdc874fa767907a8dfa2d6dc96d828304158b6d6e83dcfff643ba->enter($__internal_d2a37a37fe9cdc874fa767907a8dfa2d6dc96d828304158b6d6e83dcfff643ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d2a37a37fe9cdc874fa767907a8dfa2d6dc96d828304158b6d6e83dcfff643ba->leave($__internal_d2a37a37fe9cdc874fa767907a8dfa2d6dc96d828304158b6d6e83dcfff643ba_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_78fc6510b9451c49fd7d9f7c6444aa5f3456cd84ff0a0cb4b1f11aa66a023924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78fc6510b9451c49fd7d9f7c6444aa5f3456cd84ff0a0cb4b1f11aa66a023924->enter($__internal_78fc6510b9451c49fd7d9f7c6444aa5f3456cd84ff0a0cb4b1f11aa66a023924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_78fc6510b9451c49fd7d9f7c6444aa5f3456cd84ff0a0cb4b1f11aa66a023924->leave($__internal_78fc6510b9451c49fd7d9f7c6444aa5f3456cd84ff0a0cb4b1f11aa66a023924_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
