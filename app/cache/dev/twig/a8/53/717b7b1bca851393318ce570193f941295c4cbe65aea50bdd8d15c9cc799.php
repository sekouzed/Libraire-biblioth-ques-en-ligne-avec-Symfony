<?php

/* LsiBiblioBundle:AvisUserLivre:index.html.twig */
class __TwigTemplate_a853717b7b1bca851393318ce570193f941295c4cbe65aea50bdd8d15c9cc799 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LsiBiblioBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu_suite' => array($this, 'block_menu_suite'),
            'column_w610' => array($this, 'block_column_w610'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LsiBiblioBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tLes avis des utilisateur
";
    }

    // line 7
    public function block_menu_suite($context, array $blocks = array())
    {
        // line 8
        echo "\t<a href=\"\" class=\"current\">Avis</a>
";
    }

    // line 11
    public function block_column_w610($context, array $blocks = array())
    {
        // line 12
        echo "\t<div class=\"header_01\">Les avis des utilisateur</div>  

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Lecture</th>
                <th>Note</th>
                <th>Commentaire</th>
                <th>Dateajout</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 27
            echo "            <tr>
                <td class=\"col_titre\"><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_avis_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lecture"), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "note"), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commentaire"), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateAjout")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateAjout"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                <ul>
                    <li class=\"col_titre\">
                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_avis_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">voir</a> 
                    <li class=\"col_titre\">
                    <li class=\"col_titre\">
                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_avis_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Modifier</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>
 
    ";
    }

    public function getTemplateName()
    {
        return "LsiBiblioBundle:AvisUserLivre:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 45,  105 => 39,  99 => 36,  90 => 32,  86 => 31,  82 => 30,  78 => 29,  72 => 28,  69 => 27,  65 => 26,  49 => 12,  46 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
