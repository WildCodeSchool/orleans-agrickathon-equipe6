<?php

/* SfWebAppCmsBundle:Default:index.html.twig */
class __TwigTemplate_6a2107341f796cf138d701e30ee92114d2d2deabb9a7e5ac1ab9dcef894f2b01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SfWebAppCmsBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d08230518041593346bbfa2f38177901c4bf4b373b9637a5740c89073f279f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d08230518041593346bbfa2f38177901c4bf4b373b9637a5740c89073f279f1->enter($__internal_9d08230518041593346bbfa2f38177901c4bf4b373b9637a5740c89073f279f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppCmsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d08230518041593346bbfa2f38177901c4bf4b373b9637a5740c89073f279f1->leave($__internal_9d08230518041593346bbfa2f38177901c4bf4b373b9637a5740c89073f279f1_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_65955f9508c3f186a8f541f1305db5aff8e2d15176a34b0e1a65e2eed65f6012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65955f9508c3f186a8f541f1305db5aff8e2d15176a34b0e1a65e2eed65f6012->enter($__internal_65955f9508c3f186a8f541f1305db5aff8e2d15176a34b0e1a65e2eed65f6012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppCmsBundle:Default:index.html.twig"));

        // line 4
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <!-- CSS Perso -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/stylesheetheader.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_65955f9508c3f186a8f541f1305db5aff8e2d15176a34b0e1a65e2eed65f6012->leave($__internal_65955f9508c3f186a8f541f1305db5aff8e2d15176a34b0e1a65e2eed65f6012_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_542cff49d6de8eb69ed5e5f36c54c86ea42812c4da92d47d403d57ef12ddc64f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542cff49d6de8eb69ed5e5f36c54c86ea42812c4da92d47d403d57ef12ddc64f->enter($__internal_542cff49d6de8eb69ed5e5f36c54c86ea42812c4da92d47d403d57ef12ddc64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppCmsBundle:Default:index.html.twig"));

        // line 10
        echo "
    Mon contenu
    
";
        
        $__internal_542cff49d6de8eb69ed5e5f36c54c86ea42812c4da92d47d403d57ef12ddc64f->leave($__internal_542cff49d6de8eb69ed5e5f36c54c86ea42812c4da92d47d403d57ef12ddc64f_prof);

    }

    public function getTemplateName()
    {
        return "SfWebAppCmsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  56 => 9,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

    {% block stylesheets %}
        {{ parent() }}
        <!-- CSS Perso -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/stylesheetheader.css') }}\">
    {% endblock %}

{% block body %}

    Mon contenu
    
{% endblock %}", "SfWebAppCmsBundle:Default:index.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/src/SfWebApp/CmsBundle/Resources/views/Default/index.html.twig");
    }
}
