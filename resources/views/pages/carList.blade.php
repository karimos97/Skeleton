{{-- Extends layout --}}
@extends('layout.default')
<link rel="stylesheet" href="{{ asset('css/tachyons.min.css') }}">
{{-- Content --}}
@section('content')

    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">List Des Voitures
                    <div class="text-muted pt-2 font-size-sm"></div>
                </h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline mr-2">
                    <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"/>
                                <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"/>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>Export
                    </button>
                    <!--begin::Dropdown Menu-->
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <!--begin::Navigation-->
                        <ul class="navi flex-column navi-hover py-2">
                            <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-print"></i>
                                    </span>
                                    <span class="navi-text">Print</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-copy"></i>
                                    </span>
                                    <span class="navi-text">Copy</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-file-excel-o"></i>
                                    </span>
                                    <span class="navi-text">Excel</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-file-text-o"></i>
                                    </span>
                                    <span class="navi-text">CSV</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-file-pdf-o"></i>
                                    </span>
                                    <span class="navi-text">PDF</span>
                                </a>
                            </li>
                        </ul>
                        <!--end::Navigation-->
                    </div>
                    <!--end::Dropdown Menu-->
                </div>
                <!--end::Dropdown-->
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
                        <th>Image</th>
                        <th>Crrburant</th>
                        <th>Color</th>

                    </tr>
                </thead>
            </table>

        </div>

    </div>
    <div  class="modal fade" id="AddCar"  role="dialog" aria-labelledby="exampleModalSizeXl" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter Une Voiture</h5>
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
                                <label>Marque:</label>
                                <div class="input-group">
                                    <input type="hidden" id="brnd" name="brand" value="">
                                 <select class="form-control  m-select2 carBrand" name="brandId" v-model="car.brand"  style="width:100% !important;">
                                 </select>
                                </div>
                                <span class="form-text text-muted">Entrer La Marque </span>
                               </div>
                              <div class="col-lg-4">
                                <label>Model:</label>
                                <div class="input-group">
                                    <input type="hidden" id="mdl" name="model" value="">
                                 <select required class="form-control m-select2 carModel"
                                            style="width:100% !important;" name="modelId" v-model="car.model"  required>
                                    </select>
                                </div>
                                <span class="form-text text-muted">Entrer Le Model</span>
                               </div>


                          <div class="col-lg-4">
                           <label>Date Fabrication:</label>
                           <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control date" readonly value="" name="dateModel" required v-model="car.dateModel" placeholder=""/>
                           </div>
                           <span class="form-text text-muted">Entrer La Date Fabrication</span>
                          </div>
                         </div>
                         <div class="form-group row">

                            <div class="col-lg-4">
                                <label>Matricule:</label>
                                <input type="text" class="form-control" name="matricule" v-model="car.maticul" required placeholder="Nom Client"/>
                                <span class="form-text text-muted">Entrer La matricule</span>
                               </div>
                               <div class="col-lg-4">
                                <label>Code VIN:</label>
                                <input type="text" class="form-control" required name="vin" v-model="car.vin" placeholder="Prenom Client"/>
                                <span class="form-text text-muted">Entrer Le Code VIN</span>
                               </div>

                            <div class="col-lg-4">
                                <label>Coleur:</label>
                                <div class="input-group">
                                    <input type="color" required name="color" class="form-control" v-model="car.color" placeholder="" />
                                </div>
                            </div>


                         </div>
                         <div class="form-group row">

                          <div class="col-lg-4">
                            <label>Date Achat:</label>
                            <div class="input-group">
                             <div class="input-group date" >
                                 <input type="text" name="dateAchat"  class="form-control date" required readonly value="" v-model="car.dateAchat"  />
                                 <div class="input-group-append">
                                  <span class="input-group-text">
                                   <i class="la la-calendar"></i>
                                  </span>
                                 </div>
                                </div>                            </div>
                            <span class="form-text text-muted">Entrer La Date Achat</span>
                           </div>

                           <div class="col-lg-4">
                            <label>Prix Achat:</label>
                            <div class="input-group">
                                <input type="number" step="0.01" class="form-control" name="prixAchat"  required v-model="car.prixAchat">
                            </div>
                            <span class="form-text text-muted">Entrer Le Prix Achat:</span>
                           </div>

                           <div class="col-lg-4">
                            <label>Maison:</label>
                            <div class="input-group">
                             <input type="text" class="form-control" name="maison" v-model="car.maison" placeholder="Enter your address"/>
                             <div class="input-group-append"><span class="input-group-text"><i class="la la-map-marker"></i></span></div>
                            </div>
                            <span class="form-text text-muted">Entre la Maison d'achat</span>
                           </div>
                        </div>
                         <div class="form-group row">
                          <div class="col-lg-4">
                           <label>Date Credit:</label>
                           <div class="input-group">
                            <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div>
                            <input type="text" readonly value="" name="dateCredit" class="form-control date" v-model="car.dateCredit" placeholder="Enter your postcode"/>
                           </div>
                           <span class="form-text text-muted">Entrer La Date de Credit</span>
                          </div>


                          <div class="col-lg-4">
                            <label>Taux Credit:</label>
                            <div class="input-group">
                             <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div>
                             <input type="number" step="0.01" name="creditRate" class="form-control" v-model="car.creditRate" pattern="^\d*(\.\d{0,2})?$"  placeholder="Enter your postcode"/>
                            </div>
                            <span class="form-text text-muted">Entrer Le Taux Credit</span>
                           </div>




                          <div class="col-lg-4">
                            <label>Transmission:</label>
                            <div class="input-group">
                                <div class="radio-inline">
                                 <label class="radio radio-solid">
                                  <input type="radio" name="trans[]"  v-model="car.trans" value="A"/>
                                  <span></span>
                                  Automatique
                                 </label>
                                 <label class="radio radio-solid">
                                  <input type="radio" name="trans[]" checked="checked" value="M"/>
                                  <span></span>
                                  Manuel
                                 </label>
                                </div>
                            </div>
                            <span class="form-text text-muted">Entrer Le Type de Transmission</span>
                           </div>
                         </div>
                         <div class="form-group row">
                            <div class="col-lg-4">
                             <label>puissance:</label>
                             <div class="input-group">
                              <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div>
                              <input type="number" name="puissance" class="form-control" v-model="car.puissance" required placeholder="Enter your postcode"/>
                             </div>
                             <span class="form-text text-muted">Entrer La puissance</span>
                            </div>

                            <div class="col-lg-4">
                                <label>Carrburant:</label>
                                <div class="input-group">
                                 <select name="carb" class="form-control" name="carrburant"  v-model="car.carrburant">
                                     <option value="D">Diesel</option>
                                     <option value="E">Essence</option>
                                     <option value="H">Hybrid</option>
                                     <option value="El">Electric</option>
                                 </select>

                                </div>
                                <span class="form-text text-muted">Entrer Le Type de Carrburant</span>
                               </div>

                            <div class="col-lg-4">
                              <label>Category:</label>
                              <div class="input-group">
                                  <select name="type" id="" class="form-control"  v-model="car.type">
                                      <option value="Sedan">Sedan</option>
                                      <option value="Suv">Suv</option>
                                      <option value="Coupe">Coupe</option>
                                      <option value="Minivan">Minivan</option>
                                  </select>
                              </div>
                              <span class="form-text text-muted">Entrer La Category:</span>
                             </div>



                           </div>

                           <div class="form-group row">

                            <div class="col-lg-4">
                                <label>Date Vente:</label>
                                  <input type="text" class="form-control date" readonly value="" name="dateVente" v-model="car.dateVente">
                                <span class="form-text text-muted">Entrer La Date achat</span>
                               </div>



                            <div class="col-lg-4">
                              <label>Prix Vente:</label>
                              <div class="input-group">
                                  <input type="number" step="0.01" class="form-control" name="prixVente"  v-model="car.prixVente">
                              </div>
                              <span class="form-text text-muted">Entrer Le Prix Vente:</span>
                             </div>

                             <div class="col-lg-4">
                                <label for="">Photos:</label>
                                <br>
                                 <a href="#" @click="triggerFileUpload" role="button" id="photos"  class="btn btn-text-primary btn-hover-light-primary font-weight-bold mr-2">
                                     <i class="la la-drivers-license icon-3x text-dark"  ></i>
                                 </a>
                             </div>
                           </div>

                         <div class="form-group row">

                            <div class="col-lg-12">


                                <div class="input-group">
                                   <div v-if="photosUploaded" class="bg-black-10 pa2 flex">
                                    <figure class="mv0 ml0 mr3 relative flex items-center justify-center" v-for="(photo, $index) in photos">
                                      <button @click="removePhoto($index,'photos')" dataid="photos" class="button-reset pointer dim bn bg-black h2 w2 br-100 white flex items-center justify-center absolute absolute--fill-l center">
                                        <i class="la la-close"></i>
                                     </button>
                                      <img v-bind:src="photo" class="h3 w3" alt="Uploaded photo">
                                    </figure>
                                  </div>
                                  <input multiple @change="handlePhotoUpload" ref="photoUpload" type="file" name="photos[]"  hidden>
                                </div>
                                <span class="form-text text-muted">Uploder les Photos photos de Client</span>
                               </div>
                         </div>
                         <div class="form-group row">
                             <div class="col-lg-12">
                                <label>Observation:</label>
                                <textarea name="" v-model="car.note" name="note" class="form-control" cols="30" rows="5"></textarea>
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




    <div class="modal fade" id="EditCar"  role="dialog" aria-labelledby="exampleModalSizeXl" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modifier Une Voiture</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form" id="EditMyCar">
                        @csrf
                        <div class="card-body">
                         <div class="form-group row">

                            <div class="col-lg-4">
                                <label>Marque:</label>
                                <div class="input-group">
                                    <input type="hidden" id="brnd" name="brand" value="">
                                 <select class="form-control  m-select2 carBrand" name="brandId" v-model="car.brand"  style="width:100% !important;">
                                 </select>
                                </div>
                                <span class="form-text text-muted">Entrer La Marque </span>
                               </div>
                              <div class="col-lg-4">
                                <label>Model:</label>
                                <div class="input-group">
                                    <input type="hidden" id="mdl" name="model" value="">
                                 <select required class="form-control m-select2 carModel"
                                            style="width:100% !important;" name="modelId" v-model="car.model"  required>
                                    </select>
                                </div>
                                <span class="form-text text-muted">Entrer Le Model</span>
                               </div>


                          <div class="col-lg-4">
                           <label>Date Fabrication:</label>
                           <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control date" readonly value="" name="dateModel" required v-model="car.date_buy" placeholder=""/>
                           </div>
                           <span class="form-text text-muted">Entrer La Date Fabrication</span>
                          </div>
                         </div>
                         <div class="form-group row">

                            <div class="col-lg-4">
                                <label>Matricule:</label>
                                <input type="text" class="form-control" name="matricule" v-model="car.matricul" required placeholder="Nom Client"/>
                                <span class="form-text text-muted">Entrer La matricule</span>
                               </div>
                               <div class="col-lg-4">
                                <label>Code VIN:</label>
                                <input type="text" class="form-control" required name="vin" v-model="car.body_number" placeholder="Prenom Client"/>
                                <span class="form-text text-muted">Entrer Le Code VIN</span>
                               </div>

                            <div class="col-lg-4">
                                <label>Coleur:</label>
                                <div class="input-group">
                                    <input type="color" required name="color" class="form-control" v-model="car.color" placeholder="" />
                                </div>
                            </div>


                         </div>
                         <div class="form-group row">

                          <div class="col-lg-4">
                            <label>Date Achat:</label>
                            <div class="input-group">
                             <div class="input-group date" >
                                 <input type="text" name="dateAchat"  class="form-control date" required readonly value="" v-model="car.date_buy"  />
                                 <div class="input-group-append">
                                  <span class="input-group-text">
                                   <i class="la la-calendar"></i>
                                  </span>
                                 </div>
                                </div>                            </div>
                            <span class="form-text text-muted">Entrer La Date Achat</span>
                           </div>

                           <div class="col-lg-4">
                            <label>Prix Achat:</label>
                            <div class="input-group">
                                <input type="number" step="0.01" class="form-control" name="prixAchat"  required v-model="car.car_price">
                            </div>
                            <span class="form-text text-muted">Entrer Le Prix Achat:</span>
                           </div>

                           <div class="col-lg-4">
                            <label>Maison:</label>
                            <div class="input-group">
                             <input type="text" class="form-control" name="maison" v-model="car.maisson_achat" placeholder="Enter your address"/>
                             <div class="input-group-append"><span class="input-group-text"><i class="la la-map-marker"></i></span></div>
                            </div>
                            <span class="form-text text-muted">Entre la Maison d'achat</span>
                           </div>
                        </div>
                         <div class="form-group row">
                          <div class="col-lg-4">
                           <label>Date Credit:</label>
                           <div class="input-group">
                            <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div>
                            <input type="text" readonly value="" name="dateCredit" class="form-control date" v-model="car.credit_date" placeholder="Enter your postcode"/>
                           </div>
                           <span class="form-text text-muted">Entrer La Date de Credit</span>
                          </div>


                          <div class="col-lg-4">
                            <label>Taux Credit:</label>
                            <div class="input-group">
                             <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div>
                             <input type="number" step="0.01" name="creditRate" class="form-control" v-model="car.rate_credit" pattern="^\d*(\.\d{0,2})?$"  placeholder="Enter your postcode"/>
                            </div>
                            <span class="form-text text-muted">Entrer Le Taux Credit</span>
                           </div>




                          <div class="col-lg-4">
                            <label>Transmission:</label>
                            <div class="input-group">
                                <div class="radio-inline">
                                 <label class="radio radio-solid">
                                  <input type="radio" name="trans[]"  v-model="car.trans" value="A"/>
                                  <span></span>
                                  Automatique
                                 </label>
                                 <label class="radio radio-solid">
                                  <input type="radio" name="trans[]" checked="checked" value="M"/>
                                  <span></span>
                                  Manuel
                                 </label>
                                </div>
                            </div>
                            <span class="form-text text-muted">Entrer Le Type de Transmission</span>
                           </div>
                         </div>
                         <div class="form-group row">
                            <div class="col-lg-4">
                             <label>puissance:</label>
                             <div class="input-group">
                              <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div>
                              <input type="number" name="puissance" class="form-control" v-model="car.puissance" required placeholder="Enter your postcode"/>
                             </div>
                             <span class="form-text text-muted">Entrer La puissance</span>
                            </div>

                            <div class="col-lg-4">
                                <label>Carrburant:</label>
                                <div class="input-group">
                                 <select name="carb" class="form-control" name="carrburant"  v-model="car.carrburant">
                                     <option value="D">Diesel</option>
                                     <option value="E">Essence</option>
                                     <option value="H">Hybrid</option>
                                     <option value="El">Electric</option>
                                 </select>

                                </div>
                                <span class="form-text text-muted">Entrer Le Type de Carrburant</span>
                               </div>

                            <div class="col-lg-4">
                              <label>Category:</label>
                              <div class="input-group">
                                  <select name="type" id="" class="form-control"  v-model="car.category">
                                      <option value="Sedan">Sedan</option>
                                      <option value="Suv">Suv</option>
                                      <option value="Coupe">Coupe</option>
                                      <option value="Minivan">Minivan</option>
                                  </select>
                              </div>
                              <span class="form-text text-muted">Entrer La Category:</span>
                             </div>



                           </div>

                           <div class="form-group row">

                            <div class="col-lg-4">
                                <label>Date Vente:</label>
                                  <input type="text" class="form-control date" readonly value="" name="dateVente" v-model="car.date_vente">
                                <span class="form-text text-muted">Entrer La Date achat</span>
                               </div>



                            <div class="col-lg-4">
                              <label>Prix Vente:</label>
                              <div class="input-group">
                                  <input type="number" step="0.01" class="form-control" name="prixVente"  v-model="car.prix_vente">
                              </div>
                              <span class="form-text text-muted">Entrer Le Prix Vente:</span>
                             </div>

                             <div class="col-lg-4">
                                <label for="">Photos:</label>
                                <br>
                                 <a href="#" @click="triggerFileUpload" role="button" id="photos"  class="btn btn-text-primary btn-hover-light-primary font-weight-bold mr-2">
                                     <i class="la la-drivers-license icon-3x text-dark"  ></i>
                                 </a>
                             </div>
                           </div>

                         <div class="form-group row">

                            <div class="col-lg-12">


                                <div class="input-group">
                                   <div v-if="photosUploaded" class="bg-black-10 pa2 flex">
                                    <figure class="mv0 ml0 mr3 relative flex items-center justify-center" v-for="(photo, $index) in photos">
                                      <button @click="removePhoto($index,'photos')" dataid="photos" class="button-reset pointer dim bn bg-black h2 w2 br-100 white flex items-center justify-center absolute absolute--fill-l center">
                                        <i class="la la-close"></i>
                                     </button>
                                      <img v-bind:src="photo" class="h3 w3" alt="Uploaded photo">
                                    </figure>
                                  </div>
                                  <input multiple @change="handlePhotoUpload" ref="photoUpload" type="file" name="photos[]"  hidden>
                                </div>
                                <span class="form-text text-muted">Uploder les Photos photos de Client</span>
                               </div>
                         </div>
                         <div class="form-group row">
                             <div class="col-lg-12">
                                <label>Observation:</label>
                                <textarea name="" v-model="car.observation" name="note" class="form-control" cols="30" rows="5"></textarea>
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
    <script src="{{ asset('js/pages/clients-vue/cars.js') }}" type="text/javascript"></script>

@endsection
