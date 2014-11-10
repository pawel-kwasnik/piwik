<?php

/* @CorePluginsAdmin/browsePlugins.twig */
class __TwigTemplate_370ac7243d2e01197f91305d0e0c8259a745c5ce30b0ec987dad19733122bb41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("admin.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["pluginsMacro"] = $this->env->loadTemplate("@CorePluginsAdmin/macros.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"pluginslistActionBar\">

        <h2 piwik-enriched-headline
            feature-name=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Marketplace")), "html", null, true);
        echo "\"
            >";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_TeaserExtendPiwikByPlugin")), "html", null, true);
        echo "</h2>

        <div class=\"infoBox\">
            ";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_BeCarefulUsingPlugins")), "html", null, true);
        echo "
        </div>

        ";
        // line 16
        $this->env->loadTemplate("@CorePluginsAdmin/browsePluginsActions.twig")->display($context);
        // line 17
        echo "    </div>

    ";
        // line 19
        if ((!(isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser")))) {
            // line 20
            echo "        <div class=\"pluginslistNonSuperUserHint\">
            ";
            // line 21
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_NotAllowedToBrowseMarketplacePlugins")), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 24
        echo "
    <div class=\"pluginslist\">

        ";
        // line 27
        if (twig_length_filter($this->env, (isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")))) {
            // line 28
            echo "
            ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 30
                echo "
                <div class=\"plugin\">
                    <div class=\"content\" data-pluginName=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", array()), "html", null, true);
                echo "\">
                        ";
                // line 33
                $this->env->loadTemplate("@CorePluginsAdmin/pluginOverview.twig")->display($context);
                // line 34
                echo "                    </div>

                    <div class=\"footer\" data-pluginName=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", array()), "html", null, true);
                echo "\">
                        ";
                // line 37
                if ($this->getAttribute($context["plugin"], "featured", array())) {
                    // line 38
                    echo "                            ";
                    echo $context["pluginsMacro"]->getfeaturedIcon("right");
                    echo "
                        ";
                }
                // line 40
                echo "                        ";
                $this->env->loadTemplate("@CorePluginsAdmin/pluginMetadata.twig")->display($context);
                // line 41
                echo "                    </div>
                </div>

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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
        ";
        } else {
            // line 47
            echo "            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_NoPluginsFound")), "html", null, true);
            echo "
        ";
        }
        // line 49
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@CorePluginsAdmin/browsePlugins.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 49,  149 => 47,  145 => 45,  128 => 41,  125 => 40,  119 => 38,  117 => 37,  113 => 36,  109 => 34,  107 => 33,  103 => 32,  99 => 30,  82 => 29,  79 => 28,  77 => 27,  72 => 24,  66 => 21,  63 => 20,  61 => 19,  57 => 17,  55 => 16,  49 => 13,  43 => 10,  39 => 9,  33 => 5,  30 => 4,  25 => 2,);
    }
}
