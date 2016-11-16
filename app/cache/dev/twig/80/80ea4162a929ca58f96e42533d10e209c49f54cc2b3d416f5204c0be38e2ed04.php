<?php

/* SfWebAppFrontOfficeBundle:Profile/Registration:confirmed.html.twig */
class __TwigTemplate_441985208e054d7a8a74a3ea1e401d0ad7b7ff5de13b84e5795f7581be368104 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SfWebAppFrontOfficeBundle::layout.html.twig", "SfWebAppFrontOfficeBundle:Profile/Registration:confirmed.html.twig", 1);
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
<<<<<<< HEAD
        $__internal_61c8a8fec0024e876f72be0d1a856bf6b175d6a7869a76223d35d6665bff80d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c8a8fec0024e876f72be0d1a856bf6b175d6a7869a76223d35d6665bff80d6->enter($__internal_61c8a8fec0024e876f72be0d1a856bf6b175d6a7869a76223d35d6665bff80d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Profile/Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61c8a8fec0024e876f72be0d1a856bf6b175d6a7869a76223d35d6665bff80d6->leave($__internal_61c8a8fec0024e876f72be0d1a856bf6b175d6a7869a76223d35d6665bff80d6_prof);
=======
        $__internal_4b98afbcb375349f6a403e8a3c9dc97057d47a3ca97a5bc4ecdf186d2262bbd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b98afbcb375349f6a403e8a3c9dc97057d47a3ca97a5bc4ecdf186d2262bbd8->enter($__internal_4b98afbcb375349f6a403e8a3c9dc97057d47a3ca97a5bc4ecdf186d2262bbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Profile/Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b98afbcb375349f6a403e8a3c9dc97057d47a3ca97a5bc4ecdf186d2262bbd8->leave($__internal_4b98afbcb375349f6a403e8a3c9dc97057d47a3ca97a5bc4ecdf186d2262bbd8_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_e82c2ce4a67ad419aa0b136be1ef435a7507d19e1fa06ed6061a757adabddd3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82c2ce4a67ad419aa0b136be1ef435a7507d19e1fa06ed6061a757adabddd3e->enter($__internal_e82c2ce4a67ad419aa0b136be1ef435a7507d19e1fa06ed6061a757adabddd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Profile/Registration:confirmed.html.twig"));
=======
        $__internal_f11652863a150a14bb58b85dd7c82a79140ccbc4dc3f5f1c211f43294e3f5dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11652863a150a14bb58b85dd7c82a79140ccbc4dc3f5f1c211f43294e3f5dfc->enter($__internal_f11652863a150a14bb58b85dd7c82a79140ccbc4dc3f5f1c211f43294e3f5dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle:Profile/Registration:confirmed.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_register"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"panel-body\">
                    <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
                    ";
        // line 12
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()))) {
            // line 13
            echo "                        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 14
            echo "                        ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 15
            echo "                    ";
        }
        // line 16
        echo "                </div>
            </div>
        </div>
    </div>

";
        
<<<<<<< HEAD
        $__internal_e82c2ce4a67ad419aa0b136be1ef435a7507d19e1fa06ed6061a757adabddd3e->leave($__internal_e82c2ce4a67ad419aa0b136be1ef435a7507d19e1fa06ed6061a757adabddd3e_prof);
=======
        $__internal_f11652863a150a14bb58b85dd7c82a79140ccbc4dc3f5f1c211f43294e3f5dfc->leave($__internal_f11652863a150a14bb58b85dd7c82a79140ccbc4dc3f5f1c211f43294e3f5dfc_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "SfWebAppFrontOfficeBundle:Profile/Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  70 => 15,  61 => 14,  58 => 13,  56 => 12,  52 => 11,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
                    <h2 class=\"panel-title\">{{ 'title_user_register'|trans }}</h2>
                </div>
                <div class=\"panel-body\">
                    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}, 'FOSUserBundle') }}</p>
                    {% if app.session is not empty %}
                        {% set targetUrl = app.session.get('_security.' ~ app.security.token.providerKey ~ '.target_path') %}
                        {% if targetUrl is not empty %}<p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans({}, 'FOSUserBundle') }}</a></p>{% endif %}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

<<<<<<< HEAD
{% endblock %}", "SfWebAppFrontOfficeBundle:Profile/Registration:confirmed.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Profile/Registration/confirmed.html.twig");
=======
{% endblock %}", "SfWebAppFrontOfficeBundle:Profile/Registration:confirmed.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Profile/Registration/confirmed.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
