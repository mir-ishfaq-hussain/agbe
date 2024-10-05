@extends('layouts.app')

@section('content')
<div class="container">
    <h1>City List</h1>

    <table id="cities-table" class="table table-bordered">
        <thead>
            <tr>
                <th>City</th>
                <th>State</th>
                <th>Country</th>
            </tr>
        </thead>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<script type="text/javascript">
    $(document).ready(function() {
        $('#cities-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/cities-data') }}",
            columns: [
                { data: 'name', name: 'name' },
                { data: 'state', name: 'state' },
                { data: 'country', name: 'country' }
            ]
        });
    });
</script>
@endsection
