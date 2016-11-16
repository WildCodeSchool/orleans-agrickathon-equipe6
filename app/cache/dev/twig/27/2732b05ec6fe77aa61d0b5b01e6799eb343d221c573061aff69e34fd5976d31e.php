<?php

/* WebProfilerBundle:Collector:translation.html.twig */
class __TwigTemplate_6697b099d89be14d71cd1c6d8c5fefa6c1788223d008e067ac5da58c9420b39a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:translation.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_b46ee2915a0787d7db871fb7c5f9b01f2f007da14d2cc7e68980ff4f76c81c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b46ee2915a0787d7db871fb7c5f9b01f2f007da14d2cc7e68980ff4f76c81c1c->enter($__internal_b46ee2915a0787d7db871fb7c5f9b01f2f007da14d2cc7e68980ff4f76c81c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:translation.html.twig"));
=======
        $__internal_f4edf55b642309bead08d8299bb1ccae7278d14a4d3e8baef0997bb14714119b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4edf55b642309bead08d8299bb1ccae7278d14a4d3e8baef0997bb14714119b->enter($__internal_f4edf55b642309bead08d8299bb1ccae7278d14a4d3e8baef0997bb14714119b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:translation.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
<<<<<<< HEAD
        $__internal_b46ee2915a0787d7db871fb7c5f9b01f2f007da14d2cc7e68980ff4f76c81c1c->leave($__internal_b46ee2915a0787d7db871fb7c5f9b01f2f007da14d2cc7e68980ff4f76c81c1c_prof);
=======
        $__internal_f4edf55b642309bead08d8299bb1ccae7278d14a4d3e8baef0997bb14714119b->leave($__internal_f4edf55b642309bead08d8299bb1ccae7278d14a4d3e8baef0997bb14714119b_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_be4fdd1d28bcb8a171865659fc430a9b7b955e801ab8c4e578ca17a40308ba79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4fdd1d28bcb8a171865659fc430a9b7b955e801ab8c4e578ca17a40308ba79->enter($__internal_be4fdd1d28bcb8a171865659fc430a9b7b955e801ab8c4e578ca17a40308ba79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:translation.html.twig"));
=======
        $__internal_3a88a33c6ab1c6c162d97001850b58822eaf703b80cea59d6386d03e91c9b8f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a88a33c6ab1c6c162d97001850b58822eaf703b80cea59d6386d03e91c9b8f7->enter($__internal_3a88a33c6ab1c6c162d97001850b58822eaf703b80cea59d6386d03e91c9b8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:translation.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 6
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messages", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/translation.svg");
            echo "
            ";
            // line 9
            $context["status_color"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array())) ? ("red") : ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array())) ? ("yellow") : (""))));
            // line 10
            echo "            ";
            $context["error_count"] = ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array()) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array()));
            // line 11
            echo "            <span class=\"sf-toolbar-value\">";
            echo twig_escape_filter($this->env, (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count"))) ? ((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count"))) : ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdefines", array()))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start();
            // line 15
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 17
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array())) ? ("red") : (""));
            echo "\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array()), "html", null, true);
            echo "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 24
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array())) ? ("yellow") : (""));
            echo "\">
                    ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array()), "html", null, true);
            echo "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdefines", array()), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 34
            echo "
        ";
            // line 35
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "status" => (isset($context["status_color"]) ? $context["status_color"] : $this->getContext($context, "status_color"))));
            echo "
    ";
        }
        
<<<<<<< HEAD
        $__internal_be4fdd1d28bcb8a171865659fc430a9b7b955e801ab8c4e578ca17a40308ba79->leave($__internal_be4fdd1d28bcb8a171865659fc430a9b7b955e801ab8c4e578ca17a40308ba79_prof);
