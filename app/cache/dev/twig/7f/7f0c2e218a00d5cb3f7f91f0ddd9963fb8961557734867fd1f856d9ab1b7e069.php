<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_803428dea554de78d5d6565d8b3734167e6adc0297e7068d71b73b6a7007bbc7 extends Twig_Template
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
        $__internal_001f648ce4af06e4b147fd439b60b9045d426ddcb954420827df2ad1de3a9156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001f648ce4af06e4b147fd439b60b9045d426ddcb954420827df2ad1de3a9156->enter($__internal_001f648ce4af06e4b147fd439b60b9045d426ddcb954420827df2ad1de3a9156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));
=======
        $__internal_eaa06975ecb5228a6acc38a8ff8cfbf65766008a139ba522cbf3501b4cf3fb1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa06975ecb5228a6acc38a8ff8cfbf65766008a139ba522cbf3501b4cf3fb1a->enter($__internal_eaa06975ecb5228a6acc38a8ff8cfbf65766008a139ba522cbf3501b4cf3fb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
<<<<<<< HEAD
        $__internal_001f648ce4af06e4b147fd439b60b9045d426ddcb954420827df2ad1de3a9156->leave($__internal_001f648ce4af06e4b147fd439b60b9045d426ddcb954420827df2ad1de3a9156_prof);
=======
        $__internal_eaa06975ecb5228a6acc38a8ff8cfbf65766008a139ba522cbf3501b4cf3fb1a->leave($__internal_eaa06975ecb5228a6acc38a8ff8cfbf65766008a139ba522cbf3501b4cf3fb1a_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
<<<<<<< HEAD
", "@Framework/Form/datetime_widget.html.php", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
=======
", "@Framework/Form/datetime_widget.html.php", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
