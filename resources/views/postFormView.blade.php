<h1><?php echo $bien_duyhau; ?></h1> 

<form action="{{route('postForm')}}" method="post">
    @csrf
    <input type="text" name="hoten">
    <input type="submit">
</form>


