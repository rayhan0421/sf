<?php

/* AcmeDemoBundle:Secured:helloadmin.html.twig */
class __TwigTemplate_432c890d124f409634250d69381ff14a965cfde30457b0b2bb971a0aa6e341be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " secured for Admins only!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:helloadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  110 => 22,  76 => 17,  181 => 81,  178 => 80,  170 => 77,  167 => 76,  165 => 75,  148 => 69,  137 => 65,  113 => 55,  104 => 51,  90 => 32,  58 => 32,  53 => 11,  188 => 88,  155 => 75,  152 => 74,  129 => 64,  126 => 63,  124 => 62,  97 => 52,  84 => 29,  81 => 47,  114 => 59,  100 => 33,  65 => 35,  34 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 12,  38 => 6,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 84,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 17,  71 => 19,  67 => 15,  63 => 34,  59 => 13,  94 => 34,  89 => 28,  85 => 25,  75 => 43,  68 => 36,  56 => 11,  87 => 49,  21 => 2,  26 => 9,  93 => 47,  88 => 31,  78 => 26,  46 => 8,  27 => 5,  44 => 26,  31 => 3,  28 => 3,  196 => 90,  183 => 82,  171 => 81,  166 => 79,  163 => 78,  158 => 67,  156 => 66,  151 => 70,  142 => 59,  138 => 69,  136 => 56,  121 => 61,  117 => 19,  105 => 18,  91 => 50,  62 => 19,  49 => 10,  24 => 18,  25 => 3,  19 => 16,  79 => 25,  72 => 16,  69 => 40,  47 => 8,  40 => 6,  37 => 5,  22 => 17,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 61,  123 => 58,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 32,  98 => 31,  96 => 48,  83 => 44,  74 => 39,  66 => 39,  55 => 31,  52 => 10,  50 => 29,  43 => 7,  41 => 5,  35 => 5,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 64,  173 => 65,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 49,  141 => 70,  133 => 55,  130 => 41,  125 => 59,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 34,  99 => 31,  95 => 22,  92 => 21,  86 => 45,  82 => 28,  80 => 43,  73 => 16,  64 => 13,  60 => 6,  57 => 12,  54 => 34,  51 => 33,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 3,  30 => 3,);
    }
}
