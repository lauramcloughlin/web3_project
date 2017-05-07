<?php

/* base.html.twig */
class __TwigTemplate_e278b38be6267fb8edcf06d628eb15b2955ce13b7e8f0f6d9ff7e3ee435daf55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb72191ca55472bef34efd57aa44101e819fff81214ac715554b220592785c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb72191ca55472bef34efd57aa44101e819fff81214ac715554b220592785c3e->enter($__internal_eb72191ca55472bef34efd57aa44101e819fff81214ac715554b220592785c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b7c56fa6747ba2a3c610a70e5269855d52205f3854c0c942475ae580b577029a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c56fa6747ba2a3c610a70e5269855d52205f3854c0c942475ae580b577029a->enter($__internal_b7c56fa6747ba2a3c610a70e5269855d52205f3854c0c942475ae580b577029a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Bibliography Manager ";
        // line 5
        $this->displayBlock('pageTitle', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    </head>
    <body>
    <header>
        <section class=\"header_left\"><h1>Bibliography Manager</h1></section>
        <section class=\"header_right\">
            ";
        // line 22
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 23
            echo "                <h3><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">Logout</a></h3>
            ";
        } else {
            // line 25
            echo "                <h3><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">Login</a></h3>
            ";
        }
        // line 27
        echo "            ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) ? ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array())) : ("")), "html", null, true);
        echo "
        </section>
    </header>
     </section>
    </header>
    <main>

        <section class=\"side_nav\">
            <ul>
                <li><h3><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_index");
        echo "\">References</a></h3></li>
                <li><h3><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_index");
        echo "\">Bibliography</a></h3></li>
                <li><h3><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">Tag</a></h3></li>
                <li><h3><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_basket_index");
        echo "\">New Bib References</a></h3></li>
                ";
        // line 40
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 41
            echo "                <li><h3><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
            echo "\">Admin</a></h3></li>
                ";
        }
        // line 43
        echo "            </ul>
         </section>

        ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "
    </main>


        ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "
    <footer>
        <section>
            <h3>Laura McLoughlin - B00092153</h3>
        </section>
   </footer>
    </body>
</html>
";
        
        $__internal_eb72191ca55472bef34efd57aa44101e819fff81214ac715554b220592785c3e->leave($__internal_eb72191ca55472bef34efd57aa44101e819fff81214ac715554b220592785c3e_prof);

        
        $__internal_b7c56fa6747ba2a3c610a70e5269855d52205f3854c0c942475ae580b577029a->leave($__internal_b7c56fa6747ba2a3c610a70e5269855d52205f3854c0c942475ae580b577029a_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_bd8946165d1dd8d3823ce4e1eeeb133e501fb8fb513f6176b2f4b2878288a063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd8946165d1dd8d3823ce4e1eeeb133e501fb8fb513f6176b2f4b2878288a063->enter($__internal_bd8946165d1dd8d3823ce4e1eeeb133e501fb8fb513f6176b2f4b2878288a063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_f9d8fbbb8d516f84a37fde8081c553022effd284984143f93f6fb21b1cce85a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d8fbbb8d516f84a37fde8081c553022effd284984143f93f6fb21b1cce85a8->enter($__internal_f9d8fbbb8d516f84a37fde8081c553022effd284984143f93f6fb21b1cce85a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        
        $__internal_f9d8fbbb8d516f84a37fde8081c553022effd284984143f93f6fb21b1cce85a8->leave($__internal_f9d8fbbb8d516f84a37fde8081c553022effd284984143f93f6fb21b1cce85a8_prof);

        
        $__internal_bd8946165d1dd8d3823ce4e1eeeb133e501fb8fb513f6176b2f4b2878288a063->leave($__internal_bd8946165d1dd8d3823ce4e1eeeb133e501fb8fb513f6176b2f4b2878288a063_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9bbf9d67dfbfb1b71c4de717ae8eedd8a13898047a7a8857027233525ffa7297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bbf9d67dfbfb1b71c4de717ae8eedd8a13898047a7a8857027233525ffa7297->enter($__internal_9bbf9d67dfbfb1b71c4de717ae8eedd8a13898047a7a8857027233525ffa7297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3694e5c725a9fab5ba3c0ccff3c10e80395b82889f8cf4cbfa2842b52b3467a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3694e5c725a9fab5ba3c0ccff3c10e80395b82889f8cf4cbfa2842b52b3467a8->enter($__internal_3694e5c725a9fab5ba3c0ccff3c10e80395b82889f8cf4cbfa2842b52b3467a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/root.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/basic.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/header.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/footer.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/layout.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_3694e5c725a9fab5ba3c0ccff3c10e80395b82889f8cf4cbfa2842b52b3467a8->leave($__internal_3694e5c725a9fab5ba3c0ccff3c10e80395b82889f8cf4cbfa2842b52b3467a8_prof);

        
        $__internal_9bbf9d67dfbfb1b71c4de717ae8eedd8a13898047a7a8857027233525ffa7297->leave($__internal_9bbf9d67dfbfb1b71c4de717ae8eedd8a13898047a7a8857027233525ffa7297_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_60c372a354a946427273bfde3948cd7639d0dce0b2eda70a48c7acd8c1f3803f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60c372a354a946427273bfde3948cd7639d0dce0b2eda70a48c7acd8c1f3803f->enter($__internal_60c372a354a946427273bfde3948cd7639d0dce0b2eda70a48c7acd8c1f3803f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_911d469bfaf0a64a61020cfc5b073fb9c5d6bf85360ce3d89899d41b51f3851f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911d469bfaf0a64a61020cfc5b073fb9c5d6bf85360ce3d89899d41b51f3851f->enter($__internal_911d469bfaf0a64a61020cfc5b073fb9c5d6bf85360ce3d89899d41b51f3851f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_911d469bfaf0a64a61020cfc5b073fb9c5d6bf85360ce3d89899d41b51f3851f->leave($__internal_911d469bfaf0a64a61020cfc5b073fb9c5d6bf85360ce3d89899d41b51f3851f_prof);

        
        $__internal_60c372a354a946427273bfde3948cd7639d0dce0b2eda70a48c7acd8c1f3803f->leave($__internal_60c372a354a946427273bfde3948cd7639d0dce0b2eda70a48c7acd8c1f3803f_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be623d34a0c5b77d8a85fb57f6c5adc4b05de0452a849d66be748587bbd63eb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be623d34a0c5b77d8a85fb57f6c5adc4b05de0452a849d66be748587bbd63eb0->enter($__internal_be623d34a0c5b77d8a85fb57f6c5adc4b05de0452a849d66be748587bbd63eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_802cea093bb19e9c11efa65d5e1368ccc057824254c9c402e2ea234212623f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802cea093bb19e9c11efa65d5e1368ccc057824254c9c402e2ea234212623f63->enter($__internal_802cea093bb19e9c11efa65d5e1368ccc057824254c9c402e2ea234212623f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_802cea093bb19e9c11efa65d5e1368ccc057824254c9c402e2ea234212623f63->leave($__internal_802cea093bb19e9c11efa65d5e1368ccc057824254c9c402e2ea234212623f63_prof);

        
        $__internal_be623d34a0c5b77d8a85fb57f6c5adc4b05de0452a849d66be748587bbd63eb0->leave($__internal_be623d34a0c5b77d8a85fb57f6c5adc4b05de0452a849d66be748587bbd63eb0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 51,  194 => 46,  182 => 12,  178 => 11,  174 => 10,  170 => 9,  165 => 8,  156 => 7,  139 => 5,  121 => 52,  119 => 51,  113 => 47,  111 => 46,  106 => 43,  100 => 41,  98 => 40,  94 => 39,  90 => 38,  86 => 37,  82 => 36,  69 => 27,  63 => 25,  57 => 23,  55 => 22,  45 => 15,  42 => 14,  40 => 7,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Bibliography Manager {% block pageTitle %}{% endblock %}</title>

        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/root.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/basic.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/header.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/footer.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/layout.css') }}\" />
        {% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    </head>
    <body>
    <header>
        <section class=\"header_left\"><h1>Bibliography Manager</h1></section>
        <section class=\"header_right\">
            {% if is_granted('ROLE_USER') %}
                <h3><a href=\"{{ path('security_logout') }}\">Logout</a></h3>
            {% else %}
                <h3><a href=\"{{ path('security_login') }}\">Login</a></h3>
            {% endif %}
            {{ app.user ? app.user.email }}
        </section>
    </header>
     </section>
    </header>
    <main>

        <section class=\"side_nav\">
            <ul>
                <li><h3><a href=\"{{ path('reference_index') }}\">References</a></h3></li>
                <li><h3><a href=\"{{ path('bibliography_index') }}\">Bibliography</a></h3></li>
                <li><h3><a href=\"{{ path('tag_index') }}\">Tag</a></h3></li>
                <li><h3><a href=\"{{ path('reference_basket_index') }}\">New Bib References</a></h3></li>
                {% if is_granted('ROLE_ADMIN') %}
                <li><h3><a href=\"{{ path('admin_index') }}\">Admin</a></h3></li>
                {% endif %}
            </ul>
         </section>

        {% block body %}{% endblock %}

    </main>


        {% block javascripts %}{% endblock %}

    <footer>
        <section>
            <h3>Laura McLoughlin - B00092153</h3>
        </section>
   </footer>
    </body>
</html>
", "base.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\base.html.twig");
    }
}
