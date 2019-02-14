@extends('layouts.app')

@section('content')
   <table class="table">
      <thead>
         <tr>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Created at</th>
            <th scope="col">Super Admin</th>
         </tr>
      </thead>
      <tbody>
         @foreach($users as $user)
            <tr scope="row">
               <td>{{ $user->name }}</td>
               <td>{{ $user->email }}</td>
               <td>{{ $user->created_at }}</td>
               <td>{{ $user->is_admin }}</td>
            </tr>
         @endforeach
      </tbody>
   </table>

   {{ $users->links() }}
@endsection