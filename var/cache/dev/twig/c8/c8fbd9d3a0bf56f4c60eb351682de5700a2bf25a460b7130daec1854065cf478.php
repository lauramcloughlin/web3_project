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
        $__internal_2da156ab15ca0cfb3d501aa28fd26daf33a4a1d9346b56f153626823f39cf88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2da156ab15ca0cfb3d501aa28fd26daf33a4a1d9346b56f153626823f39cf88f->enter($__internal_2da156ab15ca0cfb3d501aa28fd26daf33a4a1d9346b56f153626823f39cf88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a8cc8a4b3431e46aab0382462bdd7c36f7cbd9a20d2c2eb6f0f91750b4f71af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8cc8a4b3431e46aab0382462bdd7c36f7cbd9a20d2c2eb6f0f91750b4f71af3->enter($__internal_a8cc8a4b3431e46aab0382462bdd7c36f7cbd9a20d2c2eb6f0f91750b4f71af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2da156ab15ca0cfb3d501aa28fd26daf33a4a1d9346b56f153626823f39cf88f->leave($__internal_2da156ab15ca0cfb3d501aa28fd26daf33a4a1d9346b56f153626823f39cf88f_prof);

        
        $__internal_a8cc8a4b3431e46aab0382462bdd7c36f7cbd9a20d2c2eb6f0f91750b4f71af3->leave($__internal_a8cc8a4b3431e46aab0382462bdd7c36f7cbd9a20d2c2eb6f0f91750b4f71af3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_97a1b2bc1240fafb3da2f39de04d52b05c5eb392daf61a856819f940affd970d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a1b2bc1240fafb3da2f39de04d52b05c5eb392daf61a856819f940affd970d->enter($__internal_97a1b2bc1240fafb3da2f39de04d52b05c5eb392daf61a856819f940affd970d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d51f828c1e0c894a27d65feff3e2ca09119138db6251a562e820d2fa30b5c7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51f828c1e0c894a27d65feff3e2ca09119138db6251a562e820d2fa30b5c7d1->enter($__internal_d51f828c1e0c894a27d65feff3e2ca09119138db6251a562e820d2fa30b5c7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d51f828c1e0c894a27d65feff3e2ca09119138db6251a562e820d2fa30b5c7d1->leave($__internal_d51f828c1e0c894a27d65feff3e2ca09119138db6251a562e820d2fa30b5c7d1_prof);

        
        $__internal_97a1b2bc1240fafb3da2f39de04d52b05c5eb392daf61a856819f940affd970d->leave($__internal_97a1b2bc1240fafb3da2f39de04d52b05c5eb392daf61a856819f940affd970d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f259ef731c2a6bb7bffb922a8ae4c597c668d01bea291a847c2d290ffbc6c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f259ef731c2a6bb7bffb922a8ae4c597c668d01bea291a847c2d290ffbc6c6c->enter($__internal_6f259ef731c2a6bb7bffb922a8ae4c597c668d01bea291a847c2d290ffbc6c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_31799a6d507eff93e5eb7e2312146a467a5408f28d68c601acfaa2398c47dafe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31799a6d507eff93e5eb7e2312146a467a5408f28d68c601acfaa2398c47dafe->enter($__internal_31799a6d507eff93e5eb7e2312146a467a5408f28d68c601acfaa2398c47dafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_31799a6d507eff93e5eb7e2312146a467a5408f28d68c601acfaa2398c47dafe->leave($__internal_31799a6d507eff93e5eb7e2312146a467a5408f28d68c601acfaa2398c47dafe_prof);

        
        $__internal_6f259ef731c2a6bb7bffb922a8ae4c597c668d01bea291a847c2d290ffbc6c6c->leave($__internal_6f259ef731c2a6bb7bffb922a8ae4c597c668d01bea291a847c2d290ffbc6c6c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3193aef0e5fd8024fdbec1d78e75d09f166ebf12936c6c0659b7f1cde641af02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3193aef0e5fd8024fdbec1d78e75d09f166ebf12936c6c0659b7f1cde641af02->enter($__internal_3193aef0e5fd8024fdbec1d78e75d09f166ebf12936c6c0659b7f1cde641af02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4c950d49ff06c8edb4727e71595055fb6e97d11521c2f18f0668e546cfe726aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c950d49ff06c8edb4727e71595055fb6e97d11521c2f18f0668e546cfe726aa->enter($__internal_4c950d49ff06c8edb4727e71595055fb6e97d11521c2f18f0668e546cfe726aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4c950d49ff06c8edb4727e71595055fb6e97d11521c2f18f0668e546cfe726aa->leave($__internal_4c950d49ff06c8edb4727e71595055fb6e97d11521c2f18f0668e546cfe726aa_prof);

        
        $__internal_3193aef0e5fd8024fdbec1d78e75d09f166ebf12936c6c0659b7f1cde641af02->leave($__internal_3193aef0e5fd8024fdbec1d78e75d09f166ebf12936c6c0659b7f1cde641af02_prof);

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
