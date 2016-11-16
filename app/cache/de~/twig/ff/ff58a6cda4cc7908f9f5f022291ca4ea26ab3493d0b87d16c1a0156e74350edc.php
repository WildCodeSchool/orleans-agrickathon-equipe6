<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_4cf4b8603508f524817f64e9b0b0b082b7a20e98fc45d4d727ebc7976acb4228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_fcb43841f149bc95cb0cf7d700a36ea811ef62e967967afe26db3fcbf731c16f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb43841f149bc95cb0cf7d700a36ea811ef62e967967afe26db3fcbf731c16f->enter($__internal_fcb43841f149bc95cb0cf7d700a36ea811ef62e967967afe26db3fcbf731c16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcb43841f149bc95cb0cf7d700a36ea811ef62e967967afe26db3fcbf731c16f->leave($__internal_fcb43841f149bc95cb0cf7d700a36ea811ef62e967967afe26db3fcbf731c16f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_957b4fe1576a69c4e636cedfb8e16e2ea440c53dbb4a1abff81b1f74b20f9dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957b4fe1576a69c4e636cedfb8e16e2ea440c53dbb4a1abff81b1f74b20f9dac->enter($__internal_957b4fe1576a69c4e636cedfb8e16e2ea440c53dbb4a1abff81b1f74b20f9dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_957b4fe1576a69c4e636cedfb8e16e2ea440c53dbb4a1abff81b1f74b20f9dac->leave($__internal_957b4fe1576a69c4e636cedfb8e16e2ea440c53dbb4a1abff81b1f74b20f9dac_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
