@extends('basic.template1')


@section('template1')
<div class="container-fluid">
    @include('basic.message')
    <table class="table-bordered table-hover table">
        <th>
            id
        </th>
        <th>
            name
        </th>
        <th>
            age
        </th>
        <th>
            sex
        </th>
        <th>
            create
        </th>
        <th>
            status
        </th>
        <th>
        </th>
        @foreach($users as $user)
        <tr>
            <td>
                {{ $user->id }}
            </td>
            <td>
                {{ $user->name }}
            </td>
            <td>
                {{ $user->age }}
            </td>
            <td>
                {{ $user->sex }}
            </td>
            <td>
                {{ date('Y-m-d H:i:s',$user->created_at) }}
            </td>
            <td>
                {{ $user->status }}
            </td>
            <td>
                <a href="{{ url('user/edit/'.$user->id) }}">
                    修改
                </a>
                <a href="{{ url('user/delete/'.$user->id) }}">
                    删除
                </a>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="pull-right">
        {{ $users->render() }}
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ url('user/create') }}">
            添加
        </a>
    </div>
</div>
@endsection
