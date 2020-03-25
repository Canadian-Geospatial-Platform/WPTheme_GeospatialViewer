<!doctype html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description');?>">
    <title><?php bloginfo('name');?>
        <?php  is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory')?>/css/style_sidebar.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory')?>/plugins/Leaflet-EaziButtons/src/leaflet-EaziButtons.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory')?>/plugins/Leaflet-Pancontrol/src/L.Control.Pan.css" rel="stylesheet">    
    <link href="<?php bloginfo('stylesheet_directory')?>/plugins/Leaflet-ContextMenu/src/leaflet.contextmenu.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" rel="stylesheet">
 </head>
  <div class="row">
 </div>
  <body>
    <div class="page-wrapper chiller-theme toggled">
      <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
      </a>
      <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
          <div class="sidebar-brand">
            <a href="#"></a>
            <div id="close-sidebar">
              <i class="fas fa-times"></i>
            </div>
          </div>
          <div class="sidebar-header">
            <h5 style="color:white">Geospatial Viewer Map</h5>
          </div>
          <!-- aqu comienza -->
           <div class="container-fluid">
