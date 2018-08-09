<template>


	<div class="field has-text-left  has-text-dark-blue has-text-weight-semibold">
		<label class="checkbox ">
			<input type="checkbox">
			Aceito o <modaldetalhe v-if="detalhe && modal" v-bind:url="detalhe" tipo="link" nome="detalhe" titulo=" Termo de uso." css=""></modaldetalhe></a> 
			
		</label>
	</div>


</template>

<script>
	export default {
		props:['detalhe','modal']

	}
</script>
