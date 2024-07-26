@extends('admin.layout.base')

@section('content')

      <div class="slim-mainpanel">
        <div class="container">
          <div class="slim-pageheader">
              
            <h6 class="slim-pagetitle">Ajouter une recette</h6>
          </div><!-- slim-pageheader -->

          <div class="section-wrapper">
            <div class="row">
              <div class="col-md-8">
                <label class="section-title">&nbsp;</label>
                <p class="mg-b-20 mg-sm-b-40">&nbsp;</p>
              </div>
              <div class="col-md-4">
                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.recette.create') }}" class="btn btn-primary bd-0"><i class="fa fa-plus mg-r-5"></i> Ajouter une recette</a>
                </div>
              </div>
            </div>

              @include('admin.component.dashboard_error')
              @include('admin.component.notifications')

              @if(count($recettes) > 0)
              <div class="table-responsive">
                <table class="table mg-b-0 tx-12">
                  <thead>
                    <tr class="tx-10">
                      <th class="pd-y-5">Créé à</th>
                      <th class="pd-y-5">Titre</th>
                      <th class="pd-y-5 text-center">Edit</th>
                      <th class="pd-y-5 text-center">Supprimer</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($recettes as $recette)
                    <tr>
                  
                      <td class="valign-middle">{{ $recette->created_at }}</td>
                      <td class="valign-middle">{{ $recette->name }}</td>
                      
                      <td class="valign-middle text-center">
                        <a href="{{ route('admin.recette.edit', ['id' => $recette->id]) }}" class="tx-gray-600 text-danger tx-24"><i class="fa fa-pencil"></i> </a>
                      </td>
                      <td class="valign-middle text-center">
                        <a href="{{ route('admin.recette.destroy', ['id' => $recette->id]) }}" class="tx-gray-600 text-danger tx-24"><i class="fa fa-close"></i> </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div><!-- table-responsive -->
              @else
              <p>Vous n'avez aucun recette</p>
              @endif
              
          </div><!-- section-wrapper -->

        </div><!-- container -->

        @include('admin.component.copyright')
      </div><!-- slim-mainpanel -->


    </div><!-- slim-body -->

@endsection


@push('styles')

    

@endpush



@push('scripts')



@endpush

