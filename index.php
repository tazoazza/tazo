<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAZO AZZA</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #000;
        }
        .title-container {
            position: absolute;
            white-space: nowrap;
            font-size: 24px;
            font-weight: bold;
            color: #e8491d;
            animation: marquee 10s linear infinite alternate;
        }
        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        .star {
            position: absolute;
            width: 5px;
            height: 5px;
            background-color: white;
            pointer-events: none;
        }
    </style>
</head>
<body>
    <div class="title-container">TAZO AZZA</div>
    <script>
        document.addEventListener("mousemove", function(event) {
            const star = document.createElement("div");
            star.className = "star";
            star.style.left = (event.clientX - 2.5) + "px";
            star.style.top = (event.clientY - 2.5) + "px";
            document.body.appendChild(star);
            setTimeout(() => {
                document.body.removeChild(star);
            }, 1000);
        });
    </script>
</body>
</html>
