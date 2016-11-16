<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_3a7220a0aa671c77650e2b0e534ba3073f6c63e004b9be260954fb88c2649302 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_ca7f3afe7023cd73b3d4ab4640bf3482127cb6285d42114faa53686737b8d123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7f3afe7023cd73b3d4ab4640bf3482127cb6285d42114faa53686737b8d123->enter($__internal_ca7f3afe7023cd73b3d4ab4640bf3482127cb6285d42114faa53686737b8d123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca7f3afe7023cd73b3d4ab4640bf3482127cb6285d42114faa53686737b8d123->leave($__internal_ca7f3afe7023cd73b3d4ab4640bf3482127cb6285d42114faa53686737b8d123_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_632617a1ff4348c6e5038fb496ae3ccbbe6cc18bed36f96d7aabab5e1e49ff50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632617a1ff4348c6e5038fb496ae3ccbbe6cc18bed36f96d7aabab5e1e49ff50->enter($__internal_632617a1ff4348c6e5038fb496ae3ccbbe6cc18bed36f96d7aabab5e1e49ff50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_632617a1ff4348c6e5038fb496ae3ccbbe6cc18bed36f96d7aabab5e1e49ff50->leave($__internal_632617a1ff4348c6e5038fb496ae3ccbbe6cc18bed36f96d7aabab5e1e49ff50_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
