<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/f179fb6516.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/style2.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/style3.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/modal.css') ?>"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script
      src="https://kit.fontawesome.com/f179fb6516.js"
      crossorigin="anonymous"
    ></script>

    <script>
      // Overs on options area
      function hoverOnOptions() {}
      $(document).ready(function () {
        $(".nav-item").click(function (event) {
          event.stopPropagation();
          $(this)
            .css("color", "white")
            .addClass("selected")
            .siblings()
            .removeClass("selected")
            .css("color", "black");
        });

        // Get modal element
        var modal = $("#simple-modal");
        // Get open modal button
        var modalBtn = $(".modal-btn");
        // Get close button
        var closeBtn = $(".close-btn");

        // Listen for open click
        modalBtn.on("click", openModal);

        // Listen for close click
        closeBtn.on("click", closeModal);

        //liset for outside click
        $(window).on("click", outsideClick);

        //function to open modal
        function openModal() {
          modal.css("display", "block");
        }
        //function to close modal
        function closeModal() {
          modal.css("display", "none");
        }

        //function to close modal if user clicks outside of modal
        function outsideClick(event) {
          if (event.target == modal[0]) {
            modal.css("display", "none");
          }
        }

        // get options tag in select
        $(".select ul li.option").click(function () {
          var select = $(this);
          select.siblings().addBack().children().remove();
          select.siblings().toggle();
          select
            .siblings()
            .append(
              "<div class='options-area'><button class='btn'><i class='fa-solid fa-pencil fa-2x'></i></button><button class='btn'><i class='fa-solid fa-trash-can fa-2x'></i></button></div>"
            );
          select.parent().prepend(select);
          $(".options-area").css("display", "none");
        });

        $(".select ul li.option").hover(
          function () {
            $(this).children(".options-area").css("display", "block");
          },
          function () {
            $(this).children(".options-area").css("display", "none");
          }
        );
      });

      $(function () {
        $("#sortable").sortable();
      });


      $(document).ready(function () {
        $("a").click(function (event) {
     
        });

        $(".nav-item").click(function (event) {
          event.stopPropagation();
          $(this)
            .css("color", "white")
            .addClass("selected")
            .siblings()
            .removeClass("selected")
            .css("color", "black");
        });
      });
    </script>
    <title>Dashboard</title>
  </head>
  <body>
    <nav class="nav-container-admin shadow">
      <div class="nav-box">
        <h1 class="text-x-lg">Dashboard</h1>
        <a class="nav-item" href="dashboard">Orders</a>
        <a class="nav-item" href="product">Products</a>
      </div>
      <div class="container-flex-right-admin">
        <a href="admin" class="text-x-lg">Log Off</a>
      </div>
    </nav>