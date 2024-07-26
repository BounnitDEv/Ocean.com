@extends('dashboard.layout.base')

@section('content')

      <div class="slim-mainpanel">
        <div class="container">
          <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">collections</a></li>
              <li class="breadcrumb-item active" aria-current="page">Liste des commandes</li>
            </ol>
            <h6 class="slim-pagetitle">Liste des commandes</h6>
          </div><!-- slim-pageheader -->

          <div class="section-wrapper">
            <div class="row">
              <div class="col-md-8">
                <label class="section-title">Top Label Layout</label>
                <p class="mg-b-20 mg-sm-b-40">A form with a label on top of each form control.</p>
              </div>
              <div class="col-md-4">
                <div class="d-flex justify-content-end">
                    {{-- <a href="{{ route('dashboard.commandes.create') }}" class="btn btn-outline-primary bd-0"><i class="fa fa-plus mg-r-5"></i> Ajouter une collection</a> --}}
                </div>
              </div>
            </div>

              @include('dashboard.component.dashboard_error')
              @include('dashboard.component.notifications')

              @if(count($commandes) > 0)
              <div class="table-responsive">
                <table class="table mg-b-0 tx-12">
                  <thead>
                    <tr class="tx-10">
                      <th class="pd-y-5"></th>
                      <th class="pd-y-5">Titre</th>
                      <th class="pd-y-5">Produits</th>
                      <th class="pd-y-5">Active</th>
                      <th class="pd-y-5 text-center">Afficher</th>
                      <th class="pd-y-5 text-center">Edit</th>
                      <th class="pd-y-5 text-center">Supprimer</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($commandes as $commande)
                    <tr>
                      <td class="valign-middle category-image" style="background-image: url('{{ $commande->cover }}');">
                        {{-- <div class="category-image" style="background-image: url('{{ $category->cover_image }}');">
                        </div> --}}
                      </td>
                      <td class="valign-middle">{{ $commande->title }}</td>
                      <td class="valign-middle">{{ count($commande->products) }} produits</td>
                      <td class="valign-middle">
                        <div class="toggle-wrapper">
                          <div class="toggle toggle-modern indigo"></div>
                        </div>
                      </td>
                      <td class="valign-middle text-center">
                        <a href="{{ route('dashboard.commandes.show', ['id' => $commande->id]) }}" class="tx-gray-600 tx-24">
                          <i class="fa fa-book mg-r-5"></i>
                        </a>
                      </td>
                      <td class="valign-middle text-center">
                        <a href="{{ route('dashboard.commandes.edit', ['id' => $commande->id]) }}" class="tx-gray-600 tx-24">
                          <i class="fa fa-pencil mg-r-5"></i>
                        </a>
                      </td>
                      <td class="valign-middle text-center">
                        <a href="{{ route('dashboard.commandes.delete', ['id' => $commande->id]) }}" class="tx-gray-600 text-danger tx-24"><i class="fa fa-close mg-r-5"></i> </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div><!-- table-responsive -->
              @else
              <p>Vous n'avez aucun commande</p>
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

