 @include('admin.partials.head')
 @include('admin.partials.sidebar')
 @include('admin.partials.nav')

 <div class="container-fluid page-body-wrapper full-page-wrapper">
     <div class="row w-100 m-0">
         <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
             <div class="card col-lg-5 mx-auto">

                 <div class="card-body px-5 py-5">
                     <h3 class="card-title text-left mb-3">Add Category</h3>
                     <form method="POST" action="{{ route('category.store') }}">
                         @csrf
                         <div class="form-group">
                             <label>Title</label>
                             <input type="text" name="title" class="form-control p_input text-light">
                         </div>
                         <div class="text-center">
                             <button type="submit" class="btn btn-primary btn-block enter-btn">Add</button>
                         </div>
                     </form>
                     @if ($errors->any())
                         @foreach ($errors->all() as $error)
                             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                 {{ $error }}
                                 <button type="button" class="btn-close" data-dismiss="alert"
                                     aria-label="Close"></button>
                             </div>
                         @endforeach
                     @endif

                     @if (session()->has('message'))
                         <div class="alert alert-success alert-dismissible fade show" role="alert">
                             {{ session('message') }}
                             <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                         </div>
                     @endif
                 </div>
             </div>
         </div>
         <!-- content-wrapper ends -->
     </div>
     <!-- row ends -->
 </div>
 <!-- page-body-wrapper ends -->
 </div>

 @include('admin.partials.footer')
