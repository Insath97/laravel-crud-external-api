<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fetch api data</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- DataTables Bootstrap CSS -->
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css" rel="stylesheet">
    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-4 bg-primary p-3">
            <h3 class="text-light">Product List</h3>
            <a href="{{ route('api-data/store') }}" class="btn btn-light">Create New</a>
        </div>

        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->product_name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->price }}</td>
                        <td>
                            <div class="d-flex flex-column flex-sm-row">
                                <a href="{{ route('api-data/edit', $item->id) }}"
                                    class="btn btn-success text-light mb-2 mb-sm-0 mr-sm-2">
                                    EDIT
                                </a>
                                <a href="javascript:void(0);" data-id="{{ $item->id }}"
                                    class="btn btn-danger text-light delete-data">
                                    DELETE
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach


                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- DataTables Bootstrap JS -->
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <!-- DataTables Responsive JS -->
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js"></script>

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "responsive": true,
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "pageLength": 10 // Display 10 records per page
            });


            $(document).ready(function() {
                $('body').on('click', '.delete-data', function(event) {
                    event.preventDefault();

                    // Get the ID from the data attribute
                    let id = $(this).attr('data-id');

                    if (confirm('Are you sure you want to delete this item?')) {
                        $.ajax({
                            method: 'DELETE',
                            url: "http://127.0.0.1:8000/api/products/" + id,
                            data: id = id,
                            success: function(data) {
                                console.log('Delete successful:',
                                    data); // Debugging log
                                toastr.success('Item deleted successfully!');
                                setTimeout(function() {
                                    window.location.reload();
                                }, 1000);
                            },
                            error: function(xhr, status, error) {
                                console.log('Status:', status); // Debugging log
                                console.log('Error:', error); // Debugging log
                                console.log('Response:', xhr
                                    .responseText); // Debugging log
                                toastr.error('An error occurred. Please try again.');
                                setTimeout(function() {
                                    window.location.reload();
                                }, 1000);
                            }
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>
