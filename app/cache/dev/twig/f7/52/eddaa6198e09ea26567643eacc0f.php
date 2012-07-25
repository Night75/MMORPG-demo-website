<?php

/* WmsIntroductionBundle:introduction:apropos.html.twig */
class __TwigTemplate_f752eddaa6198e09ea26567643eacc0f extends Twig_Template
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
\t
\t<h2>MA PERSONNALITE</h2>
  \t  <p>En ce qui concerne les bons points de ma personalité, je me vois comme quelqu’un de calme et réfléchi, 
    \t\tje suis motivé dans tous les projets que j'entreprends et investi dans mon travail.
    \t\tDe nature curieuse, j’apprécie les activités riches en enseignements.<br>
\t\t\tQuant à mes défauts... je ne préfère pas tout dévoiler en ligne sous les yeux de tous!
\t</p>
\t\t\t
    <h2>MES CENTRES D’INTERETS</h2>
    <p>J’ai pratiqué régulièrement  le tennis de table, football et basketball pendant plus de 6ans. Mon sport du moment est le roller (slalom, randonnées, street hockey).<br>
\t\tMes autres passions sont les jeux vidéos, les séries TV, la culture japonaise et bien sûr l’informatique!
\t</p>
\t\t\t
    <h2>MON PROJET PROFFESSIONNEL</h2>
    <p>Mon rêve est de maîtriser toutes les technologies du web possibles, j’espère devenir dans un futur proche développeur web confirmé.<br>
\t\tMais dans l’immédiat je souhaite me constituer de solides bases et ainsi occpuper un poste en contrat de professionnalisation.
\t</p>

</div> <!-- fin de textcontent-->
\t
<div class=\"asidepicture\">
\t<img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getContext($context, "path_public"), "html", null, true);
        echo "images/asidepicture3.png\" alt=\"A PROPOS DE...\">
 </div>

";
    }

    public function getTemplateName()
    {
        return "WmsIntroductionBundle:introduction:apropos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 29,  31 => 6,  28 => 5,  23 => 3,);
    }
}
