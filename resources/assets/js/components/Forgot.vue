<template>
<div class="row">
    <div class="col s12 m8 offset-m2 l6 offset-l3">
        <form class="col s12" role="form" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Reset Password</span>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mail_outline</i>
                            <input id="email" type="email" name="email" required="" aria-required="true" class="validate" v-model="form.email">
                            <label for="email">E-mail Address</label>
                            <span class="error red-text" v-if="form.errors.has('email')" v-text="form.errors.get('email')"></span>
                        </div>
                    </div>
                </div>

                <div class="card-action center">
                    <button type="submit" 
                    	class="light-blue lighten-2 waves-effect waves-light btn-large"
                    	:disabled="form.errors.any()">Reset Password</button>
                    <p class="center forgot">
                        <a href="/login">Cancel</a>
                    </p>
                </div>
            </div>
        </form>
    </div>
</div>
</template>

<script>
export default {

    name: 'forgot',

    data() {
    	return {
			form: new Form({
	            email: '',
	        })
		}
    },

    methods: {
        onSubmit() {
            this.form.post('/password/email')
                .then(function(response) {
                	Notifier.run(response.message, response.level);
                });
        }
    }
};
</script>

<style lang="css" scoped>
</style>