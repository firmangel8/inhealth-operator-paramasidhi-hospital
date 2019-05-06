<!--   Core JS Files   -->
<script src="{{ URL::asset('assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
   
<!-- <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script> -->

<!--datetime picker-->
   <script src="{{ URL::asset('material-timepicker/jquery.datetimepicker.full.min.js')}}"></script>
<!--datetime picker-->

<script src="{{ URL::asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>

<script src="{{ URL::asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<!--  Google Maps Plugin    -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
<!-- Chartist JS -->
<script src="{{ URL::asset('assets/js/plugins/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ URL::asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ URL::asset('assets/js/material-dashboard.min.js?v=2.1.0') }}" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<!-- <script src="{{ URL::asset('assets/demo/demo.js') }}"></script> -->
<script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
</script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<!-- <script src="{{ URL::asset('select2/select2.js') }}" type="text/javascript"></script> -->


<!-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script> -->
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

<script type="text/javascript" src="{{ URL::asset('multiselect/jquery.multiselect.js') }}"></script>

<script>
    function myFunction(id) {
        dndod.confirm("Anda yakin untuk menghapus data SJP ini", function () {
            dndod.notice("Data sedang dihapus "+id);
            window.location.href = 'http://192.168.1.78:8000/inhealth/hapus-sjp/'+id;
        });
    }
</script>

<!---here datatable-->
<script type="text/javascript">
$(function() {
    $.fn.dataTable.ext.errMode = 'none';
    $('#sjp_table').DataTable({
        processing: true,
        serverSide: true,
		responsive: true,
        ajax: '/inhealth/search-sjp/getdata',
        columns: [
			{ data: 'NOSJP', name: 'NOSJP' },
            { data: 'NOSJP', name: 'NOSJP' },
            { data: 'NAMAPESERTA', name: 'NAMAPESERTA' },
            { data: 'NOKAPESERTA', name: 'NOKAPESERTA' },
			{ data: 'KDPOLI', name: 'KDPOLI' },
            { data: 'KELASDESC', name: 'KELASDESC' },
            { data: 'PLANDESC', name: 'PLANDESC' },
            { data: 'TGLRUJUKAN', name: 'TGLRUJUKAN' },
            {
              "data": "id_history",
                render: function ( data, type, row ) {
                    return '<div class="dropdown"><button class="dropbtn"><i class="material-icons">menu</i> Action</button><div class="dropdown-content">'+
                    '<a href="/inhealth/print-sjp/'+data+'"><i class="material-icons">print</i> Print</a><a href="/inhealth/detail-sjp/'+data+'"><i class="material-icons">info</i> Detail</a><a href="/inhealth/pindahruangan-sjp/'+data+'"><i class="material-icons">compare_arrows</i> Pindah ruangan</a><a href="/inhealth/update-pulang-sjp/'+data+'"><i class="material-icons">home</i> Update Pulang</a><button onclick="myFunction('+data+')" class="btn btn-danger"><i class="material-icons">delete</i> Delete</button>'
                ' </div>'+
                '</div>';
                }
            }
        ]
    });
});
</script>
<!---here datatable-->
<script>
    $(document).ready(function(){
        $('.select2').select2({
            placeholder : '',
            tags: true
        });
    });
</script>

<script>
    $('.datetimepicker').datetimepicker({
        inline:false,
        formatDate: 'Y-m-d',
        timepicker: false,
        format: 'Y-m-d',

    });
</script>

<script>
        $('select[multiple]').multiselect({
            columns: 4,
            placeholder: 'Select options'
        });
</script>

<script>
  $(document).ready(function() {
        $('#data_tindakan').DataTable( {
           
        } );
    } );
</script>

<script>
            $('.pagination li').addClass('page-item');
            $('.pagination li a').addClass('page-link');
            $('.pagination span').addClass('page-link');
</script>

<!-- <script type="text/javascript">
    var url = "{{ route('typeahead.response') }}";
    $('#search_text').typeahead({
        source:  function (query, process) {
        return $.get(url, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script> -->


<script>
    $(document).ready(function() {
    src = "{{ route('typeahead.response') }}";
     $("#search_text").autocomplete({
        source: function(request, response) {
         
         console.log(request.term)
            $.ajax({
                url: src,
                dataType: "json",
                data: {
                    term : request.term
                },
                success: function(data) {
                    console.log(data)
                    if(data){
                        document.getElementById("hello").innerHTML=data[0].NOSJP;
                    }else if(data === undefined || data.length == 0){
                        document.getElementById("hello").innerHTML='';
                       console.log('no data');
                    }
                   

                console.log(data[0].NOSJP);
                  
                    
                    
                       
                       

                    
                   
                   
                }
            });
        },
        minLength: 3,
       
    });
});
</script>

<script>
$(document).ready(function(){

 fetch_sjp_data();

 function fetch_sjp_data(query = '')
 {
  $.ajax({
   url:"{{ route('live_search.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('.data_resolve').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_sjp_data(query);
 });
});
</script>









