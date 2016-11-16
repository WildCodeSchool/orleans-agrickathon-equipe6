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
        $__internal_d86fb9ff7aece2afcec453d2518051af8db940365af6f86eed23f3b616287415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86fb9ff7aece2afcec453d2518051af8db940365af6f86eed23f3b616287415->enter($__internal_d86fb9ff7aece2afcec453d2518051af8db940365af6f86eed23f3b616287415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d86fb9ff7aece2afcec453d2518051af8db940365af6f86eed23f3b616287415->leave($__internal_d86fb9ff7aece2afcec453d2518051af8db940365af6f86eed23f3b616287415_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_403e6b9c1747e3fbd90023a5bf18bc0d72d449e260b4020c796784b0ba6e6003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403e6b9c1747e3fbd90023a5bf18bc0d72d449e260b4020c796784b0ba6e6003->enter($__internal_403e6b9c1747e3fbd90023a5bf18bc0d72d449e260b4020c796784b0ba6e6003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_403e6b9c1747e3fbd90023a5bf18bc0d72d449e260b4020c796784b0ba6e6003->leave($__internal_403e6b9c1747e3fbd90023a5bf18bc0d72d449e260b4020c796784b0ba6e6003_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d200cc8322b2c2987bc3315f8cdef6ece30c0a1f4da475be1806b1a43b55d3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d200cc8322b2c2987bc3315f8cdef6ece30c0a1f4da475be1806b1a43b55d3f5->enter($__internal_d200cc8322b2c2987bc3315f8cdef6ece30c0a1f4da475be1806b1a43b55d3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d200cc8322b2c2987bc3315f8cdef6ece30c0a1f4da475be1806b1a43b55d3f5->leave($__internal_d200cc8322b2c2987bc3315f8cdef6ece30c0a1f4da475be1806b1a43b55d3f5_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5633dd547b6a78b92b8a24022a0db58a14abd8452504e8935a2e88671a0667d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5633dd547b6a78b92b8a24022a0db58a14abd8452504e8935a2e88671a0667d8->enter($__internal_5633dd547b6a78b92b8a24022a0db58a14abd8452504e8935a2e88671a0667d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_5633dd547b6a78b92b8a24022a0db58a14abd8452504e8935a2e88671a0667d8->leave($__internal_5633dd547b6a78b92b8a24022a0db58a14abd8452504e8935a2e88671a0667d8_prof);

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
", "FOSUserBundle:Resetting:email.txt.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
