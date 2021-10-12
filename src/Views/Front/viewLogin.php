<?php $title = 'Login System to test'; ?>
<?php $ressourceCSS = 'src/Assets/ressources/css/login.css'; ?>


<?php ob_start(); ?>

<section class="min-h-screen flex items-stretch text-white ">
    <div class="lg:flex w-1/2 hidden bg-gray-500 bg-no-repeat bg-cover relative items-center" style="background-image: url(https://images.unsplash.com/photo-1599837565318-67429bde7162?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80);">
        <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        <div class="mx-auto w-10/12 px-10 py-10 my-10 z-10 bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-60 border border-gray-900 rounded-xl">
            <h1 class="text-5xl font-bold text-left tracking-wide">Tests & Qualité</h1>
            <p class="text-3xl my-4">"N'oubliez pas que vous codez pour un psychopathe qui connaît votre adresse"</p>
        </div>
    </div>
    <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0" style="background-color: #161616;">
        <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center " style="background-image: url(https://images.unsplash.com/photo-1599837565318-67429bde7162?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80);">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        </div>
        <div class="lg:w-full w-10/12 py-6 z-20 bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-60 rounded-xl">
            <h1 class="my-6 text-4xl flex mx-auto justify-center content-center leading-relaxed">
                <img src="/src/Assets/svg/web-development-blue.svg" alt="Logo Web Dev" class="w-14 mr-2">
                Bienvenue
            </h1>
            <p class="text-gray-100">
                Connectez-vous
            </p>
            <form class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto" action="./index.php?action=checkLogIn" id="getForm" method="POST" accept-charset="UTF-8">
                <div class="pb-2 pt-4">
                    <input type="email" name="emailUser" id="inputEmail" placeholder="Email" autocomplete="username" required="" autofocus="" class="block w-full p-4 text-lg rounded-sm bg-black">
                </div>
                <div class="pb-2 pt-4">
                    <input type="password" class="block w-full p-4 text-lg rounded-sm bg-black" type="password" name="pwdUser" id="inputPassword" autocomplete="current-password" placeholder="Mot de passe" required="">
                </div>
                <div class="px-4 pb-2 pt-4">
                    <button type="submit" name="submit_logIn" value="connexion" class="uppercase block w-3/4 mx-auto p-2 text-md rounded-md bg-blue-700 hover:bg-blue-800 focus:outline-none">Connectez-vous</button>
                </div>
                <div class="px-4 pb-2 pt-4">
                    <?php if(isset($errors)){echo('<div class="block w-3/4 mx-auto p-2 text-sm text-red-900 rounded-md bg-red-100">Email ou Mot de passe invalide</div>');} ?>
                </div>
            </form>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('src/Views/template.php'); ?>