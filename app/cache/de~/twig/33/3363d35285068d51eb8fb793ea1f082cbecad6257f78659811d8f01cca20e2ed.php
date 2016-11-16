<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_893d9a149344dce7ce8b9668d43537d2f56427746cc68aa53afc3c780f7f90d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_9c6b4d3d18c66297b6ce6742afb23ca8547c16a8d010707246a197c8a645514e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6b4d3d18c66297b6ce6742afb23ca8547c16a8d010707246a197c8a645514e->enter($__internal_9c6b4d3d18c66297b6ce6742afb23ca8547c16a8d010707246a197c8a645514e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c6b4d3d18c66297b6ce6742afb23ca8547c16a8d010707246a197c8a645514e->leave($__internal_9c6b4d3d18c66297b6ce6742afb23ca8547c16a8d010707246a197c8a645514e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_791d8a99c80ff3eeb9c9898ef54d8e95637ca6aea2ba788de4dc443ab9f30bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_791d8a99c80ff3eeb9c9898ef54d8e95637ca6aea2ba788de4dc443ab9f30bda->enter($__internal_791d8a99c80ff3eeb9c9898ef54d8e95637ca6aea2ba788de4dc443ab9f30bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_791d8a99c80ff3eeb9c9898ef54d8e95637ca6aea2ba788de4dc443ab9f30bda->leave($__internal_791d8a99c80ff3eeb9c9898ef54d8e95637ca6aea2ba788de4dc443ab9f30bda_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/list.html.twig");
    }
}
