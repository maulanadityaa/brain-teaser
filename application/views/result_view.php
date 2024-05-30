<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Brain Teaser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="row d-flex flex-column align-items-center">
            <div class="align-align-items-center">
                <h1 class="mt-5">Hasil</h1>
                <p class="lead">Poin yang anda dapat adalah <span class="fw-bold"><?php echo $score; ?></span></p>
                <form action="<?php echo site_url('game/save_score'); ?>" method="post">
                    <input type="hidden" name="score" value="<?php echo $score; ?>">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#saveScoreModal">Simpan Poin</button>
                    <a href="<?php echo site_url('game'); ?>" class="btn btn-warning">Ulangi</a>
                    <div class="modal fade" id="saveScoreModal" tabindex="-1" aria-labelledby="saveScoreModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="saveScoreModalLabel">Simpan Poin</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo site_url('game/save_score'); ?>" method="post">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nama Anda:</label>
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>
                                        <input type="hidden" name="score" value="<?php echo $score; ?>">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>