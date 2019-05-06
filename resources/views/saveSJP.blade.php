@extends('layout.app')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title">Identitas Peserta Inhealth</h4>
                  <p class="card-category"> Inhealth Card Identity</p>
                  
                </div>
                <div class="card-body">
                
            
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nomor Kartu</label>
                          <input type="text" class="form-control" name="" value="{{ $dataResponse['NOKAPST'] }}" disabled>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama</label>
                          <input type="text" class="form-control" name="" value="{{ $dataResponse['NMPST'] }}" disabled>
                        </div>
                      </div>
 
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Kode dan Nama Badan Usaha</label>
                          <input type="text" class="form-control" name="" value="{{ $dataResponse['KODEBADANUSAHA'] }} - {{ $dataResponse['NAMABADANUSAHA'] }}" disabled>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama dan Kode Produk</label>
                          <input type="text" class="form-control" name="tgllahir" value="{{ $dataResponse['NAMAPRODUK'] }} - {{ $dataResponse['KODEPRODUK'] }}" disabled>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Provider - Kode Provider</label>
                          <input type="text" class="form-control" name="" value="{{ $dataResponse['NAMAPROVIDER'] }} - {{ $dataResponse['KODEPROVIDER'] }}" disabled>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Provider BPJS</label>
                          <input type="text" class="form-control" name="" value="{{ $dataResponse['NAMAPROVIDERBPJS'] }}" disabled>
                        </div>
                      </div>
                    </div>
                
         
             
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-info">
                    <h4 class="card-title">Formulir Simpan SJP</h4>
                    <p class="card-category"> Inhealth Card Identity</p>
                    
                </div>
                <div class="card-body">
                
                  <form method="POST" action="/inhealth/saveSJP/wsResult">
                  {{ csrf_field() }}
                  
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nomor Medical Report</label>
                          <!-- <input type="text" class="form-control" name="nomormedicalreport"> -->
                          <select class="form-control select2" name="nomormedicalreport">
                              @foreach($datapasien as $r_dataPasien)
                                <option value="{{ $r_dataPasien-> FS_MR }}#{{ $r_dataPasien-> FS_KD_REG }}">
                                  {{ $r_dataPasien-> FS_MR }} - {{ $r_dataPasien-> nama_pasien }}
                                </option>
                              @endforeach
                            </select>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tanggal Pelayanan (format: YYYY/MM/DD)</label>
                          <input type="text" class="form-control datetimepicker" name="tanggalpelayanan" autocomplete="off">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nomor asal rujukan</label>
                          <input type="text" class="form-control" name="nomorasalrujukan">
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tanggal Asal Rujukan (<i>format : YYYY/MM/DD</i>)</label>
                          <input type="text" class="form-control datetimepicker" name="tanggalasalrujukan" autocomplete="off">
                        </div>
                      </div>

                      @if($jenispelayanan==4)
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Kelas Rawat</label>
                          <input type="text" class="form-control" name="kelasrawat">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Ruang Rawat</label>
                          <input type="text" class="form-control" name="kodejenpelruangrawat">
                        </div>
                      </div>
                      @endif

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Kode Diagnosa Utama</label>
                          <input type="text" class="form-control" name="kodediagnosautama">
                        </div>
                      </div>

                      
                      
                      <!--automatic filled-->
                      <input type="hidden" class="form-control" name="nokainhealth" value="{{ $dataResponse['NOKAPST'] }}">
                      <input type="hidden" class="form-control" name="kodeprovider" value="2201r002">
                      <input type="hidden" class="form-control" name="poli" value="BED">
                    
                      <input type="hidden" class="form-control" name="kodeproviderasalrujukan" value="{{ $dataResponse['KODEPROVIDER'] }}">
                      <!--automatic filled-->
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jenis Pelayanan</label>
                          <select class="form-control" name="jenispelayanan" readonly>
                              
                              
                              @if($jenispelayanan==3)
                                <option value="3">Rawat Jalan</option>
                              @else
                                <option value="4">Rawat Inap</option>
                              @endif
                            </select>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Kecelakaan Kerja</label>
                          <select class="form-control" name="kecelakaankerja">
                              <option value="0">Biasa</option>
                              <option value="1">Kecelakaan Kerja</option>
                              <option value="2">Kecelakaan Lalu Lintas</option>
                            </select>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Kode Diagnosa Tambahan</label>
                          <input type="text" class="form-control" name="kodediagnosatambahan">
                        </div>
                      </div>

                      <div class="col-md-12">
                      <div class="form-group">
                          <label class="bmd-label-floating">Informasi Tambahan</label>
                          <textarea class="form-control" name="informasitambahan"></textarea>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Simpan SJP</button>
                    <div class="clearfix"></div>
                  </form>
             
                </div>
              </div>
          </div>
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
                      <!-- {{ Session::save() }} -->
                  </div>
                  <!-- <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p> -->
                @endif
            </div>
          </div>
        </div>
      </div>
@endsection