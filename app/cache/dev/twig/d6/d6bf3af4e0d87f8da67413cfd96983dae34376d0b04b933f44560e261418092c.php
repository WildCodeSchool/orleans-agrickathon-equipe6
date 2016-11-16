<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_9e8684b75218c0e5fbc65f741d52281fa530c8a371456c8ca53c24ba1df9069f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_4c68739fece721c639cfc07d010f059c6fd0a78b64e79a1cb062f6f8359bd5ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c68739fece721c639cfc07d010f059c6fd0a78b64e79a1cb062f6f8359bd5ac->enter($__internal_4c68739fece721c639cfc07d010f059c6fd0a78b64e79a1cb062f6f8359bd5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c68739fece721c639cfc07d010f059c6fd0a78b64e79a1cb062f6f8359bd5ac->leave($__internal_4c68739fece721c639cfc07d010f059c6fd0a78b64e79a1cb062f6f8359bd5ac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d95bf4bf63b2abf2ef531bb20daf92cb74105aa5f37b83c3938ced33703285f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d95bf4bf63b2abf2ef531bb20daf92cb74105aa5f37b83c3938ced33703285f->enter($__internal_0d95bf4bf63b2abf2ef531bb20daf92cb74105aa5f37b83c3938ced33703285f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0d95bf4bf63b2abf2ef531bb20daf92cb74105aa5f37b83c3938ced33703285f->leave($__internal_0d95bf4bf63b2abf2ef531bb20daf92cb74105aa5f37b83c3938ced33703285f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
<p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
