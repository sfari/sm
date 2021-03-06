<?php

/* ISETSOMagazineBundle:discharge_article_magazine:show.html.twig */
class __TwigTemplate_11361084634abda08433b974d6ff98cecf445e78651b9b9c4f6d798e76ead47b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ISETSOMagazineBundle:discharge_article_magazine:show.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'breadcrumbActive' => array($this, 'block_breadcrumbActive'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5368006283563a2cb34c6371aaef10df086525903abef3b8f8629854d87beec6 = $this->env->getExtension("native_profiler");
        $__internal_5368006283563a2cb34c6371aaef10df086525903abef3b8f8629854d87beec6->enter($__internal_5368006283563a2cb34c6371aaef10df086525903abef3b8f8629854d87beec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ISETSOMagazineBundle:discharge_article_magazine:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5368006283563a2cb34c6371aaef10df086525903abef3b8f8629854d87beec6->leave($__internal_5368006283563a2cb34c6371aaef10df086525903abef3b8f8629854d87beec6_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_620f30a4b508509d4b0cfcfd1909f338fd26a8f58b01584d2f0ed3a5bda31f56 = $this->env->getExtension("native_profiler");
        $__internal_620f30a4b508509d4b0cfcfd1909f338fd26a8f58b01584d2f0ed3a5bda31f56->enter($__internal_620f30a4b508509d4b0cfcfd1909f338fd26a8f58b01584d2f0ed3a5bda31f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7cfe8d1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7cfe8d1_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/7cfe8d1_dataTables.bootstrap_1.css");
            // line 8
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "7cfe8d1_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7cfe8d1_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/7cfe8d1_dataTables.themify_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "7cfe8d1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7cfe8d1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/7cfe8d1.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "    
";
        
        $__internal_620f30a4b508509d4b0cfcfd1909f338fd26a8f58b01584d2f0ed3a5bda31f56->leave($__internal_620f30a4b508509d4b0cfcfd1909f338fd26a8f58b01584d2f0ed3a5bda31f56_prof);

    }

    // line 12
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b23d603f4ed0ea91a35945692b1e87f9fc0cf523a738a18cd1a9c86f1d00bd18 = $this->env->getExtension("native_profiler");
        $__internal_b23d603f4ed0ea91a35945692b1e87f9fc0cf523a738a18cd1a9c86f1d00bd18->enter($__internal_b23d603f4ed0ea91a35945692b1e87f9fc0cf523a738a18cd1a9c86f1d00bd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 13
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("discharge_article_to_magazine_index");
        echo "\">
       ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.list.name"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_b23d603f4ed0ea91a35945692b1e87f9fc0cf523a738a18cd1a9c86f1d00bd18->leave($__internal_b23d603f4ed0ea91a35945692b1e87f9fc0cf523a738a18cd1a9c86f1d00bd18_prof);

    }

    // line 17
    public function block_breadcrumbActive($context, array $blocks = array())
    {
        $__internal_46e3db50b343a2c4074adb4345c0b866da2044f9d14d83b02b8d3dc55b7ea18a = $this->env->getExtension("native_profiler");
        $__internal_46e3db50b343a2c4074adb4345c0b866da2044f9d14d83b02b8d3dc55b7ea18a->enter($__internal_46e3db50b343a2c4074adb4345c0b866da2044f9d14d83b02b8d3dc55b7ea18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbActive"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.new.name"), "html", null, true);
        
        $__internal_46e3db50b343a2c4074adb4345c0b866da2044f9d14d83b02b8d3dc55b7ea18a->leave($__internal_46e3db50b343a2c4074adb4345c0b866da2044f9d14d83b02b8d3dc55b7ea18a_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_b424a1926596afd17fabee74fb70fb656b9d35d2e8154a4a56fcfb4b2546e385 = $this->env->getExtension("native_profiler");
        $__internal_b424a1926596afd17fabee74fb70fb656b9d35d2e8154a4a56fcfb4b2546e385->enter($__internal_b424a1926596afd17fabee74fb70fb656b9d35d2e8154a4a56fcfb4b2546e385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "<div class=\"col-sm-12\">
    <div class=\"btn-group\">
        <a name=\"print\" href=\"?print=true\" onclick=\"window.open(this.href); return false;\" class=\"btn btn-info-alt\">
        <i class=\"ti ti-printer\"></i>
        </a>
    
        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("discharge_article_to_magazine_edit", array("id" => $this->getAttribute((isset($context["dischargeArticle"]) ? $context["dischargeArticle"] : $this->getContext($context, "dischargeArticle")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info-alt\"><i class=\"ti ti-pencil-alt\"></i></a>
    </div>
    <hr>    
</div>
<div class=\"col-sm-6\">
    <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab-about\">
            <div class=\"panel panel-default\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
                <div class=\"panel-heading\">
                    <h2>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dischargearticle.show.name"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"panel-body\">
                    <div class=\"about-area\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <tbody>
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.date"), "html", null, true);
        echo "</th>
                                    <td>
                                        ";
        // line 44
        if ($this->getAttribute((isset($context["dischargeArticle"]) ? $context["dischargeArticle"] : $this->getContext($context, "dischargeArticle")), "date", array())) {
            // line 45
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dischargeArticle"]) ? $context["dischargeArticle"] : $this->getContext($context, "dischargeArticle")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "
                                        ";
        }
        // line 47
        echo "                                    </td>
                                  </tr>
                                  
                                  <tr>
                                    <th class=\"text text-primary\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.type"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dischargeArticle"]) ? $context["dischargeArticle"] : $this->getContext($context, "dischargeArticle")), "observation", array()), "html", null, true);
        echo "</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"col-sm-6\">
    <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab-about\">
            <div class=\"panel panel-default\" style=\"visibility: visible; opacity: 1; display: block; transform: translateY(0px);\">
                <div class=\"panel-heading\">
                    <h2>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.userName"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"panel-body\">
                    <div class=\"about-area\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                            <tbody>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dischargeArticle"]) ? $context["dischargeArticle"] : $this->getContext($context, "dischargeArticle")), "user", array()), "username", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                                <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dischargeArticle"]) ? $context["dischargeArticle"] : $this->getContext($context, "dischargeArticle")), "user", array()), "email", array()), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                <th class=\"text text-primary\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.role"), "html", null, true);
        echo "</th>
                                <td>";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["dischargeArticle"]) ? $context["dischargeArticle"] : $this->getContext($context, "dischargeArticle")), "user", array()), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "<br>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</td>
                              </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"col-sm-12\">
    <div data-widget-group=\"group1\">
            <div class=\"panel panel-default\" >
                <div class=\"panel-heading\">
                    <h2><i class=\"ti ti-pencil-alt\"></i> ";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("detail.list.name"), "html", null, true);
        echo "</h2>
                    <div class=\"panel-ctrls search\" ></div>
                </div>
                <div class=\"panel-editbox\" data-widget-controls=\"\"></div>
                <div class=\"panel-body no-padding\">
                <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th class=\"text text-primary\">";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.inventoryNumber"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.designation"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.quantity"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.unit"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.family"), "html", null, true);
        echo "</th>
                            <th class=\"text text-primary\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("magazine.field.subFamily"), "html", null, true);
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["dischargeArticle"]) ? $context["dischargeArticle"] : $this->getContext($context, "dischargeArticle")), "detail", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 120
            echo "                            <tr>
                                <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "inventoryNumber", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "designation", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "quantity", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "unit", array()), "designation", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "subFamily", array()), "designation", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["detail"], "supportingDocument", array()), "article", array()), "subFamily", array()), "family", array()), "designation", array()), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"panel-footer footer-dataTable\"></div>
        </div>
    </div>
