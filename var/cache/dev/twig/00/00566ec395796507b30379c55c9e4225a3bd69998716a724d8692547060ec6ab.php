<?php

/* SIECentralBundle:Default:index.html.twig */
class __TwigTemplate_b2b4c28566370494b1c9708f5184a92680f81d270ea4c7a32a9867c0a47dea56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae6263287314485cd37e76f8562125a660ddd252e62609773e45cde353c67ad8 = $this->env->getExtension("native_profiler");
        $__internal_ae6263287314485cd37e76f8562125a660ddd252e62609773e45cde353c67ad8->enter($__internal_ae6263287314485cd37e76f8562125a660ddd252e62609773e45cde353c67ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIECentralBundle:Default:index.html.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" ng-app=\"app_ref_sie\">
    <head>
        <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"../script/quadranStyle.css\"/>
        <script src=\"../script/jquery.js\" />
        <script src=\"../script/jquery--ui.js\" />
        <script src=\"../script/formCentral.js\"/> -->
        ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "81f969e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81f969e_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/81f969e_quadranStyle_1.css");
            // line 11
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "81f969e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_81f969e") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/81f969e.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2db1e5c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2db1e5c_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/2db1e5c_jquery-ui_1.css");
            // line 14
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "2db1e5c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2db1e5c") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/2db1e5c.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo " 
        <title id=\"titre\">REFERENTIEL</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <!-- A CHARGER DEPUIS LA VUE PERE-
                    <li><a href=\"page_direction_regionales.xhtml\">Directions Regionales</a></li>
                    <li><a href=\"page_central.xhtml\">Centrales </a></li>
                    <li><a href=\"page_equipement.xhtml\">Equipements</a></li>-->

                </ul>
            </nav>
        </header>

        <!--<div id='bloc_select_critere'>
              <b class=\"titreSection\">Selection</b>
            <table class='tableSelection' border='1'>
              
            
              <tr>
                <th>1) Direction Regionales</th>
                <th>2) Nom de la centrale</th>
                <th>3) Type de centrale</th>
                  
                  
              </tr>
              <tr><td>
                    <br/>   
                    
                    <br/><input id=\"check_allDr\" type=\"checkbox\"/>Toutes Directions
                    <br/>
                    <br/><input class=\"dr\" value='1' type=\"checkbox\"/>DR NORD
                    <br/><input class=\"dr\" value='2' type=\"checkbox\"/>DR SUD
                    <br/><input class=\"dr\" value='3' type=\"checkbox\"/>DR COOM
                </td>
                <td>
                    <br/>   
                        <br/>
                    <select id=\"listCentral\">                        
                         <option>Choisissez une centrale</option>
                    </select>
                </td>
                <td>
                    <br/>   
                    <br/>
                    <select id=\"input_type_central\">
                        <option>Choisissez un type</option>
                    </select>           
                    <br/>
                </td>
             </tr>
            </table>
        </div>
        -->
        <table >
            <tr>
                <td>
                    ";
        // line 116
        $this->loadTemplate("SIECoreBundle:Default:search.html.twig", "SIECentralBundle:Default:index.html.twig", 116)->display($context);
        // line 117
        echo "                </td>
                <td>
                    ";
        // line 119
        $this->loadTemplate("SIECentralBundle:form:result.html.twig", "SIECentralBundle:Default:index.html.twig", 119)->display($context);
        echo " 
                </td>
                <td>
                    ";
        // line 122
        $this->loadTemplate("SIEDocumentBundle:Default:result_document.html.twig", "SIECentralBundle:Default:index.html.twig", 122)->display($context);
        echo " 
                </td>
                <td>
                    ";
        // line 125
        $this->loadTemplate("SIEEquipementBundle:Default:result_equipement.html.twig", "SIECentralBundle:Default:index.html.twig", 125)->display($context);
        echo " 
                </td>
                <td>
                    ";
        // line 128
        $this->loadTemplate("SIEAccessBundle:Default:result_access.html.twig", "SIECentralBundle:Default:index.html.twig", 128)->display($context);
        echo " 
                </td>
                <a id=\"lienPDF\" href=\"../form/formCentral.php?pdf=1\">Referenciel PDF</a>
            </tr>
        </table>      
                      
    </body>
