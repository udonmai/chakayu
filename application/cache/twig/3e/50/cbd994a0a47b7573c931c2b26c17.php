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
        echo "static/css/login.css\">

</head>

<body>
\t<div id=\"wrap\">
\t
\t\t<div id=\"content\">
\t\t\t<div id=\"login\">
\t\t\t\t<div id=\"patternl\" class=\"lgsection\"></div>
\t\t\t\t<div id=\"tea\" class=\"lgsection\"></div>
\t\t\t\t<div id=\"patternr\" class=\"lgsection\"></div>
\t\t\t</div>
\t\t\t<div class=\"slip\"></div>
\t\t\t<div id=\"info\">
\t\t\t\t<div id=\"chakayu\">
\t\t\t\t\t<h2>茶粥</h3>
\t\t\t\t\t<br><br>
\t\t\t\t\t<p>「ちゃかゆ」，茶泡饭。</p>
\t\t\t\t\t<p>放上一颗话梅，亦或点缀些许的海苔，质朴却最真实。</p>
\t\t\t\t\t<br>
\t\t\t\t\t<p>周围甚是嘈杂，可是这里很安静。</p>
\t\t\t\t\t<p>虽然没有饭碗，你却可以品上一杯香茗。</p>
\t\t\t\t</div>
\t\t\t\t<div id=\"action\">
\t\t\t\t\t<p id=\"in\"><a href=\"https://graph.renren.com/oauth/authorize?client_id=";
        // line 37
        if (isset($context["post_parems"])) { $_post_parems_ = $context["post_parems"]; } else { $_post_parems_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_parems_, "client_appid"), "html", null, true);
        echo "&response_type=code&scope=";
        if (isset($context["post_parems"])) { $_post_parems_ = $context["post_parems"]; } else { $_post_parems_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_parems_, "client_scope"), "html", null, true);
        echo "&state=a%3d1%26b%3d2&redirect_uri=";
        if (isset($context["post_parems"])) { $_post_parems_ = $context["post_parems"]; } else { $_post_parems_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_parems_, "redirect_uri"), "html", null, true);
        echo "&x_renew=true\">请坐</a></p>
\t\t\t\t\t<br>
\t\t\t\t\t<p>我们不记录您的身份，使用人人帐号登陆。</p>
\t\t\t\t</div>
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
        return array (  75 => 37,  46 => 12,  41 => 11,  36 => 10,  31 => 9,  26 => 8,  17 => 1,);
    }
}
