<template>

  <div class="modal fade" v-bind:id="nome" tabindex="-1" role="dialog">
   <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">{{titulo}}</p>
                <button class="delete" aria-label="close" data-dismiss="modal"></button>
            </header>
            <section class="modal-card-body">
                <!-- Content ... -->
            </section>
            <footer class="modal-card-foot">
                <button class="button is-success">Salvar</button>
                <button class="button" data-dismiss="modal">Sair</button>
            </footer>
        </div>
  </div>
</template>

<script>
  export default {
    props:['nome','titulo']

  }
</script>
