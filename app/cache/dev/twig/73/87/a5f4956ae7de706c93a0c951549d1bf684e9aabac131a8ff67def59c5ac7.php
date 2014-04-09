<?php

/* LsiBiblioBundle:Livre:showFind.html.twig */
class __TwigTemplate_7387a5f4956ae7de706c93a0c951549d1bf684e9aabac131a8ff67def59c5ac7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LsiBiblioBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu_catalogue' => array($this, 'block_menu_catalogue'),
            'recent_projects' => array($this, 'block_recent_projects'),
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
        echo "\tCatalogue
";
    }

    // line 8
    public function block_menu_catalogue($context, array $blocks = array())
    {
        // line 9
        echo "\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("lien_livre_show_all");
        echo "\" class=\"current\">Le catalogue</a>
";
    }

    // line 12
    public function block_recent_projects($context, array $blocks = array())
    {
        // line 13
        echo "\t<div class=\"mode_chercher\">
\t\t<form class=\"formulaire\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("lien_livre_find");
        echo "\" method=\"post\"> 
\t\t\t\t<input type=\"text\" name=\"titre_find\" placeholder=\"nom du livre\" value=\"\"/>  
\t\t\t\t<input type=\"text\" name=\"auteur_find\" placeholder=\"nom de l'auteur\" value=\"\"/>
\t\t\t\t<select name=\"collection_find\">
\t\t\t\t    <option value=\"\">Toutes les collections</option>
\t               ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_collection"]) ? $context["liste_collection"] : $this->getContext($context, "liste_collection")));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 20
            echo "\t\t\t\t        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["col"]) ? $context["col"] : $this->getContext($context, "col")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["col"]) ? $context["col"] : $this->getContext($context, "col")), "nom"), "html", null, true);
            echo "</option>
\t               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t\t</select>  
\t\t\t\t<input type=\"submit\" value=\"OK\" class=\"button_01\"/> 
\t\t\t</form> 
\t</div>
";
    }

    // line 28
    public function block_column_w610($context, array $blocks = array())
    {
        // line 29
        echo "\t<div class=\"header_01\">";
        echo twig_escape_filter($this->env, (isset($context["total_livres"]) ? $context["total_livres"] : $this->getContext($context, "total_livres")), "html", null, true);
        echo " livres trouves</div>
\t 
\t";
        // line 31
        $this->env->loadTemplate("LsiBiblioBundle::list.html.twig")->display(array_merge($context, array("livres" => (isset($context["list_livres"]) ? $context["list_livres"] : $this->getContext($context, "list_livres")))));
        // line 32
        echo " 
\t 
";
    }

    public function getTemplateName()
    {
        return "LsiBiblioBundle:Livre:showFind.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 32,  95 => 31,  89 => 29,  86 => 28,  78 => 22,  67 => 20,  63 => 19,  55 => 14,  52 => 13,  49 => 12,  42 => 9,  39 => 8,  34 => 4,  31 => 3,);
    }
}
