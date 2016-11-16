<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_6cb06f2f3a6477ce04c665f0b09b3c0221d0c9b11173ba51f33387d5a5dc58fc extends Twig_Template
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
<<<<<<< HEAD
        $__internal_9f756b5242565f125a2be1c2d2a5252be56629c149594b3958e4c4435e1d36d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f756b5242565f125a2be1c2d2a5252be56629c149594b3958e4c4435e1d36d8->enter($__internal_9f756b5242565f125a2be1c2d2a5252be56629c149594b3958e4c4435e1d36d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));
=======
        $__internal_25ec0371aa94f4ec7211f10770e78493ca1eee73fe00ae0099c33e2fc0877cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ec0371aa94f4ec7211f10770e78493ca1eee73fe00ae0099c33e2fc0877cb7->enter($__internal_25ec0371aa94f4ec7211f10770e78493ca1eee73fe00ae0099c33e2fc0877cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
<<<<<<< HEAD
        $__internal_9f756b5242565f125a2be1c2d2a5252be56629c149594b3958e4c4435e1d36d8->leave($__internal_9f756b5242565f125a2be1c2d2a5252be56629c149594b3958e4c4435e1d36d8_prof);
=======
        $__internal_25ec0371aa94f4ec7211f10770e78493ca1eee73fe00ae0099c33e2fc0877cb7->leave($__internal_25ec0371aa94f4ec7211f10770e78493ca1eee73fe00ae0099c33e2fc0877cb7_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
<<<<<<< HEAD
", "@Framework/Form/button_widget.html.php", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
=======
", "@Framework/Form/button_widget.html.php", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
