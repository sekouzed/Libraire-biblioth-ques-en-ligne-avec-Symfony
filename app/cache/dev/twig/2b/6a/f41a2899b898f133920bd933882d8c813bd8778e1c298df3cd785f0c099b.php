<?php

/* LsiBiblioBundle:Livre:new.html.twig */
class __TwigTemplate_2b6af41a2899b898f133920bd933882d8c813bd8778e1c298df3cd785f0c099b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LsiBiblioBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'templatemo_menu' => array($this, 'block_templatemo_menu'),
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

    // line 7
    public function block_templatemo_menu($context, array $blocks = array())
    {
        // line 8
        echo "\t<ul>
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("lien_livre");
        echo "\">Accueil</a></li>
\t\t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("lien_livre_show_all");
        echo "\">Le catalogue</a></li> 
\t\t<li><a href=\"\">S'abonnez</a></li>
\t\t<li><a href=\"\" class=\"current last\">Edition</a></li> 
\t</ul>    \t
";
    }

    // line 16
    public function block_column_w610($context, array $blocks = array())
    {
        // line 17
        echo "<div class=\"header_01\">Nouveau du livre</div> 

    ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
    }

    public function getTemplateName()
    {
        return "LsiBiblioBundle:Livre:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  60 => 17,  57 => 16,  48 => 10,  44 => 9,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
