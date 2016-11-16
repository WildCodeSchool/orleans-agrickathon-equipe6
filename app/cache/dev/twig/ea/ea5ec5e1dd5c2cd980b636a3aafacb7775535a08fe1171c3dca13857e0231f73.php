<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_5320419acf0aec8a00dd402eef5f445cb870ace2dc9aed442bbc69fef1fed072 extends Twig_Template
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
        $__internal_92be419733f94dc305aa21b0af16fc80c232a1e369d7053e11595a02b3594959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92be419733f94dc305aa21b0af16fc80c232a1e369d7053e11595a02b3594959->enter($__internal_92be419733f94dc305aa21b0af16fc80c232a1e369d7053e11595a02b3594959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));
=======
        $__internal_8ae8a3a36cb750fd2d6024b973ac43813d6a5ac7bdcc442c12227ac0827df633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae8a3a36cb750fd2d6024b973ac43813d6a5ac7bdcc442c12227ac0827df633->enter($__internal_8ae8a3a36cb750fd2d6024b973ac43813d6a5ac7bdcc442c12227ac0827df633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
<<<<<<< HEAD
        $__internal_92be419733f94dc305aa21b0af16fc80c232a1e369d7053e11595a02b3594959->leave($__internal_92be419733f94dc305aa21b0af16fc80c232a1e369d7053e11595a02b3594959_prof);
=======
        $__internal_8ae8a3a36cb750fd2d6024b973ac43813d6a5ac7bdcc442c12227ac0827df633->leave($__internal_8ae8a3a36cb750fd2d6024b973ac43813d6a5ac7bdcc442c12227ac0827df633_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
<<<<<<< HEAD
", "@Framework/Form/choice_attributes.html.php", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
=======
", "@Framework/Form/choice_attributes.html.php", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
