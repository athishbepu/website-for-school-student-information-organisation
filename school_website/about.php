<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('images/bg_image.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            color: #fff;
        }
        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            margin: 50px auto;
            max-width: 800px;
            border-radius: 10px;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 150px;
        }
        .team {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .team-member {
            background: rgba(255, 255, 255, 0.2);
            margin: 10px;
            padding: 20px;
            border-radius: 10px;
            flex: 1 1 calc(45% - 40px);
            text-align: center;
        }
        .team-member img {
            border-radius: 50%;
            max-width: 100px;
        }
        .team-member h2 {
            margin: 10px 0 5px;
        }
        .team-member p {
            margin: 5px 0;
        }
        .team-member a {
            color: #fff;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="images/while.png" alt="ADAM">
        </div>
        <div class="team">
        <p>Email: <a href="mailto:teamadamproject@gmail.com" style="color:#36AE7C;">teamadamproject@gmail.com</a></p>
        </div>
        <div class="team">
            <div class="team-member">
                <h2>Athish Bepu</h2>
                <p>Email: <a href="mailto:athishbepu7@gamil.com">athishbepu7@gamil.com</a></p>
            </div>
            <div class="team-member">
                <h2>Marbin Siju</h2>
                <p>Email: <a href="mailto:marbinsiju98@gmail.com">marbinsiju98@gmail.com</a></p>
            </div>
            <div class="team-member">
                <h2>Nandakishor G</h2>
                <p>Email: <a href="mailto:nandakishor4231@gmail.com ">nandakishor4231@gmail.com</a></p>
            </div>
            <div class="team-member">
                <h2>Adithya Chandran</h2>
                <p>Email: <a href="mailto:adithyachandran2020@gmail.com ">adithyachandran2020@gmail.com </a></p>
            </div>
        </div>
    </div>
</body>
</html>
