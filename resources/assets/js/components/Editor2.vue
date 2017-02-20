<template>
  <div class="publish-box">
      <Mueditor
        :sync-content="syncPreview"
        :default-content="defaultContent"
        local-storage-name="mue"
        >
      </Mueditor>
      <div class="publish-preview" v-html="html"></div>
    </div>
</template>
 
<script>

import Mueditor from 'mueditor';

export default {

  name: 'Editor',

  components: {
    Mueditor
  },
  data: function () {
    return {
      defaultContent: 'Mueditor demo',
      html: ''
    }
  },
  methods: {
    syncPreview: function (data) {
      this.html = data.html
    }
  }
}
</script>
 
<style>
.publish-box {
  width: 40rem;
  margin: 0 auto;
}
.publish-preview {
  font-family: monospace, monospace;
}
@media all and (max-width: 768px) {
  .publish-box {
    width: 100%;
  }
}
</style>