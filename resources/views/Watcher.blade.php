<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Watcher Data</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="card mt-5">
            <h3 class="card-header p-3">Watcher tables</h3>
            <div class="card-body">
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>Watcher ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Precinct ID</th>
                            <th>Barangay ID</th>
                            <th>School ID</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

<script type="text/javascript">
    $(function() {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('Watchers.index') }}",
            columns: [
                {
                    data: 'Watchers_id',
                    name: 'Watchers_id',
                },
                {
                    data: 'FirstName',
                    name: 'FirstName',
                },
                {
                    data: 'LastName',
                    name: 'LastName',
                },
                {
                    data: 'Precinct_id',
                    name: 'Precinct_id',
                },
                {
                    data: 'Brgy_id',
                    name: 'Brgy_id',
                },
                {
                    data: 'School_id',
                    name: 'School_id',
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

    });
</script>
</body>

</html>
