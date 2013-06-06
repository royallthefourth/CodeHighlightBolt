<?php
// Code Highlight Extension for Bolt, by Mespeche

namespace CodeHighlightBolt;

use Bolt\BaseExtension as BoltExtension;

class Extension extends BoltExtension
{

    /**
     * Info block for Code Highlight Extension.
     */
    function info()
    {

        $data = array(
            'name' => "Code Highlight",
            'description' => "Code Highlight highlights syntax in code examples on blogs, forums and in fact on any web pages.",
            'keywords' => "code, highlight, custom, syntax",
            'author' => "Mespeche",
            'version' => "0.1",
            'required_bolt_version' => "1.0.2",
            'highest_bolt_version' => "1.0.2",
            'type' => "General",
            'first_releasedate' => "2013-05-24",
            'latest_releasedate' => "2013-05-24",
            'dependencies' => "",
            'priority' => 10
        );

        return $data;

    }

    /**
     * Initialize Code Highlight. Called during bootstrap phase.
     */
    function initialize()
    {

        // Make sure jQuery is included
        $this->addJquery();

        // Add javascript file
        $this->addJavascript("assets/highlight.js");

        // Add CSS file
        $theme = $this->config['theme'];
        $this->addCSS("assets/styles/" . $theme . ".css");

        $snippet = "<script>
                        $(document).ready(function() {
                            $('pre code').each(function(i, e) {hljs.highlightBlock(e)});
                        });
                    </script>";

        // Add string snippet to endofbody
        $this->insertSnippet('endofbody', $snippet);

        // Initialize the Twig function
        $this->addTwigFunction('highlight', 'twigHighlight');

    }

    /**
     * Twig function {{ highlight() }} in Code Highlight extension.
     */
    function twigHighlight($name="")
    {

        $html = $name;

        return new \Twig_Markup($html, 'UTF-8');

    }


}


