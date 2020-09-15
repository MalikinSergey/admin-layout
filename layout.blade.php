<!doctype html>
<html lang="en">

<head>
    <title>
        @section('title')
            Tokenbox.io &mdash; Администрирование
        @show
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" crossorigin="anonymous">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Tokenbox.io &mdash; Администрирование</a>
</nav>

<div class="container-fluid">
    
    <div class="row">
        
        <div class="col-auto bg-light">
            
                @include('admin.left_menu')
        
        </div>
        
        <div class="col pb-5">
            
            <nav aria-label="breadcrumb" role="navigation" class="mt-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Панель управления</a></li>
                    @yield('breadcrumbs')
                </ol>
            </nav>
            
            {{-- messages --}}
            <div class="row mt-3">
                <div class="col">
                    @if(Session::get('message'))
                        <div class="alert alert-success animated fadeIn" role="alert">{{trans(Session::get('message'))}}</div>
                    @endif
                    
                    @if($errors->count())
                        <div class="alert alert-danger" role="alert">
                            @foreach($errors->all() as $msg)
                                <p>{{trans($msg)}}</p>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
            {{-- /messages --}}
            
            @yield('content')
        
        </div>
    
    </div>

</div>



@yield('scripts')

<script type="text/javascript">
    $(function(){

        $('.btn-danger').on('click', function (e) {

            if (confirm('Подтвердите действие')) {
                //
            } else {
                e.preventDefault()
            }

        })

    });
</script>


</body>
</html>