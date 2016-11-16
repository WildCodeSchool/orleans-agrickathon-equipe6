<?php

/* ::front-office.html.twig */
class __TwigTemplate_35732f1fe34057f805fae3aa6d23e1e1a40092ff2e558e3ed6a5f87673f531af extends Twig_Template
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
        $__internal_5b1e6b2e72ef14a86c985400324c412cf8645efabc5bd81e30d96cc208b27992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1e6b2e72ef14a86c985400324c412cf8645efabc5bd81e30d96cc208b27992->enter($__internal_5b1e6b2e72ef14a86c985400324c412cf8645efabc5bd81e30d96cc208b27992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::front-office.html.twig"));

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
        
        $__internal_5b1e6b2e72ef14a86c985400324c412cf8645efabc5bd81e30d96cc208b27992->leave($__internal_5b1e6b2e72ef14a86c985400324c412cf8645efabc5bd81e30d96cc208b27992_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0a8211d41db55ccadc0cd93501e357023e06317f42cbf2c44913d996c1b5137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a8211d41db55ccadc0cd93501e357023e06317f42cbf2c44913d996c1b5137->enter($__internal_c0a8211d41db55ccadc0cd93501e357023e06317f42cbf2c44913d996c1b5137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        echo "Front-Office D&i";
        
        $__internal_c0a8211d41db55ccadc0cd93501e357023e06317f42cbf2c44913d996c1b5137->leave($__internal_c0a8211d41db55ccadc0cd93501e357023e06317f42cbf2c44913d996c1b5137_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b91ccaf0d55e860a37ed53ac2800fc6a71400aee9b320744c596542ae6f42de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b91ccaf0d55e860a37ed53ac2800fc6a71400aee9b320744c596542ae6f42de->enter($__internal_5b91ccaf0d55e860a37ed53ac2800fc6a71400aee9b320744c596542ae6f42de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

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
        
        $__internal_5b91ccaf0d55e860a37ed53ac2800fc6a71400aee9b320744c596542ae6f42de->leave($__internal_5b91ccaf0d55e860a37ed53ac2800fc6a71400aee9b320744c596542ae6f42de_prof);

    }

    // line 24
    public function block_header($context, array $blocks = array())
    {
        $__internal_5315674014424c99c9156977cd0820d06df044deb1f91b7e2e74aa63fdace053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5315674014424c99c9156977cd0820d06df044deb1f91b7e2e74aa63fdace053->enter($__internal_5315674014424c99c9156977cd0820d06df044deb1f91b7e2e74aa63fdace053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        echo "<h1>Header</h1>";
        
        $__internal_5315674014424c99c9156977cd0820d06df044deb1f91b7e2e74aa63fdace053->leave($__internal_5315674014424c99c9156977cd0820d06df044deb1f91b7e2e74aa63fdace053_prof);

    }

    // line 25
    public function block_flash($context, array $blocks = array())
    {
        $__internal_29e1bd97f2c73ef5cfb0bd989a167ff5ea8f7f879276eb6fc18f39a77764810e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e1bd97f2c73ef5cfb0bd989a167ff5ea8f7f879276eb6fc18f39a77764810e->enter($__internal_29e1bd97f2c73ef5cfb0bd989a167ff5ea8f7f879276eb6fc18f39a77764810e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

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
        
        $__internal_29e1bd97f2c73ef5cfb0bd989a167ff5ea8f7f879276eb6fc18f39a77764810e->leave($__internal_29e1bd97f2c73ef5cfb0bd989a167ff5ea8f7f879276eb6fc18f39a77764810e_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_dc500260e248fad7d01a158db404de3ad5316881b99464c448cda25b293046c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc500260e248fad7d01a158db404de3ad5316881b99464c448cda25b293046c8->enter($__internal_dc500260e248fad7d01a158db404de3ad5316881b99464c448cda25b293046c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        
        $__internal_dc500260e248fad7d01a158db404de3ad5316881b99464c448cda25b293046c8->leave($__internal_dc500260e248fad7d01a158db404de3ad5316881b99464c448cda25b293046c8_prof);

    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        $__internal_47437690662c3960055796711e8e914b06c8a4abf45729aaa34fb84af92ab64e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47437690662c3960055796711e8e914b06c8a4abf45729aaa34fb84af92ab64e->enter($__internal_47437690662c3960055796711e8e914b06c8a4abf45729aaa34fb84af92ab64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        
        $__internal_47437690662c3960055796711e8e914b06c8a4abf45729aaa34fb84af92ab64e->leave($__internal_47437690662c3960055796711e8e914b06c8a4abf45729aaa34fb84af92ab64e_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_863454e2fed55f431ab5108396e22e28c48eb8f5fed035c2b150cc6efbada7f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863454e2fed55f431ab5108396e22e28c48eb8f5fed035c2b150cc6efbada7f3->enter($__internal_863454e2fed55f431ab5108396e22e28c48eb8f5fed035c2b150cc6efbada7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

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
        
        $__internal_863454e2fed55f431ab5108396e22e28c48eb8f5fed035c2b150cc6efbada7f3->leave($__internal_863454e2fed55f431ab5108396e22e28c48eb8f5fed035c2b150cc6efbada7f3_prof);

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
        return array (  232 => 53,  227 => 51,  223 => 49,  218 => 47,  216 => 46,  214 => 45,  212 => 44,  210 => 43,  208 => 42,  206 => 41,  200 => 40,  189 => 38,  178 => 37,  171 => 36,  162 => 33,  159 => 32,  154 => 31,  145 => 28,  142 => 27,  137 => 26,  131 => 25,  119 => 24,  112 => 20,  107 => 18,  105 => 17,  103 => 16,  101 => 15,  99 => 14,  97 => 13,  95 => 12,  93 => 11,  87 => 10,  75 => 8,  66 => 56,  64 => 40,  61 => 39,  58 => 38,  55 => 37,  52 => 25,  50 => 24,  45 => 21,  43 => 10,  38 => 8,  31 => 3,  29 => 2,);
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
        {#'@SfWebAppFrontOfficeBundle/Resources/public/css/front-office.css'#}
        <link rel=\"stylesheet\" href=\"{{ 'asset_url' }}\" type=\"text/css\" />
        {#{% endstylesheets %}#}
    {% endblock %}
</head>
<body>
<div class=\"container\">
    {% block header %}<h1>Header</h1>{% endblock %}
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
</html>", "::front-office.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/app/Resources/views/front-office.html.twig");
    }
}
