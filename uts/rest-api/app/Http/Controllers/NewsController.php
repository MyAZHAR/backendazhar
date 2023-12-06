<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class StudentController extends Controller
{
    public function index()
	{
        # menggunakan model Student untuk select data
		$news = News::all();

		if (!empty($students)) {
			$response = [
				'message' => 'Menampilkan Data Semua Student',
				'data' => $news,
			];
			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data tidak ada'
			];
			return response()->json($response, 404);
		}
	}

	public function store(Request $request) 
	{

		// $input = [
		// 	'nama' => $request->nama,
		// 	'nim' => $request->nim,
		// 	'email' => $request->email,
		// 	'jurusan' => $request->jurusan
		// ];

		$news = News::create($request->all());

		$response = [
			'message' => 'Data Student Berhasil Dibuat',
			'data' => $news,
		];

		return response()->json($response, 201);
	}

	public function show($id)
	{
		$news = News::find($id);

		if ($news) {
			$response = [
				'message' => 'Get detail student',
				'data' => $news
			];
	
			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data not found'
			];
			
			return response()->json($response, 404);
		}
	}

	public function update(Request $request, $id)
	{
		$news = News::find($id);

		if ($news) {
			$response = [
				'message' => 'Student is updated',
				'data' => $news->update($request->all())
			];
	
			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data not found'
			];

			return response()->json($response, 404);
		}
	}

	public function destroy($id)
	{
		$news = News::find($id);

		if ($news) {
			$response = [
				'message' => 'Student is delete',
				'data' => $news->delete()
			];

			return response()->json($response, 200); 
		} else {
			$response = [
				'message' => 'Data not found'
			];

			return response()->json($response, 404);
		}
	}
}