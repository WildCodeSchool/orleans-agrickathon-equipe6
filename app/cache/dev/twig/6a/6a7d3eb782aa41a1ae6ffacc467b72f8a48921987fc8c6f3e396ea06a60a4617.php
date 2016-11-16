<?php

/* ::back-office.html.twig */
class __TwigTemplate_7bca60453c304f9f475143f09c0ebe44eefb88485603a4cc5ec08e08c91683d6 extends Twig_Template
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
        $__internal_d95d9fa4d98e5eea45da20566ff11559152febc3da9b318df222dd15e7d656bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95d9fa4d98e5eea45da20566ff11559152febc3da9b318df222dd15e7d656bf->enter($__internal_d95d9fa4d98e5eea45da20566ff11559152febc3da9b318df222dd15e7d656bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::back-office.html.twig"));

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
        // line 25
        $this->displayBlock('header', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('flash', $context, $blocks);
        // line 42
        echo "
    <!-- container content - BEGIN -->
    <div class=\"container container-content\">
        <div id=\"layout-view\" class=\"view view-villa-all\">
            ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "        </div>
    </div>
    <!-- container content - END -->

    ";
        // line 51
        $this->displayBlock('footer', $context, $blocks);
        // line 52
        echo "
</div>

";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "
</body>
</html>";
        
        $__internal_d95d9fa4d98e5eea45da20566ff11559152febc3da9b318df222dd15e7d656bf->leave($__internal_d95d9fa4d98e5eea45da20566ff11559152febc3da9b318df222dd15e7d656bf_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_18053534df91bb0268fc4673849230a8d4fdccc20a4898da9680de4b38d62a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18053534df91bb0268fc4673849230a8d4fdccc20a4898da9680de4b38d62a93->enter($__internal_18053534df91bb0268fc4673849230a8d4fdccc20a4898da9680de4b38d62a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::back-office.html.twig"));

        echo "Back-Office Blog Test";
        
        $__internal_18053534df91bb0268fc4673849230a8d4fdccc20a4898da9680de4b38d62a93->leave($__internal_18053534df91bb0268fc4673849230a8d4fdccc20a4898da9680de4b38d62a93_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_761765a6da1f72e4f65cc92ee4823cd85a3b2ff42007f91f5453f71c561d32bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761765a6da1f72e4f65cc92ee4823cd85a3b2ff42007f91f5453f71c561d32bc->enter($__internal_761765a6da1f72e4f65cc92ee4823cd85a3b2ff42007f91f5453f71c561d32bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::back-office.html.twig"));

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
        echo "        <link rel=\"stylesheet\" href=\"";
        echo "asset_url";
        echo "\" type=\"text/css\" />
        ";
        // line 19
        echo "
    ";
        
        $__internal_761765a6da1f72e4f65cc92ee4823cd85a3b2ff42007f91f5453f71c561d32bc->leave($__internal_761765a6da1f72e4f65cc92ee4823cd85a3b2ff42007f91f5453f71c561d32bc_prof);

    }

    // line 25
    public function block_header($context, array $blocks = array())
    {
        $__internal_490726801104713182126ee355af1b3c9375f287b9cb7ecf2b3ebfcf65dae491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490726801104713182126ee355af1b3c9375f287b9cb7ecf2b3ebfcf65dae491->enter($__internal_490726801104713182126ee355af1b3c9375f287b9cb7ecf2b3ebfcf65dae491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::back-office.html.twig"));

        
        $__internal_490726801104713182126ee355af1b3c9375f287b9cb7ecf2b3ebfcf65dae491->leave($__internal_490726801104713182126ee355af1b3c9375f287b9cb7ecf2b3ebfcf65dae491_prof);

    }

    // line 27
    public function block_flash($context, array $blocks = array())
    {
        $__internal_f9c664779023f866d2fc9ed32aed575aa2dddf9729e087a16c0fd17f7a9cc1f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c664779023f866d2fc9ed32aed575aa2dddf9729e087a16c0fd17f7a9cc1f2->enter($__internal_f9c664779023f866d2fc9ed32aed575aa2dddf9729e087a16c0fd17f7a9cc1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::back-office.html.twig"));

        // line 28
        echo "
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 30
            echo "            <div>
                ";
            // line 31
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 36
            echo "            <div>
                ";
            // line 37
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
    ";
        
        $__internal_f9c664779023f866d2fc9ed32aed575aa2dddf9729e087a16c0fd17f7a9cc1f2->leave($__internal_f9c664779023f866d2fc9ed32aed575aa2dddf9729e087a16c0fd17f7a9cc1f2_prof);

    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        $__internal_0e87308c7c0ce0759e1c699b638f420cac23dbe1d182b0827f529da8f4e45b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e87308c7c0ce0759e1c699b638f420cac23dbe1d182b0827f529da8f4e45b3f->enter($__internal_0e87308c7c0ce0759e1c699b638f420cac23dbe1d182b0827f529da8f4e45b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::back-office.html.twig"));

        
        $__internal_0e87308c7c0ce0759e1c699b638f420cac23dbe1d182b0827f529da8f4e45b3f->leave($__internal_0e87308c7c0ce0759e1c699b638f420cac23dbe1d182b0827f529da8f4e45b3f_prof);

    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        $__internal_13876f4944fc58339fb31748896084b52fd99d784bc36bdd0d2c343fdbf728bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13876f4944fc58339fb31748896084b52fd99d784bc36bdd0d2c343fdbf728bf->enter($__internal_13876f4944fc58339fb31748896084b52fd99d784bc36bdd0d2c343fdbf728bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::back-office.html.twig"));

        
        $__internal_13876f4944fc58339fb31748896084b52fd99d784bc36bdd0d2c343fdbf728bf->leave($__internal_13876f4944fc58339fb31748896084b52fd99d784bc36bdd0d2c343fdbf728bf_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec2d7e12df24144ff87f2f380d4ebf72ffd64fbc5d2699ff482aeadb0f9eeb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2d7e12df24144ff87f2f380d4ebf72ffd64fbc5d2699ff482aeadb0f9eeb6c->enter($__internal_ec2d7e12df24144ff87f2f380d4ebf72ffd64fbc5d2699ff482aeadb0f9eeb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::back-office.html.twig"));

        // line 56
        echo "    ";
        // line 57
        echo "    ";
        // line 58
        echo "    ";
        // line 59
        echo "    ";
        // line 60
        echo "    <script src=\"";
        echo "asset_url";
        echo "\"></script>
    ";
        // line 62
        echo "
    <script>
        // get locale
        locale = \"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\";
        // get route
        route = \"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "html", null, true);
        echo "\";
    </script>
";
        
        $__internal_ec2d7e12df24144ff87f2f380d4ebf72ffd64fbc5d2699ff482aeadb0f9eeb6c->leave($__internal_ec2d7e12df24144ff87f2f380d4ebf72ffd64fbc5d2699ff482aeadb0f9eeb6c_prof);

    }

    public function getTemplateName()
    {
        return "::back-office.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 67,  242 => 65,  237 => 62,  232 => 60,  230 => 59,  228 => 58,  226 => 57,  224 => 56,  218 => 55,  207 => 51,  196 => 46,  188 => 40,  179 => 37,  176 => 36,  172 => 35,  169 => 34,  160 => 31,  157 => 30,  153 => 29,  150 => 28,  144 => 27,  133 => 25,  125 => 19,  120 => 17,  118 => 16,  116 => 15,  114 => 14,  112 => 13,  110 => 12,  108 => 11,  102 => 10,  90 => 8,  81 => 70,  79 => 55,  74 => 52,  72 => 51,  66 => 47,  64 => 46,  58 => 42,  56 => 27,  53 => 26,  51 => 25,  45 => 21,  43 => 10,  38 => 8,  31 => 3,  29 => 2,);
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
    <title>{% block title %}Back-Office Blog Test{% endblock %}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    {% block stylesheets %}
        {#{% stylesheets filter='cssrewrite'%}#}
        {#'@SfWebAppBackOfficeBundle/Resources/public/css/libs/bootstrap.min.css'#}
        {#'@SfWebAppBackOfficeBundle/Resources/public/css/libs/bootstrap-theme.min.css'#}
        {#'@SfWebAppBackOfficeBundle/Resources/public/css/libs/jquery-ui.min.css'#}
        {#'@SfWebAppBackOfficeBundle/Resources/public/css/libs/jquery-ui.structure.min.css'#}
        {#'@SfWebAppBackOfficeBundle/Resources/public/css/libs/backoffice.css' %}#}
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

    <!-- container content - BEGIN -->
    <div class=\"container container-content\">
        <div id=\"layout-view\" class=\"view view-villa-all\">
            {% block content %}{% endblock %}
        </div>
    </div>
    <!-- container content - END -->

    {% block footer %}{% endblock footer %}

</div>

{% block javascripts %}
    {#{% javascripts%}#}
    {#'@SfWebAppBackOfficeBundle/Resources/public/js/libs/jquery-1.10.1.min.js'#}
    {#'@SfWebAppBackOfficeBundle/Resources/public/js/libs/jquery-ui.min.js'#}
    {#'@SfWebAppBackOfficeBundle/Resources/public/js/libs/bootstrap.min.js'#}
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
</html>", "::back-office.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/app/Resources/views/back-office.html.twig");
    }
}
