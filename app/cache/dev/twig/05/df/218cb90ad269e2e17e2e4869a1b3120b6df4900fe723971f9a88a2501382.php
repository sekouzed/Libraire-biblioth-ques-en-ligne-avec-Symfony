<?php

/* LsiBiblioBundle:User:new.html.twig */
class __TwigTemplate_05df218cb90ad269e2e17e2e4869a1b3120b6df4900fe723971f9a88a2501382 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LsiBiblioBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu_abonnee' => array($this, 'block_menu_abonnee'),
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
        echo "\tNouvel abonnement
";
    }

    // line 7
    public function block_menu_abonnee($context, array $blocks = array())
    {
        echo " 
    <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("lien_user_new");
        echo "\" class=\"current\">S'abonnez</a>
";
    }

    // line 11
    public function block_column_w610($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"header_01\">Nouvel abonnement</div>    

    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
 
";
    }

    public function getTemplateName()
    {
        return "LsiBiblioBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  52 => 12,  49 => 11,  43 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
