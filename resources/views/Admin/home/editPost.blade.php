<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

<form action="/admin/edit/{{$tin->id}}/" method="post" class="col-7 m-auto">
    <p> Tiêu đề: <input name="tieuDe" id="tieuDeInput" class="form-control" value="{{$tin->tieuDe}}"></p>
    <p> Tóm tắt: <textarea name="tomTat" id="" class="form-control"> {{$tin->tomTat}}</textarea></p>
    <p> urlHinh: <input name="urlHinh" id="" class="form-control" value="{{$tin->urlHinh}}"></p>
    <p> idLT:
        <select name="idLT" id="idLTInput" class="form-control">
            <option value="1" >Xã hội</option>
            <option value="3" >Du lịch</option> 
        </select>
    </p>
    <p><button type="submit" class=" btn btn-success p-2">Lưu</button></p>
    @csrf
</form>