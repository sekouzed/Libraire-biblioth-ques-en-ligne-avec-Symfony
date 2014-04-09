<?php

/* LsiBiblioBundle:User:index.html.twig */
class __TwigTemplate_247ea3b615d883d3709f56fc819bd45b1ff1f0adc9e8516301c1cf1826b6db76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>User list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nomcomplet</th>
                <th>Email</th>
                <th>Password</th>
                <th>Age</th>
                <th>Role</th>
                <th>Dateinscription</th>
                <th>Usersuspendu</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_user_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nomComplet"), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "email"), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "password"), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "age"), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "role"), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateInscription")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateInscription"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "userSuspendu"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_user_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("lien_user_new");
        echo "\">
                Create a new entry
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
        return array (  114 => 43,  83 => 29,  134 => 66,  127 => 62,  113 => 40,  104 => 36,  100 => 35,  96 => 34,  74 => 30,  70 => 28,  77 => 33,  81 => 34,  53 => 18,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 49,  119 => 57,  108 => 36,  102 => 37,  71 => 26,  67 => 25,  63 => 24,  59 => 6,  47 => 18,  38 => 6,  94 => 28,  89 => 30,  85 => 38,  79 => 28,  75 => 27,  68 => 23,  56 => 21,  50 => 21,  29 => 5,  87 => 31,  72 => 24,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 38,  78 => 30,  46 => 14,  27 => 4,  40 => 8,  44 => 15,  35 => 6,  31 => 4,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 48,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 11,  66 => 27,  62 => 23,  49 => 14,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 50,  106 => 42,  103 => 32,  99 => 37,  95 => 42,  92 => 33,  86 => 32,  82 => 31,  80 => 19,  73 => 19,  64 => 26,  60 => 22,  57 => 23,  54 => 22,  51 => 17,  48 => 16,  45 => 8,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 7,);
    }
}
