<html>

<head>
    <title>Digital Voting - Registratrion</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <div class="headerSection">
            <h1 class="title">Digital Voting</h1>
        </div>
        <hr>

        <div class="registerSection">
            <h2 class="title2">Register</h2>        
            <form action="../api/register.php" method="POST" enctype="multipart/form-data" class="formContainer">
                <input type="text" name="name" placeholder="Name" required>
                <input type="number" name="mob" placeholder="Mobile" required>
                <input type="password" name="pass" placeholder="Password" required>
                <input type="password" name="cpass" placeholder="Confirm Password" required>
                <input type="text" name="add" placeholder="Address" required>
                <div id="upload" class="item">
                    Upload image: <input type="file" id="profile" name="image" required>
                </div><br>
                <div id="upload" class="item">
                    Select your role:
                    <select name="role">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select>
                </div>
                <button class="loginbtn" type="submit" name="registerbtn">Register</button>
                <p class="para">Already user? <a href="../index.html">Login here</a></p>
            </form>
        </div>
    </div>

</body>

</html>