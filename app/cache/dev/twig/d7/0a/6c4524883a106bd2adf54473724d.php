<?php

/* WmsIntroductionBundle:introduction:accueil.html.twig */
class __TwigTemplate_d70a6c4524883a106bd2adf54473724d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WmsIntroductionBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WmsIntroductionBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["path_public"] = $this->env->getExtension('assets')->getAssetUrl("bundles/wmsintroduction/");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"textcontent\">
\t<h2 >BIENVENUE</h2>
    \t\t<p>Je m’appelle LAI Jean-François, j’intègre cette année une formation développeur WEB/SQL en contrat de professionnalisation à l’IT-SI. <br/>
\t\t\tDiplomé d’un M2 en Génie Civil et Infrastructures, mais surtout passioné par l’informatique, je décide de me réorienter vers le développement Web.<br/>
\t\t\tA présent totalement satisfait de ce choix, je porte de réelles ambitions de réussite et d’épanouissement dans le secteur.<br/>
\t\t\tJe vous propose donc mes services en tant qu'intégrateur web en contrat de professionnalisation.<br/>
\t\t\tVous trouverez à travers ce site des informations sur mon parcours, quelques renseignements personnels ainsi que mes coordonnées.<br/><br/>
\t\t\tBonne navigation!
\t\t\t</p>\t\t
</div> <!-- fin de textcontent-->
\t
<div class=\"asidepicture\">
\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "path_public"), "html", null, true);
        echo "images/asidepicture1.png\" alt=\"ACCUEIL\">
</div>


";
    }

    public function getTemplateName()
    {
        return "WmsIntroductionBundle:introduction:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 19,  31 => 6,  28 => 5,  23 => 3,);
    }
}
