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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.js"   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="  crossorigin=""></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/plugins/leaflet-search/src/leaflet-search.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/plugins/Leaflet-EaziButtons/src/leaflet-EaziButtons.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/plugins/Leaflet-Pancontrol/src/L.Control.Pan.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/plugins/Leaflet.Icon.Glyph/Leaflet.Icon.Glyph.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/plugins/Leaflet.Editable/src/Leaflet.Editable.js"></script>
    <script src="//npmcdn.com/leaflet.path.drag/src/Path.Drag.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/plugins/leaflet-eazyprinter/bundle.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/plugins/Leaflet-ContextMenu/src/leaflet.contextmenu.js"></script>
      <script src="<?php bloginfo('stylesheet_directory')?>/Data/canada.js" type="text/javascript"></script>
      <script src="<?php bloginfo('stylesheet_directory')?>/Data/e.js" type="text/javascript"></script>
      <script src="<?php bloginfo('stylesheet_directory')?>/js/CustomLeafletMap.js" type="text/javascript"></script>
      <script src="https://unpkg.com/leaflet-image@latest/leaflet-image.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha256-DupmmuWppxPjtcG83ndhh/32A9xDMRFYkGOVzvpfSIk=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js" integrity="sha256-gJWdmuCRBovJMD9D/TVdo4TIK8u5Sti11764sZT1DhI=" crossorigin="anonymous"></script>
      <script>L_PREFER_CANVAS = true</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
    <script src="https://unpkg.com/esri-leaflet@2.3.3/dist/esri-leaflet.js" integrity="sha512-cMQ5e58BDuu1pr9BQ/eGRn6HaR6Olh0ofcHFWe5XesdCITVuSBiBZZbhCijBe5ya238f/zMMRYIMIIg1jxv4sQ=="  crossorigin=""></script>
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
