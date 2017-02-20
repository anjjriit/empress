<template>
	<div id="editor">
		<textarea 
			class="col s6 grey lighten-3" 
			:name="this.name" 
			:value="this.props.input" 
			@input="update" 
			rows="4">
		</textarea>
		<label for="this.name">this.name</label>
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
			required: false,
			default: 'Add some content using Markdown ...'
		}
	},

	data () {
		return {
			output: ''
		};
	},

	computed: {
		compiledMarkdown: function () {
			return marked(this.props.input, { sanitize: true })
		}
	},

	methods: {
		update: _.debounce(function (e) {
			this.props.input = e.target.value
		}, 300)
	}
};
</script>
