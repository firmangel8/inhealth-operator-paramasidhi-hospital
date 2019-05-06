@extends('layout.app')
@section('content')
<div class="content">
      <div class="container-fluid">
          <div class="row">
            {{-- <div class="col-lg-12 col-md-12">
              <form class="typeahead" role="search">
                <div class="form-group">
                  <input type="search" name="q" class="form-control" placeholder="Search" autocomplete="off" class="search-input" id="search_text">
                </div>
              </form>
            </div> --}}
            <div class="col-md-12 col-lg-12">
              <div class="card">
                <div class="card-header card-header-info">
                  <h4 class="card-title">Identitas Peserta Inhealth</h4>
                  <p class="card-category"> Inhealth Card Identity</p>
                  
                </div>
                <div class="card-body">
               
                    <div class="row">
                      <div class="col-lg-12 col-md-12">
                        <div class="form-group">  
                          <input type="text" id="search" placeholder="Search Text" class="form-control"/>            
                        </div>
                      <div>
                    </div>
                    <!-- <div class="row">
                    <div class="alert alert-info alert-with-icon" data-notify="container" id="hello">
                       
                    </div> -->
                      <div class="data_resolve"></div>
                      <div class="col-md-12 col-lg-12">
                      <table id="sjp_paging_manual" class="table table-bordered" style="width:100%">
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>NO. SJP</th>
                                  <th>NAMA</th>
                                  <th>NO. KARTU</th>
                                  <th>KD. POLI</th>
                                  <th>PLAN</th>
                                  <th>KELAS</th>
                                  <th>TGL. RUJUKAN</th>
                                  <th>OPTION</th>
                              </tr>
                          </thead>
                          <tbody>
                          @php ($i = 1)
                          @foreach ($history as $historySingle)
                            <tr>
                              <td>{{ $loop->index+1 }}</td>
                              <td>{{ $historySingle->NOSJP }}</td>
                              <td>{{ $historySingle->NAMAPESERTA }}</td>
                              <td>{{ $historySingle->NOKAPESERTA }}</td>
                                @if(empty($historySingle->KDPOLI))
                                  <td style="background:#22a7f0">
                                  </td>
                                  @else
                                  <td>
                                    {{ $historySingle->KDPOLI }}
                                </td>
                                  @endif
                              
                              <td>{{ $historySingle->KELASDESC }}</td>
                              <td>{{ $historySingle->TGLRUJUKAN }}</td>
                              <td>{{ $historySingle->PLANDESC }}</td>
                              <td>
                                <div class="dropdown"><button class="dropbtn">
                                  <i class="matsearch_texterial-icons">menu</i> Action</button>
                                    <div class="dropdown-content">
                                
                                      <a href="/inhealth/print-sjp/{{ $historySingle->id_history }}">
                                        <i class="material-icons">print</i> Print
                                      </a>
                                      @if(empty($historySingle->KDPOLI))
                                        <a href="/inhealth/detail-sjp/{{ $historySingle->id_history }}">
                                          <i class="material-icons">info</i> Detail
                                        </a>
                                        <a href="/inhealth/pindahruangan-sjp/{{ $historySingle->id_history }}">
                                          <i class="material-icons">compare_arrows</i> Pindah ruangan
                                        </a>
                                        <a href="/inhealth/update-pulang-sjp/{{ $historySingle->id_history }}">
                                        <i class="material-icons">home</i> Update Pulang</a>
                                      @endif
                                      
                                      
                                     
                                      <button onclick="myFunction({{ $historySingle->id_history }})" class="btn btn-danger">
                                        <i class="material-icons">delete</i> Delete
                                      </button>
                                    </div>
                                </div>
                              </td>
                            </tr>
                            
                          @endforeach
                          </tbody>
                        </table>
                       <h2>{{ $history->links() }}</h2>
                      </div>
                      
                   
                      
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-12">
              @if(session('message'))
                <div class="alert alert-primary">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      <b> Perhatian! </b> {{ Session::get('message') }}"</span>
                      {{ Session::forget('message') }}
                      {{ Session::save() }}
                </div>
              @endif
            </div>
      </div>
</div>




@endsection