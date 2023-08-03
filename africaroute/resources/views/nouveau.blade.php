@extends ('base')



@section ('content')

<form style="margin:300px;">
<h1>{{$test}}</h1>
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
    <input type="submit" value="Envoyer">
  </div>
</form>

@endsection