<template>

</template>

<script>
export default {

  name: 'login',

  data: {
        form: new Form({
            name: '',
            description: ''
        })
    },

    methods: {
        onSubmit() {
            this.form.post('/projects')
                .then(response => alert('Wahoo!'));
        }
    }
};
</script>
