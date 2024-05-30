<!DOCTYPE html>
<html lang="en">

<head>
    <title>Brain Teaser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex align-items-center p-4" style="min-height: 100vh;">
        <div class="card shadow-sm p-3">
            <div class="d-flex justify-content-center">
                <h1 class="mt-5">Brain Teaser</h1>
                <p class="fw-light fs-4">Guess the word!</p>
            </div>
            <form action="<?php echo site_url('/game/check_word'); ?>" method="post">
                <div class="form-group">
                    <p class="fw-medium fs-5"><?=
                                                $clue
                                                ?>
                    </p>
                    <div class="row" id="word">
                        <?php
                        for ($i = 0; $i < strlen($word); $i++) {
                            $letter = ($i == 2 || $i == 6) ? $word[$i] : '';
                            $readonly = ($i == 2 || $i == 6) ? 'readonly' : '';
                            echo '<div class="col"><input required type="text" name="user_input[]" maxlength="1" size="0.2" class="form-control d-inline w-5 mb-3" value="' . $letter . '" ' . $readonly . '></div>';
                        }
                        ?>
                        <input type="hidden" name="word" value="<?= $word; ?>">
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>