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
        $__internal_61efb69543d9d1c7856d44fb3c154ba5e8b56bfad30e575dde57b3941bd4efcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61efb69543d9d1c7856d44fb3c154ba5e8b56bfad30e575dde57b3941bd4efcc->enter($__internal_61efb69543d9d1c7856d44fb3c154ba5e8b56bfad30e575dde57b3941bd4efcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_61efb69543d9d1c7856d44fb3c154ba5e8b56bfad30e575dde57b3941bd4efcc->leave($__internal_61efb69543d9d1c7856d44fb3c154ba5e8b56bfad30e575dde57b3941bd4efcc_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c643b762bfff7a78a9091a78ad43060314877e25041f184dfb5a77697afe4a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c643b762bfff7a78a9091a78ad43060314877e25041f184dfb5a77697afe4a93->enter($__internal_c643b762bfff7a78a9091a78ad43060314877e25041f184dfb5a77697afe4a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c643b762bfff7a78a9091a78ad43060314877e25041f184dfb5a77697afe4a93->leave($__internal_c643b762bfff7a78a9091a78ad43060314877e25041f184dfb5a77697afe4a93_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8bb61a9495f1164ceca7ce84296e9e5d3706986045e1af03fd6d556ab6e3016f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb61a9495f1164ceca7ce84296e9e5d3706986045e1af03fd6d556ab6e3016f->enter($__internal_8bb61a9495f1164ceca7ce84296e9e5d3706986045e1af03fd6d556ab6e3016f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8bb61a9495f1164ceca7ce84296e9e5d3706986045e1af03fd6d556ab6e3016f->leave($__internal_8bb61a9495f1164ceca7ce84296e9e5d3706986045e1af03fd6d556ab6e3016f_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a5e2b131a9ff4f289e782da89a7f91f2d91f346ffa1f1cfb6b9737d162a4819c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e2b131a9ff4f289e782da89a7f91f2d91f346ffa1f1cfb6b9737d162a4819c->enter($__internal_a5e2b131a9ff4f289e782da89a7f91f2d91f346ffa1f1cfb6b9737d162a4819c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_a5e2b131a9ff4f289e782da89a7f91f2d91f346ffa1f1cfb6b9737d162a4819c->leave($__internal_a5e2b131a9ff4f289e782da89a7f91f2d91f346ffa1f1cfb6b9737d162a4819c_prof);

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
", "FOSUserBundle:Resetting:email.txt.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
