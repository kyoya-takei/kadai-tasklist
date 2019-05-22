<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>task list</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrik-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <style type="text/css">
            .b-inline{
               display: inline-block; 
            }
            .strong_red{
                font-weight: bold;
                color: red;
            }
        </style>
    </head>
    
    <body>
    
        @include('commons.navbar')
                
        <div class="container">
            @include('commons.error_messages')
            
            @yield('content')
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>