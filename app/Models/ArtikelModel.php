<?php 
namespace App\Models;
use Illuminate\Support\Facades\DB;


class ArtikelModel {

public static function get_artikel(){
    $artikel = DB::table('tblartikel')->get();
    return $artikel;
}

public static function get_artikel_by_id($id){
    $pilihartikel = DB::table('tblartikel')->where('id', $id)->first();
    return $pilihartikel;
}

public static function save_artikel($data){
    $simpan = DB::table('tblartikel')->insert($data);

    return $simpan;
}

public static function update($id, $request){
    $updateartikel = DB::table('tblartikel')
                        ->where('id', $id)
                        ->update([
                            'judul' => $request["judul"],
                            'isi' => $request["isi"],
                            'img' => $request["img"],
                            'slug' => $request["slug"],
                            'tag' => $request["tag"],
                            'like' => $request["like"],
                            'id_penulis' => $request["id_penulis"],
                            'created_at' => $request["created_at"],
                            'updated_at' => $request["updated_at"]
                        ]);
    return $updateartikel;
}
 public static function destroy($id)
 {
     $deleted = DB::table('tblartikel')
                    ->where ('id',$id)
                    ->delete();
        return redirect('/artikel');
 }

}