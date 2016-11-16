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
        $__internal_e5e85ce713a493959a118542485190d00e8dc5e3bf463e62f418a9e462403e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e85ce713a493959a118542485190d00e8dc5e3bf463e62f418a9e462403e3e->enter($__internal_e5e85ce713a493959a118542485190d00e8dc5e3bf463e62f418a9e462403e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e5e85ce713a493959a118542485190d00e8dc5e3bf463e62f418a9e462403e3e->leave($__internal_e5e85ce713a493959a118542485190d00e8dc5e3bf463e62f418a9e462403e3e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a5ffa66415f925e476df231e808b11c1fd67fafa41659e93fc4e8f4ae434bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5ffa66415f925e476df231e808b11c1fd67fafa41659e93fc4e8f4ae434bd5->enter($__internal_9a5ffa66415f925e476df231e808b11c1fd67fafa41659e93fc4e8f4ae434bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_9a5ffa66415f925e476df231e808b11c1fd67fafa41659e93fc4e8f4ae434bd5->leave($__internal_9a5ffa66415f925e476df231e808b11c1fd67fafa41659e93fc4e8f4ae434bd5_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
