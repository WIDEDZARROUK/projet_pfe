@extends('sl.adddelivery')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
        </div>
    </div>
   
    <div align="right">
    <a href="{{url('/livreurs/create')}}"  class="btn btn-success"  >Ajouter</a>
</div>
<div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h3 class="text-white text-capitalize ps-3" align="center">Tableau des livreurs</h3>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              
            @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
         @endif
              <div class="table-responsive p-0">
            
<table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Prénom</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center" >Tel</th>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mode de passe</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ville</th>
                      <th class="text-secondary opacity-7">Actions</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                  @foreach ($records as $record)
                 
                    <tr>
                      <td>
                      <p class="text-xs font-weight-bold mb-0">{{ $record->prenom }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $record->nom }}</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $record->numtel }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $record->password }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $record->ville }}</span>
                      </td>
                      <td class="align-middle">
                      <a  href="{{ route('livreurs.show',$record->id) }}"><img src="../assets/img/show.png" height ="20" width="20" /></a>
                      <a  href="{{ route('livreurs.edit',$record->id) }}"><img src="../assets/img/edit.png" height ="20" width="20" /></a>
                      <a href="#" class="servideletebtn" data-id="{{$record->id}}"><img src="../assets/img/delete.png" height ="20" width="20" /></a>
                      <a href="{{url('/livreurs/create')}}"   ><img src="../assets/img/add1.png" height ="20" width="20" /></a>                
               
                  </td>
                    </tr>
                   
                    @endforeach
                  </tbody>
                  {!! $records->links() !!}
                </table>
</div>
</div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.slim.js"
  integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
  crossorigin="anonymous"></script>

<script>
    $(document).ready(function (){
        $('.servideletebtn').click(function (e){
            e.preventDefault();
            var pegawaiid = $(this).attr('data-id');
            swal({
  title: "Êtes-vous sûr?",
  text: "Ce livreur sera définitivement supprimé ! ",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location="/destroy/"+pegawaiid+""
    swal(" Votre livreur a été supprimé!", {
      icon: "success",
    });
  } else {
    swal("Votre livreur est en sécurité !");
  }
});
            });
});

</script>

  
    

@endsection