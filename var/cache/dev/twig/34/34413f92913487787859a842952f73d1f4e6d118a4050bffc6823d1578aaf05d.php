<?php

/* tag/show.html.twig */
class __TwigTemplate_0cd671269d498a1ebfa05738fb471caead880542394927caa2f50795ed8adec7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f37132d4095f2f0c45414e8da0bb125a9d579d407536b26cbf606b72094cf6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f37132d4095f2f0c45414e8da0bb125a9d579d407536b26cbf606b72094cf6c->enter($__internal_2f37132d4095f2f0c45414e8da0bb125a9d579d407536b26cbf606b72094cf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/show.html.twig"));

        $__internal_4276faf44c816d12892f05927f7865168dc4fbb499e065d2cb3e25ffadbfff62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4276faf44c816d12892f05927f7865168dc4fbb499e065d2cb3e25ffadbfff62->enter($__internal_4276faf44c816d12892f05927f7865168dc4fbb499e065d2cb3e25ffadbfff62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f37132d4095f2f0c45414e8da0bb125a9d579d407536b26cbf606b72094cf6c->leave($__internal_2f37132d4095f2f0c45414e8da0bb125a9d579d407536b26cbf606b72094cf6c_prof);

        
        $__internal_4276faf44c816d12892f05927f7865168dc4fbb499e065d2cb3e25ffadbfff62->leave($__internal_4276faf44c816d12892f05927f7865168dc4fbb499e065d2cb3e25ffadbfff62_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_063317e5faeb3461b95a3b8ace1f2d5c0955317d98652913b9cb71bb411948c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_063317e5faeb3461b95a3b8ace1f2d5c0955317d98652913b9cb71bb411948c5->enter($__internal_063317e5faeb3461b95a3b8ace1f2d5c0955317d98652913b9cb71bb411948c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec197c705288384acc2431d5b5a68a5458ce839ec936cc2d6e0b53cf892dcc38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec197c705288384acc2431d5b5a68a5458ce839ec936cc2d6e0b53cf892dcc38->enter($__internal_ec197c705288384acc2431d5b5a68a5458ce839ec936cc2d6e0b53cf892dcc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>Tag</h2>

    <table>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tag Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "tagName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "status", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>No of Votes</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "noOfVotes", array()), "html", null, true);
        echo "</td>
            </tr>
    </table>
    ";
        // line 25
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 26
            echo "    <h3>References with ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "tagName", array()), "html", null, true);
            echo " tag</h3>
    <table>
        <tr>
           <td>";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "tagReferences", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tagReference"]) {
                // line 30
                echo "                           <li>
                               <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_show", array("id" => $this->getAttribute(                // line 32
$context["tagReference"], "id", array()))), "html", null, true);
                // line 33
                echo "\">
                                   ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["tagReference"], "nameOfAuthor", array()), "html", null, true);
                echo "
                               </a>
                           </li>
             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tagReference'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "</td>
        </tr>
    </table>
    ";
        }
        // line 41
        echo "
    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">Back to the list</a>
        </li>
        ";
        // line 46
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 47
            echo "        <li>
            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_edit", array("id" => $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "id", array()))), "html", null, true);
            echo "\">Edit</a>
        </li>
        ";
        }
        // line 51
        echo "
    </ul>
</section>
";
        
        $__internal_ec197c705288384acc2431d5b5a68a5458ce839ec936cc2d6e0b53cf892dcc38->leave($__internal_ec197c705288384acc2431d5b5a68a5458ce839ec936cc2d6e0b53cf892dcc38_prof);

        
        $__internal_063317e5faeb3461b95a3b8ace1f2d5c0955317d98652913b9cb71bb411948c5->leave($__internal_063317e5faeb3461b95a3b8ace1f2d5c0955317d98652913b9cb71bb411948c5_prof);

    }

    public function getTemplateName()
    {
        return "tag/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 51,  137 => 48,  134 => 47,  132 => 46,  127 => 44,  122 => 41,  116 => 37,  106 => 34,  103 => 33,  101 => 32,  100 => 31,  97 => 30,  93 => 29,  86 => 26,  84 => 25,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<section class=\"main_content\">
    <h2>Tag</h2>

    <table>
            <tr>
                <th>Id</th>
                <td>{{ tag.id }}</td>
            </tr>
            <tr>
                <th>Tag Name</th>
                <td>{{ tag.tagName }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ tag.status }}</td>
            </tr>
            <tr>
                <th>No of Votes</th>
                <td>{{ tag.noOfVotes }}</td>
            </tr>
    </table>
    {% if (is_granted('ROLE_USER')) %}
    <h3>References with {{ tag.tagName }} tag</h3>
    <table>
        <tr>
           <td>{% for tagReference in tag.tagReferences %}
                           <li>
                               <a href=\"{{ path('reference_show', {
                                   'id': tagReference.id
                               }) }}\">
                                   {{ tagReference.nameOfAuthor }}
                               </a>
                           </li>
             {% endfor %}</td>
        </tr>
    </table>
    {% endif %}

    <ul>
        <li>
            <a href=\"{{ path('tag_index') }}\">Back to the list</a>
        </li>
        {% if (is_granted('ROLE_USER')) %}
        <li>
            <a href=\"{{ path('tag_edit', { 'id': tag.id }) }}\">Edit</a>
        </li>
        {% endif %}

    </ul>
</section>
{% endblock %}
", "tag/show.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\tag\\show.html.twig");
    }
}