</div>
";
        
        $__internal_b424a1926596afd17fabee74fb70fb656b9d35d2e8154a4a56fcfb4b2546e385->leave($__internal_b424a1926596afd17fabee74fb70fb656b9d35d2e8154a4a56fcfb4b2546e385_prof);

    }

    // line 137
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b3e7d15e5572d87e211f0bd12f43dcb59ab522e16bd9160e7bb822eb02fb7881 = $this->env->getExtension("native_profiler");
        $__internal_b3e7d15e5572d87e211f0bd12f43dcb59ab522e16bd9160e7bb822eb02fb7881->enter($__internal_b3e7d15e5572d87e211f0bd12f43dcb59ab522e16bd9160e7bb822eb02fb7881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 138
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 139
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b81ca42_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b81ca42_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b81ca42_jquery.dataTables_1.js");
            // line 144
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b81ca42_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b81ca42_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b81ca42_dataTables.bootstrap_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b81ca42_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b81ca42_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b81ca42_datatables_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "b81ca42"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b81ca42") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b81ca42.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_b3e7d15e5572d87e211f0bd12f43dcb59ab522e16bd9160e7bb822eb02fb7881->leave($__internal_b3e7d15e5572d87e211f0bd12f43dcb59ab522e16bd9160e7bb822eb02fb7881_prof);

    }

    public function getTemplateName()
    {
        return "ISETSOMagazineBundle:discharge_article_magazine:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 144,  355 => 139,  350 => 138,  344 => 137,  330 => 129,  321 => 126,  317 => 125,  313 => 124,  309 => 123,  305 => 122,  301 => 121,  298 => 120,  294 => 119,  286 => 114,  282 => 113,  278 => 112,  274 => 111,  270 => 110,  266 => 109,  255 => 101,  229 => 86,  225 => 85,  219 => 82,  215 => 81,  209 => 78,  205 => 77,  194 => 69,  174 => 52,  170 => 51,  164 => 47,  158 => 45,  156 => 44,  151 => 42,  140 => 34,  128 => 25,  120 => 19,  114 => 18,  102 => 17,  92 => 14,  87 => 13,  81 => 12,  73 => 10,  53 => 8,  49 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     {% stylesheets */
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.css'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.themify.css'*/
/*         filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/*     */
/* {% endblock %}*/
/* {% block breadcrumb %}*/
/*     <a href="{{ path('discharge_article_to_magazine_index') }}">*/
/*        {{ 'dischargearticle.list.name'|trans }}*/
/*     </a>*/
/* {% endblock %}*/
/*      {% block breadcrumbActive %}{{ 'dischargearticle.new.name'|trans }}{% endblock %}*/
/* {% block body %}*/
/* <div class="col-sm-12">*/
/*     <div class="btn-group">*/
/*         <a name="print" href="?print=true" onclick="window.open(this.href); return false;" class="btn btn-info-alt">*/
/*         <i class="ti ti-printer"></i>*/
/*         </a>*/
/*     */
/*         <a href="{{ path('discharge_article_to_magazine_edit', { 'id': dischargeArticle.id }) }}" class="btn btn-info-alt"><i class="ti ti-pencil-alt"></i></a>*/
/*     </div>*/
/*     <hr>    */
/* </div>*/
/* <div class="col-sm-6">*/
/*     <div class="tab-content">*/
/*         <div class="tab-pane active" id="tab-about">*/
/*             <div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*                 <div class="panel-heading">*/
/*                     <h2>{{ 'dischargearticle.show.name'|trans }}</h2>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="about-area">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table">*/
/*                                 <tbody>*/
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.date'|trans }}</th>*/
/*                                     <td>*/
/*                                         {% if dischargeArticle.date %}*/
/*                                             {{ dischargeArticle.date|date('Y-m-d H:i:s') }}*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                   </tr>*/
/*                                   */
/*                                   <tr>*/
/*                                     <th class="text text-primary">{{ 'magazine.field.type'|trans }}</th>*/
/*                                     <td>{{ dischargeArticle.observation }}</td>*/
/*                                   </tr>*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="col-sm-6">*/
/*     <div class="tab-content">*/
/*         <div class="tab-pane active" id="tab-about">*/
/*             <div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">*/
/*                 <div class="panel-heading">*/
/*                     <h2>{{ 'magazine.field.userName'|trans }}</h2>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="about-area">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table">*/
/*                             <tbody>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}</th>*/
/*                                 <td>{{ dischargeArticle.user.username }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}</th>*/
/*                                 <td>{{ dischargeArticle.user.email }}</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <th class="text text-primary">{{ 'magazine.field.role'|trans }}</th>*/
/*                                 <td>{% for val in dischargeArticle.user.roles %}{{ val }}<br>{% endfor %}</td>*/
/*                               </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="col-sm-12">*/
/*     <div data-widget-group="group1">*/
/*             <div class="panel panel-default" >*/
/*                 <div class="panel-heading">*/
/*                     <h2><i class="ti ti-pencil-alt"></i> {{ 'detail.list.name'|trans }}</h2>*/
/*                     <div class="panel-ctrls search" ></div>*/
/*                 </div>*/
/*                 <div class="panel-editbox" data-widget-controls=""></div>*/
/*                 <div class="panel-body no-padding">*/
/*                 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th class="text text-primary">{{ 'magazine.field.inventoryNumber'|trans }}</th>*/
/*                             <th class="text text-primary">{{ 'magazine.field.designation'|trans }}</th>*/
/*                             <th class="text text-primary">{{ 'magazine.field.quantity'|trans }}</th>*/
/*                             <th class="text text-primary">{{ 'magazine.field.unit'|trans }}</th>*/
/*                             <th class="text text-primary">{{ 'magazine.field.family'|trans }}</th>*/
/*                             <th class="text text-primary">{{ 'magazine.field.subFamily'|trans }}</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         */
/*                         {% for detail in dischargeArticle.detail %}*/
/*                             <tr>*/
/*                                 <td>{{ detail.supportingDocument.inventoryNumber }}</td>*/
/*                                 <td>{{ detail.supportingDocument.article.designation }}</td>*/
/*                                 <td>{{ detail.quantity }}</td>*/
/*                                 <td>{{ detail.supportingDocument.article.unit.designation }}</td>*/
/*                                 <td>{{ detail.supportingDocument.article.subFamily.designation }}</td>*/
/*                                 <td>{{ detail.supportingDocument.article.subFamily.family.designation }}</td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*             <div class="panel-footer footer-dataTable"></div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts filter='?yui_js'*/
/*         'bundles/isetsomagazine/plugins/datatables/jquery.dataTables.js'*/
/*         'bundles/isetsomagazine/plugins/datatables/dataTables.bootstrap.js'*/
/*         'bundles/isetsomagazine/myjs/datatables.js'*/
/*     %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
