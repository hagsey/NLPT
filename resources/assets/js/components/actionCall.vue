<style>
	.actionCall .program-header{
		text-align: center;
	}

	.actionCall .message {
		max-width: 238px;
	}
</style>

<template>
	<Modalform v-show="show" size="md" class="actionCall">
		<div slot="form">
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="row">
							<div class="program-header">
								<h4 class="verify-header">{{title}} Inquiry</h4>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<p>Fill out the following form to get the ball rolling to join {{title}}. </p>

						<div class="form-group">
							<label for="name">Name</label>
							<input id="name" type="text" v-model="form.name" placeholder="name" class="form-control form-inline">
							<template v-if="errors.name">
								{{errors.name[0]}}
							</template>
						</div>
						
						<div class="form-group">
							<label for="phone">Phone number</label>
							<input id="phone" type="text" v-model="form.phone" placeholder="###-###-####" class="form-control form-inline">
							<template v-if="errors.phone">
								{{errors.phone[0]}}
							</template>
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<input id="email" type="text" v-model="form.email" placeholder="you@email.com" class="form-control form-inline">
							<template v-if="errors.email">
								{{errors.email[0]}}
							</template>
						</div>

						<div class="form-group">
							<label for="message">Message.</label>
							<textarea class="form-control form-inline message" rows="5" id="message" v-model="form.message" placeholder="Tell us some background information about yourself. How often can you train? What sports did you play?" ></textarea>
							<template v-if="errors.message">
								{{errors.message[0]}}
							</template>
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-primary modal-form-button"
							@click="sendEmail"
							:disabled="working || justUpdated || errored"
							:class="{ updated: justUpdated , errored: errored}" {{-- add updated class if just updated --}}
							style="position: relative;"
							>

								<span v-show="working" style="position: absolute;">
									Sending
								</span>
								<span v-show="justUpdated" style="position: absolute;">
									Mail Sent
								</span>
								<span v-show="errored" style="position: absolute">
									Error!
								</span>
								<span :style="{visibility: justUpdated || errored || working ? 'hidden' : 'visible'}">
									Send Email
								</span>

							</button>
					</div>
				</div>
			</div>
		</div>
	</Modalform>
</template>

<script>
	import Modalform from './modalForm.vue';

	var Vue = require('vue');
	Vue.use(require('vue-resource'));

	var checkEmail = function (form, title) {
		return new Promise(function (resolve, reject) {
			console.log("here 2");
			Vue.http.post('/email', {title: title, name: form.name, phone: form.phone, email: form.email, message: form.message}, function (data, status, request) {
				console.log("here good 3");
				resolve(data.response);
			}).error(function (data, status, request) {
		          // handle error
		          console.log(data);
		          reject(data);
		      });
		});
	};

	module.exports = {
		data: function () {
			return {
				form: {
					name: "",
					phone: "",
					email: "",
					message: "",
				},
				errors: '',
				working: false,
				justUpdated: false,
				errored: false,
			}
		},
		props: {
			show: {
				type: Boolean,
				required: true,
				twoWay: true    
			},
			title: '',
		},
		components:{
			Modalform: Modalform,			
		},

		methods:{
			clearErrors: function () {
				this.errors = '';
			},
			clearForm: function () {
				this.working = false;
				this.justUpdated = false;
				this.errored = false;
				this.clearErrors();
				this.form.name = '';
				this.form.phone = '';
				this.form.email = '';
				this.form.message = '';
			},

			
			sendEmail: function () {
				this.working = true;
				console.log("here");
				checkEmail(this.form, this.title).then((response) => {
					this.working = false;
					
					this.justUpdated = true;

					setTimeout(function () {
						this.justUpdated = false;
						this.show = false;
						this.clearForm();
					}.bind(this), 1000);
					

				}).catch((errors) => {
					console.log(errors);
					this.working = false;
					this.errored = true;
					setTimeout(function () {
						this.errored = false;
					}.bind(this), 1000);
					this.errors = errors;
				});
			},
		},
	}
</script>