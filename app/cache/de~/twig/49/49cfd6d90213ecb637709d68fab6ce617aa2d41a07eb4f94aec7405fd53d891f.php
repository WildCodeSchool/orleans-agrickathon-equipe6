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
        $__internal_33cf8d1df83648af57e4bf91a4524b7c84c3e5e100cc9bfbbdfc31a6d1696fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33cf8d1df83648af57e4bf91a4524b7c84c3e5e100cc9bfbbdfc31a6d1696fa5->enter($__internal_33cf8d1df83648af57e4bf91a4524b7c84c3e5e100cc9bfbbdfc31a6d1696fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_33cf8d1df83648af57e4bf91a4524b7c84c3e5e100cc9bfbbdfc31a6d1696fa5->leave($__internal_33cf8d1df83648af57e4bf91a4524b7c84c3e5e100cc9bfbbdfc31a6d1696fa5_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8860e31d60c21995a49157ad1716c110047a46695580e48c0cdcc3025316b94b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8860e31d60c21995a49157ad1716c110047a46695580e48c0cdcc3025316b94b->enter($__internal_8860e31d60c21995a49157ad1716c110047a46695580e48c0cdcc3025316b94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8860e31d60c21995a49157ad1716c110047a46695580e48c0cdcc3025316b94b->leave($__internal_8860e31d60c21995a49157ad1716c110047a46695580e48c0cdcc3025316b94b_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5a2291577348c999725b106aeca212cd77a5a9566d0411679a29216e3c14bbae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2291577348c999725b106aeca212cd77a5a9566d0411679a29216e3c14bbae->enter($__internal_5a2291577348c999725b106aeca212cd77a5a9566d0411679a29216e3c14bbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5a2291577348c999725b106aeca212cd77a5a9566d0411679a29216e3c14bbae->leave($__internal_5a2291577348c999725b106aeca212cd77a5a9566d0411679a29216e3c14bbae_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_59ff280c0e05a7efbca72ec967bbc5c84e47bcfdfddf3bc751642b63f280b6ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ff280c0e05a7efbca72ec967bbc5c84e47bcfdfddf3bc751642b63f280b6ea->enter($__internal_59ff280c0e05a7efbca72ec967bbc5c84e47bcfdfddf3bc751642b63f280b6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_59ff280c0e05a7efbca72ec967bbc5c84e47bcfdfddf3bc751642b63f280b6ea->leave($__internal_59ff280c0e05a7efbca72ec967bbc5c84e47bcfdfddf3bc751642b63f280b6ea_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
