<?php

/* LsiBiblioBundle:User:index.html.twig */
class __TwigTemplate_247ea3b615d883d3709f56fc819bd45b1ff1f0adc9e8516301c1cf1826b6db76 extends Twig_Template
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
        echo "<div class=\"header_01\">Liste des utilisateurs</div>  

    <table class=\"tab_list\">
        <thead>
            <tr> 
                <th>Inscription</th>
                <th>Nom</th> 
                <th>Mail</th>
                <th>Age</th>
                <th>Role</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 29
            echo "            <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index")), "html", null, true);
            echo "\"> 
            <form class=\"formulaire\" action=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("lien_user_modif");
            echo "\" method=\"post\">
                <td>";
            // line 31
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateInscription")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateInscription"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td> 
                <td class=\"col_titre\"><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_user_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomComplet"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td> 
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "age"), "html", null, true);
            echo "</td>    
                <td>
                    <select name=\"role\">
                        ";
            // line 37
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "role") == "admin")) {
                echo " 
                            <option value=\"user\">utilisateur</option>
                            <option value=\"admin\" selected=\"selected\">administrateur</option>
                        ";
            } else {
                // line 40
                echo "   
                            <option value=\"user\" selected=\"selected\">utilisateur</option>
                            <option value=\"admin\">administrateur</option>
                        ";
            }
            // line 43
            echo "   
                    </select>
                </td>
                <td>
                    <select name=\"suspendu\">
                        ";
            // line 48
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "userSuspendu") == 0)) {
                echo " 
                            <option value=\"1\">suspendu</option>
                            <option value=\"0\" selected=\"selected\">active</option>
                        ";
            } else {
                // line 51
                echo "   
                            <option value=\"1\" selected=\"selected\">suspendu</option>
                            <option value=\"0\">active</option>
                        ";
            }
            // line 54
            echo "   
                    </select>
                </td>
                <td>
                    <input name=\"id\" type=\"hidden\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" />
\t\t\t\t\t<input type=\"submit\" value=\"Modifier\"/> 
                </td>
            </form>  
            </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>

    <ul>
        <li class=\"col_titre\">
            <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("lien_user_new");
        echo "\">
                Creer un nouvel utilisateur
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "LsiBiblioBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 69,  173 => 64,  153 => 58,  147 => 54,  141 => 51,  134 => 48,  127 => 43,  121 => 40,  114 => 37,  108 => 34,  104 => 33,  98 => 32,  92 => 31,  88 => 30,  83 => 29,  66 => 28,  49 => 13,  46 => 12,  41 => 9,  38 => 8,  33 => 4,  30 => 3,);
    }
}
