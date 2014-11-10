<?php

/* @CoreHome/getDonateForm.twig */
class __TwigTemplate_8bfbb249635f0c5ae5ef0ef97f0953970560d755fc2ba8361bc029863d07cea0 extends Twig_Template
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
        // line 1
        $this->env->loadTemplate("@CoreHome/_donate.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "@CoreHome/getDonateForm.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
