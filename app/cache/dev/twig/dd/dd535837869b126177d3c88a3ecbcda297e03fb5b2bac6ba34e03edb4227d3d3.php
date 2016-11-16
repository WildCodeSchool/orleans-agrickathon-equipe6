<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_8854b90a61a110eb9dcc59a2653782519209ce2284536386888139eceebf2c91 extends Twig_Template
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
        $__internal_9bcdf6fdcacd14f7fb0c9ba8d48248a31b8c58b33c6e88b20d4576595609aaf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bcdf6fdcacd14f7fb0c9ba8d48248a31b8c58b33c6e88b20d4576595609aaf4->enter($__internal_9bcdf6fdcacd14f7fb0c9ba8d48248a31b8c58b33c6e88b20d4576595609aaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));
=======
        $__internal_b2a0aa2ba18c23e94d91c340f9394049d6a74bed1d39ed437f10ddce26fe4d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a0aa2ba18c23e94d91c340f9394049d6a74bed1d39ed437f10ddce26fe4d11->enter($__internal_b2a0aa2ba18c23e94d91c340f9394049d6a74bed1d39ed437f10ddce26fe4d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
<<<<<<< HEAD
        $__internal_9bcdf6fdcacd14f7fb0c9ba8d48248a31b8c58b33c6e88b20d4576595609aaf4->leave($__internal_9bcdf6fdcacd14f7fb0c9ba8d48248a31b8c58b33c6e88b20d4576595609aaf4_prof);
=======
        $__internal_b2a0aa2ba18c23e94d91c340f9394049d6a74bed1d39ed437f10ddce26fe4d11->leave($__internal_b2a0aa2ba18c23e94d91c340f9394049d6a74bed1d39ed437f10ddce26fe4d11_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
<<<<<<< HEAD
", "TwigBundle:Exception:traces.xml.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
=======
", "TwigBundle:Exception:traces.xml.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
