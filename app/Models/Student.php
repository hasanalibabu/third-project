<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $student;

    public function newStudent()
    {
        $this->student = new Student();
        $this->student->name   = 'hasan';
        $this->student->email  = 'hasan@gmail.com';
        $this->student->mobile = '012345';
        $this->student->save();
    }

    public static function getAllStudent()
    {
        return [
            0 =>[
                'id'     => '1',
                'name'   => 'hasan',
                'email'  => 'hasan@gmail.com',
                'mobile' => '012345',
                'image'  => ''
            ],
            1 =>[
                'id'     => '2',
                'name'   => 'ali',
                'email'  => 'ali@gmail.com',
                'mobile' => '0123456',
                'image'  => ''
            ],
        ];
    }
}
