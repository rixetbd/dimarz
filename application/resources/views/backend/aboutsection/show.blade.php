<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/fontawesome.css">
    <title>{{$data->title}}</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;600&display=swap');

        body{
            background-color: #f8f8f8;
            font-family: 'Lato', sans-serif;
        }
        .container{
            width: 1180px;
            padding: 40px;
            margin: auto;
            background-color: #fff;
        }
        .theme_color{
            font-size: 20px;
            color: #484a7d;
            font-weight: 400;
        }
        h1,h2,h3,h4,h5,h6{
            font-weight: 400;
        }
        h1{
            font-size: 2rem;
        }
        h2{
            font-size: 1.8rem;
        }
        h3{
            font-size: 1.6rem;
        }
        h4{
            font-size: 1.4rem;
        }
        h5{
            font-size: 1.2rem;
        }
        h6{
            font-size: 1rem;
        }
        p{
            font-family: 'Lato', sans-serif;
            font-size: 16px;
            letter-spacing: .5px;
        }
        .description ul{
            padding-left: 1rem;
        }
        .btn-primary {
            background-color: #24695c !important;
            border-color: #24695c !important;
        }
    </style>
</head>
<body>

    <div class="container description">
        <div class="my-2">
            <a href="{{route('backend.aboutsection.index')}}" class="btn btn-sm btn-primary float-end pe-3"><i class="fa fa-arrow-left mx-2"></i> Back to About Section List</a>
        </div>

        <h5 class="theme_color">{{$data->title}}</h5>
        {!! $data->description !!}
    </div>

</body>
</html>
