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
            <h6 class="slim-pagetitle">Liste des commentaires</h6>
          </div><!-- slim-pageheader -->

          <div class="section-wrapper">
            <div class="row">
              <div class="col-md-8">
                <label class="section-title">&nbsp;</label>
                <p class="mg-b-20 mg-sm-b-40">&nbsp;</p>
              </div>
             
            </div>

              @include('dashboard.component.dashboard_error')
              @include('dashboard.component.notifications')

              @if(count($comments) > 0)
              <div class="table-responsive">
                <table class="table mg-b-0 tx-12">
                  <thead>
                    <tr class="tx-10">
                      <th class="pd-y-5"></th>
                      <th class="pd-y-5">Créé à</th>
                      <th class="pd-y-5">Titre</th>
                      <th class="pd-y-5">Email</th>
                      <th class="pd-y-5 text-center">Commentaires</th>
                      <th class="pd-y-5 text-center">Supprimer</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($comments as $comment)
                    <tr>
                      <td class="valign-middle category-image" style="background-image: url('');">
                        {{-- <div class="category-image" style="background-image: url('{{ $category->cover_image }}');">
                        </div> --}}
                      </td>
                      <td class="valign-middle">{{ $comment->created_at->format('d/m/y') }}</td>
                      <td class="valign-middle">{{ $comment->name }}</td>
                      <td class="valign-middle">{{ $comment->email }}</td>
                      <td class="valign-middle">{{ $comment->description }}</td>
                      
                      <td class="valign-middle text-center">
                        <a href="{{ route('admin.post.comment_delete', ['id' => $comment->id]) }}" class="tx-gray-600 text-danger tx-24"><i class="fa fa-close"></i> </a>
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

