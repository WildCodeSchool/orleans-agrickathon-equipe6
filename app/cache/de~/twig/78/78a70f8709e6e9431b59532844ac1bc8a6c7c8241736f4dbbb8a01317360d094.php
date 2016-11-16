<?php

/* SfWebAppFrontOfficeBundle::layout.html.twig */
class __TwigTemplate_f238398dc40dd47271fb3387172a1f671c53d4c944f56196da9111bf1e4cd9c2 extends Twig_Template
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
        $__internal_bfc13a763f3f692f678f0a960ef153b772eca0a9759c4ebe1bd810508031d2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc13a763f3f692f678f0a960ef153b772eca0a9759c4ebe1bd810508031d2b2->enter($__internal_bfc13a763f3f692f678f0a960ef153b772eca0a9759c4ebe1bd810508031d2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfc13a763f3f692f678f0a960ef153b772eca0a9759c4ebe1bd810508031d2b2->leave($__internal_bfc13a763f3f692f678f0a960ef153b772eca0a9759c4ebe1bd810508031d2b2_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_0e5f107191ecd428ec39eda8ff7aecbd9e9ce70fef17c71724c05711c8d00fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5f107191ecd428ec39eda8ff7aecbd9e9ce70fef17c71724c05711c8d00fd8->enter($__internal_0e5f107191ecd428ec39eda8ff7aecbd9e9ce70fef17c71724c05711c8d00fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout.html.twig"));

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
        
        $__internal_0e5f107191ecd428ec39eda8ff7aecbd9e9ce70fef17c71724c05711c8d00fd8->leave($__internal_0e5f107191ecd428ec39eda8ff7aecbd9e9ce70fef17c71724c05711c8d00fd8_prof);

    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        $__internal_a85bc140cd76ca1244c7689ed13700f649b4de152bbde68dd828c1a87a3fcf3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85bc140cd76ca1244c7689ed13700f649b4de152bbde68dd828c1a87a3fcf3b->enter($__internal_a85bc140cd76ca1244c7689ed13700f649b4de152bbde68dd828c1a87a3fcf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout.html.twig"));

        
        $__internal_a85bc140cd76ca1244c7689ed13700f649b4de152bbde68dd828c1a87a3fcf3b->leave($__internal_a85bc140cd76ca1244c7689ed13700f649b4de152bbde68dd828c1a87a3fcf3b_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_15813ce04e8ae04b529e5a0148f545166e8fbfdfb6b86be61859f564326131d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15813ce04e8ae04b529e5a0148f545166e8fbfdfb6b86be61859f564326131d4->enter($__internal_15813ce04e8ae04b529e5a0148f545166e8fbfdfb6b86be61859f564326131d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SfWebAppFrontOfficeBundle::layout.html.twig"));

        
        $__internal_15813ce04e8ae04b529e5a0148f545166e8fbfdfb6b86be61859f564326131d4->leave($__internal_15813ce04e8ae04b529e5a0148f545166e8fbfdfb6b86be61859f564326131d4_prof);

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
