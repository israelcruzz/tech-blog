<?php
    $localhost = "localhost";
    $user = "root";
    $pass = "usbw";
    $bdname = "blgames";

    $db = new mysqli($localhost, $user, $pass, $bdname);

    if($db->connect_error){
        die("Database Error: ". $db->connect_error);
    }

    $sql = "SELECT * FROM posts";

    $resultdates = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="./assets/images/logo.png" type="./assets/images/logo.png">
    <title>Home</title>
</head>

<body class="bg-[#141414]">
    <header class="py-6 px-12 mx-auto flex justify-between items-center bg-[#1A1A1A]">
        <a href=""><img src="./assets/images/logo.png" alt="Logo Image"></a>

        <a href="create.php" class="px-3 py-2.5 bg-[#FFD11A] rounded-lg font-medium hover:bg-[#C8A51D]">Criar</a>
    </header>

    <main>
        <section class="max-w-[1240px] mx-auto mt-6">
            <h1 class="text-[55px] font-medium text-white">Os melhores posts sobre games/tecnologias</h1>
            <div class="flex gap-6">
                <h1 class="text-[55px] font-medium text-white w-full">somente aqui</h1>
                <span class="text-[16px] font-normal text-[#98989A]">Dive deep into the AI universe with our collection
                    of insightful podcasts. Explore the latest
                    trends, breakthroughs, and discussions on artificial intelligence. Whether you're an enthusiast or a
                    professional, our AI podcasts offer a gateway to knowledge and innovation.</span>
            </div>
        </section>

        <section class="p-[80px] bg-[#1A1A1A] mt-6">
            <h1 class="text-white text-[32px] font-medium">Últimos Posts</h1>
        </section>

        <section class="max-w-[1240px] mx-auto mt-6 grid grid-cols-1 xl:grid-cols-3 gap-6 mb-6">
            <?php  
                if($resultdates->num_rows > 0){
                    while($row = $resultdates->fetch_assoc()){
                        echo "<div class='flex flex-col gap-4 min-h-[380px] justify-between'>";
                        echo "<img src='" . $row['image'] . "' width='382' height='244' alt='' class='w-full'>";
                        echo "<h3 class='text-white font-semibold text-[18px]'>" . $row['title'] . "</h3>";
                        echo "<p class='text-[#98989A] font-normal text-[16px]'>" . $row['description'] . "</p>";
                        echo "<button
                        class='flex justify-center items-center px-5 py-[14px] border border-[#262626] rounded-lg cursor-pointer text-white hover:bg-[#FFD11A] hover:text-black font-medium'>Acessar</button>";
                        echo "</div>";
                    }
                } else {
                    echo "<h1 class='text-white font-medium'>Não existem posts</h1>";
                }
            ?>
        </section>

        <footer class="max-w-[1240px] mx-auto flex justify-between items-center text-[#666666] text-[14px] font-normal py-6">
            <h4>Created by: @israelcruzz</h4>
            <p>@2024</p>
        </footer>
    </main>
</body>

</html>