<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_aa52129777fb1fb72be330bc97981a11cda2d535e6ec763f96b5dcdbd857bad5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84da264d4311197e1b849c6e4045f0ccd01cf1095cbab2644895393816d2e173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84da264d4311197e1b849c6e4045f0ccd01cf1095cbab2644895393816d2e173->enter($__internal_84da264d4311197e1b849c6e4045f0ccd01cf1095cbab2644895393816d2e173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1c9cc7f1154349a5a5e5f87fac04ae9458a2456fa15b6b2e76ba267976e77780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9cc7f1154349a5a5e5f87fac04ae9458a2456fa15b6b2e76ba267976e77780->enter($__internal_1c9cc7f1154349a5a5e5f87fac04ae9458a2456fa15b6b2e76ba267976e77780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84da264d4311197e1b849c6e4045f0ccd01cf1095cbab2644895393816d2e173->leave($__internal_84da264d4311197e1b849c6e4045f0ccd01cf1095cbab2644895393816d2e173_prof);

        
        $__internal_1c9cc7f1154349a5a5e5f87fac04ae9458a2456fa15b6b2e76ba267976e77780->leave($__internal_1c9cc7f1154349a5a5e5f87fac04ae9458a2456fa15b6b2e76ba267976e77780_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_477349fd39afc6ae8d3e693747b694d94260f04dd8af42cecf0975e4c601220a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477349fd39afc6ae8d3e693747b694d94260f04dd8af42cecf0975e4c601220a->enter($__internal_477349fd39afc6ae8d3e693747b694d94260f04dd8af42cecf0975e4c601220a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9aa8709dd27ce63690b0e4469e6adf94cd97f4c38e5a748b81a84e3c52b4867f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa8709dd27ce63690b0e4469e6adf94cd97f4c38e5a748b81a84e3c52b4867f->enter($__internal_9aa8709dd27ce63690b0e4469e6adf94cd97f4c38e5a748b81a84e3c52b4867f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9aa8709dd27ce63690b0e4469e6adf94cd97f4c38e5a748b81a84e3c52b4867f->leave($__internal_9aa8709dd27ce63690b0e4469e6adf94cd97f4c38e5a748b81a84e3c52b4867f_prof);

        
        $__internal_477349fd39afc6ae8d3e693747b694d94260f04dd8af42cecf0975e4c601220a->leave($__internal_477349fd39afc6ae8d3e693747b694d94260f04dd8af42cecf0975e4c601220a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_82425d38fd4713257a8306c2470956e956662519cc2ef6bffa979336fe1b2788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82425d38fd4713257a8306c2470956e956662519cc2ef6bffa979336fe1b2788->enter($__internal_82425d38fd4713257a8306c2470956e956662519cc2ef6bffa979336fe1b2788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_11ffeb1a5fa1589b5f1fa631373de6d6849f5f6ab3bd9cec6cbccbdc5f093d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ffeb1a5fa1589b5f1fa631373de6d6849f5f6ab3bd9cec6cbccbdc5f093d55->enter($__internal_11ffeb1a5fa1589b5f1fa631373de6d6849f5f6ab3bd9cec6cbccbdc5f093d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_11ffeb1a5fa1589b5f1fa631373de6d6849f5f6ab3bd9cec6cbccbdc5f093d55->leave($__internal_11ffeb1a5fa1589b5f1fa631373de6d6849f5f6ab3bd9cec6cbccbdc5f093d55_prof);

        
        $__internal_82425d38fd4713257a8306c2470956e956662519cc2ef6bffa979336fe1b2788->leave($__internal_82425d38fd4713257a8306c2470956e956662519cc2ef6bffa979336fe1b2788_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_23f49ce8604eb7989d04330de81a7ef703d27de36f104e5650313fa996f35dde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f49ce8604eb7989d04330de81a7ef703d27de36f104e5650313fa996f35dde->enter($__internal_23f49ce8604eb7989d04330de81a7ef703d27de36f104e5650313fa996f35dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_64d75691d3609a00189f694339b908ac42234f2e2d4871d3c4b8a666773e1ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d75691d3609a00189f694339b908ac42234f2e2d4871d3c4b8a666773e1ae4->enter($__internal_64d75691d3609a00189f694339b908ac42234f2e2d4871d3c4b8a666773e1ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_64d75691d3609a00189f694339b908ac42234f2e2d4871d3c4b8a666773e1ae4->leave($__internal_64d75691d3609a00189f694339b908ac42234f2e2d4871d3c4b8a666773e1ae4_prof);

        
        $__internal_23f49ce8604eb7989d04330de81a7ef703d27de36f104e5650313fa996f35dde->leave($__internal_23f49ce8604eb7989d04330de81a7ef703d27de36f104e5650313fa996f35dde_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\laragon\\www\\web3_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
