<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_9ef4ec070f4e94a3546cced4d9b0ba8d99dea89b312b9b3ea0a229e481d15e45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
<<<<<<< HEAD
        $__internal_2cd12c0540446b481b4c8fd17fabcd19b5e3c256be0544ed618a060ce2f0e428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd12c0540446b481b4c8fd17fabcd19b5e3c256be0544ed618a060ce2f0e428->enter($__internal_2cd12c0540446b481b4c8fd17fabcd19b5e3c256be0544ed618a060ce2f0e428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cd12c0540446b481b4c8fd17fabcd19b5e3c256be0544ed618a060ce2f0e428->leave($__internal_2cd12c0540446b481b4c8fd17fabcd19b5e3c256be0544ed618a060ce2f0e428_prof);
=======
        $__internal_3fe0804a6205805ea3c992fd269da66a7d65e2cddc5dbcaac179faefe4515d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe0804a6205805ea3c992fd269da66a7d65e2cddc5dbcaac179faefe4515d36->enter($__internal_3fe0804a6205805ea3c992fd269da66a7d65e2cddc5dbcaac179faefe4515d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fe0804a6205805ea3c992fd269da66a7d65e2cddc5dbcaac179faefe4515d36->leave($__internal_3fe0804a6205805ea3c992fd269da66a7d65e2cddc5dbcaac179faefe4515d36_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_7970afa692b6ac7e8f23c5bfb83379964a550979bb9020500dd10cc91a65c45a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7970afa692b6ac7e8f23c5bfb83379964a550979bb9020500dd10cc91a65c45a->enter($__internal_7970afa692b6ac7e8f23c5bfb83379964a550979bb9020500dd10cc91a65c45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:show.html.twig"));
=======
        $__internal_d605ab729ab453ca4e92701c91169ccd3c441bb808df9b16b5aaaa6b0f48ce00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d605ab729ab453ca4e92701c91169ccd3c441bb808df9b16b5aaaa6b0f48ce00->enter($__internal_d605ab729ab453ca4e92701c91169ccd3c441bb808df9b16b5aaaa6b0f48ce00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:show.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
<<<<<<< HEAD
        $__internal_7970afa692b6ac7e8f23c5bfb83379964a550979bb9020500dd10cc91a65c45a->leave($__internal_7970afa692b6ac7e8f23c5bfb83379964a550979bb9020500dd10cc91a65c45a_prof);
=======
        $__internal_d605ab729ab453ca4e92701c91169ccd3c441bb808df9b16b5aaaa6b0f48ce00->leave($__internal_d605ab729ab453ca4e92701c91169ccd3c441bb808df9b16b5aaaa6b0f48ce00_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
<<<<<<< HEAD
", "FOSUserBundle:Group:show.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/show.html.twig");
=======
", "FOSUserBundle:Group:show.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/show.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
