<template>
	<div id="editor">
		<textarea 
			class="col s6 grey lighten-3" 
			:name="this.name" 
			:value="this.output" 
			@input="update" 
			rows="4">
		</textarea>
		<label :for="this.name">{{ this.name }} <small class="red-text">( use GitHub flavored markdown for your content )</small></label>
		<div class="col s6 preview white" v-html="compiledMarkdown"></div>
	</div>
</template>

<script>

import lodash from 'lodash';
import marked from 'marked';

export default {

	props: {
		name: {
			type: String,
			required: true
		},
		input: {
			type: String,
			required: false
		}
	},

	data () {
		return {
			output: this.input ? this.input : 'Add some content using Markdown ...'
		};
	},

	computed: {
		compiledMarkdown: function () {
			return marked(this.output, { sanitize: true })
		}
	},

	methods: {
		update: _.debounce(function (e) {
			this.output = e.target.value
		}, 300)
	}
};
</script>
