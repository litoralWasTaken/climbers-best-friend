<script setup>
import { ref, computed } from 'vue';
import { useForm } from '@inertiajs/vue3';
import ActionMessage from '@/Components/ActionMessage.vue';
import ActionSection from '@/Components/ActionSection.vue';
import DialogModal from '@/Components/DialogModal.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

defineProps({
    sessions: Array,
    currentSessionId: String,
});


const confirmingLogout = ref(false);
const passwordInput = ref(null);

const form = useForm({
    password: '',
});

const confirmLogout = () => {
    confirmingLogout.value = true;

    setTimeout(() => passwordInput.value.focus(), 250);
};

const logoutOtherBrowserSessions = () => {
    form.delete(route('other-browser-sessions.destroy'), {
        preserveScroll: true,
        onSuccess: () => closeModal(),
        onError: () => passwordInput.value.focus(),
        onFinish: () => form.reset(),
    });
};

const closeModal = () => {
    confirmingLogout.value = false;

    form.reset();
};

const isDesktop = (userAgent) => {

    const mobileRegex = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i;

    return !mobileRegex.test(userAgent);
}

const getPlatformAndBrowser = (userAgent) => {
    const platformRegex = /(Windows|Macintosh|Linux|Android|iOS|iPhone|iPad)/i;
    const browserRegex = /(Chrome|Firefox|Safari|Opera|Edg|Edge|MSIE)/i;

    let platform = userAgent.match(platformRegex);
    let browser = userAgent.match(browserRegex);

    if (platform && browser) {
        return platform[0] + ' - ' + browser[0];
    }
}

</script>

<template>
    <ActionSection>
        <template #title>
            Sesiones de Navegador
        </template>

        <template #description>
            Gestiona y desconéctese de sus sesiones activas en otros navegadores y dispositivos.
        </template>

        <template #content>
            <div class="max-w-xl text-sm text-gray-600 dark:text-gray-400">
                Si es necesario, puede desconectarse de todas sus otras sesiones a lo largo de todos sus dispositivos.
                Algunas de sus sesiones recientes están listadas abajo; esta lista puede que no sea exhaustiva. Si
                siente que su cuenta ha sido comprometida, debería actualizar su contraseña.
            </div>

            <!-- Other Browser Sessions -->
            <div v-if="sessions.length > 0" class="mt-5 space-y-6">
                <div v-for="(session, i) in sessions" :key="i" class="flex items-center">
                    <div>
                        <svg v-if="isDesktop(session.user_agent)" class="w-8 h-8 text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                        </svg>

                        <svg v-else class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
                    </div>

                    <div class="ms-3">
                        <div class="text-sm text-gray-600 dark:text-gray-400">
                            {{ getPlatformAndBrowser(session.user_agent) }}
                        </div>
                        <div>
                            <div class="text-xs text-gray-500">
                                {{ session.ip_address }},

                                <span v-if="session.id === currentSessionId" class="text-green-500 font-semibold">Éste
                                    dispositivo</span>
                                <span v-else>Última vez activo {{ new Date(session.last_activity).toLocaleDateString('es-ES') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center mt-5">
                <PrimaryButton @click="confirmLogout">
                    Desconectar de otras sesiones
                </PrimaryButton>

                <ActionMessage :on="form.recentlySuccessful" class="ms-3">
                    Hecho.
                </ActionMessage>
            </div>

            <!-- Log Out Other Devices Confirmation Modal -->
            <DialogModal :show="confirmingLogout" @close="closeModal">
                <template #title>
                    Desconectar otras sesiones de navegadores
                </template>

                <template #content>
                    Por favor introduzca su contraseña para confirmar que le gustaría desconectarse de sus otras
                    sesiones de todos sus dispositivos.

                    <div class="mt-4">
                        <TextInput ref="passwordInput" v-model="form.password" type="password" class="mt-1 block w-3/4"
                            placeholder="Password" autocomplete="current-password"
                            @keyup.enter="logoutOtherBrowserSessions" />

                        <InputError :message="form.errors.password" class="mt-2" />
                    </div>
                </template>

                <template #footer>
                    <SecondaryButton @click="closeModal">
                        Cancelar
                    </SecondaryButton>

                    <PrimaryButton class="ms-3" :class="{ 'opacity-25': form.processing }" :disabled="form.processing"
                        @click="logoutOtherBrowserSessions">
                        Desconectar otras sesiones de navegadores
                    </PrimaryButton>
                </template>
            </DialogModal>
        </template>
    </ActionSection>
</template>
