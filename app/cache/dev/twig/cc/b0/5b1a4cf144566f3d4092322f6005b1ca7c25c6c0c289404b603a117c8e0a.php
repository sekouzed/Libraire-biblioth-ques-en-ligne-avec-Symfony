<?php

/* LsiBiblioBundle:AvisUserLivre:edit.html.twig */
class __TwigTemplate_ccb05b1a4cf144566f3d4092322f6005b1ca7c25c6c0c289404b603a117c8e0a extends Twig_Template
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

    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("lien_avis");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "LsiBiblioBundle:AvisUserLivre:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 22,  60 => 18,  53 => 14,  49 => 12,  46 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
