<?php

/* LsiBiblioBundle:Collection:show.html.twig */
class __TwigTemplate_7af56a686ac73d9cc876814e4544e1346ad5c188b754b9fbff43e9f58a2b7ece extends Twig_Template
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
        echo "\tCollection: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")), "nom"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_menu_suite($context, array $blocks = array())
    {
        // line 8
        echo "\t<a href=\"\" class=\"current\">Collection</a>
";
    }

    // line 11
    public function block_column_w610($context, array $blocks = array())
    {
        // line 12
        echo "\t<div class=\"header_01\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")), "nom"), "html", null, true);
        echo "</div>
\t
\t";
        // line 14
        $this->env->loadTemplate("LsiBiblioBundle::list.html.twig")->display(array_merge($context, array("livres" => $this->getAttribute((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")), "activelivres"))));
        // line 15
        echo "
\t";
        // line 16
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 17
            echo "\t<div class=\"pagination\">
\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_collection_show", array("id" => $this->getAttribute((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")), "id"), "slug" => $this->getAttribute((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")), "getSlug"), "page" => 1)), "html", null, true);
            echo "\">
\t<img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/first.png"), "html", null, true);
            echo "\" alt=\"First page\" title=\"First page\" />
\t</a>
\t<a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_collection_show", array("id" => $this->getAttribute((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")), "id"), "slug" => $this->getAttribute((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")), "getSlug"), "page" => (isset($context["previous_page"]) ? $context["previous_page"] : $this->getContext($context, "previous_page")))), "html", null, true);
            echo "\">
\t<img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/previous.png"), "html", null, true);
            echo "\" alt=\"Previous page\" title=\"Previous page\" />
\t</a>
\t";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page"))));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 25
                echo "\t";
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")))) {
                    // line 26
                    echo "\t";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "
\t";
                } else {
                    // line 28
                    echo "\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_collection_show", array("id" => $this->getAttribute((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")), "id"), "slug" => $this->getAttribute((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")), "getSlug"), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a>
\t";
                }
                // line 30
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_collection_show", array("id" => $this->getAttribute((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")), "id"), "slug" => $this->getAttribute((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")), "getSlug"), "page" => (isset($context["next_page"]) ? $context["next_page"] : $this->getContext($context, "next_page")))), "html", null, true);
            echo "\">
\t<img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/next.png"), "html", null, true);
            echo "\" alt=\"Next page\" title=\"Next page\" />
\t</a>
\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_collection_show", array("id" => $this->getAttribute((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")), "id"), "slug" => $this->getAttribute((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")), "getSlug"), "page" => (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")))), "html", null, true);
            echo "\">
\t<img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/last.png"), "html", null, true);
            echo "\" alt=\"Last page\" title=\"Last page\" />
\t</a>
\t</div>
\t";
        }
        // line 39
        echo "\t<div class=\"pagination_desc\">
\t<strong>";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["total_livres"]) ? $context["total_livres"] : $this->getContext($context, "total_livres")), "html", null, true);
        echo "</strong> livres dans cette collection
\t";
        // line 41
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 42
            echo "\t- page <strong>";
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")), "html", null, true);
            echo "</strong>
\t";
        }
        // line 44
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "LsiBiblioBundle:Collection:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 44,  142 => 42,  140 => 41,  136 => 40,  133 => 39,  126 => 35,  122 => 34,  117 => 32,  112 => 31,  106 => 30,  98 => 28,  92 => 26,  89 => 25,  85 => 24,  80 => 22,  76 => 21,  71 => 19,  67 => 18,  64 => 17,  62 => 16,  59 => 15,  57 => 14,  51 => 12,  48 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
