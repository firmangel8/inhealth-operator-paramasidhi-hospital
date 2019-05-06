@extends('layout.app')
@section('content')
<div class="content">
        <div class="container-fluid">
          
          <div class="row">
            
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-info">
                  <h4 class="card-title">Simpan Tindakan</h4>
                  <p class="card-category">SJP Inhealth Card</p>
                  
                </div>
                <div class="card-body">
                <form method="POST" action="/inhealth/add-act/simpan">
                {{ csrf_field() }}
                    <div class="row">
                    <input type="hidden" name="kd_reg" value="{{ $kd_reg }}"/>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nomor SJP</label>
                          <input type="text" class="form-control" name="nosjp" value="{{ $dataResponse['NOSJP']}}" readonly/>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nomor Kartu Peserta</label>
                          <input type="text" class="form-control" name="nokapeserta" value="{{ $dataResponse['NOKAPESERTA']}}" readonly/>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jenis Pelayanan</label>
                            <select class="form-control" name="jenispelayanan" readonly>
                              <option value="{{ $dataResponse['jenispelayanan'] }}">
                                @if($dataResponse['jenispelayanan']=='3') 
                                  Rawat Jalan
                                @else
                                  Rawat Inap
                                @endif
                              </option>
                            
                            </select>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tanggal Masuk Rawat (<i>format : YYYY/MM/DD</i>)</label>
                          <input type="text" class="form-control" name="tglmasukrawat" autocomplete="off" value="{{ $tanggalmasukrawat }}" readonly>
                        </div>
                      </div>

                     
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Kode Poli</label>
                            <input type="text" class="form-control" name="poli" autocomplete="off" value="{{ $dataResponse->KDPOLI }}" placeholder="{{ $dataResponse->NMPOLI }}" readonly>
                        </div>
                      </div>
                     
                      <div class="col-md-12">
                          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#data-tindakan-detail" aria-expanded="false" aria-controls="data-tindakan-detail" style="width:100%">
                            Lihat Detail Tindakan
                          </button>
                          <div class="collapse" id="data-tindakan-detail">
                            <div class="card card-body">
                              <table id="data_tindakan" class="display nowrap">
                                  <thead>
                                      <tr>
                                          <th>Kode Tarif</th>
                                          <th>Nama Tarif</th>
                                          <th>Nama Dokter</th>
                                          <th>Nama Layanan</th>
                                          <th>Tanggal Layanan</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach($kodeTindakans as $kodeTindakan)
                                      <tr>
                                            <td>{{ $kodeTindakan->fs_kd_tarif }}</td>
                                            <td>{{ $kodeTindakan->fs_nm_tarif }}</td>
                                            <td>{{ $kodeTindakan->nama_map_dokter }}</td>
                                            <td>{{ $kodeTindakan->nama_layanan }}</td>
                                            <td>{{ $kodeTindakan->date_layanan }}</td>
                                      </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                            </div>
                          </div>
                      </div>
                    </div>

                   
                    <button type="submit" class="btn btn-success pull-right">Cek Kartu</button>
                    <div class="clearfix"></div>
                   </form>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
           
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
            <div class="col-lg-6 col-md-6 col-sm-6">
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

        </div>
      </div>
@endsection