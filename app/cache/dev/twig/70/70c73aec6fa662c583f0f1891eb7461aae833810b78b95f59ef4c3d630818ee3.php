<?php

/* base.html.twig */
class __TwigTemplate_438f816a1e8f7c57c03dd6387f365197ff6f280c96a17e418789f4cfd48bb3ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a77e8fe9d1765aed66e47eaac441164ec9e27a488e622d96311792b01887a196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a77e8fe9d1765aed66e47eaac441164ec9e27a488e622d96311792b01887a196->enter($__internal_a77e8fe9d1765aed66e47eaac441164ec9e27a488e622d96311792b01887a196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a77e8fe9d1765aed66e47eaac441164ec9e27a488e622d96311792b01887a196->leave($__internal_a77e8fe9d1765aed66e47eaac441164ec9e27a488e622d96311792b01887a196_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_66c7f95b35f9bc9943a37e256aac735f6b4ba7f64337744844afc2335a21bb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c7f95b35f9bc9943a37e256aac735f6b4ba7f64337744844afc2335a21bb07->enter($__internal_66c7f95b35f9bc9943a37e256aac735f6b4ba7f64337744844afc2335a21bb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_66c7f95b35f9bc9943a37e256aac735f6b4ba7f64337744844afc2335a21bb07->leave($__internal_66c7f95b35f9bc9943a37e256aac735f6b4ba7f64337744844afc2335a21bb07_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0f7234bd501d182c52f63c97742ccf6048ca1561b5702be52574008c6fe38b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7234bd501d182c52f63c97742ccf6048ca1561b5702be52574008c6fe38b5b->enter($__internal_0f7234bd501d182c52f63c97742ccf6048ca1561b5702be52574008c6fe38b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_0f7234bd501d182c52f63c97742ccf6048ca1561b5702be52574008c6fe38b5b->leave($__internal_0f7234bd501d182c52f63c97742ccf6048ca1561b5702be52574008c6fe38b5b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf5f09ca8768c0ccdf45e7c0ee65567317e9f79a017e4debf2ddaaf4f9e1ad48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5f09ca8768c0ccdf45e7c0ee65567317e9f79a017e4debf2ddaaf4f9e1ad48->enter($__internal_cf5f09ca8768c0ccdf45e7c0ee65567317e9f79a017e4debf2ddaaf4f9e1ad48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_cf5f09ca8768c0ccdf45e7c0ee65567317e9f79a017e4debf2ddaaf4f9e1ad48->leave($__internal_cf5f09ca8768c0ccdf45e7c0ee65567317e9f79a017e4debf2ddaaf4f9e1ad48_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_61a51d0a1a1d522c79180e63d097096c46f551541a8988f5515e251520a82b38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a51d0a1a1d522c79180e63d097096c46f551541a8988f5515e251520a82b38->enter($__internal_61a51d0a1a1d522c79180e63d097096c46f551541a8988f5515e251520a82b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_61a51d0a1a1d522c79180e63d097096c46f551541a8988f5515e251520a82b38->leave($__internal_61a51d0a1a1d522c79180e63d097096c46f551541a8988f5515e251520a82b38_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/app/Resources/views/base.html.twig");
    }
}
