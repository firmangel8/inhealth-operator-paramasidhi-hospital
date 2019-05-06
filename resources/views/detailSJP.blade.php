@extends('layout.app')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-ambulance"></i>
                  </div>
                  <p class="card-category">ID AKOMODASI</p>
                  <h3 class="card-title">{{ $dataResponse->IDAKOMODASI }}
                    
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="#pablo">....</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-stethoscope"></i>
                  </div>
                  <p class="card-category">KODE DIAGNOSA</p>
                  <h3 class="card-title">{{ $dataResponse->KDDIAG }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> ....
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">NO. Medical Report</p>
                  <h3 class="card-title">{{ $dataResponse->NOMEDICALRECORD }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> {{ $dataResponse->CREATED_AT }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-bed"></i>
                  </div>
                  <p class="card-category">NO. RUJUKAN</p>
                  <h3 class="card-title">{{ $dataResponse->NOMORRUJUKAN }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">flight_land</i> {{ $dataResponse->CREATED_AT }}
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
                    <b>{{ $dataResponse->NAMAPESERTA }}</b>
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
                            {{ $dataResponse->PLANDESC }}
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
                            @if($dataResponse->JENISKELAMIN=="L"){
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
                  <a href="/inhealth/add-act/{{ $dataResponse->id_history }}" class="btn btn-info btn-round">TAMBAH TINDAKAN</a>
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
                          <input type="text" class="form-control" value="{{ $dataResponse['NOKAPESERTA']}}" disabled />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">NOMOR SJP</label>
                          <input type="text" class="form-control" value="{{ $dataResponse['NOSJP']}}" disabled />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">TANGGAL SJP</label>
                          @php 
                            $data = date('d-m-Y H:i:s', strtotime($dataResponse->TGLSJP));
                          @endphp
                          <input type="text" class="form-control" value="{{ $data }}" disabled />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">ASAL RUJUKAN</label>
                          <input type="text" class="form-control" value="{{ $dataResponse->NMPPKASALRUJUKAN }}" disabled />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">POLI</label>
                          <input type="text" class="form-control" value="{{ $dataResponse->NMPOLI }}" disabled />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">TIPE COB</label>
                          <input type="text" class="form-control" value="{{ $dataResponse->TIPECOB }}" disabled />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">NAMA BADAN USAHA</label>
                          <input type="text" class="form-control" value="{{ $dataResponse->NMBU }}" disabled />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">NO. BJPS</label>
                          <input type="text" class="form-control" value="{{ $dataResponse->NOBPJS }}" disabled />
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