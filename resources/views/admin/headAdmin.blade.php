@section('head')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body> 
    <div class="container">
         <div class="row">
            <div class="col">
                   <h4>@yield('title-page')</h4><hr>
                      @yield('service')  
                       @yield('news')
                   <table class="table table-hover">
                      <thead>
                        <th>Name Admin</th>
                        <th>Email</th>
                        <th></th>
                      </thead>
                      <tbody>
                         <tr>
                           <td>{{ $loggedUserInfo->name}}</td>
                           <td>{{ $loggedUserInfo->email}}</td>
                            <td><a href="{{ route('auth.logout') }}" class="text-decoration-none">Logout</a></td>
                         </tr>
                      </tbody>
                   </table>