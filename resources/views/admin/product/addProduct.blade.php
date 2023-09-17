 @include('admin.partials.head')
 @include('admin.partials.sidebar')
 @include('admin.partials.nav')

 <div class="container-fluid page-body-wrapper full-page-wrapper">
     <div class="row w-100 m-0">
         <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
             <div class="card col-lg-5 mx-auto">

                 <div class="card-body px-5 py-4">
                     <h3 class="card-title text-left mb-3">Add Product</h3>
                     <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                         @csrf
                         <div class="form-group">
                             <label>Name</label>
                             <input type="text" name="name" class="form-control p_input text-light">
                         </div>
                         <div class="form-group">
                             <label>Description</label>
                             <textarea name="description" class="form-control text-light" id=""  rows="5"></textarea>
                         </div>
                         <div class="form-group">
                             <label>Price</label>
                             <input type="text" name="price" class="form-control p_input text-light">
                         </div>
                         <div class="form-group">
                             <label>Quantity</label>
                             <input type="text" name="quantity" class="form-control p_input text-light">
                         </div>
                         <div class="form-group">
                             <label>Category</label>
                             <select name="category_id" class="form-select text-light"
                                 aria-label="Default select example">
                                 @foreach ($categories as $key => $category)
                                     @if ($key == 0)
                                         <option selected value="{{ $category->id }}">{{ $category->title }}</option>
                                     @else
                                         <option value="{{ $category->id }}">{{ $category->title }}</option>
                                     @endif
                                 @endforeach
                             </select>
                         </div>
                         <div class="form-group">
                             <label>Image</label>
                             <input type="file" name="image" class="form-control p_input text-light">
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

 @include('admin.partials.footer')
