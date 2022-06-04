
<form action="{{ isset($expence) ? route('admin.expence.update', $expence->id) : route('admin.expence.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <div class="row my-3">
            <div class="col-md-{{ request()->ajax() ? '12' : '6' }}">
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" name="date" class="form-control" id="date" value="{{ isset($expence) ? $expence->date : '' }}">
                </div>
                <div class="mb-3">
                    <label for="expence_category_id" class="form-label">Expence Category</label>
                    <select name="expence_category_id" class="form-select" id="expence_category_id">
                        @foreach ($expence_categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="number" name="amount" class="form-control" id="amount" placeholder="Amount" value="{{ isset($expence) ? $expence->amount : '' }}">
                </div>
                <div class="mb-3">
                    <label for="note" class="form-label">Note</label>
                    <textarea name="note" class="form-control" id="note" rows="2">{{ isset($expence) ? $expence->note : '' }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">
                    @isset($expence)
                    Update Expence
                    @else
                    Save Expence
                    @endisset
                </button>
            </div>
        </div>
    </div>
</form>
