<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_a490ea83e13a86022399ea8ce92c294028ec83c9839d6f7a5f3a4277db2d7c01 extends Twig_Template
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
        $__internal_3238ab6fb33819b36838fca147be5169612916905569b82d3d52e9ed2ff52069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3238ab6fb33819b36838fca147be5169612916905569b82d3d52e9ed2ff52069->enter($__internal_3238ab6fb33819b36838fca147be5169612916905569b82d3d52e9ed2ff52069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));
=======
        $__internal_f6c35b4c750acbb9de4b549b75ca9dc5269e506ea42d0fa70d9b635db6d6a13f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c35b4c750acbb9de4b549b75ca9dc5269e506ea42d0fa70d9b635db6d6a13f->enter($__internal_f6c35b4c750acbb9de4b549b75ca9dc5269e506ea42d0fa70d9b635db6d6a13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$v, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
<<<<<<< HEAD
        $__internal_3238ab6fb33819b36838fca147be5169612916905569b82d3d52e9ed2ff52069->leave($__internal_3238ab6fb33819b36838fca147be5169612916905569b82d3d52e9ed2ff52069_prof);
=======
        $__internal_f6c35b4c750acbb9de4b549b75ca9dc5269e506ea42d0fa70d9b635db6d6a13f->leave($__internal_f6c35b4c750acbb9de4b549b75ca9dc5269e506ea42d0fa70d9b635db6d6a13f_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$v, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
<<<<<<< HEAD
", "@Framework/Form/widget_container_attributes.html.php", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
=======
", "@Framework/Form/widget_container_attributes.html.php", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
