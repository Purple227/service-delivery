

@extends('layouts.app')

@section('content')

<div class="container"> <!-- Container tag open -->

	<div class="content"> <!-- Content tag open -->

		<p class="title has-text-black is-family-monospace">
			The value that hold us 
			<br>
			true and to acount. 
		</p>



<div class="columns"> <!-- Columns wrapper tag open -->

  <div class="column"> <!-- First column tag open -->

    <div class="content" style="padding: 15px;">
    	<p class="subtitle is-bold is-marginless"> <i class="fas fa-smile light-green"> Simplicity </i>
    	<p class="has-text-black fa">
    		Delivery being made beautifully simple are at the heart of everything we do. 
    	</p>
    </p>
    </div>

  </div>  <!-- First column tag close -->

  <div class="column">


    <div class="content" style="padding: 15px;">
      <p class="subtitle is-bold is-marginless"> <i class="fas fa-heart light-green"> Social Good </i>
      <p class="has-text-black fa">
        We believe in making things better for everyone, even if just by a little bit!
      </p>
    </p>
    </div>

  </div>

  <div class="column">


    <div class="content" style="padding: 15px;">
      <p class="subtitle is-bold is-marginless"> <i class="fas fa-shield-alt light-green"> Trust </i>
      <p class="has-text-black fa">
        We work on creating trust which can only be nurtured through authencity and trasparency.
      </p>
    </p>
    </div>

  </div>



</div> <!-- Columns wrapper tag close -->



<div class="notification has-text-black" style="padding: 30px;"> <!-- Notification 
  tag open -->

<div class="columns" style="margin-top: 15px;"> <!-- Columns wrapper tag open -->

  <div class="column">
    <div class="content">
      <p class="subtitle has-text-black is-bold is-marginless is-family-monospace">
        Ready for a simple future?
      <p class="subtitle green is-bold is-family-monospace">
        Try us by placing an order!</p>
      </p>


    </div>
  </div>


  <div class="column">
    <a class="button is-primary is-bold is-pulled-right is-medium"> <span class="fa"> Place Order </span> </a>
  </div>

</div> <!-- Columns wrapper tag close -->


</div>  <!-- Notification tag close -->



	</div> <!-- Content tag close -->
	
</div> <!-- Container tag close -->


@endsection