<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_61511cc890b75ab3c053561f98cd899d5a4cd29a9371d3088e82c28956f0a8f3 extends Twig_Template
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
        $__internal_876a3122d59171ce4b54720b8f9d5e7fe27f326e86f17e23365d71f53c7b4e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876a3122d59171ce4b54720b8f9d5e7fe27f326e86f17e23365d71f53c7b4e17->enter($__internal_876a3122d59171ce4b54720b8f9d5e7fe27f326e86f17e23365d71f53c7b4e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_876a3122d59171ce4b54720b8f9d5e7fe27f326e86f17e23365d71f53c7b4e17->leave($__internal_876a3122d59171ce4b54720b8f9d5e7fe27f326e86f17e23365d71f53c7b4e17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
