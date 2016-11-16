<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d7d52a4cf2a2a06186ce79572ee3a8c5982370e7249f3c561c4c620a83d19880 extends Twig_Template
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
        $__internal_993ac4eb65cb13745d48241d8e3dd4dd5a22bf542f819c719683373651ab4ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993ac4eb65cb13745d48241d8e3dd4dd5a22bf542f819c719683373651ab4ee6->enter($__internal_993ac4eb65cb13745d48241d8e3dd4dd5a22bf542f819c719683373651ab4ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));
=======
        $__internal_26c5a22a48c0bfaa020c15a8e664475d8212f7da44bea40538fb78bd28a5ac20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c5a22a48c0bfaa020c15a8e664475d8212f7da44bea40538fb78bd28a5ac20->enter($__internal_26c5a22a48c0bfaa020c15a8e664475d8212f7da44bea40538fb78bd28a5ac20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
<<<<<<< HEAD
        $__internal_993ac4eb65cb13745d48241d8e3dd4dd5a22bf542f819c719683373651ab4ee6->leave($__internal_993ac4eb65cb13745d48241d8e3dd4dd5a22bf542f819c719683373651ab4ee6_prof);
=======
        $__internal_26c5a22a48c0bfaa020c15a8e664475d8212f7da44bea40538fb78bd28a5ac20->leave($__internal_26c5a22a48c0bfaa020c15a8e664475d8212f7da44bea40538fb78bd28a5ac20_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
<<<<<<< HEAD
", "TwigBundle:Exception:error.js.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
=======
", "TwigBundle:Exception:error.js.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