</html>
";
        
        $__internal_ae6263287314485cd37e76f8562125a660ddd252e62609773e45cde353c67ad8->leave($__internal_ae6263287314485cd37e76f8562125a660ddd252e62609773e45cde353c67ad8_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f839e77ffaac81514d66962b2c333230133ac9ec34e88691f3f2b9b2b193758 = $this->env->getExtension("native_profiler");
        $__internal_5f839e77ffaac81514d66962b2c333230133ac9ec34e88691f3f2b9b2b193758->enter($__internal_5f839e77ffaac81514d66962b2c333230133ac9ec34e88691f3f2b9b2b193758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d4574a7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d4574a7_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/d4574a7_angular_1.js");
            // line 19
            echo "                ";
            // line 20
            echo "            ";
        } else {
            // asset "d4574a7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d4574a7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/d4574a7.js");
            // line 19
            echo "                ";
            // line 20
            echo "            ";
        }
        unset($context["asset_url"]);
        // line 21
        echo "             ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a750637_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a750637_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a750637_jquery_1.js");
            // line 22
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "a750637"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a750637") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a750637.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2994d72_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2994d72_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2994d72_jquery-ui_1.js");
            // line 25
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "2994d72"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2994d72") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/2994d72.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "584d851_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_584d851_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/584d851_app_1.js");
            // line 28
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "584d851"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_584d851") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/584d851.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 30
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1f81795_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1f81795_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1f81795_app_search_central_1.js");
            // line 31
            echo "                ";
            // line 32
            echo "            ";
        } else {
            // asset "1f81795"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1f81795") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/1f81795.js");
            // line 31
            echo "                ";
            // line 32
            echo "            ";
        }
        unset($context["asset_url"]);
        // line 33
        echo "           
            
            ";
        // line 35
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dff4dbb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dff4dbb_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/dff4dbb_front_page_1.js");
            // line 36
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "dff4dbb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dff4dbb") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/dff4dbb.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 38
        echo "              
              ";
        // line 39
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fc7accb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc7accb_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fc7accb_front_result_equipement_access_1.js");
            // line 40
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        } else {
            // asset "fc7accb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc7accb") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fc7accb.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        }
        unset($context["asset_url"]);
        // line 42
        echo "              ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "454a49e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_454a49e_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/454a49e_front_result_doc_1.js");
            // line 43
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        } else {
            // asset "454a49e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_454a49e") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/454a49e.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        }
        unset($context["asset_url"]);
        // line 45
        echo "              ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "af4783f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af4783f_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/af4783f_front_result_equipement_1.js");
            // line 46
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        } else {
            // asset "af4783f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af4783f") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/af4783f.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        }
        unset($context["asset_url"]);
        // line 48
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a5be7e7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a5be7e7_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a5be7e7_front_result_central_1.js");
            // line 49
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        } else {
            // asset "a5be7e7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a5be7e7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a5be7e7.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
            ";
        }
        unset($context["asset_url"]);
        // line 51
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "da82b2d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da82b2d_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/da82b2d_front_search_1.js");
            // line 52
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "da82b2d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da82b2d") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/da82b2d.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 54
        echo "          
     
        ";
        
        $__internal_5f839e77ffaac81514d66962b2c333230133ac9ec34e88691f3f2b9b2b193758->leave($__internal_5f839e77ffaac81514d66962b2c333230133ac9ec34e88691f3f2b9b2b193758_prof);

    }

    public function getTemplateName()
    {
        return "SIECentralBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 54,  382 => 52,  377 => 51,  363 => 49,  358 => 48,  344 => 46,  339 => 45,  325 => 43,  320 => 42,  306 => 40,  302 => 39,  299 => 38,  285 => 36,  281 => 35,  277 => 33,  273 => 32,  271 => 31,  266 => 32,  264 => 31,  259 => 30,  245 => 28,  240 => 27,  226 => 25,  221 => 24,  207 => 22,  202 => 21,  198 => 20,  196 => 19,  191 => 20,  189 => 19,  184 => 18,  178 => 17,  162 => 128,  156 => 125,  150 => 122,  144 => 119,  140 => 117,  138 => 116,  76 => 56,  74 => 17,  71 => 16,  57 => 14,  52 => 13,  38 => 11,  34 => 10,  23 => 1,);
    }
}
/* <?xml version="1.0" encoding="UTF-8"?>*/
/* */
/* <!DOCTYPE html>*/
/* <html xmlns="http://www.w3.org/1999/xhtml" ng-app="app_ref_sie">*/
/*     <head>*/
/*         <!-- <link rel="stylesheet" type="text/css" href="../script/quadranStyle.css"/>*/
/*         <script src="../script/jquery.js" />*/
/*         <script src="../script/jquery--ui.js" />*/
/*         <script src="../script/formCentral.js"/> -->*/
/*         {% stylesheets '@SIECoreBundle/Resources/public/css/quadranStyle.css' filter='cssrewrite' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*         {% endstylesheets %}*/
/*         {% stylesheets '@SIECoreBundle/Resources/public/css/jquery-ui.css' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*         {% endstylesheets %}*/
/* */
/*         {% block javascripts %}*/
/*             {% javascripts '@SIECoreBundle/Resources/public/js/angular.js' %}*/
/*                 {#<script src="{{ asset_url }}"></script#}*/
/*             {% endjavascripts %}*/
/*              {% javascripts '@SIECoreBundle/Resources/public/js/jquery.js' %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*             {% javascripts '@SIECoreBundle/Resources/public/js/jquery-ui.js' %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*             {% javascripts '@SIECoreBundle/Resources/public/js/app.js' %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*             {% javascripts '@SIECentralBundle/Resources/public/js/app_search_central.js' %}*/
/*                 {#<script src="{{ asset_url }}"></script>#}*/
/*             {% endjavascripts %}*/
/*            */
/*             */
/*             {% javascripts '@SIECentralBundle/Resources/public/js/front_page.js' %}*/
/*               <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*               */
/*               {% javascripts '@SIEAccessBundle/Resources/public/js/front_result_equipement_access.js' %}*/
/*                 <script src="{{ asset_url }}"></script>          */
/*             {% endjavascripts %}*/
/*               {% javascripts '@SIEDocumentBundle/Resources/public/js/front_result_doc.js' %}*/
/*                 <script src="{{ asset_url }}"></script>          */
/*             {% endjavascripts %}*/
/*               {% javascripts '@SIEEquipementBundle/Resources/public/js/front_result_equipement.js' %}*/
/*                 <script src="{{ asset_url }}"></script>          */
/*             {% endjavascripts %}*/
/*             {% javascripts '@SIECentralBundle/Resources/public/js/front_result_central.js' %}*/
/*                 <script src="{{ asset_url }}"></script>          */
/*             {% endjavascripts %}*/
/*             {% javascripts '@SIECoreBundle/Resources/public/js/front_search.js' %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*           */
/*      */
/*         {% endblock %} */
/*         <title id="titre">REFERENTIEL</title>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/*     </head>*/
/*     <body>*/
/*         <header>*/
/*             <nav>*/
/*                 <ul>*/
/*                     <!-- A CHARGER DEPUIS LA VUE PERE-*/
/*                     <li><a href="page_direction_regionales.xhtml">Directions Regionales</a></li>*/
/*                     <li><a href="page_central.xhtml">Centrales </a></li>*/
/*                     <li><a href="page_equipement.xhtml">Equipements</a></li>-->*/
/* */
/*                 </ul>*/
/*             </nav>*/
/*         </header>*/
/* */
/*         <!--<div id='bloc_select_critere'>*/
/*               <b class="titreSection">Selection</b>*/
/*             <table class='tableSelection' border='1'>*/
/*               */
/*             */
/*               <tr>*/
/*                 <th>1) Direction Regionales</th>*/
/*                 <th>2) Nom de la centrale</th>*/
/*                 <th>3) Type de centrale</th>*/
/*                   */
/*                   */
/*               </tr>*/
/*               <tr><td>*/
/*                     <br/>   */
/*                     */
/*                     <br/><input id="check_allDr" type="checkbox"/>Toutes Directions*/
/*                     <br/>*/
/*                     <br/><input class="dr" value='1' type="checkbox"/>DR NORD*/
/*                     <br/><input class="dr" value='2' type="checkbox"/>DR SUD*/
/*                     <br/><input class="dr" value='3' type="checkbox"/>DR COOM*/
/*                 </td>*/
/*                 <td>*/
/*                     <br/>   */
/*                         <br/>*/
/*                     <select id="listCentral">                        */
/*                          <option>Choisissez une centrale</option>*/
/*                     </select>*/
/*                 </td>*/
/*                 <td>*/
/*                     <br/>   */
/*                     <br/>*/
/*                     <select id="input_type_central">*/
/*                         <option>Choisissez un type</option>*/
/*                     </select>           */
/*                     <br/>*/
/*                 </td>*/
/*              </tr>*/
/*             </table>*/
/*         </div>*/
/*         -->*/
/*         <table >*/
/*             <tr>*/
/*                 <td>*/
/*                     {% include "SIECoreBundle:Default:search.html.twig" %}*/
/*                 </td>*/
/*                 <td>*/
/*                     {% include "SIECentralBundle:form:result.html.twig" %} */
/*                 </td>*/
/*                 <td>*/
/*                     {% include "SIEDocumentBundle:Default:result_document.html.twig" %} */
/*                 </td>*/
/*                 <td>*/
/*                     {% include "SIEEquipementBundle:Default:result_equipement.html.twig" %} */
/*                 </td>*/
/*                 <td>*/
/*                     {% include "SIEAccessBundle:Default:result_access.html.twig" %} */
/*                 </td>*/
/*                 <a id="lienPDF" href="../form/formCentral.php?pdf=1">Referenciel PDF</a>*/
/*             </tr>*/
/*         </table>      */
/*                       */
/*     </body>*/
/* </html>*/
/* */
