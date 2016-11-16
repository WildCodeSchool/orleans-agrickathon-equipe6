<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_3ccf69cf6c062c6e9d39bcb919e158c300fba7c35cf596dc96094c47f48b5b01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fecce4206cede867b2a1cf05454c4efc3e89fc9955e02346bf3e119d1b7540d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fecce4206cede867b2a1cf05454c4efc3e89fc9955e02346bf3e119d1b7540d->enter($__internal_6fecce4206cede867b2a1cf05454c4efc3e89fc9955e02346bf3e119d1b7540d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_6fecce4206cede867b2a1cf05454c4efc3e89fc9955e02346bf3e119d1b7540d->leave($__internal_6fecce4206cede867b2a1cf05454c4efc3e89fc9955e02346bf3e119d1b7540d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
