<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_1a81ea5cbc614de757a7b0625961328c2d9ac1fdf886ee9c11755774b4dbfc85 extends Twig_Template
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
        $__internal_b19f2e3e5fb102f1080f6492b6240e73f78be2fe0b68f663c803dab497b3c6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b19f2e3e5fb102f1080f6492b6240e73f78be2fe0b68f663c803dab497b3c6d3->enter($__internal_b19f2e3e5fb102f1080f6492b6240e73f78be2fe0b68f663c803dab497b3c6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b19f2e3e5fb102f1080f6492b6240e73f78be2fe0b68f663c803dab497b3c6d3->leave($__internal_b19f2e3e5fb102f1080f6492b6240e73f78be2fe0b68f663c803dab497b3c6d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
