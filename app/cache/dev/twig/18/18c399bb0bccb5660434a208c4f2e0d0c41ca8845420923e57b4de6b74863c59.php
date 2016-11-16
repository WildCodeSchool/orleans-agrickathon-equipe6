<?php

/* ::front-office.html.twig */
class __TwigTemplate_44078ca817b4f55814663510d514ec5a9f4682773382366f346e2d32ccb868d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'flash' => array($this, 'block_flash'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d05cef6df91ed22ce4ffcaf095e423326bdfe7c794fd2e53035c7b3be210a5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05cef6df91ed22ce4ffcaf095e423326bdfe7c794fd2e53035c7b3be210a5e6->enter($__internal_d05cef6df91ed22ce4ffcaf095e423326bdfe7c794fd2e53035c7b3be210a5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::front-office.html.twig"));

        // line 2
        $context["route"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method");
        // line 3
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "</head>
<body>
<div class=\"container\">
    ";
        // line 24
        $this->displayBlock('header', $context, $blocks);
        // line 25
        echo "    ";
        $this->displayBlock('flash', $context, $blocks);
        // line 37
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 39
        echo "</div>
";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "
</body>
</html>";
        
        $__internal_d05cef6df91ed22ce4ffcaf095e423326bdfe7c794fd2e53035c7b3be210a5e6->leave($__internal_d05cef6df91ed22ce4ffcaf095e423326bdfe7c794fd2e53035c7b3be210a5e6_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_fba26832905655af3b50dc826b471a0bc6c0e50f45f16a05441acdcf6f7a0913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba26832905655af3b50dc826b471a0bc6c0e50f45f16a05441acdcf6f7a0913->enter($__internal_fba26832905655af3b50dc826b471a0bc6c0e50f45f16a05441acdcf6f7a0913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        echo "Front-Office D&i";
        
        $__internal_fba26832905655af3b50dc826b471a0bc6c0e50f45f16a05441acdcf6f7a0913->leave($__internal_fba26832905655af3b50dc826b471a0bc6c0e50f45f16a05441acdcf6f7a0913_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f43058936b05523ada1bc230373b4f41f249e2863537138d92aea25ffc8145f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f43058936b05523ada1bc230373b4f41f249e2863537138d92aea25ffc8145f->enter($__internal_5f43058936b05523ada1bc230373b4f41f249e2863537138d92aea25ffc8145f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        // line 11
        echo "        ";
        // line 12
        echo "        ";
        // line 13
        echo "        ";
        // line 14
        echo "        ";
        // line 15
        echo "        ";
        // line 16
        echo "        ";
        // line 17
        echo "        ";
        // line 18
        echo "        <link rel=\"stylesheet\" href=\"";
        echo "asset_url";
        echo "\" type=\"text/css\" />
        ";
        // line 20
        echo "    ";
        
        $__internal_5f43058936b05523ada1bc230373b4f41f249e2863537138d92aea25ffc8145f->leave($__internal_5f43058936b05523ada1bc230373b4f41f249e2863537138d92aea25ffc8145f_prof);

    }

    // line 24
    public function block_header($context, array $blocks = array())
    {
        $__internal_5ad0323ff3c5d6fedff4f5061df44fe352d3f1d387c3716db3e2c13b831af0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad0323ff3c5d6fedff4f5061df44fe352d3f1d387c3716db3e2c13b831af0b2->enter($__internal_5ad0323ff3c5d6fedff4f5061df44fe352d3f1d387c3716db3e2c13b831af0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        
        $__internal_5ad0323ff3c5d6fedff4f5061df44fe352d3f1d387c3716db3e2c13b831af0b2->leave($__internal_5ad0323ff3c5d6fedff4f5061df44fe352d3f1d387c3716db3e2c13b831af0b2_prof);

    }

    // line 25
    public function block_flash($context, array $blocks = array())
    {
        $__internal_72a441c72fc547c8a48e596ca673cdc76b1d54f2bef388adb1ebbb542b5df910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a441c72fc547c8a48e596ca673cdc76b1d54f2bef388adb1ebbb542b5df910->enter($__internal_72a441c72fc547c8a48e596ca673cdc76b1d54f2bef388adb1ebbb542b5df910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        // line 26
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 27
            echo "            <div>
                ";
            // line 28
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 32
            echo "            <div>
                ";
            // line 33
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    ";
        
        $__internal_72a441c72fc547c8a48e596ca673cdc76b1d54f2bef388adb1ebbb542b5df910->leave($__internal_72a441c72fc547c8a48e596ca673cdc76b1d54f2bef388adb1ebbb542b5df910_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_545a2f30caa61ca8b0b180b64cdbe798c91b394a2e9d5e9210f27719ef98a166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545a2f30caa61ca8b0b180b64cdbe798c91b394a2e9d5e9210f27719ef98a166->enter($__internal_545a2f30caa61ca8b0b180b64cdbe798c91b394a2e9d5e9210f27719ef98a166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        
        $__internal_545a2f30caa61ca8b0b180b64cdbe798c91b394a2e9d5e9210f27719ef98a166->leave($__internal_545a2f30caa61ca8b0b180b64cdbe798c91b394a2e9d5e9210f27719ef98a166_prof);

    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2ecc738a492f5479b0896c38f9b6a2dbbb3f29f12f95dce3a65035fa0fd37215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ecc738a492f5479b0896c38f9b6a2dbbb3f29f12f95dce3a65035fa0fd37215->enter($__internal_2ecc738a492f5479b0896c38f9b6a2dbbb3f29f12f95dce3a65035fa0fd37215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        
        $__internal_2ecc738a492f5479b0896c38f9b6a2dbbb3f29f12f95dce3a65035fa0fd37215->leave($__internal_2ecc738a492f5479b0896c38f9b6a2dbbb3f29f12f95dce3a65035fa0fd37215_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e20e924bd437d19a6abba215cc874c1787ba83afebf01af97ddc343ef0529aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20e924bd437d19a6abba215cc874c1787ba83afebf01af97ddc343ef0529aed->enter($__internal_e20e924bd437d19a6abba215cc874c1787ba83afebf01af97ddc343ef0529aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        // line 41
        echo "    ";
        // line 42
        echo "    ";
        // line 43
        echo "    ";
        // line 44
        echo "    ";
        // line 45
        echo "    ";
        // line 46
        echo "    ";
        // line 47
        echo "    <script src=\"";
        echo "asset_url";
        echo "\"></script>
    ";
        // line 49
        echo "    <script>
        // get locale
        locale = \"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\";
        // get route
        route = \"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "html", null, true);
        echo "\";
    </script>
";
        
        $__internal_e20e924bd437d19a6abba215cc874c1787ba83afebf01af97ddc343ef0529aed->leave($__internal_e20e924bd437d19a6abba215cc874c1787ba83afebf01af97ddc343ef0529aed_prof);

    }

    public function getTemplateName()
    {
        return "::front-office.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 53,  226 => 51,  222 => 49,  217 => 47,  215 => 46,  213 => 45,  211 => 44,  209 => 43,  207 => 42,  205 => 41,  199 => 40,  188 => 38,  177 => 37,  170 => 36,  161 => 33,  158 => 32,  153 => 31,  144 => 28,  141 => 27,  136 => 26,  130 => 25,  119 => 24,  112 => 20,  107 => 18,  105 => 17,  103 => 16,  101 => 15,  99 => 14,  97 => 13,  95 => 12,  93 => 11,  87 => 10,  75 => 8,  66 => 56,  64 => 40,  61 => 39,  58 => 38,  55 => 37,  52 => 25,  50 => 24,  45 => 21,  43 => 10,  38 => 8,  31 => 3,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# add navigation current nav mark #}
{% set route = app.request.get('_route') %}

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Front-Office D&i{% endblock %}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    {% block stylesheets %}
        {#{% stylesheets filter='cssrewrite' %}#}
        {#'@SfWebAppFrontOfficeBundle/Resources/public/css/libs/bootstrap.min.css'#}
        {#'@SfWebAppFrontOfficeBundle/Resources/public/css/libs/bootstrap-theme.min.css'#}
        {#'@SfWebAppFrontOfficeBundle/Resources/public/css/libs/jquery-ui.min.css'#}
        {#'@SfWebAppFrontOfficeBundle/Resources/public/css/libs/jquery-ui.structure.min.css'#}
        {#'@SfWebAppFrontOfficeBundle/Resources/public/css/libs/jquery.dataTables.min.css'#}
        {#'@SfWebAppFrontOfficeBundle/Resources/public/css/front-office.css' %}#}
        <link rel=\"stylesheet\" href=\"{{ 'asset_url' }}\" type=\"text/css\" />
        {#{% endstylesheets %}#}
    {% endblock %}
</head>
<body>
<div class=\"container\">
    {% block header %}{% endblock %}
    {% block flash %}
        {% for flashMessage in app.session.flashbag.get('notice') %}
            <div>
                {{ flashMessage }}
            </div>
        {% endfor %}
        {% for flashMessage in app.session.flashbag.get('error') %}
            <div>
                {{ flashMessage }}
            </div>
        {% endfor %}
    {% endblock %}
    {% block content %}{% endblock %}
    {% block footer %}{% endblock footer %}
</div>
{% block javascripts %}
    {#{% javascripts %}#}
    {#'@SfWebAppFrontOfficeBundle/Resources/public/js/libs/jquery-1.10.1.min.js'#}
    {#'@SfWebAppFrontOfficeBundle/Resources/public/js/libs/jquery-ui.min.js'#}
    {#'@SfWebAppFrontOfficeBundle/Resources/public/js/libs/bootstrap.min.js'#}
    {#'@SfWebAppFrontOfficeBundle/Resources/public/js/libs/jquery.dataTables.min.js'#}
    {#'@SfWebAppFrontOfficeBundle/Resources/public/js/datatables-fo.js' %}#}
    <script src=\"{{ 'asset_url' }}\"></script>
    {#{% endjavascripts %}#}
    <script>
        // get locale
        locale = \"{{ app.request.locale }}\";
        // get route
        route = \"{{ route }}\";
    </script>
{% endblock %}

</body>
</html>", "::front-office.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/app/Resources/views/front-office.html.twig");
    }
}
