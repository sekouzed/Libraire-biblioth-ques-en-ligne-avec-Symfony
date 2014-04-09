<?php

/* LsiBiblioBundle:User:show.html.twig */
class __TwigTemplate_f61053373aabf7f81508c367853c61af01b63e51ac836ce39269b6ccc6db3bc8 extends Twig_Template
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
        echo "\tCompte
";
    }

    // line 7
    public function block_menu_suite($context, array $blocks = array())
    {
        // line 8
        echo "\t<a href=\"\" class=\"current\">Compte</a>
";
    }

    // line 11
    public function block_column_w610($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"header_01\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomComplet"), "html", null, true);
        echo "</div>   

    <table class=\"record_properties\">
        <tbody>  
            <tr>
                <th>Email</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
        echo "</td>
            </tr> 
            <tr>
                <th>Age</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "age"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "role"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateinscription</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateInscription"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Usersuspendu</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "userSuspendu"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "

";
    }

    public function getTemplateName()
    {
        return "LsiBiblioBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 39,  87 => 34,  80 => 30,  73 => 26,  66 => 22,  59 => 18,  49 => 12,  46 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
