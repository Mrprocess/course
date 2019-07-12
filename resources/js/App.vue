<template>
    <div class="page-container">
        <md-app md-mode="reveal">
            <md-app-toolbar class="md-primary">
                <md-button class="md-icon-button" @click="menuVisible = !menuVisible">
                    <md-icon>menu</md-icon>
                </md-button>
                <span class="md-title">Zcas Registration</span>
            </md-app-toolbar>

            <md-app-drawer :md-active.sync="menuVisible">
                <md-toolbar class="md-transparent" md-elevation="0">Navigation</md-toolbar>

                <md-list>
                    <md-list-item to="/create">
                        <md-icon>send</md-icon>
                        <router-link to="/create" class="nav-link">Create course</router-link>

                    </md-list-item>

                    <md-list-item to="/posts">
                        <md-icon>send</md-icon>
                        <router-link to="/posts" class="nav-link">Courses</router-link>

                    </md-list-item>

                    <md-list-item to="/">
                        <md-icon>home</md-icon>
                        <router-link to="/" class="nav-link">Home</router-link>
                    </md-list-item>

                    <md-list-item>
                        <md-icon>error</md-icon>
                        <span class="md-list-item-text">Spam</span>
                    </md-list-item>
                </md-list>
            </md-app-drawer>

            <md-app-content>
                <router-view></router-view>
            </md-app-content>
        </md-app>
    </div>
</template>

<style lang="scss" scoped>
    .md-app {
        max-height: 720px;
        border: 1px solid rgba(#000, .12);
    }

    // Demo purposes only
    .md-drawer {
        width: 230px;
        max-width: calc(100vw - 125px);
    }
</style>

<script>
    export default {
        name: 'Reveal',
        data: () => ({
            menuVisible: false
        })
    }
</script>



