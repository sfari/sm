<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8a8336942248db88f078c3c6f64a0971a39770086623363ac8ce3879ee49932b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ea286d1f97435108454f467c1944eed0e660cb72b2ace3caa3788a2ad644d2b = $this->env->getExtension("native_profiler");
        $__internal_5ea286d1f97435108454f467c1944eed0e660cb72b2ace3caa3788a2ad644d2b->enter($__internal_5ea286d1f97435108454f467c1944eed0e660cb72b2ace3caa3788a2ad644d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5ea286d1f97435108454f467c1944eed0e660cb72b2ace3caa3788a2ad644d2b->leave($__internal_5ea286d1f97435108454f467c1944eed0e660cb72b2ace3caa3788a2ad644d2b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
