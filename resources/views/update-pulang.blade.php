@extends('layout.app')
@section('content')
<div class="content">
        <div class="container-fluid">
        @if (Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
            {{ Session::forget('message') }}
            {{ Session::save() }}
        @endif
         <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="card">
              <div class="row">
                  <hr/>
                <div class="col-lg-12 col-md-12">
                  <div class="pull-right">
                  <hr/>
                    <p><img src="{{ URL::asset('assets/inhealth.png')}}" width="10%" height="auto" align="right"> 
                    <h3>&nbsp;&nbsp;&nbsp;Form Update Pulang Pasien</h3>. </p>
                  </div>
                
                </div>
                <div class="col-lg-12">
                  <form method="POST" action="/inhealth/update-pulang-sjp-send/">
                      <div class="col-md-12">
                          <div class="form-group">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{ $historySJP->IDAKOMODASI }}" name="id_akomodasi"/>
                            <input type="hidden" value="{{ $historySJP->NOSJP }}" name="NOSJP"/>
                            Tanggal Masuk
                            <input type="text" class="form-control" name="tglmasuk" value="{{ $historySJP->TGLSJP }}" readonly/>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            Tanggal Pulang
                            <input type="text" class="form-control datetimepicker" name="tglkeluar" autocomplete="off" required>
                          </div>
                        </div>
                        <div class="pull-right">
                          <button type="submit" class="btn btn-info">Simpan</button>
                        </div> 
                        <div class="clearfix"></div>
                  <form>
                </div>
              </div>
            </div>
          </div>
         </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="">
                    <img class="img" src="{{ URL::asset('assets/img/logo.png')}}" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">
                    IDENTITAS PESERTA INHEALTH
                  </h6>
                  <h4 class="card-title">
                    <b>{{ $historySJP->NAMAPESERTA }}</b>
                  </h4>
                  <p class="card-description">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        PLAN
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <a class="nav-link active" href="#" data-toggle="tab">
                          <p class="text-info">
                            <i class="material-icons">note_add</i> 
                            {{ $historySJP->PLANDESC }}
                            <div class="ripple-container"></div>
                          </p>
                        </a>
                      </div>

                      <div class="col-lg-6 col-md-6">
                        GENDER
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <a class="nav-link active" href="#" data-toggle="tab">
                          <p class="text-success">
                            <i class="material-icons">face</i> 
                            @if($historySJP->JENISKELAMIN=="L"){
                               LAKI-LAKI
                            }
                            @else{
                              PEREMPUAN
                            }
                            @endif
                           
                            <div class="ripple-container"></div>
                          </p>
                        </a>
                      </div>

                      
                    </div>
                  </p>
                  <a href="/inhealth/add-act/{{ $historySJP->id_history }}" class="btn btn-info btn-round">TAMBAH TINDAKAN</a>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Detail SJP</h4>
                  <p class="card-category">SJP Inhealth Card</p>
                  
                </div>
                <div class="card-body">
                    

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nomor Kartu</label>
                          <input type="text" class="form-control" value="{{ $historySJP['NOKAPESERTA']}}" disabled />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">NOMOR SJP</label>
                          <input type="text" class="form-control" value="{{ $historySJP['NOSJP']}}" disabled />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">TANGGAL SJP</label>
                          @php 
                            $data = date('d-m-Y H:i:s', strtotime($historySJP->TGLSJP));
                          @endphp
                          <input type="text" class="form-control" value="{{ $data }}" disabled />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">ASAL RUJUKAN</label>
                          <input type="text" class="form-control" value="{{ $historySJP->NMPPKASALRUJUKAN }}" disabled />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">POLI</label>
                          <input type="text" class="form-control" value="{{ $historySJP->NMPOLI }}" disabled />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">TIPE COB</label>
                          <input type="text" class="form-control" value="{{ $historySJP->TIPECOB }}" disabled />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">NAMA BADAN USAHA</label>
                          <input type="text" class="form-control" value="{{ $historySJP->NMBU }}" disabled />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">NO. BJPS</label>
                          <input type="text" class="form-control" value="{{ $historySJP->NOBPJS }}" disabled />
                        </div>
                      </div>
                    </div>
                   
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection