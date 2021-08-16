<template>
    <div>
        <label>{{customLabel}}</label>
        <input 
            type="range"
            v-bind="$attrs"
            :value="value"
            @input="atualizar"    
            :class="estilo"
        >
    </div>
</template>


<script>
export default {
    inheritAttrs: false,
    props:{
        label: String,
        value: [Number, String],
        estilo: [String , Object, Array]
    },
    computed:{
        customLabel(){
            return `${this.label} (R$ ${this.value || this.$attrs.min})`
        }
    },
    methods: {
        atualizar(event){
            const valor = event.target.value
            this.$emit('input',valor)
        }
    },
}
</script>