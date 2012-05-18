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

\t\t<div id=\"top\">
\t\t\t<div id=\"logo\"></div>

\t\t\t<div id=\"profile\">
\t\t\t\t<div id=\"userId\">";
        // line 22
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "userId"), "html", null, true);
        echo "</div>
\t\t\t\t";
        // line 23
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "username"), "html", null, true);
        echo "
\t\t\t\t";
        // line 24
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "picurl"), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div id=\"main\">
\t\t\t<div id=\"latest-join\" class=\"section\">
\t\t\t\t";
        // line 30
        if (isset($context["latestjoin"])) { $_latestjoin_ = $context["latestjoin"]; } else { $_latestjoin_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_latestjoin_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "\t\t\t\t\t<div name=\"";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $_item_, "html", null, true);
            echo "\" class=\"ljroomsection\">
\t\t\t\t\t\t<div class=\"rs-above\">
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "\t\t\t</div>

\t\t\t<div id=\"self-built\" class=\"section\">
\t\t\t\t<div id=\"self-built-inner\">
\t\t\t\t";
        // line 41
        if (isset($context["selfbuilt"])) { $_selfbuilt_ = $context["selfbuilt"]; } else { $_selfbuilt_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_selfbuilt_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 42
            echo "\t\t\t\t\t<div name=\"";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "roomname"), "html", null, true);
            echo "\" class=\"sbroomsection\">
\t\t\t\t\t\t<div class=\"rs-above\">
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"rs-low\">
\t\t\t\t\t\t\t<div class=\"rsl-l\"></div>
\t\t\t\t\t\t\t<div class=\"rsl-r\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 52
        echo "\t\t\t\t</div>

\t\t\t\t<div id=\"create\" class=\"roomsection\">
\t\t\t\t\t<div class=\"textinput\">
\t\t\t\t\t\t<input id=\"createroom\" name=\"createroom\" type=\"text\">
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"blocka\" title=\"创建\">
\t\t\t\t\t\t<img src=\"";
        // line 59
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/img/tea.png\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div id=\"anonymous\" class=\"section\">
\t\t\t
\t\t\t</div>
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
        return array (  136 => 59,  127 => 52,  109 => 42,  104 => 41,  98 => 37,  84 => 31,  79 => 30,  69 => 24,  64 => 23,  59 => 22,  41 => 11,  36 => 10,  31 => 9,  26 => 8,  17 => 1,);
    }
}
