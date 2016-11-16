<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_41bebb36ee667ef512ce24f7a88369235bc17b0a55488b2e2ca64d1d3fbb716f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6d91d349305ffb77c47cb6cf35d250b2b623d9b02fe7e910196f0e4252369f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d91d349305ffb77c47cb6cf35d250b2b623d9b02fe7e910196f0e4252369f1->enter($__internal_e6d91d349305ffb77c47cb6cf35d250b2b623d9b02fe7e910196f0e4252369f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6d91d349305ffb77c47cb6cf35d250b2b623d9b02fe7e910196f0e4252369f1->leave($__internal_e6d91d349305ffb77c47cb6cf35d250b2b623d9b02fe7e910196f0e4252369f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e6fd4efb27e55ebb728d476edf6470c3cd3ec2c371595ccf99195c559e6124a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6fd4efb27e55ebb728d476edf6470c3cd3ec2c371595ccf99195c559e6124a->enter($__internal_8e6fd4efb27e55ebb728d476edf6470c3cd3ec2c371595ccf99195c559e6124a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/checkEmail.html.twig"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_8e6fd4efb27e55ebb728d476edf6470c3cd3ec2c371595ccf99195c559e6124a->leave($__internal_8e6fd4efb27e55ebb728d476edf6470c3cd3ec2c371595ccf99195c559e6124a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}
</p>
{% endblock %}
", "@FOSUser/Resetting/checkEmail.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
