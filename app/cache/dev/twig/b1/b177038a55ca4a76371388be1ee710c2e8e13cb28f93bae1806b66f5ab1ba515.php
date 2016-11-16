<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7a130a705a3e452a840b82d2b0e14aa3f660aae970a266df419fd62bf7073511 extends Twig_Template
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
        $__internal_a01697134b552cc4fd55d46dff8d080d98779fc71546ff43940b2aba66b5a2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01697134b552cc4fd55d46dff8d080d98779fc71546ff43940b2aba66b5a2e9->enter($__internal_a01697134b552cc4fd55d46dff8d080d98779fc71546ff43940b2aba66b5a2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));
=======
        $__internal_2615290f9a71eb3d377023230be00a0e1c06196b4178c75eee19b14d18a036ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2615290f9a71eb3d377023230be00a0e1c06196b4178c75eee19b14d18a036ae->enter($__internal_2615290f9a71eb3d377023230be00a0e1c06196b4178c75eee19b14d18a036ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
<<<<<<< HEAD
        $__internal_a01697134b552cc4fd55d46dff8d080d98779fc71546ff43940b2aba66b5a2e9->leave($__internal_a01697134b552cc4fd55d46dff8d080d98779fc71546ff43940b2aba66b5a2e9_prof);
=======
        $__internal_2615290f9a71eb3d377023230be00a0e1c06196b4178c75eee19b14d18a036ae->leave($__internal_2615290f9a71eb3d377023230be00a0e1c06196b4178c75eee19b14d18a036ae_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
<<<<<<< HEAD
", "TwigBundle:Exception:error.txt.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
=======
", "TwigBundle:Exception:error.txt.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
