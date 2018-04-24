@extends('backend.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Teammate
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($teammate, ['route' => ['teammates.update', $teammate->id], 'method' => 'patch']) !!}

                        @include('backend.teammates.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection