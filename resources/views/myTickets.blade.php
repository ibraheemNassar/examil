@extends('layout.APP')
@section('container')
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-ticket"> My Tickets</i>
          </div>

          <div class="panel-body">
            <table class="table">
              <thead>
                <tr>
                  <th>Category</th>
                  <th>Title</th>
                  <th>Status</th>
                  <th>Last Updated</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($Ticks as $Tick )
                <tr>
                  <td>{{$Tick->Category}}</td>
                  <td>
                    {{$Tick->Title}}
                    <a href="#">

                    </a>
                  </td>
                  <td><span class="label label-success">Open</span></td>
                  <td>{{$Tick->updated_at}}</td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection
