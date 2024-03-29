<link href="{{ asset('assets/libs/bootstrap-table/bootstrap-table.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<script src="{{ asset('assets/libs/bootstrap-table/bootstrap-table.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/datatables.min.js')}}"></script>
<input type="hidden" id="datatTableFields" value="{{ json_encode($dateTableFields)}}">

<script type="text/javascript">
$(function() {
    
    let dataTableFields= JSON.parse(document.getElementById('datatTableFields').value);
   
    var table = $('#{{$dataTableId}}').DataTable({
		
        processing: true,
        serverSide: true,
        ajax: "{{$dateTableUrl}}",
        columns: dataTableFields,
    });

    $('#filter-form').on('submit', function(e) {
        var obj = {};
        var data = $(this).serialize().split("&");
        for (var key in data) {
            obj[data[key].split("=")[0]] = data[key].split("=")[1];
        }
        $.ajaxSetup({
            data: obj
        });
        table.draw();
        e.preventDefault();
    });

});

</script>

