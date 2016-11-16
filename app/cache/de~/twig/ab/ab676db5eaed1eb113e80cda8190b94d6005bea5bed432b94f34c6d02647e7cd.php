<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_64eaf26e3aff30578dd60541006f25e7d88cfa18f197f023be3c826c4ae24adf extends Twig_Template
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
        $__internal_1d843c6d2e72f33c273f818c101e6e30e28d2b3ec3e6e0bd51f1757f0b9c327b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d843c6d2e72f33c273f818c101e6e30e28d2b3ec3e6e0bd51f1757f0b9c327b->enter($__internal_1d843c6d2e72f33c273f818c101e6e30e28d2b3ec3e6e0bd51f1757f0b9c327b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1d843c6d2e72f33c273f818c101e6e30e28d2b3ec3e6e0bd51f1757f0b9c327b->leave($__internal_1d843c6d2e72f33c273f818c101e6e30e28d2b3ec3e6e0bd51f1757f0b9c327b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
