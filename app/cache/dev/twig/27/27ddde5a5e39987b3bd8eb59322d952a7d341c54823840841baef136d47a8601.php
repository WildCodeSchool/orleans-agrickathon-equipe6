<?php

/* SfWebAppFrontOfficeBundle:Profile:show.html.twig */
class __TwigTemplate_dff42d83f689454cc17dd06373ed64ee1e33bbf97fab36c4117d7f6d19353718 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SfWebAppFrontOfficeBundle::layout.html.twig", "SfWebAppFrontOfficeBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SfWebAppFrontOfficeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a292034ecb13b8838ba23f91a9b9faeed3691c0b1e247b2f8705e0ccadbc0f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a292034ecb13b8838ba23f91a9b9faeed3691c0b1e247b2f8705e0ccadbc0f3->enter($__internal_2a292034ecb13b8838ba23f91a9b9faeed3691c0b1e247b2f8705e0ccadbc0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a292034ecb13b8838ba23f91a9b9faeed3691c0b1e247b2f8705e0ccadbc0f3->leave($__internal_2a292034ecb13b8838ba23f91a9b9faeed3691c0b1e247b2f8705e0ccadbc0f3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c4ba5f09cb93b737266b10c748b3e563e76847f89c023c3f0974e6fd9da15004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ba5f09cb93b737266b10c748b3e563e76847f89c023c3f0974e6fd9da15004->enter($__internal_c4ba5f09cb93b737266b10c748b3e563e76847f89c023c3f0974e6fd9da15004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Profile:show.html.twig"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"panel-body\">
                    <p>Nom d'utilisateur : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</p>
                    <p>Prénom : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
        echo "</p>
                    <p>Nom : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array()), "html", null, true);
        echo "</p>
                    <p>CP : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "zipCode", array()), "html", null, true);
        echo "</p>
                    <p>Ville : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "city", array()), "html", null, true);
        echo "</p>
                    <p>Pays : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "country", array()), "html", null, true);
        echo "</p>
                    <p>Tel. : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "phone", array()), "html", null, true);
        echo "</p>
                    <p>Adresse e-mail : ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</p>
                    <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-primary\">";
        echo "edit";
        echo "</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_c4ba5f09cb93b737266b10c748b3e563e76847f89c023c3f0974e6fd9da15004->leave($__internal_c4ba5f09cb93b737266b10c748b3e563e76847f89c023c3f0974e6fd9da15004_prof);

    }

    public function getTemplateName()
    {
        return "SfWebAppFrontOfficeBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SfWebAppFrontOfficeBundle::layout.html.twig' %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">{{ 'profile'|trans }}</h2>
                </div>
                <div class=\"panel-body\">
                    <p>Nom d'utilisateur : {{ app.user.username }}</p>
                    <p>Prénom : {{ app.user.firstname }}</p>
                    <p>Nom : {{ app.user.lastname }}</p>
                    <p>CP : {{ app.user.zipCode }}</p>
                    <p>Ville : {{ app.user.city }}</p>
                    <p>Pays : {{ app.user.country }}</p>
                    <p>Tel. : {{ app.user.phone }}</p>
                    <p>Adresse e-mail : {{ app.user.email }}</p>
                    <a href=\"{{ path('fos_user_profile_edit') }}\" class=\"btn btn-primary\">{{ 'edit' }}</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "SfWebAppFrontOfficeBundle:Profile:show.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Profile/show.html.twig");
    }
}
