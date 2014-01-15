<?php

/* AcmeDemoBundle:Secured:login.html.twig */
class __TwigTemplate_caa66f9cf3c013bdfd22c3364b612d3e001a7cdd687c03a0668e5de5130b2aab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 35
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 class=\"title\">Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_check"), "html", null, true);
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">Login</span>
                </span>
            </span>
        </button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  110 => 22,  76 => 17,  181 => 81,  178 => 80,  170 => 77,  167 => 76,  165 => 75,  148 => 69,  137 => 65,  113 => 55,  104 => 51,  90 => 32,  58 => 17,  53 => 11,  188 => 88,  155 => 75,  152 => 74,  129 => 64,  126 => 63,  124 => 62,  97 => 52,  84 => 29,  81 => 47,  114 => 59,  100 => 33,  65 => 35,  34 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 12,  38 => 6,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 84,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 17,  71 => 19,  67 => 15,  63 => 34,  59 => 13,  94 => 34,  89 => 28,  85 => 25,  75 => 43,  68 => 36,  56 => 11,  87 => 49,  21 => 2,  26 => 9,  93 => 47,  88 => 31,  78 => 26,  46 => 8,  27 => 5,  44 => 26,  31 => 3,  28 => 3,  196 => 90,  183 => 82,  171 => 81,  166 => 79,  163 => 78,  158 => 67,  156 => 66,  151 => 70,  142 => 59,  138 => 69,  136 => 56,  121 => 61,  117 => 19,  105 => 18,  91 => 50,  62 => 19,  49 => 13,  24 => 18,  25 => 35,  19 => 16,  79 => 25,  72 => 16,  69 => 40,  47 => 8,  40 => 6,  37 => 5,  22 => 17,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 61,  123 => 58,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 32,  98 => 31,  96 => 48,  83 => 44,  74 => 39,  66 => 39,  55 => 31,  52 => 14,  50 => 29,  43 => 11,  41 => 10,  35 => 5,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 64,  173 => 65,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 49,  141 => 70,  133 => 55,  130 => 41,  125 => 59,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 34,  99 => 31,  95 => 22,  92 => 21,  86 => 45,  82 => 28,  80 => 43,  73 => 16,  64 => 13,  60 => 6,  57 => 12,  54 => 34,  51 => 33,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
