<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_ec6138015b8ef48d7eef31aa79e27c4a4726b1c7b4c63c444df2b7b98611101c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_78c7bb68f65352e1abe138ffa0e17f3ab0f2eef5bef350cb77741b830a221a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c7bb68f65352e1abe138ffa0e17f3ab0f2eef5bef350cb77741b830a221a59->enter($__internal_78c7bb68f65352e1abe138ffa0e17f3ab0f2eef5bef350cb77741b830a221a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78c7bb68f65352e1abe138ffa0e17f3ab0f2eef5bef350cb77741b830a221a59->leave($__internal_78c7bb68f65352e1abe138ffa0e17f3ab0f2eef5bef350cb77741b830a221a59_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85ce4e2fda641ca35ceb32bc68dc14f63b5830e36dfe6b7e7d7e0f7be80f410c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ce4e2fda641ca35ceb32bc68dc14f63b5830e36dfe6b7e7d7e0f7be80f410c->enter($__internal_85ce4e2fda641ca35ceb32bc68dc14f63b5830e36dfe6b7e7d7e0f7be80f410c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_85ce4e2fda641ca35ceb32bc68dc14f63b5830e36dfe6b7e7d7e0f7be80f410c->leave($__internal_85ce4e2fda641ca35ceb32bc68dc14f63b5830e36dfe6b7e7d7e0f7be80f410c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
