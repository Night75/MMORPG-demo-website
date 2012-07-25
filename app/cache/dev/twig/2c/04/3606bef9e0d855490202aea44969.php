<?php

/* WmsIntroductionBundle:introduction:cv.html.twig */
class __TwigTemplate_2c043606bef9e0d855490202aea44969 extends Twig_Template
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
        echo "\t
<div class=\"textcontent\">
\t\t
\t<h2>FORMATION</h2>
\t
\t<table>
\t\t<tbody>
\t\t\t
\t\t\t<tr>
\t\t\t\t<td class=\"leftcell\">2011-2012</td>
\t\t\t\t<td>
\t\t\t\t\t<p>Formation en alternance Développement Web - PHP/SQL</p>
\t\t\t\t\t<p class=\"description\">Institut des Technologies du Système d'Information</p>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t
\t\t\t<tr>
\t\t\t\t<td class=\"leftcell\">2008-2010</td>
\t\t\t\t<td>
\t\t\t\t\t<p>M1 et M2 Génie civil et Infrastructures</p>
\t\t\t\t\t<p class=\"description\">Université de Cergy Pontoise</p>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t
\t\t\t<tr>
\t\t\t\t<td class=\"leftcell\">2004-2008</td>
\t\t\t\t<td>
\t\t\t\t\t<p>Licence de Physique</p>
\t\t\t\t\t<p class=\"description\">Université Paris 7 Denis Diderot</p>
\t\t\t\t</td>
\t\t\t</tr>\t\t
\t\t\t\t\t\t\t
\t\t</tbody>
\t</table>
\t
\t<h2>EXPERIENCES</h2>
\t
\t<table>
\t\t<tbody>
\t\t\t
\t\t\t<tr>
\t\t\t\t<td class=\"leftcell\">2010</td>
\t\t\t\t<td>
\t\t\t\t\t<p>Stage conducteur de travaux</p>
\t\t\t\t\t<p class=\"description\">5 mois chez Levaux - Logements étudiants à Bobigny(93)</p>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t
\t\t\t<tr>
\t\t\t\t<td class=\"leftcell\">2009</td>
\t\t\t\t<td>
\t\t\t\t\t<p>Stage conducteur de travaux</p>
\t\t\t\t\t<p class=\"description\">3 mois chez Fayolles et Fils - Secteur voirie à Paris 12ème</p>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t
\t\t\t<tr>
\t\t\t\t<td class=\"leftcell\">2008</td>
\t\t\t\t<td>
\t\t\t\t\t<p>Equipier polyvalent à Macdonald's</p>
\t\t\t\t</td>
\t\t\t</tr>\t
\t\t\t
\t\t\t<tr>
\t\t\t\t<td class=\"leftcell\">2007-2010</td>
\t\t\t\t<td>
\t\t\t\t\t<p>Professeur particulier de Maths, Physique-Chimie</p>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t
\t\t\t<tr>
\t\t\t\t<td class=\"leftcell\">2005-2007</td>
\t\t\t\t<td>
\t\t\t\t\t<p>Garde d'enfants</p>
\t\t\t\t</td>
\t\t\t</tr>\t\t
\t\t\t\t
\t\t</tbody>
\t</table>
\t
\t<h2>COMPETENCES</h2>
\t
\t<table>
\t\t<tbody>
\t\t\t
\t\t\t<tr>
\t\t\t\t<td class=\"leftcell\">Langages:</td>
\t\t\t\t<td>
\t\t\t\t\t<p><span class=\"description\">-Notions:  </span> PHP, MySQL, PHP Objet, Java <br/>
\t\t\t\t\t\t <span class=\"description\">-Familier: </span> HTML 5, CSS 3
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"description\"></p>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t
\t\t\t<tr>
\t\t\t\t<td class=\"leftcell\">Logiciels:</td>
\t\t\t\t<td>
\t\t\t\t\t<p><span class=\"description\">-Notions:  </span>Photoshop CS5 <br/>
\t\t\t\t\t\t <span class=\"description\">-Moyen: </span> Illustrator CS5 <br/>
\t\t\t\t\t\t <span class=\"description\">-Opérationnel: </span> Autocad(2D), Excel
\t\t\t\t\t</p>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t
\t\t</tbody>
\t</table>\t\t
</div> <!-- fin de textcontent-->
    \t
<div class=\"asidepicture\">
    <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->getContext($context, "path_public"), "html", null, true);
        echo "images/asidepicture2.png\" alt=\"CURICULUM VITAE\">
</div>

";
    }

    public function getTemplateName()
    {
        return "WmsIntroductionBundle:introduction:cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 116,  31 => 6,  28 => 5,  23 => 3,);
    }
}
