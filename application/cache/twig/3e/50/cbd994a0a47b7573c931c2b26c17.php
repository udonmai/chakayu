<?php

/* login.html */
class __TwigTemplate_3e50cbd994a0a47b7573c931c2b26c17 extends Twig_Template
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
\t<title>始めて -「茶粥」</title>

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
        echo "static/css/room.css\">

</head>

<body>
\t<div id=\"wrap\">
\t
\t\t<div id=\"main\">
\t\t\t<div id=\"logform\">
\t\t\t\t";
        // line 19
        if (isset($context["words"])) { $_words_ = $context["words"]; } else { $_words_ = null; }
        echo twig_escape_filter($this->env, $_words_, "html", null, true);
        echo "
\t\t\t\t<a href=\"https://graph.renren.com/oauth/authorize?client_id=";
        // line 20
        if (isset($context["post_parems"])) { $_post_parems_ = $context["post_parems"]; } else { $_post_parems_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_parems_, "client_appid"), "html", null, true);
        echo "&response_type=code&scope=";
        if (isset($context["post_parems"])) { $_post_parems_ = $context["post_parems"]; } else { $_post_parems_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_parems_, "client_scope"), "html", null, true);
        echo "&state=a%3d1%26b%3d2&redirect_uri=";
        if (isset($context["post_parems"])) { $_post_parems_ = $context["post_parems"]; } else { $_post_parems_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_parems_, "redirect_uri"), "html", null, true);
        echo "&x_renew=true\"><img src=\"";
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/img/renren/Renren_logo_32.png\" class=\"vm\" alt=\"renren\" /></a>
\t\t\t</div>
\t\t<div>

\t</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 20,  49 => 19,  36 => 10,  31 => 9,  26 => 8,  17 => 1,);
    }
}
