<?php

/* LsiBiblioBundle:AvisUserLivre:new.html.twig */
class __TwigTemplate_5d53cea2ee2f16520271010ff5670a94939dc430d351746bceb4e3f411921c31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LsiBiblioBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_column_w610($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"header_01\">Votre avis</div> 

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

       
";
    }

    public function getTemplateName()
    {
        return "LsiBiblioBundle:AvisUserLivre:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,);
    }
}
