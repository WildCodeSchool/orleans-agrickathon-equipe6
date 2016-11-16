<?php

/* SfWebAppCmsBundle:Default:content.html.twig */
class __TwigTemplate_349b6815f218aa87a1f69d3babf1475d4a8c8125e00fd32bdc359de6b971b926 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SfWebAppCmsOfficeBundle::index.html.twig", "SfWebAppCmsBundle:Default:content.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SfWebAppCmsOfficeBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ed49ae42e561914a4de1c1ea70dbb60138d273e98906360c93936f707e949d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed49ae42e561914a4de1c1ea70dbb60138d273e98906360c93936f707e949d7->enter($__internal_7ed49ae42e561914a4de1c1ea70dbb60138d273e98906360c93936f707e949d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppCmsBundle:Default:content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ed49ae42e561914a4de1c1ea70dbb60138d273e98906360c93936f707e949d7->leave($__internal_7ed49ae42e561914a4de1c1ea70dbb60138d273e98906360c93936f707e949d7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_26bf7c508b4ddb865bd6fe05a5c4bcefb27cafdd9d04984797683dde7cc2340e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26bf7c508b4ddb865bd6fe05a5c4bcefb27cafdd9d04984797683dde7cc2340e->enter($__internal_26bf7c508b4ddb865bd6fe05a5c4bcefb27cafdd9d04984797683dde7cc2340e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppCmsBundle:Default:content.html.twig"));

        // line 3
        echo "

    <div id='nav-bg'></div>
    <section id='about'>
        <div class='container'>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h2>A propos</h2>
                    <p></p>
                </div>
                <div class=\"col-md-6\"></div>
            </div>
        </div>
    </section>


";
        
        $__internal_26bf7c508b4ddb865bd6fe05a5c4bcefb27cafdd9d04984797683dde7cc2340e->leave($__internal_26bf7c508b4ddb865bd6fe05a5c4bcefb27cafdd9d04984797683dde7cc2340e_prof);

    }

    public function getTemplateName()
    {
        return "SfWebAppCmsBundle:Default:content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SfWebAppCmsOfficeBundle::index.html.twig' %}
{% block body %}


    <div id='nav-bg'></div>
    <section id='about'>
        <div class='container'>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h2>A propos</h2>
                    <p></p>
                </div>
                <div class=\"col-md-6\"></div>
            </div>
        </div>
    </section>


{% endblock %}", "SfWebAppCmsBundle:Default:content.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/CmsBundle/Resources/views/Default/content.html.twig");
    }
}
