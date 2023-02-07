<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pharmacy Managenment System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
   
    <style>
      body{
        background: lightyellow;
        margin: 20px;
        padding: 20px;
      }
      .parent {
    /* border: 2px solid blue; */
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: url("/pbackground.jpg");
    background-size: cover;
  }
  label {
    color: green;
  }
  .subparent {
    width: 50%;
    /* border: 2px solid green; */
  }

    </style>
  </head>
  <body>
    @yield('mainContent')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
