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
<<<<<<< HEAD
        $__internal_ce07e35ed0f55b6c261b1934d3194b0709e9574c2372df9a09b3eec37d595578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce07e35ed0f55b6c261b1934d3194b0709e9574c2372df9a09b3eec37d595578->enter($__internal_ce07e35ed0f55b6c261b1934d3194b0709e9574c2372df9a09b3eec37d595578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));
=======
        $__internal_ded650926b957062dcf1bc9755f215a0244466d1bbffcee4518f8e24da15500d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded650926b957062dcf1bc9755f215a0244466d1bbffcee4518f8e24da15500d->enter($__internal_ded650926b957062dcf1bc9755f215a0244466d1bbffcee4518f8e24da15500d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
<<<<<<< HEAD
        $__internal_ce07e35ed0f55b6c261b1934d3194b0709e9574c2372df9a09b3eec37d595578->leave($__internal_ce07e35ed0f55b6c261b1934d3194b0709e9574c2372df9a09b3eec37d595578_prof);
=======
        $__internal_ded650926b957062dcf1bc9755f215a0244466d1bbffcee4518f8e24da15500d->leave($__internal_ded650926b957062dcf1bc9755f215a0244466d1bbffcee4518f8e24da15500d_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

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
<<<<<<< HEAD
", "TwigBundle:Exception:error.json.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
=======
", "TwigBundle:Exception:error.json.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
