<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_f6d635a170483df986e22c047d95f3e7e4bfb0806944e4199b80ba526be00e43 extends Twig_Template
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
        $__internal_8d69cdd3852ffd7a307e41edb4eaefa81e17f591a29b2f1602d7a2c83ca1b9cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d69cdd3852ffd7a307e41edb4eaefa81e17f591a29b2f1602d7a2c83ca1b9cc->enter($__internal_8d69cdd3852ffd7a307e41edb4eaefa81e17f591a29b2f1602d7a2c83ca1b9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_8d69cdd3852ffd7a307e41edb4eaefa81e17f591a29b2f1602d7a2c83ca1b9cc->leave($__internal_8d69cdd3852ffd7a307e41edb4eaefa81e17f591a29b2f1602d7a2c83ca1b9cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
