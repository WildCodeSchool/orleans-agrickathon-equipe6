<?php

/* SfWebAppMainBundle:Default:index.html.twig */
class __TwigTemplate_0fac11ab970f2e7c232a2502ba42c4ba0f71279844c7affeeaa90b8519f781a1 extends Twig_Template
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
        $__internal_ce7f787719368153160e859c77da4318f4f6ccee2279e48d27c793f66bfcfb52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7f787719368153160e859c77da4318f4f6ccee2279e48d27c793f66bfcfb52->enter($__internal_ce7f787719368153160e859c77da4318f4f6ccee2279e48d27c793f66bfcfb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppMainBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_ce7f787719368153160e859c77da4318f4f6ccee2279e48d27c793f66bfcfb52->leave($__internal_ce7f787719368153160e859c77da4318f4f6ccee2279e48d27c793f66bfcfb52_prof);

    }

    public function getTemplateName()
    {
        return "SfWebAppMainBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "SfWebAppMainBundle:Default:index.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/MainBundle/Resources/views/Default/index.html.twig");
    }
}
