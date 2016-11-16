<?php

/* SfWebAppFrontOfficeBundle::layout.html.twig */
class __TwigTemplate_4ded340f29872700dc88241b3396ea94f2d038f96842adc3998892ed6b581567 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::front-office.html.twig", "SfWebAppFrontOfficeBundle::layout.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::front-office.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c08ecf59c83cda3850e5e34f61a9ac731a228cb49706307e47d6973b95ce18b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c08ecf59c83cda3850e5e34f61a9ac731a228cb49706307e47d6973b95ce18b->enter($__internal_4c08ecf59c83cda3850e5e34f61a9ac731a228cb49706307e47d6973b95ce18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c08ecf59c83cda3850e5e34f61a9ac731a228cb49706307e47d6973b95ce18b->leave($__internal_4c08ecf59c83cda3850e5e34f61a9ac731a228cb49706307e47d6973b95ce18b_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_d60a5d58f0a15215bc5d5fdd689f2150afa8089db0e34a77242ca4a52423cd74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d60a5d58f0a15215bc5d5fdd689f2150afa8089db0e34a77242ca4a52423cd74->enter($__internal_d60a5d58f0a15215bc5d5fdd689f2150afa8089db0e34a77242ca4a52423cd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout.html.twig"));

        // line 4
        echo "
    <nav class=\"navbar navbar-default main-nav\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 22
            echo "                    <ul class=\"nav navbar-nav\">

                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" href=\"\" data-toggle=\"dropdown\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my_account"), "html", null, true);
            echo "</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("logout"), "html", null, true);
            echo "</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                ";
        } else {
            // line 40
            echo "                    <ul class=\"nav navbar-nav\">
                        <li>
                            <a href=\"\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sf_web_app"), "html", null, true);
            echo "</a>
                        </li>
                    </ul>
                ";
        }
        // line 46
        echo "            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
    </nav>

";
        
        $__internal_d60a5d58f0a15215bc5d5fdd689f2150afa8089db0e34a77242ca4a52423cd74->leave($__internal_d60a5d58f0a15215bc5d5fdd689f2150afa8089db0e34a77242ca4a52423cd74_prof);

    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        $__internal_95529e66800bd6f09f55e978df1414d83b10271549a71c6fb865db4aff7c7008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95529e66800bd6f09f55e978df1414d83b10271549a71c6fb865db4aff7c7008->enter($__internal_95529e66800bd6f09f55e978df1414d83b10271549a71c6fb865db4aff7c7008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout.html.twig"));

        
        $__internal_95529e66800bd6f09f55e978df1414d83b10271549a71c6fb865db4aff7c7008->leave($__internal_95529e66800bd6f09f55e978df1414d83b10271549a71c6fb865db4aff7c7008_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_567d33af58de97bda545534519eee13570a3a0ea193f995a40bbad5259c5106d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567d33af58de97bda545534519eee13570a3a0ea193f995a40bbad5259c5106d->enter($__internal_567d33af58de97bda545534519eee13570a3a0ea193f995a40bbad5259c5106d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout.html.twig"));

        
        $__internal_567d33af58de97bda545534519eee13570a3a0ea193f995a40bbad5259c5106d->leave($__internal_567d33af58de97bda545534519eee13570a3a0ea193f995a40bbad5259c5106d_prof);

    }

    public function getTemplateName()
    {
        return "SfWebAppFrontOfficeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 55,  121 => 53,  109 => 46,  102 => 42,  98 => 40,  86 => 33,  78 => 30,  70 => 27,  63 => 22,  61 => 21,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::front-office.html.twig' %}

{% block header %}

    <nav class=\"navbar navbar-default main-nav\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <ul class=\"nav navbar-nav\">

                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" href=\"\" data-toggle=\"dropdown\">{{ app.user.firstname }} {{ app.user.lastname }} <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <a href=\"{{ path('fos_user_profile_show') }}\">{{ 'my_account'|trans }}</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('fos_user_security_logout') }}\">{{ 'logout'|trans }}</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                {% else %}
                    <ul class=\"nav navbar-nav\">
                        <li>
                            <a href=\"\">{{ 'sf_web_app'|trans }}</a>
                        </li>
                    </ul>
                {% endif %}
            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
    </nav>

{% endblock %}

{% block content %}{% endblock %}

{% block footer %}{% endblock %}", "SfWebAppFrontOfficeBundle::layout.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/layout.html.twig");
    }
}
