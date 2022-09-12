<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>imgshr</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

  </head>
  <body>
    
<div class="col-lg-8 mx-auto p-4 py-md-5">
  <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16">
            <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/>
        </svg>
        &nbsp;
        <span class="fs-2">imgshr</span>
    </a>
  </header>

  <main>
<?php
if (isset($_FILES['image'])) {
  $uploaddir = '/var/www/html/uploads/';
  $newname = date('Ymd_His_') . basename($_FILES['image']['name']);
  $uploadfile = $uploaddir . $newname;

  if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
  $url = $ENV['APP_BASE_URI'] . '/uploads/' . $newname;
?>
    <div class="alert alert-success" role="alert">
        Image uploaded! Here's your link: <a href="<?= $url ?>"><?= $url ?></a>
    </div>
<?php
  } else {
?>
    <div class="alert alert-danger" role="alert">
        Failed to upload image.
    </div>
<?php
  }
}
?>
    <h1>Few vowels, but plenty of images</h1>
    <p class="fs-5 col-md-8 mb-5">
      Quickly upload and share your images on the internet
    </p>

    <div class="mb-3">
      <form enctype="multipart/form-data" method="post" action="/">
        <div class="mb-3 col-md-6">
          <label class="form-label" for="image">Upload an image</label>
          <input type="file" class="form-control" id="image" name="image" />
        </div>
        <div>
          <input type="submit" class="btn btn-primary">
        </div>
      </form>
    </div>
  </main>
  <footer class="pt-5 my-5 text-muted border-top">
    Created with ¯\_(ツ)_/¯ &middot; <a href="https://github.com/totallyfakebusiness/imgshr">Fork me on GitHub</a>
  </footer>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

      
  </body>
</html>
