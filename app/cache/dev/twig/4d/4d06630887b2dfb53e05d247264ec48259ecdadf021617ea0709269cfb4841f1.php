<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0e900449ea2b527d377a04970ce3a832f57ff86525217d78e8c7bcfd9b755fe6 extends Twig_Template
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
<<<<<<< HEAD
        $__internal_26b1e8a760c1425801e77191f771ad53de6270c44649b504ba59cc99e6e0f925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b1e8a760c1425801e77191f771ad53de6270c44649b504ba59cc99e6e0f925->enter($__internal_26b1e8a760c1425801e77191f771ad53de6270c44649b504ba59cc99e6e0f925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));
=======
        $__internal_234bb3f7718f749a551a8e0e2beaa5844acdfd446d4c0e6e478a84034c6b6623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234bb3f7718f749a551a8e0e2beaa5844acdfd446d4c0e6e478a84034c6b6623->enter($__internal_234bb3f7718f749a551a8e0e2beaa5844acdfd446d4c0e6e478a84034c6b6623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
<<<<<<< HEAD
        $__internal_26b1e8a760c1425801e77191f771ad53de6270c44649b504ba59cc99e6e0f925->leave($__internal_26b1e8a760c1425801e77191f771ad53de6270c44649b504ba59cc99e6e0f925_prof);
=======
        $__internal_234bb3f7718f749a551a8e0e2beaa5844acdfd446d4c0e6e478a84034c6b6623->leave($__internal_234bb3f7718f749a551a8e0e2beaa5844acdfd446d4c0e6e478a84034c6b6623_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
<<<<<<< HEAD
", "TwigBundle:Exception:exception.json.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
=======
", "TwigBundle:Exception:exception.json.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
