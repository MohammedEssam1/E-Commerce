    @include('user.partials.head')
    @include('user.partials.nav')

    <h2 class="font-mono font-bold text-4xl text-center mb-10 mt-4">Your Cart</h2>

    <div class="w-9/12 text-center m-auto">
        <table class="table table-striped mb-10">
            <thead>
                <tr>
                    <th scope="col">image</th>
                    <th scope="col">details</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $id => $product)
                    <tr>
                        <th scope="row"><img class="w-28 m-auto" src="images/products/{{ $product->image }}"
                                alt=""></th>
                        <td class="pt-5">{{ $product->name }}</td>
                        <td class="pt-5">${{ $product->price }}</td>
                        <td class="pt-5"> <input type="number" name="quantity"
                                class="m-auto block w-3/12 rounded-md border-0 py-1.5 pl-3 pr-2 text-gray-900 ring-1  ring-inset ring-gray-300 focus:ring-2 placeholder:text-gray-400  focus:ring-inset focus:ring-black sm:text-sm sm:leading-6"
                                value="{{ $product->quantity }}"></td>
                        <form action="{{ route('cart.destroy', $id) }}" method="post">
                            @csrf
                            @method('delete')
                            <td class="pt-5"><button class="btn btn-danger text-white">Remove</button></td>
                        </form>
                @endforeach
            </tbody>
        </table>
        <button type="submit"
            class="flex w-3/12 m-auto justify-center rounded-md bg-black px-3 py-2.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-neutral-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Check
            Out
            <i class="ps-3 pt-1.5 fa-solid fa-arrow-right"></i>
        </button>
    </div>

    <!-- jQery -->
    <script src="user/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="user/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="user/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="user/js/custom.js"></script>
    </body>

    </html>
