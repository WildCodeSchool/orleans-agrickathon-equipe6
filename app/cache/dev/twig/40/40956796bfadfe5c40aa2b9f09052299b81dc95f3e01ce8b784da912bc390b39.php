<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2497bdd0e2621f31b9118e79581788453057c47f206c5498d6403e5eed766e79 extends Twig_Template
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
<<<<<<< HEAD
        $__internal_b4df4999fb85ff8f4b32c65987fd3eb54c41ecfa0929ade00d84e18d3150462e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4df4999fb85ff8f4b32c65987fd3eb54c41ecfa0929ade00d84e18d3150462e->enter($__internal_b4df4999fb85ff8f4b32c65987fd3eb54c41ecfa0929ade00d84e18d3150462e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));
=======
        $__internal_09df2434b9333b1681aebf305f7eb11e3f35fd62bde8380909dfff03aa5dd985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09df2434b9333b1681aebf305f7eb11e3f35fd62bde8380909dfff03aa5dd985->enter($__internal_09df2434b9333b1681aebf305f7eb11e3f35fd62bde8380909dfff03aa5dd985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
<<<<<<< HEAD
        $__internal_b4df4999fb85ff8f4b32c65987fd3eb54c41ecfa0929ade00d84e18d3150462e->leave($__internal_b4df4999fb85ff8f4b32c65987fd3eb54c41ecfa0929ade00d84e18d3150462e_prof);
=======
        $__internal_09df2434b9333b1681aebf305f7eb11e3f35fd62bde8380909dfff03aa5dd985->leave($__internal_09df2434b9333b1681aebf305f7eb11e3f35fd62bde8380909dfff03aa5dd985_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
<<<<<<< HEAD
", "@Framework/Form/form_errors.html.php", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
=======
", "@Framework/Form/form_errors.html.php", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
