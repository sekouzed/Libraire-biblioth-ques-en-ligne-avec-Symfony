<?php

/* LsiBiblioBundle:User:edit.html.twig */
class __TwigTemplate_d3d3067fe09261c6b04f75b9947087733fbdf313819f6c41031e6542bff19500 extends Twig_Template
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
        echo "<div class=\"header_01\">Mise a jours de l'utilisateur</div>  

    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("lien_user");
        echo "\">
           Retourn a la liste
        </a>
    </li>
    <li>";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "LsiBiblioBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 23,  60 => 19,  53 => 15,  49 => 13,  46 => 12,  41 => 9,  38 => 8,  33 => 4,  30 => 3,);
    }
}
