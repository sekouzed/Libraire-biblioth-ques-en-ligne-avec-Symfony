<?php

/* LsiBiblioBundle::list.html.twig */
class __TwigTemplate_87d93bd026d62033661bdd49f1c37b7e5247dca3e9e0dc2d7d41695865a83607 extends Twig_Template
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
        echo "<table class=\"tab_list\">
\t";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livres"]) ? $context["livres"] : $this->getContext($context, "livres")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 3
            echo "\t<tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index")), "html", null, true);
            echo "\">
\t\t<td class=\"col_couverture\"> 
\t\t\t<img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/lsibiblio/images/thumbnails/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "couverture"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "\"/>
\t\t</td>
\t\t<td class=\"col_titre\">
\t\t\t<a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_livre_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "collection" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCollectionSlug"), "auteur" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getAuteurSlug"), "titre" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getTitreSlug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "</a>
\t\t\t<div>
\t\t\t\t<p>Auteur:";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "auteur"), "html", null, true);
            echo ", Edition:";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEdition"), "m/d/Y"), "html", null, true);
            echo " par ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "edition"), "html", null, true);
            echo "</p>
\t\t\t\t<p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "resume"), "html", null, true);
            echo "</p>
\t\t\t</div>
\t\t</td>
\t</tr>
\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "LsiBiblioBundle::list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  53 => 8,  45 => 5,  39 => 3,  22 => 2,  19 => 1,  161 => 49,  153 => 47,  151 => 46,  147 => 45,  144 => 44,  137 => 40,  133 => 39,  128 => 37,  123 => 36,  117 => 35,  109 => 33,  103 => 31,  100 => 30,  96 => 29,  91 => 27,  87 => 16,  82 => 24,  78 => 23,  75 => 22,  73 => 21,  70 => 20,  68 => 11,  62 => 17,  59 => 16,  50 => 10,  46 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
