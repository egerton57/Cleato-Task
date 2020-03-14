<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/CSS/main.css">
    <script src="Assets/JS/Validation.js"></script>
</head>

<body>
    <div class="container">
        <br><br>
        <div class="row">

            <div class="col-3">&nbsp;</div>

            <div class="col-6">
                <form action="Data-insert.php" method="post" name="registerForm" onsubmit="return formValidation()">

                    <div class="form-group">
                        <textarea name="reason" id="reason" rows="2" class="form-control" placeholder="I'm Signing because"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <button class="btn-facebook" id="withFacebbok">Sign with Facebook</button>
                        </div>
                        <div class="col">
                            <button class="btn-twitter" id="withTwitter">Sign with Twitter</button>
                        </div>
                    </div>

                    <!-- Invalid Feedback-->
                    <div class="form-group">
                        <small id="errorMsg" style="color: red"></small>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <label for="firstname">First Name*</label>
                            <input type="text" id="firstname" name="firstname" class="form-control">
                        </div>
                        <div class="col">
                            <label for="lastname">Last Name*</label>
                            <input type="text" id="lastname" name="lastname" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <label for="email">Email*</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                        <div class="col">
                            <label for="country">Country*</label>
                            <select name="country" id="country" class="form-control">
                                <option value="" disabled selected>Please select</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Switzerland">Switzerland</option>
                            </select>
                        </div>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-signing btn-lg btn-block" id="register" name="submit">SIGN NOW</button>

                </form>
            </div>

            <div class="col-3">&nbsp;</div>
        </div>
        
    </div>
</body>

</html>