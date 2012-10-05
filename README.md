backtophp is a project whose initial goal is to create an application that will process Smarty templates and render them back into usable PHP. Eventually, Twig and possibly other templating engines will be supported.

There are numerous reasons for the necessity of this tool. Using templating languages in PHP, which is a templating language itself, is stupid and puts extra burden on both the developers and the system. The developers have to learn yet another useless language and the system has to process the templates, sometimes taking up a significant percentage of they total request processing time.

Thus the time has come for change. Feel free to join me on this journey and let's try to improve development practices and systems while teaching people about the importance of simplicity in design.

--lucian303

p.s. I intend to use TDD to develop this application so all code submitted must have unit tests covering it (if it makes sense), preferably created in a test driven environment, although if you want to write the tests later and they're good tests, I'll probably make an exception. :)

===

Currently, investigating whether to use Smarty2 or 3 since 3 supports most of 2's features, it seems. Will do a Smarty 3 code analysis.

--
backtophp is &copy; Copyright 2012 Lucian Hontau