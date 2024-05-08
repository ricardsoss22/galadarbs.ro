<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src=""></script>
    <title>Document</title>
</head>
<body>
<div class="flex justify-center items-center h-screen bg-zinc-100 dark:bg-zinc-800">
    <div class="flex flex-col md:flex-row max-w-4xl p-6 bg-white white:bg-zinc-900 shadow-lg rounded-lg">
        <div class="w-full md:w-1/2 flex justify-center md:justify-start items-center mb-8 md:mb-0">
            <img src="https://cdn.discordapp.com/attachments/1015353058693218465/1234776612139040778/image.png?ex=6631f6d5&is=6630a555&hm=75be8bf0dc5d8288437689d0dd23633e9e7dc4790e83c85ab9bcb3e4abe1c09a&" alt="Profile Image" class="w-full h-auto object-cover rounded-lg" />
        </div>
        <div class="w-full md:w-1/2 flex flex-col justify-center md:items-start p-6">
            <p class="text-zinc-700 white:text-zinc-300 text-lg">
                Mani sauc <b>Ričards</b>, iesauka: Ošiņš esmu audzēknis
                <b>Vidzemes Tehneloģiju un dizaina tehnikumā</b> nu jau otrajā kursā, pats nāku no
                <b>"Sigūldas Novada"</b> dzīvi saskatu ar prieku un harizmu, cīnos par jauniem mērķiem,kā
                jau minēju, aizraujos vairāk ar <b>web un praktisko dizainu</b>,dzīvē ir daudz mērķi, ko arī
                sasniegšu,jo esmu pārliecības pilns!
            </p>
        </div>
    </div>
    <ul class="flex flex-col gap-5 mt-5 ml-right">
        <li>
            <a
                href="/"
                class="bg-black hover:bg-zinc-800 dark:bg-zinc-800 dark:hover:bg-zinc-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out"
            >Sākums</a>
        </li>
        <li>
            <a
                href="/about"
                class="bg-black hover:bg-zinc-800 dark:bg-zinc-800 dark:hover:bg-zinc-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out"
            >Par Mani</a>
        </li>
        <li>
            <a
                href="/projects"
                class="bg-black hover:bg-zinc-800 dark:bg-zinc-800 dark:hover:bg-zinc-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out"
            >Projekti</a>
        </li>
        <li>
            <a
                href="/contacts"
                class="bg-black hover:bg-zinc-800 dark:bg-zinc-800 dark:hover:bg-zinc-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out"
            >Saziņas veidi</a>
        </li>
        <li>
            <a
                href="/contacts"
                class="bg-black hover:bg-zinc-800 dark:bg-zinc-800 dark:hover:bg-zinc-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out"
            >Jautājumi</a>
        </li>
    </ul>
</div>
</body>
</html>
