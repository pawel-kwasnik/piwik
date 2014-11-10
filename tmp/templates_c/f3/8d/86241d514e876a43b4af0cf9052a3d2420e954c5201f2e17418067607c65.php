<?php

/* @VisitorGenerator/index.twig */
class __TwigTemplate_f38d86241d514e876a43b4af0cf9052a3d2420e954c5201f2e17418067607c65 extends Twig_Template
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
    <p>";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorGenerator_PluginDescription")), "html", null, true);
        echo "</p>
    <div id=\"advancedUsageInfo\" style=\"margin-right: 50px;\">
        ";
        // line 7
        ob_start();
        // line 8
        echo "            ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorGenerator_CliToolUsage", "<a target=\"_blank\" href=\"http://developer.piwik.org/guides/piwik-on-the-command-line\">", "</a>"));
        echo "
            <br />
            <br />
            ";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorGenerator_OverwriteLogFiles", (isset($context["accessLogPath"]) ? $context["accessLogPath"] : $this->getContext($context, "accessLogPath")))), "html", null, true);
        echo "
        ";
        $context["advancedUsageInfo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "    </div>
    ";
        // line 14
        echo call_user_func_array($this->env->getFilter('notification')->getCallable(), array((isset($context["advancedUsageInfo"]) ? $context["advancedUsageInfo"] : $this->getContext($context, "advancedUsageInfo")), array("noclear" => true, "raw" => true, "context" => "info", "placeat" => "#advancedUsageInfo")));
        echo "

    <form method=\"POST\" action=\"";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "VisitorGenerator", "action" => "generate"))), "html", null, true);
        echo "\">
        <table class=\"adminTable\" style=\"width: 600px;\">
            <tr>
                <td><label for=\"idSite\">";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ChooseWebsite")), "html", null, true);
        echo "</label></td>
                <td>
                    <div piwik-siteselector
                         class=\"sites_autocomplete\"
                         show-selected-site=\"true\"
                         switch-site-on-select=\"false\"
                         name=\"idSite\"></div>
                </td>
            </tr>
            <tr>
                <td><label for=\"daysToCompute\">";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorGenerator_DaysToCompute")), "html", null, true);
        echo "</label></td>
                <td><input type=\"text\" value=\"1\" name=\"daysToCompute\"/></td>
            </tr>
        </table>

        <p><strong>";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorGenerator_GenerateFakeActions", (isset($context["countMinActionsPerRun"]) ? $context["countMinActionsPerRun"] : $this->getContext($context, "countMinActionsPerRun")))), "html", null, true);
        echo "</strong><br/></p>

        ";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorGenerator_AreYouSure")), "html", null, true);
        echo "<br/><br/>

        <div id=\"warning\" style=\"margin-right: 50px;\"></div>
        ";
        // line 39
        ob_start();
        // line 40
        echo "        ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorGenerator_Warning")), "html", null, true);
        echo "
        <br/>
        <br/>
        ";
        // line 43
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorGenerator_NotReversible", "<b>", "</b>"));
        echo "<br/>
        ";
        $context["warningIfSubmit"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 45
        echo "
        <input type=\"checkbox\" name=\"choice\" id=\"choice\" value=\"yes\"/> <label for=\"choice\">";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorGenerator_ChoiceYes")), "html", null, true);
        echo "</label>
        <br/>
        <input type=\"hidden\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["token_auth"]) ? $context["token_auth"] : $this->getContext($context, "token_auth")), "html", null, true);
        echo "\" name=\"token_auth\"/>
        <input type=\"hidden\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["nonce"]) ? $context["nonce"] : $this->getContext($context, "nonce")), "html", null, true);
        echo "\" name=\"form_nonce\"/>
        <br/>

        ";
        // line 52
        echo call_user_func_array($this->env->getFilter('notification')->getCallable(), array((isset($context["warningIfSubmit"]) ? $context["warningIfSubmit"] : $this->getContext($context, "warningIfSubmit")), array("noclear" => true, "raw" => true, "context" => "warning", "placeat" => "#warning")));
        echo "

        <p>";
        // line 54
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorGenerator_PleaseBePatient")), "html", null, true);
        echo "<br/>
            ";
        // line 55
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorGenerator_LogImporterNote", "<a href=\"https://github.com/piwik/piwik/tree/master/tests#testing-data\">", "</a>"));
        echo "</p>
        <br/>

        <input type=\"submit\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitorGenerator_Submit")), "html", null, true);
        echo "\" name=\"submit\" class=\"submit\"/>
    </form>
";
    }

    public function getTemplateName()
    {
        return "@VisitorGenerator/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 58,  142 => 55,  138 => 54,  133 => 52,  127 => 49,  123 => 48,  118 => 46,  115 => 45,  110 => 43,  103 => 40,  101 => 39,  95 => 36,  90 => 34,  82 => 29,  69 => 19,  63 => 16,  58 => 14,  55 => 13,  50 => 11,  43 => 8,  41 => 7,  36 => 5,  31 => 4,  28 => 3,);
    }
}
