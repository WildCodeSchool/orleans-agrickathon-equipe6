<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_21a11dd65a20aaf529372f64834e278879130a44806ac61e6c213bf89dd4697a extends Twig_Template
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
        $__internal_f52cd3f5bdb0fe74be3a07e001e6cfa854228af379625ccfdf3a73e148d2bf0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52cd3f5bdb0fe74be3a07e001e6cfa854228af379625ccfdf3a73e148d2bf0d->enter($__internal_f52cd3f5bdb0fe74be3a07e001e6cfa854228af379625ccfdf3a73e148d2bf0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));
=======
        $__internal_b330d2bc79d2eb3883eea079f42e61a368fcd8cc91cacd35c202ab38b055ef7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b330d2bc79d2eb3883eea079f42e61a368fcd8cc91cacd35c202ab38b055ef7a->enter($__internal_b330d2bc79d2eb3883eea079f42e61a368fcd8cc91cacd35c202ab38b055ef7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
<<<<<<< HEAD
        $__internal_f52cd3f5bdb0fe74be3a07e001e6cfa854228af379625ccfdf3a73e148d2bf0d->leave($__internal_f52cd3f5bdb0fe74be3a07e001e6cfa854228af379625ccfdf3a73e148d2bf0d_prof);
=======
        $__internal_b330d2bc79d2eb3883eea079f42e61a368fcd8cc91cacd35c202ab38b055ef7a->leave($__internal_b330d2bc79d2eb3883eea079f42e61a368fcd8cc91cacd35c202ab38b055ef7a_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
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
        return new Twig_Source("<form action=\"{{ path('fos_user_registration_register') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_registration_register\">
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}\" />
    </div>
</form>
<<<<<<< HEAD
", "FOSUserBundle:Registration:register_content.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register_content.html.twig");
=======
", "FOSUserBundle:Registration:register_content.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register_content.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
