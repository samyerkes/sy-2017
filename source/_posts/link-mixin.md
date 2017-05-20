---
extends: _layouts.post
title: A Sassy Link Mixin
date: 2014-03-24
section: content
---

Lately I've been trying to get myself to write more @mixins, because I've found they help standardize components in Sass. Last night I wrote this @mixin I believe creates a really good baseline for links in a project.

It goes a little something like this:

    $link: #e74c3c !default

    @mixin link()
        color: $link
        text-decoration: none
        [at]include print
            &:after
                content: " ("attr(href)") "
        &:hover, &:focus
            color: lighten($link, 15%)
            text-decoration: underline

Since moving over to Sass I've been pretty good about writing :hover and :focus states for my links, but I admit it can be tedious. It also hooks into another [at]include print @mixin I've recently begun using for creating a seperate print stylesheet.

    $print: false !default

    @mixin print()
        [at]if $print == true
            content

So getting back to the link @mixin, it will display the link url (perfect for printed pages) after the link text, but only if the variable $print: true is in the global stylesheet.

I would typically use this mixin in a typography.sass file and just declare:

    a
        [at]include link

###BOOM
