<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body style='background-color: #121212'>
    <div class='login' style='position:fixed; top:25%;color: white;padding:10px;'>
        
        <form action="">
            @csrf
            <div style='text-align:center;'>
                <h4 style='font-family:futura;'>clothesit</h4>
                
                    <input style='margin: 5px;background-color: lightgray;color: black;height: 35px;width:280px;box-shadow: 3px 4px 7px black;' type="text" placeholder="Username">
                    <input style='margin: 5px;background-color: lightgray;color: blackheight:35px;width:280px;box-shadow: 3px 4px 7px black;' type="password" placeholder="password"><br>
                    <div style='margin-top:10px;'>
                        <a href="" style='margin:2px;' class='btn btn-dark'>Register</a>
                        <span>/</span>
                        <a href="/" style='width:82.91px;margin:2px;' class='btn btn-success'>Login</a>

                    </div>
                    
            </div>

        </form>

        
    </div>
</body>
</html>