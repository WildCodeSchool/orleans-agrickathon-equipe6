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
        $__internal_95eba97bbd35447992759e0f372976178bf80aeeb47603c2e0ab30fb24f42c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95eba97bbd35447992759e0f372976178bf80aeeb47603c2e0ab30fb24f42c40->enter($__internal_95eba97bbd35447992759e0f372976178bf80aeeb47603c2e0ab30fb24f42c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Profile/Registration:email.html.twig"));

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
        
        $__internal_95eba97bbd35447992759e0f372976178bf80aeeb47603c2e0ab30fb24f42c40->leave($__internal_95eba97bbd35447992759e0f372976178bf80aeeb47603c2e0ab30fb24f42c40_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_945a0b4c1c5482fba442c3a16525cedab9c47e7418011019ea05c46e29fde5bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945a0b4c1c5482fba442c3a16525cedab9c47e7418011019ea05c46e29fde5bd->enter($__internal_945a0b4c1c5482fba442c3a16525cedab9c47e7418011019ea05c46e29fde5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Profile/Registration:email.html.twig"));

        // line 2
        echo "    ";
        // line 3
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_945a0b4c1c5482fba442c3a16525cedab9c47e7418011019ea05c46e29fde5bd->leave($__internal_945a0b4c1c5482fba442c3a16525cedab9c47e7418011019ea05c46e29fde5bd_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d61eb0b89091e2bf00b6077b4a4be3495d4ab1b2a72ab74e3b1cc6bb5fae5db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61eb0b89091e2bf00b6077b4a4be3495d4ab1b2a72ab74e3b1cc6bb5fae5db2->enter($__internal_d61eb0b89091e2bf00b6077b4a4be3495d4ab1b2a72ab74e3b1cc6bb5fae5db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Profile/Registration:email.html.twig"));

        // line 8
        echo "    ";
        // line 9
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_d61eb0b89091e2bf00b6077b4a4be3495d4ab1b2a72ab74e3b1cc6bb5fae5db2->leave($__internal_d61eb0b89091e2bf00b6077b4a4be3495d4ab1b2a72ab74e3b1cc6bb5fae5db2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f335771da22043f7483b85a3f1847e45bbbeb8a84457ffca3447831475638c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f335771da22043f7483b85a3f1847e45bbbeb8a84457ffca3447831475638c53->enter($__internal_f335771da22043f7483b85a3f1847e45bbbeb8a84457ffca3447831475638c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Profile/Registration:email.html.twig"));

        // line 14
        echo "    ";
        $this->loadTemplate("SfWebAppFrontOfficeBundle:Registration:inc/email.html.twig", "SfWebAppFrontOfficeBundle:Profile/Registration:email.html.twig", 14)->display($context);
        
        $__internal_f335771da22043f7483b85a3f1847e45bbbeb8a84457ffca3447831475638c53->leave($__internal_f335771da22043f7483b85a3f1847e45bbbeb8a84457ffca3447831475638c53_prof);

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
{% endblock %}", "SfWebAppFrontOfficeBundle:Profile/Registration:email.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Profile/Registration/email.html.twig");
    }
}
