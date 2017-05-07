<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a6e51eff44a254b3dab9dd1f27bb7fb8f0b362ff639ca0f31718c37572115ff8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48cb2d90aafdaf96a831cfa447c5e29971604ae5c17cb0e8f9aff64f4a232ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48cb2d90aafdaf96a831cfa447c5e29971604ae5c17cb0e8f9aff64f4a232ded->enter($__internal_48cb2d90aafdaf96a831cfa447c5e29971604ae5c17cb0e8f9aff64f4a232ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e2c38820dcabb01e2f0eb6ab22ccc38af0ef433988be98ad0529b85a95ff3f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c38820dcabb01e2f0eb6ab22ccc38af0ef433988be98ad0529b85a95ff3f99->enter($__internal_e2c38820dcabb01e2f0eb6ab22ccc38af0ef433988be98ad0529b85a95ff3f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48cb2d90aafdaf96a831cfa447c5e29971604ae5c17cb0e8f9aff64f4a232ded->leave($__internal_48cb2d90aafdaf96a831cfa447c5e29971604ae5c17cb0e8f9aff64f4a232ded_prof);

        
        $__internal_e2c38820dcabb01e2f0eb6ab22ccc38af0ef433988be98ad0529b85a95ff3f99->leave($__internal_e2c38820dcabb01e2f0eb6ab22ccc38af0ef433988be98ad0529b85a95ff3f99_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5a7f17cc3110ab3f12109a220d3cf2ccb814a28db9b5f792749ebae910ddc8d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a7f17cc3110ab3f12109a220d3cf2ccb814a28db9b5f792749ebae910ddc8d5->enter($__internal_5a7f17cc3110ab3f12109a220d3cf2ccb814a28db9b5f792749ebae910ddc8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b9c59b421416a4301c06979361b78164c712f0b95141400cbc67d6f8b193aeaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c59b421416a4301c06979361b78164c712f0b95141400cbc67d6f8b193aeaa->enter($__internal_b9c59b421416a4301c06979361b78164c712f0b95141400cbc67d6f8b193aeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b9c59b421416a4301c06979361b78164c712f0b95141400cbc67d6f8b193aeaa->leave($__internal_b9c59b421416a4301c06979361b78164c712f0b95141400cbc67d6f8b193aeaa_prof);

        
        $__internal_5a7f17cc3110ab3f12109a220d3cf2ccb814a28db9b5f792749ebae910ddc8d5->leave($__internal_5a7f17cc3110ab3f12109a220d3cf2ccb814a28db9b5f792749ebae910ddc8d5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\laragon\\www\\web3_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
