<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <img src="{{ asset('assets/images/users/1.jpg') }}" alt="user-img" class="img-circle">
                        <span class="hide-menu">{{ Auth::user()->name }}</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">

                        <li>
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              <i class="fa fa-power-off"></i>
                              Keluar
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                        </li>
                    </ul>
                </li>
                <li class="nav-small-cap">--- Master Data ---</li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ asset('Dashboard') }}">Dashboard</a></li>

                    </ul>
                </li>



                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Master Data</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('master-bandara.index') }}">Bandara</a></li>

                        <li><a href="{{ route('master-lokasiToilet.index') }}">Lokasi Toilet</a></li>
                        <li><a href="{{ route('KontrakPekerjaan.index') }}">Kontrak Pekerjaan</a></li>
                        <li><a href="{{ route('data_karyawan.index')}}">Karyawan</a></li>
                        <li><a href="{{ route('master-roles.index') }}">Roles</a></li>
                        <li><a href="{{ route('master-permission.index') }}">Permission</a></li>
                        <li><a href="{{ route('master-peralatan.index') }}">Peralatan</a></li>
                        <li><a href="{{ route('master-kondisi-peralatan.index') }}">Kondisi Peralatan</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                      <i class="ti-light-bulb"></i>
                      <span class="hide-menu">Akses Role</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('access-role.index') }}">Roles</a></li>
                        <li><a href="{{ route('access-permission.index') }}">Permission</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu"> Ceklist</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('laporanCeklist-toilet.index') }}">Toilet</a></li>
                        <li><a href="{{ route('laporanCeklist-peralatan.index') }}">Peralatan</a></li>
                        {{-- <li> <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Peralatan</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route ('laporanCeklist-AutomacticScrubber.index') }}">Automactic Scrubber</a></li>
                                <li><a href="#">Blower</a></li>
                                <li><a href="#">Brush Vacuum</a></li>
                                <li><a href="#">Carpet Extractor</a></li>
                                <li><a href="#">Carpet Spotter</a></li>
                                <li><a href="#">Dry Vacuum</a></li>
                                <li><a href="#">DW Vacuum</a></li>
                                <li><a href="#">Floor Polisher</a></li>
                                <li><a href="#">High Pressure</a></li>
                                <li><a href="#">LS Polisher</a></li>
                                <li><a href="#">Mesin Port Scrub</a></li>
                                <li><a href="#">Mesin Potong Rumput</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li><a href="#">Brush Vacuum Cleaner</a></li>
                        <li><a href="#">Carpet Extractor</a></li>
                        <li><a href="#">Automactic Scrubber</a></li>
                        <li><a href="#">Carpet Spotter</a></li>
                        <li><a href="#">Dry Vacuum Cleaner</a></li>
                        <li><a href="#">DW Vacuum Cleaner</a></li>
                        <li><a href="#">Floor Polisher High Speed</a></li>
                        <li><a href="#">High Pressure</a></li>
                        <li><a href="#">LS Polisher</a></li>
                        <li><a href="#">Mesin Port Scrub</a></li>
                        <li><a href="#">Mesin Potong Rumput-Dorong</a></li> --}}
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                      <i class="ti-view-list"></i>
                      <span class="hide-menu">Report</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                      {{-- <li><a href="{{route ('ReportCeklistToilet.index')}}">Report Ceklist</a></li> --}}
                      <li><a href="{{ route('report-toilet.index') }}"> Toilet</a></li>
                      <li><a href="{{ route('report-peralatan.index') }}"> Peralatan</a></li>
                      {{-- <li><a href="#">L P P</a></li>
                      <li><a href="#">Laporan Kerusakan</a></li>
                      <li><a href="#">Laporan Harian</a></li>
                      <li><a href="#">Laporan Mingguan</a></li>
                      <li><a href="#">Laporan Bulanan</a></li>
                      <li><a href="#">Laporan BAPP</a></li> --}}
                    </ul>
                </li>

                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                      <i class="ti-user"></i>
                      <span class="hide-menu">User Setting</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('UserAdmin.index') }}">User Admin</a></li>
                    </ul>
                </li>
                  {{--
                <li class="nav-small-cap">--- FORMS, TABLE &amp; WIDGETS</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-media-right-alt"></i><span class="hide-menu">Forms</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="form-basic.html">Basic Forms</a></li>
                        <li><a href="form-layout.html">Form Layouts</a></li>
                        <li><a href="form-addons.html">Form Addons</a></li>
                        <li><a href="form-material.html">Form Material</a></li>
                        <li><a href="form-float-input.html">Floating Lable</a></li>
                        <li><a href="form-pickers.html">Form Pickers</a></li>
                        <li><a href="form-upload.html">File Upload</a></li>
                        <li><a href="form-mask.html">Form Mask</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-dropzone.html">File Dropzone</a></li>
                        <li><a href="form-icheck.html">Icheck control</a></li>
                        <li><a href="form-img-cropper.html">Image Cropper</a></li>
                        <li><a href="form-bootstrapwysihtml5.html">HTML5 Editor</a></li>
                        <li><a href="form-typehead.html">Form Typehead</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                        <li><a href="form-xeditable.html">Xeditable Editor</a></li>
                        <li><a href="form-summernote.html">Summernote Editor</a></li>
                        <li><a href="form-tinymce.html">Tinymce Editor</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-accordion-merged"></i><span class="hide-menu">Tables</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="table-basic.html">Basic Tables</a></li>
                        <li><a href="table-layout.html">Table Layouts</a></li>
                        <li><a href="table-data-table.html">Data Tables</a></li>
                        <li><a href="table-footable.html">Footable</a></li>
                        <li><a href="table-jsgrid.html">Js Grid Table</a></li>
                        <li><a href="table-responsive.html">Responsive Table</a></li>
                        <li><a href="table-bootstrap.html">Bootstrap Tables</a></li>
                        <li><a href="table-editable-table.html">Editable Table</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Widgets</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="widget-data.html">Data Widgets</a></li>
                        <li><a href="widget-apps.html">Apps Widgets</a></li>
                        <li><a href="widget-charts.html">Charts Widgets</a></li>
                    </ul>
                </li>
                <li class="nav-small-cap">--- EXTRA COMPONENTS</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-gallery"></i><span class="hide-menu">Page Layout</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="layout-single-column.html">1 Column</a></li>
                        <li><a href="layout-fix-header.html">Fix header</a></li>
                        <li><a href="layout-fix-sidebar.html">Fix sidebar</a></li>
                        <li><a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a></li>
                        <li><a href="layout-boxed.html">Boxed Layout</a></li>
                        <li><a href="layout-logo-center.html">Logo in Center</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Sample Pages <span class="badge badge-pill badge-info">25</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="starter-kit.html">Starter Kit</a></li>
                        <li><a href="pages-blank.html">Blank page</a></li>
                        <li><a href="javascript:void(0)" class="has-arrow">Authentication <span class="badge badge-pill badge-success pull-right">6</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="pages-login.html">Login 1</a></li>
                                <li><a href="pages-login-2.html">Login 2</a></li>
                                <li><a href="pages-register.html">Register</a></li>
                                <li><a href="pages-register2.html">Register 2</a></li>
                                <li><a href="pages-register3.html">Register 3</a></li>
                                <li><a href="pages-lockscreen.html">Lockscreen</a></li>
                                <li><a href="pages-recover-password.html">Recover password</a></li>
                            </ul>
                        </li>
                        <li><a href="pages-profile.html">Profile page</a></li>
                        <li><a href="pages-animation.html">Animation</a></li>
                        <li><a href="pages-fix-innersidebar.html">Sticky Left sidebar</a></li>
                        <li><a href="pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a></li>
                        <li><a href="pages-invoice.html">Invoice</a></li>
                        <li><a href="pages-treeview.html">Treeview</a></li>
                        <li><a href="pages-utility-classes.html">Helper Classes</a></li>
                        <li><a href="pages-search-result.html">Search result</a></li>
                        <li><a href="pages-scroll.html">Scrollbar</a></li>
                        <li><a href="pages-pricing.html">Pricing</a></li>
                        <li><a href="pages-lightbox-popup.html">Lighbox popup</a></li>
                        <li><a href="pages-gallery.html">Gallery</a></li>
                        <li><a href="pages-faq.html">Faqs</a></li>
                        <li><a href="javascript:void(0)" class="has-arrow">Error Pages</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="pages-error-400.html">400</a></li>
                                <li><a href="pages-error-403.html">403</a></li>
                                <li><a href="pages-error-404.html">404</a></li>
                                <li><a href="pages-error-500.html">500</a></li>
                                <li><a href="pages-error-503.html">503</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-pie-chart"></i><span class="hide-menu">Charts</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="chart-morris.html">Morris Chart</a></li>
                        <li><a href="chart-chartist.html">Chartis Chart</a></li>
                        <li><a href="chart-echart.html">Echarts</a></li>
                        <li><a href="chart-flot.html">Flot Chart</a></li>
                        <li><a href="chart-knob.html">Knob Chart</a></li>
                        <li><a href="chart-chart-js.html">Chartjs</a></li>
                        <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                        <li><a href="chart-extra-chart.html">Extra chart</a></li>
                        <li><a href="chart-peity.html">Peity Charts</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-light-bulb"></i><span class="hide-menu">Icons</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="icon-material.html">Material Icons</a></li>
                        <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                        <li><a href="icon-themify.html">Themify Icons</a></li>
                        <li><a href="icon-weather.html">Weather Icons</a></li>
                        <li><a href="icon-simple-lineicon.html">Simple Line icons</a></li>
                        <li><a href="icon-flag.html">Flag Icons</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-location-pin"></i><span class="hide-menu">Maps</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="map-google.html">Google Maps</a></li>
                        <li><a href="map-vector.html">Vector Maps</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-align-left"></i><span class="hide-menu">Multi level dd</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0)">item 1.1</a></li>
                        <li><a href="javascript:void(0)">item 1.2</a></li>
                        <li> <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Menu 1.3</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0)">item 1.3.1</a></li>
                                <li><a href="javascript:void(0)">item 1.3.2</a></li>
                                <li><a href="javascript:void(0)">item 1.3.3</a></li>
                                <li><a href="javascript:void(0)">item 1.3.4</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">item 1.4</a></li>
                    </ul>
                </li>
                <li class="nav-small-cap">--- SUPPORT</li>
                <li> <a class="waves-effect waves-dark" href="http://eliteadmin.themedesigner.in/demos/bt4/documentation/documentation.html" aria-expanded="false"><i class="fa fa-circle-o text-danger"></i><span class="hide-menu">Documentation</span></a></li>
                <li> <a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false"><i class="fa fa-circle-o text-success"></i><span class="hide-menu">Log Out</span></a></li>
                <li> <a class="waves-effect waves-dark" href="pages-faq.html" aria-expanded="false"><i class="fa fa-circle-o text-info"></i><span class="hide-menu">FAQs</span></a></li> --}}
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
