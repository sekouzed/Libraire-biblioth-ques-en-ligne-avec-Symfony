<?php

/* LsiBiblioBundle:Livre:showAll.html.twig */
class __TwigTemplate_776bc5ab5b55611b3d3e4ec5d085519106cadee5d39194328db3996d13ba742a extends Twig_Template
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
        echo " livres dans le catalogue</div>
\t 
\t";
        // line 31
        $this->env->loadTemplate("LsiBiblioBundle::list.html.twig")->display(array_merge($context, array("livres" => (isset($context["list_livres"]) ? $context["list_livres"] : $this->getContext($context, "list_livres")))));
        // line 32
        echo " 
\t";
        // line 33
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 34
            echo "\t<div class=\"pagination\">
\t<a href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("lien_livre_show_all", array("page" => 1));
            echo "\">
\t<img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/first.png"), "html", null, true);
            echo "\" alt=\"First page\" title=\"First page\" />
\t</a>
\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_livre_show_all", array("page" => (isset($context["previous_page"]) ? $context["previous_page"] : $this->getContext($context, "previous_page")))), "html", null, true);
            echo "\">
\t<img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/previous.png"), "html", null, true);
            echo "\" alt=\"Previous page\" title=\"Previous page\" />
\t</a>
\t";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page"))));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 42
                echo "\t";
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")))) {
                    // line 43
                    echo "\t";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "
\t";
                } else {
                    // line 45
                    echo "\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_livre_show_all", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a>
\t";
                }
                // line 47
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_livre_show_all", array("page" => (isset($context["next_page"]) ? $context["next_page"] : $this->getContext($context, "next_page")))), "html", null, true);
            echo "\">
\t<img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/next.png"), "html", null, true);
            echo "\" alt=\"Next page\" title=\"Next page\" />
\t</a>
\t<a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_livre_show_all", array("page" => (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")))), "html", null, true);
            echo "\">
\t<img src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/last.png"), "html", null, true);
            echo "\" alt=\"Last page\" title=\"Last page\" />
\t</a>
\t</div>
\t";
        }
        // line 56
        echo "\t<div class=\"pagination_desc\">
\t<strong>";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["total_livres"]) ? $context["total_livres"] : $this->getContext($context, "total_livres")), "html", null, true);
        echo "</strong> livres dans le catalogue
\t";
        // line 58
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 59
            echo "\t- page <strong>";
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")), "html", null, true);
            echo "</strong>
\t";
        }
        // line 61
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "LsiBiblioBundle:Livre:showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 61,  180 => 59,  178 => 58,  174 => 57,  171 => 56,  164 => 52,  160 => 51,  155 => 49,  150 => 48,  144 => 47,  136 => 45,  130 => 43,  127 => 42,  123 => 41,  118 => 39,  114 => 38,  109 => 36,  105 => 35,  102 => 34,  100 => 33,  97 => 32,  95 => 31,  89 => 29,  86 => 28,  78 => 22,  67 => 20,  63 => 19,  55 => 14,  52 => 13,  49 => 12,  42 => 9,  39 => 8,  34 => 4,  31 => 3,);
    }
}
