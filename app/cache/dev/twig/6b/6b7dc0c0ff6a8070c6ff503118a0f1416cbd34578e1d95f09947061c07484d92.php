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
        $__internal_a17f01f6fd499351fe1af5de6a85667e7681b7848c54783e47e6c56c243994fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a17f01f6fd499351fe1af5de6a85667e7681b7848c54783e47e6c56c243994fb->enter($__internal_a17f01f6fd499351fe1af5de6a85667e7681b7848c54783e47e6c56c243994fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_a17f01f6fd499351fe1af5de6a85667e7681b7848c54783e47e6c56c243994fb->leave($__internal_a17f01f6fd499351fe1af5de6a85667e7681b7848c54783e47e6c56c243994fb_prof);

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
", "@Framework/Form/percent_widget.html.php", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
