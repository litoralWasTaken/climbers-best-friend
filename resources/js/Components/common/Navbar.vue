<template>
    <nav>
        <button id="hamburger" @click="toggleNavbar" class="shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
        <ul v-if="dropdownOpen">
            <template v-for="linkObj in links">
                <li>
                    <Link :href="linkObj.link" :class="getCurrentLink == linkObj.link ? 'text-purple-700' : ''">
                    {{ linkObj.name }}
                    </Link>
                </li>
            </template>
        </ul>
    </nav>

</template>
<script>
import { Link } from '@inertiajs/vue3';
export default {
    computed: {
        getCurrentLink() {
            return '/' + this.$page.url.split('/').at(-1);
        }
    },
    components: {
        Link
    },

    data() {
        return {
            dropdownOpen: false,
            links: [
                { 'name': 'Inicio', 'link': '/dashboard' },
                { 'name': 'Mapa', 'link': '/map' },
                { 'name': 'Perfil', 'link': '/profile' },
            ]
        }
    },
    methods: {
        toggleNavbar() {
            this.dropdownOpen = !this.dropdownOpen
        },

        resize() {
            if (window.innerWidth >= 720) {
                this.dropdownOpen = true;
            }
        }
    },

    created() {
        if (window.innerWidth >= 720) {
            this.dropdownOpen = true;
        }
        window.addEventListener('resize', this.resize);
    }
}
</script>
<style>
nav {
    background-color: #fff;
    border-bottom: 1px solid #eaeaea;
    min-height: 3em;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
}

ul {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    padding: 1rem;
}

button {
    padding: 10px
}

@media screen and (min-width:720px) {

    #hamburger {
        display: none
    }

    nav {
        flex-direction: row;
    }

    ul {
        flex-direction: row;
        justify-content: flex-start;
    }
    li {
        padding-right: 2em
    }

}


</style>
