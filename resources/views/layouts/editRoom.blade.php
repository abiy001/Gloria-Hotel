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

    <div>
            <h1>{{ $room->room_number }}</h1>
    </div>


     <form method="POST" action="/room/edit/{{ $room->id }}" enctype="multipart/form-data">
        @csrf

        @method('put')
        <div>

            <div>
                <label>nomerKamar</label>
                <input type="number" value="{{ $room->room_number }}" name="room_number" id="">
            </div>
            
            <div>
                <label>hargapermalam</label>
                <input type="number" value="{{ $room->price_per_day }}" name="price_per_day" id="">
            </div>
            
            <div>
                <label>tipeKamar</label>
                <input type="text" value="{{ $room->room_type }}" name="room_type" id="">
            </div>

            <div>
                <label>hotel name</label>
                <select name="room_status" value="{{ $room->room_status }}"  id="">
                    <option value="available">available</option>
                    <option value="not available">not available</option>
                </select>
            </div>
            
            <div>
                <label>desc</label>
                <input type="text" value="{{ $room->room_description }}" name="room_description" id="">
            </div>
            
            <div>
                <label>image</label>
                <img src="{{ url($room->room_image) }}" alt="">
                {{-- <input type="text" value="{{ $room->room_image }}" name="room_image" hidden id=""> --}}
                <input  type="file" name="room_image"  value="{{ $room->room_image }}"  id="">
            </div>
            
            <button type="submit">submit</button>
        </div>
    </form>
   

    </body>
    </html>