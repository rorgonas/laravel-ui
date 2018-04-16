Vue.component('mv-avatar', require('../../components/mv-avatar/index.vue'));

export default {
  name: 'mv-stars',
  components: {},
  props: ['persons'],
  data () {
      return {
          title: 'MV Girls'
      }
  },
  computed: {

  },
  mounted () {
    // Do something useful with the data in the template
    console.dir(this.persons);
  },
  methods: {

  }
}
