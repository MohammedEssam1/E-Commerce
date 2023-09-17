 @include('admin.partials.head')
 @include('admin.partials.sidebar')
 @include('admin.partials.nav')


 <div class="container-fluid page-body-wrapper full-page-wrapper">
     <div class="row w-100 m-0">
         <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
             <div class=" col-lg-12 mx-auto">
                 <table class="table  table-striped table-dark">
                     <thead>
                         <tr>
                             <th scope="col"></th>
                             <th scope="col">Product</th>
                             <th scope="col">Description</th>
                             <th scope="col">Price</th>
                             <th scope="col">Quantity</th>
                             <th scope="col">Category</th>
                             <th scope="col">Image</th>
                             <th class="ps-4" scope="col">Edit</th>
                             <th class="ps-4" scope="col">Delete</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($products as $key => $product)
                             <tr>
                                 <th scope="row">{{ $key + 1 }}</th>
                                 <td>{{ $product->name }}</td>
                                 <td >{{ $product->description }}</td>
                                 <td>{{ $product->price }}</td>
                                 <td>{{ $product->quantity }}</td>
                                 <td>{{ $product->category->title}}</td>
                                 <td><img src="{{asset('images/products/'.  $product->image )}}" alt="">
                                </td>
                                 <td>
                                     <form action="{{ route('products.edit', $product->id) }}">
                                         <button class="btn btn-primary">Edit</button>
                                     </form>
                                 </td>
                                 <td>
                                     <form action="{{ route('products.destroy', $product->id) }}" method="post" onsubmit="return confirm('Are you sure to delete this product?')">
                                         @csrf
                                         @method('delete')
                                         <button type="submit" class="btn btn-danger">Delete</button>
                                 </td>
                                 </form>
                             </tr>
                         @endforeach
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
     <!-- content-wrapper ends -->
 </div>
 <!-- row ends -->
 </div>

 @include('admin.partials.footer')
