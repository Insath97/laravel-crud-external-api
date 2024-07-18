<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Item</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-light d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Create New Item</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-primary mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('api-data') }}" class="text-light">Home</a></li>
                        <li class="breadcrumb-item active text-light" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
            <div class="card-body">
                <form class="createForm" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="productName">Name</label>
                        <input type="text" class="form-control" id="productName" required name="name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" rows="3" required name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" step="0.01" required
                            name="price">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $('.createForm').on('submit', function(event) {
            event.preventDefault();

            $.ajax({
                method: 'POST',
                url: "http://127.0.0.1:8000/api/products",
                data: $(this).serialize(),
                success: function(data) {
                    toastr.success('Item created successfully!');

                    setTimeout(function() {
                        window.location.href = "{{ route('api-data') }}";
                    }, 1000);
                },
                error: function(xhr, status, error) {
                    toastr.error('An error occurred. Please try again.');

                    setTimeout(function() {
                        window.location.reload();
                    }, 1000);
                }
            });
        });
    </script>
</body>

</html>
