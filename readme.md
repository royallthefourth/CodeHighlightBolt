Code Highlight
=======================

Code Highlight highlights syntax in code examples on blogs, forums and in fact on any web pages.

This extension is an adaptation of [highlight.js](https://highlightjs.org/)
See the [documentation](https://highlightjs.org/usage/) for more details on usage or the [demo](https://highlightjs.org/static/demo/) for a list of supported languages.

To use the extension, write your source format "formatted" code and wrap everything in a `<code>` via editing the source code. Then simply use the function __highlight()__ in your templates such as __{{ highlight(entry.body) }}__

To use syntax highlighting within a post, just wrap the intended block like so:
```html
<pre>
    <code class="html">
        <p>this will be highlighted</p>
    </code>
</pre>
```