=======
        $__internal_3a88a33c6ab1c6c162d97001850b58822eaf703b80cea59d6386d03e91c9b8f7->leave($__internal_3a88a33c6ab1c6c162d97001850b58822eaf703b80cea59d6386d03e91c9b8f7_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 39
    public function block_menu($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_10f1c35a0e5cbbfd7d098afb96208df38118e5a50b69803e24c4d83bc25babba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f1c35a0e5cbbfd7d098afb96208df38118e5a50b69803e24c4d83bc25babba->enter($__internal_10f1c35a0e5cbbfd7d098afb96208df38118e5a50b69803e24c4d83bc25babba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:translation.html.twig"));
=======
        $__internal_2a30750f768274694c61b6481bdf16b7ce345e31fe480288e53ed27b06e65425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a30750f768274694c61b6481bdf16b7ce345e31fe480288e53ed27b06e65425->enter($__internal_2a30750f768274694c61b6481bdf16b7ce345e31fe480288e53ed27b06e65425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:translation.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 40
        echo "    <span class=\"label label-status-";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array())) ? ("error") : ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array())) ? ("warning") : (""))));
        echo " ";
        echo ((twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messages", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 41
        echo twig_include($this->env, $context, "@WebProfiler/Icon/translation.svg");
        echo "</span>
        <strong>Translation</strong>
        ";
        // line 43
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array()) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array()))) {
            // line 44
            echo "            ";
            $context["error_count"] = ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array()) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array()));
            // line 45
            echo "            <span class=\"count\">
                <span>";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 49
        echo "    </span>
";
        
<<<<<<< HEAD
        $__internal_10f1c35a0e5cbbfd7d098afb96208df38118e5a50b69803e24c4d83bc25babba->leave($__internal_10f1c35a0e5cbbfd7d098afb96208df38118e5a50b69803e24c4d83bc25babba_prof);
