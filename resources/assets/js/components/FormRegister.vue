<template>

	<div v-bind:class="classError">
		<div class="control">
			<input v-bind:placeholder="placeholder" v-bind:id="name" type="text" class="input is-medium" v-bind:name="name" v-bind:value="value" required autofocus>                            

			<slot></slot>
		</div>
	</div>

</template>

<script>
	export default {
		props:['classError','placeholder','id','name','value'],

	}
</script>