<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_0ce7b7e3afde5302ddf1a6655ab926d35b0f381bde18bbaf73829199b124f560 extends Twig_Template
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
        $__internal_2d5bc097cbe209d5271bcb224568881c6ff43abe6bed9a06f09b2c05189a5c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5bc097cbe209d5271bcb224568881c6ff43abe6bed9a06f09b2c05189a5c80->enter($__internal_2d5bc097cbe209d5271bcb224568881c6ff43abe6bed9a06f09b2c05189a5c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_2d5bc097cbe209d5271bcb224568881c6ff43abe6bed9a06f09b2c05189a5c80->leave($__internal_2d5bc097cbe209d5271bcb224568881c6ff43abe6bed9a06f09b2c05189a5c80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
