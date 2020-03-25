<?php get_header();?>
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
                                    <input type="radio" checked="checked"  class="clickmap" id="3" value="NationalGeographic"  name="is_company">
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

    <?php get_footer();?>
