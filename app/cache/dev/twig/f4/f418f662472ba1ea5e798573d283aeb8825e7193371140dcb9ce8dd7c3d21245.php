<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_36e3042f2787ff39b04884bb830cbca1c46dd3ede819766c7adfac211cfdfdfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_5bfd5dbc30091fe3d3315b32a23ee504e7f58183c3c9fead6941d94638c5f880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bfd5dbc30091fe3d3315b32a23ee504e7f58183c3c9fead6941d94638c5f880->enter($__internal_5bfd5dbc30091fe3d3315b32a23ee504e7f58183c3c9fead6941d94638c5f880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bfd5dbc30091fe3d3315b32a23ee504e7f58183c3c9fead6941d94638c5f880->leave($__internal_5bfd5dbc30091fe3d3315b32a23ee504e7f58183c3c9fead6941d94638c5f880_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_27361edeaac7f422c6d9a1fb84fc5709e4372012ffb7771b81ff4b358ca43002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27361edeaac7f422c6d9a1fb84fc5709e4372012ffb7771b81ff4b358ca43002->enter($__internal_27361edeaac7f422c6d9a1fb84fc5709e4372012ffb7771b81ff4b358ca43002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Profile/show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_27361edeaac7f422c6d9a1fb84fc5709e4372012ffb7771b81ff4b358ca43002->leave($__internal_27361edeaac7f422c6d9a1fb84fc5709e4372012ffb7771b81ff4b358ca43002_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/show.html.twig");
    }
}
