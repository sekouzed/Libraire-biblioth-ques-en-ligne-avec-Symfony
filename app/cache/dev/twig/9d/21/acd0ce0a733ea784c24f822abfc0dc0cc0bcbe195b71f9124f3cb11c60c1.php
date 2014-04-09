<?php

/* LsiBiblioBundle:Livre:index.html.twig */
class __TwigTemplate_9d21acd0ce0a733ea784c24f822abfc0dc0cc0bcbe195b71f9124f3cb11c60c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LsiBiblioBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'menu_accueil' => array($this, 'block_menu_accueil'),
            'recent_projects' => array($this, 'block_recent_projects'),
            'column_w610' => array($this, 'block_column_w610'),
            'column_w290' => array($this, 'block_column_w290'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/css/featured_slide.css"), "html", null, true);
        echo "\" type=\"text/css\"media=\"all\" /> 
";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/js/jquery-1.4.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/js/jquery.waterwheelCarousel.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/js/jquery.waterwheelCarousel.setup.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 14
    public function block_menu_accueil($context, array $blocks = array())
    {
        // line 15
        echo "\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("lien_livre");
        echo "\" class=\"current\">Accueil</a>
";
    }

    // line 18
    public function block_recent_projects($context, array $blocks = array())
    {
        echo "  
\t<div class=\"project_slideshow\"> 
\t\t<script>
\t\t\t\$(document).ready(function () {
\t\t\t  \$(\"#waterwheelCarousel\").waterwheelCarousel(\"horizontal\",{ 
\t\t\t\t  startingItem: 6
\t\t\t  });
\t\t\t});
\t\t</script>
\t\t<div id=\"waterwheelCarousel\">
\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/thumbnails/a (1).jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"180\" height=\"200\"/>
\t\t\t<img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/thumbnails/a (2).jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"180\" height=\"200\" />
\t\t\t<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/thumbnails/a (3).jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"180\" height=\"200\" />
\t\t\t<img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/thumbnails/a (4).jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"180\" height=\"200\" />
\t\t\t<img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/thumbnails/a (5).jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"180\" height=\"200\" />
\t\t\t<img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/thumbnails/a (6).jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"180\" height=\"200\" />
\t\t\t<img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/thumbnails/a (7).jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"180\" height=\"200\" />
\t\t\t<img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/thumbnails/a (8).jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"180\" height=\"200\" />
\t\t\t<img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/thumbnails/a (9).jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"180\" height=\"200\" />
\t\t\t<img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/thumbnails/a (10).jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"180\" height=\"200\" />
\t\t\t<img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/thumbnails/a (11).jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"180\" height=\"200\" />
\t\t</div>  
   </div>  
\t<div class=\"project_content\"> 
\t\t<div class=\"header_03\">Trouver un livre</div> 
            <form class=\"formulaire\" action=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("lien_livre_find");
        echo "\" method=\"post\"> 
\t\t\t\t<label>Quel livre vous cherchez?</label>
\t\t\t\t<input type=\"text\" name=\"titre_find\" placeholder=\"nom du livre\" value=\"\"/>  
\t\t\t\t<label>Auteur</label> 
\t\t\t\t<input type=\"text\" name=\"auteur_find\" placeholder=\"nom de l'auteur\" value=\"\"/>
\t\t\t\t<label>Cherchez dans</label>
\t\t\t\t<select name=\"collection_find\">
\t\t\t\t    <option value=\"\">Toutes les collections</option>
\t               ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collections"]) ? $context["collections"] : $this->getContext($context, "collections")));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 52
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
        // line 54
        echo "\t\t\t\t</select>
\t\t\t\t<input type=\"submit\" value=\"Chercher\" class=\"button_01 float_r\"/> 
\t\t\t</form> 
\t</div>
\t
";
    }

    // line 61
    public function block_column_w610($context, array $blocks = array())
    {
        echo " 
\t";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collections"]) ? $context["collections"] : $this->getContext($context, "collections")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 63
            echo "\t  <div class=\"vitrine\">
