<form action="{{ url()->current() }}">
    <div class="mb-3">
        <label for="categories" class="form-label fw-semibold text-danger">Categories</label>
        <select class="form-select form-select-sm" name="categories[]" id="categories">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ in_array($category->id, $f_categories) ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="sort" class="form-label fw-semibold text-danger">Sort</label>
        <select class="form-select form-select-sm" name="sort" id="sort">
            <option value="new-to-old" {{ 'new-to-old' == $f_sort ? 'selected' : '' }}>NewToOld</option>
            <option value="old-to-new" {{ 'old-to-new' == $f_sort ? 'selected' : '' }}>OldToNew</option>
            <option value="low-to-high" {{ 'low-to-high' == $f_sort ? 'selected' : '' }}>LowToHigh</option>
            <option value="high-to-low" {{ 'high-to-low' == $f_sort ? 'selected' : '' }}>HighToLow</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="perPage" class="form-label fw-semibold text-danger">Perpage</label>
        <select class="form-select form-select-sm" name="perPage" id="perPage">
            @foreach([15, 30, 60, 120] as $perPage)
                <option value="{{ $perPage }}" {{ $perPage == $f_perPage ? 'selected' : '' }}>{{ $perPage }}</option>
            @endforeach
        </select>
    </div>
    <div class="row g-3">
        <div class="col">
            <a href="{{ url()->current() }}" class="btn btn-secondary btn-sm w-100">
                Clear
            </a>
        </div>
        <div class="col">
            <button type="submit" class="btn btn-danger btn-sm w-100">
                <i class="bi-funnel"></i> Filter
            </button>
        </div>
    </div>
</form>