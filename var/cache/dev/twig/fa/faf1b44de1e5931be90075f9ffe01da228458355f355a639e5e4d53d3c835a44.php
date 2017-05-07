<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_414e2cfb22f704342c952b34101ff9a4f7cf1c9e78bca8669ad22b976c0b5da2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8bccd28201a576d324699a6fcf23107895a61b1646504839662cbad85813f0ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bccd28201a576d324699a6fcf23107895a61b1646504839662cbad85813f0ae->enter($__internal_8bccd28201a576d324699a6fcf23107895a61b1646504839662cbad85813f0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5615dea4c04537681afe1c902219e41b329e79dc4d63f1d5791d6d38e7415df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5615dea4c04537681afe1c902219e41b329e79dc4d63f1d5791d6d38e7415df3->enter($__internal_5615dea4c04537681afe1c902219e41b329e79dc4d63f1d5791d6d38e7415df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bccd28201a576d324699a6fcf23107895a61b1646504839662cbad85813f0ae->leave($__internal_8bccd28201a576d324699a6fcf23107895a61b1646504839662cbad85813f0ae_prof);

        
        $__internal_5615dea4c04537681afe1c902219e41b329e79dc4d63f1d5791d6d38e7415df3->leave($__internal_5615dea4c04537681afe1c902219e41b329e79dc4d63f1d5791d6d38e7415df3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c7807e53264ad8748f989c3bdc1c26d3ce5d42a821f59d4ea3e358e51f6374bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7807e53264ad8748f989c3bdc1c26d3ce5d42a821f59d4ea3e358e51f6374bb->enter($__internal_c7807e53264ad8748f989c3bdc1c26d3ce5d42a821f59d4ea3e358e51f6374bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5e3d04418939ecf2e19f49fd6ceb733b8c805b0d977f1c462b4214833aad7b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3d04418939ecf2e19f49fd6ceb733b8c805b0d977f1c462b4214833aad7b79->enter($__internal_5e3d04418939ecf2e19f49fd6ceb733b8c805b0d977f1c462b4214833aad7b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5e3d04418939ecf2e19f49fd6ceb733b8c805b0d977f1c462b4214833aad7b79->leave($__internal_5e3d04418939ecf2e19f49fd6ceb733b8c805b0d977f1c462b4214833aad7b79_prof);

        
        $__internal_c7807e53264ad8748f989c3bdc1c26d3ce5d42a821f59d4ea3e358e51f6374bb->leave($__internal_c7807e53264ad8748f989c3bdc1c26d3ce5d42a821f59d4ea3e358e51f6374bb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5f3a916c78040155b26f1102899f4740b8782732496b2b4b55dde2f4a25ca726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3a916c78040155b26f1102899f4740b8782732496b2b4b55dde2f4a25ca726->enter($__internal_5f3a916c78040155b26f1102899f4740b8782732496b2b4b55dde2f4a25ca726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aedca3efbe37e0701a9fe54f0315198c7b7224bedb0eaa4ca366d839a6bba3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aedca3efbe37e0701a9fe54f0315198c7b7224bedb0eaa4ca366d839a6bba3fe->enter($__internal_aedca3efbe37e0701a9fe54f0315198c7b7224bedb0eaa4ca366d839a6bba3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_aedca3efbe37e0701a9fe54f0315198c7b7224bedb0eaa4ca366d839a6bba3fe->leave($__internal_aedca3efbe37e0701a9fe54f0315198c7b7224bedb0eaa4ca366d839a6bba3fe_prof);

        
        $__internal_5f3a916c78040155b26f1102899f4740b8782732496b2b4b55dde2f4a25ca726->leave($__internal_5f3a916c78040155b26f1102899f4740b8782732496b2b4b55dde2f4a25ca726_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c7df18cb403401ea71959527cc43174d75cba86c77a34d837bbd2f7e36269be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7df18cb403401ea71959527cc43174d75cba86c77a34d837bbd2f7e36269be->enter($__internal_4c7df18cb403401ea71959527cc43174d75cba86c77a34d837bbd2f7e36269be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e075983ef066c40386deba959c207355de6399ebe7a93c035c46553d4002a70a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e075983ef066c40386deba959c207355de6399ebe7a93c035c46553d4002a70a->enter($__internal_e075983ef066c40386deba959c207355de6399ebe7a93c035c46553d4002a70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e075983ef066c40386deba959c207355de6399ebe7a93c035c46553d4002a70a->leave($__internal_e075983ef066c40386deba959c207355de6399ebe7a93c035c46553d4002a70a_prof);

        
        $__internal_4c7df18cb403401ea71959527cc43174d75cba86c77a34d837bbd2f7e36269be->leave($__internal_4c7df18cb403401ea71959527cc43174d75cba86c77a34d837bbd2f7e36269be_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\laragon\\www\\web3_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
