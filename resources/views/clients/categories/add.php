<h1>Thêm chuyên mục</h1>
<form method="post" action="<?php echo route('categories.add') ?>">
    <div>
        <input type="text" name="category_name" id="" placeholder="Tên chuyên mục"
        value="<?php echo old('category_name') ?>">
    </div>
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" id="">
    <button type="submit">Thêm chuyên mục</button>
</form>