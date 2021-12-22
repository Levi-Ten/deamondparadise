
                   @section('title-page')
                       <h4>News</h4>
                   @endsection
                   @section('news')
                   <li><a href="/prices">Services</a></li>
                   @endsection
               @include('admin.headAdmin')
              
                   <a class="btn btn-primary mb-3 mt-3" role="button" href="{{ route('news.create') }}">Create News</a> <br>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Title</th>
                      <th scope="col">News</th>
                      <th scope="col">Images</th>
                      <th scope="col">edit</th>
                      <th scope="col">delete</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach ($news as $news)
                    <tr>
                     <td scope="row">
                        <a href="{{ route('news.show', $news) }}">
                           {{ $news->title }} 
                        </a>
                      </td>
                      <td scope="row">
                        <a href="{{ route('news.show', $news) }}">
                           {{ $news->description }}
                        </a>
                      </td>
                      <td>
                        <a href="{{ route('news.show', $news) }}">
                           {{ $news->image }} 
                           <img 
                           src="{{ asset('public/images/' . $news->image) }}" 
                           alt=""
                           class="img-thumbnail w-50">
                        </a>
                      </td>
                      <td>
                        <form method="POST" action="{{ route('news.destroy', $news->id) }}">
                           <a type="button" class="btn btn-warning" href="{{ route('news.edit', $news->id) }}">Edit</a>
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