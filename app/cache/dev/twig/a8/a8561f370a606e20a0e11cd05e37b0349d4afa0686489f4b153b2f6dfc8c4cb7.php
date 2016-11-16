<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_b64f9094652a9e1b63db14969ec79dd646bac8f07a198bbd2c5382685d0fec58 extends Twig_Template
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
        $__internal_faeb183840bf5de9fe5ad5d9c2edd9d6d702f9422ccb42876e68778ca3288c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faeb183840bf5de9fe5ad5d9c2edd9d6d702f9422ccb42876e68778ca3288c91->enter($__internal_faeb183840bf5de9fe5ad5d9c2edd9d6d702f9422ccb42876e68778ca3288c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));
=======
        $__internal_ed15398d00ad7ff7cfa44520424afe6939a0d96c4d864062da2bd9353cda13d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed15398d00ad7ff7cfa44520424afe6939a0d96c4d864062da2bd9353cda13d8->enter($__internal_ed15398d00ad7ff7cfa44520424afe6939a0d96c4d864062da2bd9353cda13d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupname" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
<<<<<<< HEAD
        $__internal_faeb183840bf5de9fe5ad5d9c2edd9d6d702f9422ccb42876e68778ca3288c91->leave($__internal_faeb183840bf5de9fe5ad5d9c2edd9d6d702f9422ccb42876e68778ca3288c91_prof);
=======
        $__internal_ed15398d00ad7ff7cfa44520424afe6939a0d96c4d864062da2bd9353cda13d8->leave($__internal_ed15398d00ad7ff7cfa44520424afe6939a0d96c4d864062da2bd9353cda13d8_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupname': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
<<<<<<< HEAD
", "FOSUserBundle:Group:list_content.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/list_content.html.twig");
=======
", "FOSUserBundle:Group:list_content.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/list_content.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
