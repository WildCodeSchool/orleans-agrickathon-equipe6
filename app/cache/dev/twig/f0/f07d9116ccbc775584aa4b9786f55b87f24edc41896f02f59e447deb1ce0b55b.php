<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_18d95881c46e8e53d0d77b2d1b3e22b94b9f6f27f70321e02135a29b511d06f5 extends Twig_Template
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
        $__internal_10d9c4bc7de6bda9cd278c2cf4ac34cc77b078610923668cd92a4123b3da2ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d9c4bc7de6bda9cd278c2cf4ac34cc77b078610923668cd92a4123b3da2ea9->enter($__internal_10d9c4bc7de6bda9cd278c2cf4ac34cc77b078610923668cd92a4123b3da2ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));
=======
        $__internal_76eb61cabc2b700b351c2333f0dd2a0623af766d11732c74fa5c638937fc17f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76eb61cabc2b700b351c2333f0dd2a0623af766d11732c74fa5c638937fc17f1->enter($__internal_76eb61cabc2b700b351c2333f0dd2a0623af766d11732c74fa5c638937fc17f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
<<<<<<< HEAD
        $__internal_10d9c4bc7de6bda9cd278c2cf4ac34cc77b078610923668cd92a4123b3da2ea9->leave($__internal_10d9c4bc7de6bda9cd278c2cf4ac34cc77b078610923668cd92a4123b3da2ea9_prof);
=======
        $__internal_76eb61cabc2b700b351c2333f0dd2a0623af766d11732c74fa5c638937fc17f1->leave($__internal_76eb61cabc2b700b351c2333f0dd2a0623af766d11732c74fa5c638937fc17f1_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
=======
", "TwigBundle:Exception:error.css.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
