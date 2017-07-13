Members Form
=============

Welcome

I want to indroduce You a simple application in Symfony. 

What this app do:
-----------------

**registration** - after registration app automatically login on new account. Also you can't set the same 
username or email twice or more. Username and email are unique.

**login** - option Logout shows only when you are logged 

**sending message**


Below how this app looks:

<img width="300" alt="zrzut ekranu 2017-07-13 o 18 51 59" src="https://user-images.githubusercontent.com/27738202/28178771-e4eb7dd4-67ff-11e7-8831-44a7f3822be1.png">
<img width="300" alt="zrzut ekranu 2017-07-13 o 18 51 27" src="https://user-images.githubusercontent.com/27738202/28178730-c52a9908-67ff-11e7-8db5-069d4c4c41c2.png">
<img width="300" alt="zrzut ekranu 2017-07-13 o 18 51 40" src="https://user-images.githubusercontent.com/27738202/28178767-e207a412-67ff-11e7-8af0-6dade7b5ceb5.png">

For start if You want any help how to start with Symfony please go check [Installing & Setting up the Symfony Framework][6].

My application is using Symfony 3.3.4

What's inside
-------------

[**Password Encoder Algorithm**][1] - link to documentation

[**Encoding password**][2] - link to documentation

[**Databases and the Doctrine ORM**][3] - link to documentation

[**Entity**][4] - link to documentation

[**Forms**][5] - link to documentation

What to do before running
-------------------------

**1. Type email** - in SupportController you have to put your email in line 36

**2. Send** - type some email, text and click Send. You should notice in Symfony Profiler that your message
              was send to email. And check your email box.
              
**3. Parameters** - set your own parameters in parameters.yml


**Enjoy!**
[1]:    https://symfony.com/doc/current/security/named_encoders.html
[2]:    http://symfony.com/blog/new-in-symfony-2-7-security-improvements
[3]:    http://symfony.com/doc/current/doctrine.html
[4]:    https://symfony.com/doc/current/bundles/SensioGeneratorBundle/commands/generate_doctrine_entity.html
[5]:    http://symfony.com/doc/current/forms.html
[6]:    https://symfony.com/doc/current/setup.html
