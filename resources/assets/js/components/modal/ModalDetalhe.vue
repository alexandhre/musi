<template>
  <span>
   
    
      <a v-if="tipo == 'link'" href="#" v-bind:class="css || ''" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</a>
  

  
      <a v-if="tipo == 'link'" href="#" v-bind:class="css || ''" data-toggle="modal" v-bind:data-target="'#' + nome"></a>
   

  </span>

</template>

<script>
    export default {
      props:['tipo','nome','titulo','css','url']
    }
</script>
