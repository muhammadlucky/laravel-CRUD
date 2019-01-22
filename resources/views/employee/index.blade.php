DATA Employee

<br />
@foreach ($employee as $employeelist)
{{ $employeelist->employee_id}}
{{ $employeelist->employee_name}}
{{ $employeelist->employee_address}}
{{ $employeelist->employee_phone_number}}
<br />
<a href="/Employee/{{ $employeelist->employee_id }}">Tampilkan</a>
<br />
<a href="/Employee/{{ $employeelist->employee_id }}/edit">Ubah</a>
<br />

<form action="/Employee/{{$employeelist->employee_id}}" method="post">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<button> Hapus </button>
</form>
@endforeach

<a href="{{url ('Employee/create') }}"> Tambah Data</a>