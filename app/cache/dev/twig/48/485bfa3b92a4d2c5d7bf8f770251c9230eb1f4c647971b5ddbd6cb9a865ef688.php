<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_4f247dd0d87eb58aa4e822f3e8a44ed877a58a49a4e0a6496e80c5db684c7695 extends Twig_Template
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
        $__internal_9ed5d9529bdaa88efdf78cb4daa0ce53a23f32a46b7bc3ad68a873523b2d6bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed5d9529bdaa88efdf78cb4daa0ce53a23f32a46b7bc3ad68a873523b2d6bf9->enter($__internal_9ed5d9529bdaa88efdf78cb4daa0ce53a23f32a46b7bc3ad68a873523b2d6bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_9ed5d9529bdaa88efdf78cb4daa0ce53a23f32a46b7bc3ad68a873523b2d6bf9->leave($__internal_9ed5d9529bdaa88efdf78cb4daa0ce53a23f32a46b7bc3ad68a873523b2d6bf9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
