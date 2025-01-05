<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            color: whitesmoke;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .container {
            flex: 1;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3 text-center">
                <img src="images/pass.jpg" alt="Your Photo" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px;">
                <a href="cv.txt" class="btn btn-primary mt-3"><i class="fas fa-download"></i> Download My CV</a>
                <a href="contacts.php" class="btn btn-secondary mt-3"><i class="fas fa-envelope"></i> Contact Me</a>
            </div>
            <div class="col-md-9">
                <h1>About Me</h1>
                <p>Hello! I’m AUGUSTINE MKUPASI, a passionate Computer Science graduate with expertise in web development, software solutions, and technology services. I’m the founder of QuantumTechnologies, a versatile tech brand specializing in Maintenance, Graphics Designing, Cloud Computing, Software Development, and Installations.</p>
                <p>My journey includes developing projects like e-commerce platforms,inventory management systems, and portfolio websites using technologies such as HTML, CSS, JavaScript, PHP, MySQL, API integration, AJAX, and Bootstrap.  </p>
                <p>Beyond coding, I have a keen interest in teaching, troubleshooting technical issues, and empowering others through knowledge-sharing. </p>
                <p>Feel free to explore my portfolio to see some of my latest work and achievements. If you have any questions or would like to collaborate, don't hesitate to contact me.</p>
                </p>Let’s collaborate and build something impactful together!</p>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

