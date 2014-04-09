<?php

/* LsiBiblioBundle:Livre:read.html.twig */
class __TwigTemplate_06e270753abcab89c5f76df2f4919be08f40008265fe1a8988d6cd0c385aa5a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LsiBiblioBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu_suite' => array($this, 'block_menu_suite'),
            'tempatemo_content_wrapper' => array($this, 'block_tempatemo_content_wrapper'),
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
        echo "\t<a href=\"\" class=\"current\">Lecture</a>
";
    }

    // line 11
    public function block_tempatemo_content_wrapper($context, array $blocks = array())
    {
        // line 13
        echo "<!--<object type=\"application/x-shockwave-flash\"data=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/p (7).swf"), "html", null, true);
        echo "\" width=\"100%\" height=\"1000\">
      <object data=\"\" type=\"application/pdf\" width=\"100%\" height=\"1000\">
             </object>                       -->
<object width=\"595\" height=\"842\" style=\"margin: auto;\">
  <param name=\"MOVIE\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/swf/p7.swf"), "html", null, true);
        echo "\">
  <param name=\"PLAY\" value=\"true\">
  <param name=\"LOOP\" value=\"true\">
  <param name=\"QUALITY\" value=\"high\">
  <embed src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/swf/p7.swf"), "html", null, true);
        echo "\" width=\"595\" height=\"842\"
   play=\"true\" align=\"\" loop=\"true\" quality=\"high\"
   TYPE=\"application/x-shockwave-flash\"
   PLUGINSPAGE=\"[[[http://www.macromedia.com/go/getflashplay]e]r]\">
  </embed>
</object>

<div class=\"formulaire\">
    ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["avis_form"]) ? $context["avis_form"] : $this->getContext($context, "avis_form")), 'form');
        echo "
</div>
  
";
    }

    public function getTemplateName()
    {
        return "LsiBiblioBundle:Livre:read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 29,  66 => 21,  59 => 17,  51 => 13,  48 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
