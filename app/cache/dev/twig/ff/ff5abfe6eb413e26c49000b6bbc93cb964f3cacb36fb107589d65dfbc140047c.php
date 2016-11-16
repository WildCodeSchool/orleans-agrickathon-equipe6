<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4978887af319973fc04cf88a0a410f3c3c7a26b174de8739764038b16233f9ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_321857401059ab95a6408e0106a526315010fe03d4dff1c71efee8c39c83c323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321857401059ab95a6408e0106a526315010fe03d4dff1c71efee8c39c83c323->enter($__internal_321857401059ab95a6408e0106a526315010fe03d4dff1c71efee8c39c83c323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_321857401059ab95a6408e0106a526315010fe03d4dff1c71efee8c39c83c323->leave($__internal_321857401059ab95a6408e0106a526315010fe03d4dff1c71efee8c39c83c323_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a01d850defc1f2fb51333bb9b87dc025b41db3752f7f4abf07b42202681d42fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01d850defc1f2fb51333bb9b87dc025b41db3752f7f4abf07b42202681d42fc->enter($__internal_a01d850defc1f2fb51333bb9b87dc025b41db3752f7f4abf07b42202681d42fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_a01d850defc1f2fb51333bb9b87dc025b41db3752f7f4abf07b42202681d42fc->leave($__internal_a01d850defc1f2fb51333bb9b87dc025b41db3752f7f4abf07b42202681d42fc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
