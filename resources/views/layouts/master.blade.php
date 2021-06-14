<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Uppgifter</title>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">-->
    <style>
        .container {
        width: 90%;
        padding: 25px;
        }

        .text-muted {
        font-family: Arial, Helvetica, sans-serif;
        color: #6c757d;
        }

        #tasks {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #tasks td, #tasks th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #tasks td:nth-child(2){width: 30px; text-align: center;}

        #tasks tr:nth-child(even){background-color: #f2f2f2;}

        #tasks tr:hover {background-color: #ddd;}

        #tasks th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
        }

        #splash img {
            width: 228px;
            height: 46px;
        }

        .button {
        background-color: #008CBA; /* Blå */
        border: none;
        color: white;
        padding: 12px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        border-radius: 4px;
        }

        input[type=text], select {
        width: 80%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        #tasks img {
            width: 25px;
            height: 25px;
            display: inline-block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>

</head>

<body>

    
    <div id="splash"><img src=".\logo.png"></div>
    

    <div class="container">
        @yield('content')
    </div>

    <footer class="footer">
        <div class="container">
            <span class="text-muted">Anders W</span>
        </div>
        <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
        </script>
    </footer>

</body>
</html>