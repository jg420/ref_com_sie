<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_a58844a64c6ccf8a346ccabfe72a24b5765d00bb64238cbcb7b60718ccf2cc7b extends Twig_Template
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
        $__internal_962fba3526668238927e7765d7f307696f36d9c082ba5cf709c824c07d7df2bb = $this->env->getExtension("native_profiler");
        $__internal_962fba3526668238927e7765d7f307696f36d9c082ba5cf709c824c07d7df2bb->enter($__internal_962fba3526668238927e7765d7f307696f36d9c082ba5cf709c824c07d7df2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_962fba3526668238927e7765d7f307696f36d9c082ba5cf709c824c07d7df2bb->leave($__internal_962fba3526668238927e7765d7f307696f36d9c082ba5cf709c824c07d7df2bb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
