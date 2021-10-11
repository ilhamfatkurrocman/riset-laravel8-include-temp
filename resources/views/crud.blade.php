<form action="/simpan" method="POST">
    @csrf @method('put')
<button type="submit">Submit {{ $nama }}</button>
</form>

{{-- <a href="{{ url('home') }}">Halaman data karyawan</a><br> --}}
<a href="{{ route('master-data.data-karyawan') }}">Halaman data karyawan</a><br>
<a href="{{ route('master-data.data-kerja') }}">Halaman data kerja</a>
