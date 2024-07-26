@extends('dashboard.layout.base')

@section('content')

      <div class="slim-mainpanel">
        <div class="container">
          <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Utilisateurs</a></li>
              <li class="breadcrumb-item active" aria-current="page">Liste des utilisateurs</li>
            </ol>
            <h6 class="slim-pagetitle">Liste des utilisateurs</h6>
          </div><!-- slim-pageheader -->

          <div class="section-wrapper">
            <div class="row">
              <div class="col-md-8">
                <label class="section-title">&nbsp;</label>
                <p class="mg-b-20 mg-sm-b-40">&nbsp;</p>
              </div>
              <div class="col-md-4">
                <div class="d-flex justify-content-end">
                    {{-- <a href="{{ route('admin.category.create') }}" class="btn btn-outline-primary bd-0"><i class="fa fa-plus mg-r-5"></i> Ajouter une categorie</a> --}}
                </div>
              </div>
            </div>

              @include('dashboard.component.dashboard_error')
              @include('dashboard.component.notifications')

              @if(count($users) > 0)
              <div class="table-responsive">
                <table class="table mg-b-0 tx-12">
                  <thead>
                    <tr class="tx-10">
                      <th class="pd-y-5"></th>
                      <th class="pd-y-5">Email</th>
                      <th class="pd-y-5">Prénom</th>
                      <th class="pd-y-5">Nom</th>
                      <th class="pd-y-5">Inscrit le</th>
                      <th class="pd-y-5 text-center">Afficher</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                    <tr>
                      <td class="valign-middle category-image" style="background-image: url('{{ $user->image_url }}');">
                      </td>
                      <td class="valign-middle">{{ $user->email }}</td>
                      <td class="valign-middle">{{ $user->first_name }}</td>
                      <td class="valign-middle">{{ $user->last_name }}</td>
                      <td class="valign-middle">{{ $user->created_at->format('y/m/d à h:i') }}</td>
                      <td class="valign-middle text-center">
                        <a href="{{ route('admin.user.show', ['id' => $user->id] ) }}" class="tx-gray-600 tx-24">
                          <i class="fa fa-book mg-r-5"></i>
                        </a>
                      </td>
                     
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div><!-- table-responsive -->
              @else
              <p>Vous n'avez aucun categorie</p>
              @endif
              
          </div><!-- section-wrapper -->

        </div><!-- container -->

        @include('dashboard.component.copyright')
      </div><!-- slim-mainpanel -->


    </div><!-- slim-body -->

@endsection


@push('styles')

    <link href="{{ asset('dashboard/lib/jquery-toggles/css/toggles-full.css') }}" rel="stylesheet">

    <style type="text/css">
      
      .toggle-modern.indigo .toggle-on.active {
          background-color: #1b84e7 !important;
      }

      .toggle-modern.indigo .toggle-on.active + .toggle-blob {
          border: 3px solid #1b84e7 !important;
      }

      .toggle-wrapper {
        width: unset !important; 
      }

      .category-image {
        /*height: 20pt;*/
        width: 120pt;
        background-position: center;
        background-size: cover;
        margin: 0;
      }

    </style>

@endpush



@push('scripts')

    <script src="{{ asset('dashboard/lib/jquery-toggles/js/toggles.min.js') }}"></script>

    <script type="text/javascript">
      
      $(function(){
        'use strict'

        // Toggles
        $('.toggle').toggles({
          on: true,
          height: 32,
          width: 90,
          text: {
            on: 'activer',
            off: 'desactiver'
          },
          checkbox: null,
        });

        $('.toggle').on('toggle', function(e, active) {
          if (active) {
            console.log('Toggle is now ON!');
          } else {
            console.log('Toggle is now OFF!');
          }
        });


      });

    </script>


@endpush

