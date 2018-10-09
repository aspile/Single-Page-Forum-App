<template>
    <div>
    <toolbar></toolbar>
    <app-footer></app-footer>
    </div>
</template>

<script>

import toolbar from './Toolbar'
import AppFooter from './AppFooter'

    export default {
        mounted() {
            console.log('Component mounted.')
        },

        components: {
          toolbar,
          AppFooter
        }
    }
</script>
