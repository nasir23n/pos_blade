
<form action="{{ isset($expenceCategory) ? route('admin.expence_category.update', $expenceCategory->id) : route('admin.expence_category.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <div class="row my-3">
            <div class="col-md-{{ request()->ajax() ? '12' : '6' }}">
                <div class="mb-3">
                    <label for="name" class="form-label">Category name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Expence Category Name" value="{{ isset($expenceCategory) ? $expenceCategory->name : '' }}">
                </div>
                <div class="mb-3">
                    <label for="details" class="form-label">Category Details</label>
                    <input type="text" name="details" class="form-control" id="details" placeholder="Expence Category Details" value="{{ isset($expenceCategory) ? $expenceCategory->details : '' }}">
                </div>
                <button type="submit" class="btn btn-primary">
                    @isset($expenceCategory)
                    Update Expence Category
                    @else
                    Save Expence Category
                    @endisset
                </button>
            </div>
        </div>
    </div>
</form>