<?php

/* LsiBiblioBundle::layout.html.twig */
class __TwigTemplate_16b639d0dcad378bca965879917e3e6625c45d4bad0d4620fd1b81eb64d1cdf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'templatemo_menu' => array($this, 'block_templatemo_menu'),
            'menu_accueil' => array($this, 'block_menu_accueil'),
            'menu_catalogue' => array($this, 'block_menu_catalogue'),
            'menu_abonnee' => array($this, 'block_menu_abonnee'),
            'menu_suite' => array($this, 'block_menu_suite'),
            'tempatemo_content_wrapper' => array($this, 'block_tempatemo_content_wrapper'),
            'recent_projects' => array($this, 'block_recent_projects'),
            'column_w610' => array($this, 'block_column_w610'),
            'column_w290' => array($this, 'block_column_w290'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
    <html>
        <head>
            <title>
                ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "            </title>
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
            ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "            <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/favicon.ico"), "html", null, true);
        echo "\" />
            <script type=\"text/javascript\">var switchTo5x=true;</script>
<script type=\"text/javascript\" src=\"http://w.sharethis.com/button/buttons.js\"></script>
<script type=\"text/javascript\">stLight.options({publisher: \"4f863e91-c97c-4f1f-b247-91b579eb7840\", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
        </head>
    <body>
    <div id=\"templatemo_header_wrapper\">

\t<div id=\"templatemo_header\"> 
    \t<div id=\"site_titre\">
\t\t\tBibliothèque en ligne 
\t\t</div>  
    \t<div id=\"site_logo\"> 
\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/images/log.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t</div> 
    </div> <!--end of header -->

</div> <!-- end of header wrapper -->

<div id=\"templatemo_menu_wrapper\"> 
    <div id=\"templatemo_menu\">
\t\t";
        // line 36
        $this->displayBlock('templatemo_menu', $context, $blocks);
        // line 43
        echo " 
    </div> <!-- end of menu -->
</div> <!-- end of menu wrapper -->

<div id=\"tempatemo_content_wrapper\">
";
        // line 48
        $this->displayBlock('tempatemo_content_wrapper', $context, $blocks);
        // line 113
        echo "  
</div> <!-- end of content wrapper -->

<div id=\"templatemo_footer_wrapper\">

\t<div id=\"templatemo_footer\">
    \t
        <div class=\"section_w368\"> 
        <div class=\"section_w920\">
        Copyright © 2013 <a href=\"#\">LSI</a> | Designed by <a href=\"\">Dioubaté Sékou, Hadia, Amine, Meriem</a>
        </div> 
        <div class=\"margin_bottom_20\"></div>
        <div class=\"cleaner\"></div>
    </div> <!-- end of footer -->
