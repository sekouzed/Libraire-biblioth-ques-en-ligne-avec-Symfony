<?php

/* LsiBiblioBundle:Livre:all.html.twig */
class __TwigTemplate_3763733fb27f495ec0b818407605cc4681862f49276877989d03654b26057747 extends Twig_Template
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
        echo "\tEdition du livre
";
    }

    // line 8
    public function block_menu_suite($context, array $blocks = array())
    {
        // line 9
        echo "\t<a href=\"\" class=\"current\">Utilisateurs</a>
";
    }

    // line 12
    public function block_column_w610($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"header_01\">Liste des utilisateurs</div>  

\t\t<div class=\"col_titre\">
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("lien_livre_new");
        echo "\">Ajouter un livre</a>
\t\t</div> 
    <table class=\"tab_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Couverture</th> 
                <th>Titre</th>
                <th>Auteur</th>  
                <th>Vue</th>
                <th>Enligne</th>
                <th>Ajout</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list_livres"]) ? $context["list_livres"] : $this->getContext($context, "list_livres")));
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
            // line 33
            echo "\t\t\t<tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index")), "html", null, true);
            echo "\">
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
\t\t<td class=\"col_couverture\"> 
\t\t\t<img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/lsibiblio/images/thumbnails/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "couverture"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "\"/>
\t\t</td>
                <td class=\"col_couverture\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "auteur"), "html", null, true);
            echo "</td>  
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreDeVue"), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enLigne"), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateAjout")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateAjout"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                <ul class=\"col_titre\">
                    <li>
                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_livre_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "collection" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCollectionSlug"), "auteur" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getAuteurSlug"), "titre" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getTitreSlug"))), "html", null, true);
            echo "\">voir</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_livre_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>

\t";
        // line 58
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 59
            echo "\t<div class=\"pagination\">
\t<a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("lien_livre_all", array("page" => 1));
            echo "\">
\t<img src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/first.png"), "html", null, true);
            echo "\" alt=\"First page\" title=\"First page\" />
\t</a>
\t<a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_livre_all", array("page" => (isset($context["previous_page"]) ? $context["previous_page"] : $this->getContext($context, "previous_page")))), "html", null, true);
            echo "\">
\t<img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/previous.png"), "html", null, true);
            echo "\" alt=\"Previous page\" title=\"Previous page\" />
\t</a>
\t";
            // line 66
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page"))));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 67
                echo "\t";
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")))) {
                    // line 68
                    echo "\t";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "
\t";
                } else {
                    // line 70
                    echo "\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_livre_all", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a>
\t";
                }
                // line 72
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_livre_all", array("page" => (isset($context["next_page"]) ? $context["next_page"] : $this->getContext($context, "next_page")))), "html", null, true);
            echo "\">
\t<img src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/next.png"), "html", null, true);
            echo "\" alt=\"Next page\" title=\"Next page\" />
\t</a>
\t<a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_livre_all", array("page" => (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")))), "html", null, true);
            echo "\">
\t<img src=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/last.png"), "html", null, true);
            echo "\" alt=\"Last page\" title=\"Last page\" />
\t</a>
\t</div>
\t";
        }
        // line 81
        echo "\t<div class=\"pagination_desc\">
\t<strong>";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["total_livres"]) ? $context["total_livres"] : $this->getContext($context, "total_livres")), "html", null, true);
        echo "</strong> livres dans le catalogue
\t";
        // line 83
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 84
            echo "\t- page <strong>";
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")), "html", null, true);
            echo "</strong>
\t";
        }
        // line 86
        echo "\t</div> 
 ";
    }

    public function getTemplateName()
    {
        return "LsiBiblioBundle:Livre:all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 86,  243 => 84,  241 => 83,  237 => 82,  234 => 81,  227 => 77,  223 => 76,  218 => 74,  213 => 73,  207 => 72,  199 => 70,  193 => 68,  190 => 67,  186 => 66,  181 => 64,  177 => 63,  172 => 61,  168 => 60,  165 => 59,  163 => 58,  158 => 55,  138 => 49,  132 => 46,  123 => 42,  119 => 41,  115 => 40,  111 => 39,  107 => 38,  100 => 36,  95 => 34,  90 => 33,  73 => 32,  54 => 16,  49 => 13,  46 => 12,  41 => 9,  38 => 8,  33 => 4,  30 => 3,);
    }
}
