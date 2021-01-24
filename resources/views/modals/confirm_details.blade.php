

<div class="modal is-active animate__animated animate__backInLeft animate__fast">
	<div class="modal-background"></div>
	<div class="modal-card">
		<!--header class="modal-card-head">
			<p class="modal-card-title"> Confirm Details</p>
			<button class="delete" aria-label="close" @click="confirm = false"></button>
		</header-->
		<section class="modal-card-body">


			<div class="card"> <!-- card tag open -->

				<div class="card-header bg-orange"> <!-- card header tag open -->
					<div class="card-header-title is-centered ">
						<span class="subtitle is-bold has-text-white"> Confirm Details </span>
					</div>
				</div> <!-- card header tag close -->


				<div class="card-content"> <!-- Card content tag open -->

					<div class="field">
						<label class="label"> Name  </label>						
						<div class="control has-icons-left has-icons-right">
							<input class="input" type="text" v-model="confirmDetail.name == null ? confirmDetail.name = {{ Auth::user()->name }} : confirmDetail.name" required>
							<span class="icon is-small is-left">
								<i class="fas fa-user fa-lg light-orange"></i>
							</span>
							<span class="icon is-small is-right">
								<i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.confirmDetail.name.$invalid"> </i>
								<i class="fas fa-check orange" v-else> </i>
							</span>
						</div>
					</div>

					<div class="field">
						<label class="label"> Phone </label>						
						<div class="control has-icons-left has-icons-right">
							<input class="input" type="tel" v-model="confirmDetail.phone == null ? confirmDetail.phone = {{ Auth::user()->phone }} : confirmDetail.phone" required>
							<span class="icon is-small is-left">
								<i class="fas fa-phone fa-lg light-orange"></i>
							</span>
							<span class="icon is-small is-right">
								<i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.confirmDetail.phone.$invalid"> </i>
								<i class="fas fa-check orange" v-else> </i>
							</span>
						</div>
					</div>

					<div class="field">
						<label class="label"> Address</label>
						<div class="control has-icons-left has-icons-right">

							<div class="is-hidden-mobile">
								<gmap-autocomplete class="input" value="{{-- Auth::user()->address --}}" required>
								</gmap-autocomplete>
							</div>

							<div class="is-hidden-desktop is-hidden-tablet">
								<gmap-autocomplete class="textarea" v-model="confirmDetail.address" required>
								</gmap-autocomplete>
							</div>

						</div>
					</div>

				</div> <!-- Card content tag close -->

			</div> <!-- card tag close -->


		</section>
		<footer class="modal-card-foot">
			<button class="button bg-orange has-text-white" @click="[confirm = false, payment = true]"> Next </button>
			<button class="button is-black" @click="confirm = false"> Cancel</button>
		</footer>
	</div>
</div>