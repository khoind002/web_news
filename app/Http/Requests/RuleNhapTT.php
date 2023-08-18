<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleNhapTT extends FormRequest{
    
    public function authorize(): bool{
        return true;
    }

    public function rules(): array{
        return [
            'ht' => ['required', 'min:3', 'max:20', 'regex:/^[A-Za-z\s]*$/'],
            'tuoi' => 'required|integer|min:16|max:100',
            'ns' => ['required','regex:/\d{1,2}\/\d{1,2}\/\d{4}/'],
            'cmnd' => ['digits_between:9,10','regex:/^[0-9]*$/'],
            'sdt'=> ['required', 'digits:10','regex:/^[0-9]*$/'],
            'em' => 'email|ends_with:@gmail.com',
            'so' => ['required', 'integer', 'digits:3']

        ];
    }

    public function messages() {
        return [
         'ht.required' => 'Vui lòng nhập tên',
         'ht.max' => 'Tên bạn quá dài',
         'ht.regex' => 'Tên không được chứa số và kí tự đặc biệt',
         'ht.min' => 'Tên bạn quá ngắn',

         'ns.regex' => 'Nhập đúng định dạng dd/mm/yyyy ',

         'tuoi.required' => 'Vui lòng nhập tuổi',
         'tuoi.integer' => 'Tuổi phải là số nguyên.',
         'tuoi.min' => 'Tuổi phải lớn hơn hoặc bằng :min.',
         'tuoi.max' => 'Tuổi phải nhỏ hơn hoặc bằng :max.',

         'cmnd.digits_between' => 'CMND nhập 9 hoặc 10 số',
         'cmnd.regex'=>'không được chứa chữ cái và kí tự đặc biệt',

         'sdt.required' => 'Vui lòng nhập SĐT',
         'sdt.digits' => 'Vui lòng nhập đúng 10 số',


         'em.email' => 'Vui lòng nhập một địa chỉ email hợp lệ.',
         'em.ends_with' => 'Vui lòng nhập đúng đuôi @gmail.com.',
         
         'so.required' => 'Nhập con số may mắn của bạn',
         'so.integer' => 'Vui lòng nhập số nguyên.',
         'so.digits' => 'Vui lòng nhập một số có 3 chữ số.',
         'so.required' => 'Vui lòng nhập số có 3 chữ số.'
         
       ];
     }
}
