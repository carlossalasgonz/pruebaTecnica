<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .sidenav {
                height: 100%;
                width: 200px;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #111;
                overflow-x: hidden;
                padding-top: 20px;
            }

            .sidenav a {
                padding: 6px 8px 6px 16px;
                text-decoration: none;
                color: #818181;
                display: block;
            }

            .sidenav a:hover {
                color: #f1f1f1;
            }

            .main {
                margin-left: 220px; /* Same as the width of the sidenav */
                padding: 0px 10px;
                overflow: hidden;
            }

            .pagination li {
            margin-left: .25rem;
            margin-right: .25rem;
            }

            .pagination li .page-link {
            border-radius: .25rem;
            border: none;
            min-width: 2.25rem;
            text-align: center;
            color: #4f5464;
            }

            .pagination li.active .page-link,
            .pagination li .page-link:hover {
            background-color: #1d97c9;
            color: #fff;
            font-weight: bold;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

        
            <div class="sidenav">
                <!--category filter-->
                <div>
                    <h2>Category</h2>
                    <div>
                        @foreach ($categories as $category)
                            <a href="#">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
                <!--category filter-->
                <br>
                <br>
                <!--category filter-->
                <div>
                    <h2>Manufacturers</h2>
                    <div>
                        @foreach ($manufacturers as $manufacturer)
                            <a href="#">{{ $manufacturer->name }}</a>
                        @endforeach
                    </div>
                </div>
                <!--category filter-->
            </div>

            <div class="main">
                <div class="title m-b-md">
                    Prueba
                </div>

                <table >
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                        </tr>
                    @endforeach
                </table>
                <br>
                <div class="float-right">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </body>
</html>
