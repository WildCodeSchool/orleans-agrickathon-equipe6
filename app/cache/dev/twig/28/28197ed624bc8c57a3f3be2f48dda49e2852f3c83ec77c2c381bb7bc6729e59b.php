<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_2209325ac409dd201f9bd633375ddf2ad681587cea986436d79bd044bb59958b extends Twig_Template
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
        $__internal_a4461186f198a4532dd6ae4de29d2b01431de6d1a8ee4daccdc097dea4054d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4461186f198a4532dd6ae4de29d2b01431de6d1a8ee4daccdc097dea4054d47->enter($__internal_a4461186f198a4532dd6ae4de29d2b01431de6d1a8ee4daccdc097dea4054d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));
=======
        $__internal_7cf77d6898940d64325000e315a31fee0ae57f126aa3f50e6efa967ea874e5ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf77d6898940d64325000e315a31fee0ae57f126aa3f50e6efa967ea874e5ee->enter($__internal_7cf77d6898940d64325000e315a31fee0ae57f126aa3f50e6efa967ea874e5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupname" => (isset($context["groupname"]) ? $context["groupname"] : $this->getContext($context, "groupname")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_edit\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
<<<<<<< HEAD
        $__internal_a4461186f198a4532dd6ae4de29d2b01431de6d1a8ee4daccdc097dea4054d47->leave($__internal_a4461186f198a4532dd6ae4de29d2b01431de6d1a8ee4daccdc097dea4054d47_prof);
=======
        $__internal_7cf77d6898940d64325000e315a31fee0ae57f126aa3f50e6efa967ea874e5ee->leave($__internal_7cf77d6898940d64325000e315a31fee0ae57f126aa3f50e6efa967ea874e5ee_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
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
        return new Twig_Source("<form action=\"{{ path('fos_user_group_edit', {'groupname': groupname} ) }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_group_edit\">
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans([], 'FOSUserBundle') }}\" />
    </div>
</form>
<<<<<<< HEAD
", "FOSUserBundle:Group:edit_content.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/edit_content.html.twig");
=======
", "FOSUserBundle:Group:edit_content.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/edit_content.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
