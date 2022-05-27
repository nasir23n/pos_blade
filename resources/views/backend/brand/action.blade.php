<div class='btn-group btn-group-sm'>
    <button class="edit badge text-bg-yellow-500" link="{{ route('admin.brands.edit', $brand->id) }}"><i class="fa fa-pen"></i></button>

    <form action="{{ route('admin.brands.destroy', $brand->id) }}" method="post" onsubmit="return confirm('Are you sure?')">
        <button type="submit"><i class="fa fa-trash"></i></button>
    </form>
</div>