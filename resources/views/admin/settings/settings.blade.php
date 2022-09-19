@extends('layouts.admin')

@section('content')

<style>
table.settings {
  border: 1px solid #C4C4C5;
  /* text-align: center; */
  justify-content:center;
  margin:auto;
}
table.settings td, table.settings th {
  border: 1px solid #AAAAAA;
}
table.settings thead {
  background: #DDDDDD;
}
table.settings thead th {
  font-weight: normal;
}
#slno{
    width:20px;
    text-align: center;
}

</style>

<h4>Settings Management</h4>
<table class="table table-hover table-Settings">


    <thead>
        <tr><th colspan="4" style="background-color:#fff!important;"><a href="{{ Route('admin.editsettings') }}" class="btn btn-primary button1"> Edit Settings</a></th></tr>
        <tr>
            <th id="slno">#</th>
            <th>Feature</th>
            <th>Value</th>
            <th>Unit</th>
        </tr>
    </thead>

    <tbody>


    @foreach($settings as $setting)
<tr>
    <td>{{ $setting->id }}</td>
    <td>{{ $setting->feature }}</td>
    <td>{{ $setting->value }}</td>
    <td>{{ $setting->unit }}</td>
</tr>
    @endforeach
       

    </tbody>
</table>


@endsection