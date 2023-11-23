<h1>All Users List</h1>

@foreach ($data as $id => $user)
    <h3>
       {{$user->name}} | 
       {{$user->enail}} | 
       {{$user->age}} | 
       {{$user->city}} | 
    </h3>
@endforeach