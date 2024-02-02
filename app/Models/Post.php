<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded =  ['id'];
    protected $with =['category','author'];

    //membuat localscope untuk membuat query yang bisa di panggil berulang nama function scope(namafilter)
    public function scopeFilter($query, array $filters){

        //fungsi isset untuk ngecek variabel ada isi atau engga 
        //buat kondisi operator ternari untuk ngecek 

        $query->when($filters['search'] ?? false, function ($query,$search){

            return $query->where('title','like','%'.$search.'%')
                  ->orWhere('body','like','%'. $search .'%');
        });
        //membuat filter dari slug yang berbungan dengan tabel lain 
        $query -> when($filters['category']?? false, function($query, $category){

            //join table untuk menyesuaikan filter berdasarkan kategori 
            //menggunakan WhereHas query punya relationship ke kategori 
            //use dig
            return  $query->whereHas('category', function ($query) use($category){
                //ketika slug = kategori 
                return $query ->where('slug',$category);
            });

        });
        $query ->when($filters['author']?? false, function($query, $author){
            return $query ->whereHas ('author', function ($query) use($author){
                return $query->where('username', $author);

            });

        });
    }


    //kalo buat relasi nama method = nama model 
    public function Category(){
        //1 post memiliki 1 categori
        return $this->belongsTo(Category::class);
    }
   
    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
