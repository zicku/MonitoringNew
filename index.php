<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Home</title>
    <meta name="description" content="Monitoring Jurnal">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php"><i class="menu-icon fa fa-home"></i>Halaman Home</a></li>
                    <li><a href="Halaman_Jurnal.php"><i class="menu-icon fa fa-laptop"></i>Halaman Jurnal</a></li>
                    <li><a href="Halaman_Artikel.php"><i class="menu-icon fa fa-book"></i>Halaman Artikel</a></li>
                </ul>
            </div>
        </nav>
    </aside>

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="navbar-header">
                <a class="navbar-brand" href=""><img src="images/uinws.png" alt="Logo"></a>
                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
            </div>
        </header>

        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="box-title text-center">Informations</h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Informasi mengenai sistem monitoring jurnal dan artikel.</p>
                            <div class="progress mb-3">
                                <?php if (isset($_POST['checkUpdate'])): ?>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                <?php else: ?>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                <?php endif; ?>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-12 d-flex justify-content-center">
                                    <form action="" method="post">
                                        <button type="submit" class="btn button-78" name="checkUpdate">Check Update</button>
                                    </form>
                                </div>
                            </div>

                            <?php
                            if (isset($_POST['checkUpdate'])) {
                                runUpdateScript();
                            }

                            function runUpdateScript() {
                                $descriptorspec = array(
                                    0 => array("pipe", "r"),
                                    1 => array("pipe", "w"),
                                    2 => array("pipe", "w")
                                );

                                $process = proc_open('/path/to/python3 script.py &', $descriptorspec, $pipes);

                                if (is_resource($process)) {
                                    fclose($pipes[0]);
                                    $output = stream_get_contents($pipes[1]);
                                    fclose($pipes[1]);
                                    fclose($pipes[2]);
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2024 Hasyim Yahya
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
