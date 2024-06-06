<?php
$localhost = "localhost";
$user = "root";
$pass = "usbw";
$bdname = "blgames";

$db = new mysqli($localhost, $user, $pass, $bdname);

if ($db->connect_error) {
    die("Database Error: " . $db->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="./assets/images/logo.png" type="./assets/images/logo.png">
    <title>Post</title>
</head>

<body class="bg-[#141414]">
    <header class="py-6 px-12 mx-auto flex justify-between items-center bg-[#1A1A1A]">
        <a href="/"><img src="./assets/images/logo.png" alt="Logo Image"></a>

        <a href="create.php" class="px-3 py-2.5 bg-[#FFD11A] rounded-lg font-medium hover:bg-[#C8A51D]">Criar</a>
    </header>

    <main>
        <section class="max-w-[1240px] mx-auto mt-6 flex flex-col gap-6 mb-20">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                $sql = "SELECT * FROM posts WHERE id = $id";

                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();

                    echo "<img src='" . $row['image'] . "' width='382' height='244' alt='' class='w-full h-[300px] object-cover rounded-lg'>";
                    echo "<div class='flex flex-col gap-3'>";
                    echo "<h1 class='text-white font-medium text-xl'>" . $row['title'] . "</h1>";
                    echo "<p class='text-[#98989A] font-normal text-[16px]'>" . $row['description'] . "</p>";
                    echo "</div>";
                }
            } else {
                header("Location: 404.php");
            }
            ?>
        </section>

        <footer
            class="max-w-[1240px] mx-auto flex justify-between items-center text-[#666666] text-[14px] font-normal py-6">
            <h4>Created by: @israelcruzz</h4>
            <p>@2024</p>
        </footer>
    </main>
</body>

</html>