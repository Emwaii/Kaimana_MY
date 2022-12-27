<!DOCTYPE html>
<html lang="en">

<head>
    <title>404 - LPSE Kabupaten Kaimana</title>
    <!-- import component head -->
    <?php $this->load->view('component/_head') ?>
    <!-- end import component head -->
    <style>
        #error{
            position: fixed;
            top: 50%;
            left: 50%;
            /* bring your own prefixes */
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <div id="error">
        <div class="error-page container">
            <div class="col-12">
                <div class="text-center ">
                    <img class="img-error"src="assets/images/samples/error-404.svg" alt="Not Found">
                    <h1 class="error-title">NOT FOUND</h1>
                    <p class='fs-5 text-gray-600'>The page you are looking not found.</p>
                    <a href="<?= base_url('');?>" class="btn btn-lg btn-outline-primary mt-3">Go Home</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
