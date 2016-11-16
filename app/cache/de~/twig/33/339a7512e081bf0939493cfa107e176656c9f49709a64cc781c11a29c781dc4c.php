<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_9ef4ec070f4e94a3546cced4d9b0ba8d99dea89b312b9b3ea0a229e481d15e45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_4695b8b34d4729ffca6baa1d1bd6e3cee975911db970e45d615a42f79f28b073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4695b8b34d4729ffca6baa1d1bd6e3cee975911db970e45d615a42f79f28b073->enter($__internal_4695b8b34d4729ffca6baa1d1bd6e3cee975911db970e45d615a42f79f28b073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4695b8b34d4729ffca6baa1d1bd6e3cee975911db970e45d615a42f79f28b073->leave($__internal_4695b8b34d4729ffca6baa1d1bd6e3cee975911db970e45d615a42f79f28b073_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be4905a15253f8b99c3fb5c393bcc2ece21e5771ad5ff4f213e25a4c6f512df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4905a15253f8b99c3fb5c393bcc2ece21e5771ad5ff4f213e25a4c6f512df4->enter($__internal_be4905a15253f8b99c3fb5c393bcc2ece21e5771ad5ff4f213e25a4c6f512df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_be4905a15253f8b99c3fb5c393bcc2ece21e5771ad5ff4f213e25a4c6f512df4->leave($__internal_be4905a15253f8b99c3fb5c393bcc2ece21e5771ad5ff4f213e25a4c6f512df4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/show.html.twig");
    }
}
