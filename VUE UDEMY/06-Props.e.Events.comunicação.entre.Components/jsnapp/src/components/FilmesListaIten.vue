<template>
    <li class="list-group-item">
        <span>{{titulo}} | {{ano}}</span>
        <button class="btn btn-success float-right">Editar</button>
    </li>
</template>

<script>
export default {
    props:{
        titulo:{
            type: String,
            required: true
        },
        ano:{
            type: Number,
            required: true
        }
    }
}
</script>