<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body class="bg-yellow-400">
    <nav class="p-5 bg-white shadow md:flex md:item-center
    md:justify-between">
        <div class="flex justify-between items-center">
            <a class="text-2xl font-[Popp] cursor-pointer" href="./index.php">
                <img src="https://images.nvidia.com/geforce-campaigns/cyberpunk-2077/cp2077-4-yellow-logo-en.png" class="h-10"
                alt="">
            </a>
            <span class="text-3x1 cursor-pointer md:hidden mx-2 block">
                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
            </span>
        </div>
        <ul class="md:flex md:item-center z-[-1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-0 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
            <li class="mx-6 my-6 md:my-0">
                <a href="./index.php" class="text-x1 hover:text-red-500
                duration-500">Home</a>
            </li>
            <li class="mx-6 my-6 md:my-0">
                <a href="./Story.php" class="text-x1 hover:text-red-500
                duration-500">Story</a>
            </li>
            <li class="mx-6 my-6 md:my-0">
                <a href="./Characters.php" class="text-x1 hover:text-red-500
                duration-500">Characters</a>
            </li>
            <li class="mx-6 my-6 md:my-0">
                <a href="./SYSTEM.php" class="text-x1 hover:text-red-500
                duration-500">SYSTEM</a>
            </li>
            <li class="mx-6 my-6 md:my-0">
                <a href="./Media.php" class="text-x1 hover:text-red-500
                duration-500">Media</a>
        </ul>
    </nav>
    <div class="bg-no-repeat bg-fixed bg-auto bg-center" style="background-image: url(https://images5.alphacoders.com/927/927025.png)">
        <div class="CyberPunk flex justify-center items-center px-10 py-24 pt-25">
            <header><iframe class="flex justify-center items-center rounded-lg gap-10 border-4 border-b-white" width="1440" height="600" src="https://www.youtube.com/embed/PbVKBoDuhZ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </header>
        </div>
    </div>
    <div class="hover:bg-black duration-500 flex justify-center items-center py-10">
        <a href="https://store.steampowered.com/app/1091500/Cyberpunk_2077/"><img class="object-cover cursor-pointer focus:cursor-auto" src="https://sv1.picz.in.th/images/2022/12/09/GVGGf2.png" alt=""></a>
    </div>
                
    <script>
        function Menu(e) {
            let list = document.querySelector('ul');
            e.name === 'menu' ? (e.name = "close", list.classList.
            add('top-[80px]'), list.classList.add('opacity-100')) :
            (e.name = "menu", list.classList.remove('top-[80px]'), 
            list.classList.remove('opcity-100'))
        }
    </script>
</body>
</html>