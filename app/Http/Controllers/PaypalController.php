<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaypalController extends Controller
{
    public function processTransaction(Request $request)
    {
        $clientId = env('PAYPAL_SANDBOX_CLIENT_ID');
        $clientSecret = env('PAYPAL_SANDBOX_CLIENT_SECRET');
        $authUrl = 'https://api.sandbox.paypal.com/v1/oauth2/token';
        $orderUrl = 'https://api.sandbox.paypal.com/v2/checkout/orders';

        // Get PayPal access token
        $response = Http::asForm()->withBasicAuth($clientId, $clientSecret)->post($authUrl, [
            'grant_type' => 'client_credentials'
        ]);

        $paypalToken = $response->json()['access_token'];

        // Create PayPal order
        $response = Http::withToken($paypalToken)->post($orderUrl, [
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('successTransaction'),
                "cancel_url" => route('cancelTransaction'),
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $request->amount
                    ],
                    "invoice_id" => $request->invoice, // Unique invoice number
                    "custom_id" => $request->invoice // Custom field to identify the payment
                ]
            ]
        ]);

        $responseBody = $response->json();

        if (isset($responseBody['id']) && $responseBody['id'] != null) {
            foreach ($responseBody['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }
            return redirect('/#section_6')->with('error-paypal', 'Something went wrong.');
        } else {
            return redirect('/#section_6')->with('error-paypal', $response['message'] ?? 'Something went wrong.');
        }
    }

    /**
     * success transaction.
     *
     * @return RedirectResponse
     */
    public function successTransaction(Request $request): RedirectResponse
    {
        return redirect('/#section_6')->with(['message-paypal' => "Transaction Successfully"]);
    }

    /**
     * cancel transaction.
     *
     * @return RedirectResponse
     */
    public function cancelTransaction(Request $request): RedirectResponse
    {
        return redirect('/#section_6')->with('error-paypal', $response['message'] ?? 'You have canceled the transaction.');
    }
}