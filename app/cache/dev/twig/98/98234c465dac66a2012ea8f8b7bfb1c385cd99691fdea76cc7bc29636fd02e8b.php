<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_d1f0617b8d7ecdc1a1188d770698d6c18b04e48ca75efd072fce5d220c95953a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_40ea3b1d72e7870dbf0b3290a4106e7ad64d3d8ac56add216fce8917338e8824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ea3b1d72e7870dbf0b3290a4106e7ad64d3d8ac56add216fce8917338e8824->enter($__internal_40ea3b1d72e7870dbf0b3290a4106e7ad64d3d8ac56add216fce8917338e8824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));
=======
        $__internal_9ed69f24e53c10aaac8899f60954f906d56134e970848a5d1356b7e3f5d44ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed69f24e53c10aaac8899f60954f906d56134e970848a5d1356b7e3f5d44ac2->enter($__internal_9ed69f24e53c10aaac8899f60954f906d56134e970848a5d1356b7e3f5d44ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
<<<<<<< HEAD
        $__internal_40ea3b1d72e7870dbf0b3290a4106e7ad64d3d8ac56add216fce8917338e8824->leave($__internal_40ea3b1d72e7870dbf0b3290a4106e7ad64d3d8ac56add216fce8917338e8824_prof);
=======
        $__internal_9ed69f24e53c10aaac8899f60954f906d56134e970848a5d1356b7e3f5d44ac2->leave($__internal_9ed69f24e53c10aaac8899f60954f906d56134e970848a5d1356b7e3f5d44ac2_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>
</div>
<<<<<<< HEAD
", "FOSUserBundle:Profile:show_content.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/show_content.html.twig");
=======
", "FOSUserBundle:Profile:show_content.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/show_content.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
