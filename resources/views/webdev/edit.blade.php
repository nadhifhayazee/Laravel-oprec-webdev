@extends('layout.master')

@section('jumbotron')

    <div class="jumbotron center" id="jumbo">
        <div class="container">
            <img class="center-block" src="/img/webdev.jpg" alt="" srcset="">
            <h1 class="text-center">Webdev Open Recruitment</h1>
            <hr>
            
                <a href="/webdev"><button class="btn btn-primary center-block"><i class="glyphicon glyphicon-home"></i> Home</button></a>
        </div>
    </div>

@endsection

@section('content')

    <div class="container formulir">
        <form action="/webdev/{{$webdev->id}}" method="post">

                <div class="form-group">
            
                    <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $webdev->nama }}">
            
                </div>
                <div class="form-group">
            
                    <label for="kelas">Kelas</label>
                    <input type="text" name="kelas" class="form-control" placeholder="Kelas" value="{{ $webdev->kelas }}">
            
                </div>
                <div class="form-group">
            
                    <label for="id_line">ID Line</label>
                    <input type="text" name="line_id" class="form-control" placeholder="ID Line" value="{{ $webdev->line_id }}">
            
                </div>
                <div class="form-group">
            
                    <label for="nope">No Hp</label>
                    <input type="text" name="nope" class="form-control" placeholder="No HP" value="{{ $webdev->nope }}">
            
                </div>
                
                
                <div class="form-group">
                        <label for="minat">Minat</label>
                        <select name="minat" class="form-control">
                                <option value="Frontend">Frontend</option>
                                <option value="Backend">Backend</option>
                                <option value="Design">Design</option>
                                <option value="Fullstack">Fullstack</option>
                                <option value="Project Manager">Project Manager</option>
                                <option value="Belum Tau">Belum Tau</option>
                            </select>
                </div>

                 <button type="submit" name="submit" class="btn btn-success">Submit</button>
            
                 {{ csrf_field() }}
                 <input type="hidden" name="_method" value="put">
            </form>
    </div>

@endsection