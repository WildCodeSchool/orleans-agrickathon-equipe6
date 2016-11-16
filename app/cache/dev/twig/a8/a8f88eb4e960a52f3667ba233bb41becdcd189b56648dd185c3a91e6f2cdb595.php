<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_d4d48325a6c2376b4d555714047a5e48ebb468f0d9e586f25ce4cbc10310882d extends Twig_Template
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
        $__internal_c342d24f218a8e5112bce90b3cb0874bde94c9d2f3cf07aa7f45152cf7dc0acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c342d24f218a8e5112bce90b3cb0874bde94c9d2f3cf07aa7f45152cf7dc0acf->enter($__internal_c342d24f218a8e5112bce90b3cb0874bde94c9d2f3cf07aa7f45152cf7dc0acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c342d24f218a8e5112bce90b3cb0874bde94c9d2f3cf07aa7f45152cf7dc0acf->leave($__internal_c342d24f218a8e5112bce90b3cb0874bde94c9d2f3cf07aa7f45152cf7dc0acf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
