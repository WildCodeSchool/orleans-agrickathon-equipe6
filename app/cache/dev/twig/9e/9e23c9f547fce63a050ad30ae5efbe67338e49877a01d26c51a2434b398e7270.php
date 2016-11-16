<?php

/* SfWebAppFrontOfficeBundle:Profile/Registration:email.html.twig */
class __TwigTemplate_ec21dbe34000ae3318f662b42dda42ec1c42db27536b2e36a358fd7349eeb34c extends Twig_Template
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
        $__internal_67bc479fe7267f5f4246689f6af0eaff15e28939ad18acdc371bc09113db232a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67bc479fe7267f5f4246689f6af0eaff15e28939ad18acdc371bc09113db232a->enter($__internal_67bc479fe7267f5f4246689f6af0eaff15e28939ad18acdc371bc09113db232a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Profile/Registration:email.html.twig"));
=======
        $__internal_4c28f03a3544661e0e4c1d5521d38daa670f376a6a709dad279ccda5c7f6bc6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c28f03a3544661e0e4c1d5521d38daa670f376a6a709dad279ccda5c7f6bc6a->enter($__internal_4c28f03a3544661e0e4c1d5521d38daa670f376a6a709dad279ccda5c7f6bc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Profile/Registration:email.html.twig"));
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
        $__internal_67bc479fe7267f5f4246689f6af0eaff15e28939ad18acdc371bc09113db232a->leave($__internal_67bc479fe7267f5f4246689f6af0eaff15e28939ad18acdc371bc09113db232a_prof);
=======
        $__internal_4c28f03a3544661e0e4c1d5521d38daa670f376a6a709dad279ccda5c7f6bc6a->leave($__internal_4c28f03a3544661e0e4c1d5521d38daa670f376a6a709dad279ccda5c7f6bc6a_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_d18953d87c1b5ebf5d12b1abe94f4489459eef63a12954a5a7edf70757fc2121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18953d87c1b5ebf5d12b1abe94f4489459eef63a12954a5a7edf70757fc2121->enter($__internal_d18953d87c1b5ebf5d12b1abe94f4489459eef63a12954a5a7edf70757fc2121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Profile/Registration:email.html.twig"));
=======
        $__internal_3c6a68a892b50d531ed1115435e923c5d7162ed59df99c9f45d2e4eb32938b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6a68a892b50d531ed1115435e923c5d7162ed59df99c9f45d2e4eb32938b5f->enter($__internal_3c6a68a892b50d531ed1115435e923c5d7162ed59df99c9f45d2e4eb32938b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Profile/Registration:email.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 2
        echo "    ";
        // line 3
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
<<<<<<< HEAD
        $__internal_d18953d87c1b5ebf5d12b1abe94f4489459eef63a12954a5a7edf70757fc2121->leave($__internal_d18953d87c1b5ebf5d12b1abe94f4489459eef63a12954a5a7edf70757fc2121_prof);
=======
        $__internal_3c6a68a892b50d531ed1115435e923c5d7162ed59df99c9f45d2e4eb32938b5f->leave($__internal_3c6a68a892b50d531ed1115435e923c5d7162ed59df99c9f45d2e4eb32938b5f_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_868bed5835b3311b996626eebfbad3a9c4206d4909287c33ded61f599238b7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868bed5835b3311b996626eebfbad3a9c4206d4909287c33ded61f599238b7e2->enter($__internal_868bed5835b3311b996626eebfbad3a9c4206d4909287c33ded61f599238b7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Profile/Registration:email.html.twig"));
=======
        $__internal_fa57e06b986837d072e8186939f3468c62475cbd9d86f0355426a9779c3fa5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa57e06b986837d072e8186939f3468c62475cbd9d86f0355426a9779c3fa5e4->enter($__internal_fa57e06b986837d072e8186939f3468c62475cbd9d86f0355426a9779c3fa5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Profile/Registration:email.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 8
        echo "    ";
        // line 9
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
<<<<<<< HEAD
        $__internal_868bed5835b3311b996626eebfbad3a9c4206d4909287c33ded61f599238b7e2->leave($__internal_868bed5835b3311b996626eebfbad3a9c4206d4909287c33ded61f599238b7e2_prof);
=======
        $__internal_fa57e06b986837d072e8186939f3468c62475cbd9d86f0355426a9779c3fa5e4->leave($__internal_fa57e06b986837d072e8186939f3468c62475cbd9d86f0355426a9779c3fa5e4_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_357e1f735903122fd02b579d71a5996b74ba73f24fe5468e9336dbb7e6fa0a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357e1f735903122fd02b579d71a5996b74ba73f24fe5468e9336dbb7e6fa0a4e->enter($__internal_357e1f735903122fd02b579d71a5996b74ba73f24fe5468e9336dbb7e6fa0a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Profile/Registration:email.html.twig"));
=======
        $__internal_4feac56074015fcab82885aa11bdb55733d55992ee09e9439f41d7b534378975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4feac56074015fcab82885aa11bdb55733d55992ee09e9439f41d7b534378975->enter($__internal_4feac56074015fcab82885aa11bdb55733d55992ee09e9439f41d7b534378975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Profile/Registration:email.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 14
        echo "    ";
        $this->loadTemplate("SfWebAppFrontOfficeBundle:Registration:inc/email.html.twig", "SfWebAppFrontOfficeBundle:Profile/Registration:email.html.twig", 14)->display($context);
        
<<<<<<< HEAD
        $__internal_357e1f735903122fd02b579d71a5996b74ba73f24fe5468e9336dbb7e6fa0a4e->leave($__internal_357e1f735903122fd02b579d71a5996b74ba73f24fe5468e9336dbb7e6fa0a4e_prof);
=======
        $__internal_4feac56074015fcab82885aa11bdb55733d55992ee09e9439f41d7b534378975->leave($__internal_4feac56074015fcab82885aa11bdb55733d55992ee09e9439f41d7b534378975_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "SfWebAppFrontOfficeBundle:Profile/Registration:email.html.twig";
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
        {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
    {% endautoescape %}
{% endblock %}

{% block body_text %}
    {% autoescape false %}
        {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
    {% endautoescape %}
{% endblock %}

{% block body_html %}
    {% include 'SfWebAppFrontOfficeBundle:Registration:inc/email.html.twig' %}
<<<<<<< HEAD
{% endblock %}", "SfWebAppFrontOfficeBundle:Profile/Registration:email.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Profile/Registration/email.html.twig");
=======
{% endblock %}", "SfWebAppFrontOfficeBundle:Profile/Registration:email.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Profile/Registration/email.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
