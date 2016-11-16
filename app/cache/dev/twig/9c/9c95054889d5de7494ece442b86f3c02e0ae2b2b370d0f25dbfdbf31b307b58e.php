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
        $__internal_d4f25e75d8d86523c15e8f82339a1427e8c801916931bad0704816dfa9546b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f25e75d8d86523c15e8f82339a1427e8c801916931bad0704816dfa9546b52->enter($__internal_d4f25e75d8d86523c15e8f82339a1427e8c801916931bad0704816dfa9546b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4f25e75d8d86523c15e8f82339a1427e8c801916931bad0704816dfa9546b52->leave($__internal_d4f25e75d8d86523c15e8f82339a1427e8c801916931bad0704816dfa9546b52_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60fcc952bc31a49f128ab3f111f752d7308b23c41bcf2d3798b080374953fc18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60fcc952bc31a49f128ab3f111f752d7308b23c41bcf2d3798b080374953fc18->enter($__internal_60fcc952bc31a49f128ab3f111f752d7308b23c41bcf2d3798b080374953fc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_60fcc952bc31a49f128ab3f111f752d7308b23c41bcf2d3798b080374953fc18->leave($__internal_60fcc952bc31a49f128ab3f111f752d7308b23c41bcf2d3798b080374953fc18_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
