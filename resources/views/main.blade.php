<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiTobat</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* CSS untuk membuat sticky footer */
        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
        }

        footer {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    @include('nav')
    @yield('content')



    <footer class="bg-light text-center text-lg-start mt-auto">
        <div class="container p-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <p>
                        Aplikasi sederhana untuk manajemen stok toko obat.
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap JS (with Popper.js for dropdown and collapse functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>