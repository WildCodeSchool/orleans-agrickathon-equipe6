<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8552045390973e2613b1f87691bd24afd42ebaffc7cbc7b558e86004d4c5b482 extends Twig_Template
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
        $__internal_4322b6dcde74fc898d289f425acafb891bdda0434b352c9a1fd3e60abcf96d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4322b6dcde74fc898d289f425acafb891bdda0434b352c9a1fd3e60abcf96d72->enter($__internal_4322b6dcde74fc898d289f425acafb891bdda0434b352c9a1fd3e60abcf96d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_4322b6dcde74fc898d289f425acafb891bdda0434b352c9a1fd3e60abcf96d72->leave($__internal_4322b6dcde74fc898d289f425acafb891bdda0434b352c9a1fd3e60abcf96d72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/OpenAgriFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
