<template>
  <div class="page-wrapper">    
    <TeamSection />
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import TeamSection from '~/sections/TeamSection'

export default {
  layout: 'default',
  components:{
    TeamSection
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

