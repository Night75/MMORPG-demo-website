<?php

/* WmsIntroductionBundle:introduction:contact.html.twig */
class __TwigTemplate_c3e600044714b138a5df727b6a4097c3 extends Twig_Template
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
\t<h2 >MES COORDONNEES</h2>

\t<div class=\"vcard\"> 
\t
\t\t<div> 
\t\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "path_public"), "html", null, true);
        echo "images/contact.png\" alt=\"-\"><span>Contact:</span>
\t\t\t<a class=\"fn n\">
\t\t\t\t <a class=\"family-name\">LAI</a>
\t\t\t\t <a class=\"given-name\">Jean-François</a> 
\t\t\t</a>
\t\t</div>
\t\t
\t\t<div>
\t\t\t <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getContext($context, "path_public"), "html", null, true);
        echo "images/mail.png\" alt=\"-\"><span>Email:</span>
\t\t\t <a class=\"email\" href=\"mailto:jf.lai@it-si.fr\" >jf.lai@it-si.fr</a>
\t\t</div>
\t\t\t
\t\t<div>
\t\t\t<img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getContext($context, "path_public"), "html", null, true);
        echo "images/phone.png\" alt=\"-\"><span>Téléphone:</span>
\t\t\t<a class=\"tel\">06-49-65-58-04</a>
\t\t</div>
\t\t
\t\t<div>
\t\t\t<img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getContext($context, "path_public"), "html", null, true);
        echo "images/adress.png\" alt=\"-\"><span>Adresse:</span>
\t\t\t<ul class=\"adr\"> 
\t\t\t\t\t<li class=\"street-address\">127, Avenue de Flandre</li><br/>
\t\t\t\t\t<li class=\"postal-code\">75019</li>
\t\t\t\t\t<li class=\"locality\">Paris</li> 
\t\t\t\t\t<li class=\"country-name\">France</li>
\t\t\t</ul>
\t\t</div>
\t\t
\t</div> <!-- fin de vcard-->

</div> <!-- fin de textcontent-->

<div class=\"asidepicture\">
    <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getContext($context, "path_public"), "html", null, true);
        echo "images/asidepicture4.png\" alt=\"CURICULUM VITAE\">
</div>

";
    }

    public function getTemplateName()
    {
        return "WmsIntroductionBundle:introduction:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 46,  68 => 32,  60 => 27,  52 => 22,  41 => 14,  31 => 6,  28 => 5,  23 => 3,);
    }
}
