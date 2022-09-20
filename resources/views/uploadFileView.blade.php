<form action="{{route('postFile')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="fileName">
    <input type="submit" name="Upload">
</form>