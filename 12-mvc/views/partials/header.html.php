<!DOCTYPE html>
<html>
<head>
    <title>MVC</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    <div class="max-w-5xl mx-auto">
        <div class="flex justify-between items-center py-4">
            <h2 class="text-3xl">Logo</h2>
            <ul>
                <li>
                    <a class="px-4" href="<?= BASE_URL; ?>/">Accueil</a>
                    <a class="px-4" href="<?= BASE_URL; ?>/user">Liste des utilisateurs</a>
                </li>
            </ul>
        </div>
    </div>
