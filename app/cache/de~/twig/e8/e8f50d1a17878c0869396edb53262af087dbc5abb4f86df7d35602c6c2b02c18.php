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
        $__internal_d2bd63cc08e1b56f31a1bf3fe2f6444f61f97f0706310f5f0f973128ce64519c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bd63cc08e1b56f31a1bf3fe2f6444f61f97f0706310f5f0f973128ce64519c->enter($__internal_d2bd63cc08e1b56f31a1bf3fe2f6444f61f97f0706310f5f0f973128ce64519c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::front-office.html.twig"));

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
        
        $__internal_d2bd63cc08e1b56f31a1bf3fe2f6444f61f97f0706310f5f0f973128ce64519c->leave($__internal_d2bd63cc08e1b56f31a1bf3fe2f6444f61f97f0706310f5f0f973128ce64519c_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_04646c0fd170bf13a8a5122b6ee1dc4ab9806d2d2219ad438e5c02ae370272bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04646c0fd170bf13a8a5122b6ee1dc4ab9806d2d2219ad438e5c02ae370272bd->enter($__internal_04646c0fd170bf13a8a5122b6ee1dc4ab9806d2d2219ad438e5c02ae370272bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        echo "Front-Office D&i";
        
        $__internal_04646c0fd170bf13a8a5122b6ee1dc4ab9806d2d2219ad438e5c02ae370272bd->leave($__internal_04646c0fd170bf13a8a5122b6ee1dc4ab9806d2d2219ad438e5c02ae370272bd_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f0e9687e71bf3ffb34cee4833551cc34737e8ff612fe31c800387f66eb294df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f0e9687e71bf3ffb34cee4833551cc34737e8ff612fe31c800387f66eb294df->enter($__internal_1f0e9687e71bf3ffb34cee4833551cc34737e8ff612fe31c800387f66eb294df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

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
        
        $__internal_1f0e9687e71bf3ffb34cee4833551cc34737e8ff612fe31c800387f66eb294df->leave($__internal_1f0e9687e71bf3ffb34cee4833551cc34737e8ff612fe31c800387f66eb294df_prof);

    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        $__internal_8dae31d424b5a192a283bbdf44ebd0ad7474673fee571d694cc347316df963b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dae31d424b5a192a283bbdf44ebd0ad7474673fee571d694cc347316df963b3->enter($__internal_8dae31d424b5a192a283bbdf44ebd0ad7474673fee571d694cc347316df963b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        
        $__internal_8dae31d424b5a192a283bbdf44ebd0ad7474673fee571d694cc347316df963b3->leave($__internal_8dae31d424b5a192a283bbdf44ebd0ad7474673fee571d694cc347316df963b3_prof);

    }

    // line 31
    public function block_flash($context, array $blocks = array())
    {
        $__internal_a9272d4ce2449530299ca7b83a6e92da12884d45cac279f13de6fbbf4ae4982f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9272d4ce2449530299ca7b83a6e92da12884d45cac279f13de6fbbf4ae4982f->enter($__internal_a9272d4ce2449530299ca7b83a6e92da12884d45cac279f13de6fbbf4ae4982f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

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
        
        $__internal_a9272d4ce2449530299ca7b83a6e92da12884d45cac279f13de6fbbf4ae4982f->leave($__internal_a9272d4ce2449530299ca7b83a6e92da12884d45cac279f13de6fbbf4ae4982f_prof);

    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        $__internal_c6c1ff61e43024dbf1147fbbd68fa66292b61d105bf25d8551d4ca6272260a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c1ff61e43024dbf1147fbbd68fa66292b61d105bf25d8551d4ca6272260a81->enter($__internal_c6c1ff61e43024dbf1147fbbd68fa66292b61d105bf25d8551d4ca6272260a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        
        $__internal_c6c1ff61e43024dbf1147fbbd68fa66292b61d105bf25d8551d4ca6272260a81->leave($__internal_c6c1ff61e43024dbf1147fbbd68fa66292b61d105bf25d8551d4ca6272260a81_prof);

    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b7ec20f7348bdd9ffe47c87a5daebf0e45eaf3eb3806b09d68ea554e7bdc6da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ec20f7348bdd9ffe47c87a5daebf0e45eaf3eb3806b09d68ea554e7bdc6da6->enter($__internal_b7ec20f7348bdd9ffe47c87a5daebf0e45eaf3eb3806b09d68ea554e7bdc6da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

        
        $__internal_b7ec20f7348bdd9ffe47c87a5daebf0e45eaf3eb3806b09d68ea554e7bdc6da6->leave($__internal_b7ec20f7348bdd9ffe47c87a5daebf0e45eaf3eb3806b09d68ea554e7bdc6da6_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fa0b46700ffd4c48a5e6c0d089bb47803a2afbcfc7ca5b15874616580ea1104f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0b46700ffd4c48a5e6c0d089bb47803a2afbcfc7ca5b15874616580ea1104f->enter($__internal_fa0b46700ffd4c48a5e6c0d089bb47803a2afbcfc7ca5b15874616580ea1104f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::front-office.html.twig"));

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
        echo "\"></script
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
        
        $__internal_fa0b46700ffd4c48a5e6c0d089bb47803a2afbcfc7ca5b15874616580ea1104f->leave($__internal_fa0b46700ffd4c48a5e6c0d089bb47803a2afbcfc7ca5b15874616580ea1104f_prof);

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
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script
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
