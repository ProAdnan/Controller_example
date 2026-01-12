@extends('layout.master')



@section('content')
    <a href="{{ route('user.create') }}">Create user</a>



    @isset($users)
        @foreach ($users as $u)
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>email</th>
                        <th>password</th>

                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>

                        <td> {{ $u['name'] }}</td>
                        <td>{{ $u['email'] }}</td>
                        <td>{{ $u['password'] }}</td>

                        <td><a href="{{ route('user.show', $u['id']) }}">view</a></td>
                        <td><a href="{{ route('user.edit', $u['id']) }}">edit</a></td>


                        <form action="{{ route('user.destroy', $u['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>


                    </tr>

                </tbody>

            </table>
        @endforeach
    @endisset

    @empty($users)
        <p>No data found</p>
    @endempty





@endsection
