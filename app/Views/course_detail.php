<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Detail</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="/assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="/assets/vendors/fontawesome/all.min.css">

    <link rel="stylesheet" href="/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/x-icon">
    </script>
</head>

<body>
    <div id="app">
        <!--pastiin include global nav di semua page! -->
        <?php include('global_nav.php'); ?>
        <div id="main" class="layout-horizontal">

            <div class="content-wrapper container">

                <div class="page-heading">
                    <!--<h3>Popular Books</h3>-->
                </div>
                <div class="page-content">
                    <!-- Basic Tables start -->
                    <!-- Basic Vertical form layout section start -->
                    <section id="basic-horizontal-layouts">
                        <div class="row match-height">
                            <div class="mb-4 col-md-12  mx-auto ">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title"><b>Course 2:</b> New Chapter</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <form action="<?= base_url('course/' . $c_id . '/detail/add') ?>" method="post" enctype="multipart/form-data">
                                                <div class="mb-3 row">
                                                    <label for="name" class="col-sm-2 col-form-label"><b>Chapter Name</b></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="sc_name" class="form-control" id="name" aria-describedby="emailHelp" style="color: black;" value="<?= old('sc_name') ?>">
                                                        <?php if (!empty(session()->getFlashdata('error_sc_name'))) : ?>
                                                            <div class="text-danger"><?= session()->getFlashdata('error_sc_name') ?></div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="name" class="col-sm-2 col-form-label"><b>Video Link</b></label>
                                                    <div class="col-sm-10">
                                                        <input type="link" name="sc_video_link" class="form-control" id="video_link" aria-describedby="emailHelp" style="color: black;" value="<?= old('sc_video_link') ?>">
                                                        <?php if (!empty(session()->getFlashdata('error_sc_video_link'))) : ?>
                                                            <div class="text-danger"><?= session()->getFlashdata('error_sc_video_link') ?></div>
                                                        <?php else : ?>
                                                            <?php if (!(empty(session()->getFlashdata('error_sc_video_link_2')))) : ?>
                                                                <div class="text-danger"><?= session()->getFlashdata('error_sc_video_link_2') ?></div>
                                                            <?php endif ?>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="file" class="col-sm-2 col-form-label"><b>Upload File</b></label>
                                                    <div class="col-sm-10">
                                                        <input type="file" id="file" name="sc_filepath" class="form-control" accept=".xlsx,.xls,.doc,.docx,.ppt,.pptx,.txt,.pdf">
                                                        <?php if (!empty(session()->getFlashdata('error_file_1'))) : ?>
                                                            <div class="text-danger"><?= session()->getFlashdata('error_file_1') ?></div>
                                                        <?php endif; ?>
                                                        <?php if (!empty(session()->getFlashdata('error_file_2'))) : ?>
                                                            <div class="text-danger"><?= session()->getFlashdata('error_file_2') ?></div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="desc" class="col-sm-2 col-form-label"><b>Description</b></label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="sc_desc" id="desc" style="color: black;" cols="30" rows="10"> <?= old('sc_desc') ?></textarea>
                                                        <?php if (!empty(session()->getFlashdata('error_sc_desc'))) : ?>
                                                            <div class="text-danger"><?= session()->getFlashdata('error_sc_desc') ?></div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 d-flex justify-content-end">
                                                    <button class="btn btn-primary" type="submit" id="submit">Save</button>
                                                </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </section>
                <!-- <footer>
                <div class="container">
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2021 &copy; Mazer</p>
                        </div>
                        <div class="float-end">
                            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                    href="http://ahmadsaugi.com">A. Saugi</a></p>
                        </div>
                    </div>
                </div>
            </footer> -->
        </div>
        <?php include('footer.php') ?>
        </div>
        <script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>

        <script src="/assets/vendors/apexcharts/apexcharts.js"></script>
        <script src="/assets/js/pages/dashboard.js"></script>

        <script src="/assets/js/pages/horizontal-layout.js"></script>
        <script src="/assets/vendors/jquery/jquery.min.js"></script>
        <script src="/assets/vendors/jquery-datatables/jquery.dataTables.min.js"></script>
        <script src="/assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js"></script>
        <script src="/assets/vendors/fontawesome/all.min.js"></script>
</body>

</html>