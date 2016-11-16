<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_3394362c5e875b482b44f600439f4b82cffb9202b90575766f353b6eba20b59f extends Twig_Template
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
        $__internal_f118696eaebfccfeb0d7f74cb0b40353596ca9846b0a05fc291ba57310e7a39f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f118696eaebfccfeb0d7f74cb0b40353596ca9846b0a05fc291ba57310e7a39f->enter($__internal_f118696eaebfccfeb0d7f74cb0b40353596ca9846b0a05fc291ba57310e7a39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));
=======
        $__internal_394d259e7a5ba458d89d3497d945e7663f6c71ebf0a348cd38e10045e8433410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394d259e7a5ba458d89d3497d945e7663f6c71ebf0a348cd38e10045e8433410->enter($__internal_394d259e7a5ba458d89d3497d945e7663f6c71ebf0a348cd38e10045e8433410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
<<<<<<< HEAD
        $__internal_f118696eaebfccfeb0d7f74cb0b40353596ca9846b0a05fc291ba57310e7a39f->leave($__internal_f118696eaebfccfeb0d7f74cb0b40353596ca9846b0a05fc291ba57310e7a39f_prof);
=======
        $__internal_394d259e7a5ba458d89d3497d945e7663f6c71ebf0a348cd38e10045e8433410->leave($__internal_394d259e7a5ba458d89d3497d945e7663f6c71ebf0a348cd38e10045e8433410_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
<<<<<<< HEAD
", "TwigBundle:Exception:error.xml.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
=======
", "TwigBundle:Exception:error.xml.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
