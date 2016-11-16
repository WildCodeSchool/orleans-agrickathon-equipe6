<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_cd74c54b6f806763ecdefc040a6b3b385fc81e4e2060b6cd11b07422090bd1d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_85492dc26f4927da8e4a7a8c65ccc46369f78fea5e4d15be5c11931f173125c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85492dc26f4927da8e4a7a8c65ccc46369f78fea5e4d15be5c11931f173125c0->enter($__internal_85492dc26f4927da8e4a7a8c65ccc46369f78fea5e4d15be5c11931f173125c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85492dc26f4927da8e4a7a8c65ccc46369f78fea5e4d15be5c11931f173125c0->leave($__internal_85492dc26f4927da8e4a7a8c65ccc46369f78fea5e4d15be5c11931f173125c0_prof);
=======
        $__internal_6595c89b35a98187a01923b98e2f5a53309d8560bce7d3d6afbd91b080937e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6595c89b35a98187a01923b98e2f5a53309d8560bce7d3d6afbd91b080937e09->enter($__internal_6595c89b35a98187a01923b98e2f5a53309d8560bce7d3d6afbd91b080937e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6595c89b35a98187a01923b98e2f5a53309d8560bce7d3d6afbd91b080937e09->leave($__internal_6595c89b35a98187a01923b98e2f5a53309d8560bce7d3d6afbd91b080937e09_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_9c686dfce49bab2a7d31533da0b7b7891b013ec7fc1759035b1723144ebc2535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c686dfce49bab2a7d31533da0b7b7891b013ec7fc1759035b1723144ebc2535->enter($__internal_9c686dfce49bab2a7d31533da0b7b7891b013ec7fc1759035b1723144ebc2535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:ajax.html.twig"));
=======
        $__internal_df0c842b51d867db13de68ec02a41972bc465705398c786652fdaad286e329d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0c842b51d867db13de68ec02a41972bc465705398c786652fdaad286e329d5->enter($__internal_df0c842b51d867db13de68ec02a41972bc465705398c786652fdaad286e329d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:ajax.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
<<<<<<< HEAD
        $__internal_9c686dfce49bab2a7d31533da0b7b7891b013ec7fc1759035b1723144ebc2535->leave($__internal_9c686dfce49bab2a7d31533da0b7b7891b013ec7fc1759035b1723144ebc2535_prof);
=======
        $__internal_df0c842b51d867db13de68ec02a41972bc465705398c786652fdaad286e329d5->leave($__internal_df0c842b51d867db13de68ec02a41972bc465705398c786652fdaad286e329d5_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  71 => 27,  53 => 9,  50 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
<<<<<<< HEAD
", "WebProfilerBundle:Collector:ajax.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
=======
", "WebProfilerBundle:Collector:ajax.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
