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
<<<<<<< HEAD
        $__internal_10af5d676826f907999e0c962e7c8e429e53eac857f92afc9de96f9033605faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10af5d676826f907999e0c962e7c8e429e53eac857f92afc9de96f9033605faf->enter($__internal_10af5d676826f907999e0c962e7c8e429e53eac857f92afc9de96f9033605faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));
=======
        $__internal_d86fb9ff7aece2afcec453d2518051af8db940365af6f86eed23f3b616287415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86fb9ff7aece2afcec453d2518051af8db940365af6f86eed23f3b616287415->enter($__internal_d86fb9ff7aece2afcec453d2518051af8db940365af6f86eed23f3b616287415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
<<<<<<< HEAD
        $__internal_10af5d676826f907999e0c962e7c8e429e53eac857f92afc9de96f9033605faf->leave($__internal_10af5d676826f907999e0c962e7c8e429e53eac857f92afc9de96f9033605faf_prof);
=======
        $__internal_d86fb9ff7aece2afcec453d2518051af8db940365af6f86eed23f3b616287415->leave($__internal_d86fb9ff7aece2afcec453d2518051af8db940365af6f86eed23f3b616287415_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_7f2afc3c6ce6af4e4c62b1d2e42b751d93872aafa920d2b1e84c00b96a4dc92a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2afc3c6ce6af4e4c62b1d2e42b751d93872aafa920d2b1e84c00b96a4dc92a->enter($__internal_7f2afc3c6ce6af4e4c62b1d2e42b751d93872aafa920d2b1e84c00b96a4dc92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));
=======
        $__internal_403e6b9c1747e3fbd90023a5bf18bc0d72d449e260b4020c796784b0ba6e6003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403e6b9c1747e3fbd90023a5bf18bc0d72d449e260b4020c796784b0ba6e6003->enter($__internal_403e6b9c1747e3fbd90023a5bf18bc0d72d449e260b4020c796784b0ba6e6003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
<<<<<<< HEAD
        $__internal_7f2afc3c6ce6af4e4c62b1d2e42b751d93872aafa920d2b1e84c00b96a4dc92a->leave($__internal_7f2afc3c6ce6af4e4c62b1d2e42b751d93872aafa920d2b1e84c00b96a4dc92a_prof);
=======
        $__internal_403e6b9c1747e3fbd90023a5bf18bc0d72d449e260b4020c796784b0ba6e6003->leave($__internal_403e6b9c1747e3fbd90023a5bf18bc0d72d449e260b4020c796784b0ba6e6003_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_d4bf948fad9181be92ec34ea03031b8e3a5d37464e4e81ed842cdea7320eb3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4bf948fad9181be92ec34ea03031b8e3a5d37464e4e81ed842cdea7320eb3ba->enter($__internal_d4bf948fad9181be92ec34ea03031b8e3a5d37464e4e81ed842cdea7320eb3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));
=======
        $__internal_d200cc8322b2c2987bc3315f8cdef6ece30c0a1f4da475be1806b1a43b55d3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d200cc8322b2c2987bc3315f8cdef6ece30c0a1f4da475be1806b1a43b55d3f5->enter($__internal_d200cc8322b2c2987bc3315f8cdef6ece30c0a1f4da475be1806b1a43b55d3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
<<<<<<< HEAD
        $__internal_d4bf948fad9181be92ec34ea03031b8e3a5d37464e4e81ed842cdea7320eb3ba->leave($__internal_d4bf948fad9181be92ec34ea03031b8e3a5d37464e4e81ed842cdea7320eb3ba_prof);
=======
        $__internal_d200cc8322b2c2987bc3315f8cdef6ece30c0a1f4da475be1806b1a43b55d3f5->leave($__internal_d200cc8322b2c2987bc3315f8cdef6ece30c0a1f4da475be1806b1a43b55d3f5_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_7e781eb46f151b8552c8f47e2809683d252e8d5f4a2bd61af36aff6ba4c81baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e781eb46f151b8552c8f47e2809683d252e8d5f4a2bd61af36aff6ba4c81baf->enter($__internal_7e781eb46f151b8552c8f47e2809683d252e8d5f4a2bd61af36aff6ba4c81baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_7e781eb46f151b8552c8f47e2809683d252e8d5f4a2bd61af36aff6ba4c81baf->leave($__internal_7e781eb46f151b8552c8f47e2809683d252e8d5f4a2bd61af36aff6ba4c81baf_prof);
=======
        $__internal_5633dd547b6a78b92b8a24022a0db58a14abd8452504e8935a2e88671a0667d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5633dd547b6a78b92b8a24022a0db58a14abd8452504e8935a2e88671a0667d8->enter($__internal_5633dd547b6a78b92b8a24022a0db58a14abd8452504e8935a2e88671a0667d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_5633dd547b6a78b92b8a24022a0db58a14abd8452504e8935a2e88671a0667d8->leave($__internal_5633dd547b6a78b92b8a24022a0db58a14abd8452504e8935a2e88671a0667d8_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

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
<<<<<<< HEAD
", "FOSUserBundle:Resetting:email.txt.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/email.txt.twig");
=======
", "FOSUserBundle:Resetting:email.txt.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/email.txt.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