</div> <!-- end of footer -->
\t</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "                    lSI-bibliotheque numerique
                ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lsibiblio/css/templatemo_style.css"), "html", null, true);
        echo "\" type=\"text/css\"media=\"all\" />
            ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "            ";
    }

    // line 36
    public function block_templatemo_menu($context, array $blocks = array())
    {
        // line 37
        echo "\t\t\t<ul> 
    \t\t\t<li>";
        // line 38
        $this->displayBlock('menu_accueil', $context, $blocks);
        echo " </li>
    \t\t\t<li>";
        // line 39
        $this->displayBlock('menu_catalogue', $context, $blocks);
        echo " </li>
    \t\t\t<li>";
        // line 40
        $this->displayBlock('menu_abonnee', $context, $blocks);
        echo " </li>
    \t\t\t<li>";
        // line 41
        $this->displayBlock('menu_suite', $context, $blocks);
        echo " </li>                                 
\t\t\t</ul>    \t
\t\t";
    }

    // line 38
    public function block_menu_accueil($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("lien_livre");
        echo "\">Accueil</a>";
    }

    // line 39
    public function block_menu_catalogue($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("lien_livre_show_all");
        echo "\">Le catalogue</a>";
    }

    // line 40
    public function block_menu_abonnee($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("lien_user_new");
        echo "\" class=\"last\">S'abonnez</a>";
    }

    // line 41
    public function block_menu_suite($context, array $blocks = array())
    {
    }

    // line 48
    public function block_tempatemo_content_wrapper($context, array $blocks = array())
    {
        // line 49
        echo "



    <div id=\"templatemo_content\"> 
    \t<div class=\"recent_projects\"> 
\t\t\t";
        // line 55
        $this->displayBlock('recent_projects', $context, $blocks);
        // line 57
        echo " 
        </div> 
        <div id=\"content_panel\"> 
           
            <div id=\"column_w610\">  
                        
\t\t\t\t";
        // line 63
        $this->displayBlock('column_w610', $context, $blocks);
        // line 65
        echo " 
            </div> <!-- end of column w610 --> 
            <div id=\"column_w290\">   
                
                ";
        // line 69
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "loginId"), "method")) {
            echo "   
                    <div class=\"header_02\">Bonjour,";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "loginNomComplet"), "method"), "html", null, true);
            echo "</div> 
    \t\t\t\t<div class=\"column_w290_content\">  
                        <ul class=\"record_actions\"> 
                            <li class=\"col_titre\"><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lien_user_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "loginId"), "method"))), "html", null, true);
            echo "\">Modifier mon profil</a></li>
                            <li class=\"col_titre\"><a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("lien_user_logout");
            echo "\">Deconnexion</a></li>
                        </ul>
                       
                        ";
            // line 77
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "loginRole"), "method") == "admin")) {
                echo " 
                           <ul class=\"record_actions\"> 
                                <li class=\"col_titre\"><a href=\"";
                // line 79
                echo $this->env->getExtension('routing')->getPath("lien_livre_new");
                echo "\">Nouveau livre </a></li>
                                <li class=\"col_titre\"><a href=\"";
                // line 80
                echo $this->env->getExtension('routing')->getPath("lien_livre_all");
                echo "\">liste des livres</a></li>
                                <li class=\"col_titre\"><a href=\"";
                // line 81
                echo $this->env->getExtension('routing')->getPath("lien_collection");
                echo "\">liste des collection</a></li> 
                                <li class=\"col_titre\"><a href=\"";
                // line 82
                echo $this->env->getExtension('routing')->getPath("lien_user");
                echo "\">liste des utilisateurs</a></li>
                                <li class=\"col_titre\"><a href=\"";
                // line 83
                echo $this->env->getExtension('routing')->getPath("lien_avis");
                echo "\">Les avis des utilisateurs</a></li>
                           </ul>  
                        ";
            }
            // line 85
            echo "     
                
    \t\t\t\t</div>  
                     ";
        } else {
            // line 88
            echo "   
                    <div class=\"header_02\">Identification</div> 
    \t\t\t\t<div class=\"column_w290_content\"> 
    \t\t\t\t\t<form class=\"formulaire\" action=\"";
            // line 91
            echo $this->env->getExtension('routing')->getPath("lien_user_login");
            echo "\" method=\"post\">
    \t\t\t\t\t\t<label>Email</label>
    \t\t\t\t\t\t<input type=\"text\" name=\"mail_user\" value=\"\"/>
    \t\t\t\t\t\t<label>Mot de passe</label> 
    \t\t\t\t\t\t<input type=\"password\" name=\"pwd_user\"/>
    \t\t\t\t\t\t<input type=\"submit\" value=\"Connexion\"/> 
    \t\t\t\t\t</form>   
                        <div class=\"col_titre float_r\"><a href=\"";
            // line 98
            echo $this->env->getExtension('routing')->getPath("lien_user_new");
            echo "\">S'abonnez</a></div>  
\t\t\t\t    </div>  
                    
                ";
            // line 101
            $this->displayBlock('column_w290', $context, $blocks);
            // line 103
            echo " 
                ";
        }
        // line 104
        echo "         
            </div> <!-- end of column 290 --> 
            <div class=\"cleaner\"></div>
            
        </div> <!-- end of content panel -->
    
        <div class=\"cleaner\"></div>
    </div> <!-- end of content -->
    
        ";
    }

    // line 55
    public function block_recent_projects($context, array $blocks = array())
    {
        // line 56
        echo "\t\t\t
\t\t\t";
    }

    // line 63
    public function block_column_w610($context, array $blocks = array())
    {
        // line 64
        echo "\t\t\t\t
\t\t\t\t";
    }

    // line 101
    public function block_column_w290($context, array $blocks = array())
    {
        echo "  
                            \t\t
                ";
    }

    public function getTemplateName()
    {
        return "LsiBiblioBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 101,  319 => 64,  316 => 63,  311 => 56,  308 => 55,  295 => 104,  291 => 103,  289 => 101,  283 => 98,  273 => 91,  268 => 88,  262 => 85,  256 => 83,  252 => 82,  248 => 81,  244 => 80,  240 => 79,  235 => 77,  229 => 74,  225 => 73,  219 => 70,  215 => 69,  209 => 65,  207 => 63,  199 => 57,  197 => 55,  189 => 49,  186 => 48,  181 => 41,  173 => 40,  165 => 39,  157 => 38,  150 => 41,  146 => 40,  142 => 39,  138 => 38,  135 => 37,  132 => 36,  128 => 14,  125 => 13,  118 => 11,  115 => 10,  110 => 6,  107 => 5,  87 => 113,  85 => 48,  78 => 43,  76 => 36,  65 => 28,  48 => 15,  45 => 13,  43 => 10,  39 => 8,  37 => 5,  31 => 1,);
    }
}
