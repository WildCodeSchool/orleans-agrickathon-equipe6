<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e9690a431dba908f149767069922707a9cc02a678d37db46b2c7b3f087343fc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_2624eb7635265d0ab2da39eb799b21403c75b333a0b3d4e370a902fcddb2f724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2624eb7635265d0ab2da39eb799b21403c75b333a0b3d4e370a902fcddb2f724->enter($__internal_2624eb7635265d0ab2da39eb799b21403c75b333a0b3d4e370a902fcddb2f724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2624eb7635265d0ab2da39eb799b21403c75b333a0b3d4e370a902fcddb2f724->leave($__internal_2624eb7635265d0ab2da39eb799b21403c75b333a0b3d4e370a902fcddb2f724_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ec160052076a3ad3abd337314fab33456263cdf4de24d24777c92d58b53db33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec160052076a3ad3abd337314fab33456263cdf4de24d24777c92d58b53db33->enter($__internal_6ec160052076a3ad3abd337314fab33456263cdf4de24d24777c92d58b53db33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_6ec160052076a3ad3abd337314fab33456263cdf4de24d24777c92d58b53db33->leave($__internal_6ec160052076a3ad3abd337314fab33456263cdf4de24d24777c92d58b53db33_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
