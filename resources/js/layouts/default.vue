<template>
  <div>
    <navbar />
    <main id="main">
      <child />
    </main>
    <bottom />
  </div>
</template>

<script>
import Navbar from '~/components/Navbar'
import Bottom from '~/components/Bottom'

export default {
  name: 'MainLayout',
  components: {
    Navbar,
    Bottom
  },
  methods :{

  }
}
</script>
