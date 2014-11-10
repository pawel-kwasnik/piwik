<?php

/* @VisitorGenerator/generate.twig */
class __TwigTemplate_ac74956e215fffe00f17b01dd8dd34fd60e26603e50e1d759796ddfc7f034530 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorGenerator_VisitorGenerator")), "html", null, true);
        echo "</h2>

    ";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorGenerator_GeneratedVisitsFor", (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName")), (isset($context["days"]) ? $context["days"] : $this->getContext($context, "days")))), "html", null, true);
        echo "<br/>
    ";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorGenerator_NumberOfGeneratedActions")), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["nbActionsTotal"]) ? $context["nbActionsTotal"] : $this->getContext($context, "nbActionsTotal")), "html", null, true);
        echo "<br/>
    ";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorGenerator_NbRequestsPerSec")), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["nbRequestsPerSec"]) ? $context["nbRequestsPerSec"] : $this->getContext($context, "nbRequestsPerSec")), "html", null, true);
        echo "<br/>
    ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["timer"]) ? $context["timer"] : $this->getContext($context, "timer")), "html", null, true);
        echo "<br/>
    <p><strong>
            ";
        // line 11
        if ((isset($context["browserArchivingEnabled"]) ? $context["browserArchivingEnabled"] : $this->getContext($context, "browserArchivingEnabled"))) {
            // line 12
            echo "                ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorGenerator_AutomaticReprocess")), "html", null, true);
            echo "
            ";
        } else {
            // line 14
            echo "                ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorGenerator_ReRunArchiveScript", "<a href=\"http://piwik.org/docs/setup-auto-archiving/\">", "</a>"));
            echo "
            ";
        }
        // line 16
        echo "        </strong>
    </p>
";
    }

    public function getTemplateName()
    {
        return "@VisitorGenerator/generate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  66 => 14,  60 => 12,  58 => 11,  53 => 9,  47 => 8,  41 => 7,  37 => 6,  31 => 4,  28 => 3,);
    }
}
