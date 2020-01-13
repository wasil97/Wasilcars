<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        @yield ('page_title', 'Wasil Cars')
    </title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset ('images/logo.png') }}" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css" />

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css" /> --}}

    <link rel="stylesheet" href="{{ asset ('css/app.css') }}" />
</head>

<header>
    <img src="{{ asset ('images/logo.png') }}" />

    <ul>
        <li><a href="{{ route ('home') }}">Home</a></li>
        @if( Session::get('user') != null)
            <li style="margin-left: 65%;"><a href="{{ route ('logout') }}">Logout</a></li>
            <li style="margin-left: 5%;"><a href="{{ route ('admin') }}">Admin Panel</a></li>
        @else
        <li style="margin-left: 70%;"><a href="{{ route ('admin') }}">Admin Panel</a></li>
        @endif
    </ul>

</header>

<body>

<div class="container">

    @yield ('content')

</div>

<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>


</body>    
<script>
      $(document).ready(function() {
        var mytable =  $('#mycar').DataTable({
        dom: "Bfrtip",
        select: true,
        buttons: [
            { text:"Add",  action: function ( e, dt, node, config ) {
                    window.open(  "{{   route('addcar') }}"  )   }
            },
            { text:"Edit", action: function ( e, dt, node, config ) {

                var id = mytable.cell('.selected', 0).data();
                var url = '{{ route("editcar", ":id") }}';
                url = url.replace(':id', id);
                window.open(url);
            }},
            { text:"Delete", action: function ( e, dt, node, config ) {

                var id = mytable.cell('.selected', 0).data();
                var url = '{{ route("deletecar", ":id") }}';
                url = url.replace(':id', id);
                window.open(url);
            }
            }
            ],
            "columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": false
            }
        ]
        });

        $('#carlist').DataTable({
        "columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": false
            }
        ]
        });

        });
        </script>
</html>