<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_cd793ac9cbba9d3b6271f251ee12a21ac23146c441a4f19ed132a4e33dc21077 extends Twig_Template
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
        $__internal_21c173f2193c2af242f55213cef82e9cfe9e83c540d9dac89c0b8b9341ac7ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c173f2193c2af242f55213cef82e9cfe9e83c540d9dac89c0b8b9341ac7ac1->enter($__internal_21c173f2193c2af242f55213cef82e9cfe9e83c540d9dac89c0b8b9341ac7ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));
=======
        $__internal_7ce7d85cd1af23353cd1d3356a6b3d4fb990f0dbf385665ed328be4ea1a9a64b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce7d85cd1af23353cd1d3356a6b3d4fb990f0dbf385665ed328be4ea1a9a64b->enter($__internal_7ce7d85cd1af23353cd1d3356a6b3d4fb990f0dbf385665ed328be4ea1a9a64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
<<<<<<< HEAD
        $__internal_21c173f2193c2af242f55213cef82e9cfe9e83c540d9dac89c0b8b9341ac7ac1->leave($__internal_21c173f2193c2af242f55213cef82e9cfe9e83c540d9dac89c0b8b9341ac7ac1_prof);
=======
        $__internal_7ce7d85cd1af23353cd1d3356a6b3d4fb990f0dbf385665ed328be4ea1a9a64b->leave($__internal_7ce7d85cd1af23353cd1d3356a6b3d4fb990f0dbf385665ed328be4ea1a9a64b_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
<<<<<<< HEAD
", "@Framework/Form/time_widget.html.php", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
=======
", "@Framework/Form/time_widget.html.php", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
