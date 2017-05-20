---
extends: _layouts.post
title: Compiling Sass
date: 2014-03-10
section: content
---

I haven't written a lick of CSS in over a year now because I've been on board the [SASS train](http://www.sass-lang.com). Sometimes I forget you even need semicolons and curly braces in CSS.

SASS is awesome for a number of reasons, but one feature I always use is @import into a global.sass file. I like to keep my SASS vey modular and organized so this way I know exactly where a property is in case it needs to be updated.

I usually break out the global.sass file into something similar to this:

    @import 'compass/css3'
    @import '_variables'
    @import '_mixins'
    @import '_base'
    @import '_typography'
    @import '_nav'

