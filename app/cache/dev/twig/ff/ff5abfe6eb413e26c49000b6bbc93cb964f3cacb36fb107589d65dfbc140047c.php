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
        $__internal_55e4344baa96b7844f420eee95ac13b7234b0e49de54cf2e371abb5f7d5cfbf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e4344baa96b7844f420eee95ac13b7234b0e49de54cf2e371abb5f7d5cfbf7->enter($__internal_55e4344baa96b7844f420eee95ac13b7234b0e49de54cf2e371abb5f7d5cfbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_55e4344baa96b7844f420eee95ac13b7234b0e49de54cf2e371abb5f7d5cfbf7->leave($__internal_55e4344baa96b7844f420eee95ac13b7234b0e49de54cf2e371abb5f7d5cfbf7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f619bfa273aa384afe1bdbf57928b0b475aaeedb34390d1a91e85e7f9c69ccdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f619bfa273aa384afe1bdbf57928b0b475aaeedb34390d1a91e85e7f9c69ccdf->enter($__internal_f619bfa273aa384afe1bdbf57928b0b475aaeedb34390d1a91e85e7f9c69ccdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_f619bfa273aa384afe1bdbf57928b0b475aaeedb34390d1a91e85e7f9c69ccdf->leave($__internal_f619bfa273aa384afe1bdbf57928b0b475aaeedb34390d1a91e85e7f9c69ccdf_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
