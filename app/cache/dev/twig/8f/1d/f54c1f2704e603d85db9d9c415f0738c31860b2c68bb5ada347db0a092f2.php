<?php

/* EnsJobeetBundle:Default:list.html.twig */
class __TwigTemplate_8f1df54c1f2704e603d85db9d9c415f0738c31860b2c68bb5ada347db0a092f2 extends Twig_Template
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
        // line 2
        echo "
<table>
<tr>
";
        // line 6
        echo "    <th>";
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Id", "a.id");
        echo "</th>
    
    <th";
        // line 8
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.name"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "name", "a.name");
        echo "</th>
    <th>";
        // line 9
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "File", "a.file");
        echo "</th>
</tr>

";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 14
            echo "<tr ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
    <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
            echo "</td>
    <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "name"), "html", null, true);
            echo "</td>
    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "file"), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</table>
";
        // line 22
        echo "<div class=\"navigation\">
    ";
        // line 23
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 23,  96 => 22,  93 => 20,  76 => 17,  72 => 16,  68 => 15,  61 => 14,  44 => 13,  38 => 9,  30 => 8,  24 => 6,  19 => 2,);
    }
}
