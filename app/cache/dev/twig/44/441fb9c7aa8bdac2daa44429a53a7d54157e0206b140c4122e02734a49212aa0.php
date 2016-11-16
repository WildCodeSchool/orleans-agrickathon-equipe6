<?php

/* SfWebAppCmsBundle:Default:index.html.twig */
class __TwigTemplate_2695b683e97cb434498df72673229e120bed344b938c2f48fd7d53125f07527d extends Twig_Template
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
        $__internal_d2ae4852c87c943b1add6216ac6034ff11ef0a0d642175b9f6f5277939bb80c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ae4852c87c943b1add6216ac6034ff11ef0a0d642175b9f6f5277939bb80c2->enter($__internal_d2ae4852c87c943b1add6216ac6034ff11ef0a0d642175b9f6f5277939bb80c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppCmsBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_d2ae4852c87c943b1add6216ac6034ff11ef0a0d642175b9f6f5277939bb80c2->leave($__internal_d2ae4852c87c943b1add6216ac6034ff11ef0a0d642175b9f6f5277939bb80c2_prof);

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
", "SfWebAppCmsBundle:Default:index.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/src/SfWebApp/CmsBundle/Resources/views/Default/index.html.twig");
    }
}
