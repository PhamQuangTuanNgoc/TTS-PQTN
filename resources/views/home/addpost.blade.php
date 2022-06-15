
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm bài viết
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form  action="{{url('post')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên bài viết</label>
                                <input type="text" name="title"  class="form-control" id="exampleInputEmail1" placeholder="Tenn danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả bài viết</label>
                                <textarea name="content" style="resize: none" rows="8" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea>
                            </div>
                            <button type="submit" class="btn btn-info">Thêm mới</button>
                        </form>
                    </div>
                </div>
            </section>

        </div>
    </div>
