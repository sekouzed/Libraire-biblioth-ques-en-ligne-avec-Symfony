<?php

/* LsiBiblioBundle:Livre:show.html.twig */
class __TwigTemplate_a8aa29e87dd7b74a063be2386cf14bcb393b3527810962bd65e9a990350ed1f8 extends Twig_Template
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
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_menu_suite($context, array $blocks = array())
    {
        // line 8
        echo "\t<a href=\"\" class=\"current\">Livre</a>
";
    }

    // line 11
    public function block_column_w610($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"header_01 col_titre\">
\t\t<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_livre_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "collection" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCollectionSlug"), "auteur" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getAuteurSlug"), "titre" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getTitreSlug"))), "html", null, true);
        echo "\">
        ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
        echo "</a>
\t</div> 
    <table class=\"record_properties\">
        <tbody> 
            <tr>
                <td></td>
                <td><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/lsibiblio/images/thumbnails/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "couverture"))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
        echo "\"/></td>
            </tr>
            <tr>
                <td>Auteur</td>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "auteur"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Edition</td>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "edition"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Date d'edition</td>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEdition"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Ou acheter ce livre?</td>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lienAchat"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Nombre de vue</td>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreDeVue"), "html", null, true);
        echo "</td>
            </tr> 
                <td>Ajouter le</td>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateAjout"), "d-m-Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Resume</td>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "resume"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
<hr />
\t<div class=\"record_actions col_titre\">    
\t\t<a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/lsibiblio/swf/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "support"))), "html", null, true);
        echo "\" target=\"_blank\">
        Lire ce livre</a> 
\t </div>
     <hr />
<span class='st_facebook_hcount' displayText='Facebook'></span>
<span class='st_twitter_hcount' displayText='Tweet'></span>
<span class='st_googleplus_hcount' displayText='Google +'></span>
<span class='st_linkedin_hcount' displayText='LinkedIn'></span>
<span class='st_email_hcount' displayText='Email'></span>
<hr />
<div class=\"formulaire\">
    ";
        // line 64
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["avis_form"]) ? $context["avis_form"] : $this->getContext($context, "avis_form")), 'form');
        echo "
</div>
  
";
    }

    public function getTemplateName()
    {
        return "LsiBiblioBundle:Livre:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 64,  126 => 53,  117 => 47,  110 => 43,  104 => 40,  97 => 36,  90 => 32,  83 => 28,  76 => 24,  67 => 20,  58 => 14,  54 => 13,  51 => 12,  48 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
