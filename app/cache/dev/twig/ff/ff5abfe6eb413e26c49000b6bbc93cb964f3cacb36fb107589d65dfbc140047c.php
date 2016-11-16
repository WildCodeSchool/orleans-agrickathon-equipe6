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
        $__internal_44d27fe628c94af7c95005dc29d07f6975bc1dfc1fa14a81f5275c1b8c1a422c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d27fe628c94af7c95005dc29d07f6975bc1dfc1fa14a81f5275c1b8c1a422c->enter($__internal_44d27fe628c94af7c95005dc29d07f6975bc1dfc1fa14a81f5275c1b8c1a422c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_44d27fe628c94af7c95005dc29d07f6975bc1dfc1fa14a81f5275c1b8c1a422c->leave($__internal_44d27fe628c94af7c95005dc29d07f6975bc1dfc1fa14a81f5275c1b8c1a422c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8efe45a0ffdb18f6139215193660239dd928c4adc6894983ebdb5d1e9cb3e9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8efe45a0ffdb18f6139215193660239dd928c4adc6894983ebdb5d1e9cb3e9d5->enter($__internal_8efe45a0ffdb18f6139215193660239dd928c4adc6894983ebdb5d1e9cb3e9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_8efe45a0ffdb18f6139215193660239dd928c4adc6894983ebdb5d1e9cb3e9d5->leave($__internal_8efe45a0ffdb18f6139215193660239dd928c4adc6894983ebdb5d1e9cb3e9d5_prof);

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
