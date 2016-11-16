<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_ecf2e71930a0d9791ed8cf1e49e5240c758207bcf26a42422f74f1800f9ebe5f extends Twig_Template
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
        $__internal_2121e16f0a025b03cce4428e4d7bf0eb0e1d3b72e0d9927071040c368fafc051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2121e16f0a025b03cce4428e4d7bf0eb0e1d3b72e0d9927071040c368fafc051->enter($__internal_2121e16f0a025b03cce4428e4d7bf0eb0e1d3b72e0d9927071040c368fafc051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));
=======
        $__internal_8d0df4e9700a308c55de50f72757c53e0a75887bbc4ba435f437fbd3d41c8c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0df4e9700a308c55de50f72757c53e0a75887bbc4ba435f437fbd3d41c8c86->enter($__internal_8d0df4e9700a308c55de50f72757c53e0a75887bbc4ba435f437fbd3d41c8c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_resetting_reset\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
<<<<<<< HEAD
        $__internal_2121e16f0a025b03cce4428e4d7bf0eb0e1d3b72e0d9927071040c368fafc051->leave($__internal_2121e16f0a025b03cce4428e4d7bf0eb0e1d3b72e0d9927071040c368fafc051_prof);
=======
        $__internal_8d0df4e9700a308c55de50f72757c53e0a75887bbc4ba435f437fbd3d41c8c86->leave($__internal_8d0df4e9700a308c55de50f72757c53e0a75887bbc4ba435f437fbd3d41c8c86_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
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
        return new Twig_Source("<form action=\"{{ path('fos_user_resetting_reset', {'token': token}) }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_resetting_reset\">
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}\" />
    </div>
</form>
<<<<<<< HEAD
", "FOSUserBundle:Resetting:reset_content.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/reset_content.html.twig");
=======
", "FOSUserBundle:Resetting:reset_content.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/reset_content.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
