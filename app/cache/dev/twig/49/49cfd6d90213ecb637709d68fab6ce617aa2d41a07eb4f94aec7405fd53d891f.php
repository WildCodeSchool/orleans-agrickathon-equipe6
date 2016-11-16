<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_ab5527b4022bee4f353c68734f72b8b4c3322ce8fcd04b7d24ba1e48423a7d9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_18fe98d5b7103ed19a47ff04f69dcc91e95d49824cbf137beca9a1f94ce2b67a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18fe98d5b7103ed19a47ff04f69dcc91e95d49824cbf137beca9a1f94ce2b67a->enter($__internal_18fe98d5b7103ed19a47ff04f69dcc91e95d49824cbf137beca9a1f94ce2b67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));
=======
        $__internal_1ab1160037497c92e5ae9fdf11e20373a7c6446263bda5dc9dcc04e4cb7f626c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab1160037497c92e5ae9fdf11e20373a7c6446263bda5dc9dcc04e4cb7f626c->enter($__internal_1ab1160037497c92e5ae9fdf11e20373a7c6446263bda5dc9dcc04e4cb7f626c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
<<<<<<< HEAD
        $__internal_18fe98d5b7103ed19a47ff04f69dcc91e95d49824cbf137beca9a1f94ce2b67a->leave($__internal_18fe98d5b7103ed19a47ff04f69dcc91e95d49824cbf137beca9a1f94ce2b67a_prof);
=======
        $__internal_1ab1160037497c92e5ae9fdf11e20373a7c6446263bda5dc9dcc04e4cb7f626c->leave($__internal_1ab1160037497c92e5ae9fdf11e20373a7c6446263bda5dc9dcc04e4cb7f626c_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_cac726db3143798d11f69b6e7c4f7790e620cfbd317f5b0c89a98b832cb2df5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac726db3143798d11f69b6e7c4f7790e620cfbd317f5b0c89a98b832cb2df5a->enter($__internal_cac726db3143798d11f69b6e7c4f7790e620cfbd317f5b0c89a98b832cb2df5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));
=======
        $__internal_dc46f67b1edd53586d84ef17eb7924ba5720efced193d587498d3731493d7938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc46f67b1edd53586d84ef17eb7924ba5720efced193d587498d3731493d7938->enter($__internal_dc46f67b1edd53586d84ef17eb7924ba5720efced193d587498d3731493d7938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
<<<<<<< HEAD
        $__internal_cac726db3143798d11f69b6e7c4f7790e620cfbd317f5b0c89a98b832cb2df5a->leave($__internal_cac726db3143798d11f69b6e7c4f7790e620cfbd317f5b0c89a98b832cb2df5a_prof);
=======
        $__internal_dc46f67b1edd53586d84ef17eb7924ba5720efced193d587498d3731493d7938->leave($__internal_dc46f67b1edd53586d84ef17eb7924ba5720efced193d587498d3731493d7938_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_fc799c9ff955617d0a43bc1ef04643062590bdfa3c77d25cd85946924be82d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc799c9ff955617d0a43bc1ef04643062590bdfa3c77d25cd85946924be82d5e->enter($__internal_fc799c9ff955617d0a43bc1ef04643062590bdfa3c77d25cd85946924be82d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));
=======
        $__internal_162c652ba48a486419b700a536bddea5f1fb08a4c47be464b47845e02ab2f48a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162c652ba48a486419b700a536bddea5f1fb08a4c47be464b47845e02ab2f48a->enter($__internal_162c652ba48a486419b700a536bddea5f1fb08a4c47be464b47845e02ab2f48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
<<<<<<< HEAD
        $__internal_fc799c9ff955617d0a43bc1ef04643062590bdfa3c77d25cd85946924be82d5e->leave($__internal_fc799c9ff955617d0a43bc1ef04643062590bdfa3c77d25cd85946924be82d5e_prof);
=======
        $__internal_162c652ba48a486419b700a536bddea5f1fb08a4c47be464b47845e02ab2f48a->leave($__internal_162c652ba48a486419b700a536bddea5f1fb08a4c47be464b47845e02ab2f48a_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_5df4f35feddb669602e46f2f7ffbc0baab1535902565dc20a8cd95b3f065aaeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df4f35feddb669602e46f2f7ffbc0baab1535902565dc20a8cd95b3f065aaeb->enter($__internal_5df4f35feddb669602e46f2f7ffbc0baab1535902565dc20a8cd95b3f065aaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_5df4f35feddb669602e46f2f7ffbc0baab1535902565dc20a8cd95b3f065aaeb->leave($__internal_5df4f35feddb669602e46f2f7ffbc0baab1535902565dc20a8cd95b3f065aaeb_prof);
=======
        $__internal_5420ceecdf14325c8fa715ef8efe33fa74c3df7da3d5e68f9ea7b474b2aa38a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5420ceecdf14325c8fa715ef8efe33fa74c3df7da3d5e68f9ea7b474b2aa38a9->enter($__internal_5420ceecdf14325c8fa715ef8efe33fa74c3df7da3d5e68f9ea7b474b2aa38a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_5420ceecdf14325c8fa715ef8efe33fa74c3df7da3d5e68f9ea7b474b2aa38a9->leave($__internal_5420ceecdf14325c8fa715ef8efe33fa74c3df7da3d5e68f9ea7b474b2aa38a9_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
<<<<<<< HEAD
", "FOSUserBundle:Registration:email.txt.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/email.txt.twig");
=======
", "FOSUserBundle:Registration:email.txt.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/email.txt.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
