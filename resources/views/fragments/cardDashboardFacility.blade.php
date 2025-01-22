<div class="col-sm-4 grid-cols-4 mb-3 mb-sm-0 min-h-full">
    <div class="card">
        <img src="{{ url($img)  }}" alt="" class="w-full h-[250px]">
        <div class="card-body">
            <h5 class="card-title ">{{ $name }}</h5>

            <form id="form_delete" action="{{ route('facility.delete',  $id ) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit"></button>
              </form>
          <a href="" onclick="confirmDelete(event)"  class="btn btn-danger btn-sm px-3 py-1">
            <i class="bi bi-trash"></i>
  
                    </a>
            <a href="{{ route('editFacility.dashboard.view', $id) }}" class="btn btn-primary btn-sm px-3 py-1">
                <i class="bi bi-pencil"></i>
            </a>
        </div>
    </div>
</div>