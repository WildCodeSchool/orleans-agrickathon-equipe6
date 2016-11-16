<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_1a0421f074aaa39be177e1ddad5ffaeef28b1f3122c1c89a81a754338dfe8359 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SfWebAppFrontOfficeBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_0554f77d9fabf5eaf449f5e524a125cb00657fe22c0323883623d6ee204cec2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0554f77d9fabf5eaf449f5e524a125cb00657fe22c0323883623d6ee204cec2b->enter($__internal_0554f77d9fabf5eaf449f5e524a125cb00657fe22c0323883623d6ee204cec2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0554f77d9fabf5eaf449f5e524a125cb00657fe22c0323883623d6ee204cec2b->leave($__internal_0554f77d9fabf5eaf449f5e524a125cb00657fe22c0323883623d6ee204cec2b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_891ba01d3d557de421e8abd4371cc007af0f5e22ab3d8fb78f841239fe483964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891ba01d3d557de421e8abd4371cc007af0f5e22ab3d8fb78f841239fe483964->enter($__internal_891ba01d3d557de421e8abd4371cc007af0f5e22ab3d8fb78f841239fe483964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:show.html.twig"));

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
        
        $__internal_891ba01d3d557de421e8abd4371cc007af0f5e22ab3d8fb78f841239fe483964->leave($__internal_891ba01d3d557de421e8abd4371cc007af0f5e22ab3d8fb78f841239fe483964_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% endblock %}", "FOSUserBundle:Profile:show.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Profile/show.html.twig");
    }
}
