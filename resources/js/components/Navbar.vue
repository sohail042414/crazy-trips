<template>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" v-bind:class="{ 'header-inner-pages':!homepage  }">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto">
          <router-link :to="{ name: user ? 'home' : 'welcome' }" class="navbar-brand">
            {{ appName }}
          </router-link>
        </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="themes/arsha/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <router-link :to="{ name:'home'}" class="nav-link" v-bind:class="{ 'active':($route.name=='home' || $route.name=='welcome')  }">
              Home
            </router-link>  
          </li>
          <li>
            <router-link :to="{ name:'about'}" class="nav-link" v-bind:class="{ 'active':($route.name=='about')  }">
              About
            </router-link>         
          </li>
          <li>
            <router-link :to="{ name:'services'}" class="nav-link" v-bind:class="{ 'active':($route.name=='services')  }">
              Services
            </router-link>  
          </li>
          <li>
            <router-link :to="{ name:'portfolio'}" class="nav-link" v-bind:class="{ 'active':($route.name=='portfolio')  }">
              Portfolio
            </router-link>  
          </li>
          <li>
            <router-link :to="{ name:'team'}" class="nav-link" v-bind:class="{ 'active':($route.name=='team')  }">
              Team
            </router-link>  
          </li>
          <li>
            <router-link :to="{ name:'contact-us'}" class="nav-link" v-bind:class="{ 'active':($route.name=='contact-us')  }">
              Contact Us
            </router-link>  
          </li>

          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
</template>

<script>
import { mapGetters } from 'vuex'
import LocaleDropdown from './LocaleDropdown'

export default {
  name: 'Navbar',
  components: {
    LocaleDropdown
  },

  data: () => ({
    appName: window.config.appName,
    homepage:false,
  }),

  computed: mapGetters({
    user: 'auth/user'
  }),
  watch: {
    '$route' () {
      if (this.$route.path === '/') {
        this.homepage = true;
      }else{
        this.homepage = false;
      }
    }
  },
  methods: {
    async logout () {
      // Log out the user.
      await this.$store.dispatch('auth/logout')

      // Redirect to login.
      this.$router.push({ name: 'login' })
    }
  }
}
</script>