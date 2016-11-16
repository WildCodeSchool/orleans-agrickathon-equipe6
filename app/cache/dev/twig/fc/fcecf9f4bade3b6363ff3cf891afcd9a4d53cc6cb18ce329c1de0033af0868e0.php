<?php

/* SfWebAppFrontOfficeBundle:Profile/Registration/inc:email.html.twig */
class __TwigTemplate_8a212084b0e294ec68f4b15cc2efa7860485cd245724e24d575cb8f0f8ccc163 extends Twig_Template
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
        $__internal_ce72045c126bb22853225b742f255d87c8abb753bb92020c2c9a19bf02a8bdff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce72045c126bb22853225b742f255d87c8abb753bb92020c2c9a19bf02a8bdff->enter($__internal_ce72045c126bb22853225b742f255d87c8abb753bb92020c2c9a19bf02a8bdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Profile/Registration/inc:email.html.twig"));

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
                                <div style=\"margin-left: 10px; margin-right: 10px;\">
                                    <p>Confirmation inscription</p>
                                    <p style=\"text-align: left;\">";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "</p>
                                </div>

                            </td>
                        </tr>
                        <tr style=\"height: 40px;\"></tr>
                    </table>
                    <!-- CONTENT - END -->


                </td>
            </tr>
        </table>
    </span>
</body>
</html>";
        
        $__internal_ce72045c126bb22853225b742f255d87c8abb753bb92020c2c9a19bf02a8bdff->leave($__internal_ce72045c126bb22853225b742f255d87c8abb753bb92020c2c9a19bf02a8bdff_prof);

    }

    public function getTemplateName()
    {
        return "SfWebAppFrontOfficeBundle:Profile/Registration/inc:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 39,  45 => 22,  42 => 20,  22 => 1,);
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
                                <div style=\"margin-left: 10px; margin-right: 10px;\">
                                    <p>Confirmation inscription</p>
                                    <p style=\"text-align: left;\">{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle')|raw }}</p>
                                </div>

                            </td>
                        </tr>
                        <tr style=\"height: 40px;\"></tr>
                    </table>
                    <!-- CONTENT - END -->


                </td>
            </tr>
        </table>
    </span>
</body>
</html>", "SfWebAppFrontOfficeBundle:Profile/Registration/inc:email.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/src/SfWebApp/FrontOfficeBundle/Resources/views/Profile/Registration/inc/email.html.twig");
    }
}