=======
        $__internal_2a30750f768274694c61b6481bdf16b7ce345e31fe480288e53ed27b06e65425->leave($__internal_2a30750f768274694c61b6481bdf16b7ce345e31fe480288e53ed27b06e65425_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 52
    public function block_panel($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_fd206e0bdb0f474322983fdadc48f517f89e77e70a619c3952519304c9993000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd206e0bdb0f474322983fdadc48f517f89e77e70a619c3952519304c9993000->enter($__internal_fd206e0bdb0f474322983fdadc48f517f89e77e70a619c3952519304c9993000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:translation.html.twig"));
=======
        $__internal_ad67cfc3670bcba2c5808bc57aabbdc8aab8089da509868ff508be9e26022eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad67cfc3670bcba2c5808bc57aabbdc8aab8089da509868ff508be9e26022eba->enter($__internal_ad67cfc3670bcba2c5808bc57aabbdc8aab8089da509868ff508be9e26022eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:translation.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 53
        echo "    ";
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messages", array()))) {
            // line 54
            echo "        <h2>Translations</h2>
        <div class=\"empty\">
            <p>No translations have been called.</p>
        </div>
    ";
        } else {
            // line 59
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        }
        
<<<<<<< HEAD
        $__internal_fd206e0bdb0f474322983fdadc48f517f89e77e70a619c3952519304c9993000->leave($__internal_fd206e0bdb0f474322983fdadc48f517f89e77e70a619c3952519304c9993000_prof);
=======
        $__internal_ad67cfc3670bcba2c5808bc57aabbdc8aab8089da509868ff508be9e26022eba->leave($__internal_ad67cfc3670bcba2c5808bc57aabbdc8aab8089da509868ff508be9e26022eba_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 63
    public function block_panelContent($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_69baf2728e4367a6293d6714d2b488989df0df2c07ea0774e28a5138a0d39b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69baf2728e4367a6293d6714d2b488989df0df2c07ea0774e28a5138a0d39b33->enter($__internal_69baf2728e4367a6293d6714d2b488989df0df2c07ea0774e28a5138a0d39b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:translation.html.twig"));
=======
        $__internal_dddb01a052401a05e4e81dce3a6a7a761430a2c82e73294126481d0793504b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dddb01a052401a05e4e81dce3a6a7a761430a2c82e73294126481d0793504b5f->enter($__internal_dddb01a052401a05e4e81dce3a6a7a761430a2c82e73294126481d0793504b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:translation.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        // line 64
        echo "    <h2>Translation Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdefines", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Defined messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Fallback messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Missing messages</span>
        </div>
    </div>

    <h2>Translation Messages</h2>

    ";
        // line 86
        echo "    ";
        list($context["messages_defined"], $context["messages_missing"], $context["messages_fallback"]) =         array(array(), array(), array());
        // line 87
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 88
            echo "        ";
            if (($this->getAttribute($context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_DEFINED"))) {
                // line 89
                echo "            ";
                $context["messages_defined"] = twig_array_merge((isset($context["messages_defined"]) ? $context["messages_defined"] : $this->getContext($context, "messages_defined")), array(0 => $context["message"]));
                // line 90
                echo "        ";
            } elseif (($this->getAttribute($context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_MISSING"))) {
                // line 91
                echo "            ";
                $context["messages_missing"] = twig_array_merge((isset($context["messages_missing"]) ? $context["messages_missing"] : $this->getContext($context, "messages_missing")), array(0 => $context["message"]));
                // line 92
                echo "        ";
            } elseif (($this->getAttribute($context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK"))) {
                // line 93
                echo "            ";
                $context["messages_fallback"] = twig_array_merge((isset($context["messages_fallback"]) ? $context["messages_fallback"] : $this->getContext($context, "messages_fallback")), array(0 => $context["message"]));
                // line 94
                echo "        ";
            }
            // line 95
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Defined <span class=\"badge\">";
        // line 99
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages_defined"]) ? $context["messages_defined"] : $this->getContext($context, "messages_defined"))), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are correctly translated into the given locale.
                </p>

                ";
        // line 106
        if (twig_test_empty((isset($context["messages_defined"]) ? $context["messages_defined"] : $this->getContext($context, "messages_defined")))) {
            // line 107
            echo "                    <div class=\"empty\">
                        <p>None of the used translation messages are defined for the given locale.</p>
                    </div>
                ";
        } else {
            // line 111
            echo "                    ";
            echo $context["helper"]->getrender_table((isset($context["messages_defined"]) ? $context["messages_defined"] : $this->getContext($context, "messages_defined")));
            echo "
                ";
        }
        // line 113
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Fallback <span class=\"badge\">";
        // line 117
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages_fallback"]) ? $context["messages_fallback"] : $this->getContext($context, "messages_fallback"))), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale
                    but Symfony found them in the fallback locale catalog.
                </p>

                ";
        // line 125
        if (twig_test_empty((isset($context["messages_fallback"]) ? $context["messages_fallback"] : $this->getContext($context, "messages_fallback")))) {
            // line 126
            echo "                    <div class=\"empty\">
                        <p>No fallback translation messages were used.</p>
                    </div>
                ";
        } else {
            // line 130
            echo "                    ";
            echo $context["helper"]->getrender_table((isset($context["messages_fallback"]) ? $context["messages_fallback"] : $this->getContext($context, "messages_fallback")));
            echo "
                ";
        }
        // line 132
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Missing <span class=\"badge\">";
        // line 136
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages_missing"]) ? $context["messages_missing"] : $this->getContext($context, "messages_missing"))), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale and cannot
                    be found in the fallback locales. Add them to the translation
                    catalogue to avoid Symfony outputting untranslated contents.
                </p>

                ";
        // line 145
        if (twig_test_empty((isset($context["messages_missing"]) ? $context["messages_missing"] : $this->getContext($context, "messages_missing")))) {
            // line 146
            echo "                    <div class=\"empty\">
                        <p>There are no messages of this category.</p>
                    </div>
                ";
        } else {
            // line 150
            echo "                    ";
            echo $context["helper"]->getrender_table((isset($context["messages_missing"]) ? $context["messages_missing"] : $this->getContext($context, "messages_missing")));
            echo "
                ";
        }
        // line 152
        echo "            </div>
        </div>
    </div>
";
        
<<<<<<< HEAD
        $__internal_69baf2728e4367a6293d6714d2b488989df0df2c07ea0774e28a5138a0d39b33->leave($__internal_69baf2728e4367a6293d6714d2b488989df0df2c07ea0774e28a5138a0d39b33_prof);
=======
        $__internal_dddb01a052401a05e4e81dce3a6a7a761430a2c82e73294126481d0793504b5f->leave($__internal_dddb01a052401a05e4e81dce3a6a7a761430a2c82e73294126481d0793504b5f_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

    }

    // line 157
    public function getrender_table($__messages__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "messages" => $__messages__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
<<<<<<< HEAD
            $__internal_09964fa326461d46ad8f806378eddb45968c545407cd2689c1a7d636c95d01b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_09964fa326461d46ad8f806378eddb45968c545407cd2689c1a7d636c95d01b3->enter($__internal_09964fa326461d46ad8f806378eddb45968c545407cd2689c1a7d636c95d01b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "WebProfilerBundle:Collector:translation.html.twig"));
=======
            $__internal_1cdfde9b9ac569d0ce0367e69dbda4654109e430b2f3c37b79d1a802519e1ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_1cdfde9b9ac569d0ce0367e69dbda4654109e430b2f3c37b79d1a802519e1ece->enter($__internal_1cdfde9b9ac569d0ce0367e69dbda4654109e430b2f3c37b79d1a802519e1ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "WebProfilerBundle:Collector:translation.html.twig"));
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

            // line 158
            echo "    <table>
        <thead>
            <tr>
                <th>Locale</th>
                <th>Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 170
                echo "            <tr>
                <td class=\"font-normal text-small\">";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "locale", array()), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small text-bold\">";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "domain", array()), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small\">";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "count", array()), "html", null, true);
                echo "</td>
                <td>
                    ";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
                echo "

                    ";
                // line 177
                if ( !(null === $this->getAttribute($context["message"], "transChoiceNumber", array()))) {
                    // line 178
                    echo "                        <small class=\"newline\">(pluralization is used)</small>
                    ";
                }
                // line 180
                echo "
                    ";
                // line 181
                if ((twig_length_filter($this->env, $this->getAttribute($context["message"], "parameters", array())) > 0)) {
                    // line 182
                    echo "                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-";
                    // line 184
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" class=\"hidden\">
                            ";
                    // line 185
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["message"], "parameters", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["parameters"]) {
                        // line 186
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpValue($context["parameters"]), "html", null, true);
                        echo "
                                ";
                        // line 187
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            echo "<br />";
                        }
                        // line 188
                        echo "                            ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameters'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 189
                    echo "                        </div>
                    ";
                }
                // line 191
                echo "                </td>
                <td>";
                // line 192
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "translation", array()), "html", null, true);
                echo "</td>
            </tr>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "        </tbody>
    </table>
";
            
<<<<<<< HEAD
            $__internal_09964fa326461d46ad8f806378eddb45968c545407cd2689c1a7d636c95d01b3->leave($__internal_09964fa326461d46ad8f806378eddb45968c545407cd2689c1a7d636c95d01b3_prof);
=======
            $__internal_1cdfde9b9ac569d0ce0367e69dbda4654109e430b2f3c37b79d1a802519e1ece->leave($__internal_1cdfde9b9ac569d0ce0367e69dbda4654109e430b2f3c37b79d1a802519e1ece_prof);
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 195,  498 => 192,  495 => 191,  491 => 189,  477 => 188,  473 => 187,  468 => 186,  451 => 185,  447 => 184,  441 => 182,  439 => 181,  436 => 180,  432 => 178,  430 => 177,  425 => 175,  420 => 173,  416 => 172,  412 => 171,  409 => 170,  392 => 169,  379 => 158,  364 => 157,  354 => 152,  348 => 150,  342 => 146,  340 => 145,  328 => 136,  322 => 132,  316 => 130,  310 => 126,  308 => 125,  297 => 117,  291 => 113,  285 => 111,  279 => 107,  277 => 106,  267 => 99,  262 => 96,  256 => 95,  253 => 94,  250 => 93,  247 => 92,  244 => 91,  241 => 90,  238 => 89,  235 => 88,  230 => 87,  227 => 86,  217 => 78,  209 => 73,  201 => 68,  195 => 64,  189 => 63,  178 => 59,  171 => 54,  168 => 53,  162 => 52,  154 => 49,  148 => 46,  145 => 45,  142 => 44,  140 => 43,  135 => 41,  128 => 40,  122 => 39,  112 => 35,  109 => 34,  103 => 31,  94 => 25,  90 => 24,  81 => 18,  77 => 17,  73 => 15,  71 => 14,  68 => 13,  62 => 11,  59 => 10,  57 => 9,  52 => 8,  49 => 7,  46 => 6,  40 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.messages|length %}
        {% set icon %}
            {{ include('@WebProfiler/Icon/translation.svg') }}
            {% set status_color = collector.countMissings ? 'red' : collector.countFallbacks ? 'yellow' %}
            {% set error_count = collector.countMissings + collector.countFallbacks %}
            <span class=\"sf-toolbar-value\">{{ error_count ?: collector.countdefines }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countMissings ? 'red' }}\">
                    {{ collector.countMissings }}
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countFallbacks ? 'yellow' }}\">
                    {{ collector.countFallbacks }}
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">{{ collector.countdefines }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.countMissings ? 'error' : collector.countFallbacks ? 'warning' }} {{ collector.messages is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/translation.svg') }}</span>
        <strong>Translation</strong>
        {% if collector.countMissings or collector.countFallbacks %}
            {% set error_count = collector.countMissings + collector.countFallbacks %}
            <span class=\"count\">
                <span>{{ error_count }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    {% if collector.messages is empty %}
        <h2>Translations</h2>
        <div class=\"empty\">
            <p>No translations have been called.</p>
        </div>
    {% else %}
        {{ block('panelContent') }}
    {% endif %}
{% endblock %}

{% block panelContent %}
    <h2>Translation Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.countdefines }}</span>
            <span class=\"label\">Defined messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.countFallbacks }}</span>
            <span class=\"label\">Fallback messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.countMissings }}</span>
            <span class=\"label\">Missing messages</span>
        </div>
    </div>

    <h2>Translation Messages</h2>

    {# sort translation messages in groups #}
    {% set messages_defined, messages_missing, messages_fallback = [], [], [] %}
    {% for message in collector.messages %}
        {% if message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_DEFINED') %}
            {% set messages_defined = messages_defined|merge([message]) %}
        {% elseif message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_MISSING') %}
            {% set messages_missing = messages_missing|merge([message]) %}
        {% elseif message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK') %}
            {% set messages_fallback = messages_fallback|merge([message]) %}
        {% endif %}
    {% endfor %}

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Defined <span class=\"badge\">{{ messages_defined|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are correctly translated into the given locale.
                </p>

                {% if messages_defined is empty %}
                    <div class=\"empty\">
                        <p>None of the used translation messages are defined for the given locale.</p>
                    </div>
                {% else %}
                    {{ helper.render_table(messages_defined) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Fallback <span class=\"badge\">{{ messages_fallback|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale
                    but Symfony found them in the fallback locale catalog.
                </p>

                {% if messages_fallback is empty %}
                    <div class=\"empty\">
                        <p>No fallback translation messages were used.</p>
                    </div>
                {% else %}
                    {{ helper.render_table(messages_fallback) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Missing <span class=\"badge\">{{ messages_missing|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale and cannot
                    be found in the fallback locales. Add them to the translation
                    catalogue to avoid Symfony outputting untranslated contents.
                </p>

                {% if messages_missing is empty %}
                    <div class=\"empty\">
                        <p>There are no messages of this category.</p>
                    </div>
                {% else %}
                    {{ helper.render_table(messages_missing) }}
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}

{% macro render_table(messages) %}
    <table>
        <thead>
            <tr>
                <th>Locale</th>
                <th>Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        {% for message in messages %}
            <tr>
                <td class=\"font-normal text-small\">{{ message.locale }}</td>
                <td class=\"font-normal text-small text-bold\">{{ message.domain }}</td>
                <td class=\"font-normal text-small\">{{ message.count }}</td>
                <td>
                    {{ message.id }}

                    {% if message.transChoiceNumber is not null %}
                        <small class=\"newline\">(pluralization is used)</small>
                    {% endif %}

                    {% if message.parameters|length > 0 %}
                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-{{ loop.index }}\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-{{ loop.index }}\" class=\"hidden\">
                            {% for parameters in message.parameters %}
                                {{ profiler_dump(parameters) }}
                                {% if not loop.last %}<br />{% endif %}
                            {% endfor %}
                        </div>
                    {% endif %}
                </td>
                <td>{{ message.translation }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
<<<<<<< HEAD
", "WebProfilerBundle:Collector:translation.html.twig", "/home/wilder4/Documents/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/translation.html.twig");
=======
", "WebProfilerBundle:Collector:translation.html.twig", "/home/wilder6/Documents/Hackathons/Agrickathon_2016/orleans-agrickathon-equipe6/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/translation.html.twig");
>>>>>>> ee4a6d11689aea337e288d2be1214cc6452a2d3c
    }
}
