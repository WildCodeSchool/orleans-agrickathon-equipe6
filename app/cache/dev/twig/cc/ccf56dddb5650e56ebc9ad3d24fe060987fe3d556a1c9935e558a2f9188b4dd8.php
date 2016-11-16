<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_30540d268c119be415b6c76856e072e4b14c69e43d6c27ea77e4e69cb5cdc9d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_9467defdf02b032bfcbc8c3d47598de1da71165d00192ade3bced1d08c6a5ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9467defdf02b032bfcbc8c3d47598de1da71165d00192ade3bced1d08c6a5ea2->enter($__internal_9467defdf02b032bfcbc8c3d47598de1da71165d00192ade3bced1d08c6a5ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9467defdf02b032bfcbc8c3d47598de1da71165d00192ade3bced1d08c6a5ea2->leave($__internal_9467defdf02b032bfcbc8c3d47598de1da71165d00192ade3bced1d08c6a5ea2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a68bc08792fe72638ff778584f7623dba2f7288b95a28e93d8f2d2dc02422a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68bc08792fe72638ff778584f7623dba2f7288b95a28e93d8f2d2dc02422a10->enter($__internal_a68bc08792fe72638ff778584f7623dba2f7288b95a28e93d8f2d2dc02422a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_a68bc08792fe72638ff778584f7623dba2f7288b95a28e93d8f2d2dc02422a10->leave($__internal_a68bc08792fe72638ff778584f7623dba2f7288b95a28e93d8f2d2dc02422a10_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
