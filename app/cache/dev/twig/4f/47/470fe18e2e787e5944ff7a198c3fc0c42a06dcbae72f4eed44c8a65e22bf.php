<?php

/* WebProfilerBundle:Profiler:layout.html.twig */
class __TwigTemplate_4f47470fe18e2e787e5944ff7a198c3fc0c42a06dcbae72f4eed44c8a65e22bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "position" => "normal")));
        echo "

    <div id=\"content\">
        ";
        // line 8
        $this->env->loadTemplate("@WebProfiler/Profiler/header.html.twig")->display(array());
        // line 9
        echo "
        <div id=\"main\">

            <div class=\"clear-fix\">
                <div id=\"collector-wrapper\">
                    ";
        // line 14
        if ((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile"))) {
            // line 15
            echo "                        <div id=\"resume\">
                            <a id=\"resume-view-all\" href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("_profiler_search", array("limit" => 10));
            echo "\">View last 10</a>
                            <strong>Profile for:</strong>
                            ";
            // line 18
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "method")), "html", null, true);
            echo "
                            ";
            // line 19
            if (twig_in_filter(twig_upper_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "method")), array(0 => "GET", 1 => "HEAD"))) {
                // line 20
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "url"), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 22
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "url"), "html", null, true);
                echo "
                            ";
            }
            // line 24
            echo "                            <span class=\"date\">
                                <em>by ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "ip"), "html", null, true);
            echo "</em> at <em>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "time"), "r"), "html", null, true);
            echo "</em>
                            </span>
                        </div>
                    ";
        }
        // line 29
        echo "
                    <div id=\"collector-content\">
                        ";
        // line 31
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 32
        echo "                        ";
        $this->displayBlock('panel', $context, $blocks);
        // line 33
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 36
        if (array_key_exists("templates", $context)) {
            // line 37
            echo "                        <ul id=\"menu-profiler\">
                            ";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 39
                echo "                                ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "renderBlock", array(0 => "menu", 1 => array("collector" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"))), "method"), "html", null, true);
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 40
                echo "                                ";
                if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) != "")) {
                    // line 41
                    echo "                                    <li class=\"";
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                    if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == (isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")))) {
                        echo " selected";
                    }
                    echo "\">
                                        <a href=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
                    echo "\">";
                    echo (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"));
                    echo "</a>
                                    </li>
                                ";
                }
                // line 45
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                            <li class=\"minimize\">
                                <a href=\"javascript:void(0);\" title=\"Minimize toolbar\" onclick=\"return toggleMenuPanels();\">
                                    <span class=\"label\">
                                        <span class=\"icon\"><img id=\"minimizePanelIcon\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAhCAYAAADOHBvaAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA4tJREFUeNrkl19IU1Ecx7fZJN2arhq2JUWJlEZL1MAm1B582GBErMJqtabzRRAqFAYa9OfFFx+KQEG3MkYRZkkEJUUwctVSKCJWJojL1ZiydJvLtNXW98AW1znv7t0CHzrw5Xe3nXM/O/f8zvf8LjcajXJWo/E4q9T+P/CaNMZw29rahBMTE3LyoaKi4m1zc/M865swSS6bzZbT09NzfG5urjYUCikikYiQ+ntWVlZQKBQ+F4lE/Var9Ta+CmcK5hsMhpNer/fiwsLCFiYzycnJGZfJZOctFss9uj+wInhwcDDfbDb3+Hy+I+msoVQqNZtMpnNlZWUhxuChoaENHR0djwOBwN5MEkgsFtsGBgY0uPzOJKtzu7q6rmcKJW12dlaJpbqGy7WpwPyWlpZGj8dzkMX9B+l+dLlcda2trbrEHbQEPDY2Jh0dHTWxgF5AxqsRz9J1cjqdlxDWrwTO7u3tNWK7SFhAL8e221WE7pU6Ytk2t7e311JnTQWLJycntWyhpCmVShXCKboBMJyjCKJlzgVzKJiamtrBAKoH1JoAvU+2MN2g6enp3QgboRnqjHl2u70kHA7zU0APpQMlze/357vd7gKyhang7GAwKEsx1gLoAwp0E8JdJtB4w1LK4sw4OAtWl51inBGwAxT/9iLUQb+ZgsHgJ4I5hYWFAQZjbYBrKPB+hGNM4DweL1pUVBRMzOpweXm5WyAQ/GIAfwj4GbZwiUTyIy8vby7eLw4mQH9paamX4VO7kgTeTTeguLjYg0AOjAgVTD58UygUb1i41l84ogGhka4z+rwi9p3MQHwajeYRjrNFlvBbiDfoOmFtQzU1NU/J5JKBA3w+/71er3/J8hA6kSKpOPX19c9w+YH4VDIwqRbG1Wr1HZVK5eX8o6bVaj9XV1cTk3HFcinpsUjs7AWKNwvWO5gpFI93pqmpyYxLB0neVBUIcaI90OHOzs7TfX19ErZA8niNRuNXnU53M2apTmiBSc0lgEoh9cjIiBYV5i6c1YxKYblc/rOhoeEdIin2nkCfoHk2VSYpV7ZCVdB+h8OxDyocHh4WoEJZskRwvUhVVVUIcldWVtrx1XPoNfQFWkynvCWzzIe2QSXQTmg7Od5QT+WinuagliaFnI8kJvQxJpJIATo34zJ8WyR/YF2sfBFDpKCPHyqLMUeajSVniJq9mYKXjUtwPdY34a7W+/EfAQYAZM5kh2zoNWsAAAAASUVORK5CYII=\" alt=\"\"></span>
                                        <strong>Minimize</strong>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    ";
        }
        // line 56
        echo "                    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_search_bar"));
        echo "
                    ";
        // line 57
        $this->env->loadTemplate("@WebProfiler/Profiler/admin.html.twig")->display(array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token"))));
        // line 58
        echo "                </div>
            </div>
        </div>
    </div>

    <script>//<![CDATA[

        function toggleMenuPanels(state, doSave) {
            var leftIconPath = \"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAhCAYAAADOHBvaAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA4tJREFUeNrkl19IU1Ecx7fZJN2arhq2JUWJlEZL1MAm1B582GBErMJqtabzRRAqFAYa9OfFFx+KQEG3MkYRZkkEJUUwctVSKCJWJojL1ZiydJvLtNXW98AW1znv7t0CHzrw5Xe3nXM/O/f8zvf8LjcajXJWo/E4q9T+P/CaNMZw29rahBMTE3LyoaKi4m1zc/M865swSS6bzZbT09NzfG5urjYUCikikYiQ+ntWVlZQKBQ+F4lE/Var9Ta+CmcK5hsMhpNer/fiwsLCFiYzycnJGZfJZOctFss9uj+wInhwcDDfbDb3+Hy+I+msoVQqNZtMpnNlZWUhxuChoaENHR0djwOBwN5MEkgsFtsGBgY0uPzOJKtzu7q6rmcKJW12dlaJpbqGy7WpwPyWlpZGj8dzkMX9B+l+dLlcda2trbrEHbQEPDY2Jh0dHTWxgF5AxqsRz9J1cjqdlxDWrwTO7u3tNWK7SFhAL8e221WE7pU6Ytk2t7e311JnTQWLJycntWyhpCmVShXCKboBMJyjCKJlzgVzKJiamtrBAKoH1JoAvU+2MN2g6enp3QgboRnqjHl2u70kHA7zU0APpQMlze/357vd7gKyhang7GAwKEsx1gLoAwp0E8JdJtB4w1LK4sw4OAtWl51inBGwAxT/9iLUQb+ZgsHgJ4I5hYWFAQZjbYBrKPB+hGNM4DweL1pUVBRMzOpweXm5WyAQ/GIAfwj4GbZwiUTyIy8vby7eLw4mQH9paamX4VO7kgTeTTeguLjYg0AOjAgVTD58UygUb1i41l84ogGhka4z+rwi9p3MQHwajeYRjrNFlvBbiDfoOmFtQzU1NU/J5JKBA3w+/71er3/J8hA6kSKpOPX19c9w+YH4VDIwqRbG1Wr1HZVK5eX8o6bVaj9XV1cTk3HFcinpsUjs7AWKNwvWO5gpFI93pqmpyYxLB0neVBUIcaI90OHOzs7TfX19ErZA8niNRuNXnU53M2apTmiBSc0lgEoh9cjIiBYV5i6c1YxKYblc/rOhoeEdIin2nkCfoHk2VSYpV7ZCVdB+h8OxDyocHh4WoEJZskRwvUhVVVUIcldWVtrx1XPoNfQFWkynvCWzzIe2QSXQTmg7Od5QT+WinuagliaFnI8kJvQxJpJIATo34zJ8WyR/YF2sfBFDpKCPHyqLMUeajSVniJq9mYKXjUtwPdY34a7W+/EfAQYAZM5kh2zoNWsAAAAASUVORK5CYII=\",
                rightIconPath = \"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAhCAYAAADOHBvaAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA4tJREFUeNrsl11IU2EYx91ytrnpmmy4TYNkqGhEJGiiabuQ2EAiZ1kZW9NtF4pgoBB40weJeCHVjReygVmuIhP6gLoJJNQGadhiJcLa2sb8KN2nrprbel7YYh7WzjnOsIsO/Hnes533/Z33PB/nOZRIJJK2GwflP/ifBg8MDGTOzs4eQeOCggJjb2+vH4aRvwGmyeXyZq/Xe9rv99eGQqHs+D+pVKqfxWJNZ2VlPdRoNPfFYnEgVTBNpVI1Op3OG4FAQETkDul0uo3P518dHh6+B6dB0uC5uTlWf3//zcXFRfV2fMjlcsfUarVGIpG4yYCZDQ0Nz10ulziVAGKz2W+7u7ulNTU1q0TAdKVSOWi1Wlt2InqFQuFTvV5/HoYbW+ICc116T0/PBQLQl0TBEB8nYddtKF6SgXNMJtM1nLUuTUxMSMFeIQqfn5+/vLCwIPgTOL2vr++sx+PJS7LGEEBvowHY60ThkII8iHIVDDMSgbMtFssZnDXkkKOS2AkZuM1mk4HhJAJzV1ZWDuHMZ4DGE8AVeODl5eVin8+XiwVT7HZ7rtvt3kfg5hPB74I5lWxSMBikTU5OlsSYMTAVHoWQRJYg+COA8+PgT8Dokk2CkiuM+fk3mMFg0EiAQ6AWgC3FfoCbOA5GlfRuGQwE3bPFxyKRyAvFPkIQeg6gY3HQerRpvIn5+fkerI9DUN58PB4vsA1oJ5hneFAmk7lZVlZmj704YuAwSrfCwkInzvyhBNBbRHxTWlqK3IJeGJvYdHLBQm9w5rfBNUqyUHRUVVW9A7Ma3eSWlwRK7np4/w6azWYWzjp6UDNRqEAg+DEyMtJJo9Eew+k37I59oI+tra2vIMjw1momkQFpCoViGqAfYOhJVLnQs7dWV1ePy2SyLzvV1EEjsCSVSh/A0BzfkWC3hpxv6Ojo0NbV1a2lCgW/eru6ulBRmQKt4TYCoIMg2ejo6EWdTpcXDodJQ5uamr62t7ffgSHy63tQgEjrkwkqBp0wGo2NWq32MNgMIsCioqJN6DRN5eXl43D6AsUNaJ1Ml7kXFRvQUVDtzMzMMYPBsB/EcjgcVEx7E66oqFivrKx0gFBKvkYuA6FY+b6d9hbVVTboAKgkKtTmcqHgM6G/TuNwOBvRFPmMmg3QJ5Alvlik0tCng1Bu50TznRV9Iuj4iaoeKkDRAPIlA6b67UTBlFvSi+zaR9svAQYA6+V18DvfH/8AAAAASUVORK5CYII=\",
                menu = document.getElementById('navigation'), savedState = Sfjs.getPreference('menu/displayState'),
                displayState, elem, className;

            if (savedState == null) {
                savedState = 'block';
            }

            displayState = state || (savedState == 'block' ? 'none' : 'block');

            if (typeof doSave === 'undefined') {
                doSave = true;
            }

            document.getElementById('searchBar').style.display = displayState;
            document.getElementById('adminBar').style.display = displayState;

            if (displayState == 'block') {
                Sfjs.removeClass(menu, 'collapsed-menu');
                Sfjs.removeClass(menu.parentNode.parentNode, 'collapsed-menu-parents');

                document.getElementById('minimizePanelIcon').src = leftIconPath;
            } else {
                Sfjs.addClass(menu, 'collapsed-menu');
                Sfjs.addClass(menu.parentNode.parentNode, 'collapsed-menu-parents');

                document.getElementById('minimizePanelIcon').src = rightIconPath;
            }

            if (doSave) {
                Sfjs.setPreference('menu/displayState', displayState);
            }

            try {
                canvasAutoUpdateOnThresholdChange(null);
            } catch (err) {

            }

            return false;
        }

        window.setTimeout(function() {
            if (document.getElementById('menu-profiler') == null) {
                return;
            }

            var menuItems = document.getElementById('menu-profiler').getElementsByTagName('LI'),
                elem, value, child, displayState = Sfjs.getPreference('menu/displayState');

            if (displayState == 'none') {
                toggleMenuPanels('none', false);
            }

            for (elem in menuItems) {
                if (typeof(menuItems[elem].children) != 'undefined' &&
                    menuItems[elem].children.length > 0) {
                    child = menuItems[elem].children[0]

                    if (child.getAttribute('title') == '' ||
                        child.getAttribute('title') == null) {
                        value = child.text.replace(/^\\s+/g, '').split('\\n')[0].replace(/\\s+\$/g, '');
                        child.setAttribute('title', value);
                    }
                }
            }
        }, 25);

    //]]></script>
";
    }

    // line 32
    public function block_panel($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 96,  254 => 92,  240 => 86,  238 => 85,  230 => 82,  221 => 77,  219 => 76,  217 => 75,  179 => 69,  159 => 61,  135 => 53,  78 => 22,  71 => 18,  209 => 82,  193 => 73,  154 => 58,  149 => 51,  133 => 42,  103 => 32,  95 => 28,  86 => 24,  57 => 12,  48 => 9,  51 => 10,  34 => 5,  31 => 4,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  199 => 71,  196 => 92,  182 => 70,  173 => 65,  158 => 80,  68 => 30,  62 => 27,  28 => 3,  357 => 123,  344 => 119,  341 => 118,  332 => 116,  327 => 114,  324 => 113,  318 => 111,  306 => 107,  297 => 104,  291 => 102,  263 => 95,  258 => 94,  243 => 88,  231 => 83,  224 => 79,  212 => 78,  202 => 94,  190 => 76,  187 => 70,  161 => 63,  143 => 55,  136 => 71,  122 => 37,  117 => 39,  112 => 35,  85 => 24,  75 => 19,  58 => 25,  44 => 10,  204 => 72,  188 => 90,  174 => 65,  171 => 64,  167 => 71,  138 => 54,  125 => 38,  121 => 50,  118 => 49,  104 => 32,  87 => 25,  49 => 14,  46 => 13,  27 => 3,  91 => 27,  88 => 25,  63 => 15,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  363 => 126,  358 => 151,  353 => 121,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 112,  309 => 108,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  288 => 101,  283 => 100,  281 => 114,  276 => 111,  274 => 97,  269 => 94,  265 => 96,  259 => 103,  255 => 93,  253 => 100,  235 => 83,  232 => 88,  227 => 81,  222 => 83,  210 => 77,  208 => 73,  189 => 71,  184 => 63,  175 => 58,  170 => 84,  166 => 54,  163 => 62,  155 => 47,  152 => 46,  144 => 49,  127 => 35,  109 => 34,  94 => 28,  82 => 22,  76 => 34,  61 => 15,  39 => 6,  36 => 5,  79 => 21,  72 => 18,  69 => 17,  54 => 12,  47 => 9,  42 => 7,  40 => 11,  37 => 10,  22 => 1,  164 => 58,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  120 => 40,  115 => 39,  111 => 38,  108 => 37,  106 => 36,  101 => 33,  98 => 32,  92 => 29,  83 => 25,  80 => 24,  74 => 22,  66 => 20,  60 => 18,  55 => 16,  52 => 15,  50 => 14,  41 => 8,  32 => 4,  29 => 3,  462 => 202,  453 => 199,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  387 => 164,  380 => 158,  373 => 156,  361 => 152,  355 => 150,  351 => 120,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 110,  312 => 109,  303 => 106,  300 => 105,  298 => 120,  289 => 113,  286 => 112,  278 => 98,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 97,  246 => 32,  241 => 93,  233 => 87,  229 => 87,  226 => 84,  220 => 81,  216 => 79,  213 => 78,  207 => 75,  203 => 78,  200 => 72,  197 => 69,  194 => 68,  191 => 77,  185 => 74,  181 => 65,  178 => 59,  176 => 64,  172 => 57,  168 => 62,  165 => 83,  162 => 57,  156 => 62,  153 => 77,  150 => 55,  147 => 50,  141 => 48,  134 => 54,  130 => 41,  123 => 41,  119 => 42,  116 => 41,  113 => 48,  105 => 25,  102 => 32,  99 => 31,  96 => 31,  90 => 42,  84 => 40,  81 => 23,  73 => 19,  70 => 15,  67 => 17,  64 => 19,  59 => 14,  53 => 12,  45 => 8,  43 => 9,  38 => 7,  35 => 5,  33 => 4,  30 => 3,);
    }
}
