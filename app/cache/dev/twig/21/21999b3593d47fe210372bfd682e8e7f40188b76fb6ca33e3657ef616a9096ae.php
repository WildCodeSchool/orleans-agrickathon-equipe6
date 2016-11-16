<?php

/* SfWebAppCmsBundle:Default:index.html.twig */
class __TwigTemplate_37087b6189127687962030324a142ccc710229f9b1b34ab9b6f1f46af31e5a86 extends Twig_Template
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
        $__internal_735891759c802dbd444888679431180674cf2f82346fb3d98faa847b612702b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_735891759c802dbd444888679431180674cf2f82346fb3d98faa847b612702b0->enter($__internal_735891759c802dbd444888679431180674cf2f82346fb3d98faa847b612702b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppCmsBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_735891759c802dbd444888679431180674cf2f82346fb3d98faa847b612702b0->leave($__internal_735891759c802dbd444888679431180674cf2f82346fb3d98faa847b612702b0_prof);

    }

    public function getTemplateName()
    {
        return "SfWebAppCmsBundle:Default:index.html.twig";
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
", "SfWebAppCmsBundle:Default:index.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/src/SfWebApp/CmsBundle/Resources/views/Default/index.html.twig");
    }
}
