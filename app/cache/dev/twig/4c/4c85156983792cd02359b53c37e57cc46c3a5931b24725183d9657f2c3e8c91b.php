<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_8721d9eae329bd0ddc3efb2751272ca231aa8f66bf06e54459836db9efe2b7d2 extends Twig_Template
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
        $__internal_758716260dfa3b97746ec3003c10c3ff7d49ccd951cb4b5a6024bc9d1635e061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758716260dfa3b97746ec3003c10c3ff7d49ccd951cb4b5a6024bc9d1635e061->enter($__internal_758716260dfa3b97746ec3003c10c3ff7d49ccd951cb4b5a6024bc9d1635e061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_758716260dfa3b97746ec3003c10c3ff7d49ccd951cb4b5a6024bc9d1635e061->leave($__internal_758716260dfa3b97746ec3003c10c3ff7d49ccd951cb4b5a6024bc9d1635e061_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
