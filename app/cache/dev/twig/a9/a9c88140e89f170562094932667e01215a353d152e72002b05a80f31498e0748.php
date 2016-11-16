<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_41bebb36ee667ef512ce24f7a88369235bc17b0a55488b2e2ca64d1d3fbb716f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_e032703b42800510fb941e90af392c20f9ec56f8f6345bae605da98e62e76174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e032703b42800510fb941e90af392c20f9ec56f8f6345bae605da98e62e76174->enter($__internal_e032703b42800510fb941e90af392c20f9ec56f8f6345bae605da98e62e76174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e032703b42800510fb941e90af392c20f9ec56f8f6345bae605da98e62e76174->leave($__internal_e032703b42800510fb941e90af392c20f9ec56f8f6345bae605da98e62e76174_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0be9aa5922ca9f890375fffb90baf37e6f164dd2d34c326eb4452b0cce977da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0be9aa5922ca9f890375fffb90baf37e6f164dd2d34c326eb4452b0cce977da->enter($__internal_a0be9aa5922ca9f890375fffb90baf37e6f164dd2d34c326eb4452b0cce977da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/checkEmail.html.twig"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_a0be9aa5922ca9f890375fffb90baf37e6f164dd2d34c326eb4452b0cce977da->leave($__internal_a0be9aa5922ca9f890375fffb90baf37e6f164dd2d34c326eb4452b0cce977da_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}
</p>
{% endblock %}
", "@FOSUser/Resetting/checkEmail.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
