<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_804f4da34f9964e9553840dd03c3fb3ebc4ab819b1fb5f8624c56234239b561e extends Twig_Template
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
        $__internal_2b7b2980b1f69fec8082f58468a012a05a149e3a994f00b537385c15911158ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7b2980b1f69fec8082f58468a012a05a149e3a994f00b537385c15911158ce->enter($__internal_2b7b2980b1f69fec8082f58468a012a05a149e3a994f00b537385c15911158ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));
=======
        $__internal_b1432f81d55bbe6c464f55cc6744950c6599979a87bd88ed607d04a962824033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1432f81d55bbe6c464f55cc6744950c6599979a87bd88ed607d04a962824033->enter($__internal_b1432f81d55bbe6c464f55cc6744950c6599979a87bd88ed607d04a962824033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_new\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
<<<<<<< HEAD
        $__internal_2b7b2980b1f69fec8082f58468a012a05a149e3a994f00b537385c15911158ce->leave($__internal_2b7b2980b1f69fec8082f58468a012a05a149e3a994f00b537385c15911158ce_prof);
=======
        $__internal_b1432f81d55bbe6c464f55cc6744950c6599979a87bd88ed607d04a962824033->leave($__internal_b1432f81d55bbe6c464f55cc6744950c6599979a87bd88ed607d04a962824033_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ path('fos_user_group_new') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_group_new\">
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans([], 'FOSUserBundle') }}\" />
    </div>
</form>
<<<<<<< HEAD
", "FOSUserBundle:Group:new_content.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/new_content.html.twig");
=======
", "FOSUserBundle:Group:new_content.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/new_content.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
