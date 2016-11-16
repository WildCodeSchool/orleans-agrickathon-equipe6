<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_1a110b4647c5fa3d75b07e261e1829a0985833c5f8e795385e546119de01c1a8 extends Twig_Template
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
        $__internal_f2d3e95b61ea87d1f1582ae8f3f7cd77b0554e3a4d9bbecf1042266b081e5dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d3e95b61ea87d1f1582ae8f3f7cd77b0554e3a4d9bbecf1042266b081e5dc3->enter($__internal_f2d3e95b61ea87d1f1582ae8f3f7cd77b0554e3a4d9bbecf1042266b081e5dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f2d3e95b61ea87d1f1582ae8f3f7cd77b0554e3a4d9bbecf1042266b081e5dc3->leave($__internal_f2d3e95b61ea87d1f1582ae8f3f7cd77b0554e3a4d9bbecf1042266b081e5dc3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
