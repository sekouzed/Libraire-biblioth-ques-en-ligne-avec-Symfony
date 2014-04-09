<?php

/* LsiBiblioBundle:AvisUserLivre:show.html.twig */
class __TwigTemplate_2dcf45aca9be411fdc0987d12076670b6c066e611216fd14bb12e07a83f432ad extends Twig_Template
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
        echo "\tAvis d'utilisateur
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
        echo "\t<div class=\"header_01\">Avis d'utilisateur</div> 

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lecture</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lecture"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "note"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Commentaire</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commentaire"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateajout</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateAjout"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li class=\"col_titre\">
        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("lien_avis");
        echo "\">
            Retour a la liste
        </a>
    </li>
    <li class=\"col_titre\">
        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_avis_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Modifier
        </a>
    </li>
    <li>";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "LsiBiblioBundle:AvisUserLivre:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 50,  103 => 46,  95 => 41,  85 => 34,  78 => 30,  71 => 26,  64 => 22,  57 => 18,  49 => 12,  46 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
