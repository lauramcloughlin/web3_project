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
        $__internal_3550f6c82f7f32351ad3f9e83b7f2e59eb642bcaec55d37454e08bbae25b0723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3550f6c82f7f32351ad3f9e83b7f2e59eb642bcaec55d37454e08bbae25b0723->enter($__internal_3550f6c82f7f32351ad3f9e83b7f2e59eb642bcaec55d37454e08bbae25b0723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b4ecd83ca6bdf6eb546e034f9e7ee6401bc3d56d561761e6e2c9b02de0579dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ecd83ca6bdf6eb546e034f9e7ee6401bc3d56d561761e6e2c9b02de0579dd9->enter($__internal_b4ecd83ca6bdf6eb546e034f9e7ee6401bc3d56d561761e6e2c9b02de0579dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <section class=\"header\">
           <h1>Bibliography Manager</h1>
        </section>
    </header>
    <main>

        <section class=\"side_nav\">
            <ul>
                <li><h3><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_index");
        echo "\">References</a></h3></li>
                <li><h3><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_index");
        echo "\">Bibliography</a></h3></li>
                <li><h3><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">Tag</a></h3></li>
                <li><h3><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_basket_index");
        echo "\">New Bib References</a></h3></li>
            </ul>
         </section>

        ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "
    </main>


        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "
    <footer>
        <section>
            <h3>Laura McLoughlin - B00092153</h3>
        </section>
   </footer>
    </body>
</html>
";
        
        $__internal_3550f6c82f7f32351ad3f9e83b7f2e59eb642bcaec55d37454e08bbae25b0723->leave($__internal_3550f6c82f7f32351ad3f9e83b7f2e59eb642bcaec55d37454e08bbae25b0723_prof);

        
        $__internal_b4ecd83ca6bdf6eb546e034f9e7ee6401bc3d56d561761e6e2c9b02de0579dd9->leave($__internal_b4ecd83ca6bdf6eb546e034f9e7ee6401bc3d56d561761e6e2c9b02de0579dd9_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_6ddef05c71a891c86a6311a020960cd22de62d1e798ce490e84b86b381911fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ddef05c71a891c86a6311a020960cd22de62d1e798ce490e84b86b381911fb8->enter($__internal_6ddef05c71a891c86a6311a020960cd22de62d1e798ce490e84b86b381911fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_25fb0cb65e11c973fed94c3591f806a9c736236d7bf485004394f30a0c14e85e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25fb0cb65e11c973fed94c3591f806a9c736236d7bf485004394f30a0c14e85e->enter($__internal_25fb0cb65e11c973fed94c3591f806a9c736236d7bf485004394f30a0c14e85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        
        $__internal_25fb0cb65e11c973fed94c3591f806a9c736236d7bf485004394f30a0c14e85e->leave($__internal_25fb0cb65e11c973fed94c3591f806a9c736236d7bf485004394f30a0c14e85e_prof);

        
        $__internal_6ddef05c71a891c86a6311a020960cd22de62d1e798ce490e84b86b381911fb8->leave($__internal_6ddef05c71a891c86a6311a020960cd22de62d1e798ce490e84b86b381911fb8_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_261f482e1f1b01ae0228bdfe52122e150c98136f370f449e27fdc8802b5b00ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_261f482e1f1b01ae0228bdfe52122e150c98136f370f449e27fdc8802b5b00ea->enter($__internal_261f482e1f1b01ae0228bdfe52122e150c98136f370f449e27fdc8802b5b00ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dfae47624c354b17174c6e0130f39844bd7bf57714a830c59b985b183115ce9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfae47624c354b17174c6e0130f39844bd7bf57714a830c59b985b183115ce9e->enter($__internal_dfae47624c354b17174c6e0130f39844bd7bf57714a830c59b985b183115ce9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_dfae47624c354b17174c6e0130f39844bd7bf57714a830c59b985b183115ce9e->leave($__internal_dfae47624c354b17174c6e0130f39844bd7bf57714a830c59b985b183115ce9e_prof);

        
        $__internal_261f482e1f1b01ae0228bdfe52122e150c98136f370f449e27fdc8802b5b00ea->leave($__internal_261f482e1f1b01ae0228bdfe52122e150c98136f370f449e27fdc8802b5b00ea_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb6dd891a4a73d09b0b9d49312ccfbc5868ffc1124da1c375c85d048497491f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6dd891a4a73d09b0b9d49312ccfbc5868ffc1124da1c375c85d048497491f1->enter($__internal_fb6dd891a4a73d09b0b9d49312ccfbc5868ffc1124da1c375c85d048497491f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5776857f108a85db3e69144e1978a15bfd126ae4dfa34c40dae4d4b23875a703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5776857f108a85db3e69144e1978a15bfd126ae4dfa34c40dae4d4b23875a703->enter($__internal_5776857f108a85db3e69144e1978a15bfd126ae4dfa34c40dae4d4b23875a703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5776857f108a85db3e69144e1978a15bfd126ae4dfa34c40dae4d4b23875a703->leave($__internal_5776857f108a85db3e69144e1978a15bfd126ae4dfa34c40dae4d4b23875a703_prof);

        
        $__internal_fb6dd891a4a73d09b0b9d49312ccfbc5868ffc1124da1c375c85d048497491f1->leave($__internal_fb6dd891a4a73d09b0b9d49312ccfbc5868ffc1124da1c375c85d048497491f1_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8bf34caf1a4f32a8ce5b915cd06a2b6932106719ecaa3d15efb47f1cea0945da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf34caf1a4f32a8ce5b915cd06a2b6932106719ecaa3d15efb47f1cea0945da->enter($__internal_8bf34caf1a4f32a8ce5b915cd06a2b6932106719ecaa3d15efb47f1cea0945da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e512829a75906968921e29686b4812027eef32caf8d78b7a03c49d1956878ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e512829a75906968921e29686b4812027eef32caf8d78b7a03c49d1956878ae4->enter($__internal_e512829a75906968921e29686b4812027eef32caf8d78b7a03c49d1956878ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e512829a75906968921e29686b4812027eef32caf8d78b7a03c49d1956878ae4->leave($__internal_e512829a75906968921e29686b4812027eef32caf8d78b7a03c49d1956878ae4_prof);

        
        $__internal_8bf34caf1a4f32a8ce5b915cd06a2b6932106719ecaa3d15efb47f1cea0945da->leave($__internal_8bf34caf1a4f32a8ce5b915cd06a2b6932106719ecaa3d15efb47f1cea0945da_prof);

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
        return array (  180 => 40,  163 => 35,  151 => 12,  147 => 11,  143 => 10,  139 => 9,  134 => 8,  125 => 7,  108 => 5,  90 => 41,  88 => 40,  82 => 36,  80 => 35,  73 => 31,  69 => 30,  65 => 29,  61 => 28,  45 => 15,  42 => 14,  40 => 7,  35 => 5,  29 => 1,);
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
        <section class=\"header\">
           <h1>Bibliography Manager</h1>
        </section>
    </header>
    <main>

        <section class=\"side_nav\">
            <ul>
                <li><h3><a href=\"{{ path('reference_index') }}\">References</a></h3></li>
                <li><h3><a href=\"{{ path('bibliography_index') }}\">Bibliography</a></h3></li>
                <li><h3><a href=\"{{ path('tag_index') }}\">Tag</a></h3></li>
                <li><h3><a href=\"{{ path('reference_basket_index') }}\">New Bib References</a></h3></li>
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
