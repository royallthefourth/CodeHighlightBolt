Code Highlight
=======================

Code Highlight highlights syntax in code examples on blogs, forums and in fact on any web pages.

This extension is an adaptation of the famous plugin [HIGHLIGHT.JS](http://softwaremaniacs.org/soft/highlight/en/)

To use the extension, write your source format "formatted" code and wrap everything in a ```<code>``` via editing the source code. Then simply use the function __highlight()__ in your templates such as __{{ highlight(entry.body) }}__

If you want to modify an existing theme or create your own, read the file assets/classref.txt which lists all the css class to use in your css stylesheet.