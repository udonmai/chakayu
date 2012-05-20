<?php

/* shitsu.html */
class __TwigTemplate_11b7a79a4d070becd4e8ffbbb5e4825e extends Twig_Template
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
\t<title>茶室 -「茶粥」</title>

\t<link rel=\"shortcut icon\" href=\"";
        // line 8
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/img/favicon.ico\">
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/css/reset.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/css/common.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/css/room.css\">
\t<script src=\"";
        // line 13
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/js/lib/sea.js\" data-main=\"";
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/js/roominit\"></script>\t
\t
</head>

<body>
\t<div id=\"wrap\">
\t
\t\t<div id=\"roomid\" style=\"display: none;\">";
        // line 20
        if (isset($context["roomid"])) { $_roomid_ = $context["roomid"]; } else { $_roomid_ = null; }
        echo twig_escape_filter($this->env, $_roomid_, "html", null, true);
        echo "</div>
\t\t
\t\t<div id=\"content\">
\t\t\t<div id=\"chatcontent\"></div>
\t\t\t<div id=\"chatform\">
\t\t\t\t<form id=\"sendform\">
\t\t\t\t\t<textarea id=\"msgtext\" name=\"msgtext\"></textarea>
\t\t\t\t\t<div id=\"btnarea\">
\t\t\t\t\t\t<input id=\"sendbtn\" value=\"发送\" type=\"button\" class=\"btn\">
\t\t\t\t\t\t<input id=\"cleanbtn\" value=\"清空\" type=\"button\" class=\"btn\">
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t<div>
\t
\t\t<div id=\"sidebar\">
\t\t\t<div id=\"member\"></div>
\t\t\t<div id=\"function\">
\t\t\t\t<div id=\"username\">";
        // line 38
        if (isset($context["username"])) { $_username_ = $context["username"]; } else { $_username_ = null; }
        echo twig_escape_filter($this->env, $_username_, "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t</div>

\t</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "shitsu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 38,  65 => 20,  51 => 13,  46 => 12,  41 => 11,  36 => 10,  31 => 9,  26 => 8,  17 => 1,);
    }
}
