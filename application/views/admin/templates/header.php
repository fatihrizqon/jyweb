<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

	<title>myApp - <?php echo $title; ?></title>
  <!-- Material Design Lite -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  <!-- Include external CSS. -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

 	<!-- Fonts -->
 	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

  <!-- Angular Material style sheet -->
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">

  <!-- ChartJS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js"></script>

  <!-- CKEditorJS -->
  <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>

  <!-- DataTable Material -->
  <script src="<?php echo base_url()."assets/js/jquery-1.12.4.js"; ?>"></script>
  <script src="<?php echo base_url()."assets/js/jquery.dataTables.min.js"; ?>"></script>
  <script src="<?php echo base_url()."assets/js/dataTables.material.min.js"; ?>"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/material.min.css"; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/dataTables.material.min.css"; ?>">
</head>
<!-- Uses a transparent header that draws on top of the layout's background -->
<style>
img.thumbnail{
  height: auto;
  width: 40%;
}
a.url{
  color: #757575;
  text-weight:2pt;
}
  max-width: 720px;
}
#editor-container {
  height: 350px;
}

tr.spaceUnder>td {
  padding-top: 50px;
  padding-bottom: 50px;
  padding-right: 20px;
  padding-left: 20px;
}
/* Color */
.dark-color{
  color: #757575;
}
.white-color{
 color: #FFF;
}
.red-color{
 color: #F44336;
}
.amber-color{
 color: #FFC107;
}
.blue-color{
 color: #2979FF;
}
/* Background*/
.super-light-dark-bg{
  background-color: #BDBDBD;
}
.dark-bg{
  background-color: #212121;
}
.red-bg{
 background-color: #F44336;
}
.white-bg{
  background-color: #FFF;
}
.amber-bg{
  background-color: #FFC107;
}
.light-amber-bg{
  background-color: #FFD54F;
}
.super-light-amber-bg{
  background-color: #FFECB3;
}
.blue-bg{
  background-color: #2979FF;
}
.light-blue-bg{
  background-color: #64B5F6;
}
.super-light-blue-bg{
  background-color: #E3F2FD;
}
.black-material-bg{
  background-image: url('https://storage.googleapis.com/material-design/publish/material_v_10/share.png');
  height: 100%;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Fonts */
.ubuntu-font{
  font-family: 'Ubuntu', sans-serif;
}

.quicksand-font{
  font-family: 'Quicksand', sans-serif;
}
/* Cards */
.login-card-layout {
  margin-top: 150px;
  width: auto;
  padding: 25px;
  height:auto;
  position: relative;
}
.login-card {
  position: relative;
  height:auto;
}
.statistics-card{

  width : 90px;
  height: 5px;
}
.margin{
  padding-left: 10px;
}
.margin-center{
  margin-left: 5px;
  margin-right: 5px;
  padding-left: 5px;
  padding-right: 5px;
}

/* Parallax */
.parallax- {
    /* The image used */
    background-image: url("https://wallpapercave.com/wp/VyuQp6b.jpg");

    /* Set a specific height */
    height: 100%;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
/* Navbar */
.black-transparent{
background-color:rgba(0, 0, 0, 0.5);
}
nav a:hover{
  background-color:rgba(0, 0, 0, 0.8);
  border-bottom: solid #fff;
}
/* Buttons */
.masuk-btn{
  background-color: #2979FF;
  color: #FFF;
}
.masuk-btn:hover{
  background-color: #90CAF9;
  color: #FFF;
}
.rich-text-layout{
  margin: 10px;
}
.article-text {
  margin: 10px;
}
.news-text {
  margin: 10px;
}

/*Responsive Table*/
.table-responsive {
    min-height: .01%;
    overflow-x: auto;
}
@media screen and (max-width: 767px) {
    .table-responsive {
        width: 100%;
        margin-bottom: 15px;
        overflow-y: hidden;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        border: 1px solid #ddd;
    }
    .table-responsive > .table {
        margin-bottom: 0;
    }
    .table-responsive > .table > thead > tr > th,
    .table-responsive > .table > tbody > tr > th,
    .table-responsive > .table > tfoot > tr > th,
    .table-responsive > .table > thead > tr > td,
    .table-responsive > .table > tbody > tr > td,
    .table-responsive > .table > tfoot > tr > td {
        white-space: nowrap;
    }
    .table-responsive > .table-bordered {
        border: 0;
    }
    .table-responsive > .table-bordered > thead > tr > th:first-child,
    .table-responsive > .table-bordered > tbody > tr > th:first-child,
    .table-responsive > .table-bordered > tfoot > tr > th:first-child,
    .table-responsive > .table-bordered > thead > tr > td:first-child,
    .table-responsive > .table-bordered > tbody > tr > td:first-child,
    .table-responsive > .table-bordered > tfoot > tr > td:first-child {
        border-left: 0;
    }
    .table-responsive > .table-bordered > thead > tr > th:last-child,
    .table-responsive > .table-bordered > tbody > tr > th:last-child,
    .table-responsive > .table-bordered > tfoot > tr > th:last-child,
    .table-responsive > .table-bordered > thead > tr > td:last-child,
    .table-responsive > .table-bordered > tbody > tr > td:last-child,
    .table-responsive > .table-bordered > tfoot > tr > td:last-child {
        border-right: 0;
    }
    .table-responsive > .table-bordered > tbody > tr:last-child > th,
    .table-responsive > .table-bordered > tfoot > tr:last-child > th,
    .table-responsive > .table-bordered > tbody > tr:last-child > td,
    .table-responsive > .table-bordered > tfoot > tr:last-child > td {
        border-bottom: 0;
    }
}
a{
  text-decoration: none;
  text-decoration-style: none;
  color: #fff;
}
</style>
<body ng-app="myApp" ng-cloak class="quicksand-font">
<!-- Uses a header that scrolls with the text, rather than staying locked at the top mdl-layout__header--transparent-->
<div class="mdl-layout mdl-js-layout parallax">
