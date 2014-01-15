<?php

/* EnsJobeetBundle:Default:up.html.twig */
class __TwigTemplate_5b5dfe8445ff4f9aab782ab106f46ae478aeb99af6ecbe85c83681a5fb057652 extends Twig_Template
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
        echo "

  
<h1>Upload File</h1>

<form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_jobeet_up"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" value=\"Upload Document\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Default:up.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  26 => 6,  19 => 1,);
    }
}
