---
extends: _layouts.post
title: Let's Encrypt All The Things
date: 2016-11-21
section: content
---

One of my least favorite parts about running a web server is maintaining certificates. Although I run a handful of servers all with varying certificates I don’t install new ones frequently enough to where I can do it with my eyes closed but I do install them frequently enough for it to be a pain in the ass each time.

So today when I decided I wanted to get some SEO gains and run this website over SSL I was half excited and half dreading running through the entire process of buying the cert (a headache in itself depending on the certificate authority) and fiddling with Apache.

To save myself some money I decided I would forget buying one and try out Let’s Encrypt. I’d read this process could be daunting and complex, but figured it I was going to do it I might as well go all in. To my surprise Digital Ocean (you don’t necessarily need Digital Ocean) has an awesome tutorial on how to install the client and even run an autorenewing cronjob on Ubuntu. The site was secured start to finish in less than 5 minutes, I saved myself roughly about $10 a year and am getting those sweet sweet SEO gains I mentioned.

Major kudos to everyone who has contributed to Let’s Encrypt, it seems pretty awesome so far.