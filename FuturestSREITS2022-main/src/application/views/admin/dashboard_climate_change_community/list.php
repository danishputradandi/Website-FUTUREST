<!doctype html>

<html lang="en" dir="ltr">

<head>
    <?php
        $this->load->view('template/meta');
    ?>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/dashboard_admin_team_list.css">

    <!-- CSS Fonts Global -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/public/css/fonts.css">

    <!-- CSS Colors Global -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/public/css/colours.css">

    <!-- CSS Template Style Global -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/public/css/app.css">

    <title>3C - List</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 img-fluid"><img src="<?php echo base_url() ?>/public/img/Logo.png" alt=""></div>
            <div class="list-group list-group-flush my-3">
                <a href="<?php echo base_url('dashboard-final-talkshow')?>" class="list-group-item list-group-item-action bg-transparent primary-text"><i class="fas fa-home-alt me-2"></i>Home</a>
                <a href="<?php echo base_url('dashboard-final-talkshow-list')?>" class="list-group-item list-group-item-action bg-transparent second-text primary-text active"><i class="fas fa-users-cog me-2"></i>Registeree List</a>                <hr class="info-color">
                <a href="<?php echo base_url('logout')?>" class="list-group-item list-group-item-action bg-transparent text-danger primary-text"><i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="primary-text">Welcome to Dashboard Futurest Climate Change Community</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2 info-color"></i>@FuturestClimateChangeCommunity
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo base_url('dashboard-final-talkshow')?>">Home</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('dashboard-final-talkshow-list')?>">Registeree List</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('logout')?>">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Info Card -->
            
            <div class="container-fluid px-4 pb-5">
                <div class="row g-3 my-2">
                    <h4 class="mb-3 primary-text">User Registered</h4>
                        <?php $i = 1;?>
                        <?php foreach($data as $item):?>
                        <div class="col-12 col-sm-6 mb-3">
                            <div class="p-3 bg-white shadow info-card">
                                <i class="fas fa-users fs-1 info-color"></i>
                                <hr>
                                <p class="fs-6 text-black-50 regular-text" style="margin-bottom: 1px;">Name</p>
                                <h5 class="card-text regular-text"><?= $item['pendaftaranclimatechangecommunity_name']?></h5>

                                <p class="fs-6 text-black-50 regular-text" style="margin-bottom: 1px;">Email</p>
                                <h5 class="card-text regular-text"><?= $item['pendaftaranclimatechangecommunity_email']?></h5>

                                <p class="fs-6 text-black-50 regular-text" style="margin-bottom: 1px;">Current Domicile</p>
                                <h5 class="card-text regular-text"><?= $item['pendaftaranclimatechangecommunity_domicile']?></h5>

                                <p class="fs-6 text-black-50 regular-text" style="margin-bottom: 1px;">Major</p>
                                <h5 class="card-text regular-text"><?= $item['pendaftaranclimatechangecommunity_major']?>, <?= $item['pendaftaranclimatechangecommunity_university']?></h5>
                                
                                <p class="fs-6 text-black-50 regular-text" style="margin-bottom: 1px;">Batch</p>
                                <h5 class="card-text regular-text"><?= $item['pendaftaranclimatechangecommunity_batch']?></h5>
                                
                                <p class="fs-6 text-black-50 regular-text" style="margin-bottom: 1px;">LinkedIn</p>
                                <p class="card-text regular-text"><a href="<?= $item['pendaftaranclimatechangecommunity_linkedin']?>" target="_blank">Show</a></h5>
                                
                                <p class="fs-6 text-black-50 regular-text" style="margin-bottom: 1px;">CV</p>
                                <p class="card-text regular-text"><a href="<?php echo base_url('/upload/3C/CV/' . $item['pendaftaranclimatechangecommunity_cv'])?>" target="_blank">Show</a></h5>
                                
                                <p class="fs-6 text-black-50 regular-text" style="margin-bottom: 1px;">Motivation</p>
                                <h5 class="card-text regular-text"><?= $item['pendaftaranclimatechangecommunity_motivation']?></h5>

                                <p class="fs-6 text-black-50 regular-text" style="margin-bottom: 1px;">Contribution</p>
                                <h5 class="card-text regular-text"><?= $item['pendaftaranclimatechangecommunity_contribution']?></h5>

                                <p class="fs-6 text-black-50 regular-text" style="margin-bottom: 1px;">Prioritize (0 - 10)</p>
                                <h5 class="card-text regular-text"><?= $item['pendaftaranclimatechangecommunity_prioritize']?></h5>

                                <p class="fs-6 text-black-50 regular-text" style="margin-bottom: 1px;">Willingness to go to Surabaya and stay from March to June 2022?</p>
                                <h5 class="card-text regular-text"><?= $item['pendaftaranclimatechangecommunity_willingness']?></h5>

                                <p class="fs-6 text-black-50 regular-text" style="margin-bottom: 1px;">Committed to follow the event from start to finish?</p>
                                <h5 class="card-text regular-text"><?= $item['pendaftaranclimatechangecommunity_committed']?></h5>

                                <p class="fs-6 text-black-50 regular-text" style="margin-bottom: 1px;">Following Futurest</p>
                                <h5 class="card-text regular-text"><a href="<?php echo base_url('/upload/3C/followfuturestig/' . $item['pendaftaranclimatechangecommunity_followingfuturestig'])?>" target="_blank">Show</a></h5>

                                <p class="fs-6 text-black-50 regular-text" style="margin-bottom: 1px;">Following SRE</p>
                                <h5 class="card-text regular-text"><a href="<?php echo base_url('/upload/3C/followsreig/' . $item['pendaftaranclimatechangecommunity_followingsreig'])?>" target="_blank">Show</a></h5>

                                <p class="fs-6 text-black-50 regular-text" style="margin-bottom: 1px;">Sharing IGS</p>
                                <h5 class="card-text regular-text"><a href="<?php echo base_url('/upload/3C/sharestory/' . $item['pendaftaranclimatechangecommunity_sharestory'])?>" target="_blank">Show</a></h5>
                                
                                <p class="fs-6 text-black-50 regular-text" style="margin-bottom: 1px;">Twibbon</p>
                                <h5 class="card-text regular-text"><a href="<?php echo base_url('/upload/3C/twibbon/' . $item['pendaftaranclimatechangecommunity_twibbon'])?>" target="_blank">Show</a></h5>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- /info card -->
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    <a class="btn btn-success position-fixed" style="bottom: 30px; right: 30px" href="#wrapper">
        <i class="fas fa-chevron-up"></i>
    </a>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>