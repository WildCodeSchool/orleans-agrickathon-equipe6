<?php

/* ::front-office.html.twig */
class __TwigTemplate_461377039a7621a4b576115e248aa0bee8dac8d1c8d17b75e05550cac1949e43 extends Twig_Template
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
        $__internal_a483c6252d7765aa2beb0fb36648d8231b9c96bae7a9d545fff70ff8b7113341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a483c6252d7765aa2beb0fb36648d8231b9c96bae7a9d545fff70ff8b7113341->enter($__internal_a483c6252d7765aa2beb0fb36648d8231b9c96bae7a9d545fff70ff8b7113341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::front-office.html.twig"));

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
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "</head>
<body>
<div class=\"container\">
    ";
        // line 30
        $this->displayBlock('header', $context, $blocks);
        // line 31
        echo "    ";
        $this->displayBlock('flash', $context, $blocks);
        // line 43
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 45
        echo "</div>
";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "
</body>
</html>";
        
        $__internal_a483c6252d7765aa2beb0fb36648d8231b9c96bae7a9d545fff70ff8b7113341->leave($__internal_a483c6252d7765aa2beb0fb36648d8231b9c96bae7a9d545fff70ff8b7113341_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_7017d8d6ca6e99e8ce1cce7576e42e58725660dd530bd5597b3ad747da4e5602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7017d8d6ca6e99e8ce1cce7576e42e58725660dd530bd5597b3ad747da4e5602->enter($__internal_7017d8d6ca6e99e8ce1cce7576e42e58725660dd530bd5597b3ad747da4e5602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        echo "Front-Office D&i";
        
        $__internal_7017d8d6ca6e99e8ce1cce7576e42e58725660dd530bd5597b3ad747da4e5602->leave($__internal_7017d8d6ca6e99e8ce1cce7576e42e58725660dd530bd5597b3ad747da4e5602_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_52092d654dd4e0388bee71dc794237c373fc7031660812eadb0a1b747ca26265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52092d654dd4e0388bee71dc794237c373fc7031660812eadb0a1b747ca26265->enter($__internal_52092d654dd4e0388bee71dc794237c373fc7031660812eadb0a1b747ca26265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        // line 16
        echo "
        ";
        // line 18
        echo "        ";
        // line 19
        echo "        ";
        // line 20
        echo "        ";
        // line 21
        echo "        ";
        // line 22
        echo "        ";
        // line 23
        echo "        ";
        // line 24
        echo "        <link rel=\"stylesheet\" href=\"";
        echo "asset_url";
        echo "\" type=\"text/css\" />
        ";
        // line 26
        echo "    ";
        
        $__internal_52092d654dd4e0388bee71dc794237c373fc7031660812eadb0a1b747ca26265->leave($__internal_52092d654dd4e0388bee71dc794237c373fc7031660812eadb0a1b747ca26265_prof);

    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        $__internal_2248eb54a38a5c19a4b3683537cd62b73fe66f2b4f31b1e2ea44ee6e9d5743c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2248eb54a38a5c19a4b3683537cd62b73fe66f2b4f31b1e2ea44ee6e9d5743c4->enter($__internal_2248eb54a38a5c19a4b3683537cd62b73fe66f2b4f31b1e2ea44ee6e9d5743c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        
        $__internal_2248eb54a38a5c19a4b3683537cd62b73fe66f2b4f31b1e2ea44ee6e9d5743c4->leave($__internal_2248eb54a38a5c19a4b3683537cd62b73fe66f2b4f31b1e2ea44ee6e9d5743c4_prof);

    }

    // line 31
    public function block_flash($context, array $blocks = array())
    {
        $__internal_27871d71f5390a1b673b4a7c9a02f8d7f99f4388d02c2d00fcaa107eb71407a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27871d71f5390a1b673b4a7c9a02f8d7f99f4388d02c2d00fcaa107eb71407a3->enter($__internal_27871d71f5390a1b673b4a7c9a02f8d7f99f4388d02c2d00fcaa107eb71407a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        // line 32
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 33
            echo "            <div>
                ";
            // line 34
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 38
            echo "            <div>
                ";
            // line 39
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    ";
        
        $__internal_27871d71f5390a1b673b4a7c9a02f8d7f99f4388d02c2d00fcaa107eb71407a3->leave($__internal_27871d71f5390a1b673b4a7c9a02f8d7f99f4388d02c2d00fcaa107eb71407a3_prof);

    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        $__internal_99895ea20b4fa0a77526966cd4e13443e538ba523033f950502ad4c8bf814297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99895ea20b4fa0a77526966cd4e13443e538ba523033f950502ad4c8bf814297->enter($__internal_99895ea20b4fa0a77526966cd4e13443e538ba523033f950502ad4c8bf814297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        
        $__internal_99895ea20b4fa0a77526966cd4e13443e538ba523033f950502ad4c8bf814297->leave($__internal_99895ea20b4fa0a77526966cd4e13443e538ba523033f950502ad4c8bf814297_prof);

    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        $__internal_53c734865c789ab7486a25ea13000dd309c146c58d8b47138e55052bb86b3be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c734865c789ab7486a25ea13000dd309c146c58d8b47138e55052bb86b3be7->enter($__internal_53c734865c789ab7486a25ea13000dd309c146c58d8b47138e55052bb86b3be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        
        $__internal_53c734865c789ab7486a25ea13000dd309c146c58d8b47138e55052bb86b3be7->leave($__internal_53c734865c789ab7486a25ea13000dd309c146c58d8b47138e55052bb86b3be7_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_14192bf982788b76d4c63adf630c743cd5fe4724fe97f65cafc1a7b21df3352d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14192bf982788b76d4c63adf630c743cd5fe4724fe97f65cafc1a7b21df3352d->enter($__internal_14192bf982788b76d4c63adf630c743cd5fe4724fe97f65cafc1a7b21df3352d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        // line 47
        echo "    ";
        // line 48
        echo "    ";
        // line 49
        echo "    ";
        // line 50
        echo "    ";
        // line 51
        echo "    ";
        // line 52
        echo "    ";
        // line 53
        echo "    <script src=\"";
        echo "asset_url";
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 57
        echo "    <script>
        // get locale
        locale = \"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\";
        // get route
        route = \"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "html", null, true);
        echo "\";
    </script>
";
        
        $__internal_14192bf982788b76d4c63adf630c743cd5fe4724fe97f65cafc1a7b21df3352d->leave($__internal_14192bf982788b76d4c63adf630c743cd5fe4724fe97f65cafc1a7b21df3352d_prof);

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
        return array (  251 => 61,  246 => 59,  242 => 57,  238 => 55,  234 => 54,  229 => 53,  227 => 52,  225 => 51,  223 => 50,  221 => 49,  219 => 48,  217 => 47,  211 => 46,  200 => 44,  189 => 43,  182 => 42,  173 => 39,  170 => 38,  165 => 37,  156 => 34,  153 => 33,  148 => 32,  142 => 31,  131 => 30,  124 => 26,  119 => 24,  117 => 23,  115 => 22,  113 => 21,  111 => 20,  109 => 19,  107 => 18,  104 => 16,  98 => 15,  86 => 8,  77 => 64,  75 => 46,  72 => 45,  69 => 44,  66 => 43,  63 => 31,  61 => 30,  56 => 27,  54 => 15,  49 => 13,  45 => 12,  38 => 8,  31 => 3,  29 => 2,);
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
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"{{ asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/font-awesome.min.css')}}\" rel=\"stylesheet\">

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
    <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    {#{% endjavascripts %}#}
    <script>
        // get locale
        locale = \"{{ app.request.locale }}\";
        // get route
        route = \"{{ route }}\";
    </script>
{% endblock %}

</body>
</html>", "::front-office.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/app/Resources/views/front-office.html.twig");
    }
}
