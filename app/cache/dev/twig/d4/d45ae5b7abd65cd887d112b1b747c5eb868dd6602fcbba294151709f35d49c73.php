<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8fe95165a3f8c7eb4d5a4d09c0de310f5766a71e0b8f6ec8a514f0f37451f5b8 extends Twig_Template
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
        $__internal_23f4c8ef0cc5cfd8b1706138e6637b73a389b3b0551135feb7b58acb8cad802e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f4c8ef0cc5cfd8b1706138e6637b73a389b3b0551135feb7b58acb8cad802e->enter($__internal_23f4c8ef0cc5cfd8b1706138e6637b73a389b3b0551135feb7b58acb8cad802e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));
=======
        $__internal_031542510892c93ceb84d3634504076616a4de86b0bc7134ca255752f8717e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031542510892c93ceb84d3634504076616a4de86b0bc7134ca255752f8717e11->enter($__internal_031542510892c93ceb84d3634504076616a4de86b0bc7134ca255752f8717e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
<<<<<<< HEAD
        $__internal_23f4c8ef0cc5cfd8b1706138e6637b73a389b3b0551135feb7b58acb8cad802e->leave($__internal_23f4c8ef0cc5cfd8b1706138e6637b73a389b3b0551135feb7b58acb8cad802e_prof);
=======
        $__internal_031542510892c93ceb84d3634504076616a4de86b0bc7134ca255752f8717e11->leave($__internal_031542510892c93ceb84d3634504076616a4de86b0bc7134ca255752f8717e11_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
<<<<<<< HEAD
", "TwigBundle:Exception:exception.atom.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
=======
", "TwigBundle:Exception:exception.atom.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
