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
                
                    <input style='margin: 5px;background-color: black;color: white;height: 35px;width:280px;box-shadow: 3px 4px 7px black;' type="text" placeholder="Username">
                    <input style='margin: 5px;background-color: black;color: white;height:35px;width:280px;box-shadow: 3px 4px 7px black;' type="password" placeholder="Password"><br>

                    <div style='margin-top:10px;'>
                        <a  style='margin:2px;' class='btn btn-dark register-button'>Register</a>
                        <span>/</span>
                        <a href="/" style='width:82.91px;margin:2px;' class='btn btn-success'>Login</a>

                    </div>
                    
            </div>

        </form>
    </div>


    <div class='register' style='display:none;position:fixed; top:10%;color: white;padding:10px;'>
        
        <form action="">
            @csrf
            <div style='text-align:center;'>
                <h4 style='font-family:futura;'>clothesit</h4>
                    
                    <input style='margin: 10px;background-color: black;color: white;height: 35px;width:280px;box-shadow: 3px 4px 7px black;' type="text" placeholder="Firstname">
                    <input style='margin: 10px;background-color: black;color: white;height: 35px;width:280px;box-shadow: 3px 4px 7px black;' type="text" placeholder="Lastname">

                    <input style='margin: 10px;background-color: black;color: white;height: 35px;width:280px;box-shadow: 3px 4px 7px black;' type="text" placeholder="Username">
                    <input style='margin: 10px;background-color: black;color: white;height: 35px;width:280px;box-shadow: 3px 4px 7px black;' type="email;" placeholder="Email">


                    <input style='margin: 10px;background-color: black;color: white;height: 35px;width:280px;box-shadow: 3px 4px 7px black;' type="text" placeholder="Password">
                    <input style='margin: 10px;background-color: black;color: white;height:35px;width:280px;box-shadow: 3px 4px 7px black;' type="password" placeholder="Confirm Password"><br>

                    <div style='margin-top:10px;'>
                        <a href="/login" style='margin:2px;' class='btn btn-dark'>Signup</a>
                    </div>
                    
            </div>

        </form>
    </div>

    @include('partials.scripts')
</body>
</html>