<?php

/* SfWebAppFrontOfficeBundle:Resetting/inc:email.html.twig */
class __TwigTemplate_9ba726ed133fc652abcc72b44de7560526b9fda5ab9d84ee3e5d401b175518da extends Twig_Template
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
        $__internal_2f0c09bd8c2b1e5224e424e7cf35e01c07f059eae6e054a5c067a88bd2415083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0c09bd8c2b1e5224e424e7cf35e01c07f059eae6e054a5c067a88bd2415083->enter($__internal_2f0c09bd8c2b1e5224e424e7cf35e01c07f059eae6e054a5c067a88bd2415083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Resetting/inc:email.html.twig"));
=======
        $__internal_129e8141a4fc2345144f5840e65ed6c3d57cbcd90052e36adb72b15e93192cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129e8141a4fc2345144f5840e65ed6c3d57cbcd90052e36adb72b15e93192cbc->enter($__internal_129e8141a4fc2345144f5840e65ed6c3d57cbcd90052e36adb72b15e93192cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Resetting/inc:email.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 1
        echo "<html>
<head>
    <style type=\"text/CSS\">
        /* for Yahoo Beta, AOL */
        body, #body_style {background: #ffffff; min-height: 200px; color: #fff; font-family: Arial, Helvetica, sans-serif; font-size: 12px;}

        /* for Hotmail */
        .ExternalClass {width: 100%;}

        /* for Yahoo Classic and New */
        .yshortcuts {color: #F00;}

        /* some css reset for Gmail, Hotmail */
        p {margin: 0; padding: 0; margin-bottom: 0;}
        a, a:link, a:visited {color: #2A5DB0;}
    </style>
</head>

";
        // line 20
        echo "<body style=\"background: #ffffff; min-height: 500px; color: #000; font-family: Arial, Helvetica, sans-serif; font-size: 13px\" alink=\"#FF0000\" link=\"#FF0000\" bgcolor=\"#f5f5f5\" text=\"#000000\">
";
        // line 22
        echo "<span id=\"body_style\" style=\"display: block\">
        <table bgcolor=\"#ffffff\" width=\"600\" align=\"center\">
            <!-- DI - BEGIN -->
            <tr>
                <td>
                    <table width=\"600\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#ffffff\">
                        <tr>
                            <td></td>
                        </tr>
                        <tr style=\"height: 20px;\"></tr>
                    </table>
                    <!-- CONTENT - BEGIN -->
                    <table width=\"600\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#ffffff\">
                        <tr>
                            <td style=\"color: #000000; font-family: Tahoma, Arial, sans-serif; font-size: 10pt; width: 600px; padding: 0px;\">
                                <div align=\"left\">
                                    <p>";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "</p>
                                </div>
                            </td>
                        </tr>
                        <tr style=\"height: 40px;\"></tr>
                    </table>
                    <!-- CONTENT - END -->
                </td>
            </tr>
            <!-- DI - END -->
        </table>
    </span>
</body>
</html>";
        
<<<<<<< HEAD
        $__internal_2f0c09bd8c2b1e5224e424e7cf35e01c07f059eae6e054a5c067a88bd2415083->leave($__internal_2f0c09bd8c2b1e5224e424e7cf35e01c07f059eae6e054a5c067a88bd2415083_prof);
=======
        $__internal_129e8141a4fc2345144f5840e65ed6c3d57cbcd90052e36adb72b15e93192cbc->leave($__internal_129e8141a4fc2345144f5840e65ed6c3d57cbcd90052e36adb72b15e93192cbc_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    public function getTemplateName()
    {
        return "SfWebAppFrontOfficeBundle:Resetting/inc:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 38,  45 => 22,  42 => 20,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    <style type=\"text/CSS\">
        /* for Yahoo Beta, AOL */
        body, #body_style {background: #ffffff; min-height: 200px; color: #fff; font-family: Arial, Helvetica, sans-serif; font-size: 12px;}

        /* for Hotmail */
        .ExternalClass {width: 100%;}

        /* for Yahoo Classic and New */
        .yshortcuts {color: #F00;}

        /* some css reset for Gmail, Hotmail */
        p {margin: 0; padding: 0; margin-bottom: 0;}
        a, a:link, a:visited {color: #2A5DB0;}
    </style>
</head>

{# for Gmail, Lotus Notes 6.5 and 7, AOL #}
<body style=\"background: #ffffff; min-height: 500px; color: #000; font-family: Arial, Helvetica, sans-serif; font-size: 13px\" alink=\"#FF0000\" link=\"#FF0000\" bgcolor=\"#f5f5f5\" text=\"#000000\">
{# for AOL #}
<span id=\"body_style\" style=\"display: block\">
        <table bgcolor=\"#ffffff\" width=\"600\" align=\"center\">
            <!-- DI - BEGIN -->
            <tr>
                <td>
                    <table width=\"600\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#ffffff\">
                        <tr>
                            <td></td>
                        </tr>
                        <tr style=\"height: 20px;\"></tr>
                    </table>
                    <!-- CONTENT - BEGIN -->
                    <table width=\"600\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#ffffff\">
                        <tr>
                            <td style=\"color: #000000; font-family: Tahoma, Arial, sans-serif; font-size: 10pt; width: 600px; padding: 0px;\">
                                <div align=\"left\">
                                    <p>{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle')|raw }}</p>
                                </div>
                            </td>
                        </tr>
                        <tr style=\"height: 40px;\"></tr>
                    </table>
                    <!-- CONTENT - END -->
                </td>
            </tr>
            <!-- DI - END -->
        </table>
    </span>
</body>
<<<<<<< HEAD
</html>", "SfWebAppFrontOfficeBundle:Resetting/inc:email.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Resetting/inc/email.html.twig");
=======
</html>", "SfWebAppFrontOfficeBundle:Resetting/inc:email.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Resetting/inc/email.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
