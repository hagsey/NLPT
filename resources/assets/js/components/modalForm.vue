<style>
	.modal-mask {
		position: fixed;
		z-index: 9998;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(0, 0, 0, .5);
		display: table;
		transition: opacity .3s ease;
	}

	.modal-wrapper {
		display: table-cell;
		vertical-align: middle;
	}

	.modal-container {
		width: 300px;
		overflow-y: auto;
		max-height: 100%;
		height: 100%;
		margin: 0px auto;
		padding: 20px 30px 0px;
		background-color: #fff;
		border-radius: 2px;
		box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
		transition: all .3s ease;
		font-family: Helvetica, Arial, sans-serif;
	}
	.modal-container-lg {
		width: 800px;
	}

	.modal-container-bg {
		width: 600px;
	}

	.modal-form-button {
		float: right;
		transition: all 1.0s ease;
	}

	.modal-form-button.updated {
		background-color: green;
		color: white;
	}

	.modal-form-button.errored {
		background-color: red;
		color: white;
	}

	.modal-form-close-button {
	    float:right;
	    display:inline-block;
	    padding:0px 0px;
	    margin: -20px -30px;
	    border-radius: 2px;
	    
	}

	.modal-form-close-button:hover {
		color:#fff;
	}

	/*
	 * the following styles are auto-applied to elements with
	 * v-transition="modal" when their visiblity is toggled
	 * by Vue.js.
	 *
	 * You can easily play with the modal transition by editing
	 * these styles.
	 */

	 .modal-enter, .modal-leave {
	 	opacity: 0;
	 }

	 .modal-enter .modal-container,
	 .modal-leave .modal-container {
	 	-webkit-transform: scale(1.1);
	 	transform: scale(1.1);
	 }
</style>

<template>
	<div class="modal-mask" transition="modal">
		<div class="modal-wrapper" @click=close>
			<div class="modal-container" :class="sizeClass" @click.stop>
				<button class='btn btn-danger modal-form-close-button' @click=close><i class="fa fa-times"></i>
</button>
				<slot name="form">
					default Form 
				</slot>
			</div>
		</div>
	</div>
</template>

<script>
	module.exports = {
		props: {
			size: { default: 'md' }
		},
		computed: {
			sizeClass: function () {
				if (this.size === 'md') {
					return '';
				}

				return 'modal-container-' + this.size;
			}
		},
		methods: {
			close: function close() {
				this.$parent.clearForm();
				this.$parent.show=false;
			},
		}
	}
</script>