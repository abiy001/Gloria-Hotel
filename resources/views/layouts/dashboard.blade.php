<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Document</title>
</head>
<body>
    @component('fragments.toast')
     
    @endcomponent

    <h1>dashboard</h1>
   
    <form method="POST" action="{{ route('room.submit') }}" enctype="multipart/form-data">
        @csrf

        <div>

            <div>
                <label>nomerKamar</label>
                <input type="number" name="room_number" id="">
            </div>
            
            <div>
                <label>hargapermalam</label>
                <input type="number" name="price_per_day" id="">
            </div>
            
            <div>
                <label>tipeKamar</label>
                <input type="text" name="room_type" id="">
            </div>
            
            <div>
                <label>desc</label>
                <input type="text" name="room_description" id="">
            </div>
            
            <div>
                <label>image</label>
                <input type="file" name="room_image" id="">
            </div>
            
            <button type="submit">submit</button>
        </div>
    </form>

    {{-- <form method="POST" action="{{ route('facility.submit') }}" enctype="multipart/form-data">
        @csrf

        <div>

            <div>
                <label>hotel name</label>
                <input type="text" name="facility_name" id="">
            </div>
        
            
            <div>
                <label>desc</label>
                <input type="text" name="facility_description" id="">
            </div>

            
            <div>
                <label>image</label>
                <input type="file" name="facility_image" id="">
            </div>
            
            <button type="submit">submit</button>
        </div>
    </form> --}}

    {{-- <form method="POST" action="{{ route('hotel.submit') }}" enctype="multipart/form-data">
        @csrf

        <div>

            <div>
                <label>hotel name</label>
                <input type="text" name="hotel_name" id="">
            </div>
        
            
            <div>
                <label>desc</label>
                <input type="text" name="hotel_description" id="">
            </div>

            <div>
                <label>city</label>
                <input type="text" name="city" id="">
            </div>
            
            <div>
                <label>image</label>
                <input type="file" name="hotel_image" id="">
            </div>
            
            <button type="submit">submit</button>
        </div>
    </form> --}}
    </body>
    </html>