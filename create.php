<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="./assets/images/logo.png" type="./assets/images/logo.png">
    <title>Criar Post</title>
</head>

<body class="bg-[#141414]">
    <header class="py-6 px-12 mx-auto flex justify-between items-center bg-[#1A1A1A]">
        <a href="/"><img src="./assets/images/logo.png" alt="Logo Image"></a>

        <a href="create.php" class="px-3 py-2.5 bg-[#FFD11A] rounded-lg font-medium hover:bg-[#C8A51D]">Criar</a>
    </header>

    <main class="max-w-[1240px] mx-auto mt-6">
        <section class="grid grid-cols-1 xl:grid-cols-2">
            <div class="py-[160px] border-r border-[#262626]">
                <img src=" ./assets/images/logo.png" alt="Logo Image">
                <h2 class="text-white font-medium text-[56px]">Crie posts por aqui</h2>
            </div>

            <form class="flex flex-col p-5" action="create-post.php" method="POST">
                <label for="title" class="text-white font-medium text-[18px] mb-4 mt-4">Título</label>
                <input type="text" name="title" id="title" class="p-5 bg-[#1A1A1A] rounded-lg text-white"
                    placeholder="Digite o titulo do post...">

                <label for="image" class="text-white font-medium text-[18px] mb-4 mt-4">Link da Imagem</label>
                <input type="text" name="image" id="image" class="p-5 bg-[#1A1A1A] rounded-lg text-white"
                    placeholder="Digite o link da imagem do post...">

                <label for="description" class="text-white font-medium text-[18px] mb-4 mt-4">Descrição</label>
                <input type="text" name="description" id="description" class="p-5 bg-[#1A1A1A] rounded-lg text-white"
                    placeholder="Digite a descrição do post...">

                <button type="submit"
                    class="px-5 py-2 bg-[#FFD11A] rounded-lg self-end mt-5 font-medium hover:bg-[#C8A51D]">Criar</button>
            </form>
        </section>

        <footer
            class="max-w-[1240px] mx-auto flex justify-between items-center text-[#666666] text-[14px] font-normal py-6">
            <h4>Created by: @israelcruzz</h4>
            <p>@2024</p>
        </footer>
    </main>
</body>

</html>