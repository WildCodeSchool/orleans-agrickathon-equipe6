<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_bdb272884df4f77eca74077e4d91328b8dc2bf5d520f85a07418a010154d00d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d57efae04db9e8aa59143dd6b1b8a074ad9f0764ea6f1e9678766b7e0993bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d57efae04db9e8aa59143dd6b1b8a074ad9f0764ea6f1e9678766b7e0993bfc->enter($__internal_5d57efae04db9e8aa59143dd6b1b8a074ad9f0764ea6f1e9678766b7e0993bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5d57efae04db9e8aa59143dd6b1b8a074ad9f0764ea6f1e9678766b7e0993bfc->leave($__internal_5d57efae04db9e8aa59143dd6b1b8a074ad9f0764ea6f1e9678766b7e0993bfc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
