<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Navbar from '@/Components/common/Navbar.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <AppLayout title="Inicio"></AppLayout>
    <div class="flex flex-col divide-y">
        <div class="h-96 text-center flex flex-col justify-center">
            <h1
                class="text-center mb-4 mt-6 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                ¿Cansado de pagar 30€ por guía cada vez que quieras ir a la roca?</h1>
            <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Nosotros
                también. Hemos decidido crear esta aplicación para añadir a la cooperación de la escalada.</p>

            <div class="w-auto">

            </div>

        </div>
        <div
            class="h-96 md:h-[64rem] text-center text-white flex flex-col justify-center bg-cover bg-center bg-no-repeat background bg-[url('https://www.desnivel.com/images/2019/04/img-20181017-wa0008.jpg')]">
            <h2 class="text-4xl font-extrabold dark:text-white mt-6">Más de 3000 rutas de escalada</h2>

            <p class="mb-6 text-lg font-normal text-white-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">La
                Pedriza, Albarracín, Zarzalejo, Tamajón, La Cabrera... Si prefieres búlder, vía deportiva o escalada
                tradicional, aquí lo tenemos.</p>
        </div>
        <div
            class="h-96 md:h-[64rem] text-center text-white flex flex-col justify-center bg-cover bg-center bg-no-repeat background bg-[url('https://blog.viladomat.com/wp-content/uploads/material-basico-escalada-del-2021-grupo-empezando-jpg.jpeg')]">
            <h2 class="text-4xl font-extrabold dark:text-white mt-6">¡Descubre las últimas ascensiones de tus amigos!
            </h2>

            <p class="mb-6 text-lg font-normal text-white-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Descubre
                consejos, croquis y vídeos para poder encadenar tus proyectos.</p>
        </div>
        <div class="h-96 text-center flex flex-col justify-center">
            <h2 class="text-4xl font-extrabold dark:text-white mt-6 mb-6">¿Te interesa?</h2>


            <div class="w-auto">
                <Link :href="route('register')"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        ¡Regístrate!
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </Link>
            </div>
        </div>


        <footer class="h-48 bg-gray-200 text-center flex flex-col justify-center">

            <p>&copy; 2024 Rodrigo García</p>
            <p>TFM EIP Fullstack Dev 4</p>
            <div class="flex flex-row justify-center">
                <a href="https://github.com/litoralWasTaken/climbers-best-friend">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Octicons-mark-github.svg" alt="GitHub" class="h-8">
                </a>

            </div>

        </footer>
    </div>


</template>

