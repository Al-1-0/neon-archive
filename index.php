<!doctype html>
<html lang='{{site_lang}}'>
<head>
<meta charset='utf-8'>
<title><last:ndxz_title /> : {{obj_name}}</title>
<last:page:meta />
<link rel='alternate' type='application/rss+xml' title='RSS' href='{{baseurl}}/xml/' />
<link rel='stylesheet' href='{{baseurl}}/ndxzsite/{{obj_theme}}/reset.css<last:page:version: />' type='text/css' />
<link rel='stylesheet' href='{{baseurl}}/ndxzsite/{{obj_theme}}/base.css<last:page:version: />' type='text/css' />
<link rel='stylesheet' href='{{baseurl}}/ndxzsite/{{obj_theme}}/style.css<last:page:version />' type='text/css' />
<link rel="stylesheet" href='{{baseurl}}/ndxzsite/{{obj_theme}}/icono.min.css'>
<last:page:css />
<last:page:javascript />
<last:page:onready /><plugin:backgrounder />
<script src="{{baseurl}}/ndxzsite/{{obj_theme}}/nav.js"></script>
</head>
<body class='{{object}} section-{{section_id}} exhibit-{{id}} format-{{format}}'>
<div id='wrapper'>
<div id='index' class>
<div class='container'>

<div class='top'>{{obj_itop}}</div>
<plugin:index:load_index />
<div class='bot'>{{obj_ibot}}</div>

<last:page:append_index />
</div>
</div>

<div id='exhibit' class>
<div class='container'>

<div class='top'><h2>NEoN Digital Arts Archive</h2></div>
<!-- text and image -->
<plugin:page:exhibit />
<!-- end text and image -->

</div>
</div>
<plugin:page:append_page />
<plugin:page:closing />
</div>

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

</body>
</html>
