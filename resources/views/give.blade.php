<link rel="stylesheet"  href= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __("Xin chào. Vui lòng nhập thông tin ") }}
                </div>
            </div>
        </div>
    </div>
    <form method="post" class="p-3 border border-primary col-6 m-auto"
        action="{{route('give_k')}}" > @csrf 
            <div class="mb-3"> 
            <label>Họ tên</label><input value="{{old('ht')}}" class="form-control" name="ht">
            @error('ht')
               <p class="text-danger">{{ $message }}</p> 
            @enderror
            </div>
            <div class="mb-3">
            <label>Tuổi</label><input value="{{old('tuoi')}}" class="form-control" name="tuoi">
            @error('tuoi')
               <p class="text-danger">{{ $message }}</p> 
            @enderror
            </div>
            <div class="mb-3">
            <label>Ngày sinh</label><input value="{{old('ns')}}" class="form-control" name="ns">
            @error('ns')
               <p class="text-danger">{{ $message }}</p> 
            @enderror
            </div>
            <div class="mb-3">
            <label>CMND</label><input value="{{old('cmnd')}}" class="form-control" name="cmnd">
            @error('cmnd')
               <p class="text-danger">{{ $message }}</p> 
            @enderror
            </div>
            <div class="mb-3">
            <label>SĐT</label><input value="{{old('sdt')}}" class="form-control" name="sdt">
            @error('sdt')
               <p class="text-danger">{{ $message }}</p> 
            @enderror
            </div>
            <div class="mb-3">
            <label>Email</label> <input value="{{old('em')}}" class="form-control" name="em">
            @error('em')
               <p class="text-danger">{{ $message }}</p> 
            @enderror
            </div>
            <div class="mb-3"> 
            <label>Con số may mắn</label><input value="{{old('so')}}" class="form-control" name="so">
            @error('so')
               <p class="text-danger">{{ $message }}</p> 
            @enderror
            </div>
            <div class="mb-3">
            <button type="submit" class="btn btn-primary w-25">Xác nhận</button>
            </div>
        </form>
    </div>