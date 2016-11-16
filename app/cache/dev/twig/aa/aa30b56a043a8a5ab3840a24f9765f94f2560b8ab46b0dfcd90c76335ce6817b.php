<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_2b9f81b9e870b97ba7696404a203e979afc6646e5d782586f36644e2ea0625db extends Twig_Template
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
        $__internal_5a6cfc98f3119cabb350bb777b79fb5e2f3b67c9b2c4d768410bca4ec62b5b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a6cfc98f3119cabb350bb777b79fb5e2f3b67c9b2c4d768410bca4ec62b5b4d->enter($__internal_5a6cfc98f3119cabb350bb777b79fb5e2f3b67c9b2c4d768410bca4ec62b5b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));
=======
        $__internal_3d2b1c29f060a94db4bd351ab864277d3d294015ee0aa5103c5c69822b858fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2b1c29f060a94db4bd351ab864277d3d294015ee0aa5103c5c69822b858fa5->enter($__internal_3d2b1c29f060a94db4bd351ab864277d3d294015ee0aa5103c5c69822b858fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
<<<<<<< HEAD
        $__internal_5a6cfc98f3119cabb350bb777b79fb5e2f3b67c9b2c4d768410bca4ec62b5b4d->leave($__internal_5a6cfc98f3119cabb350bb777b79fb5e2f3b67c9b2c4d768410bca4ec62b5b4d_prof);
=======
        $__internal_3d2b1c29f060a94db4bd351ab864277d3d294015ee0aa5103c5c69822b858fa5->leave($__internal_3d2b1c29f060a94db4bd351ab864277d3d294015ee0aa5103c5c69822b858fa5_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
        return new Twig_Source("<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>
</div>
<<<<<<< HEAD
", "FOSUserBundle:Group:show_content.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/show_content.html.twig");
=======
", "FOSUserBundle:Group:show_content.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/show_content.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
