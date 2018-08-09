@extends('layout.master')

@section('jumbotron')

    <div class="jumbotron center" id="jumbo">
        <div class="container">
            <img class="center-block" src="/img/webdev.jpg" alt="" srcset="">
            <h1 class="text-center">Webdev Open Recruitment</h1>
            <hr>
            
                <a href="/webdev/create"><button class="btn btn-primary center-block"><i class="glyphicon glyphicon-plus"></i> Buat Baru</button></a>
        </div>
    </div>

@endsection

@section('content')

    <div class="container tabel">
            <table class="table table-bordered text-center">

                    <thead>
                        <tr>
                                <th class="text-center" >No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Kelas</th>
                                <th class="text-center">ID LINE</th>
                                <th class="text-center">NO HP</th>
                                <th class="text-center">Minat</th>
                                <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    

                    @php ($i = 1)
                    @foreach($webdevs as $webdev) 
                    
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $webdev->nama }}</td>
                            <td>{{ $webdev->kelas }}</td>
                            <td>{{ $webdev->line_id }}</td>
                            <td>{{ $webdev->nope }}</td>
                            <td>{{ $webdev->minat }}</td>
                            <td style="width: 150px"><a href="/webdev/{{$webdev->id}}/edit"><button class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i></button></a>   
                                
                               
                                <form action="/webdev/{{$webdev->id}}" method="POST">

                                    <button type="submit" name="submit" class="btn btn-danger"> <i class="glyphicon glyphicon-trash"></i></button>
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE"></td>
                                </form>
                               
                               </tr>
                            
                              

                        @php( $i++ )
                    @endforeach
            
            
                </table>
    </div>

@endsection