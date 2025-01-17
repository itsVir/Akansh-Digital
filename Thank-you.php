<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">

    <meta charset="utf-8">

    <link href="../../css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link href="../../css2-1?family=Quantico:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet">
    <!-- Color Themes -->
    <link id="theme-color-file" href="css/color-themes/default-color.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <style>
        .background-animation {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(97, 67, 1, 0.2));
            background-size: 400% 400%;
            animation: gradientAnimation 4s ease infinite;
            z-index: 0;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .container-tnx {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column;
            padding: 20px;
            background: #fff;
            color: #444;
            text-align: center;
            animation: fadeIn 0.5s ease-in-out;
        }

        .tnx-container {
            width: 70vw;
        }

        @media (max-width: 768px) {
            .tnx-container {
                width: 100%;
            }
        }

        .thank-you-title {
            font-size: 3rem;
            color: rgb(177, 105, 11);
            animation: fadeIn 2s ease-out;
        }

        .thank-you-message {
            font-size: 1.2rem;
            color: #bbb;
            margin: 20px 0;
            animation: fadeIn 3s ease-out;
        }

        .tnx-container .back-tnx {
            text-decoration: none;
            color: rgba(255, 255, 255, 0.49);
            background-color: rgb(112, 64, 0) !important;


            width: 200px;
            height: 200px;
            background-color: orange;
            border-radius: 50%;
            padding: 20px 20px;

            transition: color 0.5s ease-in-out;

            &:hover {
                color: black;
                background-color: orange !important;
                transition: color 0.5s ease-in-out;
            }
        }

        .back-button {
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            transition: background-color 0.5s ease-in-out;
        }
    </style>


</head>

<body>

    <div class="background-animation"></div>

    <div class="container-tnx">
        <div class="tnx-container">

            <div class="pricing-one__single">

                <div class="pricing-one__single-inner">

                    <h1 class="thank-you-title">Thank You for Contacting Us!</h1>
                    <p class="thank-you-message">
                        We appreciate you reaching out to Akansh Digital. Our team specializes in NFC and digital card creation,
                        as well as social media marketing strategies to help grow your business. We'll get back to you shortly!
                    </p>

                    <!-- <a href="javascript:history.back()" class="back-tnx">Back</a> -->

                    <div class="project-one__btn-box back-button">
                        <a href="javascript:history.back()" class="project-one__btn thm-btn"> Back to Contect</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="thank-you-container">

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>