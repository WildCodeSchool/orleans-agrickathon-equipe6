<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_9e8684b75218c0e5fbc65f741d52281fa530c8a371456c8ca53c24ba1df9069f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_1db8a7f34d4822a00cd0402280f10fac2b9af7857b61e6ee753f15007910a939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db8a7f34d4822a00cd0402280f10fac2b9af7857b61e6ee753f15007910a939->enter($__internal_1db8a7f34d4822a00cd0402280f10fac2b9af7857b61e6ee753f15007910a939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1db8a7f34d4822a00cd0402280f10fac2b9af7857b61e6ee753f15007910a939->leave($__internal_1db8a7f34d4822a00cd0402280f10fac2b9af7857b61e6ee753f15007910a939_prof);
=======
        $__internal_2f7ec720160b0d6cf45950abb204996b851817a960e18b0a89ca9200459e464e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7ec720160b0d6cf45950abb204996b851817a960e18b0a89ca9200459e464e->enter($__internal_2f7ec720160b0d6cf45950abb204996b851817a960e18b0a89ca9200459e464e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f7ec720160b0d6cf45950abb204996b851817a960e18b0a89ca9200459e464e->leave($__internal_2f7ec720160b0d6cf45950abb204996b851817a960e18b0a89ca9200459e464e_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_ea678b4367b5281bd176864952e5b19a67f5f77bb03b206df508e6f29fc2e8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea678b4367b5281bd176864952e5b19a67f5f77bb03b206df508e6f29fc2e8db->enter($__internal_ea678b4367b5281bd176864952e5b19a67f5f77bb03b206df508e6f29fc2e8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));
=======
        $__internal_2672e9646abb87195b0eef6333f97e8b3a1c902e7dce174c0411741593986ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2672e9646abb87195b0eef6333f97e8b3a1c902e7dce174c0411741593986ea1->enter($__internal_2672e9646abb87195b0eef6333f97e8b3a1c902e7dce174c0411741593986ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
<<<<<<< HEAD
        $__internal_ea678b4367b5281bd176864952e5b19a67f5f77bb03b206df508e6f29fc2e8db->leave($__internal_ea678b4367b5281bd176864952e5b19a67f5f77bb03b206df508e6f29fc2e8db_prof);
=======
        $__internal_2672e9646abb87195b0eef6333f97e8b3a1c902e7dce174c0411741593986ea1->leave($__internal_2672e9646abb87195b0eef6333f97e8b3a1c902e7dce174c0411741593986ea1_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
<p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
<<<<<<< HEAD
", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
=======
", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
