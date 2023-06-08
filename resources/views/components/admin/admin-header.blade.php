<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{asset ('images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset ('css/main-css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>
<body>
    <div class="container-fluid p-0 m-0">
        <div class="topbar">
            <div class="user">
              <img src="{{ asset('images/logo.png') }}" alt="company">
            </div>
            <div></div>
            <div class="search">
                <!-- <input type="text" id="search" placeholder="Search Here">
                <label for="search"><i class="fas fa-search"></i></label> -->
            </div>
            <div>Hi, {{auth()->user()->name}}</div>
            <div class="bell">
              <i class="fas fa-bell"></i>
            </div>
        </div>