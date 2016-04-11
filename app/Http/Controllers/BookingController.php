<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Supplier;
use App\Booking;
use App\Order;
use App\Article;
use App\OrderArticle;
use App\BookingOrder;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        //Sätt data som ska postas
        $data = $request->all();
        $user = Auth::user();
        $data['reference_number'] = strtr(base64_encode(openssl_random_pseudo_bytes(4)), "+/=", "XXX");
        $data['supplier'] = Supplier::findOrFail($user->supplier_id);


        $pdf = $request->file('pdf');
        // return dd($pdf);
        $storagePath = 'pdf';
        $extension = $pdf->getClientOriginalExtension();
        $pdfName = $pdf->getClientOriginalName() . '.' . $extension;
        // $pdf->move(base_path() . '/public/pdf/', $pdfName);
        // $pdf->move(public_path() . '/public/pdf/', $pdfName);
        $pdf->move($storagePath, $pdfName);
        $pdfUrl = '/pdf/' . $pdfName;

        // return dd($pdf);

        //Data för bookings
        $booking = [
            'date' => $data['date'],
            'reference_number' => $data['reference_number'],
            'supplier_id' => $data['supplier']['id'],
            'pdf_url' => $pdfUrl
        ];

        //Posta data för bookings
        $createdBooking = Booking::create($booking);


        //Posta data för orders och articles
        foreach ($data['orders'] as $orderData) {
            // Sätt total_weight
            $totalWeight = 0;
            //Data för orders
            $order = [
                'order_number' => $orderData['ordernummer'],
                'total_weight' => $totalWeight
            ];

            $createdOrder = Order::create($order);

            //Posta data för relation mellan order och article
            $bookingOrder = [
                'booking_id' => $createdBooking->id,
                'order_id' => $createdOrder->id
            ];

            BookingOrder::create($bookingOrder);

            //Posta data för articles
            foreach ($orderData['articles'] as $articleNumber => $articleData) {
                //Data för articles
                $article = [
                    'article_number' => $articleNumber,
                    'weight' => $articleData['weight'],
                    'lenght' => $articleData['lenght'],
                    'position' => $articleData['position']
                ];

                $createdArticle = Article::create($article);

                //Posta data för relation mellan order och article
                $orderArticle = [
                    'order_id' => $createdOrder->id,
                    'article_id' => $createdArticle->id
                ];

                OrderArticle::create($orderArticle);

                // Addera till total_weight
                $intWeight = intval($articleData['weight']);
                $totalWeight += $intWeight;
            }

            $createdOrder['total_weight'] = $totalWeight;
            $createdOrder->save();
        }
    }
}
