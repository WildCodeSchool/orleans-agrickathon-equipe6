<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_e0d00c776e1250c0d5a80a8d20465eb221a784101420abaa7ec159b9f218b52d extends Twig_Template
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
        $__internal_a7bbbb8890a324ded1b99b1ad6f66ca560cbce4ed91f9cc30b3c87880ca2876e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bbbb8890a324ded1b99b1ad6f66ca560cbce4ed91f9cc30b3c87880ca2876e->enter($__internal_a7bbbb8890a324ded1b99b1ad6f66ca560cbce4ed91f9cc30b3c87880ca2876e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a7bbbb8890a324ded1b99b1ad6f66ca560cbce4ed91f9cc30b3c87880ca2876e->leave($__internal_a7bbbb8890a324ded1b99b1ad6f66ca560cbce4ed91f9cc30b3c87880ca2876e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