\t\t\t<div class=\"titre\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "nom"), "html", null, true);
            echo "   
\t\t\t\t<a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_collection_show", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "getSlug"))), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 66
            if ($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "morelivres")) {
                echo " 
\t\t\t\t\t\t( ";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "morelivres"), "html", null, true);
                echo " livres )
\t\t\t\t";
            }
            // line 68
            echo "</a> 
\t\t\t</div>
\t\t";
            // line 70
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activelivres"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 71
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_livre_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "collection" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCollectionSlug"), "auteur" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getAuteurSlug"), "titre" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getTitreSlug"))), "html", null, true);
                echo "\">
\t\t\t\t<img src=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/lsibiblio/images/thumbnails/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "couverture"))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "resume"), "html", null, true);
                echo "\"/> 
\t\t\t</a>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t\t</div>    
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo " 
            \t\t\t\t
";
    }

    // line 82
    public function block_column_w290($context, array $blocks = array())
    {
        echo " 
 
\t<div class=\"header_02\">les plus recents</div> 
                                
    ";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livres_recents"]) ? $context["livres_recents"] : $this->getContext($context, "livres_recents")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo " 
    \t<div class=\"news_section\">
        \t<div class=\"news_img\">
\t\t\t\t<img src=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/lsibiblio/images/thumbnails/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "couverture"))), "html", null, true);
            echo "\" />
            </div>
            <div class=\"news_content\">
            \t<div class=\"header_05\">
                    <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_livre_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "collection" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCollectionSlug"), "auteur" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getAuteurSlug"), "titre" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getTitreSlug"))), "html", null, true);
            echo "\">
                        ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "
                    </a>
                </div>
                <p>";
            // line 97
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "resume")), 0, 60), "html", null, true);
            echo " ...</p>
                <b>poster le ";
            // line 98
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateAjout"), "d-m-Y"), "html", null, true);
            echo "</b> 
            </div> 
            <div class=\"cleaner\"></div>
        </div>                                 
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo " 
                                                                                                                             
\t<div class=\"header_02\">les plus populaires</div>  
        
    ";
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livres_populaire"]) ? $context["livres_populaire"] : $this->getContext($context, "livres_populaire")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo " 
    \t<div class=\"news_section\">
        \t<div class=\"news_img\">
\t\t\t\t<img src=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/lsibiblio/images/thumbnails/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "couverture"))), "html", null, true);
            echo "\" />
            </div>
            <div class=\"news_content\">
            \t<div class=\"header_05\">
                    <a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_livre_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "collection" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCollectionSlug"), "auteur" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getAuteurSlug"), "titre" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getTitreSlug"))), "html", null, true);
            echo "\">
                        ";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "
                    </a>
                </div> 
                <p>";
            // line 117
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "resume")), 0, 60), "html", null, true);
            echo " ...</p>
                <b>Vue : ";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreDeVue"), "html", null, true);
            echo " fois</b>
            </div> 
            <div class=\"cleaner\"></div>
        </div> 
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "  
\t
";
    }

    public function getTemplateName()
    {
        return "LsiBiblioBundle:Livre:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 123,  325 => 118,  321 => 117,  315 => 114,  311 => 113,  304 => 109,  296 => 106,  290 => 102,  279 => 98,  275 => 97,  269 => 94,  265 => 93,  258 => 89,  250 => 86,  242 => 82,  236 => 76,  229 => 75,  214 => 72,  209 => 71,  205 => 70,  201 => 68,  196 => 67,  192 => 66,  188 => 65,  184 => 64,  181 => 63,  177 => 62,  172 => 61,  163 => 54,  152 => 52,  148 => 51,  137 => 43,  129 => 38,  125 => 37,  121 => 36,  117 => 35,  113 => 34,  109 => 33,  105 => 32,  101 => 31,  97 => 30,  93 => 29,  89 => 28,  75 => 18,  68 => 15,  65 => 14,  59 => 11,  55 => 10,  50 => 9,  47 => 8,  41 => 5,  36 => 4,  33 => 3,);
    }
}
