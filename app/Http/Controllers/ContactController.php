<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ContactController extends Controller
{
    public function index()
    {
        return view('pesan');
    }

    public function sendMessage(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $telp = $request->input('telp');
        $layanan = $request->input('layanan');
        $message = $request->input('message');

        $text = "Nama: $name\nEmail: $email\nTelp/Wa: $telp\nLayanan: $layanan\nPesan: $message";

        $chatId = '-4262942175'; // Ganti dengan ID grup Telegram yang ingin Anda gunakan
        $botToken = '7076517987:AAGXvvEwvZEEo-iRNwBNtLiyZXrpdAcODwI'; // Ganti dengan token bot Telegram Anda

        $client = new Client(['base_uri' => 'https://api.telegram.org']);
        $response = $client->request('GET', "/bot$botToken/sendMessage", [
            'query' => [
                'chat_id' => $chatId,
                'text' => $text
            ]
        ]);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim. Kami akan segera menghubungi di Whatsapp!');
    }
}
