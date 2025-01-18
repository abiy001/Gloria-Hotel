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
    dashboard
   
    <form method="POST" action="{{ route('room.submit') }}">
        @csrf

        <div>

            <div>
                <label for="">nomerKamar</label>
                <input type="number" name="room_number" id="">
            </div>
            
            <div>
                <label for="">hargapermalam</label>
                <input type="number" name="price_per_day" id="">
            </div>
            
            <div>
                <label for="">tipeKamar</label>
                <input type="text" name="room_type" id="">
            </div>
            
            <div>
                <label for="">desc</label>
                <input type="text" name="room_description" id="">
            </div>
            
            <div>
                <label for="">image</label>
                <input type="file" name="room_image" id="">
            </div>
            
            <button type="submit">submit</button>
        </div>
    </form>
    </body>
    </html>