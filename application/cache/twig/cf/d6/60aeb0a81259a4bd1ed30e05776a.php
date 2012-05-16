<?php

/* square.html */
class __TwigTemplate_cfd660aeb0a81259a4bd1ed30e05776a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

\t<meta charset=\"utf-8\">
\t<title>市集 -「茶粥」</title>

\t<link rel=\"stylesheet\" href=\"";
        // line 8
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/css/reset.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/css/square.css\">
\t<script src=\"";
        // line 11
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/js/lib/sea.js\" data-main=\"";
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/js/squareinit\"></script>\t
\t
</head>

<body>
\t<div id=\"wrap\">
\t
\t\t<div id=\"main\">
\t\t\t<div id=\"selfjoin\" class=\"section\">";
        // line 19
        if (isset($context["words"])) { $_words_ = $context["words"]; } else { $_words_ = null; }
        echo twig_escape_filter($this->env, $_words_, "html", null, true);
        echo "</div>
\t\t\t<div id=\"selfbuilt\" class=\"section\"></div>
\t\t\t<div id=\"anonymous\" class=\"section\"></div>
\t\t</div>

\t\t<div id=\"foot\">
\t\t</div>

\t</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "square.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 19,  41 => 11,  36 => 10,  31 => 9,  26 => 8,  17 => 1,);
    }
}
