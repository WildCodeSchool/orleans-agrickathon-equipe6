<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8e5b37e4a26e6cdbc92f67fa6c281bbcaf482cde8699339332f013eb8155ebb8 extends Twig_Template
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
        $__internal_ea8e2e28eed802931f8c2409110bdfde1f5500c8e22dd97f47b6102d1a2f6383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea8e2e28eed802931f8c2409110bdfde1f5500c8e22dd97f47b6102d1a2f6383->enter($__internal_ea8e2e28eed802931f8c2409110bdfde1f5500c8e22dd97f47b6102d1a2f6383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ea8e2e28eed802931f8c2409110bdfde1f5500c8e22dd97f47b6102d1a2f6383->leave($__internal_ea8e2e28eed802931f8c2409110bdfde1f5500c8e22dd97f47b6102d1a2f6383_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
