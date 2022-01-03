
                   @section('title-page')
                      <h4>Services</h4>
                   @endsection
                     @section('service')
                       <li><a href="/admin/news">News</a></li>
                     @endsection
                     @include('admin.headAdmin')
                   <a class="btn btn-primary mb-3 mt-3" role="button" href="{{ route('prices.create') }}">Create Service</a> <br>
                   <table class="table">
                     <thead>
                       <tr>
                         <th scope="col">services</th>
                         <th scope="col">price</th>
                         <th scope="col">edit</th>
                         <th scope="col">delete</th>
                       </tr>
                     </thead>
                     <tbody>
                        @foreach ($prices as $price)
                       <tr>
                         <th scope="row">
                           <a href="{{ route('prices.show', $price) }}">
                              {{ $price->service }}
                           </a>
                         </th>
                         <td>
                           <a href="{{ route('prices.show', $price) }}">
                              {{ $price->discounted_price }}
                           </a>
                         </td>
                         <td>
                           <form method="POST" action="{{ route('prices.destroy', $price) }}">
                              <a type="button" class="btn btn-warning" href="{{ route('prices.edit', $price) }}">Edit</a>
                              @csrf
                              <td>
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
                           </td>
                          </form>
                         </td>
                       </tr>
                       @endforeach
                     </tbody>
                  </table>
            </div>
         </div>
    </div>
</body>
</html>
