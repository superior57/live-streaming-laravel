// App.vue

<template>
    <div class="">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <router-link to="/" class="nav-link">Home page</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/create" class="nav-link">New article</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/posts" class="nav-link">All articles</router-link>
                    </li>
                </ul>
            </div>
        </nav>
        <br/>

        <router-view></router-view>
    </div>
</template>

<script>
    export default {}
</script>