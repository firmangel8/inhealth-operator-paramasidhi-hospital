@extends('layout.app')
@section('content')
<div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @if(Session::has('message'))
                <div class="alert alert-primary">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      <b> Perhatian! </b> {{ Session::get('message') }}"</span>
                      {{ Session::forget('message') }}
                      {{ Session::save() }}
                  </div>
                  <!-- <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p> -->
                @endif
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Cek Kartu Inhealth</h4>
                  <p class="card-category">Check Inhealth Card</p>
                  
                </div>
                <div class="card-body">
                  <form method="POST" action="/inhealth/checkCard/wsResult">
                  {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nomor Kartu</label>
                          <input type="text" class="form-control" name="nokainhealth">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tanggal</label>
                          <!-- <input type="text" class="form-control datetimepicker1" name="tglpelayanan"> -->
                          <input type="text" class="datetimepicker form-control" name="tglpelayanan" autocomplete="off"/>
                           
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                          <div class="form-group">
                     
                            <select class="form-control" name="jenispelayanan">
                              <option value="3">Rawat Jalan</option>
                              <option value="4">Rawat Inap</option>
                            </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12">
                          <div class="form-group">
                       
                            <select class="form-control" name="poli">
                              @foreach($poliResult as $r_poliResult)
                                <option value="{{ $r_poliResult-> KDPOLI }}">{{ $r_poliResult-> NMPOLI }}</option>
                              @endforeach
                              <!-- <option value="umu">Poli Umum</option>
                              <option value="ugd">Poli UGD</option>
                              <option value="bed">Poli Bedah</option> -->
                            </select>
                        </div>
                      </div>
                    </div>
                  
                    <button type="submit" class="btn btn-success pull-right">Cek Kartu</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="">
                    <img class="img" src="{{ URL::asset('assets/img/logo.png')}}" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">
                    Bridging Inhealth  System - RS. Paramasidhi
                  </h6>
                  <h4 class="card-title">
                    Servicing in Harmony
                  </h4>
                  <p class="card-description">
                    Sistem informasi Bridging Paramasidhi - Inhealth merupakan sistem yang mengakomodir 
                    proses integrasi antara sistem Inhealth dengan paket aplikasi RS. Paramasidhi. Operator diharapkan
                    membaca panduan operasional prosedur penggunaan aplikasi.
                  </p>
                  <a href="#" class="btn btn-info btn-round" target="_blank">Baca Panduan</a>
                </div>
              </div>
            </div>
          </div>
        
        </div>
      </div>
@endsection