<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Hotel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body class="flex items-center justify-center min-h-screen " style=" background-image: url(hotel.jpg); background-size: cover;  ">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-xl font-bold mb-4">Pembayaran Hotel</h2>
        <p class="mb-4">Rincian Pembayaran</p>
        
        <form action="{{ route('reservation.payment' , $reservation -> id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')
            <p class="mb-2">Silakan pilih metode pembayaran:</p>
            
            <div class="flex items-center space-x-2">
                <input type="radio" id="credit-card" name="payment" value="credit-card" required class="w-4 h-4" />
                <i class="ph ph-credit-card text-xl"></i>
                <label for="credit-card" class="text-gray-700">Kartu Kredit/Debit</label>
            </div>
            
            <div class="flex items-center space-x-2">
                <input type="radio" id="bank-transfer" name="payment" value="bank-transfer" class="w-4 h-4" />
                <i class="ph ph-bank text-xl"></i>
                <label for="bank-transfer" class="text-gray-700">Transfer Bank</label>
            </div>
            
            <div class="flex items-center space-x-2">
                <input type="radio" id="ewallet" name="payment" value="ewallet" class="w-4 h-4" />
                <i class="ph ph-wallet text-xl"></i>
                <label for="ewallet" class="text-gray-700">E-Wallet (Gopay, OVO, Dana)</label>
            </div>
            
            <div class="mt-4 p-2 bg-gray-200 rounded-lg text-gray-700 font-bold text-center">
                Total yang harus dibayar: <span id="total-amount">{{ number_format( date_diff(date_create($reservation -> checkin_date), date_create($reservation -> checkout_date)) ->format('%d') *   $reservation  -> roomtype -> price_per_day, 0 , ',' , '.')  }}</span> IDR
            </div>
            
            <button type="submit" id="buttonPayment" class="w-full bg-gray-500 text-white py-2 rounded-lg hover:bg-gray-600">Bayar Sekarang</button>
        </form>
    </div>

    <script>
        const kartukredit = document.getElementById('credit-card');
        const banktransfer = document.getElementById('bank-transfer');
        const ewallet = document.getElementById('ewallet');
        const buttonPayment = document.getElementById('buttonPayment');

        
        function updateTotal() {
            let amount = document.getElementById('amount').value;
            document.getElementById('total-amount').innerText = amount ? parseInt(amount).toLocaleString('id-ID') : 0;
        }
        
        // if(ewallet.checked == false && banktransfer.checked == false && kartukredit.checked == false) {
        //     buttonPayment.enabled = false;
        //     buttonPayment.disabled = true;   
        // } else {
        //     buttonPayment.enabled = true;
        //     buttonPayment.disabled = false;
        // }
    </script>
</body>
</html>