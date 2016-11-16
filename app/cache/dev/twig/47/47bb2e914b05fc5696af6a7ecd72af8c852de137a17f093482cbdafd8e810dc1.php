<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7ecbaa699cf141484740623b0b629d0cc03673e153610aecb9606163fb0a17d2 extends Twig_Template
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
        $__internal_a3f5749f9e789aef09b3a483b64f3ca06b5bb27ea1480eb81c3df95cfd09eadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f5749f9e789aef09b3a483b64f3ca06b5bb27ea1480eb81c3df95cfd09eadc->enter($__internal_a3f5749f9e789aef09b3a483b64f3ca06b5bb27ea1480eb81c3df95cfd09eadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a3f5749f9e789aef09b3a483b64f3ca06b5bb27ea1480eb81c3df95cfd09eadc->leave($__internal_a3f5749f9e789aef09b3a483b64f3ca06b5bb27ea1480eb81c3df95cfd09eadc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
