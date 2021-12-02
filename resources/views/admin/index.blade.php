@extends('layouts.app')

@section('template_title')
    Admin
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Admin') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('Admins.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Cedula</th>
										<th>Password</th>
										<th>Fecha Naci</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admins as $admin)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $admin->nombre }}</td>
											<td>{{ $admin->cedula }}</td>
											<td>{{ $admin->Password }}</td>
											<td>{{ $admin->Fecha_naci }}</td>

                                            <td>
                                                <form action="{{ route('Admins.destroy',$admin->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('Admins.show',$admin->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('Admins.edit',$admin->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $admins->links() !!}
            </div>
        </div>
    </div>
@endsection
