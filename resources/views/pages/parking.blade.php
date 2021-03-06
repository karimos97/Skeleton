{{-- Extends layout --}}
@extends('layout.default')
<link rel="stylesheet" href="{{ asset('css/tachyons.min.css') }}">
{{-- Content --}}
@section('content')
<style>

.error{
        border-color: #dc3545;
        color: red !important;
    }
    .valid{
        border-color: #28a745;
        color: #28a745 !important;
    }
</style>
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Parking
                    <div class="text-muted pt-2 font-size-sm"></div>
                </h3>
            </div>
            <div class="card-toolbar">
                                <!--begin::Button-->
                                <a href="#" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#AddCar">
                                    <span class="svg-icon svg-icon-md">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <circle fill="#000000" cx="9" cy="15" r="6"/>
                                                <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>New Record</a>
                                    <!--end::Button-->
            </div>

        </div>

        <div class="card-body">

            <!--begin::Search Form-->
            <div class="mt-2 mb-5 mt-lg-5 mb-lg-10">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query"/>
                                    <span><i class="flaticon2-search-1 text-muted"></i></span>
                                </div>
                            </div>

                            <div class="col-md-4 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                    <select class="form-control" id="kt_datatable_search_status">
                                        <option value="">All</option>
                                        <option value="1">Pending</option>
                                        <option value="2">Delivered</option>
                                        <option value="3">Canceled</option>
                                        <option value="4">Success</option>
                                        <option value="5">Info</option>
                                        <option value="6">Danger</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                    <select class="form-control" id="kt_datatable_search_type">
                                        <option value="">All</option>
                                        <option value="1">Online</option>
                                        <option value="2">Retail</option>
                                        <option value="3">Direct</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                        <a href="#" class="btn btn-light-primary px-6 font-weight-bold">
                            Search
                        </a>
                    </div>
                </div>
            </div>
            <!--end::Search Form-->
            <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                <thead>
                    <tr>
                        <th>Matricule</th>
                        <th>Marque</th>
                        <th>Model</th>
                        <th>Annee</th>
                        <th>Crrburant</th>
                        <th>Date Retour</th>
                        <th></th>


                    </tr>
                </thead>
            </table>

        </div>

    </div>
    <div  class="modal fade" id="AddCar"  role="dialog" aria-labelledby="exampleModalSizeXl" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter Une Contrat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form" id="AddContract">
                        @csrf
                        <div class="card-body">
                         <div class="form-group row">

                            <div class="col-lg-4">
                                <label>Client:</label>
                                    <input type="hidden" id="cl" name="client" value="">
                                 <select class="form-control  m-select2 contactCl" name="client2"  style="width:100% !important;">
                                 </select>
                                <span class="form-text text-muted">Entrer Le Client </span>
                               </div>
                              <div class="col-lg-4">
                                <label>Voiture:</label>
                                    <input type="hidden" id="car" name="voiture" value="">
                                 <select  class="form-control m-select2 ContactVt"
                                            style="width:100% !important;" name="conVt"   >
                                    </select>
                                <span class="form-text text-muted">Entrer La Voiture</span>
                               </div>


                          <div class="col-lg-4">
                           <label>Date De Sorti:</label>
                                <input type="text" id="kt_datetimepicker_2"  data-target="#kt_datetimepicker_2" data-toggle="datetimepicker" name="dateSortie" class="form-control datetimepicker-input" placeholder="Select date & time" data-target="#kt_datetimepicker_2"/>

                          
                          </div>
                         </div>
                         <div class="form-group row">

                            <div class="col-lg-4">
                                <label>Duree:</label>
                                <input type="number" id="duree" class="form-control" step="0.5" name="duree"   placeholder="Duree"/>
                                <span class="form-text text-muted">Entrer La matricule</span>
                               </div>
                               <div class="col-lg-4">
                                <label>Co??t du jour:</label>
                                <input type="number" class="form-control" id="day_cost" step="0.1"  name="cost" placeholder="Co??t du jour"/>
                                <span class="form-text text-muted">Entrer Le cout du jour</span>
                               </div>

                            <div class="col-lg-4">
                                <label>Somme Total:</label>
                                    <input type="number" id="sum_total"  name="total" class="form-control" placeholder="" />
                            </div>


                         </div>
                         <div class="form-group row">

                          <div class="col-lg-4">
                            <label>Date Retourn:</label>
                                    <input type="text" data-target="#kt_datetimepicker_3" data-toggle="datetimepicker" id="kt_datetimepicker_3" name="dateReturn" class="form-control datetimepicker-input" placeholder="Select date & time" data-target="#kt_datetimepicker_3"/>

                            <span class="form-text text-muted">Entrer La Date Retoure</span>
                          </div>
                           <div class="col-lg-4">
                            <label>Avance:</label>
                                <input type="number" step="0.01" id="avance"  value="0" class="form-control" name="avance"   >
                            <span class="form-text text-muted">Entrer L' Avance:</span>
                           </div>

                           <div class="col-lg-4">
                            <label>Reste:</label>
                             <input type="number" step="0.1" id="rest" value="0" class="form-control" name="rest" placeholder="Entrer les Rest"/>
                            <span class="form-text text-muted">Entre le Rest</span>
                           </div>
                        </div>

        <!------------------ ---------------- ----------------------------- --------  les Info de 2eme Condecture   --------------- ------------------------ ---------------- -->   
         
                        <hr>

                        <h6 class="text-dark font-weight-bold mb-10">2 ??m?? Conducteur :</h6>
                        <div class="form-group row">
                            <div class="col-lg-4">
                             <label>Nom:</label>
                             <div class="input-group">
                              <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div>
                              <input type="text"  value="" name="Cname" class="form-control" placeholder="Entrer Le Nom de 2 ??m?? Conducteur"/>
                             </div>
                             <span class="form-text text-muted">Entrer Le Nom de 2 ??m?? Conducteur </span>
                            </div>


                            <div class="col-lg-4">
                             <label>Pernom:</label>
                             <div class="input-group">
                              <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div>
                              <input type="text"  value="" name="Cfname" class="form-control"  placeholder="Entrer Le Prenom de 2 ??m?? Conducteur"/>
                             </div>

                             
                             <span class="form-text text-muted">Entrer Le Prenom de 2 ??m?? Conducteur </span>
                            </div>
                            <div class="col-lg-4">
                            <label>N?? De p??rmis :</label>
                             <div class="input-group">
                              <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div>
                              <input type="text"  value="" name="Cpermis" class="form-control" placeholder="Entrer Le N?? De p??rmis de 2 ??m?? Conducteur"/>
                             </div>
                             <span class="form-text text-muted">Entrer Le N?? De p??rmis de 2 ??m?? Conducteur </span>
                            </div>
                             </div>
                             <div class="form-group row">
                                <div class="col-lg-4">
                                 <label>N??CIN:</label>
                                 <div class="input-group">
                                  <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div>
                                  <input type="text"  value="" name="Ccin" class="form-control" placeholder="Entrer Le Nom de 2 ??m?? Conducteur"/>
                                 </div>
                                 <span class="form-text text-muted">Entrer Le Nom de 2 ??m?? Conducteur </span>
                                </div>
    
    
                                <div class="col-lg-4">
                                    <label>Date de Delivrence Permis:</label>
                                        <input type="text" id="date_permis"  data-target="#date_permis" data-toggle="datetimepicker"  name="date_permis" class="form-control"  placeholder="" />
                                </div>
                                <div class="col-lg-4">
                                    <label>Lieu de Delivrence Permis:</label>
                                        <input type="text"  name="lieuPermis" class="form-control"  placeholder="" />
                                </div>
                                 </div>
                                <!------------------ ---------------- ----------------------------- --------  les Info de 2eme Condecture   --------------- ------------------------ ---------------- --> 
                        <hr>
                                <div class="form-group row">
                          <div class="col-lg-4">
                           <label>Kilometrage Actuelle:</label>
                            <input type="text"  value="" name="kilometrage" class="form-control"  placeholder="Entrer Le Kilometrage Actuell"/>
                           <span class="form-text text-muted">Entrer Le Kilometrage Actuell</span>
                          </div>
                         </div>

                         
                        </div>
                        <div class="card-footer">
                         <div class="row">
                          <div class="col-lg-4"></div>
                          <div class="col-lg-8">
                           <button type="button" class="btn btn-primary mr-2" @click="sendData()">Submit</button>
                           <button type="reset" class="btn btn-secondary">Cancel</button>
                          </div>
                         </div>
                        </div>

                        
                       </form>
                </div>

            </div>
        </div>
    </div>




    <div class="modal fade" id="EditCar" role="dialog" aria-labelledby="exampleModalSizeXl" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modifier Une Contrat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form" id="NewCar">
                        @csrf
                        <div class="card-body">
                         <div class="form-group row">

                            <div class="col-lg-4">
                                <label>Client:</label>
                                <div class="input-group">
                                    <input type="hidden" id="cl" name="client" value="">
                                 <select class="form-control  m-select2 contactCl" name="client2" style="width:100% !important;">
                                 </select>
                                </div>
                                <span class="form-text text-muted">Entrer Le Client </span>
                               </div>
                              <div class="col-lg-4">
                                <label>Voiture:</label>
                                <div class="input-group">
                                    <input type="hidden" id="car" name="voiture" value="">
                                 <select  class="form-control m-select2 ContactVt"
                                            style="width:100% !important;" name="conVt"  >
                                    </select>
                                </div>
                                <span class="form-text text-muted">Entrer La Voiture</span>
                               </div>


                          <div class="col-lg-4">
                           <label>Date De Sorti:</label>
                           <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control date" readonly value="" name="dateSortie"  placeholder=""/>
                           </div>
                           <span class="form-text text-muted">Entrer La Date Sortie</span>
                          </div>
                         </div>
                         <div class="form-group row">

                            <div class="col-lg-4">
                                <label>Duree:</label>
                                <input type="number" class="form-control" step="0.5" name="duree" placeholder="Duree"/>
                                <span class="form-text text-muted">Entrer La matricule</span>
                               </div>
                               <div class="col-lg-4">
                                <label>Co??t du jour:</label>
                                <input type="number" class="form-control" step="0.1"  name="cost" placeholder="Co??t du jour"/>
                                <span class="form-text text-muted">Entrer Le Code VIN</span>
                               </div>

                            <div class="col-lg-4">
                                <label>Somme Total:</label>
                                <div class="input-group">
                                    <input type="number"  name="total" class="form-control"  placeholder="" />
                                </div>
                            </div>


                         </div>
                         <div class="form-group row">

                          <div class="col-lg-4">
                            <label>Date Retourn:</label>
                            <div class="input-group">
                             <div class="input-group date" >
                                 <input type="text" name="dateReturn"  class="form-control date"  readonly value=""  />
                                 <div class="input-group-append">
                                  <span class="input-group-text">
                                   <i class="la la-calendar"></i>
                                  </span>
                                 </div>
                                </div>                            </div>
                            <span class="form-text text-muted">Entrer La Date Retourn</span>
                           </div>

                           <div class="col-lg-4">
                            <label>Avance:</label>
                            <div class="input-group">
                                <input type="number" step="0.01"  value="0" class="form-control" name="avance"  >
                            </div>
                            <span class="form-text text-muted">Entrer L' Avance:</span>
                           </div>

                           <div class="col-lg-4">
                            <label>Reste:</label>
                            <div class="input-group">
                             <input type="number" step="0.1" value="0" class="form-control" name="rest" placeholder="Entrer les Rest"/>
                             <div class="input-group-append"><span class="input-group-text"><i class="la la-map-marker"></i></span></div>
                            </div>
                            <span class="form-text text-muted">Entre le Rest</span>
                           </div>
                        </div>
                         <div class="form-group row">
                          <div class="col-lg-4">
                           <label>Kilometrage Actuelle:</label>
                           <div class="input-group">
                            <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div>
                            <input type="text"  value="" name="kilometrage" class="form-control"  placeholder="Enter your postcode"/>
                           </div>
                           <span class="form-text text-muted">Entrer Le Kilometrage Actuell</span>
                          </div>
                         </div>

                        </div>
                        <div class="card-footer">
                         <div class="row">
                          <div class="col-lg-4"></div>
                          <div class="col-lg-8">
                           <button type="button" class="btn btn-primary mr-2" @click="sendData()">Submit</button>
                           <button type="reset" class="btn btn-secondary">Cancel</button>
                          </div>
                         </div>
                        </div>
                       </form>
                </div>

            </div>
        </div>
    </div>




    <div class="modal fade" id="carReturn" role="dialog" aria-labelledby="exampleModalSizeXl" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Retourner Une Voiture</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form" id="RturnCar">
                        <input type="text" name="car" id="contract" hidden value="">
                        <div class="card-body">
                         <div class="form-group row">
                          <div class="col-lg-4">
                           <label>Kilometrage:</label>
                           <input type="number" class="form-control" name="kilo"  placeholder="Kilometrage Actuelle"/>
                           <span class="form-text text-muted">Entrer Le Actuelle</span>
                          </div>
                          <div class="col-lg-4">
                            <label>Date Retourn:</label>
                            <div class="input-group">
                             <div class="input-group date" >
                                 <input type="text" name="date" class="form-control date-p" readonly  value="" id="kt_datepicker_3"/>
                                 <div class="input-group-append">
                                  <span class="input-group-text">
                                   <i class="la la-calendar"></i>
                                  </span>
                                 </div>
                                </div>                            </div>
                            <span class="form-text text-muted">Entrer La Date  De Retourn</span>
                           </div>
                           <div class="col-lg-4">
                            <label> Rest:</label>
                            <div class="input-group">
                                 <input type="number" name="rest" class="form-control"   value="" id="rest"/>
                           </div>
                            <span class="form-text text-muted">Tapez le Montant qui Reste</span>
                           </div>
                         </div>
                        </div>
                        <div class="card-footer">
                         <div class="row">
                          <div class="col-lg-4"></div>
                          <div class="col-lg-8">
                           <button type="button" class="btn btn-primary mr-2" onclick="returnCar()">Submit</button>
                           <button type="reset" class="btn btn-secondary">Cancel</button>
                          </div>
                         </div>
                        </div>
                       </form>
                </div>
    
            </div>
        </div>
    </div>   
@endsection

{{-- Styles Section --}}
@section('styles')
    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
@endsection


{{-- Scripts Section --}}
@section('scripts')
    {{-- vendors --}}
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>

    {{-- page scripts --}}
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/parking/parking.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/parking/parking-select.js') }}" type="text/javascript"></script>


@endsection
