 @include('admin.partials.head')
 @include('admin.partials.sidebar')
 @include('admin.partials.nav')


 <div class="container-fluid page-body-wrapper full-page-wrapper">
     <div class="row w-100 m-0">
         <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
             <div class=" col-lg-6 mx-auto">
                 <table class="table  table-striped table-dark">
                     <thead>
                         <tr>
                             <th scope="col"></th>
                             <th scope="col">Category</th>
                             <th class="ps-4" scope="col">Edit</th>
                             <th class="ps-4" scope="col">Delete</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($categories as $key => $category)
                             <tr>
                                 <th scope="row">{{ $key + 1 }}</th>
                                 <td>{{ $category->title }}</td>
                                 <td>
                                     <form action="{{ route('category.edit', $category->id) }}">
                                         <button class="btn btn-primary">Edit</button>
                                     </form>
                                 </td>
                                 <td>
                                     <form action="{{ route('category.destroy', $category->id) }}" method="post" onsubmit="return confirm('Are you sure to delete this category?')">
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
