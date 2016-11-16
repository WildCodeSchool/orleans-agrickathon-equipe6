<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_3e68b42e784899e23d1b045a23e370c83e9f3fc9094925ba00249766eca470e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_f53f722286b3a89986217c2e8747f9a28bf5b8f58d4a3dd12ba0a0200976ef83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53f722286b3a89986217c2e8747f9a28bf5b8f58d4a3dd12ba0a0200976ef83->enter($__internal_f53f722286b3a89986217c2e8747f9a28bf5b8f58d4a3dd12ba0a0200976ef83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));
=======
        $__internal_ba953c6af8464a92dc6a79d8197f8cd6b18f01456a0f58e764bb734acad8f0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba953c6af8464a92dc6a79d8197f8cd6b18f01456a0f58e764bb734acad8f0b6->enter($__internal_ba953c6af8464a92dc6a79d8197f8cd6b18f01456a0f58e764bb734acad8f0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
<<<<<<< HEAD
        $__internal_f53f722286b3a89986217c2e8747f9a28bf5b8f58d4a3dd12ba0a0200976ef83->leave($__internal_f53f722286b3a89986217c2e8747f9a28bf5b8f58d4a3dd12ba0a0200976ef83_prof);
=======
        $__internal_ba953c6af8464a92dc6a79d8197f8cd6b18f01456a0f58e764bb734acad8f0b6->leave($__internal_ba953c6af8464a92dc6a79d8197f8cd6b18f01456a0f58e764bb734acad8f0b6_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_e5e578e0a0f6797cbeee87200607580e3aad1db713f12c3b9e772871a35bd62d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e578e0a0f6797cbeee87200607580e3aad1db713f12c3b9e772871a35bd62d->enter($__internal_e5e578e0a0f6797cbeee87200607580e3aad1db713f12c3b9e772871a35bd62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:info.html.twig"));
=======
        $__internal_a6bacf46f8d1595f23b1f418f05343f85343cdd5e7a8a543895fa5593ac3f06a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6bacf46f8d1595f23b1f418f05343f85343cdd5e7a8a543895fa5593ac3f06a->enter($__internal_a6bacf46f8d1595f23b1f418f05343f85343cdd5e7a8a543895fa5593ac3f06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:info.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
<<<<<<< HEAD
        $__internal_e5e578e0a0f6797cbeee87200607580e3aad1db713f12c3b9e772871a35bd62d->leave($__internal_e5e578e0a0f6797cbeee87200607580e3aad1db713f12c3b9e772871a35bd62d_prof);
=======
        $__internal_a6bacf46f8d1595f23b1f418f05343f85343cdd5e7a8a543895fa5593ac3f06a->leave($__internal_a6bacf46f8d1595f23b1f418f05343f85343cdd5e7a8a543895fa5593ac3f06a_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_2cd06bedd5a7d8ca450342fd779324ac954ec49bae00c3492f684721d541e02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd06bedd5a7d8ca450342fd779324ac954ec49bae00c3492f684721d541e02d->enter($__internal_2cd06bedd5a7d8ca450342fd779324ac954ec49bae00c3492f684721d541e02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:info.html.twig"));
=======
        $__internal_f8b58d8a68b5fba0381a4cdebb218c9efd4e44be5a7970d193abb8dd54169a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b58d8a68b5fba0381a4cdebb218c9efd4e44be5a7970d193abb8dd54169a9d->enter($__internal_f8b58d8a68b5fba0381a4cdebb218c9efd4e44be5a7970d193abb8dd54169a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:info.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
<<<<<<< HEAD
        $__internal_2cd06bedd5a7d8ca450342fd779324ac954ec49bae00c3492f684721d541e02d->leave($__internal_2cd06bedd5a7d8ca450342fd779324ac954ec49bae00c3492f684721d541e02d_prof);
=======
        $__internal_f8b58d8a68b5fba0381a4cdebb218c9efd4e44be5a7970d193abb8dd54169a9d->leave($__internal_f8b58d8a68b5fba0381a4cdebb218c9efd4e44be5a7970d193abb8dd54169a9d_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 36,  69 => 35,  63 => 34,  52 => 29,  46 => 27,  40 => 26,  33 => 1,  31 => 12,  30 => 11,  29 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
<<<<<<< HEAD
", "WebProfilerBundle:Profiler:info.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
=======
", "WebProfilerBundle:Profiler:info.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
