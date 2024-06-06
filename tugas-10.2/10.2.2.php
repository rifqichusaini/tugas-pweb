<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga sama sisi</title>
    <style>
        .wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .input {
            display: flex;
            height: 150px;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid black;
        }
        .input form {
            display: flex;
            flex-direction: column;
        }
        .output .typing-char {
            opacity: 0;
            animation: typing 0.05s forwards;
        }
        @keyframes typing {
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="input">
            <h4>Program untuk Membuat Segitiga Sama Sisi</h4>
            <form action="" method="POST">
                <input type="number" name="nilai">
                <br>
                <input type="submit" value="submit" name="submit">
            </form>
        </div>

        <div class="output" id="output">
            <?php
                if (isset($_POST['submit'])) {
                    $nilai = $_POST['nilai'];

                    for ($i = 0; $i < $nilai; $i++) {
                        for ($j = $nilai - 1; $j > $i; $j--) {
                            echo '<span style="opacity:0">#</span>';
                        }
                        for ($j = 0; $j < 1 + ($i) * 2; $j++) {
                            echo '<span class="typing-char">*</span>';
                        }
                        echo '<br>';
                    }
                }
            ?>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const characters = document.querySelectorAll('.typing-char');
            characters.forEach((char, index) => {
                char.style.animationDelay = `${index * 0.05}s`;
            });
        });
    </script>
</body>
</html>
