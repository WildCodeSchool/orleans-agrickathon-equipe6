<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_2abc2d7c276092202bb15d9ef580a8fc31ac05fcf36055a06e4ffb335cfb652c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_157932d55dd1e3474a263c39da433e59cec2def41f977234d6b1e4ed6ce05fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157932d55dd1e3474a263c39da433e59cec2def41f977234d6b1e4ed6ce05fee->enter($__internal_157932d55dd1e3474a263c39da433e59cec2def41f977234d6b1e4ed6ce05fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_157932d55dd1e3474a263c39da433e59cec2def41f977234d6b1e4ed6ce05fee->leave($__internal_157932d55dd1e3474a263c39da433e59cec2def41f977234d6b1e4ed6ce05fee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4594f187d28fe9aa572341a9d6c64610dcef07535b9e027e53acacd4dbbfda9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4594f187d28fe9aa572341a9d6c64610dcef07535b9e027e53acacd4dbbfda9d->enter($__internal_4594f187d28fe9aa572341a9d6c64610dcef07535b9e027e53acacd4dbbfda9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_4594f187d28fe9aa572341a9d6c64610dcef07535b9e027e53acacd4dbbfda9d->leave($__internal_4594f187d28fe9aa572341a9d6c64610dcef07535b9e027e53acacd4dbbfda9d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
