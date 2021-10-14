<template>
  <div class="page-wrapper">    
    <ServicesSection />
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import ServicesSection from '~/sections/ServicesSection'

export default {
  layout: 'default',
  components: {
    ServicesSection
  },
  metaInfo () {
    return { title: this.$t('home') }
  },

  data: () => ({
    title: window.config.appName
  }),

  computed: mapGetters({
    authenticated: 'auth/check'
  })
}
</script>

