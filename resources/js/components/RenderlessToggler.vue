<script>
  export default {
    data() {
      return {
        hidden: false,
      };
    },
    methods: {
      toggle() {
        this.hidden = !this.hidden;
      },
    },
    render() {
      return this.$scopedSlots.default({
        hidden: this.hidden,
        toggle: this.toggle,
      });
    },
  };
</script>
