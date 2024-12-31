<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }
        .card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 10px;
            overflow: hidden;
            width: 30%;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card img {
            width: 100%;
            height: auto;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 0;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.9);
        }
        .modal-content {
            margin: auto;
            display: block;
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }
        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }
        @media (max-width: 768px) {
            .card {
                width: 45%;
            }
        }
        @media (max-width: 480px) {
            .card {
                width: 100%;
            }
        }
    </style>
        <style>
        @media (max-width: 768px) {
            header h1 {
                font-size: 2em;
            }
        }
        @media (max-width: 480px) {
            header h1 {
                font-size: 1.5em;
            }
        }
    </style>
</head>
<body>
    <header style="background-color: #333; color: #fff; padding: 20px; text-align: center;">
        <h1 style="margin: 0; font-size: 2.5em; font-family: 'Arial', sans-serif;">For the Special One</h1>
    </header>


<div class="gallery">
    <div class="card">
        <img src="photo1.jpg" alt="Photo 1" onclick="openModal(this)">
    </div>
    <div class="card">
        <img src="photo2.jpg" alt="Photo 2" onclick="openModal(this)">
    </div>
    <div class="card">
        <img src="photo3.jpg" alt="Photo 3" onclick="openModal(this)">
    </div>
    <div class="card">
        <img src="photo4.jpg" alt="Photo 4" onclick="openModal(this)">
    </div>
    <div class="card">
        <img src="photo5.jpg" alt="Photo 5" onclick="openModal(this)">
    </div>
    <div class="card">
        <img src="photo6.jpg" alt="Photo 6" onclick="openModal(this)">
    </div>
</div>

<div id="myModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="img01">
</div>

<script>
    function openModal(element) {
        var modal = document.getElementById("myModal");
        var modalImg = document.getElementById("img01");
        modal.style.display = "block";
        modalImg.src = element.src;
    }

    function closeModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }
</script>

</body>
</html>