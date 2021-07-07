# neon-archive
Some modifications to make the www.neon-archive.com website (created with Indexhibit) more responsive and include a hamburger dropdown menu when screen is reduced to 900px or less.

List of files that were modified (in the ndxzsite Default folder)

- index.php
- style.css
- nav.js
- base.css

You will need this:

- icono.min.css

from here: https://saeedalipoor.github.io/icono/

Link it on index.php like this:

<link rel="stylesheet" href='{{baseurl}}/ndxzsite/{{obj_theme}}/icono.min.css'>


INDEXHIBIT MODIFICATIONS

- For the Logo and dropdown menu to work, I added the following code to the "Pre-Nav" text editor: /*

<a href="http://neon-archive.com/"<h1 class='h1'>NEoN DIGITAL ARTS ARCHIVE</h1></a></div> */

<div class='toggle-hold'><a href='#' id='toggle' class><i id='toggler' class="icono-hamburger" onclick="myFunction(); myFunction2(); changeHeight();"></i></a></div>


INDEX.PHP MODIFICATIONS USING JAVASCRIPT

- Add this before the </body> in the index.php file to make the modifications to the "Pre-Nav" text work:

<script>
function myFunction() {
  var x = document.getElementById("index");
  if (x.style.display === "block") {
    x.style.display = "exhibit";
  } else {
    x.style.display = "block";
    state = 1;
  }
}
function myFunction2() {
  var y = document.getElementById("exhibit");
  if (y.style.display === "none") {
    y.style.display = "block";
  } else {
    y.style.display = "none";
    state = 1;
  }
}
function changeHeight() {
  var x = document.getElementById('index');
  if (x.style.height === "100%") {
    x.style.height = "75px";
  } else {
    x.style.height = "100%";
    state = 1;
  }
}
</script>

INDEX.PHP LAYOUT MODIFICATIONS

- I used a <div> id #wrapper to to wrap around the original Indexhibit layout. 
- The <div id='wrapper'> is added to index.php before the <div id='index'> and closed after the 
  <plugin:page:closing /> line.
- Please note that for the JavaScript function "x.style.display" to work you should type <div id='index' class>  
  so that the class is blank :: this helps the function toggle work.

NAV.JS 

- I modified this file from https://eatock.com and made it so the opener and closer functions would link to the icons 
  'icono-hamburger' and 'icono-cross'
- It should work if you choose to use different icons for this purpose but make sure the icon names are the same in base.css 
  
BASE.CSS
  
- This is where to look out for #wrapper, #index, #exhibit rules.
- I used a little of bit code from http://eatock.com 
- The additional rules for the icons are in base.css
  
STYLE CSS:
  
- Here are the rules I used to make the site responsive and reveal the hamburger icon when screen is reduced to 900px or less:
  
@media only screen and (max-width: 900px) {

body { font-size: 16px;}
.p-white { font-size: 16px; color: #fff; text-shadow: 2px #fff}
.p-small { font-size: 9px;}
  
/* more rules to make site responsive */
#index { overflow: auto; position: fixed; height: 75px; width: 100vw; }
/* #index .active { height: 100%; width: 100vw !important;} */
#index .active { background: var(--bg); height: 100vh; width: 100vw; overflow: auto; }
#index .container, #exhibit .container { padding: var(--margin900px); }
/*#index .container { padding-top: 50px; } */
#index .top { display: flex; justify-content: space-between; }
#index .top .toggle-hold { display: block; }
#index nav { }
#index .bot { margin-top: 3em; position: relative; left: 0; bottom: auto; width: auto; }
#exhibit { margin: 0; padding-top: 75px; }
#exhibit p { width: auto; max-width: none !important; }

}


