<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_bcf5ab91a0f6a146e0c1ecabc86ed9350630a443c5cbacbae99c115346f8b8d5 extends Twig_Template
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
        $__internal_f6d45dfa95e9a3b8b2d924f300fb32be5c7f0ab074256aa242d6ccfa3dbf0997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d45dfa95e9a3b8b2d924f300fb32be5c7f0ab074256aa242d6ccfa3dbf0997->enter($__internal_f6d45dfa95e9a3b8b2d924f300fb32be5c7f0ab074256aa242d6ccfa3dbf0997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));
=======
        $__internal_b051b8986c8d83d5eaa8a0c6d7a13cb3324860349cbb9c994b7b29aea0538f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b051b8986c8d83d5eaa8a0c6d7a13cb3324860349cbb9c994b7b29aea0538f9e->enter($__internal_b051b8986c8d83d5eaa8a0c6d7a13cb3324860349cbb9c994b7b29aea0538f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
<<<<<<< HEAD
        $__internal_f6d45dfa95e9a3b8b2d924f300fb32be5c7f0ab074256aa242d6ccfa3dbf0997->leave($__internal_f6d45dfa95e9a3b8b2d924f300fb32be5c7f0ab074256aa242d6ccfa3dbf0997_prof);
=======
        $__internal_b051b8986c8d83d5eaa8a0c6d7a13cb3324860349cbb9c994b7b29aea0538f9e->leave($__internal_b051b8986c8d83d5eaa8a0c6d7a13cb3324860349cbb9c994b7b29aea0538f9e_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
<<<<<<< HEAD
", "@Framework/Form/form_label.html.php", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
=======
", "@Framework/Form/form_label.html.php", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
