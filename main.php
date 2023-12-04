<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Безымянная страница</title>
<?<php>
   define('DB_HOST', 'localhost');
</php>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="main.css" rel="stylesheet">
<script src="jquery-3.7.0.min.js"></script>
<script src="jquery.ui.effect.min.js"></script>
<script src="popper.min.js"></script>
<script src="bootstrap.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function(event)
{
   var ThemeableMenu1_dropdownToggle = document.querySelectorAll('#ThemeableMenu1 .dropdown-toggle');
   ThemeableMenu1_dropdownToggle.forEach(item => 
   {
      var dropdown = new bootstrap.Dropdown(item, {popperConfig:{placement:item.getAttribute('data-bs-placement')}});
   });
   var ThemeableMenu1_dropdown = document.querySelectorAll('#ThemeableMenu1 .dropdown');
   ThemeableMenu1_dropdown.forEach(item => 
   {
      item.addEventListener('shown.bs.dropdown', function(e)
      {
         e.currentTarget.classList.add('show');
      });
      item.addEventListener('hidden.bs.dropdown', function(e)
      {
         e.currentTarget.classList.remove('show');
      });
   });
});
</script>
<script>
$(document).ready(function()
{
   $("a[href*='#header']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_header').offset().top }, 600, 'easeOutCirc');
   });
});
</script>
</head>
<body>
<div id="container">
</div>
<div id="wb_header">
<div id="header">
<div class="row">
<div class="col-1">
<div id="wb_Breadcrumb1">
<ul id="Breadcrumb1">
<li><a href="">Главная</a></li>
</ul>

</div>
</div>
<div class="col-2">
<div id="wb_ThemeableMenu1">
<div id="ThemeableMenu1" class="ThemeableMenu1" style ="width:100%;height:auto !important;">
<div class="container">
<div class="navbar-header">
<button title="" type="button" class="navbar-toggle" data-bs-toggle="collapse" data-bs-target=".ThemeableMenu1-navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div class="ThemeableMenu1-navbar-collapse collapse">
<ul class="nav navbar-nav">
<li class="nav-item">
<a href="./main.php#home" class="nav-link">История, Традиции, Достижения</a>
</li>
<li class="nav-item">
<a href="" class="nav-link">Образование</a>
</li>
<li class="nav-item">
<a href="" class="nav-link">Воспитание, Идеология</a>
</li>
<li class="nav-item">
<a href="" class="nav-link">Учащимся</a>
</li>
<li class="nav-item">
<a href="" class="nav-link">Абитуриентам</a>
</li>
<li class="nav-item">
<a href="" class="nav-link">Профориентация</a>
</li>
<li class="nav-item">
<a href="" class="nav-link">Одно Окно</a>
</li>
<li class="nav-item">
<a href="" class="nav-link">Контакты</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="FlexGrid1">
<div class="first">
<div id="wb_Icon2">
<div id="Icon2"><i class="fa fa-home"></i></div>
</div>
</div>
<div class="two">
<div id="wb_Icon1">
<div id="Icon1"><i class="fa fa-edit"></i></div>
</div>
</div>
<div class="three">
<div id="wb_Icon4">
<div id="Icon4"><i class="fa fa-keyboard-o"></i></div>
</div>
</div>
<div class="four">
<div id="wb_Icon3">
<div id="Icon3"><i class="fa fa-asterisk"></i></div>
</div>
</div>
</div>
<div id="wb_LayoutGrid1">
<div id="LayoutGrid1">
<div class="row">
<div class="col-1">
<div id="wb_Text1">
<span id="wb_uid0">&#0169; 2012-2023 &#1059;&#1095;&#1088;&#1077;&#1078;&#1076;&#1077;&#1085;&#1080;&#1077; &#1086;&#1073;&#1088;&#1072;&#1079;&#1086;&#1074;&#1072;&#1085;&#1080;&#1103; &quot;&#1053;&#1086;&#1074;&#1086;&#1087;&#1086;&#1083;&#1100;&#1089;&#1082;&#1080;&#1081; &#1075;&#1086;&#1089;&#1091;&#1076;&#1072;&#1088;&#1089;&#1090;&#1074;&#1077;&#1085;&#1085;&#1099;&#1081; &#1072;&#1075;&#1088;&#1072;&#1088;&#1085;&#1086;-&#1101;&#1082;&#1086;&#1085;&#1086;&#1084;&#1080;&#1095;&#1077;&#1089;&#1082;&#1080;&#1081; &#1082;&#1086;&#1083;&#1083;&#1077;&#1076;&#1078;&quot; </span>
</div>
</div>
</div>
</div>
</div>
</body>
</html>