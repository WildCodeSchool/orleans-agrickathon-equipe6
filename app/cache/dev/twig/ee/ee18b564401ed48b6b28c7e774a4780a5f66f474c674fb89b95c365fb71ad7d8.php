<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_1bb5dc3de0aeaad8647a542dff5619133e46140c6cbfe3c5438a96a6bf7bb749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_96ca69043e1fd8509463bb13a7fa87f96d503d06cfa15e88c793c7ab8d279934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ca69043e1fd8509463bb13a7fa87f96d503d06cfa15e88c793c7ab8d279934->enter($__internal_96ca69043e1fd8509463bb13a7fa87f96d503d06cfa15e88c793c7ab8d279934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96ca69043e1fd8509463bb13a7fa87f96d503d06cfa15e88c793c7ab8d279934->leave($__internal_96ca69043e1fd8509463bb13a7fa87f96d503d06cfa15e88c793c7ab8d279934_prof);
=======
        $__internal_9a4aaec1e09400f3643d0fa147fb947038af2533c8872d53c5a9a59c7a15a0e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4aaec1e09400f3643d0fa147fb947038af2533c8872d53c5a9a59c7a15a0e7->enter($__internal_9a4aaec1e09400f3643d0fa147fb947038af2533c8872d53c5a9a59c7a15a0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a4aaec1e09400f3643d0fa147fb947038af2533c8872d53c5a9a59c7a15a0e7->leave($__internal_9a4aaec1e09400f3643d0fa147fb947038af2533c8872d53c5a9a59c7a15a0e7_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_cd127c23a1e0fdfe34521b57168f8cc2dc9d95361274d9b2e6e0d453cd6b3ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd127c23a1e0fdfe34521b57168f8cc2dc9d95361274d9b2e6e0d453cd6b3ffb->enter($__internal_cd127c23a1e0fdfe34521b57168f8cc2dc9d95361274d9b2e6e0d453cd6b3ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:checkEmail.html.twig"));
=======
        $__internal_020cf31144e71f996655eddb6c4a7959523dc2ab2ca96a55bb6b135553bc9bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020cf31144e71f996655eddb6c4a7959523dc2ab2ca96a55bb6b135553bc9bf5->enter($__internal_020cf31144e71f996655eddb6c4a7959523dc2ab2ca96a55bb6b135553bc9bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:checkEmail.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
<<<<<<< HEAD
        $__internal_cd127c23a1e0fdfe34521b57168f8cc2dc9d95361274d9b2e6e0d453cd6b3ffb->leave($__internal_cd127c23a1e0fdfe34521b57168f8cc2dc9d95361274d9b2e6e0d453cd6b3ffb_prof);
=======
        $__internal_020cf31144e71f996655eddb6c4a7959523dc2ab2ca96a55bb6b135553bc9bf5->leave($__internal_020cf31144e71f996655eddb6c4a7959523dc2ab2ca96a55bb6b135553bc9bf5_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
<<<<<<< HEAD
", "FOSUserBundle:Registration:checkEmail.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/checkEmail.html.twig");
=======
", "FOSUserBundle:Registration:checkEmail.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/checkEmail.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
