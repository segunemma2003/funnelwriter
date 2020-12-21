<template>
    <header>
        <nav class="top__nav" id="top__nav">
            <ul>
                <li>
                    <a href="#" class="logo">
                        <img :src="images.logo" alt="logo">
                    </a>
                </li>
                <li class="middle">
                    <div class="search">
                        <img :src="images.search" alt="search">
                        <form>
                            <input type="search" id="search" placeholder="Find your scripts & copies" autocomplete="">
                        </form>
                    </div>
                    <a href="#">Upgrade your account</a>
                </li>
                <li class="notifications__profile">
                    <a href="#">
                        <img :src="images.notifications" alt="notifications">
                    </a>
                    <a href="#">
                        <div class="profile">
                            <img :src="images.profile" alt="profile">
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="page__header__breadcrumb">
            <div class="generate">
                <h2>Welcome, Jethro</h2>
                <p>Header description goes here</p>
            </div>
            <div class="create__new__project">
                <button>
                    <i class="fas fa-plus"></i>
                    Create a new project
                </button>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    data(){
        return {
            images:{
                logo:"/publics/images/logo.svg",
                search:"publics/images/Search.svg",
                notifications:"publics/images/notifications.svg",
                profile:"/publics/images/profile.svg"
            }
        }
    },
    mounted(){
        console.log("header")
    }
}
</script>

<style>

</style>