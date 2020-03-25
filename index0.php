<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive  template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Geospatial Viewer Mapping</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet">
    <link href="css/style_sidebar.css" rel="stylesheet">
      <link href="plugins/Leaflet-EaziButtons/src/leaflet-EaziButtons.css" rel="stylesheet">
        <link href="plugins/Leaflet-Pancontrol/src/L.Control.Pan.css" rel="stylesheet">
        <link href="plugins/Leaflet-Draw/src/leaflet.draw.css" rel="stylesheet">
        <link href="plugins/Leaflet-ContextMenu/src/leaflet.contextmenu.css" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.css"
  integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
  crossorigin=""/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" rel="stylesheet">
</head>
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
         <div class="row">
                <div class="col-xs-12">
                  <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link  active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Basic Map</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Edit</a>
                    </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-2" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      <br>
                      <!-- <div class="sidebar-search"> -->
                        <select id="locality-dropdown" class="dropdown" name="locality">
                        </select>
                        <div></div>
                        <br>
                      <div class="sidebar-menu">
                        <ul>
                          <li class="sidebar-dropdown">
                            <a href="#">
                              <i class="fa fa-database"></i>
                              <span>Dataset</span>
                            </a>
                            <div class="sidebar-submenu">
                              <ul>
                                <li>
                                <label class="radio">(2017/05/03)
                                  <input type="radio" checked="checked" name="is_company">
                                  <span class="checkround"></span>
                                </label>
                               </li>
                               <li>
                               <label class="radio">(2014/09/03)
                                 <input type="radio" checked="checked" name="is_company">
                                 <span class="checkround"></span>
                               </label>
                              </li>
                              </ul>
                            </div>
                          </li>
                          <li class="sidebar-dropdown">
                            <a href="#">
                              <i class="far fa-gem"></i>
                              <span>Layers</span>
                            </a>
                            <div class="sidebar-submenu">
                              <ul>
                                 <li>
                                   <label class="check ">Electrical towers
                                     <input type="checkbox" checked="checked" name="is_name">
                                     <span class="checkmark"></span>
                                   </label>
                                 </li>
                                 <li>
                                   <label class="check">Oil wells
                                     <input type="checkbox"  name="is_name">
                                     <span class="checkmark"></span>
                                   </label>
                                 </li>
                                 <li>
                                   <label class="check ">Higway
                                     <input type="checkbox"  name="is_name">
                                     <span class="checkmark"></span>
                                   </label>
                                 </li>
                                 <li>
                                   <label class="check ">Pipe line
                                     <input type="checkbox"  name="is_name">
                                     <span class="checkmark"></span>
                                   </label>
                                   <label class="check ">Provincial Boundary
                                     <input type="checkbox"  name="is_name">
                                     <span class="checkmark"></span>
                                   </label>
                                   <label class="check ">Bycicle
                                     <input type="checkbox"  name="is_name">
                                     <span class="checkmark"></span>
                                   </label>
                                   <label class="check ">Traffic
                                     <input type="checkbox"  name="is_name">
                                     <span class="checkmark"></span>
                                   </label>
                                 </li>
                              </ul>
                            </div>
                          </li>
                          <li class="sidebar-dropdown">
                            <a href="#">
                              <i class="fa fa-globe"></i>
                              <span>Base Maps</span>
                            </a>
                            <div class="sidebar-submenu">
                              <ul>
                                <li>
                                <label class="radio">Topographic Map
                                  <input type="radio" checked="checked" class="clickmap" id="1" value="Topographic"  name="is_company">
                                  <span class="checkround"></span>
                                </label>
                               </li>
                               <li>
                               <label class="radio">Streets Map
                                 <input type="radio" checked="checked"  class="clickmap" id="2" value="Streets"  name="is_company">
                                 <span class="checkround"></span>
                               </label>
                              </li>

                                <li>
                                  <label class="radio">National Geographic Map
                                    <input type="radio" checked="checked"  class="clickmap" id="3" value="National Geographic"  name="is_company">
                                    <span class="checkround"></span>
                                  </label>
                                </li>
                                <li>
                                  <label class="radio">Oceans Map
                                    <input type="radio" checked="checked" class="clickmap" id="4" value="Oceans"  name="is_company">
                                    <span class="checkround"></span>
                                  </label>
                                </li>
                                <li>
                                  <label class="radio">Physical  Map
                                    <input type="radio" checked="checked" class="clickmap" id="5" value="Physical" name="is_company">
                                    <span class="checkround"></span>
                                  </label>
                                </li>
                                <li>
                                  <label class="radio">Imagery  Map
                                    <input type="radio" checked="checked" class="clickmap" id="6" value="Imagery" name="is_company">
                                    <span class="checkround"></span>
                                  </label>
                                </li>
                              </ul>
                            </div>
                          </li>

                          <li class="sidebar-dropdown">
                            <a href="#">
                              <i class="fa fa-file-export"></i>
                              <span>Export to</span>
                            </a>
                            <div class="sidebar-submenu">
                              <ul>
                                <li>
                                <label class="radio">Image
                                  <input type="radio" checked="checked" class="clickexport" id="exportpng" value="1"  name="clickexport">
                                  <span class="checkround"></span>
                                </label>
                               </li>
                               <li>
                               <label class="radio">XML
                                 <input type="radio" checked="checked"  class="clickexport" id="exportxml" value="2"  name="clickexport">
                                 <span class="checkround"></span>
                               </label>
                              </li>
                               <li>
                              <label class="radio">GeoJson
                                <input type="radio" checked="checked"  class="clickexport" id="exportgeojson" value="3"  name="clickexport">
                                <span class="checkround"></span>
                              </label>
                             </li>
                             <li>
                            <label class="radio">PDF Format
                              <input type="radio" checked="checked"  class="clickexport" id="exportgeojson" value="4"  name="clickexport">
                              <span class="checkround"></span>
                            </label>
                           </li>
                              </ul>
                                <div class="col-md-4">
                                <button class="btn btn-round-xs btn-xs mr-2 mb-2 btn-icon btn-outline-primary" id="btnexport" >
                                <span class="btn-inner-icon"><i class="fa fa-file-export"></i></span>
                                <span class="btn-inner-text">Apply</span>
                              </button>
                            </div>
                            </div>
                            </li>
                          </ul>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <div class="sidebar-menu">
                        <ul>
                          <li class="sidebar-dropdown">
                            <a href="#">
                              <i class="fa fa-draw-polygon"></i><span>Drawing</span>
                            </a>
                            <div class="sidebar-submenu center">
                              <div class="dropdown">
                                <button class="btn _select_color dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Brown
                                  <span _text_display="Brown" class="color brown"></span>
                                </button>
                                    <ul class="dropdown dropdown-menu _select_color_drop" aria-labelledby="dropdownMenu1">
                                    <li><span _text_display="Green" class="color green"></span></li>
                                    <li><span _text_display="Red" class="color red"></span></li>
                                    <li><span _text_display="Yellow" class="color yellow"></span></li>
                                    <li><span _text_display="Brown" class="color brown"></span></li>
                                    <li><span _text_display="Orange" class="color orange"></span></li>
                                    <li><span _text_display="Pink" class="color pink"></span></li>
                                    <li><span _text_display="Silver" class="color silver"></span></li>
                                    <li><span _text_display="Bule" class="color blue"></span></li>
                                    <li><span _text_display="TEAL" class="color TEAL"></span></li>
                                    <li><span _text_display="NAVY" class="color NAVY"></span></li>
                                    <li><span _text_display="PURPLE" class="color PURPLE"></span></li>
                                    <li><span _text_display="OLIVE" class="color OLIVE"></span></li>
                                    <li><span _text_display="LIME" class="color LIME"></span></li>
                                   <input type="hidden" name="_color" value="Brown">
                                </ul>
                            </div>  <br>
                                  <button  class="btn  btn-sm cust-btn btn-outline-danger" type="button" id="btn-drawLine" name="btndrawline" value="DrawLine">Draw Line</button>
                                  <button  class="btn  btn-sm cust-btn btn-outline-danger" type="button" id="btn-drawPolygon" name="btndrawpolygon" value="DrawPolygon">Draw Polygon</button>
                                  <button  class="btn  btn-sm cust-btn btn-outline-danger" type="button" id="btn-drawCircle" name="btndrawcircle" value="DrawCircle">Draw Circle</button>
                                  <!-- <button class="btn btn-sm cust-btn btn-outline-danger" type="button"   id="btn-editLayers" name="btnEditLayer" value="EditLayers">Edit Draw Shape</button> -->
                            </div>
                          </li>
                          <li class="sidebar-dropdown">
                            <a href="#">
                              <i class="fa fa-info"></i>
                              <span>Boundary Info</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                  <li>
                                    <label class="radio">Postal Code
                                      <input type="radio" checked="checked" name="is_company">
                                      <span class="checkround"></span>
                                    </label>
                                  </li>
                                  <li>
                                    <label class="radio">Place cities
                                      <input type="radio" checked="checked" name="is_company">
                                      <span class="checkround"></span>
                                    </label>
                                  </li>
                                  <li>
                                    <label class="radio">Parkings
                                      <input type="radio" checked="checked" name="is_company">
                                      <span class="checkround"></span>
                                    </label>
                                  </li>
                                  <li>
                                    <label class="radio">Military Base
                                      <input type="radio" checked="checked" name="is_company">
                                      <span class="checkround"></span>
                                    </label>
                                  </li>
                                </ul>
                            </div>
                          </li>
                        </ul>
                      </div>
                    <!-- </div> -->
                  </div>
                </div>
              </div><!-- row -->
            </div> <!--col-->
          </div> <!-- container -->

    </div>
    <div class="sidebar-footer">
      <button class="btn mr-2 mb-2 btn-icon-only btn-outline-primary" type="button" id="btnmapConfig" data-toggle="tooltip" data-placement="top" title="map configuration">
         <span class="btn-inner-icon"><i class="fa fa-cog"></i></span>
      </button>
      <!-- <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a> -->
      <!-- <a href="#">
        <i class="fa fa-power-off"></i>
      </a> -->
    </div>
  </nav>
  <main class="page-content">
    <div class="container-fluid">
      <h2>Canadian Territory Map</h2>
      <hr>
      <div class="row">
        <div class="form-group col-md-12">
          <div id="mymapid">
            <!-- <div class="btn-group d-flex justify-content-center" style="z-index: 1001">
              <button type="buttons" id="allbus" class="btn btn-success">All</button>
              <button type="buttons" id="others" class="btn btn-primary">Others</button>
              <button type="buttons" id="cafes" class="btn btn-danger">Cafes</button>
           </div>           -->
        </div>
        <!-- <div class="form-group col-md-12">
          <iframe src="https://ghbtns.com/github-btn.html?user=azouaoui-med&repo=pro-sidebar-template&type=star&count=true&size=large"
            frameborder="0" scrolling="0" width="140px" height="30px"></iframe>
          <iframe src="https://ghbtns.com/github-btn.html?user=azouaoui-med&repo=pro-sidebar-template&type=fork&count=true&size=large"
            frameborder="0" scrolling="0" width="140px" height="30px"></iframe>
        </div> -->
      </div>

    </div>

  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.js"
        integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
        crossorigin=""></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="plugins/leaflet-search/src/leaflet-search.js"></script>
        <script src="plugins/Leaflet-EaziButtons/src/leaflet-EaziButtons.js"></script>
        <script src="plugins/Leaflet-Pancontrol/src/L.Control.Pan.js"></script>
        <script src="plugins/Leaflet.Icon.Glyph/Leaflet.Icon.Glyph.js"></script>
        <script src="plugins/Leaflet.Editable/src/Leaflet.Editable.js"></script>
        <script src="//npmcdn.com/leaflet.path.drag/src/Path.Drag.js"></script>
        <script src="plugins/leaflet-eazyprinter/bundle.js"></script>
        <script src="plugins/Leaflet-ContextMenu/src/leaflet.contextmenu.js"></script>
          <script src="Data/canada.js" type="text/javascript"></script>
          <script src="Data/e.js" type="text/javascript"></script>
          <script src="js/CustomLeafletMap.js" type="text/javascript"></script>
          <script src="https://unpkg.com/leaflet-image@latest/leaflet-image.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha256-DupmmuWppxPjtcG83ndhh/32A9xDMRFYkGOVzvpfSIk=" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js" integrity="sha256-gJWdmuCRBovJMD9D/TVdo4TIK8u5Sti11764sZT1DhI=" crossorigin="anonymous"></script>
          <script>L_PREFER_CANVAS = true</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
        <script src="https://unpkg.com/esri-leaflet@2.3.3/dist/esri-leaflet.js"
        integrity="sha512-cMQ5e58BDuu1pr9BQ/eGRn6HaR6Olh0ofcHFWe5XesdCITVuSBiBZZbhCijBe5ya238f/zMMRYIMIIg1jxv4sQ=="  crossorigin=""></script>
      <script type="text/javascript">
      var mymap=customleafletMap.initialization();
                CustomleaflteMapEdit.dropdownColor();
                mymap.scrollWheelZoom.disable();
    jQuery(function ($) {
    $(".sidebar-dropdown > a").click(function() {
    $(".sidebar-submenu").slideUp(200);
   if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});
let dropdown = $('#locality-dropdown');

dropdown.empty();
dropdown.append('<option selected="true" disabled>Choose State/Province</option>');
dropdown.prop('selectedIndex', 0);

const url='https://api.myjson.com/bins/1akrv0';
$.getJSON(url, function (data) {
  $.each(data, function (key, entry) {
    dropdown.append($('<option></option>').attr('value', entry.short).text(entry.name));
  })
});

  $('#locality-dropdown').change(function() {
        var val2 = this.value;
        console.log(val2);
        customleafletMap.MoveMarketSelected(url,val2);
      });

    $(".clickmap").click(function(){
      customleafletMap.selectBasemap(this.value,mymap);
    });
  $("#btn-drawPolygon").click(function() {
        CustomleaflteMapEdit.CreateShape("polygon");
    });
  $("#btn-drawCircle").click(function() {
      CustomleaflteMapEdit.CreateShape("circle");
  });
  $("#btn-drawLine").click(function(){
      CustomleaflteMapEdit.CreateShape("line");
  })
  mymap.on('editable:editing', function (e) {
        e.layer.setStyle({color: 'DarkBlue'});
    });
  $("#btn-editLayers").click(function(){
    console.log("Edit Layers");
   });
$(".btn-outline-danger").click(function(){
  $(this).addClass('focus').siblings().removeClass('focus');
});

 $('#btnexport').click(function(){
   var radioValue = $("input[name='clickexport']:checked").val();
      customleafletMap.export();
    });
 $('#btnmapConfig').click(function(){
   alert('Map configuration');
 });
 // mymap.on('draw:created', function (e) {
 //  console.log("on draw created event");
 //    var type = e.layerType,
 //        layer = e.layer;
 //        console.log(type);
 //        if (type=='circle'){
 //          editableLayers.addLayer(layer);
 //          theRadius = layer.getRadius()/1000;
 //          var _radius=Math.round(theRadius*(Math.pow(10,3)))/(Math.pow(10,3));
 //          layer.bindTooltip( _radius.toFixed(2) + " Kms", {'permanent': true, 'interactive': true, 'direction':'top', 'className': "my-label"});
 //      //  bootbox.prompt({title: "Any information?", closeButton: false, callback: putTooltip});
 //              //function putTooltip(result) {
 //            //layer.bindTooltip(result, {'permanent': true, 'interactive': true, 'direction':'center'});
 //          //  layer.bindTooltip(Number.parseFloat(theRadius).toString(), {'permanent': true, 'interactive': true, 'direction':'top'});
 //          //  }
 //
 //      }
 //      //   if (type=='circle'){
 //      //     theCenterPt = layer.getLatLng();
 //      //     center = [theCenterPt.lng,theCenterPt.lat];
 //      //     theRadius = layer.getRadius();
 //      //     editableLayers.addLayer(layer);
 //      //     group1.addLayer(layer);
 //      //     mymap.addLayer(group1);
 //      //    var circle = L.circle(theCenterPt, theRadius,{units: 'meters'}).addTo(editableLayers);
 //      //    bootbox.prompt({title: "Any information?", closeButton: false, callback: putTooltip});
 //      //      function putTooltip(result) {
 //      //    circle.bindTooltip(result, {'permanent': true, 'interactive': true});
 //      //    }
 //      //   //circle.enableEdit();
 //      //   if (mymap.hasLayer(group1)) {
 //      //     console.log("Cirle Draw to delete");
 //      //     mymap.removeLayer(group1);
 //      //   }
 //      //   circle.on('dblclick', L.DomEvent.stop).on('dblclick', circle.toggleEdit);
 //      //  circle.on('click', function (e) {
 //      //    circle.enableEdit();
 //      //       if ((e.originalEvent.ctrlKey || e.originalEvent.metaKey) && this.editEnabled()) {
 //      //         this.editor.newHole(e.latlng);
 //      //       }
 //      //   });
 //      // };//type circle
 //       mymap.addLayer(layer);
 //  });

// function CreateShape(ShapeType){
//   if (ShapeType=="circle"){
//     CreateCircle();
//    }
//    if (ShapeType=="polygon"){
//     CreatePolygon();
//   }
//   if (ShapeType=="line"){
//     CreateLine();
//  }
// };
// function CreateLine(){
//   var polyline = new L.Draw.Polyline(mymap)
//       polylineDrawer.enable();
//    };
// function  CreatePolygon() {
//   var polygonDrawer = new L.Draw.Polygon(mymap);
//       polygonDrawer.enable();
// };
//
// function CreateCircle(){
//   var theRadius;
//   var theCenterPt;
//   var center;
//   var circleDrawer = new L.Draw.Circle(mymap);
//   circleDrawer.enable();
// };
//
//   mymap.on('draw:created', function (e) {
//     console.log("on draw created event");
//       var type = e.layerType,
//           layer = e.layer;
//           console.log(type);
//           if (type=='circle'){
//             editableLayers.addLayer(layer);
//             theRadius = layer.getRadius()/1000;
//             var _radius=Math.round(theRadius*(Math.pow(10,3)))/(Math.pow(10,3));
//             layer.bindTooltip( _radius.toFixed(2) + " Kms", {'permanent': true, 'interactive': true, 'direction':'top', 'className': "my-label"});
//         //  bootbox.prompt({title: "Any information?", closeButton: false, callback: putTooltip});
//                 //function putTooltip(result) {
//               //layer.bindTooltip(result, {'permanent': true, 'interactive': true, 'direction':'center'});
//             //  layer.bindTooltip(Number.parseFloat(theRadius).toString(), {'permanent': true, 'interactive': true, 'direction':'top'});
//             //  }
//
//         }
//         //   if (type=='circle'){
//         //     theCenterPt = layer.getLatLng();
//         //     center = [theCenterPt.lng,theCenterPt.lat];
//         //     theRadius = layer.getRadius();
//         //     editableLayers.addLayer(layer);
//         //     group1.addLayer(layer);
//         //     mymap.addLayer(group1);
//         //    var circle = L.circle(theCenterPt, theRadius,{units: 'meters'}).addTo(editableLayers);
//         //    bootbox.prompt({title: "Any information?", closeButton: false, callback: putTooltip});
//         //      function putTooltip(result) {
//         //    circle.bindTooltip(result, {'permanent': true, 'interactive': true});
//         //    }
//         //   //circle.enableEdit();
//         //   if (mymap.hasLayer(group1)) {
//         //     console.log("Cirle Draw to delete");
//         //     mymap.removeLayer(group1);
//         //   }
//         //   circle.on('dblclick', L.DomEvent.stop).on('dblclick', circle.toggleEdit);
//         //  circle.on('click', function (e) {
//         //    circle.enableEdit();
//         //       if ((e.originalEvent.ctrlKey || e.originalEvent.metaKey) && this.editEnabled()) {
//         //         this.editor.newHole(e.latlng);
//         //       }
//         //   });
//         // };//type circle
//         mymap.addLayer(layer);
//     });


});//end jQuery
</script>
</body>
</html>
