---
extends: _layouts.post
title: CSS Property Order
date: 2014-03-03
section: content
---

I've found my development time speed up significantly in the past year or so. This is in part for a few reasons, like utilizing Sass, Grunt and Git on a daily basis, but one other reason is because I've established a CSS property order that I like and have begun to stick to religiously when writing CSS/SASS. It took a little while to get use to but once I memorized it it became really easy to write that way and then later edit if need be.

I loosely base the order on a combination of the box model (outside to inside) and then alphabetical order, followed lastly by any SASSy stuff like mixins and extends.

Here's an abbreviated version:

    display
    position
    top
    right
    bottom
    left
    overflow
    width
    max-width
    height
    max-height
    margin
    padding
    border
    background
    color
    font
        family
        size
    text
    	align
    	style
    	transform
    @mixins
    @extend

Next thing I plan on establishing is ordering html attributes correctly. I really like [@mdo's](https://twitter.com/mdo) [Code Guide](http://mdo.github.io/code-guide/) so I'll probably look into utilizing some stuff from that into my own.