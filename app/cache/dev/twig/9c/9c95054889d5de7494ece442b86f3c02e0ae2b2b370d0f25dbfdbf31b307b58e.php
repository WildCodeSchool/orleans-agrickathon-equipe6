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
        $__internal_0f9d138c63427a92c3663895fe98ab831c1b7c1104ac266e04eb46694961c9ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9d138c63427a92c3663895fe98ab831c1b7c1104ac266e04eb46694961c9ff->enter($__internal_0f9d138c63427a92c3663895fe98ab831c1b7c1104ac266e04eb46694961c9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f9d138c63427a92c3663895fe98ab831c1b7c1104ac266e04eb46694961c9ff->leave($__internal_0f9d138c63427a92c3663895fe98ab831c1b7c1104ac266e04eb46694961c9ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_743da5313c817d567a6737a34b73ba1d11f4cc3ef680475cc3e53d507601c75f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743da5313c817d567a6737a34b73ba1d11f4cc3ef680475cc3e53d507601c75f->enter($__internal_743da5313c817d567a6737a34b73ba1d11f4cc3ef680475cc3e53d507601c75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_743da5313c817d567a6737a34b73ba1d11f4cc3ef680475cc3e53d507601c75f->leave($__internal_743da5313c817d567a6737a34b73ba1d11f4cc3ef680475cc3e53d507601c75f_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
