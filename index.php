<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            overflow: hidden;
        }
    </style>
</head>
<body>
    <div class="row main" style="height: 100vh;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwrWVYBKYVz3vXwfHx6sgqFb41OkebkIOSlw&s" width="100%" height="100%" class="m-0 p-0 position-relative" alt="">
        <form action="./register.php" method="POST" class="col-lg-4 m-auto p-3 position-absolute" style="top: 50%; left: 50%; transform: translate(-50% ,-50%); background: #454241e1;">
            <h1 class="text-center text-white">name </h1>
            <div class="my-3">
                <label class="text-white" for="">Enter Your Name</label>
                <input required name="name" type="text" placeholder="Enter Your Name" class="form-control my-1">
            </div>
            <div class="my-3">
                <label class="text-white" for="">Enter Your Mobile no</label>
                <input required name="number" type="number" placeholder="Enter Your Mobile no" class="form-control my-1">
            </div>
            <div class="my-3">
                <label class="text-white" for="">Enter Your Adress</label>
                <input required name="address" type="text" placeholder="Enter Your Adress" class="form-control my-1">
            </div>
            <button class="btn btn-info mx-auto d-block text-white fw-semibold my-2 mt-5">SUBBMIT</button>
        </form>
    </div>
</body>
</html>