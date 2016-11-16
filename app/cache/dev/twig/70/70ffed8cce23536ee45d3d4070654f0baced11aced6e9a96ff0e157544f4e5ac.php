<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_76c023e7fab400a789d2be59c2358f84b8666e78c110ff8e60f7dfb671ccbe0f extends Twig_Template
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
        $__internal_45d0d556eece4e3c68dd5478ea262b1458af5840c35d9eb0e4ed91ee24fb4ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d0d556eece4e3c68dd5478ea262b1458af5840c35d9eb0e4ed91ee24fb4ee5->enter($__internal_45d0d556eece4e3c68dd5478ea262b1458af5840c35d9eb0e4ed91ee24fb4ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_45d0d556eece4e3c68dd5478ea262b1458af5840c35d9eb0e4ed91ee24fb4ee5->leave($__internal_45d0d556eece4e3c68dd5478ea262b1458af5840c35d9eb0e4ed91ee24fb4ee5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
