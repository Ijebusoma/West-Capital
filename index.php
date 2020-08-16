<?php include 'connect.php' ?>
<link
  href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
  rel="stylesheet"
  id="bootstrap-css"
/>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>West Capital Finance</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   <?php include 'assets.php'; ?>
  </head>
  <body>
   
   <?php include 'nav.php'; ?>


    <div class="container-2">
      <div class="row">
        <p class="lead">Today is <?php echo date("l, M d, Y") ?></p>
        <div class="btn-group show-on-hover">
          <button
            type="button"
            class="btn btn-default dropdown-toggle"
            data-toggle="dropdown"
          >
            I want to... <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">I want to...</a></li>
            <li><a href="#">View profile</a></li>
            <li><a href="#">Transfer funds</a></li>
            <li><a href="#">Transfers to my card</a></li>
          </ul>
        </div>
      </div>
      <div class="container">
        <ul class="nav nav-tabs">
          <li class="active">
            <a data-toggle="tab" href="#home">Account History</a>
          </li>
          <li><a data-toggle="tab" href="#menu1">Transfer Funds</a></li>
          <li><a data-toggle="tab" href="#menu2">Cryptocurrency</a></li>
          <li><a data-toggle="tab" href="#menu2">Investment</a></li>
        </ul>

        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            <h3>Personal Information</h3>
            <p>
              Hello...