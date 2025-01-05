<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Navbar -->
    <?php include 'header.php'; ?>

    <!-- Projects Section -->
    <section class="container my-5">
        <h2 class="text-center mb-4">My Projects</h2>
        <div class="row g-4">
            <?php
            // Dynamic Project List
            $projects = [
            ["title" => "SOKO KUU APP", "image" => "orange.jpg", "description" => "An innovative platform offering seamless online shopping with a wide range of products, secure payments, and fast delivery services. Designed for user-friendly navigation across all devices"],
            ["title" => "QUANTUM TECHNOLOGIES", "image" => "images.jpg", "description" => "A professional platform to showcase projects, skills, and achievements with a responsive design and interactive sections. Perfect for building a strong online presence"],
            ["title" => "DUKA PRO APP", "image" => "e-com.avif", "description" => "A powerful tool for tracking and managing inventory with real-time updates, automated alerts, and detailed analytics. Streamlines operations for better efficiency."],
            ["title" => "SOKO KUU APP", "image" => "orange.jpg", "description" => "An innovative platform offering seamless online shopping with a wide range of products, secure payments, and fast delivery services. Designed for user-friendly navigation across all devices"],
            ["title" => "QUANTUM TECHNOLOGIES", "image" => "images.jpg", "description" => "A professional platform to showcase projects, skills, and achievements with a responsive design and interactive sections. Perfect for building a strong online presence"],
            ["title" => "DUKA PRO APP", "image" => "e-com.avif", "description" => "A powerful tool for tracking and managing inventory with real-time updates, automated alerts, and detailed analytics. Streamlines operations for better efficiency."]
            ];

            foreach ($projects as $project) {
                echo '
                <div class="col-md-4 ">
                    <div class="card shadow-sm h-100">
                        <img src="images/'.$project['image'].'" class="card-img-top" alt="'.$project['title'].'">
                        <div class="card-body" style="color: whitesmoke;">
                            <h5 class="card-title">'.$project['title'].'</h5>
                            <p class="card-text">'.$project['description'].'</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#projectModal" 
                                data-title="'.$project['title'].'" data-description="'.$project['description'].'">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </section>

    <!-- Project Modal -->
    <div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="projectModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p id="projectDescription"></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <section class="text-center bg-secondary text-white py-4">
        <h4>Have an idea in mind?</h4>
        <a href="contacts.php" class="btn btn-light mt-2">Let's Collaborate</a>
    </section>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Modal Dynamic Content
        var projectModal = document.getElementById('projectModal');
        projectModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var title = button.getAttribute('data-title');
            var description = button.getAttribute('data-description');
            var modalTitle = projectModal.querySelector('.modal-title');
            var modalBody = projectModal.querySelector('.modal-body p');
            modalTitle.textContent = title;
            modalBody.textContent = description;
        });
    </script>
</body>
</html>
