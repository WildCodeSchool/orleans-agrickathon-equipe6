<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_ffb0e4a0a9d452fc07cc15e1b7fa5f7b881be40cddf632e3f0b50d146df85e1a extends Twig_Template
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
        $__internal_0d3e7d6a969bd44ea4d646343021508fd55b74cda4ee525cba9c1c44425d17a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3e7d6a969bd44ea4d646343021508fd55b74cda4ee525cba9c1c44425d17a3->enter($__internal_0d3e7d6a969bd44ea4d646343021508fd55b74cda4ee525cba9c1c44425d17a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));
=======
        $__internal_1641d8a79a2dd3e5c7edd3b91204fc0c845663983f1b0662529a42ea858163d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1641d8a79a2dd3e5c7edd3b91204fc0c845663983f1b0662529a42ea858163d3->enter($__internal_1641d8a79a2dd3e5c7edd3b91204fc0c845663983f1b0662529a42ea858163d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
<<<<<<< HEAD
        $__internal_0d3e7d6a969bd44ea4d646343021508fd55b74cda4ee525cba9c1c44425d17a3->leave($__internal_0d3e7d6a969bd44ea4d646343021508fd55b74cda4ee525cba9c1c44425d17a3_prof);
=======
        $__internal_1641d8a79a2dd3e5c7edd3b91204fc0c845663983f1b0662529a42ea858163d3->leave($__internal_1641d8a79a2dd3e5c7edd3b91204fc0c845663983f1b0662529a42ea858163d3_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ path('fos_user_profile_edit') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_profile_edit\">
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans({}, 'FOSUserBundle') }}\" />
    </div>
</form>
<<<<<<< HEAD
", "FOSUserBundle:Profile:edit_content.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/edit_content.html.twig");
=======
", "FOSUserBundle:Profile:edit_content.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/edit_content.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
